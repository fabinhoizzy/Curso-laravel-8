@extends('admin.layouts.app')
<h1>Cadastrar Novo Usuario</h1>

@section('title', 'Criar Novo Post')

@section('content')
    
<form action="{{ route('posts.store')}}" method="post">
    @include('admin.posts._partials.form')
</form>

@endsection