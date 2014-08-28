<?php


class grabnshow extends BaseController{

	/*
 	*Grab content from database
 	*
 	*/
	public function gns(){
		//$allcontent = DB::select('select * from mb2');
		$allcontent = DB::table('mb2')
								->orderBy('mbid','desc')
								->get();
		$newscontent = DB::table('news')->get();
		return View::make('show',array('content' => $allcontent, 'news' => $newscontent));
	}
}