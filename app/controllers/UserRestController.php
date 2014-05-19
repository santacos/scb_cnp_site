<?php


class UserRestController extends \BaseController {
	public function getUser(){
			$users = User::All()->toJson();
			return $users;
	}

}