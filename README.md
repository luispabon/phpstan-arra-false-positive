Run:

```
composer -o install
vendor/bin/phpstan --ansi -v analyse -l 9 foo.php
```

Result:

```
vendor/bin/phpstan --ansi -v analyse -l 9 foo.php                                             1532ms  Fri 16 Dec 2022 11:01:38 GMT

 ! [NOTE] The Xdebug PHP extension is active, but "--xdebug" is not used. This may slow down performance and the process
 !        will not halt at breakpoints.

 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%  1 sec

 ------ ---------------------------------------------------------------------------------------------
  Line   foo.php
 ------ ---------------------------------------------------------------------------------------------
  15     Method Foo::getFoobar() should return array<string, string> but returns array<int, string>.
 ------ ---------------------------------------------------------------------------------------------



 [ERROR] Found 1 error


Used memory: 38 MB
```
