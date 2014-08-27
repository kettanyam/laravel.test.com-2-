<?php

class ContentController extends BaseController{

	public function actionCreate(){

		$name = $_POST['username'];
		$message = $_POST['usermessage'];
		DB::insert('insert into mb2 (username, content) values (?,?)', array($name, $message));
		$url = action('grabnshow@gns');  //get the controller's position
		echo "<script type='text/javascript'>";  //use javascript to change to the specified controller
		echo "window.location.href='$url'";
		echo "</script>"; 
	}

	public function actionOldmessage($mbid){
		//$name = $username;
		$allcontent = DB::select('select * from mb2 where mbid = ?', array($mbid));
		return View::make('update', array('content' => $allcontent));
	}

	public function actionUpdate($mbid){
		$message = $_POST['newmessage'];
		DB::update("update mb2 set content = '$message' where mbid = ?", array($mbid));
		$url = action('grabnshow@gns');  //get the controller's position
		echo "<script type='text/javascript'>";  //use javascript to change to the specified controller
		echo "window.location.href='$url'";
		echo "</script>";
	}

	public function actionDelete($mbid){
		//DB::delete("delete * from mb2 where mbid = ?", array($mbid));  <---This sentence can't work! I don't know why!
		DB::table('mb2')->where('mbid', '=', $mbid)->delete();
		$url = action('grabnshow@gns');  //get the controller's position
		echo "<script type='text/javascript'>";  //use javascript to change to the specified controller
		echo "window.location.href='$url'";
		echo "</script>";
	}
}

?>