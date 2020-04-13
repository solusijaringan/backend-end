<?php
$this->title = 'SJI -VPN';
?>
<div class="site-index">
    <?php
    if(!empty(Yii::$app->user->id)){
        var_dump(\Yii::$app->user->identity->name);
    }
    ?>
</div>
