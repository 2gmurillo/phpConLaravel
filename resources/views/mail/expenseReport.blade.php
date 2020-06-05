<h1>Expense report for {{$report->title}}</h1>
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