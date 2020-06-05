@extends('layouts.base')

@section('content')
<div class="df-column">
  <h1>Reports</h1>
  <a class="button" href="/expense_reports/create">Create a New Report</a>
  <table>
    <tr>
      <th>Detalle</th>
      <th>Costo</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    @foreach($expenseReports as $expenseReport)
    <tr>
      <td>{{$expenseReport->title}}</td>
      <td>Precio</td>
      <td><a href="/expense_reports/{{$expenseReport->id}}/edit">Edit</a></td>
      <td><a href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection