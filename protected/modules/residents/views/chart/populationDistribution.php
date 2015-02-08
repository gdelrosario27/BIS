<?php 
Yii::app()->params['dashboard_menu_items'] = array(
  array('label'=>'Dashboard'),
  array('label'=>'Home','icon' => 'home', 'url'=>'#'),
  array('label'=>'Residents', 'url'=>Yii::app()->createUrl('residents')),
  array('label'=>'Users', 'url'=>Yii::app()->createUrl('users')),
  array('label'=>'Reports'),
  array('label'=>'Population Growth', 'url'=> Yii::app()->createUrl('residents/chart/population_growth')),
  array('label' => 'Population by Year','url' => Yii::app()->createUrl('residents/chart/population_by_year')),
  array('label' => 'Distribution of Population','url' => Yii::app()->createUrl('residents/chart/distribution_population'),'active'=>true)
  );

?>



<?php 
    $this->Widget('ext.highcharts.HighchartsWidget',
        array(
            'id' => 'something',
            'options'=> array(
                'chart' => array(
                    'defaultSeriesType' => 'bar',  
                    'style' => array(
                        'fontFamily' => 'Verdana, Arial, Helvetica, sans-serif',
                    ),
                ),
                'title' => array(
                    'text' => 'Distribution of Population',
                ),
                'xAxis' => array(
                    'title' => array(
                        'text' => 'Place',
                    ),
                    'categories' => array('Rural','Urban'),
                    'labels' => array(
                        'step'     => 1,
                        'rotation' => 0,
                        'y'        => 20,
                    ),
                ),
                'yAxis' => array(
                    'title' => array(
                        'text' => 'Number of Population',
                    ),
                ),
                'series' => array(
                    array(
                        'name'   => 'Boys',
                        'data'   => array(20,60),
                    ),
                    array(
                        'name'   => 'Girls',
                        'data'   => array(80,120),
                     ),
                  
                )
               )
        )
    );
?>