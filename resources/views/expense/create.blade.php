@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>New Expense for {{$report->title}}</h1>
  @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
    <li class="alerta">{{$error}}</li>
    @endforeach
  </ul>
  @endif
  <form class="form df-column" action="/expense_reports/{{$report->id}}/expenses" method="POST">
    @csrf
    <input class="input" type="text" name="description" placeholder="Description" value="{{old('description')}}">
    <input class="input" type="number" name="amount" placeholder="Amount" value="{{old('amount')}}">
    <button class="button" type="submit">Save</button>
  </form>
  <a class="button" href="/expense_reports/{{$report->id}}">Back</a>
</div>
@endsection