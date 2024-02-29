<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update form</h1>
    
    
    <div>
        <form action="{{ route('student.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            name = <input type="text" name="name" value="{{ $data->name }}" id=""><br><br>
            f_name = <input type="text" name="f_name" value="{{ $data->f_name }}" id=""><br><br>
            email = <input type="text" name="email" value="{{ $data->email }}" id=""><br><br>
            address = <input type="text" name="address" value="{{ $data->address }}" id=""><br><br>
            number = <input type="number" name="number" value="{{ $data->number }}" id=""><br><br>
            image = <input type="file" name="image"  id=""><br><br>
            <input type="submit" name="submit" id="">
        </form>
    </div>
</body>
</html>