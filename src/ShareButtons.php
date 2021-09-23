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
        'data-description' => '',
        'data-direction' => 'horizontal',
        'data-hashtags' => '',
        'data-image' => '',
        'data-lang' => 'ru',
        'data-limit' => false,
        'data-more-button-type' => false,
        'data-nonce' => '',
        'data-popup-direction' => 'bottom',
        'data-popup-position' => 'inner',
        'data-services' => 'collections,vkontakte,facebook,twitter',
        'data-shape' => 'normal',
        'data-size' => 'm',
        'data-title' => '',
        'data-url' => '',
        'data-use-links' => false
    );

    public function init(){
        parent::init();

        $options = array();

        if (!isset($this->clientOptions['id'])) {
            $this->clientOptions['id'] = $this->getId();
        }

        if (!isset($this->clientOptions['tag'])) {
            $this->clientOptions['tag'] = 'div';
        } else {
            $this->clientOptions['tag'] = $this->clientOptions['tag'];
        }



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
        $this->options = array_merge($options, $this->clientOptions);
    }

    public function run(){
        return $this->render('widget',['options' => $this->options,'tag' => $this->clientOptions['tag']]);
    }

}