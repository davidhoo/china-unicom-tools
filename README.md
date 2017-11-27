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

# yum --enablerep=remi-php70 install php -y
Loaded plugins: fastestmirror, ovl
Setting up Install Process
Loading mirror speeds from cached hostfile
epel/metalink                                                                                                                                                                    | 5.2 kB     00:00
 * base: mirror.bit.edu.cn
 * epel: mirrors.tongji.edu.cn
 * extras: mirrors.nju.edu.cn
 * remi-php70: mirrors.tuna.tsinghua.edu.cn
 * remi-safe: mirrors.tuna.tsinghua.edu.cn
 * updates: centos.ustc.edu.cn
epel                                                                                                                                                                             | 4.7 kB     00:00
epel/primary_db                                                                                                                                                                  | 6.0 MB     00:01
remi-php70                                                                                                                                                                       | 2.9 kB     00:00
remi-php70/primary_db                                                                                                                                                            | 178 kB     00:00
remi-safe                                                                                                                                                                        | 2.9 kB     00:00
remi-safe/primary_db                                                                                                                                                             | 917 kB     00:00
Resolving Dependencies
--> Running transaction check
---> Package php.x86_64 0:7.0.26-1.el6.remi will be installed
--> Processing Dependency: php-common(x86-64) = 7.0.26-1.el6.remi for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: php-cli(x86-64) = 7.0.26-1.el6.remi for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: httpd-mmn = 20051115 for package: php-7.0.26-1.el6.remi.x86_64
--> Processing Dependency: httpd for package: php-7.0.26-1.el6.remi.x86_64
--> Running transaction check
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
---> Package mailcap.noarch 0:2.1.31-2.el6 will be installed
---> Package php-json.x86_64 0:7.0.26-1.el6.remi will be installed
---> Package redhat-logos.noarch 0:60.0.14-12.el6.centos will be installed
--> Running transaction check
---> Package iproute.x86_64 0:2.6.32-54.el6 will be installed
--> Processing Dependency: iptables >= 1.4.5 for package: iproute-2.6.32-54.el6.x86_64
--> Processing Dependency: libxtables.so.4()(64bit) for package: iproute-2.6.32-54.el6.x86_64
---> Package iputils.x86_64 0:20071127-24.el6 will be installed
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
--> Running transaction check
---> Package libpciaccess.x86_64 0:0.13.4-1.el6 will be installed
---> Package policycoreutils.x86_64 0:2.0.83-30.1.el6_8 will be installed
--> Processing Dependency: libdbus-glib-1.so.2()(64bit) for package: policycoreutils-2.0.83-30.1.el6_8.x86_64
--> Running transaction check
---> Package dbus-glib.x86_64 0:0.86-6.el6 will be installed
--> Finished Dependency Resolution

Dependencies Resolved

========================================================================================================================================================================================================
 Package                                          Arch                                    Version                                                     Repository                                   Size
========================================================================================================================================================================================================
Installing:
 php                                              x86_64                                  7.0.26-1.el6.remi                                           remi-php70                                  2.7 M
