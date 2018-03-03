<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use backend\views\widgets\HeaderWidget;
use backend\views\widgets\SidebarWidget;
use backend\views\widgets\AsideWidget;

AppAsset::register($this);
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
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<?php $this->beginBody() ?>
<?= HeaderWidget::widget() ?>
<div class="app-body">
    <?= SidebarWidget::widget() ?>
    <!-- Main content -->
    <main class="main">
        <?= $content; ?>
    </main>
    <?= AsideWidget::widget() ?>
</div>
<footer class="app-footer">
    <span><a href="tranquyet-developer.com">Trần Quyết</a> © 2018.</span>
    <span class="ml-auto">Powered by <a href="tranquyet-developer.com">Trần Quyết</a></span>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
