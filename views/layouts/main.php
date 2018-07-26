<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
//use app\assets\AppAsset;
// AppAsset::register($this);
if (class_exists('dz0wkn\mk\web\MaterialAsset')) {
    dz0wkn\mk\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
        <a href="#top" class="" style="z-index: 999; right: 100px;bottom: 100px; position: fixed; background-color: rgba(0,0,0,0.5);color: white;font-size: 3em;padding: 0 10px 0px;margin: 0px; font-weight: 900; border: 5px solid white; border-radius: 15px;">
            <span class="fa fa-angle-double-up" style=""></span>
        </a>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
