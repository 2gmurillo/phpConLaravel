@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>New Report</h1>
  @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
    <li class="alerta">{{$error}}</li>
    @endforeach
  </ul>
  @endif
  <form class="form df-column" action="/expense_reports" method="POST">
    @csrf
    <input class="input" type="text" name="title" placeholder="Title" value="{{old('title')}}">
    <button class="button" type="submit">Save</button>
  </form>
  <a class="button" href="/expense_reports/">Back</a>
</div>
@endsection