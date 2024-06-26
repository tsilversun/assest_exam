<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    add / edit contacts
    <div class="form-floating mb-3">
        <input type="text" class="form-control bg-secondary text-white" name="firstname" id="student_firstname" placeholder="firstname">
        <label for="floatingInput" class="text-white">First Name :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control bg-secondary text-white" name="lastname" id="student_lastname" placeholder="lastname">
        <label for="floatingInput" class="text-white">company :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control bg-secondary text-white" name="age" id="student_age" placeholder="Age">
        <label for="floatingInput" class="text-white">phone :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control bg-secondary text-white" name="address" id="student_address" placeholder="Address">
        <label for="floatingInput" class="text-white">email :</label>
    </div>
    <div class="modal-footer">
            <button type="button" id="BTN_submit" class="btn btn-success" data-bs-dismiss="modal">Add Student</button>
    </div>
</body>
</html>