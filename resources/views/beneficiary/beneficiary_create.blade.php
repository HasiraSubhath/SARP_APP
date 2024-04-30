<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beneficiary register</title>
</head>
<body>
    <form class="form-horizontal" method="POST" action="/beneficiary">
        @csrf
        <input type="text" name="nic" value="" placeholder="NIC">
        <input type="text" name="first_name" value="" placeholder="firstName">
        <input type="text" name="last_name" value="" placeholder="lastName">
        <input type="text" name="address" value="" placeholder="Address">
        <input type="date" name="dob" value="" placeholder="Date Of Birth">
        <select name="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <input type="text" name="age" value="" placeholder="age">
        <input type="number" name="phone" value="" placeholder="phone">
        <input type="text" name="income" value="" placeholder="Income">
        <input type="text" name="family_members_count" value="" placeholder="Family Members">
        <input type="text" name="education" value="" placeholder="Education level">
        <input type="text" name="land_ownership" value="" placeholder="Land Ownership">
        <input type="text" name="" value="" placeholder="">


        <button type="submit" name="button">Submit</button>
</body>
</html>