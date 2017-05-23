<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;
use estoque\Produto;

class TipoDeCouro extends Model {

		public $timestamps = false;
		protected $fillable = array('nome_couro');
	    public function produto(){
        return $this->hasMany('estoque\Produto');
    }

}
