<?php

class NewsController extends BaseController{

	public function actionOldnews(){
		$newscontent = DB::table('news')->get();
		return View::make('updatenews', array('newscontent' => $newscontent));
	}

	public function actionUpdate($newsid){
		$newcontent = $_POST['thenews'];
		//DB::table('news')->where('newsid',$newsid)->update(array($newcontent));
		DB::update("update news set newscontent = '$newcontent' where newsid = ?", array($newsid));
		$url = action('grabnshow@gns');  //get the controller's position
		echo "<script type='text/javascript'>";  //use javascript to change to the specified controller
		echo "window.location.href='$url'";
		echo "</script>";
	}
}