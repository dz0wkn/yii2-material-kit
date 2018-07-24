# [Yii2 Material Kit - Free Bootstrap Material Design Admin](http://example.com)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install Material Kit run:

```sh
php composer.phar require dz0wkn/yii2-material-kit "*"
```

## Or

Add to composer.json

```json
{
	"require": {
		"dz0wkn/yii2-material-kit": "*"
	}
}
```

And run

```sh
php composer.phar update
```

Usage
-----
in your layouts/main.php include followin code

```php
<?php

/* @var $this \yii\web\View */
/* @var $content string */
/*
use yii\dependencies
*/
//Register class
if (class_exists('dz0wkn\CImaterial\web\MaterialAsset')) {
    dz0wkn\CImaterial\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
```


### What's included

Within the download you'll find the following directories and files:

```
yii2-material-kit/
├── assets/
|   ├── css/
|   |   ├── bootstrap.min.css
|   |   ├── material-kit.css
|   |   └── demo.css
|   ├── js/
|   |   ├── bootstrap-notify.js
|   |   ├── bootstrap.min.js
|   |   ├── chartist.min.js
|   |   ├── demo.js
|   |   ├── jquery-3.1.0.min.js
|   |   ├── material-kit.js
|   |   └── material.min.js
|   ├── sass/
|   |    ├── md
|   |    └── material-kit.scss
|   └── img/
├── documentation/
├── examples/
├── web/
|   └── MaterialAsset.php
|
└── widgets/
    ├── Alert.php
    └── MaterialAsset.php
```

Version logs
------------

V1.0.0 5 Sept, 2017 - Initial Release

License
-------
- Copyright 2017 Creative Tim (http://www.creative-tim.com)
- Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)
