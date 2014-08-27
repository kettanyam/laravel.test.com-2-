<?php


class grabnshow extends BaseController{

	/*
 	*Grab content from database
 	*
 	*/
	public function gns(){
		$allcontent = DB::select('select * from mb2');
		return View::make('show',array('content' => $allcontent));
	}
}