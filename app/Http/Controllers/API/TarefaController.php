<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefa = Tarefa::all();
        return $this->success($tarefa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'user_id' => 'required|integer|exists:App\Models\User,id',
        'descricao' => 'required|max:255',
        'data' => 'required|max:255',
      ]);
      if ($validated) {
        $tarefa = new Tarefa();
        $tarefa->user_id = $request->get('user_id');
        $tarefa->descricao = $request->get('descricao');
        $tarefa->data = $request->get('data');
        $tarefa->save();
        return $this->success($tarefa);
      }
    }
  
    /**
     * Display the specified resource.....
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }
  }