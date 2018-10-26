<?php

namespace www\html\model; 		// class PostManager dans dossier model.

require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getPost($postId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		return $post;
	}
	public function getPosts()
	{
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, title, content FROM posts');
		return $req;
	}
}
