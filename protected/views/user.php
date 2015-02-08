<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

	<div class="form">

	<?php 
	// $form=$this->beginWidget('CActiveForm', array(
	// 	'id'=>'user-user-form',
	// 	'enableAjaxValidation'=>false,
	// )); 

	?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'user-user-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


		<p class="note">Fields with <span class="required">*</span> are required.</p>




		<?php echo $form->textFieldRow($model,'username'); ?>
		<?php echo $form->passwordFieldRow($model,'password') ?>
		<?php echo $form->emailFieldRow($model,'email') ?>

		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->textField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>


		<div class="row buttons">
			<?php echo CHtml::submitButton('Submit'); ?>
		</div>

	<?php $this->endWidget(); ?>

	</div><!-- form -->
