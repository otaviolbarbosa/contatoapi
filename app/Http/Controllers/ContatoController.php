<?php

namespace App\Http\Controllers;

use App\Contato;

class ContatoController extends Controller {
  protected $contato = null;

  public function __construct(Contato $c) {
    $this->contato = $c;
  }

  public function todos() {
    return $this->contato->todos();
  }

  public function salvar() {
    return $this->contato->salvar();
  }

  public function apagar($id) {
    return $this->contato->apagar($id);
  }
}