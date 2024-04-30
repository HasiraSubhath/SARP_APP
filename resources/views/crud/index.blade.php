<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    index
    <table>
        <tr>
            <th>id</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>phone</th>
            <th>action</th>
        </tr>
        @foreach ($cruds as $crud)
        <tr>
            <td>{{$crud->id}}</td>
            <td>{{$crud->fname}}</td>
            <td>{{$crud->lname}}</td>
            <td>{{$crud->phone}}</td>
            <td>
                {{-- <a href="crud/{{$crud->id}}">show</a>
                <a href="crud/{{$crud->id}}/edit">edit</a> --}}

                <button onclick="location.href='crud/{{$crud->id}}'">Show</button>
<button onclick="location.href='crud/{{$crud->id}}/edit'">Edit</button>
                {{-- <a href="crud/{{$crud->id}}/delete">delete</a> --}}
                <form action="/crud/{{$crud->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach
</body>
</html>