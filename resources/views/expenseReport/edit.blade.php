@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>Edit Report {{$report->id}}</h1>
  @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
    <li class="alerta">{{$error}}</li>
    @endforeach
  </ul>
  @endif
  <form class="form df-column" action="/expense_reports/{{$report->id}}" method="POST">
    @csrf
    @method('put')
    <input class="input" type="text" name="title" placeholder="Title" value="{{old('title', $report->title)}}">
    <button class="button" type="submit">Edit</button>
  </form>
  <a class="button" href="/expense_reports/">Back</a>
</div>
@endsection