# [Yii2 Material Kit - Free Bootstrap Material Design Admin](http://example.com)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install Material Kit run:

```sh
php composer require dz0wkn/yii2-material-kit "1.0.x-dev"
```

## Or

Add to composer.json

```json
{
	"require": {
		"dz0wkn/yii2-material-kit": "1.0.x-dev"
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

Example
-----
https://demos.creative-tim.com/material-kit/