Installing for dependencies:
 apr                                              x86_64                                  1.3.9-5.el6_2                                               base                                        123 k
 apr-util                                         x86_64                                  1.3.9-3.el6_0.1                                             base                                         87 k
 apr-util-ldap                                    x86_64                                  1.3.9-3.el6_0.1                                             base                                         15 k
 dbus-glib                                        x86_64                                  0.86-6.el6                                                  base                                        170 k
 httpd                                            x86_64                                  2.2.15-60.el6.centos.6                                      updates                                     836 k
 httpd-tools                                      x86_64                                  2.2.15-60.el6.centos.6                                      updates                                      80 k
 hwdata                                           noarch                                  0.233-18.1.el6                                              base                                        1.3 M
 initscripts                                      x86_64                                  9.03.58-1.el6.centos.2                                      updates                                     949 k
 iproute                                          x86_64                                  2.6.32-54.el6                                               base                                        389 k
 iptables                                         x86_64                                  1.4.7-16.el6                                                base                                        254 k
 iputils                                          x86_64                                  20071127-24.el6                                             base                                        121 k
 libdrm                                           x86_64                                  2.4.65-2.el6                                                base                                        136 k
 libedit                                          x86_64                                  2.11-4.20080712cvs.1.el6                                    base                                         74 k
 libpciaccess                                     x86_64                                  0.13.4-1.el6                                                base                                         24 k
 mailcap                                          noarch                                  2.1.31-2.el6                                                base                                         27 k
 php-cli                                          x86_64                                  7.0.26-1.el6.remi                                           remi-php70                                  4.0 M
 php-common                                       x86_64                                  7.0.26-1.el6.remi                                           remi-php70                                  991 k
 php-json                                         x86_64                                  7.0.26-1.el6.remi                                           remi-php70                                   55 k
 plymouth                                         x86_64                                  0.8.3-29.el6.centos                                         base                                         89 k
 policycoreutils                                  x86_64                                  2.0.83-30.1.el6_8                                           base                                        663 k
 redhat-logos                                     noarch                                  60.0.14-12.el6.centos                                       base                                         15 M
 sysvinit-tools                                   x86_64                                  2.87-6.dsf.el6                                              base                                         60 k
 udev                                             x86_64                                  147-2.73.el6_8.2                                            base                                        358 k
 upstart                                          x86_64                                  0.6.5-16.el6                                                base                                        177 k
 util-linux-ng                                    x86_64                                  2.17.2-12.28.el6_9.1                                        updates                                     1.6 M

Transaction Summary
========================================================================================================================================================================================================
Install      26 Package(s)

