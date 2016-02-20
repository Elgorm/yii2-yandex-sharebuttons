<?php
namespace app\components\shareButtons;
use yii\base\Widget;

class ShareButtons extends Widget{

    public $clientOptions=[];

    public function init(){
        parent::init();
    }

    public function run(){
        var_dump($this->clientOptions);
        return $this->render('widget');
    }

}