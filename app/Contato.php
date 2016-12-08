<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Contato extends Model {
  protected $fillable = ['nome', 'telefone', 'email'];

  public function todos() {
    return self::all();
  }


  public function salvar() {
    $input = Input::all();
    $contato = new Contato();
    $contato->fill($input);
    $contato->save();

    return $contato;
  } 
}