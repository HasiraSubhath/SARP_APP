<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create</title>
</head>
<body>
    <h1>create

    </h1>
    <form class="form-horizontal" method="POST" action="/crud">
        @csrf

        <input type="text" name="fname" value="" placeholder="firstName">
        <input type="text" name="lname" value="" placeholder="lastName">
        <input type="text" name="phone" value="" placeholder="Phone">
        <button type="submit" name="button">Submit</button>
</body>
</html>