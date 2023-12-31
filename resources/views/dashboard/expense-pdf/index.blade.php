<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Pengeluaran {{ auth()->user()->name }}</title>
  <style>
    tr:nth-child(even){
    background-color: #cce8ff;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
  </style>
</head>
<body>
  <h3><center>Laporan Pengeluaran {{ auth()->user()->name }}</center></h3>
<table border="0" cellspacing="0" cellpadding="8" class="center">
  <tr>
    <th>No</th>
    <th>Nominal</th>
    <th>Keperluan Pengeluaran</th>
    <th>Tanggal</th>
    <th>Catatan</th>
  </tr>
  @foreach($expenses as $expense) 
  <tr>
    <td>{{ $loop->iteration}} </td>
                        <td>@currency($expense->nominal)</td>
                        <td>{{ $expense->keperluan }}</td>
                        <td>{{ $expense->tanggal }}</td>
                        <td>{{ $expense->notes }}</td>
  </tr>
  @endforeach
</table>
</body>
</html>