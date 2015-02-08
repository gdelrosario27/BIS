<?php

class DefaultController extends Controller
{
	public $layout = "//layouts/dashboard";
	public $selected_menu="";
	public function actionIndex()
	{
		$this->selected_menu = "Residents";
		$this->render('index');
	}
}