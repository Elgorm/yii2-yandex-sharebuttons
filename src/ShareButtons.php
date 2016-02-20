<?php
namespace elgorm\sharebuttons;
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