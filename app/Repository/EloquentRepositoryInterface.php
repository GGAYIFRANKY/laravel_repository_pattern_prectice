<?php 

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


interface EloquentRepositoryInterface {



	/* 
	
	**Get all models
	** @param array $columns
	** @param array $relations
	** @return collections


	*/
	public function all(array $columns = ['*'], array $relations = []): Collection;







	/* 
	
	**Get all trashed models
	** @return collections

	*/

	public function allTrashed(): Collection;







	/* 
	** Find Model by Id
	
	** @param int $modelId 
	** @param array $columns
	** @param array $relations
	** @param array $appends 

	** @return Model


	*/

	public function findById(

		int $modelId,
		array $columns = ['*'],
		array $relations = [],
		array $appends = []

	): ? Model;






	/* 
	
	** Find Trashed Model by Id
	** @param int $modelId
	** @return Model

	*/

	public function findTrashedById(int $modelId): ?Model;







	/* 
	
	** Find Trashed Model by Id
	** @param int $modelId
	** @return Model

	*/

	public function findOnlyTrashedById(int $modelId): ?Model;







	/* 
	
	** Create a Model
	** @param array $payload
	** @return Model

	*/

	public function create(array $payload): ?Model;







	/* 
	
	** Update existing Model
	** @param int $modelId
	** @param array $payload
	** @return bool

	*/

	public function update(int $modelId, array $payload): ?bool;






	/* 
	
	** Delete Model by Id
	** @param int $modelId
	** @return bool

	*/

	public function deleteById(int $modelId): ?bool;





	/* 
	
	** Restore Model by Id
	** @param int $modelId
	** @return bool

	*/

	public function restoreById(int $modelId): ?bool;




	/* 
	
	** Permanently Delete Model by Id
	** @param int $modelId
	** @return bool

	*/

	public function permanentlyDeleteById(int $modelId): ?bool;



}


?>