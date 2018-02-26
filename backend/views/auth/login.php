<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = 'Admin Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username', ['addon' => ['prepend' => ['content'=>'<i class="icon-user"></i>']]])->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label(false) ?>
    <?= $form->field($model, 'password', ['addon' => ['prepend' => ['content'=>'<i class="icon-lock"></i>']]])->passwordInput(['placeholder' => 'Password']) ?>
    <div class="row">
        <div class="col-6">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary px-4', 'name' => 'login-button']) ?>
        </div>
        <div class="col-6 text-right">
            <button type="button" class="btn btn-link px-0">Forgot password?</button>
        </div>
    </div>
<?php ActiveForm::end(); ?>