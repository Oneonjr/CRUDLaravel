<!-- <h1>{{ isset($produto) ? 'Editar Produto' : 'Novo Produto' }}</h1>
<form action="{{ isset($produto) ? route('produtos.update', $produto) : route('produtos.store') }}" method="POST">
    @csrf
    @if(isset($produto)) @method('PUT') @endif

    <input type="text" name="nome" placeholder="Nome" value="{{ $produto->nome ?? '' }}">
    <input type="text" name="preco" placeholder="Preço" value="{{ $produto->preco ?? '' }}">
    <textarea name="descricao" placeholder="Descrição">{{ $produto->descricao ?? '' }}</textarea>
    <button type="submit">{{ isset($produto) ? 'Atualizar' : 'Criar' }}</button>
</form> -->

@extends('produtos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-8 my-4">
            <div class="float-left">
                <h2>Edit Product</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('produtos.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>There are some problems in your input</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.update', $produto->id) }}" method="post" class="row">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="Name" class="form-label">
                        <strong>Nome:</strong>
                    </label>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Preco" class="form-label">
                        <strong>Preço:</strong>
                    </label>
                    <input type="decimal" name="preco" value="{{ $produto->preco }}" class="form-control">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Detail" class="form-label">
                        <strong>Descrição:</strong>
                    </label>
                    <textarea name="descricao" rows="4" class="form-control">
                        {{ $produto->descricao }}
                    </textarea>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
