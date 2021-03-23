@extends('adminlte::page')

@section('title', 'Editar registros')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/diarios/{{$diario->id}}" method="POST">
    @csrf    
    @method('PUT')
   <div class=mb-3>
        <label for="" class="form-label">Data da obra</label>
        <input id="dataobra" name="dataobra" type="text" class="form-control" value="{{$diario->data_obra}}">    
    

    </div>
    <div class=mb-3>
        <label for="" class="form-label">Nº Relatório</label>
        <input id="numero_relatorio" name="numero_relatorio" type="text" class="form-control"value="{{$diario->numero_relatorio}}" tabindex="1">

    </div>
    <div class=mb-3>
        <label for="" class="form-label">Nº Contrato</label>
        <input id="numero_contrato" name="numero_contrato" type="text" class="form-control"value="{{$diario->numero_contrato}}" tabindex="1">

    </div>
    <div class=mb-3>
        <label for="" class="form-label">Unidade</label>
        <input id="unidade" name="unidade" type="text" class="form-control"value="{{$diario->unidade}}" tabindex="1">

    </div>

    <div class=mb-3>
        <label for="" class="form-label">Nome cliente</label>
        <input id="nome_cliente" name="nome_cliente" type="text" class="form-control"value="{{$diario->nome_cliente}}" tabindex="1">

    </div>

    <div class=mb-3>
        <label for="" class="form-label">Clima</label>
        <input id="clima" name="clima" type="text" class="form-control"value="{{$diario->clima}}" tabindex="1">

    </div>

    <div class=mb-3>
        <label for="" class="form-label">Local Obra</label>
        <input id="local_obra" name="local_obra" type="text" class="form-control"value="{{$diario->local_obra}}" tabindex="1">

    </div>

    <div class=mb-3>
        <label for="" class="form-label">Descrição</label>
        <input id="descricao" name="descricao" type="text" class="form-control"value="{{$diario->descricao}}" tabindex="1">
    </div>    
    <a href="/diarios" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Salvar</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop