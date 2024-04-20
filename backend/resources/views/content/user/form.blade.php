<h1 class="fs-2 text-center text-warning">ទម្រង់បំពេញរបស់អ្នកប្រើប្រាស់</h1>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="row mt-4">
        <div class="col-md-6">
            <label for="user_ID" class="form-label">អត្តលេខ:</label>
            <input type="text" placeholder="អត្តលេខ" class="form-control" name="user_ID" id="user_ID"
                value="{{ old('user_ID', $user->user_ID??'') }}">
        </div>
        <div class="col-md-6">
            <label for="Khmer_Name" class="form-label">ឈ្មោះខ្មែរ:</label>
            <input type="text" placeholder="ឈ្មោះភាសាខ្មែរ" class="form-control" name="Khmer_Name" id="Khmer_Name"
                value="{{ old('Khmer_Name', $user->Khmer_Name??'') }}">
        </div>

        <div class="col-md-6">
            <label for="English_Name" class="form-label">ឈ្មោះឡាតាំង:</label>
            <input type="text" placeholder="ឈ្មោះឡាតាំង" class="form-control" name="English_Name" id="English_Name"
                value="{{ old('English_Name', $user->English_Name??'') }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">អាស័យដ្ធានអុីម៉ែល:</label>
            <input type="text" placeholder="អាស័យដ្ធានអុីម៉ែល" class="form-control" name="email" id="email"
                value="{{ old('email', $user->email??'') }}">
        </div>
    </div>
</div>
<div class="col-md-12 d-flex justify-content-end mt-4">
    <a href="{{ url('user') }}" class="btn btn-secondary mr-2">Cancel</a>
    <button type="submit" class="btn btn-warning" style="color:white">Add</button>
</div>
</form>