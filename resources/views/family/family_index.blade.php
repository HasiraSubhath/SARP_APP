<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Youth</th>
                <th>Education</th>
                <th>Employment</th>
                <th>Nutrition Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($families as $family)
            <tr>
                <td>{{ $family->first_name }}</td>
                <td>{{ $family->last_name }}</td>
                <td>{{ $family->phone }}</td>
                <td>{{ $family->gender }}</td>
                <td>{{ $family->dob }}</td>
                <td>{{ $family->youth }}</td>
                <td>{{ $family->education }}</td>
                <td>{{ $family->employment }}</td>
                <td>{{ $family->nutrition_level }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>