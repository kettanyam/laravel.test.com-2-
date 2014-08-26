<?php
class makepage extends BaseController {

	public function makewaa($id){
		$results = DB::select('select * from fortest where userid = 1');
		var_dump($results);

		$userid = $id;
		echo $userid."<br>";
		$userid2 = $id++;
		echo $userid2;
		return View::make('waa',array('id' => $userid,'id2' => $userid2, 'data' => $results));
	}
}
?>