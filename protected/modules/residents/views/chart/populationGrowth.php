
<?php 
Yii::app()->params['dashboard_menu_items'] = array(
  array('label'=>'Dashboard'),
  array('label'=>'Home','icon' => 'home', 'url'=>'#'),
  array('label'=>'Residents', 'url'=>Yii::app()->createUrl('residents')),
  array('label'=>'Users', 'url'=>Yii::app()->createUrl('users')),
  array('label'=>'Reports'),
  array('label'=>'Population Growth', 'url'=> Yii::app()->createUrl('residents/chart/population_growth'),'active'=>true),
  array('label' => 'Population by Year','url' => Yii::app()->createUrl('residents/chart/population_by_year')),
  array('label' => 'Distribution of Population','url' => Yii::app()->createUrl('residents/chart/distribution_population'))
  );

$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>'{
      "title": { "text": "Fruit Consumption" },
      "xAxis": {
         "categories": ["Apples", "Bananas", "Oranges"]
      },
      "yAxis": {
         "title": { "text": "Fruit eaten" }
      },
      "series": [
         { "name": "Jane", "data": [1, 0, 4] },
         { "name": "John", "data": [2, 1,5] } ,
         { "name": "Somet", "data": [3, 2,6] } , 
         { "name": "TImes", "data": [4, 3,7] } 
      ]
   }'
));

?>