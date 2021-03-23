@extends('adminlte::page')

@section('title', 'Diário de obras')

@section('content_header')
    <h1>Diário de obras</h1>
@stop

@section('content')
<a href="diarios/create" class="btn btn-primary">Criar</a>

<table id=diarios class="table table-striped table-bordered shadow-lg mt-4">
    <thead class="bg-primary bg-dark text-white">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Descrição</th>
            <th scope="col">Nº Relatório</th>
            <th scope="col">Nºcontrato</th>
            <th scope="col">Unidade</th>
            <th scope="col">Nome cliente</th>
            <th scope="col">Clima</th>
            <th scope="col">Local Obra</th>
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
          
        </tr>
    
    
    </thead>
    <tbody>
        @foreach($diarios as $diario)
        
        <tr>
            <td>{{$diario->id}}</td>
            <td>{{$diario->descricao}}</td>
            <td>{{$diario->numero_relatorio}}</td>
            <td>{{$diario->numero_contrato}}</td>
            <td>{{$diario->unidade}}</td>
            <td>{{$diario->nome_cliente}}</td>
            <td>{{$diario->clima}}</td>
            <td>{{$diario->local_obra}}</td>
            <td>{{$diario->dataobra}}</td>
            
            <td>
                <form action="{{ route('diarios.destroy',$diario->id) }}" method="POST">
                    <a href="/diarios/{{$diario->id}}/edit" class="btn btn-dark btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>        
            </td>     
            
        </tr>

        @endforeach
    </tbody>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#diarios').DataTable({
                "lengthMenu":[[5,10, 50,-1],[5,10,50,"All"]]
            });
        } );  
        </script>   
@stop
