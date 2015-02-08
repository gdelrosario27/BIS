<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mdl-keeper-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keeper_name'); ?>
		<?php echo $form->textField($model,'keeper_name'); ?>
		<?php echo $form->error($model,'keeper_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keeper_description'); ?>
		<?php echo $form->textField($model,'keeper_description'); ?>
		<?php echo $form->error($model,'keeper_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keeper_birthday'); ?>
		<?php echo $form->textField($model,'keeper_birthday'); ?>
		<?php echo $form->error($model,'keeper_birthday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->