<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
	protected $allowedFields = ['post', 'name', 'posted'];

	public function getPosts(){
        return $this->orderBy('posted', 'desc')
					->findAll();
	}
}