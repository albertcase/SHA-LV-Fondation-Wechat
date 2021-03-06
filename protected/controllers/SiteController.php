<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionGallery()
	{
		$this->render('gallery');
	}

	public function actionCollection()
	{
		$this->render('collection');
	}

	public function actionCommande()
	{
		$this->render('commande');
	}

	public function actionExhibition()
	{
		$this->render('exhibition');
	}

	public function actionCommande_list()
	{
		$this->render('commande_list');
	}

	public function actionCollection_list()
	{
		$this->render('collection_list');
	}

	public function actionExhibition_list()
	{
		$this->render('exhibition_list');
	}

	public function actionInfo()
	{
		$this->render('info');
	}

	public function actionTest()
	{
		$this->render('test');
	}

	public function actionSpring()
	{
		$this->render('spring');
	}

	public function actionProduct(){
		$this->render('product');
	}

	public function actionFounder(){
		$this->render('founder');
	}

	public function actionHistory(){
		$this->render('history');
	}

	public function actionStore($id)
	{
		$sql = "select * from same_store where id = ".intval($id);
		$store = Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('store', array('store' => $store));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}