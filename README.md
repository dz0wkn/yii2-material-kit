# [Yii2 Material Kit - Free Bootstrap Material Design Admin](http://example.com)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install Material Kit run:

```sh
composer require dz0wkn/yii2-material-kit "1.0.x-dev"
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
composer update
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
dz0wkn\mk\web\MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
```

Example
-----
https://demos.creative-tim.com/material-kit/
