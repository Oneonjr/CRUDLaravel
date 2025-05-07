@extends('produtos.layout')

@section('content')
    <div class="row">
        <div class="col-12 my-4">
            <div class="float-left">
                <h2>Show produto</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('produtos.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 my-4">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $produto->nome }}
            </div>

            <div class="form-group">
                <strong>Preço:</strong>
                R$ {{ number_format($produto->preco, 2, ',', '.') }}
            </div>

            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $produto->descricao }}
            </div>
        </div>
    </div>
@endsection