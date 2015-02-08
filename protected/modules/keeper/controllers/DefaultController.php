<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		echo "hey";
		// $this->render('index');
	}
	public function actionShow()
	{
		echo "Showing";
	}
	public function actionCreate()
	{
		$model=new MdlKeeper;

    if(isset($_POST['ajax']) && $_POST['ajax']==='mdl-keeper-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }

    if(isset($_POST['MdlKeeper']))
    {
    	$model->attributes=$_POST['MdlKeeper'];
    	if($model->validate())
    	{
            // form inputs are valid, do something here
    		return;
    	}
    }
    $this->render('_form',array('model'=>$model));
	}

}