@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>Reports</h1>
  <a class="button" href="/expense_reports/create">Create a New Report</a>
  <table>
    @foreach($expenseReports as $expenseReport)
    <tr>
      <td>{{$expenseReport->title}}</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection