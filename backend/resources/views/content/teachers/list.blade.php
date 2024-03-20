<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="d-flex">

        <div class=" bg-warning flex-1 " style="width: 234px; height: 100vh;">
        </div>

        <!-- =============table================================ -->
        <div class="mx-auto">
            <div class=" flex-2 d-flex  flex-column p-4 shadow my-5  mb-4">
                <h1 class="fs-2">Teachers List</h1>
                <div class="d-flex justify-content-between mt-4">
                    <div class="col-sm-5 d-flex flex-row">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn btn-warning" type="button">Search</button>
                        </div>
                    </div>
                    <div class="d-flex flex-row gap-2">
                        <button class="btn btn-light">Clear</button>
                        <button class="btn btn-warning">Add New</button>
                    </div>
                </div>

                <div class="my-4 mb-4">
                    <table class="table  table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col" class="">អត្តលេខ</th>
                                <th scope="col">ឈ្មោះជាភាសាខ្មែរ</th>
                                <th scope="col">ឈ្មោះជាភាសាអង់គ្លេស</th>
                                <th scope="col">ភេទ</th>
                                <th scope="col">ថ្ងៃខែឆ្នាំកំណើត</th>
                                <th scope="col">អាស័យដ្ឋាន</th>
                                <th scope="col">លេខទូរស័ព្ទ</th>
                                <th scope="col">អ៊ីមែល</th>
                                <th scope="col">ជំនាញ</th>
                                <th scope="col">ស្ថានភាពការងារ</th>
                                <th scope="col">ថ្ងៃចូលធ្វើការ</th>
                                <th scope="col">រូបថត</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teachers as $index => $teacher) :  ?>
                                <tr class="text-center">
                                    <td scope="row"><?php echo $teacher['id']; ?></td>
                                    <td scope="row"><?php echo $teacher['teacher_id']; ?></td>
                                    <td scope="row"><?php echo $teacher['khmer_name']; ?></td>
                                    <td scope="row"><?php echo $teacher['english_name']; ?></td>
                                    <!-- <td scope="row"><?php echo $teacher['english_name']; ?></td> -->
                                    <td scope="row"><?php echo $teacher['gender']; ?></td>
                                    <td scope="row"><?php echo $teacher['date_of_birth']; ?></td>
                                    <td scope="row"><?php echo $teacher['address']; ?></td>
                                    <td scope="row"><?php echo $teacher['phone_number']; ?></td>
                                    <td scope="row"><?php echo $teacher['email']; ?></td>
                                    <td scope="row"><?php echo $teacher['major']; ?></td>
                                    <td scope="row"><?php echo $teacher['employment_status']; ?></td>
                                    <td scope="row"><?php echo $teacher['hire_date']; ?></td>
                                    <td scope="row">
                                        <img src="<?php echo $teacher['image']; ?>" alt="Teacher Image" width="100">
                                    </td>
                                    
                                    <td scope="row">
                                        <button type="button" class="btn btn-primary">
                                            <a href="" class="text-white text-decoration-none">Edit</a>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <a href="" class="text-white text-decoration-none">Delete</a>
                                        </button>
                                        <!-- <button class="btn btn-warning ">Add New</button> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>