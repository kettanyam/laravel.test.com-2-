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
			if(empty($mb4content || $newscontent))
				throw new Exception("Data loading fail.");

			$url = URL::to('');
			return View::make('show',array('content'=>$mb4content, 'news'=>$newscontent, 'home_url'=>$this->getIndexUrl(), 'url'=>$url ));
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}
}