<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;
use estoque\Referencia;
use estoque\TipoDeCouro;

class Produto extends Model {

	protected $fillable = array('cor','quantidade','referencia_id', 'tipodecouro_id');

	public function referencia(){
		return $this->belongsTo('estoque\Referencia');
	}

	public function tipodecouro(){
		return $this->belongsTo('estoque\TipoDeCouro');
	}
}


