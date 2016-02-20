<?php
namespace elgorm\sharebuttons;
use yii\base\Widget;

class ShareButtons extends Widget{

    public $clientOptions=[];
    private $options="";

    public function init(){
        parent::init();
        foreach ($this->clientOptions as $key=>$option){
            if (is_bool($option)){
                $this->options.="data-".$key." ";
            }
            else {
                $this->options.="data-".$key.'="'.$option.'" ';
            }

        }
        $this->options=trim($this->options);
    }

    public function run(){
        return $this->render('widget',['options'=>$this->options]);
    }

}