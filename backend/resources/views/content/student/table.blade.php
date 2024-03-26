<div class="table-responsive" id="containstudent">
    <table class="table table-dark table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">អត្តលេខសិស្ស</th>
                <th scope="col">ឈ្មោះភាសារខ្មែរ</th>
                <th scope="col">ឈ្មោះឡាតាំង</th>
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
        <tbody class="table-secondary">
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
                <td>{{ $student->Short_Course }}</td>
                <td>{{ $student->English_level }}</td>
                <td>{{ $student->IT_level }}</td>
                <td>{{ $student->Working_team }}</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <a href="{{ url('student/edit', $student->id) }}" class="btn btn-sm" style="background-color: #009DE1; color:white;">
                            <i class="bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('student.destroy', $student->id) }}" onsubmit="return confirm('Are you sure you want to delete this student?')">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>


            </tr>

            @php
            $rowNumber++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
