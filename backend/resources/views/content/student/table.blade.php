<div class="table-responsive" id="containstudent">
    <table class="table table-dark table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">អត្តលេខ</th>
                <th scope="col">ឈ្មោះជាភាសារខ្មែរ</th>
                <th scope="col">ឈ្មោះជាភាសាអង់គ្លេស</th>
                <th scope="col">ភេទ</th>
                <th scope="col">មហាវិទ្យាល័យ</th>
                <th scope="col">ថ្នាក់រៀន</th>
                <th scope="col">វគ្គសិក្សាខ្លីៗ</th>
                <th scope="col">កម្រិតផ្នែកភាសារអង់គ្លេស</th>
                <th scope="col">កម្រិតផ្នែកព័ត៍មានវិទ្យា</th>
                <th scope="col">ក្រុមការងារ</th>
                <th scope="col">សកម្មភាព</th>
            </tr>
        </thead>
        <tbody>
            @php
            $rowNumber = 1;
            @endphp
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->Student_ID }}</td>
                <td>{{ $student->Khmer_Name }}</td>
                <td>{{ $student->English_Name }}</td>
                <td>{{ $student->Gender }}</td>
                <td>{{ $student->College }}</td>
                <td>{{ $student->Classroom }}</td>
                <td>{{ $student->Short_course }}</td>
                <td>{{ $student->English_level }}</td>
                <td>{{ $student->IT_level }}</td>
                <td>{{ $student->Working_team }}</td>
                <td>
                    <a href="{{ url('students/edit', $student->id) }}" class="btn btn-sm" style="background-color: #009DE1; color:white">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a>
                    <button type="button" class="btn btn-sm" style="background-color: #E85252; color:white" data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $student->id }}">
                        <i class="bx bx-trash me-1"></i> Delete
                    </button>
                </td>
            </tr>
            @php
            $rowNumber++;
            @endphp
            @include('content.student.delete')
            @include('content.student.view')
            @endforeach
        </tbody>
    </table>
</div>
