China unicom tools
=================

The China unicom tools.

Requirement
---------
* PHP 7+
* phpoffice/phpspreadsheet
* symfony/symfony
* Composer [https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx]

How to install PHP 7 on CentOS 6
---------

```bash
# yum update -y

# rpm -ivh https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
Retrieving https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
warning: /var/tmp/rpm-tmp.fKwh9n: Header V3 RSA/SHA256 Signature, key ID 0608b895: NOKEY
Preparing...                ########################################### [100%]
   1:epel-release           ########################################### [100%]
   
# rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
Retrieving http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
warning: /var/tmp/rpm-tmp.CUMvpH: Header V4 DSA/SHA1 Signature, key ID 00f97f56: NOKEY
Preparing...                ########################################### [100%]
   1:remi-release           ########################################### [100%]

# ls /etc/yum.repos.d/remi*
/etc/yum.repos.d/remi-php54.repo  /etc/yum.repos.d/remi-php70.repo  /etc/yum.repos.d/remi-php71.repo  /etc/yum.repos.d/remi-php72.repo  /etc/yum.repos.d/remi-safe.repo  /etc/yum.repos.d/remi.repo
[root@7ee3f156f212 /]# ls -l /etc/yum.repos.d/remi*
-rw-r--r-- 1 root root  457 Jun 30 12:13 /etc/yum.repos.d/remi-php54.repo
-rw-r--r-- 1 root root 1316 Jun 30 12:13 /etc/yum.repos.d/remi-php70.repo
-rw-r--r-- 1 root root 1316 Jun 30 12:13 /etc/yum.repos.d/remi-php71.repo
-rw-r--r-- 1 root root 1316 Jun 30 12:13 /etc/yum.repos.d/remi-php72.repo
-rw-r--r-- 1 root root  751 Jun 30 12:13 /etc/yum.repos.d/remi-safe.repo
-rw-r--r-- 1 root root 2609 Jun 30 12:13 /etc/yum.repos.d/remi.repo

# yum remove libzip libzip-devel -y
Loaded plugins: fastestmirror, ovl
Setting up Remove Process
Resolving Dependencies
--> Running transaction check
---> Package libzip.x86_64 0:0.9-3.1.el6 will be erased
---> Package libzip-devel.x86_64 0:0.9-3.1.el6 will be erased
--> Finished Dependency Resolution

Dependencies Resolved

=====================================================================================================================================================================================
 Package                                        Arch                                     Version                                       Repository                               Size
=====================================================================================================================================================================================
Removing:
 libzip                                         x86_64                                   0.9-3.1.el6                                   @base                                    78 k
 libzip-devel                                   x86_64                                   0.9-3.1.el6                                   @base                                    61 k

Transaction Summary
=====================================================================================================================================================================================
Remove        2 Package(s)

Installed size: 139 k
Downloading Packages:
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
  Erasing    : libzip-devel-0.9-3.1.el6.x86_64                                                                                                                                   1/2
  Erasing    : libzip-0.9-3.1.el6.x86_64                                                                                                                                         2/2
  Verifying  : libzip-0.9-3.1.el6.x86_64                                                                                                                                         1/2
  Verifying  : libzip-devel-0.9-3.1.el6.x86_64                                                                                                                                   2/2

Removed:
  libzip.x86_64 0:0.9-3.1.el6                                                            libzip-devel.x86_64 0:0.9-3.1.el6

Complete!

# yum --enablerep=remi install libzip-last libzip-last-devel -y
Loaded plugins: fastestmirror, ovl
Setting up Install Process
Loading mirror speeds from cached hostfile
 * base: mirrors.aliyun.com
 * epel: kartolo.sby.datautama.net.id
 * extras: mirror.bit.edu.cn
 * remi: mirror.bebout.net
 * remi-safe: mirror.bebout.net
 * updates: mirrors.aliyun.com
remi                                                                                                                                                          | 2.9 kB     00:00
remi/primary_db                                                                                                                                               | 2.0 MB     00:55
Package libzip-last-1.1.3-1.el6.remi.x86_64 already installed and latest version
Resolving Dependencies
--> Running transaction check
---> Package libzip-last-devel.x86_64 0:1.1.3-1.el6.remi will be installed
--> Finished Dependency Resolution

Dependencies Resolved

=====================================================================================================================================================================================
 Package                                          Arch                                  Version                                            Repository                           Size
=====================================================================================================================================================================================
Installing:
 libzip-last-devel                                x86_64                                1.1.3-1.el6.remi                                   remi                                 95 k

Transaction Summary
=====================================================================================================================================================================================
Install       1 Package(s)

Total download size: 95 k
Installed size: 98 k
Downloading Packages:
libzip-last-devel-1.1.3-1.el6.remi.x86_64.rpm                                                                                                                 |  95 kB     00:02
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
  Installing : libzip-last-devel-1.1.3-1.el6.remi.x86_64                                                                                                                         1/1
  Verifying  : libzip-last-devel-1.1.3-1.el6.remi.x86_64                                                                                                                         1/1

Installed:
  libzip-last-devel.x86_64 0:1.1.3-1.el6.remi

Complete!

# yum --enablerep=remi-php70 install cc gcc php php-pear php-devel php-pecl -y
Loaded plugins: fastestmirror, ovl
Setting up Install Process
Loading mirror speeds from cached hostfile
epel/metalink                                                                                                                                                 | 5.4 kB     00:00
 * base: mirrors.aliyun.com
 * epel: kartolo.sby.datautama.net.id
 * extras: mirror.bit.edu.cn
 * remi-php70: remi.mirror.karneval.cz
 * remi-safe: remi.mirror.karneval.cz
 * updates: mirrors.aliyun.com
epel                                                                                                                                                          | 4.7 kB     00:00
epel/primary_db                                                                                                                                               | 6.0 MB     00:27
remi-php70                                                                                                                                                    | 2.9 kB     00:00
remi-php70/primary_db                                                                                                                                         | 178 kB     00:00
remi-safe                                                                                                                                                     | 2.9 kB     00:00
remi-safe/primary_db                                                                                                                                          | 917 kB     00:01
No package libzip-last-devel available.
No package php-pecl available.
Resolving Dependencies
--> Running transaction check
---> Package libzip-last.x86_64 0:1.1.3-1.el6.remi will be installed
---> Package php.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: php-common(x86-64) = 7.0.26-1.el6.remi for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: php-cli(x86-64) = 7.0.26-1.el6.remi for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: httpd-mmn = 20051115 for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: httpd for package: php-7.0.26-1.el6.remi.x86_64
---> Package php-devel.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: automake for package: php-devel-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: autoconf for package: php-devel-7.0.26-1.el6.remi.x86_64
---> Package php-pear.noarch 1:1.10.5-2.el6.remi will be installed
--> Processing Dependency: php-xml for package: 1:php-pear-1.10.5-2.el6.remi.noarch
--> Processing Dependency: php-posix for package: 1:php-pear-1.10.5-2.el6.remi.noarch
--> Running transaction check
---> Package autoconf.noarch 0:2.63-5.1.el6 will be installed
--> Processing Dependency: perl >= 5.005_03 for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl >= 5.005 for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl >= 5.000 for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: m4 >= 1.4.7 for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(vars) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(strict) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Text::ParseWords) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(POSIX) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(IO::File) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Getopt::Long) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::stat) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Spec) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Path) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Find) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Copy) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Compare) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(File::Basename) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Exporter) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Errno) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(DynaLoader) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Data::Dumper) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Cwd) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: perl(Carp) for package: autoconf-2.63-5.1.el6.noarch
--> Processing Dependency: /usr/bin/perl for package: autoconf-2.63-5.1.el6.noarch
---> Package automake.noarch 0:1.11.1-4.el6 will be installed
---> Package httpd.x86_64 0:2.2.15-60.el6.centos.6 will be installed
--> Processing Dependency: httpd-tools = 2.2.15-60.el6.centos.6 for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: system-logos >= 7.92.1-1 for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: initscripts >= 8.36 for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: apr-util-ldap for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: /etc/mime.types for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: libaprutil-1.so.0()(64bit) for package: httpd-2.2.15-60.el6.centos.6.x86_64
--> Processing Dependency: libapr-1.so.0()(64bit) for package: httpd-2.2.15-60.el6.centos.6.x86_64
---> Package php-cli.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: libedit.so.0()(64bit) for package: php-cli-7.0.26-1.el6.remi.x86_64
---> Package php-common.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: php-json(x86-64) = 7.0.26-1.el6.remi for package: php-common-7.0.26-1.el6.remi.x86_64
---> Package php-process.x86_64 0:7.0.26-1.el6.remi will be installed
---> Package php-xml.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: libxslt.so.1(LIBXML2_1.0.24)(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libxslt.so.1(LIBXML2_1.0.22)(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libxslt.so.1(LIBXML2_1.0.18)(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libxslt.so.1(LIBXML2_1.0.13)(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libxslt.so.1(LIBXML2_1.0.11)(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libxslt.so.1()(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: libexslt.so.0()(64bit) for package: php-xml-7.0.26-1.el6.remi.x86_64
--> Running transaction check
---> Package apr.x86_64 0:1.3.9-5.el6_2 will be installed
---> Package apr-util.x86_64 0:1.3.9-3.el6_0.1 will be installed
---> Package apr-util-ldap.x86_64 0:1.3.9-3.el6_0.1 will be installed
---> Package httpd-tools.x86_64 0:2.2.15-60.el6.centos.6 will be installed
---> Package initscripts.x86_64 0:9.03.58-1.el6.centos.2 will be installed
--> Processing Dependency: util-linux-ng >= 2.16 for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: upstart >= 0.6.5-11 for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: udev >= 125-1 for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: sysvinit-tools >= 2.87-6 for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: plymouth for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: /sbin/pidof for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: /sbin/ip for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: /sbin/blkid for package: initscripts-9.03.58-1.el6.centos.2.x86_64
--> Processing Dependency: /sbin/arping for package: initscripts-9.03.58-1.el6.centos.2.x86_64
---> Package libedit.x86_64 0:2.11-4.20080712cvs.1.el6 will be installed
---> Package libxslt.x86_64 0:1.1.26-2.el6_3.1 will be installed
---> Package m4.x86_64 0:1.4.13-5.el6 will be installed
---> Package mailcap.noarch 0:2.1.31-2.el6 will be installed
---> Package perl.x86_64 4:5.10.1-144.el6 will be installed
--> Processing Dependency: perl-libs = 4:5.10.1-144.el6 for package: 4:perl-5.10.1-144.el6.x86_64
--> Processing Dependency: perl-libs for package: 4:perl-5.10.1-144.el6.x86_64
--> Processing Dependency: perl(version) for package: 4:perl-5.10.1-144.el6.x86_64
--> Processing Dependency: perl(Pod::Simple) for package: 4:perl-5.10.1-144.el6.x86_64
--> Processing Dependency: perl(Module::Pluggable) for package: 4:perl-5.10.1-144.el6.x86_64
--> Processing Dependency: libperl.so()(64bit) for package: 4:perl-5.10.1-144.el6.x86_64
---> Package php-json.x86_64 0:7.0.26-1.el6.remi will be installed
---> Package redhat-logos.noarch 0:60.0.14-12.el6.centos will be installed
--> Running transaction check
---> Package iproute.x86_64 0:2.6.32-54.el6 will be installed
--> Processing Dependency: iptables >= 1.4.5 for package: iproute-2.6.32-54.el6.x86_64
--> Processing Dependency: libxtables.so.4()(64bit) for package: iproute-2.6.32-54.el6.x86_64
---> Package iputils.x86_64 0:20071127-24.el6 will be installed
---> Package perl-Module-Pluggable.x86_64 1:3.90-144.el6 will be installed
---> Package perl-Pod-Simple.x86_64 1:3.13-144.el6 will be installed
--> Processing Dependency: perl(Pod::Escapes) >= 1.04 for package: 1:perl-Pod-Simple-3.13-144.el6.x86_64
---> Package perl-libs.x86_64 4:5.10.1-144.el6 will be installed
---> Package perl-version.x86_64 3:0.77-144.el6 will be installed
---> Package plymouth.x86_64 0:0.8.3-29.el6.centos will be installed
--> Processing Dependency: libdrm_radeon.so.1()(64bit) for package: plymouth-0.8.3-29.el6.centos.x86_64
--> Processing Dependency: libdrm_nouveau.so.1()(64bit) for package: plymouth-0.8.3-29.el6.centos.x86_64
--> Processing Dependency: libdrm_intel.so.1()(64bit) for package: plymouth-0.8.3-29.el6.centos.x86_64
--> Processing Dependency: libdrm.so.2()(64bit) for package: plymouth-0.8.3-29.el6.centos.x86_64
---> Package sysvinit-tools.x86_64 0:2.87-6.dsf.el6 will be installed
---> Package udev.x86_64 0:147-2.73.el6_8.2 will be installed
--> Processing Dependency: hwdata for package: udev-147-2.73.el6_8.2.x86_64
---> Package upstart.x86_64 0:0.6.5-16.el6 will be installed
---> Package util-linux-ng.x86_64 0:2.17.2-12.28.el6_9.1 will be installed
--> Running transaction check
---> Package hwdata.noarch 0:0.233-18.1.el6 will be installed
---> Package iptables.x86_64 0:1.4.7-16.el6 will be installed
--> Processing Dependency: policycoreutils for package: iptables-1.4.7-16.el6.x86_64
---> Package libdrm.x86_64 0:2.4.65-2.el6 will be installed
--> Processing Dependency: libpciaccess.so.0()(64bit) for package: libdrm-2.4.65-2.el6.x86_64
---> Package perl-Pod-Escapes.x86_64 1:1.04-144.el6 will be installed
--> Running transaction check
---> Package libpciaccess.x86_64 0:0.13.4-1.el6 will be installed
---> Package policycoreutils.x86_64 0:2.0.83-30.1.el6_8 will be installed
--> Processing Dependency: libdbus-glib-1.so.2()(64bit) for package: policycoreutils-2.0.83-30.1.el6_8.x86_64
--> Running transaction check
---> Package dbus-glib.x86_64 0:0.86-6.el6 will be installed
--> Finished Dependency Resolution

Dependencies Resolved

=====================================================================================================================================================================================
 Package                                          Arch                              Version                                              Repository                             Size
=====================================================================================================================================================================================
Installing:
 libzip-last                                      x86_64                            1.1.3-1.el6.remi                                     remi-safe                              42 k
 php                                              x86_64                            7.0.26-1.el6.remi                                    remi-php70                            2.7 M
 php-devel                                        x86_64                            7.0.26-1.el6.remi                                    remi-php70                            1.3 M
 php-pear                                         noarch                            1:1.10.5-2.el6.remi                                  remi-php70                            367 k
Installing for dependencies:
 apr                                              x86_64                            1.3.9-5.el6_2                                        base                                  123 k
 apr-util                                         x86_64                            1.3.9-3.el6_0.1                                      base                                   87 k
 apr-util-ldap                                    x86_64                            1.3.9-3.el6_0.1                                      base                                   15 k
 autoconf                                         noarch                            2.63-5.1.el6                                         base                                  781 k
 automake                                         noarch                            1.11.1-4.el6                                         base                                  550 k
 dbus-glib                                        x86_64                            0.86-6.el6                                           base                                  170 k
 httpd                                            x86_64                            2.2.15-60.el6.centos.6                               updates                               836 k
 httpd-tools                                      x86_64                            2.2.15-60.el6.centos.6                               updates                                80 k
 hwdata                                           noarch                            0.233-18.1.el6                                       base                                  1.3 M
 initscripts                                      x86_64                            9.03.58-1.el6.centos.2                               updates                               949 k
 iproute                                          x86_64                            2.6.32-54.el6                                        base                                  389 k
 iptables                                         x86_64                            1.4.7-16.el6                                         base                                  254 k
 iputils                                          x86_64                            20071127-24.el6                                      base                                  121 k
 libdrm                                           x86_64                            2.4.65-2.el6                                         base                                  136 k
 libedit                                          x86_64                            2.11-4.20080712cvs.1.el6                             base                                   74 k
 libpciaccess                                     x86_64                            0.13.4-1.el6                                         base                                   24 k
 libxslt                                          x86_64                            1.1.26-2.el6_3.1                                     base                                  452 k
 m4                                               x86_64                            1.4.13-5.el6                                         base                                  278 k
 mailcap                                          noarch                            2.1.31-2.el6                                         base                                   27 k
 perl                                             x86_64                            4:5.10.1-144.el6                                     base                                   10 M
 perl-Module-Pluggable                            x86_64                            1:3.90-144.el6                                       base                                   41 k
 perl-Pod-Escapes                                 x86_64                            1:1.04-144.el6                                       base                                   33 k
 perl-Pod-Simple                                  x86_64                            1:3.13-144.el6                                       base                                  213 k
 perl-libs                                        x86_64                            4:5.10.1-144.el6                                     base                                  579 k
 perl-version                                     x86_64                            3:0.77-144.el6                                       base                                   52 k
 php-cli                                          x86_64                            7.0.26-1.el6.remi                                    remi-php70                            4.0 M
 php-common                                       x86_64                            7.0.26-1.el6.remi                                    remi-php70                            991 k
 php-json                                         x86_64                            7.0.26-1.el6.remi                                    remi-php70                             55 k
 php-process                                      x86_64                            7.0.26-1.el6.remi                                    remi-php70                             65 k
 php-xml                                          x86_64                            7.0.26-1.el6.remi                                    remi-php70                            176 k
 plymouth                                         x86_64                            0.8.3-29.el6.centos                                  base                                   89 k
 policycoreutils                                  x86_64                            2.0.83-30.1.el6_8                                    base                                  663 k
 redhat-logos                                     noarch                            60.0.14-12.el6.centos                                base                                   15 M
 sysvinit-tools                                   x86_64                            2.87-6.dsf.el6                                       base                                   60 k
 udev                                             x86_64                            147-2.73.el6_8.2                                     base                                  358 k
 upstart                                          x86_64                            0.6.5-16.el6                                         base                                  177 k
 util-linux-ng                                    x86_64                            2.17.2-12.28.el6_9.1                                 updates                               1.6 M

Transaction Summary
=====================================================================================================================================================================================
Install      41 Package(s)

Total download size: 45 M
Installed size: 126 M
Downloading Packages:
(1/41): apr-1.3.9-5.el6_2.x86_64.rpm                                                                                                                          | 123 kB     00:00
(2/41): apr-util-1.3.9-3.el6_0.1.x86_64.rpm                                                                                                                   |  87 kB     00:00
(3/41): apr-util-ldap-1.3.9-3.el6_0.1.x86_64.rpm                                                                                                              |  15 kB     00:00
(4/41): autoconf-2.63-5.1.el6.noarch.rpm                                                                                                                      | 781 kB     00:00
(5/41): automake-1.11.1-4.el6.noarch.rpm                                                                                                                      | 550 kB     00:00
(6/41): dbus-glib-0.86-6.el6.x86_64.rpm                                                                                                                       | 170 kB     00:00
(7/41): httpd-2.2.15-60.el6.centos.6.x86_64.rpm                                                                                                               | 836 kB     00:00
(8/41): httpd-tools-2.2.15-60.el6.centos.6.x86_64.rpm                                                                                                         |  80 kB     00:00
(9/41): hwdata-0.233-18.1.el6.noarch.rpm                                                                                                                      | 1.3 MB     00:00
(10/41): initscripts-9.03.58-1.el6.centos.2.x86_64.rpm                                                                                                        | 949 kB     00:00
(11/41): iproute-2.6.32-54.el6.x86_64.rpm                                                                                                                     | 389 kB     00:00
(12/41): iptables-1.4.7-16.el6.x86_64.rpm                                                                                                                     | 254 kB     00:00
(13/41): iputils-20071127-24.el6.x86_64.rpm                                                                                                                   | 121 kB     00:00
(14/41): libdrm-2.4.65-2.el6.x86_64.rpm                                                                                                                       | 136 kB     00:00
(15/41): libedit-2.11-4.20080712cvs.1.el6.x86_64.rpm                                                                                                          |  74 kB     00:00
(16/41): libpciaccess-0.13.4-1.el6.x86_64.rpm                                                                                                                 |  24 kB     00:00
(17/41): libxslt-1.1.26-2.el6_3.1.x86_64.rpm                                                                                                                  | 452 kB     00:00
(18/41): libzip-last-1.1.3-1.el6.remi.x86_64.rpm                                                                                                              |  42 kB     00:00
(19/41): m4-1.4.13-5.el6.x86_64.rpm                                                                                                                           | 278 kB     00:00
(20/41): mailcap-2.1.31-2.el6.noarch.rpm                                                                                                                      |  27 kB     00:00
(21/41): perl-5.10.1-144.el6.x86_64.rpm                                                                                                                       |  10 MB     00:01
(22/41): perl-Module-Pluggable-3.90-144.el6.x86_64.rpm                                                                                                        |  41 kB     00:00
(23/41): perl-Pod-Escapes-1.04-144.el6.x86_64.rpm                                                                                                             |  33 kB     00:00
(24/41): perl-Pod-Simple-3.13-144.el6.x86_64.rpm                                                                                                              | 213 kB     00:00
(25/41): perl-libs-5.10.1-144.el6.x86_64.rpm                                                                                                                  | 579 kB     00:00
(26/41): perl-version-0.77-144.el6.x86_64.rpm                                                                                                                 |  52 kB     00:00
(27/41): php-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                     | 2.7 MB     00:02
(28/41): php-cli-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                 | 4.0 MB     00:02
(29/41): php-common-7.0.26-1.el6.remi.x86_64.rpm                                                                                                              | 991 kB     00:00
(30/41): php-devel-7.0.26-1.el6.remi.x86_64.rpm                                                                                                               | 1.3 MB     00:00
(31/41): php-json-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                |  55 kB     00:00
(32/41): php-pear-1.10.5-2.el6.remi.noarch.rpm                                                                                                                | 367 kB     00:00
(33/41): php-process-7.0.26-1.el6.remi.x86_64.rpm                                                                                                             |  65 kB     00:00
(34/41): php-xml-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                 | 176 kB     00:00
(35/41): plymouth-0.8.3-29.el6.centos.x86_64.rpm                                                                                                              |  89 kB     00:00
(36/41): policycoreutils-2.0.83-30.1.el6_8.x86_64.rpm                                                                                                         | 663 kB     00:00
(37/41): redhat-logos-60.0.14-12.el6.centos.noarch.rpm                                                                                                        |  15 MB     00:02
(38/41): sysvinit-tools-2.87-6.dsf.el6.x86_64.rpm                                                                                                             |  60 kB     00:00
(39/41): udev-147-2.73.el6_8.2.x86_64.rpm                                                                                                                     | 358 kB     00:00
(40/41): upstart-0.6.5-16.el6.x86_64.rpm                                                                                                                      | 177 kB     00:00
(41/41): util-linux-ng-2.17.2-12.28.el6_9.1.x86_64.rpm                                                                                                        | 1.6 MB     00:00
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Total                                                                                                                                                3.0 MB/s |  45 MB     00:15
warning: rpmts_HdrFromFdno: Header V4 DSA/SHA1 Signature, key ID 00f97f56: NOKEY
Retrieving key from file:///etc/pki/rpm-gpg/RPM-GPG-KEY-remi
Importing GPG key 0x00F97F56:
 Userid : Remi Collet <RPMS@FamilleCollet.com>
 Package: remi-release-6.9-1.el6.remi.noarch (installed)
 From   : /etc/pki/rpm-gpg/RPM-GPG-KEY-remi
Running rpm_check_debug
Running Transaction Test
Transaction Test Succeeded
Running Transaction
Warning: RPMDB altered outside of yum.
  Installing : apr-1.3.9-5.el6_2.x86_64                                                                                                                                         1/41
  Installing : apr-util-1.3.9-3.el6_0.1.x86_64                                                                                                                                  2/41
  Installing : redhat-logos-60.0.14-12.el6.centos.noarch                                                                                                                        3/41
  Installing : sysvinit-tools-2.87-6.dsf.el6.x86_64                                                                                                                             4/41
  Installing : hwdata-0.233-18.1.el6.noarch                                                                                                                                     5/41
  Installing : libpciaccess-0.13.4-1.el6.x86_64                                                                                                                                 6/41
  Installing : apr-util-ldap-1.3.9-3.el6_0.1.x86_64                                                                                                                             7/41
  Installing : httpd-tools-2.2.15-60.el6.centos.6.x86_64                                                                                                                        8/41
  Installing : php-common-7.0.26-1.el6.remi.x86_64                                                                                                                              9/41
  Installing : php-json-7.0.26-1.el6.remi.x86_64                                                                                                                               10/41
  Installing : php-process-7.0.26-1.el6.remi.x86_64                                                                                                                            11/41
  Installing : 1:perl-Pod-Escapes-1.04-144.el6.x86_64                                                                                                                          12/41
  Installing : 1:perl-Module-Pluggable-3.90-144.el6.x86_64                                                                                                                     13/41
  Installing : 4:perl-libs-5.10.1-144.el6.x86_64                                                                                                                               14/41
  Installing : 1:perl-Pod-Simple-3.13-144.el6.x86_64                                                                                                                           15/41
  Installing : 3:perl-version-0.77-144.el6.x86_64                                                                                                                              16/41
  Installing : 4:perl-5.10.1-144.el6.x86_64                                                                                                                                    17/41
  Installing : libxslt-1.1.26-2.el6_3.1.x86_64                                                                                                                                 18/41
  Installing : php-xml-7.0.26-1.el6.remi.x86_64                                                                                                                                19/41
  Installing : libedit-2.11-4.20080712cvs.1.el6.x86_64                                                                                                                         20/41
  Installing : php-cli-7.0.26-1.el6.remi.x86_64                                                                                                                                21/41
  Installing : mailcap-2.1.31-2.el6.noarch                                                                                                                                     22/41
  Installing : dbus-glib-0.86-6.el6.x86_64                                                                                                                                     23/41
  Installing : m4-1.4.13-5.el6.x86_64                                                                                                                                          24/41
  Installing : autoconf-2.63-5.1.el6.noarch                                                                                                                                    25/41
install-info: No such file or directory for /usr/share/info/autoconf.info
  Installing : automake-1.11.1-4.el6.noarch                                                                                                                                    26/41
install-info: No such file or directory for /usr/share/info/automake.info.gz
  Installing : upstart-0.6.5-16.el6.x86_64                                                                                                                                     27/41
  Installing : policycoreutils-2.0.83-30.1.el6_8.x86_64                                                                                                                        28/41
  Installing : iptables-1.4.7-16.el6.x86_64                                                                                                                                    29/41
  Installing : iproute-2.6.32-54.el6.x86_64                                                                                                                                    30/41
  Installing : libdrm-2.4.65-2.el6.x86_64                                                                                                                                      31/41
  Installing : plymouth-0.8.3-29.el6.centos.x86_64                                                                                                                             32/41
  Installing : iputils-20071127-24.el6.x86_64                                                                                                                                  33/41
  Installing : util-linux-ng-2.17.2-12.28.el6_9.1.x86_64                                                                                                                       34/41
install-info: No such file or directory for /usr/share/info/ipc.info
  Installing : initscripts-9.03.58-1.el6.centos.2.x86_64                                                                                                                       35/41
  Installing : udev-147-2.73.el6_8.2.x86_64                                                                                                                                    36/41
  Installing : httpd-2.2.15-60.el6.centos.6.x86_64                                                                                                                             37/41
  Installing : php-7.0.26-1.el6.remi.x86_64                                                                                                                                    38/41
  Installing : php-devel-7.0.26-1.el6.remi.x86_64                                                                                                                              39/41
  Installing : 1:php-pear-1.10.5-2.el6.remi.noarch                                                                                                                             40/41
  Installing : libzip-last-1.1.3-1.el6.remi.x86_64                                                                                                                             41/41
  Verifying  : 3:perl-version-0.77-144.el6.x86_64                                                                                                                               1/41
  Verifying  : libzip-last-1.1.3-1.el6.remi.x86_64                                                                                                                              2/41
  Verifying  : upstart-0.6.5-16.el6.x86_64                                                                                                                                      3/41
  Verifying  : 4:perl-5.10.1-144.el6.x86_64                                                                                                                                     4/41
  Verifying  : udev-147-2.73.el6_8.2.x86_64                                                                                                                                     5/41
  Verifying  : util-linux-ng-2.17.2-12.28.el6_9.1.x86_64                                                                                                                        6/41
  Verifying  : m4-1.4.13-5.el6.x86_64                                                                                                                                           7/41
  Verifying  : apr-util-ldap-1.3.9-3.el6_0.1.x86_64                                                                                                                             8/41
  Verifying  : libpciaccess-0.13.4-1.el6.x86_64                                                                                                                                 9/41
  Verifying  : php-process-7.0.26-1.el6.remi.x86_64                                                                                                                            10/41
  Verifying  : 1:perl-Module-Pluggable-3.90-144.el6.x86_64                                                                                                                     11/41
  Verifying  : automake-1.11.1-4.el6.noarch                                                                                                                                    12/41
  Verifying  : plymouth-0.8.3-29.el6.centos.x86_64                                                                                                                             13/41
  Verifying  : hwdata-0.233-18.1.el6.noarch                                                                                                                                    14/41
  Verifying  : httpd-tools-2.2.15-60.el6.centos.6.x86_64                                                                                                                       15/41
  Verifying  : sysvinit-tools-2.87-6.dsf.el6.x86_64                                                                                                                            16/41
  Verifying  : iproute-2.6.32-54.el6.x86_64                                                                                                                                    17/41
  Verifying  : php-xml-7.0.26-1.el6.remi.x86_64                                                                                                                                18/41
  Verifying  : initscripts-9.03.58-1.el6.centos.2.x86_64                                                                                                                       19/41
  Verifying  : autoconf-2.63-5.1.el6.noarch                                                                                                                                    20/41
  Verifying  : httpd-2.2.15-60.el6.centos.6.x86_64                                                                                                                             21/41
  Verifying  : dbus-glib-0.86-6.el6.x86_64                                                                                                                                     22/41
  Verifying  : 1:perl-Pod-Simple-3.13-144.el6.x86_64                                                                                                                           23/41
  Verifying  : php-json-7.0.26-1.el6.remi.x86_64                                                                                                                               24/41
  Verifying  : apr-util-1.3.9-3.el6_0.1.x86_64                                                                                                                                 25/41
  Verifying  : apr-1.3.9-5.el6_2.x86_64                                                                                                                                        26/41
  Verifying  : 1:php-pear-1.10.5-2.el6.remi.noarch                                                                                                                             27/41
  Verifying  : redhat-logos-60.0.14-12.el6.centos.noarch                                                                                                                       28/41
  Verifying  : php-devel-7.0.26-1.el6.remi.x86_64                                                                                                                              29/41
  Verifying  : php-cli-7.0.26-1.el6.remi.x86_64                                                                                                                                30/41
  Verifying  : 4:perl-libs-5.10.1-144.el6.x86_64                                                                                                                               31/41
  Verifying  : mailcap-2.1.31-2.el6.noarch                                                                                                                                     32/41
  Verifying  : php-common-7.0.26-1.el6.remi.x86_64                                                                                                                             33/41
  Verifying  : libedit-2.11-4.20080712cvs.1.el6.x86_64                                                                                                                         34/41
  Verifying  : php-7.0.26-1.el6.remi.x86_64                                                                                                                                    35/41
  Verifying  : 1:perl-Pod-Escapes-1.04-144.el6.x86_64                                                                                                                          36/41
  Verifying  : libdrm-2.4.65-2.el6.x86_64                                                                                                                                      37/41
  Verifying  : policycoreutils-2.0.83-30.1.el6_8.x86_64                                                                                                                        38/41
  Verifying  : iptables-1.4.7-16.el6.x86_64                                                                                                                                    39/41
  Verifying  : iputils-20071127-24.el6.x86_64                                                                                                                                  40/41
  Verifying  : libxslt-1.1.26-2.el6_3.1.x86_64                                                                                                                                 41/41

Installed:
  libzip-last.x86_64 0:1.1.3-1.el6.remi          php.x86_64 0:7.0.26-1.el6.remi          php-devel.x86_64 0:7.0.26-1.el6.remi          php-pear.noarch 1:1.10.5-2.el6.remi

Dependency Installed:
  apr.x86_64 0:1.3.9-5.el6_2                   apr-util.x86_64 0:1.3.9-3.el6_0.1            apr-util-ldap.x86_64 0:1.3.9-3.el6_0.1     autoconf.noarch 0:2.63-5.1.el6
  automake.noarch 0:1.11.1-4.el6               dbus-glib.x86_64 0:0.86-6.el6                httpd.x86_64 0:2.2.15-60.el6.centos.6      httpd-tools.x86_64 0:2.2.15-60.el6.centos.6
  hwdata.noarch 0:0.233-18.1.el6               initscripts.x86_64 0:9.03.58-1.el6.centos.2  iproute.x86_64 0:2.6.32-54.el6             iptables.x86_64 0:1.4.7-16.el6
  iputils.x86_64 0:20071127-24.el6             libdrm.x86_64 0:2.4.65-2.el6                 libedit.x86_64 0:2.11-4.20080712cvs.1.el6  libpciaccess.x86_64 0:0.13.4-1.el6
  libxslt.x86_64 0:1.1.26-2.el6_3.1            m4.x86_64 0:1.4.13-5.el6                     mailcap.noarch 0:2.1.31-2.el6              perl.x86_64 4:5.10.1-144.el6
  perl-Module-Pluggable.x86_64 1:3.90-144.el6  perl-Pod-Escapes.x86_64 1:1.04-144.el6       perl-Pod-Simple.x86_64 1:3.13-144.el6      perl-libs.x86_64 4:5.10.1-144.el6
  perl-version.x86_64 3:0.77-144.el6           php-cli.x86_64 0:7.0.26-1.el6.remi           php-common.x86_64 0:7.0.26-1.el6.remi      php-json.x86_64 0:7.0.26-1.el6.remi
  php-process.x86_64 0:7.0.26-1.el6.remi       php-xml.x86_64 0:7.0.26-1.el6.remi           plymouth.x86_64 0:0.8.3-29.el6.centos      policycoreutils.x86_64 0:2.0.83-30.1.el6_8
  redhat-logos.noarch 0:60.0.14-12.el6.centos  sysvinit-tools.x86_64 0:2.87-6.dsf.el6       udev.x86_64 0:147-2.73.el6_8.2             upstart.x86_64 0:0.6.5-16.el6
  util-linux-ng.x86_64 0:2.17.2-12.28.el6_9.1

Complete!

# php -v
PHP 7.0.26 (cli) (built: Nov 21 2017 15:22:17) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies

# pecl install zip
WARNING: channel "pecl.php.net" has updated its protocols, use "pecl channel-update pecl.php.net" to update
downloading zip-1.15.1.tgz ...
Starting to download zip-1.15.1.tgz (248,940 bytes)
....................................................done: 248,940 bytes
8 source files, building
running: phpize
Configuring for:
PHP Api Version:         20151012
Zend Module Api No:      20151012
Zend Extension Api No:   320151012
building in /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1
running: /var/tmp/zip/configure --with-php-config=/usr/bin/php-config
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for a sed that does not truncate output... /bin/sed
checking for cc... cc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables...
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether cc accepts -g... yes
checking for cc option to accept ISO C89... none needed
checking how to run the C preprocessor... cc -E
checking for icc... no
checking for suncc... no
checking whether cc understands -c and -o together... yes
checking for system library directory... lib
checking if compiler supports -R... no
checking if compiler supports -Wl,-rpath,... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for PHP prefix... /usr
checking for PHP includes... -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib
checking for PHP extension directory... /usr/lib64/php/modules
checking for PHP installed headers prefix... /usr/include/php
checking if debug is enabled... no
checking if zts is enabled... no
checking for re2c... no
configure: WARNING: You will need re2c 0.13.4 or later if you want to regenerate PHP parsers.
checking for gawk... gawk
checking for zip archive read/writesupport... yes, shared
checking libzip... yes
checking PHP version... PHP 7.x
checking for pkg-config... /usr/bin/pkg-config
checking for libzip... from pkgconfig: version 1.1.3 found in /usr/lib64
checking for zip_open in -lzip... yes
checking for zip_file_set_encryption in -lzip... no
checking for a sed that does not truncate output... (cached) /bin/sed
checking for fgrep... /bin/grep -F
checking for ld used by cc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 1572864
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from cc object... ok
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking for objdir... .libs
checking if cc supports -fno-rtti -fno-exceptions... no
checking for cc option to produce PIC... -fPIC -DPIC
checking if cc PIC flag -fPIC -DPIC works... yes
checking if cc static flag -static works... no
checking if cc supports -c -o file.o... yes
checking if cc supports -c -o file.o... (cached) yes
checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking whether -lc should be explicitly linked in... no
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... yes
checking whether to build static libraries... no
configure: creating ./config.status
config.status: creating config.h
config.status: executing libtool commands
running: make
/bin/sh /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/libtool --mode=compile cc -I/usr/lib64/libzip/include   -I. -I/var/tmp/zip -DPHP_ATOM_INC -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/include -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/main -I/var/tmp/zip -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib -I/var/tmp/zip/php7  -DHAVE_CONFIG_H  -g -O2   -c /var/tmp/zip/php7/php_zip.c -o php7/php_zip.lo
libtool: compile:  cc -I/usr/lib64/libzip/include -I. -I/var/tmp/zip -DPHP_ATOM_INC -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/include -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/main -I/var/tmp/zip -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib -I/var/tmp/zip/php7 -DHAVE_CONFIG_H -g -O2 -c /var/tmp/zip/php7/php_zip.c  -fPIC -DPIC -o php7/.libs/php_zip.o
/bin/sh /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/libtool --mode=compile cc -I/usr/lib64/libzip/include   -I. -I/var/tmp/zip -DPHP_ATOM_INC -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/include -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/main -I/var/tmp/zip -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib -I/var/tmp/zip/php7  -DHAVE_CONFIG_H  -g -O2   -c /var/tmp/zip/php7/zip_stream.c -o php7/zip_stream.lo
libtool: compile:  cc -I/usr/lib64/libzip/include -I. -I/var/tmp/zip -DPHP_ATOM_INC -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/include -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/main -I/var/tmp/zip -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib -I/var/tmp/zip/php7 -DHAVE_CONFIG_H -g -O2 -c /var/tmp/zip/php7/zip_stream.c  -fPIC -DPIC -o php7/.libs/zip_stream.o
/bin/sh /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/libtool --mode=link cc -DPHP_ATOM_INC -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/include -I/var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/main -I/var/tmp/zip -I/usr/include/php -I/usr/include/php/main -I/usr/include/php/TSRM -I/usr/include/php/Zend -I/usr/include/php/ext -I/usr/include/php/ext/date/lib -I/var/tmp/zip/php7  -DHAVE_CONFIG_H  -g -O2   -o zip.la -export-dynamic -avoid-version -prefer-pic -module -rpath /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules  php7/php_zip.lo php7/zip_stream.lo -Wl,-rpath,/usr/lib64 -L/usr/lib64 -lzip
libtool: link: cc -shared  php7/.libs/php_zip.o php7/.libs/zip_stream.o   -L/usr/lib64 -lzip  -Wl,-rpath -Wl,/usr/lib64   -Wl,-soname -Wl,zip.so -o .libs/zip.so
libtool: link: ( cd ".libs" && rm -f "zip.la" && ln -s "../zip.la" "zip.la" )
/bin/sh /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/libtool --mode=install cp ./zip.la /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules
libtool: install: cp ./.libs/zip.so /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules/zip.so
libtool: install: cp ./.libs/zip.lai /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules/zip.la
libtool: finish: PATH="/usr/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/sbin" ldconfig -n /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules
----------------------------------------------------------------------
Libraries have been installed in:
   /var/tmp/pear-build-defaultuserhVlOtR/zip-1.15.1/modules

If you ever happen to want to link against installed libraries
in a given directory, LIBDIR, you must either use libtool, and
specify the full pathname of the library, or use the `-LLIBDIR'
flag during linking and do at least one of the following:
   - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
     during execution
   - add LIBDIR to the `LD_RUN_PATH' environment variable
     during linking
   - use the `-Wl,-rpath -Wl,LIBDIR' linker flag
   - have your system administrator add LIBDIR to `/etc/ld.so.conf'

See any operating system documentation about shared libraries for
more information, such as the ld(1) and ld.so(8) manual pages.
----------------------------------------------------------------------

Build complete.
Don't forget to run 'make test'.

running: make INSTALL_ROOT="/var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1" install
Installing shared extensions:     /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr/lib64/php/modules/
running: find "/var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1" | xargs ls -dils
 139338   4 drwxr-xr-x 3 root root   4096 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1
 140004   4 drwxr-xr-x 3 root root   4096 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr
 140005   4 drwxr-xr-x 3 root root   4096 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr/lib64
 140006   4 drwxr-xr-x 3 root root   4096 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr/lib64/php
 140007   4 drwxr-xr-x 2 root root   4096 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr/lib64/php/modules
2752515 200 -rwxr-xr-x 1 root root 204271 Nov 27 13:36 /var/tmp/pear-build-defaultuserhVlOtR/install-zip-1.15.1/usr/lib64/php/modules/zip.so

Build process completed successfully
Installing '/usr/lib64/php/modules/zip.so'
install ok: channel://pecl.php.net/zip-1.15.1
configuration option "php_ini" is not set to php.ini location
You should add "extension=zip.so" to php.ini

# echo 'extension=zip.so' > /etc/php.d/zip.ini

```

