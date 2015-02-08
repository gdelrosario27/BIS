<?php
/* @var $this ResidentController */
/* @var $model Resident */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resident-resident-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname'); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname'); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middlename'); ?>
		<?php echo $form->textField($model,'middlename'); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateOfBirth'); ?>
		<?php echo $form->textField($model,'dateOfBirth'); ?>
		<?php echo $form->error($model,'dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthplace'); ?>
		<?php echo $form->textField($model,'birthplace'); ?>
		<?php echo $form->error($model,'birthplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civilStatus'); ?>
		<?php echo $form->textField($model,'civilStatus'); ?>
		<?php echo $form->error($model,'civilStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship'); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bloodType'); ?>
		<?php echo $form->textField($model,'bloodType'); ?>
		<?php echo $form->error($model,'bloodType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CurrentStat'); ?>
		<?php echo $form->textField($model,'CurrentStat'); ?>
		<?php echo $form->error($model,'CurrentStat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GSISID'); ?>
		<?php echo $form->textField($model,'GSISID'); ?>
		<?php echo $form->error($model,'GSISID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PagibigNo'); ?>
		<?php echo $form->textField($model,'PagibigNo'); ?>
		<?php echo $form->error($model,'PagibigNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PhilHealthNo'); ?>
		<?php echo $form->textField($model,'PhilHealthNo'); ?>
		<?php echo $form->error($model,'PhilHealthNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ResTelephoneNo'); ?>
		<?php echo $form->textField($model,'ResTelephoneNo'); ?>
		<?php echo $form->error($model,'ResTelephoneNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'houseHoldId'); ?>
		<?php echo $form->textField($model,'houseHoldId'); ?>
		<?php echo $form->error($model,'houseHoldId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAddress'); ?>
		<?php echo $form->textField($model,'emailAddress'); ?>
		<?php echo $form->error($model,'emailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website'); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cellphone'); ?>
		<?php echo $form->textField($model,'cellphone'); ?>
		<?php echo $form->error($model,'cellphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TINNo'); ?>
		<?php echo $form->textField($model,'TINNo'); ?>
		<?php echo $form->error($model,'TINNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ElemGrad'); ?>
		<?php echo $form->textField($model,'ElemGrad'); ?>
		<?php echo $form->error($model,'ElemGrad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HighSchoolGrad'); ?>
		<?php echo $form->textField($model,'HighSchoolGrad'); ?>
		<?php echo $form->error($model,'HighSchoolGrad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CollegeGrad'); ?>
		<?php echo $form->textField($model,'CollegeGrad'); ?>
		<?php echo $form->error($model,'CollegeGrad'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->