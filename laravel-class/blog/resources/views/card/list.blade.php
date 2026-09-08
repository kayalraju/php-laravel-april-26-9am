<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1>Student List</h1>
        <a href="{{route('student.create')}}" class="btn btn-primary">Add Student</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">address</th>
                <th scope="col">phone</th>
                <th scope="col">Image</th>
                <th colspan="2" scope="col">Action</th>
                </tr>
            </thead>
            @foreach($students as $student)
            <tbody>
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td><img src="{{ asset('uploads/' . $student->image) }}" alt="{{ $student->name }}" width="100"></td>
                    <td><a href="{{ route('student.single.view',$student->id) }}" class="btn btn-success">view</a></td>
                    <td><a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Update</a></td>
                    <td><a href="{{ route('student.destroy', $student->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
               
            </tbody>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>