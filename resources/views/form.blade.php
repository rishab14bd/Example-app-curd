<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>form</h1>
    <div>
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            name = <input type="text" name="name" id=""><br><br>
            f_name = <input type="text" name="f_name" id=""><br><br>
            email = <input type="text" name="email" id=""><br><br>
            address = <input type="text" name="address" id=""><br><br>
            number = <input type="number" name="number" id=""><br><br>
            image = <input type="file" name="image" id=""><br><br>
            <input type="submit" name="submit" id="">
        </form>
    </div>
    <h1><a href="{{ route('student.index') }}">index</a></h1>
</body>
</html>