Total download size: 30 M
Installed size: 72 M
Downloading Packages:
(1/26): apr-1.3.9-5.el6_2.x86_64.rpm                                                                                                                                             | 123 kB     00:00
(2/26): apr-util-1.3.9-3.el6_0.1.x86_64.rpm                                                                                                                                      |  87 kB     00:00
(3/26): apr-util-ldap-1.3.9-3.el6_0.1.x86_64.rpm                                                                                                                                 |  15 kB     00:00
(4/26): dbus-glib-0.86-6.el6.x86_64.rpm                                                                                                                                          | 170 kB     00:00
(5/26): httpd-2.2.15-60.el6.centos.6.x86_64.rpm                                                                                                                                  | 836 kB     00:00
(6/26): httpd-tools-2.2.15-60.el6.centos.6.x86_64.rpm                                                                                                                            |  80 kB     00:00
(7/26): hwdata-0.233-18.1.el6.noarch.rpm                                                                                                                                         | 1.3 MB     00:00
(8/26): initscripts-9.03.58-1.el6.centos.2.x86_64.rpm                                                                                                                            | 949 kB     00:00
(9/26): iproute-2.6.32-54.el6.x86_64.rpm                                                                                                                                         | 389 kB     00:00
(10/26): iptables-1.4.7-16.el6.x86_64.rpm                                                                                                                                        | 254 kB     00:00
(11/26): iputils-20071127-24.el6.x86_64.rpm                                                                                                                                      | 121 kB     00:00
(12/26): libdrm-2.4.65-2.el6.x86_64.rpm                                                                                                                                          | 136 kB     00:00
(13/26): libedit-2.11-4.20080712cvs.1.el6.x86_64.rpm                                                                                                                             |  74 kB     00:00
(14/26): libpciaccess-0.13.4-1.el6.x86_64.rpm                                                                                                                                    |  24 kB     00:00
(15/26): mailcap-2.1.31-2.el6.noarch.rpm                                                                                                                                         |  27 kB     00:00
(16/26): php-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                                        | 2.7 MB     00:01
(17/26): php-cli-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                                    | 4.0 MB     00:01
(18/26): php-common-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                                 | 991 kB     00:00
(19/26): php-json-7.0.26-1.el6.remi.x86_64.rpm                                                                                                                                   |  55 kB     00:00
(20/26): plymouth-0.8.3-29.el6.centos.x86_64.rpm                                                                                                                                 |  89 kB     00:00
(21/26): policycoreutils-2.0.83-30.1.el6_8.x86_64.rpm                                                                                                                            | 663 kB     00:00
(22/26): redhat-logos-60.0.14-12.el6.centos.noarch.rpm                                                                                                                           |  15 MB     00:06
(23/26): sysvinit-tools-2.87-6.dsf.el6.x86_64.rpm                                                                                                                                |  60 kB     00:00
(24/26): udev-147-2.73.el6_8.2.x86_64.rpm                                                                                                                                        | 358 kB     00:00
(25/26): upstart-0.6.5-16.el6.x86_64.rpm                                                                                                                                         | 177 kB     00:00
(26/26): util-linux-ng-2.17.2-12.28.el6_9.1.x86_64.rpm                                                                                                                           | 1.6 MB     00:00
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Total                                                                                                                                                                   2.0 MB/s |  30 MB     00:14
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
  Installing : apr-1.3.9-5.el6_2.x86_64                                                                                                                                                            1/26
  Installing : apr-util-1.3.9-3.el6_0.1.x86_64                                                                                                                                                     2/26
  Installing : redhat-logos-60.0.14-12.el6.centos.noarch                                                                                                                                           3/26
  Installing : sysvinit-tools-2.87-6.dsf.el6.x86_64                                                                                                                                                4/26
  Installing : hwdata-0.233-18.1.el6.noarch                                                                                                                                                        5/26
  Installing : libpciaccess-0.13.4-1.el6.x86_64                                                                                                                                                    6/26
  Installing : apr-util-ldap-1.3.9-3.el6_0.1.x86_64                                                                                                                                                7/26
  Installing : httpd-tools-2.2.15-60.el6.centos.6.x86_64                                                                                                                                           8/26
  Installing : php-common-7.0.26-1.el6.remi.x86_64                                                                                                                                                 9/26
  Installing : php-json-7.0.26-1.el6.remi.x86_64                                                                                                                                                  10/26
  Installing : libedit-2.11-4.20080712cvs.1.el6.x86_64                                                                                                                                            11/26
  Installing : php-cli-7.0.26-1.el6.remi.x86_64                                                                                                                                                   12/26
  Installing : mailcap-2.1.31-2.el6.noarch                                                                                                                                                        13/26
  Installing : dbus-glib-0.86-6.el6.x86_64                                                                                                                                                        14/26
  Installing : upstart-0.6.5-16.el6.x86_64                                                                                                                                                        15/26
  Installing : policycoreutils-2.0.83-30.1.el6_8.x86_64                                                                                                                                           16/26
  Installing : iptables-1.4.7-16.el6.x86_64                                                                                                                                                       17/26
  Installing : iproute-2.6.32-54.el6.x86_64                                                                                                                                                       18/26
  Installing : libdrm-2.4.65-2.el6.x86_64                                                                                                                                                         19/26
  Installing : plymouth-0.8.3-29.el6.centos.x86_64                                                                                                                                                20/26
  Installing : iputils-20071127-24.el6.x86_64                                                                                                                                                     21/26
  Installing : util-linux-ng-2.17.2-12.28.el6_9.1.x86_64                                                                                                                                          22/26
