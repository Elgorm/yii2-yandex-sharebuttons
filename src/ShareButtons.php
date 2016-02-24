<?php
namespace elgorm\sharebuttons;
use yii\base\Widget;

class ShareButtons extends Widget{

    public $clientOptions=[];
    private $options="";

    public function init(){
        parent::init();
        if (!isset($this->clientOptions['id'])) {
            $this->clientOptions['id'] = $this->getId();
        }

        if (!isset($this->clientOptions['tag'])) {
            $this->clientOptions['tag'] = 'div';
        }

        foreach ($this->clientOptions as $key=>$option){
            if (mb_strtolower($key)!='id' && mb_strtolower($key)!='class' && mb_strtolower($key)!='tag'){
                if (is_bool($option)){
                    $this->options["data-".$key]="";
                }
                else {
                    $this->options["data-".$key]=$option;
                }
            }
            else {
                if (mb_strtolower($key)!='tag'){
                    $this->options[$key]=$option;
                }
            }
        }
    }

    public function run(){
        return $this->render('widget',['options'=>$this->options,'tag'=>$this->clientOptions['tag']]);
    }

}