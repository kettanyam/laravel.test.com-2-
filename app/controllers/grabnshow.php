<?php


class grabnshow extends BaseController{

	/*
 	*Grab content from database
 	*
 	*/
	public function gns(){
		$allcontent = DB::select('select * from mb2');
		$newscontent = DB::table('news')->get();
		return View::make('show',array('content' => $allcontent, 'news' => $newscontent));
	}
}