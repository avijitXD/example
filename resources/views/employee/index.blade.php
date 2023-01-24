<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        @foreach ($employees as $employee)

        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2">Actions</th>
        <tr>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->password}}</td>
            <td><a href="{{route('employee.edit',$employee->id)}}">Edit</a></td>
            <td>
                <form action="{{route('employee.delete',$employee->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <div class="add">
            <a href="{{route('employee.create')}}">Add</a>
        </div>
        @endforeach
    </table>
</body>
</html>