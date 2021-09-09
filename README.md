# hello-php7

## Install php

### Install homebrew
```shell
% ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

```shell
% brew --version
Homebrew 3.2.11
Homebrew/homebrew-core (git revision 4f77196f8a; last commit 2021-09-09)
```

### Install php 7
```shell
% brew tap homebrew/php
Error: homebrew/php was deprecated. This tap is now empty and all its contents were either deleted or migrated.

% brew search php70
==> Formulae
php                                                             php@7.4                                                         php@7.3                                                         php@7.2
```

```shell
% brew install php@7.2
...
Warning: php@7.2 has been deprecated because it is deprecated upstream!
==> Installing dependencies for php@7.2: apr, openssl@1.1, apr-util, argon2, aspell, m4, autoconf, brotli, gettext, libunistring, libidn2, libssh2, c-ares, jemalloc, libev, nghttp2, openldap, rtmpdump, zstd, curl, libtool, unixodbc, freetds, libpng, freetype, libffi, pcre, gdbm, mpdecimal, readline, sqlite, xz, python@3.9, glib, gmp, icu4c, jpeg, krb5, libpq, libsodium, libzip, tidy-html5, libtiff and webp
...
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php7_module /usr/local/opt/php@7.2/lib/httpd/modules/libphp7.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /usr/local/etc/php/7.2/

php@7.2 is keg-only, which means it was not symlinked into /usr/local,
because this is an alternate version of another formula.


To start php@7.2:
  brew services start php@7.2
Or, if you don't want/need a background service you can just run:
  /usr/local/opt/php@7.2/sbin/php-fpm --nodaemonize
```

```shell
% php --version

WARNING: PHP is not recommended
PHP is included in macOS for compatibility with legacy software.
Future versions of macOS will not include PHP.
PHP 7.3.24-(to be removed in future macOS) (cli) (built: Feb 28 2021 09:53:14) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.24, Copyright (c) 1998-2018 Zend Technologies
```
?? 설치할 필요가 없는건가?


```shell
% brew uninstall php@7.2

Uninstalling /usr/local/Cellar/php@7.2/7.2.34_4.reinstall... (516 files, 75MB)

Warning: The following may be php@7.2 configuration files and have not been removed!
If desired, remove them manually with `rm -rf`:
  /usr/local/etc/php
```

```shell
% rm -rf /usr/local/etc/php/7.2/
```

### Install MySQL

### Install composer

### Install 확장 모듈

---

## Run php server
````shell
% php -S localhost:8080
PHP 7.3.24-(to be removed in future macOS) Development Server started at Thu Sep  9 20:02:24 2021
Listening on http://localhost:8080
Document root is /Users/aaron/Github/Aaron/PHP/hello-php7
````


