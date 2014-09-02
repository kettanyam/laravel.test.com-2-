<?php

class NewsController extends BaseController{

	/*
	 * Get acient News
	 *
	 */
	public function actionGetOldnews(){
		$news = News2::first();
		return View::make('updatenews', array('newscontent'=>$news, 'home_url'=>$this->getIndexUrl() ));
	}

	/*
	 * Modify new News
	 * @param int news_newsid
	 */
	public function actionUpdate($newsid){
		$newcontent = $_POST['thenews'];
		$waitforedit = News2::find($newsid);
		$waitforedit->newscontent = $newcontent;
		try {
			$waitforedit->save();
			return Redirect::action('IndexController@getContent');  //Connect to  another controller.
		} catch (Exception $e) {
			echo $e->getMessage();
			exit;
		}
	}
}