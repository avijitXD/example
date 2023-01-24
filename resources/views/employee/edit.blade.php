<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('employee.update',$employee->id)}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter Your Name" value="{{$employee->name}}">
        <input type="email" name="email" id="" placeholder="Enter Your email" value="{{$employee->email}}">
        <input type="password" name="password" id="" placeholder="Enter Your password" value="{{$employee->password}}">
        <button type="submit">Update</button>
    </form>
</body>
</html>