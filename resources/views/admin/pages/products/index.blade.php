
@extends('admin.layouts.app')

@section('content')
    <h1>Exibindo os produtos</h1>
<hr>

<table class="table table">
    <thead class="thead-dark">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody class="table-striped">
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalhes</a>
                </td>
               
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar</a>
    {!! $products->links() !!}

@endsection



