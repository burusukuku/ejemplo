<?php 

class UserController extends BaseController
{
	
	public function getIndex()
	{
		$users = User::where('real_name', 'LIKE', 'pri%')
			->get();
		return View::make('users.index') -> with('users', $users);
	}
		
}
?>