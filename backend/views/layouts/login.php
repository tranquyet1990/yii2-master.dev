<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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

    <!-- Icons -->
    <link href="<?= Yii::getAlias('@web') ?>/vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@web') ?>/vendors/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="<?= Yii::getAlias('@web') ?>/css/style.css" rel="stylesheet">

</head>
<body class="app flex-row align-items-cente">
<?php $this->beginBody() ?>

<div class="container">
    <div class="row justify-content-center" style="margin-top: 250px;">
      <div class="col-md-4">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <?= $content; ?>
          </div>
        </div>
      </div>
    </div>
</div>

<?php $this->endBody() ?>
<!-- Bootstrap and necessary plugins -->
    <script src="<?= Yii::getAlias('@web') ?>/vendors/js/popper.min.js"></script>
    <script src="<?= Yii::getAlias('@web') ?>/vendors/js/bootstrap.min.js"></script>
</body>
</html>
<?php $this->endPage() ?>
