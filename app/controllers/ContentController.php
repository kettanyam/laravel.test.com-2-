<?php

class ContentController extends BaseController{

	/*
	 * Create new message
	 * @param text username
	 * 
	 */
	public function actionCreate(){

		$name = Input::get('username', false);   //= $name = $_POST['username'];
		$message = Input::get('usermessage', "");//= $message = $_POST['usermessage'];
		try {
			if (!$name)
				throw new Exception("Please enter your name.");

			$createmessage = new Mb4;
			$createmessage->mbid = null; 
			$createmessage->username = $name;
			$createmessage->content = $message;
			$createmessage->save();	
			return Redirect::action('IndexController@getContent');
		} catch (Exception $e){
			echo $e->getMessage();
			exit;
		}
	}

	/*
	 * Get old message
	 * @param int mbid
	 */
	public function actionGetOldmessage($mbid){
		try {
			$oldContent = Mb4::find($mbid);
			if (empty($oldContent))
				throw new Exception("Error: no such message.");

			return View::make('update', array('oldContent'=>$oldContent, 'home_url'=>$this->getIndexUrl() ));
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}

	/* 
	 * Modify message
	 * @param int mbid
	 */
	public function actionUpdate($mbid){
		$message = Input::get('newmessage');   //= $message = $_POST['newmessage'];
		$waitforedit = Mb4::find($mbid);
		$waitforedit->content = $message;
		try {
			$waitforedit->save();
			return Redirect::action('IndexController@getContent');
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}

	/*
	 * Delete message
	 * @param int mbid
	 */
	public function actionDelete($mbid){
		$waitfordelete = Mb4::find($mbid);
		$waitfordelete->delete();
		return Redirect::action('IndexController@getContent');
	}
}

?>