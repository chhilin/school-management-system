<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="d-flex container bg-light shadow  p-4 my-5 h-auto">
        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="fs-2 text-center text-warning">Create New</h1>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="teacher_id" class="form-label">អត្តលេខ</label>
                    <input type="text" placeholder="បញ្ចូលអត្តលេខ" class="form-control" name="teacher_id" id="teacher_id" required>
                </div>

                <div class="col-md-6">
                    <label for="khmer_name" class="form-label">ឈ្មោះជាភាសាខ្មែរ</label>
                    <input type="text" placeholder="បញ្ចូលឈ្មោះខ្មែរ" class="form-control" name="khmer_name" id="khmer_name" required>
                </div>

                <div class="col-md-6 my-3">
                    <label for="english_name" class="form-label">ឈ្មោះជាភាសាអង់គ្លេស</label>
                    <input type="text" placeholder="បញ្ចូលឈ្មោះអង់គ្លេស" class="form-control" name="english_name" id="english_name" required>
                </div>

                <div class="col-md-6 my-3">
                    <label for="gender" class="form-label">ភេទ</label>
                    <select class="form-select" name="gender" id="gender" required>
                        <option></option>
                        <option value="ស្រី">ស្រី</option>
                        <option value="ប្រុស">ប្រុស</option>
                    </select>
                </div>
                <div class="col-md-6 ">
                    <label for="date_of_birth" class="form-label">ថ្ងៃខែឆ្នាំកំណើត</label>
                    <input type="date" placeholder="បញ្ចូលឆ្នាំកំណើត" class="form-control" name="date_of_birth" id="date_of_birth" required>
                </div>
                <div class="col-md-6 ">
                    <label for="address" class="form-label">អាស័យដ្ឋាន</label>
                    <input type="text" placeholder="បញ្ចូលអាស័យដ្ឋាន" class="form-control" name="address" id="address" required>
                </div>
                <div class="col-md-6 my-3">
                    <label for="phone_number" class="form-label">លេខទូរស័ព្ទ</label>
                    <input type="number" placeholder="បញូលលេខទូរស័ព្ទ" class="form-control" name="phone_number" id="phone_number" required>
                </div>
                <div class="col-md-6 my-3">
                    <label for="email" class="form-label">អ៊ីមែល</label>
                    <input type="email" placeholder="បញ្ចូលអ៊ីមែល" class="form-control" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="major" class="form-label">មុខជំនាញ</label>
                    <input type="text" placeholder="បញ្ចូលមុខជំនាញ" class="form-control" name="major" id="major" required>
                </div>
                <div class="col-md-6">
                    <label for="employment_status" class="form-label">ស្ថានភាពការងារ</label>
                    <select name="employment_status" class="form-select" id="employment_status">
                        <option value=""></option>
                        <option value="full_time">ពេញម៉ោង</option>
                        <option value="part_time">ក្រៅម៉ោង </option>
                    </select>
                </div>
                <div class="col-md-6 my-3">
                    <label for="hire_date" class="form-label">ថ្ងៃចូលធ្វើការ</label>
                    <input type="date" class="form-control" name="hire_date" id="hire_date" placeholder="បញូល​ ថ្ងៃចូលធ្វើការ">
                </div>

                <div class="col-md-6 my-3">
                    <label for="image" class="form-label">រូបភាព</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

            </div>
            <div class="row mt-4">
                <div class="d-flex justify-content-end gap-3">
                    <button type="submit" class="btn btn-secondary "><a href="{{ route('teachers.list')}}" class="text-decoration-none text-white">Cancel</a> </button>
                    <button type="submit" class="btn btn-warning ">Create</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<style>
    body {
        font-family: "Battambang", system-ui;
    }
</style>
