<?php


class IndexController extends BaseController{

	/*
 	 * Get news and message.
 	 * 
 	 */
	public function getContent(){
		try {
			$mb4content = Mb4::orderBy('mbid', 'DESC')->get();
			$newscontent = News2::all();

			$dell1 = new Dell;
			$dell1->id = null;
			$dell1->name = "dellName";
			$dell1->content = "Hello";
			$dell1->save();
			$dellcontent = Dell::orderBy('id', 'DESC')->get();

			if(empty($mb4content || $newscontent))
				throw new Exception("Data loading fail.");

			return View::make('show',array('content'=>$mb4content, 'news'=>$newscontent, 'home_url'=>$this->getIndexUrl(), 'dell'=>$dellcontent ));
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}
}