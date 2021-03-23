@extends('layouts.modelobase');
@section('conteudo')
    <h2>Criar diários</h2>

    <form action="/diarios" method="POST">
        @csrf
            <div class=mb-3>
                <label for="" class="form-label">Descrição</label>
                <input id="descricao" name="descricao" type="text" class="form-control" tabindex="1">

             </div>
      
       
            <div class=mb-3>
             <label for="" class="form-label">Nº Relatório</label>
                <input id="numero_relatorio" name="numero_relatorio" type="text" class="form-control" tabindex="1">

            </div>
        <div class=mb-3>
            <label for="" class="form-label">Nº Contrato</label>
            <input id="numero_contrato" name="numero_contrato" type="text" class="form-control" tabindex="1">

        </div>
        <div class=mb-3>
            <label for="" class="form-label">Unidade</label>
            <input id="unidade" name="unidade" type="text" class="form-control" tabindex="1">

        </div>

        <div class=mb-3>
            <label for="" class="form-label">Nome cliente</label>
            <input id="nome_cliente" name="nome_cliente" type="text" class="form-control" tabindex="1">

        </div>

        <div class=mb-3>
            <label for="" class="form-label">Clima</label>
            <input id="clima" name="clima" type="text" class="form-control" tabindex="1">

        </div>

        <div class=mb-3>
            <label for="" class="form-label">Local Obra</label>
            <input id="local_obra" name="local_obra" type="text" class="form-control" tabindex="1">

        </div>

       
        <div class=mb-3>
            <label for="" class="form-label">Data da obra</label>
            <input id="dataobra" name="dataobra" type="text" class="form-control" tabindex="1">

        </div>
        <a href="/diarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Salvar</button>





    </form>

@endsection
