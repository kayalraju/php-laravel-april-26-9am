<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Employee with department</a></h1>

   
    <table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
    </tr>

    @foreach ($employees as $emp)
    <tr>
        <td>{{ $emp->name }}</td>
        <td>{{ $emp->email }}</td>
        <td>{{ $emp->department->name }}</td>
        <td></td>
    </tr>
    @endforeach
</table>

</body>
</html>