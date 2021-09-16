@extends('adm.layout')

@section('content')
<a href="{{url('tarefa/create')}}" class="button">Adicionar</a>
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Data</th>
      <th>Editar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefas as $tarefas)
    <tr>
      <td>{{$tarefas->user->name}}</td>
      <td>{{$tarefas->descricao}}</td>
      <td>{{$tarefas->data}}</td>
      <td>
        <a href="{{route('tarefa.edit',$tarefas->id)}}" class="button">
          Editar
        </a>
      </td>
      <td>
        <form method="POST" action="{{route('tarefa.destroy',$tarefas->id)}}" onsubmit="return confirm('tem certeza?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="button">
            Remover
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection