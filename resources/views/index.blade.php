<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dd($data->toArray()); --}}
    <h1>all record</h1>
    <table border="2px solid black">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>father name</th>
            <th>email</th>
            <th>address</th>
            <th>number</th>
            <th>image</th>
            <th>opraion</th>
        </tr>
        @foreach ($data as $key=> $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->f_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->number }}</td>
                <td>
                    <img src="{{asset('img/'.$item->image)}}" width="100px" height="100px" alt="">
                </td>
                <td>
                    <a href="{{ route('student.edit',$item->id) }}">update</a>
                    <a href="{{ route('student.delete',$item->id) }}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
