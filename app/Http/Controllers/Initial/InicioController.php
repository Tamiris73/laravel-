<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
  public function index()
  {
    $carousel = [
      "imagens" =>
      [
        [
          "nome" => "Tarefas",
          "url" => "img/carousel/tarefas.png"
        ], [
          "nome" => "pensando",
          "url" => "img/carousel/pensando.png"
        ]
      ]
    ];
    return view("initial/inicio", $carousel);
  }
}