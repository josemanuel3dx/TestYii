<?php

Yii::import("mytools.Mytools");

class CountriesController extends Controller
{
	
	/*public $layout='//layouts/column2';*/

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			#'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','delete','statusToggle'),
				'roles'=>array('admin'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		/*echo Yii::getPathOfAlias("application")."<br>";
		echo Yii::getPathOfAlias("webroot")."<br>";
		echo Yii::getPathOfAlias("ext")."<br>";
		echo Yii::getPathOfAlias("zii")."<br>";
		$tool=new Mytools;
		echo $tool->hi();*/

		/*echo Yii::app()->josemComp->status();*/

		/*
		* Ejecutar una sola vez
		Yii::app()->authManager->createRole("admin");
		Yii::app()->authManager->assign("admin","SEMMIO");
		Yii::app()->authManager->assign("admin",22);*/

		/*if(Yii::app()->user->checkAccess("admin"))
			echo "Si tiene";*/

		/*echo Yii::app()->user->name;
		echo Yii::app()->user->id;*/

		$countries=Countries::model()->findAll();
		$this->render("index",array("countries"=>$countries));

	}

	public function actionCreate()
	{
		$model=new Countries();

		/*var_dump("<pre>".print_r($_POST,TRUE)."</pre>");

		Yii::app()->end();*/

		if(isset($_POST['Countries']))
		{
			$model->attributes=$_POST['Countries'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","Country guardada correctamente.");
				$this->redirect(array('index'));
			}
				
		}

		$this->render("create",array(
			'model'=>$model)
		);

	}

	public function actionUpdate($id) 
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Countries']))
		{
			$model->attributes=$_POST['Countries'];
			if($model->save())
			{
				Yii::app()->user->setFlash("success","Country actualizada correctamente.");
				$this->redirect(array('index'));
			}
		}
		$this->render("update",array("model"=>$model));
	}

	public function actionStatusToggle($id) 
	{
		$model=$this->loadModel($id);

		$model->status=$model->status==1?0:1;

		if($model->save())
			$this->redirect(array('index'));
	}

	public function actionDelete($id) 
	{
		$model=$this->loadModel($id)->delete();
		$this->redirect(array('index'));
	}

	public function actionView($id)
	{
		$model=Countries::model()->findByPk($id);
		$this->render("view",array("model"=>$model));
	}

	public function loadModel($id)
	{
		$model=Countries::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}