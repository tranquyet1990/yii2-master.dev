<?php

namespace backend\views\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class SidebarWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('sidebar');
    }
}