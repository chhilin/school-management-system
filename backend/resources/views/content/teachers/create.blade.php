<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="d-flex container bg-light shadow  p-4 my-5 h-auto">
        <form action="{{ route('teachers.create') }}" method="POST"  enctype="multipart/form-data" >
            @csrf
            <h1 class="fs-2 text-center text-warning">Create New</h1>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="teacher_id" class="form-label">Teacher ID:</label>
                    <input type="text" placeholder="Input Teacher ID" class="form-control" name="teacher_id" id="teacher_id" required>
                </div>
                <div class="col-md-6">
                    <label for="khmer_name" class="form-label">Khmer Name:</label>
                    <input type="text" placeholder="Input Khmer Name" class="form-control" name="khmer_name" id="khmer_name" required>
                </div>

                <div class="col-md-6">
                    <label for="english_name" class="form-label">English Name:</label>
                    <input type="text" placeholder="Input English Name" class="form-control" name="english_name" id="english_name" required>
                </div>

                <div class="col-md-6 ">
                    <label for="gender" class="form-label">Gender:</label>
                    <select class="form-select" name="gender" id="gender" required>
                        <option></option>
                        <option value="1">ស្រី</option>
                        <option value="2">ប្រុស</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="date_of_birth" class="form-label">Date of Birth:</label>
                    <input type="date" placeholder="Input Date of Birth" class="form-control" name="date_of_birth" id="date_of_birth" required>
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" placeholder="Input Address" class="form-control" name="address" id="address" required>
                </div>
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="phone" placeholder="Input Phone Number" class="form-control" name="phone_number" id="phone_number" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" placeholder="Input Email" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="major" class="form-label">Major:</label>
                    <input type="text" placeholder="Input Major" class="form-control" name="major" id="major" required>
                </div>
                <div class="col-md-6">
                    <label for="employment_status" class="form-label">Employment Status:</label>
                    <select name="employment_status" class="form-select" id="employment_status">
                        <option value=""></option>
                        <option value="full_time">Full time</option>
                        <option value="part_time">Part Time </option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="hire_date" class="form-label">Hire Date:</label>
                    <input type="date" class="form-control" name="hire_date" id="hire_date" required>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning">Create Teacher</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>