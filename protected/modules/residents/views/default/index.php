<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);

Yii::app()->params['dashboard_menu_items'] = array(
  array('label'=>'Dashboard'),
  array('label'=>'Home','icon' => 'home', 'url'=>'#'),
  array('label'=>'Residents', 'url'=>Yii::app()->createUrl('residents'),'active'=>true),
  array('label'=>'Users', 'url'=>Yii::app()->createUrl('users')),
  array('label'=>'Reports'),
  array('label'=>'Population Growth', 'url'=> Yii::app()->createUrl('residents/chart/population_growth')),
  array('label' => 'Population by Year','url' => Yii::app()->createUrl('residents/chart/population_by_year')),
  array('label' => 'Distribution of Population','url' => Yii::app()->createUrl('residents/chart/distribution_population'))
  );


?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>