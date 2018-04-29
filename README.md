##Getting CakePHP
To get a fresh download, visit the CakePHP project on GitHub:[https://github.com/cakephp/cakephp/tags](https://github.com/cakephp/cakephp/tags) and download the latest release of 2.0

##CakePHP Database Configuration
A copy of CakePHP’s database configuration file is found in /app/Config/database.php.default. Make a copy of this file in the same directory, but name it database.php.
```php
public $default = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'host' => 'localhost',
    'port' => '',
    'login' => 'cakeBlog',
    'password' => 'c4k3-rUl3Z',
    'database' => 'cake_blog_tutorial',
    'schema' => '',
    'prefix' => '',
    'encoding' => 'utf8'
);
```

##Optional Configuration
The security salt is used for generating hashes. Change the default Security.salt value in /app/Config/core.php. The replacement value should be long, hard to guess and be as random as you can make it:

```php
/**
 * A random string used in security hashing methods.
 */
Configure::write('Security.salt', 'pl345e-P45s_7h3*S@l7!');
```

The cipher seed is used for encrypt/decrypt strings. Change the default Security.cipherSeed value by editing /app/Config/core.php. The replacement value should be a large random integer:

```php
/**
 * A random numeric string (digits only) used to encrypt/decrypt strings.
 */
Configure::write('Security.cipherSeed', '7485712659625147843639846751');
```

##Setup Bake

cari path php.exe

```code
Windows XAMPP:
C:\xampp\php\php
```
```code
Windows LARAGON:
C:\laragon\bin\php\php-7.1.5-Win32-VC14-x64
```
setting pc env

PATH (edit) 
dalam User dan System Env

Copy dan paste folder cakephp dalam www
Setting HIJAU!!

CMD path project cakephp
```code
C:\laragon\www\cakephp-bake\app>
```
Command : 
```code
Console\cake bake all
```

#PDF

1. Download DOMPDF
2. Configure Router::parseExtensions('pdf'); dalam app/Config/routes.php
3. Unzip lib DOMPDF dalam app/Vendor/dompdf
4. Default layout utk PDF /app/View/Layouts/pdf/default.cpt
5. import component dalam AppController public $components = array('RequestHandler');
6. pages view cth /app/View/Users/pdf/view.ctp (nama file pdf sama dengan nama view)