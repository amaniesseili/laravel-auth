@extends('layouts.app')

@section("content")

<h1>{{$project->title}}</h1>
<img src="{{$project->image}}" alt="" class="img-fluid">

{{-- description or body?? --}}
<p>{{$project->description}}</p> 



@endsection