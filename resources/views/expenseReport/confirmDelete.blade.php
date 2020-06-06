@extends('layouts.base')

@section('content')
<div class="df-column">
  <div class="h1">
    <h1>Are you sure you want to delete Report {{$report->id}}</h1>
  </div>
  <form class="form df-column" action="/expense_reports/{{$report->id}}" method="POST">
    @csrf
    @method('delete')
    <button class="button" type="submit">Yes</button>
  </form>
  <a class="button" href="/expense_reports/">No</a>
</div>
@endsection