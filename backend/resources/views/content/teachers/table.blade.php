<div class="d-flex">

    <div class=" bg-warning flex-1 " style="width: 234px; height: 100vh;">
    </div>

    <!-- =============table================================ -->
    <div class="mx-auto">
        <div class=" flex-2 d-flex  flex-column p-4 shadow my-5  mb-4">

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
                        
                        @php
                        $rowNumber = 1;
                        @endphp
                        @foreach ($teachers as $teacher)
                        <tr class="text-center">
                            <td>{{ $teacher->teacher_id }}</td>
                            <td>{{ $teacher->khmer_name }}</td>
                            <td>{{ $teacher->english_name }}</td>
                            <td>{{ $teacher->gender }}</td>
                            <td>{{ $teacher->date_of_birth }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->phone_number }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->major }}</td>
                            <td>{{ $teacher->employment_status }}</td>
                            <td>{{ $teacher->hire_date }}</td>
                            <td>{{ $teacher->image }}</td>
                          
                            <td scope="row">
                                <button type="button" class="btn btn-primary">
                                    <a href="{{ url('teachers/edit', $teacher->id) }}" class="text-white text-decoration-none">Edit</a>
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-target="#confirmDelete{{ $teacher->id }}">
                                    <a href="" class="text-white text-decoration-none">Delete</a>
                                </button>
                            </td>
                        </tr>
                        @php
                        $rowNumber++;
                        @endphp
                        @include('content.teacher.delete')
                        @include('content.teacher.view')
                        @endforeach
                    </tbody>

                    
                </table>
            </div>
        </div>
    </div>
</div>