<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container mt-2">
    <div class="d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-md-6">
                <label for="Student_id" class="form-label">អត្តលេខសិស្ស:</label>
                <input type="text" placeholder="អត្តលេខសិស្ស" class="form-control" name="Student_ID" id="Student_ID" value="{{ old('Student_ID', $student->Student_ID?? '') }}" >
            </div>
        
            <div class="col-md-6">
                <label for="Khmer_Name" class="form-label">ឈ្មោះភាសាខ្មែរ:</label>
                <input type="text" placeholder="ឈ្មោះភាសាខ្មែរ" class="form-control" name="Khmer_Name" id="Khmer_Name" value="{{ old('Khmer_Name', $student->Khmer_Name?? '') }}" >
            </div>

            <div class="col-md-6">
                <label for="English_Name" class="form-label">ឈ្មោះឡាតាំង:</label>
                <input type="text" placeholder="ឈ្មោះឡាតាំង" class="form-control" name="English_Name" id="English_Name" value="{{ old('English_Name', $student->English_Name?? '') }}">
            </div>
            <div class="col-md-6">
                <label for="text" class="form-label">វគ្គសិក្សាខ្លីៗ:</label>
                <input type="text" placeholder="វគ្គសិក្សាខ្លីៗ" class="form-control" name="Short_Course" id="Short_Course" value="{{ old('Short_Course', $student->Short_Course?? '') }}">
            </div>
            <div class="col-md-3 mt-2">
                <label for="Gender" class="form-label">ភេទ:</label>
                <select class="form-select" name="Gender" id="Gender" value="{{ old('Gender', $student->Gender?? '') }}">
                    <option value="" disabled selected></option>
                    <option value="ស្រី">ស្រី</option>
                    <option value="ប្រុស">ប្រុស</option>
                </select>
            </div>
            <div class="col-md-3 mt-2">
                <label for="Classroom" class="form-label">ថ្នាក់រៀន:</label>
                <select class="form-select" name="Classroom" id="Classroom" value="{{ old('Classroom', $student->Classroom?? '') }}">
                    <option></option>
                    <option value="DUC1">DUC1</option>
                    <option value="DUC2">DUC2</option>
                    <option value="DUC2">DUC3</option>
                    <option value="DUC2">DUC4</option>
                    <option value="DUC2">DUC5</option>
                    <option value="DUC2">DUC6</option>
                    <option value="DUC2">DUC7</option>
                    <option value="DUC2">DUC8</option>
                    <option value="DUC2">DUC9</option>
                    <option value="DUC2">DUC10</option>
                    <option value="DUC2">DUC11</option>
                    <option value="DUC2">DUC12</option>
                    <option value="DUC2">DUC13</option>
                    <option value="DUC2">DUC14</option>
                    <option value="DUC2">DUC15</option>
                    <option value="DUC2">DUC16</option>
                    <option value="DUC2">DUC17</option>
                    <option value="DUC2">DUC18</option>
                    <option value="DUC2">DUC10</option>
                    <option value="DUC2">DUC20</option>
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <label for="College" class="form-label">មហាវិទ្យាល័យ:</label>
                <select class="form-select" name="College" id="College" value="{{ old('College', $student->College?? '') }}">
                    <option></option>
                    <option value="មហាវិទ្យាល័យព័ត៍មានវិទ្យា">មហាវិទ្យាល័យព័ត៍មានវិទ្យា</option>
                    <option value="មហាវិទ្យាល័យអក្សរសាស្ដ្រអង់គ្លេស">មហាវិទ្យាល័យអក្សរសាស្ដ្រអង់គ្លេស</option>
                    <option value="មហាវិទ្យាល័យកសិកម្ម">មហាវិទ្យាល័យកសិកម្ម</option>
                    <option value="មហាវិទ្យាល័យសេដ្ឋកិច្ច">មហាវិទ្យាល័យសេដ្ឋកិច្ច</option>
                    <option value="មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល">មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល</option>
                    <option value="មហាវិទ្យាល័យស្ថាបត្យកម្មនិងសំណង់សុីវិល">មហាវិទ្យាល័យឌីជីថលលក់និងទីផ្សារ</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="English_level" class="form-label">កម្រិតផ្នែកភាសារអង់គ្លេស:</label>
                <input type="text" placeholder="កម្រិតផ្នែកភាសារអង់គ្លេស" class="form-control" name="English_level" id="English_level" value="{{ old('English_level', $student->English_level?? '') }}">
            </div>
            <div class="col-md-6">
                <label for="IT_level" class="form-label">កម្រិតផ្នែកព័ត៍មានវិទ្យា:</label>
                <input type="text" placeholder="កម្រិតផ្នែកភាសារអង់គ្លេស" class="form-control" name="IT_level" id="IT_level" value="{{ old('IT_level', $student->IT_level?? '') }}">
            </div>
            <div class="col-md-6 md-5">
                <label for="Working_team" class="form-label">ក្រុមការងារ:</label>
                <input type="text" placeholder="ក្រុមការងារ" class="form-control" name="Working_team" id="Working_team" value="{{ old('Working_team', $student->Working_team?? '') }}"> 
            </div>
        </div>
        
    </div>
    
</div>
<div class="col-md-12 d-flex justify-content-end mt-4">
    <a href="{{ url('student') }}" class="btn btn-secondary mr-2">Cancel</a>
    <button type="submit" class="btn btn-warning" style="color:white">Submit</button>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>









