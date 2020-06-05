@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>Send Report</h1>
  <form class="form df-column" action="/expense_reports/{{$report->id}}/sendEmail" method="POST">
    @csrf
    <input class="input" type="email" name="email" placeholder="Email">
    <button class="button" type="submit">Send</button>
  </form>
  <a class="button" href="/expense_reports/{{$report->id}}">Back</a>
</div>
@endsection