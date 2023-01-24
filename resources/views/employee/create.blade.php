<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('employee.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Enter Your Name">
        <input type="email" name="email" id="" placeholder="Enter Your email">
        <input type="password" name="password" id="" placeholder="Enter Your password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>