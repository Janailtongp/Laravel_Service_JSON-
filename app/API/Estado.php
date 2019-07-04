<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estado extends Model
{
    protected $table = 'estados';

	public function uf_Ajax($CO_UF){
		if($CO_UF == null or $CO_UF == 0)
			$users = DB::select('select * from estados');
		else
			$users = DB::select('select * from estados where "CO_UF"='.$CO_UF);

		return json_encode($users,JSON_UNESCAPED_UNICODE);
	}

}
