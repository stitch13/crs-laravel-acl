@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->description}}</p>
    <br>
    <b>Author: {{$post->user->name}}</b>
        @can('update-post', $post)
        <a href="{{"/post/$post->id/update"}}">Editar</a>
        @endcan
    <hr>
    @empty
    <p>Nenhum post cadastrado !!!</p>
    @endforelse
</div>
@endsection
