<?php 


/**
* 
*/
class ChartController extends Controller
{
	public $layout = '//layouts/dashboard';
	public function actionIndex()
	{
		echo "Controller for handling chart";
	}
	public function actionPopulation_Growth()
	{
		$this->render('populationGrowth');
	}
	public function actionPopulation_By_Year()
	{
		$this->render('populationByYear');
	}
	public function actionDistribution_Population()
	{
		$this->render('populationDistribution');
	}


}

?>