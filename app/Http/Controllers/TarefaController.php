<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $tarefas = Tarefa::all();
    return view("adm/tarefa", compact('tarefas'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $users = User::all();
    return view("adm/tarefa/create", compact('users'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'user_id' => 'required|integer',
      'descricao' => 'required|max:255',
      'data' => 'required|max:255',
    ]);
    if ($validated) {
      $tarefas = new Tarefa();
      $tarefas->user_id = $request->get('user_id');
      $tarefas->descricao = $request->get('descricao');
      $tarefas->data = $request->get('data');
      $tarefas->save();
      return redirect("tarefa");
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Tarefa  $tarefas
   * @return \Illuminate\Http\Response
   */
  public function show(Tarefa $tarefas)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Tarefa  $tarefas
   * @return \Illuminate\Http\Response
   */
  public function edit(Tarefa $tarefa)
  {
    $users = User::all();
    return view("adm/tarefa/edit", compact('users', 'tarefa'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Tarefa  $tarefas
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Tarefa $tarefa)
  {
    $validated = $request->validate([
      'user_id' => 'required|integer',
      'descricao' => 'required|max:255',
      'data' => 'required|max:255',
    ]);
    if ($validated) {
      $tarefas = new Tarefa();
      $tarefas->user_id = $request->get('user_id');
      $tarefas->descricao = $request->get('descricao');
      $tarefas->data = $request->get('data');
      $tarefas->save();
      return redirect("tarefa");
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Tarefa  $tarefas
   * @return \Illuminate\Http\Response
   */
  public function destroy(Tarefa $tarefas)
  {
    $tarefas->delete();
    return redirect("tarefa");
  }
}