Installation - source file
---------

```bash
git clone https://github.com/davidhoo/china-unicom-tools.git
cd china-unicom-tools
composer install
chmod +x ./chut
```

Installation - binary file
---------
```bash
curl -s -o china-unicom-tools.v1.0.0.tar.gz 'https://codeload.github.com/davidhoo/china-unicom-tools/tar.gz/v1.0.0'
tar zxvf china-unicom-tools.v1.0.0.tar.gz
cd china-unicom-tools.v1.0.0/bin
chmod +x chut
mv chut /usr/local/bin/
```

Usage
---------

```bash
./chut --help

Usage:
  ana [options]
  analytic
  analytics
  ana -f file [-i ipfile] [-u urlfile] [-r regex pattern]

Options:
  -i, --ip[=IP]                The full path for ip white list file [default: "./weibo.ip"]
  -f, --file=FILE              File name
  -u, --url[=URL]              The full path for url white list file [default: "./weibo.url"]
  -r, --regex[=REGEX]          The pattern for start time
  -s, --sheetname[=SHEETNAME]  Worksheet's name [default: "移动用户上网记录详单"]
  -h, --help                   Display this help message
  -q, --quiet                  Do not output any message
  -V, --version                Display this application version
      --ansi                   Force ANSI output
      --no-ansi                Disable ANSI output
  -n, --no-interaction         Do not ask any interactive question
  -v|vv|vvv, --verbose         Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  Analytic the chinaunicom access details's file
  
./chut ana -f yourfile [-i whitelist.ip] [-u whitelist.url] [-r pattern]

./chut ana -f ~/Downloads/test.xls -i ~/Downloads/weibo.ip -u ~/Downloads/weibo.url                                                                                                                                    22:38:07
+------------+------------+------------+-------------+
| Stat                                               |
+------------+------------+------------+-------------+
| Out sum    | In sum     | Total      | Out percent |
+------------+------------+------------+-------------+
|  236.49 kb |      49 mb |   49.23 mb |  0.47%      |
+------------+------------+------------+-------------+
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| Top 5 in the white list                                                                                                                                              |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| IP              | Traffic    | Percent | UA                                                                      | Url                                               |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| 36.250.76.195   |    25.1 mb | 50.99%  | Dalvik/2.1.0 (Linux; U; Android 5.1; GN3003 Build/LMY47D),okhttp/3.4.1, | wscdn.wbimg.xiaoka.tv                             |
| 153.3.235.100   |   21.87 mb | 44.42%  | ,okhttp/3.4.1,GN3003_5.1_weibo_7.4.0_android                            | alcdn.img.xiaoka.tv,ww1.sinaimg.cn,wx3.sinaimg.cn |
| 218.11.0.14     |   813.3 kb |  1.61%  |                                                                         | api.yizhibo.com                                   |
| 101.71.100.123  |  344.14 kb |  0.68%  |                                                                         | 101.71.100.123,h5.sinaimg.cn                      |
| 123.125.105.231 |  178.78 kb |  0.35%  | ,GN3003_5.1_weibo_7.4.0_android,Mozilla/5.0 (Linux; Android 5.1; GN3003 | 123.125.105.231,api.weibo.cn,m.weibo.cn           |
|                 |            |         | Build/LMY47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0    |                                                   |
|                 |            |         | Chrome/47.0.2526.1                                                      |                                                   |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| Top 10 out the white list                                                                                                                        |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| IP              | Traffic    | Percent | UA                                                                      | Url                           |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| 124.160.136.171 |   45.61 kb |  0.09%  | Mozilla/4.0 (compatible; ZEGO Android 2.0; 3566630470; 9),Mozilla/4.0   | flexible.zego.im              |
|                 |            |         | (compatible; ZEGO Android 2.0; 3566630470; 10),Mozilla/4.0 (compatible; |                               |
|                 |            |         | ZEGO Android 2.0; 3566630470; 11)                                       |                               |
| 101.69.121.102  |    40.1 kb |  0.08%  |                                                                         | 101.69.121.102                |
| 140.205.174.76  |   22.27 kb |  0.04%  |                                                                         | restapi.amap.com              |
| 153.3.235.95    |   21.24 kb |  0.04%  |                                                                         | nbsdk-baichuan.alicdn.com     |
| 60.217.22.137   |   17.44 kb |  0.03%  | okhttp/3.4.1                                                            | sdkoptedge.chinanetcenter.com |
| 183.232.42.230  |   15.71 kb |  0.03%  |                                                                         | stats.jpush.cn                |
| 106.11.13.1     |    7.92 kb |  0.02%  | AMAP_Location_SDK_Android 2.5.1                                         | apilocate.amap.com            |
| 140.205.252.7   |    7.91 kb |  0.02%  | AMAP_Location_SDK_Android 2.5.1                                         | apilocate.amap.com            |
| 106.11.176.5    |    5.34 kb |  0.01%  |                                                                         | wgo.mmstat.com                |
| 123.125.106.226 |    5.33 kb |  0.01%  |                                                                         | 123.125.106.226               |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
```
