@extends('layouts.layout')


@section('title', 'Listagem')

@section('content')
<div class="container ">
<h1>Listagem</h1>
<a href="{{route('create')}}">Create</a> <br><br>
<table >
    <thead>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>editar</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
        @foreach($teste as $data)
        <tr>
            <th>{{$data->id}}</th>
            <th>{{$data->nome}}</th>
            <th><a class="form-control bg-warning " style='text-decoration:none;'href="{{route('edit',['id'=>$data->id])}}">Edit</a></th>
            <th><form action="{{route('destroy',['id'=>$data->id])}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit" class="form-control bg-danger">delete</button>
            </form></th>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection



