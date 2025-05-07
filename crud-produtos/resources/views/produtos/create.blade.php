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
                <h2>Adicionando Produto</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())    
        <div class="alert alert-danger">
            <p>Houve algum erro no Input</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="post" class="row">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="Name" class="form-label">
                        <strong>Name:</strong>
                    </label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Price" class="form-label">
                        <strong>Price:</strong>
                    </label>
                    <input type="decimal" name="preco" class="form-control" placeholder="Preço">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="Detail" class="form-label">
                        <strong>Detail:</strong>
                    </label>
                    <textarea name="descricao" class="form-control" rows="4" placeholder="Descrição"></textarea>
                </div>
            </div>

            <div class="col-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection