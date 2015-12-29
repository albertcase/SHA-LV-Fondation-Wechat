<?php

class WechatController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionBoulogne()
	{
		$this->layout='//layouts/wechat';
		$this->render('boulogne');
	}

	public function actionLanglang()
	{
		$this->layout='//layouts/wechat';
		$this->render('langlang');
	}

	public function actionQrcode()
	{
		$this->layout='//layouts/wechat';
		$this->render('qrcode');
	}

	public function actionNavigation()
	{
		$this->layout='//layouts/wechat';
		$this->render('navigation');
	}

	public function actionStore()
	{
		$this->layout='//layouts/wechat';
		$this->render('store');
	}

	public function actionTraffic()
	{
		$this->layout='//layouts/wechat';
		$this->render('traffic');
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

	// public function actionStore($id)
	// {
	// 	$sql = "select * from same_store where id = ".intval($id);
	// 	$store = Yii::app()->db->createCommand($sql)->queryRow();
	// 	$this->render('store', array('store' => $store));
	// }

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