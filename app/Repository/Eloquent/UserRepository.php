<?php 


namespace App\Repository\Eloquent;


use App\Models\User;
use App\Repository\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface{


	/* 
		@var $model
	*/
	protected $model;



	/* 
		BaseRepository Constructor

		@param Model $model
	*/

	public function __construct(User $model){

		$this->model = $model;
	}



}



?>