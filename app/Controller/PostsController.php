<?php
// cake_tw2
// コントローラーから、TwitterAPIを呼び出し、データベースの挿入
// IPアドレス/cakephp_tw2/posts
// 2014年12月11日現在まだできていない


class PostsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		// $this->set('posts', $this->Post->find('all'));
		// $this->set('title_for_layout', '記事一覧');
		/*
		if(isset($results) && empty($results->errors)){
			foreach($results as $tweet){
				$data = array(
					'Post' => array(
						'title' => '$tweet->user->screen_name',
						'body' => '$tweet->text',
					)
				);
			$this->create();
			$this->Post->save($data);
			}
		}
		*/
		$data = array(
			'Post' => array(
				'title' => 'title_f',
				'body' => 'body_f',
			)
		);
		$this->Post->save($data);
		$this->Post->create();
		$this->Post->save($data);
		debug($this->Post->id);
	}

	public function view($id = null) {
		// $this->Post->id = $id;
		// $this->set('post', $this->Post->read());
	}
}