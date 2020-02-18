@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> 
        @endif
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="text" name="description" placeholder="Descrição" value="{{ old('description') }}">
        <br><input type="file" name="photo">
        <br><button type="submit">Enviar</button>
    </form>
    
@endsection
