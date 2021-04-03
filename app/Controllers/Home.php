<?php

namespace App\Controllers;

use App\Models\PostModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new PostModel();

		$post = $this->request->getVar('post');
		if(!empty($post)){
			$new_post['post'] = $this->request->getVar('post');
			$new_post['name'] = $this->request->getVar('name');
			$new_post['posted'] = time();

			$model->save($new_post);
		}

		$data['posts'] = $model->getPosts();
		// $data['posts'] = array();

		return view('post', $data);
	}
}
