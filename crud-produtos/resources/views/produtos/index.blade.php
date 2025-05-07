@extends('produtos.layout')

@section('content')


    <div class="row my-4" style="padding: 14px;">
            <div class="col-12">
                <div class="float-left">
                    <h2>Produtos</h2>
                </div>
                <div class="float-right">
                    <a href="{{ route('produtos.create') }}" class="btn btn-success"> Novo Produto</a>
                </div>
            </div>
    </div>

    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif




    <table class="table table-bordered" >
            <tr>
                <th scope="col">Nº</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descricao</th>
                <th scope="col" colspan="3" class="text-center">Ação</th> 
            </tr>

            @foreach ($produtos as $produto)

                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td class="text-center" style="width: 150px;">
                        <a href="{{ route('produtos.show', $produto) }}" class="btn btn-info">Ver</a>
                    </td>
                    <td class="text-center" style="width: 150px;">
                        <a href="{{ route('produtos.edit',$produto) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td class="text-center" style="width: 150px;">
                        <form action="{{ route('produtos.destroy', $produto) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>  
            @endforeach
        </table>

        {{ $produtos->links() }}

@endsection