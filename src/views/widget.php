<?
    $this->registerJsFile('https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js', ['async' => 'async']);
    $this->registerJsFile('https://yastatic.net/share2/share.js', ['async' => 'async']);
?>

<div class="ya-share2" <?=$options?>></div>

<?$this->registerJs("Ya.share2('.ya-share2')");?>

