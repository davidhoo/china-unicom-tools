<?php
/**
 * Created by PhpStorm.
 * User: hubo3
 * Date: 2017/11/20
 * Time: 下午4:12
 */

namespace Symfony\Component\Console\Command;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
use Symfony\Component\Console\Helper\TableCell;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableStyle;


class AnalyticCommand extends Command
{
    private $ipTitle = '访问IP';

    private $ipColumn = 'Q';

    private $timeBeginTitle = '上网开始';

    private $timeBeginColumn = 'I';

    private $uaTitle = 'User Agent';

    private $uaColumn = 'N';

    private $portTitle = '目的端口';

    private $portColumn = 'U';

    private $urlTitle = '访问网址';

    private $urlColumn = 'X';

    private $trafficTitle = '总流量(kb)';

    private $trafficColum = 'G';

    private $fileName;

    private $sheet;

    private $highestRow;

    private $regex;

    private $ipListFile;

    private $urlListFile;

    private $ipWhitelist;

    private $urlWhitelist = [];

    private $totalTrafficIn;

    private $totalTrafficOut;

    private $totalTraffic;

    private $data = ['trafficIn' =>[], 'trafficOut' =>[]];

    private $topIn = 5;

    private $topOut = 10;

    protected function configure()
    {
        $this->setName('ana')
            ->setAliases(['analytic', 'analytics'])
            ->addOption('ip', 'i', InputOption::VALUE_OPTIONAL, 'The full path for ip white list file', './weibo.ip')
            ->addOption('file', 'f', InputOption::VALUE_REQUIRED, 'File name')
            ->addOption('url', 'u', InputOption::VALUE_OPTIONAL, 'The full path for url white list file', './weibo.url')
            ->addOption('regex', 'r', InputOption::VALUE_OPTIONAL, 'The pattern for start time')
            ->addOption('sheetname', 's', InputOption::VALUE_OPTIONAL, 'Worksheet\'s name', '移动用户上网记录详单')
            ->setDescription('Analytic the chinaunicom access details\'s file');

        self::addUsage('-f file [-i ipfile] [-u urlfile] [-r regex pattern]');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->fileName = $input->getOption('file');
        $this->ipListFile = $input->getOption('ip');
        $this->urlListFile = $input->getOption('url');
        $this->regex = $input->getOption('regex');
        $sheetName = $input->getOption('sheetname');

        $reader = IOFactory::createReaderForFile($this->fileName);
        $reader->setLoadSheetsOnly($sheetName);
        $spreadsheet = $reader->load($this->fileName);
        $this->sheet = $spreadsheet->getActiveSheet();

        $this->init();

        $filter = new MyReadFilter();
        $filter->columns = [$this->urlColumn, $this->ipColumn, $this->portColumn, $this->timeBeginColumn, $this->uaColumn, $this->trafficColum];
        $reader->setReadFilter($filter);
        $spreadsheet = $reader->load($this->fileName);
        $this->sheet = $spreadsheet->getActiveSheet();
        // analytic

        $totalTraffic = 0;
        for ($i = 0; $i <= $this->highestRow; $i++) {
            // 不符合正则的，一律跳过
            if (!$this->matchRegex($i)) {
                continue;
            }

            $currentIP = $this->sheet->getCell($this->ipColumn . $i)->getValue();
            $currentUA = $this->sheet->getCell($this->uaColumn . $i)->getValue();
            $currentUrl = $this->sheet->getCell($this->urlColumn . $i)->getValue();
            $currentTraffic = $this->sheet->getCell($this->trafficColum . $i)->getValue();

            $this->totalTraffic += $currentTraffic;

            if ($this->inWhitelist($i)) {
                $this->totalTrafficIn += $currentTraffic;
                $this->data['trafficIn'][$currentIP]['traffic'] += $currentTraffic;
                $this->data['trafficIn'][$currentIP]['ua'][] = $currentUA;
                $this->data['trafficIn'][$currentIP]['url'][] = $currentUrl;
            } else {
                $this->totalTrafficOut += $currentTraffic;
                $this->data['trafficOut'][$currentIP]['traffic'] += $currentTraffic;
                $this->data['trafficOut'][$currentIP]['ua'][] = $currentUA;
                $this->data['trafficOut'][$currentIP]['url'][] = $currentUrl;
            }
        }

        uasort($this->data['trafficIn'], function($a, $b) {
            if ($a['traffic'] == $b['traffic']) {
                return 0;
            }

            return $a['traffic'] < $b['traffic'] ? 1 : -1;
        });

        uasort($this->data['trafficOut'], function($a, $b) {
            if ($a['traffic'] == $b['traffic']) {
                return 0;
            }

            return $a['traffic'] < $b['traffic'] ? 1 : -1;
        });

        $table = new Table($output);
        $table->setHeaders([[new TableCell('Stat', ['colspan' => 4])], ['Out sum', 'In sum', 'Total', 'Out percent']])
            ->setRows([
                [
                    $this->renderTraffic($this->totalTrafficOut),
                    $this->renderTraffic($this->totalTrafficIn),
                    $this->renderTraffic($this->totalTraffic),
                    $this->renderPercent($this->totalTrafficOut, $this->totalTraffic)
                ],
            ])
            ->render();

        $table = new Table($output);

        $table->setHeaders([
                [new TableCell('Top 5 in the white list', ['colspan' => 5])],
                ['IP', 'Traffic', 'Percent', 'UA', 'Url'],
            ]);

        $trafficInIndex = 0;
        foreach($this->data['trafficIn'] as $ip => $d) {
            if((++$trafficInIndex) > $this->topIn) {
                break;
            }
            $table->addRow([
                $ip,
                $this->renderTraffic($d['traffic']),
                $this->renderPercent($d['traffic'], $this->totalTraffic),
                $this->renderArray($d['ua']),
                $this->renderArray($d['url'])
            ]);
        }

        $table->render();

        $table = new Table($output);

        $table->setHeaders([
            [new TableCell('Top 10 out the white list', ['colspan' => 5])],
            ['IP', 'Traffic', 'Percent', 'UA', 'Url'],
        ]);

        $trafficOutIndex = 0;
        foreach($this->data['trafficOut'] as $ip => $d) {
            if ((++$trafficOutIndex) > $this->topOut) {
                break;
            }
            $table->addRow([
                $ip,
                $this->renderTraffic($d['traffic']),
                $this->renderPercent($d['traffic'], $this->totalTraffic),
                $this->renderArray($d['ua']),
                $this->renderArray($d['url'])
            ]);
        }

        $table->render();
    }

