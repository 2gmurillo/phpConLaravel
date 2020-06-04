@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>New Report</h1>
  <a class="button" href="/expense_reports/">Back</a>
  <form class="form df-column" action="/expense_reports" method="POST">
    <input class="input" type="text" name="title" placeholder="Title">
    <button class="button" type="submit">Save</button>
  </form>
</div>
@endsection