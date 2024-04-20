<h1 class="fs-2 text-center text-warning">ទម្រង់បំពេញរបស់សិស្ស</h1>

<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="row mt-4">
        <div class="col-md-6">
            <label for="Student_ID" class="form-label">អត្តលេខ:</label>
            <input type="text" placeholder="អត្តលេខសិស្ស" class="form-control" name="Student_ID" id="Student_ID"
                value="{{ old('Student_ID', $student->Student_ID??'') }}">
        </div>
        <div class="col-md-6">
            <label for="Khmer_Name" class="form-label">ឈ្មោះភាសាខ្មែរ:</label>
            <input type="text" placeholder="ឈ្មោះភាសាខ្មែរ" class="form-control" name="Khmer_Name" id="Khmer_Name"
                value="{{ old('Khmer_Name', $student->Khmer_Name??'') }}">
        </div>

        <div class="col-md-6">
            <label for="English_Name" class="form-label">ឈ្មោះឡាតាំង:</label>
            <input type="text" placeholder="ឈ្មោះឡាតាំង" class="form-control" name="English_Name" id="English_Name"
                value="{{ old('English_Name', $student->English_Name??'') }}">
        </div>

        <div class="col-md-6">
            <label for="Short_Course" class="form-label">វគ្គសិក្សា:</label>
            <input type="text" placeholder="វគ្គសិក្សាខ្លីៗ" class="form-control" name="Short_Course"
                id="Short_Course" value="{{ old('Short_Course', $student->Short_Course??'') }}">
        </div>
        <div class="col-md-6 ">
            <label for="Gender" class="form-label">ភេទ:</label>
            <select class="form-select" name="Gender" id="Gender">
                <option value="" disabled selected></option>
                <option value="ស្រី">ស្រី</option>
                <option value="ប្រុស">ប្រុស</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="Department" class="form-label">ដេប៉ាតឺម៉ង់​:</label>
            <input type="text" placeholder="ដេប៉ាតឺម៉ង់" class="form-control" name="Department" id="Department"
                value="{{ old('Department', $student->Department??'') }}">
        </div>
        <div class="col-md-6">
            <label for="College" class="form-label">មហាវិទ្យាល័យ:</label>
            <select class="form-select" name="College" id="College">
                <option></option>
                <option value="មហាវិទ្យាល័យព័ត៍មានវិទ្យា">មហាវិទ្យាល័យព័ត៍មានវិទ្យា</option>
                <option value="មហាវិទ្យាល័យអក្សរសាស្ដ្រអង់គ្លេស">មហាវិទ្យាល័យអក្សរសាស្ដ្រអង់គ្លេស</option>
                <option value="មហាវិទ្យាល័យកសិកម្ម">មហាវិទ្យាល័យកសិកម្ម</option>
                <option value="មហាវិទ្យាល័យសេដ្ឋកិច្ច">មហាវិទ្យាល័យសេដ្ឋកិច្ច</option>
                <option value="មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល">មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល
                </option>
                <option value="មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល">មហាវិទ្យាល័យឌីជីថលលក់និងទីផ្សារ</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="English_level" class="form-label">កម្រិតភាសារអង់គ្លេស:</label>
        <input type="text" placeholder="កម្រិតផ្នែកភាសារអង់គ្លេស" class="form-control" name="English_level"
            id="English_level" value="{{ old('English_level', $student->English_level?? '') }}">
    </div>
    <div class="col-md-6">
        <label for="IT_level" class="form-label">កម្រិតព័ត៍មានវិទ្យា:</label>
        <input type="text" placeholder="កម្រិតផ្នែកភាសារអង់គ្លេស" class="form-control" name="IT_level"
            id="IT_level" value="{{ old('IT_level', $student->IT_level?? '') }}">
    </div>
    <div class="col-md-6">
        <label for="text" class="form-label">ចរិយាសម្បទា:</label>
        <input type="text" placeholder="ចរិយាសម្បទា" class="form-control" name="Behavior"
            id="Behavior" value="{{ old('Behavior', $student->Behavior?? '') }}">
    </div>
    <div class="col-md-6">
        <label for="Working_team" class="form-label">ក្រុមការងារ:</label>
        <input type="text" placeholder="ក្រុមការងារ" class="form-control" name="Working_team" id="Working_team"
            value="{{ old('Working_team', $student->Working_team?? '') }}">
    </div>
</div>
<div class="col-md-12 d-flex justify-content-end mt-4">
    <a href="{{ url('student') }}" class="btn btn-secondary mr-2">Cancel</a>
    <button type="submit" class="btn btn-warning" style="color:white">Add</button>
</div>
</form>

<!-- =========upload image========= -->

<script>
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image_preview');

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        }

        reader.readAsDataURL(file);
    });
</script>