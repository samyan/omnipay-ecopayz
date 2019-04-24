# Omnipay: Ecopayz

**Ecopayz driver for the Omnipay V3 PHP payment processing library**

[![Build Status](https://travis-ci.org/samyan/omnipay-ecopayz.png?branch=master)](https://travis-ci.org/samyan/omnipay-ecopayz)
[![Latest Stable Version](https://poser.pugx.org/samyan/omnipay-ecopayz/v/stable.png)](https://packagist.org/packages/samyan/omnipay-ecopayz)
[![Total Downloads](https://poser.pugx.org/samyan/omnipay-ecopayz/downloads.png)](https://packagist.org/packages/samyan/omnipay-ecopayz)
[![Latest Unstable Version](https://poser.pugx.org/samyan/omnipay-ecopayz/v/unstable.png)](https://packagist.org/packages/samyan/omnipay-ecopayz)
[![License](https://poser.pugx.org/samyan/omnipay-ecopayz/license.png)](https://packagist.org/packages/samyan/omnipay-ecopayz)

[Omnipay](https://github.com/omnipay/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements [Ecopayz](http://www.ecopayz.com) support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "samyan/omnipay-ecopayz": "~2.0.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* Ecopayz

For general usage instructions, please see the main [Omnipay](https://github.com/omnipay/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/samyan/omnipay-ecopayz/issues),
or better yet, fork the library and submit a pull request.
