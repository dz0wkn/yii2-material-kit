# [Yii2 Material Dashboard - Free Bootstrap Material Design Admin](http://demos.creative-tim.com/material-dashboard/examples/dashboard.html)

![alt text](http://s3.amazonaws.com/creativetim_bucket/products/50/original/opt_md_thumbnail.jpg "Material Dashboard Free")

Material Dashboard is a free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design. We are very excited to introduce our take on the material concepts through an easy to use and beautiful set of components. Material Dashboard was built over the popular Bootstrap framework and it comes with a couple of third-party plugins redesigned to fit in with the rest of the elements.

Material Dashboard makes use of light, surface and movement. The general layout resembles sheets of paper following multiple different layers, so that the depth and order is obvious. The navigation stays mainly on the left sidebar and the content is on the right inside the main panel.

This product came as a result of users asking for a material dashboard after we released our successful [Material Kit](http://www.creative-tim.com/product/material-kit). We developed it based on your feedback and it is a powerful bootstrap admin dashboard, which allows you to build products like admin panels, content managements systems and CRMs.

Material Dashboard comes with 5 color filter choices for both the sidebar and the card headers (blue, green, orange, red and purple) and an option to have a background image on the sidebar.

Material Dashboard uses a framework built by our friend [Federico - Bootstrap Material Design](http://fezvrasta.github.io/bootstrap-material-design/), who did an amazing job creating the backbone for the material effects, animations, ripples and transitions. Big thanks to his team for the effort and forward thinking they put into it.

Special thanks go to:
[Robert McIntosh](https://github.com/mouse0270/bootstrap-notify) for the notification system.
[Chartist](https://gionkunz.github.io/chartist-js/) for the wonderful charts.
[Creative Tim](https://github.com/creativetimofficial/material-dashboard/)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install Material Dashboard run:

```sh
php composer.phar require ramosisw/yii2-material-dashboard "dev-master"
```

## Or

Add to composer.json

```json
{
	"require": {
		"ramosisw/yii2-material-dashboard": "dev-master"
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
if (class_exists('ramosisw\CImaterial\web\MaterialAsset')) {
    ramosisw\CImaterial\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
```


### What's included

Within the download you'll find the following directories and files:

```
yii2-material-dashboard/
├── assets/
|   ├── css/
|   |   ├── bootstrap.min.css
|   |   ├── material-dashboard.css
|   |   └── demo.css
|   ├── js/
|   |   ├── bootstrap-notify.js
|   |   ├── bootstrap.min.js
|   |   ├── chartist.min.js
|   |   ├── demo.js
|   |   ├── jquery-3.1.0.min.js
|   |   ├── material-dashboard.js
|   |   └── material.min.js
|   ├── sass/
|   |    ├── md
|   |    └── material-dashboard.scss
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
- Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)
