<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('dashboard.navbar')


    <div class="container">
        <div class="center-heading" style="text-align: center;">
            <h1>Edit Training Program</h1>
        </div>
        <form action="{{ route('training.update', $training->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group
    @foreach ($trainings as $training)
</body>
</html>