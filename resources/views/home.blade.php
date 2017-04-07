@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
    @can('view_post', $post)
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <br>
        <b>Author: {{$post->user->name}}</b>
        <a href="{{"/post/$post->id/update"}}">Editar</a>
    @endcan
    <hr>
    @empty
    <p>Nenhum post cadastrado !!!</p>
    @endforelse
</div>
@endsection
