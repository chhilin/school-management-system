<div class="" id="containfaculty" style="overflow-x: auto;">
    <table class="table table-dark table-striped" style="width: 100%;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">អត្តលេខ</th>
                <th scope="col">ឈ្មោះសកលវិទ្យាល័យ</th>
                <th scope="col">ការពិពណ៌នាអំពីសាកលវិទ្យាល័យ</th>
                <th scope="col">សកម្មភាព</th>
            </tr>
        </thead>
        <tbody>
            @if ($faculties->isEmpty())
            <tr>
                <td colspan="4">No faculties found. Please add new one.</td>
            </tr>
            @else
            @foreach ($faculties as $faculty)
            <tr>
                <td >{{ $faculty->faculty_id ?? 0 }}</td>
                <td >{{ $faculty->faculty_name ?? 'N/A' }}</td>
                <td class="text-wrap">{{ $faculty->description ?? 'N/A' }}</td>
                <td style="width: 10%;">
                    <button type="button" class="btn btn-sm" style="background-color: #009DE1; color:white;"
                        data-bs-toggle="modal" data-bs-target="#updateFacultyModal{{ $faculty->id }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </button>

                    <button type="button" class="btn btn-sm" style="background-color: #E85252; color:white;"
                        data-bs-toggle="modal" data-bs-target="#confirmDelete{{ $faculty->id }}">
                        <i class="bx bx-trash me-1"></i> Delete
                    </button>
                </td>
            </tr>
            @include('content.faculty.delete')
            @include('content.faculty.update')
            @endforeach
            @endif
        </tbody>
    </table>
</div>