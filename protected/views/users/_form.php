<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>


	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>20)); ?>
    <div class="clr"></div>
	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5')); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5')); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'dateofbirth',array('class'=>'span5')); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'religion',array('class'=>'span5','maxlength'=>50)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'maritalstatus',array('class'=>'span5','maxlength'=>100)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'occupation',array('class'=>'span5','maxlength'=>100)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'education',array('class'=>'span5','maxlength'=>200)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'smoker',array('class'=>'span5')); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>600)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>20)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'lookingforanagerange',array('class'=>'span5','maxlength'=>20)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'idealmatchdescription',array('class'=>'span5','maxlength'=>600)); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'photo',array('class'=>'span5')); ?>
    <!--<div class="clr"></div>
	<?php echo $form->textFieldRow($model,'delete_denied',array('class'=>'span5')); ?>
    <div class="clr"></div>
	<?php echo $form->textFieldRow($model,'deleted',array('class'=>'span5')); ?>-->
    <div class="clr"></div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
