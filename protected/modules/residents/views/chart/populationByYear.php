<?php  
$this->breadcrumbs=array(
      'Resident' => array('/residents'),
      'Charts' => array('/residents/chart/'),
      'Population by Year',
   );


Yii::app()->params['dashboard_menu_items'] = array(
  array('label'=>'Dashboard'),
  array('label'=>'Home','icon' => 'home', 'url'=>'#'),
  array('label'=>'Residents', 'url'=>Yii::app()->createUrl('residents')),
  array('label'=>'Users', 'url'=>Yii::app()->createUrl('users')),
  array('label'=>'Reports'),
  array('label'=>'Population Growth', 'url'=> Yii::app()->createUrl('residents/chart/population_growth')),
  array('label' => 'Population by Year','url' => Yii::app()->createUrl('residents/chart/population_by_year'),'active'=>true),
  array('label' => 'Distribution of Population','url' => Yii::app()->createUrl('residents/chart/distribution_population'))
  );


?>


<!-- This is where the chart will be rendered -->
<div id='charts'>
</div>

<?php $this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
        'title' => array('text' => 'Population By Year'),
        'chart' => array('renderTo' =>'charts'),
        'credits' => array('enabled' => false),
        'series' => array(
               array(
                     'type'=>'pie',
                     'name'=>'Browser Awesome',
                     'data'=>array(
                           array('Firefox',45.0),
                           array('Internet Explorer',50.0),
                           array('Internet Explorer',250.0),
                           array('Internet Explorer',300.0),
                        ),
                  ),
         ),
   ),
));

?>