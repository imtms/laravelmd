laravelmd - A Markdown Parser for Laravel
================
> Based on [PHP-Markdown](http://michelf.com/projects/php-markdown/) 

## Installation
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fimtms%2Flaravelmd.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fimtms%2Flaravelmd?ref=badge_shield)


To get the latest version of laravelmd, simply require the project using [Composer](https://getcomposer.org):

  ```shell
  composer require imtms/laravelmd
  ```
Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "imtms/laravelmd": "^1.0"
    }
}
```
## Configuration

Once laravelmd is installed, you need to register the service provider. 

Open up `config/app.php` and add the following to the `providers` key.

  ```php
  imtms\laravelmd\laravelmdProvider::class,
  ```

You can register the Markdown facade in the `aliases` key of your `config/app.php` file if you like.

  ```php
  'laravelmd' => imtms\laravelmd\Facades\laravelmd::class,
  ```

## Usage

  ```php
  \laravelmd::convert('foo'); // <p>foo</p>
  ```
  

## License

[The MIT License (MIT)](LICENSE).


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fimtms%2Flaravelmd.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fimtms%2Flaravelmd?ref=badge_large)