@extends('admin.layouts.app')

@section('title', "Detalhe do Produto {$product->name}")    

@section('content')

<h1>Detalhe do produto {{ $product->name }}</h1>
<ul>
    <li><strong>Nome: </strong> {{ $product->name }}</li>
    <li><strong>Preço: </strong> {{ $product->price }}</li>
    <li><strong>Descrição: </strong> {{ $product->description }}</li>
</ul>

<hr>

<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Deletar</button>
</form>

<a href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a> 
    
@endsection