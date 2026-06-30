@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{$task->description}}</p>
    @if($task->long_description)
        <small>{{$task->long_description}}</small><br>
    @else
        <small><i>There is no long description task</i></small><br>
    @endif
    <span>{{$task->created_at}}</span><br>
    <span>{{$task->updated_at}}</span>
@endsection

