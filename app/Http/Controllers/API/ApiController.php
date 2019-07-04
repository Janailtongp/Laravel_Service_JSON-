<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API\Estado;
use App\API\Cidade;
class ApiController extends Controller
{

public function index($CO_UF = 0){
	$estados = new Estado();
	return $estados->uf_Ajax($CO_UF);
}

public function city($CO_UF = 0){
	$cidades = new Cidade();
	return $cidades->cidades_Ajax($CO_UF);
}

public function SelectEndereco(){
	$cidades = new Cidade();
	return view('API/index');
}




}
