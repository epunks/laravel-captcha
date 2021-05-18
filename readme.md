# Captcha integration for Laravel with Support for multiple Captchas per Page

[![Latest Stable Version](https://poser.pugx.org/bonecms/laravel-captcha/v/stable)](https://packagist.org/packages/bonecms/laravel-captcha)
[![Total Downloads](https://poser.pugx.org/bonecms/laravel-captcha/downloads)](https://packagist.org/packages/bonecms/laravel-captcha)
[![License](https://poser.pugx.org/bonecms/laravel-captcha/license)](https://packagist.org/packages/bonecms/laravel-captcha)

![example1](examples/image1.png)
![example2](examples/image2.png)
![example3](examples/image3.png)
![example4](examples/image4.png)
![example5](examples/image5.png)
![example6](examples/image6.png)
![example7](examples/image7.png)
![example8](examples/image8.png)
![example9](examples/image9.png)
![example10](examples/image10.png)
![example11](examples/image11.png)
![example12](examples/image12.png)

## Installing Laravel with Composer Package
Note: If you do not have Composer yet, you can install it by following the instructions on https://getcomposer.org

#### Step 1. Install package
```bash
composer require bonecms/laravel-captcha dev-multiforms
```

## Using Laravel Captcha

Please use this documentation: https://github.com/remindbg/laravel-captcha#readme

## Using IDs to allow multiple Captchas on a single page
Showing a Captcha in a View:
```html
...
@captcha('unique-captcha-id')
<input type="text" name="unique-captcha-id" autocomplete="off">
 ...
```

