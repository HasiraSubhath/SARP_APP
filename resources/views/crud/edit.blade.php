<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>create

    </h1>
    <form class="form-horizontal" method="POST" action="/crud/{{$crud->id}}">
        @csrf
        @method('PUT')
        <input type="text" name="fname" value="{{$crud->fname}}" placeholder="firstName">
        <input type="text" name="lname" value="{{$crud->lname}}" placeholder="lastName">
        <input type="text" name="phone" value="{{$crud->phone}}" placeholder="Phone">
        <button type="submit" name="button">Submit</button>
        
        {{-- <form class="form-horizontal" method="POST" action="/crud/{{$crud->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" name="button">Delete</button> --}}
        </form>

</body>
</html>