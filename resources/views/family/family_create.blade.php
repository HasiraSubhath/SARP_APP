<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>family create</title>
</head>
<body>
    <form action="/family" method="POST">
        @csrf
    
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" name="dob" id="dob" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="youth">Youth</label>
            <input type="text" name="youth" id="youth" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" name="education" id="education" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="employment">Employment</label>
            <input type="text" name="employment" id="employment" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="nutrition_level">Nutrition Level</label>
            <input type="text" name="nutrition_level" id="nutrition_level" class="form-control" required>
        </div>

        <div>
            <input type="hidden" name="beneficiary_id" value="{{ $beneficiaryId }}">

    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