install-info: No such file or directory for /usr/share/info/ipc.info
  Installing : initscripts-9.03.58-1.el6.centos.2.x86_64                                                                                                                                          23/26
  Installing : udev-147-2.73.el6_8.2.x86_64                                                                                                                                                       24/26
  Installing : httpd-2.2.15-60.el6.centos.6.x86_64                                                                                                                                                25/26
  Installing : php-7.0.26-1.el6.remi.x86_64                                                                                                                                                       26/26
  Verifying  : upstart-0.6.5-16.el6.x86_64                                                                                                                                                         1/26
  Verifying  : udev-147-2.73.el6_8.2.x86_64                                                                                                                                                        2/26
  Verifying  : util-linux-ng-2.17.2-12.28.el6_9.1.x86_64                                                                                                                                           3/26
  Verifying  : apr-util-ldap-1.3.9-3.el6_0.1.x86_64                                                                                                                                                4/26
  Verifying  : libpciaccess-0.13.4-1.el6.x86_64                                                                                                                                                    5/26
  Verifying  : plymouth-0.8.3-29.el6.centos.x86_64                                                                                                                                                 6/26
  Verifying  : hwdata-0.233-18.1.el6.noarch                                                                                                                                                        7/26
  Verifying  : httpd-tools-2.2.15-60.el6.centos.6.x86_64                                                                                                                                           8/26
  Verifying  : sysvinit-tools-2.87-6.dsf.el6.x86_64                                                                                                                                                9/26
  Verifying  : iproute-2.6.32-54.el6.x86_64                                                                                                                                                       10/26
  Verifying  : initscripts-9.03.58-1.el6.centos.2.x86_64                                                                                                                                          11/26
  Verifying  : httpd-2.2.15-60.el6.centos.6.x86_64                                                                                                                                                12/26
  Verifying  : dbus-glib-0.86-6.el6.x86_64                                                                                                                                                        13/26
  Verifying  : php-json-7.0.26-1.el6.remi.x86_64                                                                                                                                                  14/26
  Verifying  : apr-util-1.3.9-3.el6_0.1.x86_64                                                                                                                                                    15/26
  Verifying  : apr-1.3.9-5.el6_2.x86_64                                                                                                                                                           16/26
  Verifying  : redhat-logos-60.0.14-12.el6.centos.noarch                                                                                                                                          17/26
  Verifying  : iputils-20071127-24.el6.x86_64                                                                                                                                                     18/26
  Verifying  : php-cli-7.0.26-1.el6.remi.x86_64                                                                                                                                                   19/26
  Verifying  : mailcap-2.1.31-2.el6.noarch                                                                                                                                                        20/26
  Verifying  : php-common-7.0.26-1.el6.remi.x86_64                                                                                                                                                21/26
  Verifying  : libedit-2.11-4.20080712cvs.1.el6.x86_64                                                                                                                                            22/26
  Verifying  : php-7.0.26-1.el6.remi.x86_64                                                                                                                                                       23/26
  Verifying  : libdrm-2.4.65-2.el6.x86_64                                                                                                                                                         24/26
  Verifying  : policycoreutils-2.0.83-30.1.el6_8.x86_64                                                                                                                                           25/26
  Verifying  : iptables-1.4.7-16.el6.x86_64                                                                                                                                                       26/26

Installed:
  php.x86_64 0:7.0.26-1.el6.remi

Dependency Installed:
  apr.x86_64 0:1.3.9-5.el6_2                         apr-util.x86_64 0:1.3.9-3.el6_0.1                  apr-util-ldap.x86_64 0:1.3.9-3.el6_0.1        dbus-glib.x86_64 0:0.86-6.el6
  httpd.x86_64 0:2.2.15-60.el6.centos.6              httpd-tools.x86_64 0:2.2.15-60.el6.centos.6        hwdata.noarch 0:0.233-18.1.el6                initscripts.x86_64 0:9.03.58-1.el6.centos.2
  iproute.x86_64 0:2.6.32-54.el6                     iptables.x86_64 0:1.4.7-16.el6                     iputils.x86_64 0:20071127-24.el6              libdrm.x86_64 0:2.4.65-2.el6
  libedit.x86_64 0:2.11-4.20080712cvs.1.el6          libpciaccess.x86_64 0:0.13.4-1.el6                 mailcap.noarch 0:2.1.31-2.el6                 php-cli.x86_64 0:7.0.26-1.el6.remi
  php-common.x86_64 0:7.0.26-1.el6.remi              php-json.x86_64 0:7.0.26-1.el6.remi                plymouth.x86_64 0:0.8.3-29.el6.centos         policycoreutils.x86_64 0:2.0.83-30.1.el6_8
  redhat-logos.noarch 0:60.0.14-12.el6.centos        sysvinit-tools.x86_64 0:2.87-6.dsf.el6             udev.x86_64 0:147-2.73.el6_8.2                upstart.x86_64 0:0.6.5-16.el6
  util-linux-ng.x86_64 0:2.17.2-12.28.el6_9.1

Complete!

# php -v
PHP 7.0.26 (cli) (built: Nov 21 2017 15:22:17) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies

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
