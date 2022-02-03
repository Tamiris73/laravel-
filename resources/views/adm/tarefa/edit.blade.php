@extends('adm.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form method="POST" action="{{url('tarefa',$tarefa->id)}}">
  @csrf
  @method('PUT')
  <div  class="row">
    <label class="col-2" for="user">Usuário</label>
        <select class="col-5" name="user_id" id="user">
        <option></option>
        @foreach($users as $user)
        <option value="{{$user->id}}" @if($user->id==old('user_id')) selected @endif>{{$user->name}}</option>
        @endforeach
        </select>
    </div>
  <div class="row">
    <label class="col-2" for="descricao">Descrição</label>
    <input type="test" name="descricao" id="descricao" class="col-5" value="{{ $tarefa->descricao }}" />
  </div>
  <div class="row">
    <label class="col-2" for="data">Data</label>
    <input type="date" name="data" id="nasc" class="col-3" value="{{ $tarefa->data }}" />
  </div>
  <button type="submit" class="button">Salvar</button>
</form>

@endsection