<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div id="wrapper">
    <div id="main">
        <div class="page_title">
            <h1 class="title">
            <?php if(strcmp(nl2br(Html::encode($message), 'PAGE NOT FOUND.')!=0)){
                echo "Таний хайсан хуудас олдсонгүй!";
            } else{
                echo nl2br(Html::encode($message));
                } ?>
            </h1>
            <h2 class="page_subtitle">Таний хайсан хуудас олдсонгүй.  Та нүүр хуудасруу ороод дахин оролдоно уу!</h2>
        </div>
    </div>
</div>

<style>
    body, html, #wrapper {
    width: 100%;
    height: 100%
}
#wrapper {
    display: table
}
#main {
    margin-top:50%;
    display: table-cell;
    vertical-align: middle;
    text-align:center
}
</style>