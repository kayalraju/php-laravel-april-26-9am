<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
       <form action="{{ route('employee.store') }}" method="POST">
    @csrf

    <label>Employee Name</label>
    <input type="text" name="name">
<br>
    <label>Email</label>
    <input type="email" name="email">
        <br>
    <label>Select Department</label>
    <select name="department_id">
        @foreach ($deparments as $dept)
            <option value="{{ $dept->id }}">{{ $dept->name }}</option>
        @endforeach
    </select>
<br>
    <button type="submit">Save</button>
</form>

    </div>
</body>
</html>