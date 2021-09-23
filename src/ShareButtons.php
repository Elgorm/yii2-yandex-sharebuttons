<?php
namespace elgorm\sharebuttons;
use yii\base\Widget;

class ShareButtons extends Widget{

    public $clientOptions = array();
    private $options = array(
        'data-bare' => false,
        'data-color-scheme' => 'normal',
        'data-copy' => 'last',
        'data-counter' => false,
        'data-curtain' => true,
        'data-description' => false,
        'data-direction' => 'horizontal',
        'data-hashtags' => false,
        'data-image' => false,
        'data-lang' => 'ru',
        'data-limit' => false,
        'data-more-button-type' => false,
        'data-nonce' => false,
        'data-popup-direction' => 'bottom',
        'data-popup-position' => 'inner',
        'data-services' => 'collections,vkontakte,facebook,twitter',
        'data-shape' => 'normal',
        'data-size' => 'm',
        'data-title' => false,
        'data-url' => false,
        'data-use-links' => false
    );
    private $tag = 'div';

    public function init(){
        parent::init();

        $options = array();

        if (!isset($this->clientOptions['id'])) {
            $this->clientOptions['id'] = $this->getId();
        }

        if (isset($this->clientOptions['tag'])) {
            $this->tag = $this->clientOptions['tag'];
            unlink($this->clientOptions['tag']);
        }



        $options = $this->options;


        foreach ($this->clientOptions as $key => $option){
            if (mb_strtolower($key)!='id' && mb_strtolower($key)!='class' && mb_strtolower($key)!='tag'){
                if (is_bool($option)){
                    if ($option) {
                        $options["data-".$key] = "true";
                    } else {
                        unset($options["data-".$key]);
                    }
                }
                else {
                    $options["data-".$key] = $option;
                }
            } else {
                $options[$key] = $option;
            }
        }

        $this->options = $options;
    }

    public function run(){
        return $this->render('widget',['options' => $this->options,'tag' => $this->tag]);
    }

}