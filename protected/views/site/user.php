<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<?php 
$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>

<div class="form">

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

		<?php echo $form->passwordFieldRow($model,'password'); ?>

		<?php echo $form->textFieldRow($model,'email') ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Login',
        )); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'reset',
            'type'=>'warning',
            'label'=>'Reset',
        )); ?>
	</div>


	<?php $this->endWidget(); ?>

</div>
