<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>show specifis data </h1>

    <h2>{{$crud->id}}</h2>
    <h2>{{$crud->fname}}</h2>
    <h2>{{$crud->lname}}</h2>
    <h2>{{$crud->phone}}</h2>

    <a href ="{{$crud->id}}/edit">edit</a>
</body>
</html>