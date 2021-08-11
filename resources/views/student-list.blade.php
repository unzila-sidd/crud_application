<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <style>
    <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
    </style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th> 
  </tr>
  @foreach($students as $student)
  <tr>
    <td>{{ $student -> id}}</td>
    <td>{{ $student -> name}}</td>
    <td>{{ $student -> email}}</td>
  </tr>
  @endforeach
  
  
</table>
</body>
</html>