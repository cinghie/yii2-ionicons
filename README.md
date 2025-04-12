# Yii2 Ionicons

![License](https://img.shields.io/packagist/l/cinghie/yii2-ionicons.svg)
![Latest Stable Version](https://img.shields.io/github/release/cinghie/yii2-ionicons.svg)
![Latest Release Date](https://img.shields.io/github/release-date/cinghie/yii2-ionicons.svg)
![Latest Commit](https://img.shields.io/github/last-commit/cinghie/yii2-ionicons.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/cinghie/yii2-ionicons.svg)](https://packagist.org/packages/cinghie/yii2-ionicons)

Asset Bundle to include Ionicons on your Yii 2 project: https://ionicons.com/

Installation
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require cinghie/yii2-ionicons "^1.0.5"
```

or add this line to the require section of your `composer.json` file.

```
"cinghie/yii2-ionicons": "^1.0.5"
```

Configuration
-----------------

Add in the view for normal CSS

```
use cinghie\ionicons\IoniconsAsset;

IoniconsAsset::register($this);
```

Add in the view for minify CSS

```
use cinghie\ionicons\IoniconsMinifyAsset;

IoniconsMinifyAsset::register($this);
```
