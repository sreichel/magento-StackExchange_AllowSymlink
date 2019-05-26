# AllowSymlink Magento 1 Extension

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c54864d6ec544d6aa00c11f747a4ce39)](https://www.codacy.com/app/sreichel/magento-StackExchange_AllowSymlink?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=sreichel/magento-StackExchange_AllowSymlink&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/de5eb4d457411e58c485/maintainability)](https://codeclimate.com/github/sreichel/magento-StackExchange_LockAttributes/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/de5eb4d457411e58c485/test_coverage)](https://codeclimate.com/github/sreichel/magento-StackExchange_LockAttributes/test_coverage)
[![Support](https://img.shields.io/badge/paypal-donate-lightblue.svg?logo=paypal)](https://www.paypal.me/sv3n1)

## Facts
- [extension at github.com](https://github.com/sreichel/magento-StackExchange_AllowSymlink)
- [extension at packagist.org](https://packagist.org/packages/mse-sv3n/allowsymlinks)

### Description
__Q:__ How to enable symlinks after SUPEE-9767 V2 install?

> Its seems SUPEE-9767v2 has disabled and removed the option in "Advanced -> Developer -> Template settings", that would allow us to enable/disable symlinks.
>
> What is the other way to enable symlinks after V2 patch install?

__Source:__ https://magento.stackexchange.com/questions/184184/how-to-enable-symlinks-after-supee-9767-v2-install

#### Installation Instructions
- via modman
```
modman clone https://github.com/sreichel/magento-StackExchange_AllowSymlink.git
```
- via composer
```
composer require mse-sv3n/allowsymlinks
```

#### Uninstallation
- via modman
```
modman remove magento-stackexchange-allowsymlinks
```
- via composer
```
composer remove mse-sv3n/allowsymlinks
```

### Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/sreichel/magento-StackExchange_AllowSymlink/issues).

### Contribution
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

### License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
