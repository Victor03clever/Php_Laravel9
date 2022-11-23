@extends('layouts.layout')
@section('title','Create')

<h1>create</h1>

<a href="{{route('controllerTeste')}}" >Voltar</a>

    <form action="{{route('store')}}" method="POST">
        @csrf
        Nome <br>
        <input type="text" class="form-control" name="nome" id="nome">
        <input type="submit" class="form-control bg-success" value="submeter">
    </form>