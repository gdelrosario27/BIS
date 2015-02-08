<?php 


/**
* 
*/
class ResidentsController extends Controller
{
	public $layout='//layouts/dashboard';
	public function actionIndex()
	{

		$this->render('index');
	}
}

?>