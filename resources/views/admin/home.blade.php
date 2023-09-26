@extends('adminlte::page')

@section('title', 'Ínicio - notSO')

@section('content_header')
<h1>Ínicio</h1>
@stop

@section('content')
<h3 class="mb-4">Bem vind{{ Auth::user()->gender == 'female' ? 'a' : 'o' }}, <b>{{ strtoupper(current(explode(" ", Auth::user()->name))) }}</b></h3>

<div class="d-flex">
    <a href="/admin" class="card mr-3 text-center p-4 pb-2 home__item">
        <span class="mb-2">
            <i class="fas fa-fw fa-users fa-2x"></i>
        </span>
        <h5>Usuários</h5>
    </a>
    <a href="/admin" class="card mr-3 text-center p-4 pb-2 home__item">
        <span class="mb-2">
            <i class="fas fa-fw fa-shopping-bag fa-2x"></i>
        </span>
        <h5>Produtos</h5>
    </a>
    <a href="/admin" class="card mr-3 text-center p-4 pb-2 home__item">
        <span class="mb-2">
            <i class="fas fa-fw fa-cog fa-2x"></i>
        </span>
        <h5>Serviços</h5>
    </a>
    <a href="/admin" class="card mr-3 text-center p-4 pb-2 home__item">
        <span class="mb-2">
            <i class="fas fa-fw fa-cogs fa-2x"></i>
        </span>
        <h5>Configurações</h5>
    </a>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
