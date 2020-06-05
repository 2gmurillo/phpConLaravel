@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>{{$report->title}}</h1>
  <a class="button" href="/expense_reports/{{$report->id}}/expenses/create">New Expense</a>
  <a class="button" href="/expense_reports/">Back</a>
  <table>
    <tr>
      <th>Referencia</th>
      <th>Fecha</th>
      <th>Costo</th>
    </tr>
    @foreach($report->expenses as $expense)
    <tr>
      <td>{{$expense->description}}</td>
      <td>{{$expense->created_at}}</td>
      <td>{{$expense->amount}}</td>
    </tr>
    @endforeach
  </table>
  <a class="button" href="/expense_reports/{{$report->id}}/confirmSendEmail">Send Email</a>
</div>
@endsection