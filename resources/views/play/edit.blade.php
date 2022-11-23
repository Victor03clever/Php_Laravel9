@extends('layouts.layout')
@section('title','Update')

<h1>Update</h1>
<button> 
<a href="{{route('controllerTeste')}}">Voltar</a>
</button>
    <form action="{{route('update', ['id'=>$dados->id])}}" method="POST">
        @csrf
        @method('PATCH')
        Nome <br>
        <input type="text" name="nome" id="nome" value={{$dados->nome}}>
        <input type="submit" value="actualizar" value="">
    </form>