    private function renderArray($arr) {
        return wordwrap(join(',', array_unique($arr)), 75);
    }

    private function inWhitelist($index)
    {
        if ($this->ipListFile && in_array($this->sheet->getCell($this->ipColumn . $index)->getValue(), $this->ipWhitelist)) {
            return true;
        }

        if ($this->urlWhitelist) {
            $patten = '/.*' . implode('|', $this->urlWhitelist) . '.*/';
            if (preg_match($patten, $this->sheet->getCell($this->urlColumn . $index)->getValue())) {
                return true;
            }
        }

        return false;
    }

    private function matchRegex($index)
    {
        if ($this->regex) {
            return preg_match('/' . $this->regex . '/', $this->sheet->getCell($this->timeBeginColumn . $index));
        }

        return true;
    }

    private function init()
    {
        if ($this->ipListFile && file_exists($this->ipListFile)) {
            $this->ipWhitelist = file($this->ipListFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }

        if ($this->urlListFile && file_exists($this->urlListFile)) {
            $this->urlWhitelist = file($this->urlListFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }

        $this->highestRow = $this->sheet->getHighestRow();
        $rows = $this->sheet->getRowIterator(1, 1);
        foreach ($rows as $row) {
            foreach ($row->getCellIterator() as $cell) {
                if ($cell->getValue() == $this->ipTitle) {
                    $this->ipColumn = $cell->getColumn();
                }

                if ($cell->getValue() == $this->portTitle) {
                    $this->portColumn = $cell->getColumn();
                }

                if ($cell->getValue() == $this->timeBeginTitle) {
                    $this->timeBeginColumn = $cell->getColumn();
                }

                if ($cell->getValue() == $this->uaTitle) {
                    $this->uaColumn = $cell->getColumn();
                }

                if ($cell->getValue() == $this->urlTitle) {
                    $this->urlColumn = $cell->getColumn();
                }

                if ($cell->getValue() == $this->trafficTitle) {
                    $this->trafficColum = $cell->getColumn();
                }
            }
        }
    }

    private function renderPercent($cur, $total) {
        if ($cur && $total) {
            return str_pad(round(($cur + 0.0) * 100 / $total, 2) . '%', 6, ' ', STR_PAD_LEFT);
        } else {
            return str_pad('--', 6, ' ', STR_PAD_LEFT);
        }
    }

    private function renderTraffic($num) {
        if ($num > 1024) {
            return str_pad(round($num / 1024, 2) . ' mb', 10, ' ', STR_PAD_LEFT);
        } else {
            return str_pad($num . ' kb', 10, ' ', STR_PAD_LEFT);
        }
    }

}

class MyReadFilter implements IReadFilter
{
    public $columns = [];

    public function readCell($column, $row, $worksheetName = '')
    {
        // TODO: Implement readCell() method.

        if ($this->columns && in_array($column, $this->columns)) {
            return true;
        }

        return false;
    }
}