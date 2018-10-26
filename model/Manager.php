<?php

namespace www\html\model;			// class Manager dans dossier model

class Manager
{
	protected function dbConnect()
	{
		try
		{
			$db = new \PDO('mysql:host=localhost;dbname=base_tuto_MVC;charset=utf8', 'magna', 'magna');
			return $db;
		}
		catch(Exception $e)
		{
			die("Erreur : ". $e->getMessage());
		}
	}
}
