<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\redactor\widgets\Redactor;
?>
<div class="container">
  <div class="row">
  <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'action' =>['site/submit'],
    ]) ?>
    <div class="col-lg-10">
      <?php if(Yii::$app->session->hasFlash('success')):?>
          <div class="info">
              <?php Yii::$app->session->getFlash('success'); ?>
          </div>
      <?php endif; ?>
      <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Цахим хуудасны гарчиг</label>
          <div class="col-xs-8">
            <?= $form->field($model, 'title')->textInput(['name'=>'title', 'id' => 'T1'])->label('') ?>
          </div>
      </div>
      <div class="form-group row">
         <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Эрхэм зорилго</label>
          <div class="col-xs-8">
            <?= Redactor::widget([ 'name'=>'description', 'id'=>'T2', 'value'=>$model->description,
                        'clientOptions' => [
                                'plugins' => ['imagemanager', 'fontcolor', 'fullscreen', 'table'],
                                'buttonSource' => true, // <-- show source button
                            ]
                        ]) ?> 
          </div>
      </div>
       <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Утас</label>
          <div class="col-xs-8">
            <?= $form->field($model, 'title')->textInput(['name'=>'phone', 'id' => 'T3'])->label('') ?>
          </div>
      </div>
      <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Хаяг</label>
          <div class="col-xs-8">
            <?= $form->field($model, 'address')->textInput(['name'=>'address', 'id' => 'T4'])->label('') ?>
          </div>
      </div>
      <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Google coordinate</label>
          <div class="col-xs-8">
            <?= $form->field($model, 'google_coordinate')->textInput(['name'=>'google_gps', 'id' => 'T5'])->label('') ?>
          </div>
      </div>
      <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Facebook хаяг</label>
          <div class="col-xs-8">
            <?= $form->field($model, 'facebook')->textInput(['name'=>'facebook', 'id' => 'T6'])->label('') ?>
          </div>
      </div>
       <div class="form-group row">
          <label for="example-text-input" class="col-xs-4 col-form-label" style="margin-top:25px">Лого</label>
          <div class="col-xs-8">
             <div id="image-preview">
              <label for="image-upload" id="image-label">Choose File</label>
              <input type="file" name="image" id="image-upload" />
            </div>
          </div>
      </div>
      <Hr>
       <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Оруулах', ['class' => 'btn btn-primary', 'onClick' => "if(document.getElementById('T1').value==0 || document.getElementById('T2').value==0 ||document.getElementById('T3').value==0 || document.getElementById('T4').value==0 || document.getElementById('T5').value==0 || document.getElementById('T6').value==0){alert('Талбаруудыг бүрэн бөглөнө үү!'); return false;}"]) ?> <?= Html::submitButton('Буцах', ['class' => 'btn btn-system']) ?>
        </div>
    </div>
    </div>
    <?php ActiveForm::end() ?>
  </div>
</div>

<style type="text/css">
#image-preview {
  width: 200px;
  height: 200px;
  position: relative;
  overflow: hidden;
  background-color: #808080;
  color: #ecf0f1;
  input {
    line-height: 200px;
    font-size: 200px;
    position: absolute;
    opacity: 0;
    z-index: 10;
  }
  label {
    position: absolute;
    z-index: 5;
    opacity: 0.8;
    cursor: pointer;
    background-color: #bdc3c7;
    width: 200px;
    height: 50px;
    font-size: 20px;
    line-height: 50px;
    text-transform: uppercase;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    text-align: center;
  }
}
</style>
<?php

$javaScript = <<< JS
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Файлаа сонго",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});

if(document.getElementById('T1').length == 0){
  alert('Бүх талбарыг бүрэн гүйцэд бөглөнө үү!');
}
JS;

$this->registerJSFile(Yii::getAlias('@web').'/js/jquery.uploadPreview.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);

$this->registerJs($javaScript,  View::POS_END)
?>
