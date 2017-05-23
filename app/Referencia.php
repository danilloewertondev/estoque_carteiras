<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;
use estoque\Produto;


class Referencia extends Model {

	public $timestamps = false;
	protected $fillable = array('nome_referencia','valor');
	public function produto(){
		return $this->hasMany('estoque\Produto');
	}
	

}