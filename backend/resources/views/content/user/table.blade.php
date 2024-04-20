<div class="table-responsive" id="containuser">
    <table class="table  table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">អត្តលេខ</th>
                <th scope="col">ឈ្មោះខ្មែរ</th>
                <th scope="col">ឈ្មោះឡាតាំង</th>
                <th scope="col">អាស័យដ្ធានអុីម៉ែល</th>
                <th scope="col">សកម្មភាព</th>
            </tr>
        </thead>
        <tbody>
            @php
            $rowNumber = 1;
            @endphp
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->user_ID }}</td>
                <td>{{ $user->Khmer_Name }}</td>
                <td>{{ $user->English_Name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <a href="{{ url('user/edit', $user->id) }}" class="btn btn-primary">
                            <i class="bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('user.destroy', $user->id) }}" onsubmit="return confirm('Are you sure you want to delete this user?')">
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
