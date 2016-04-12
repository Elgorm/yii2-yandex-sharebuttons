<?php
    
use yii\helpers\Html;
    
$this->registerJsFile('https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js');
$this->registerJsFile('https://yastatic.net/share2/share.js');
?>

<?= Html::tag($tag,"",$options); ?>
<?php $this->registerJs("Ya.share2('#".$options['id']."')");?>

