<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cidade extends Model
{
	protected $table = 'cidades';

	public function cidades_Ajax($CO_UF){
		if($CO_UF == null or $CO_UF == 0)
			$users = DB::select('select * from cidades');
		else
			$users = DB::select('select * from cidades where "CO_UF"='.$CO_UF);

		return json_encode($users,JSON_UNESCAPED_UNICODE);
	}
}
