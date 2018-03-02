<?php

namespace backend\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Auth extends Component {
	
	public function getAuth($param) {
		return Yii::$app->user->identity->$param;
	}

}