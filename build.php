<?php
/**
 * Created by PhpStorm.
 * User: hubo3
 * Date: 2017/11/23
 * Time: 上午10:02
 */

$phar = new Phar(__DIR__ . DIRECTORY_SEPARATOR . 'bin/chut.phar');

//从src目录构建phar包
$phar->buildFromDirectory('.', "/.php/");
$phar->addFile('Application.php');
$phar->addFile('chut');
//$phar->delete('build.php');
//$phar->delete('.git');
//$phar->delete('.DS_Store');
//$phar->delete('.idea');

//定义默认执行入口为index.php
$defStub = Phar::createDefaultStub('chut');

//设置php解释器shell头，让phar可以自己执行
$phar->setStub("#!/usr/bin/env php\n$defStub");

//用bzip2库压缩phar包里的文件（此步要求PHP安装了zlib和bz2扩展，可以跳过）
$phar->compressFiles(Phar::BZ2);

//将phar包改名，去掉phar扩展名
rename('bin/chut.phar', 'bin/chut');

//授予phar包可执行权限
chmod('bin/chut', 0755);