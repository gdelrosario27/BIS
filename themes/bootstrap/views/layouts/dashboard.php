<?php /* @var $this Controller */

//setting active in nav pills
// $controller_name = Yii::app()->getController()->getId();
// $function_caller = Yii::app()->getController()->getAction()->getId();


// var_dump($controller_name);
// var_dump($function_caller);
// die();
	
// $selected_menu = "Home";

// if ($controller_name==='chart' && $function_caller==='population_growth') {
// 	$selected_menu = 'Population Growth';
// }
// else if ($controller_name==='chart' && $function_caller==='population_by_year') {
// 	$selected_menu = 'Population by Year';
// }
// else if ($controller_name==='chart' && $function_caller==='distribution_population'){
// 	$selected_menu = 'Distribution of Population';
// }
// else if ($controller_name==='residents' && $function_caller==='index') {
// 	$selected_menu = 'Residents';
// }
// else if ($controller_name==='users' && $function_caller==='index') {
// 	$selected_menu = 'Users';
// }




$list_items = array(
	array('label'=>'Dashboard'),
	array('label'=>'Home','icon' => 'home', 'url'=>'#','active'=>true),
	array('label'=>'Residents', 'url'=>Yii::app()->createUrl('residents')),
	array('label'=>'Users', 'url'=>Yii::app()->createUrl('users')),
	array('label'=>'Reports'),
	array('label'=>'Population Growth', 'url'=> Yii::app()->createUrl('residents/chart/population_growth')),
	array('label' => 'Population by Year','url' => Yii::app()->createUrl('residents/chart/population_by_year')),
	array('label' => 'Distribution of Population','url' => Yii::app()->createUrl('residents/chart/distribution_population'))
	);
$list_items = Yii::app()->params['dashboard_menu_items'] ? Yii::app()->params['dashboard_menu_items']:$list_items;


?>




<?php $this->beginContent('//layouts/main'); ?>

		<div class='span2'>
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
			    'type'=>'list', // '', 'tabs', 'pills' (or 'list')
			    'items'=>$list_items,
    			)); 
    		?>
    	</div>
		
		<div class='span9'><?php echo $content ?></div>
<?php $this->endContent(); ?>