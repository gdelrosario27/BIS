<?php 

/**
* 
*/
class KeeperController extends Controller
{
	
	function actionIndex()
	{
		echo "Default Index is here";

	}
	function actionCreate()
	{
	}
	function actionShowing()
	{
		$model  = new MdlKeeper();
		$this->render('application.modules.keeper.views._form',array('model'=>$model));
	}
}
	
?>