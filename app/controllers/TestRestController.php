<?php

class TestRestController extends \BaseController {
	public function getUser(){
			$users = User::All()->toJson();
			return $users;
	}

}