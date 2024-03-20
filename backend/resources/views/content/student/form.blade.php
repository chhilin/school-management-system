<div class="mb-3">
    <strong>Student ID <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Student ID" class="form-control" id="student-id" name="student_id" value="{{ old('student_id', $students->ID ?? '') }}" />
</div>
<div class="mb-3">
    <strong>Khmer Name <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Khmer Name" class="form-control" id="khmer-name" name="khmer_name" value="{{ old('khmer_name', $students->Khmer_Name ?? '') }}" />
</div>
<div class="mb-3">
    <strong>English Name <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input English Name" class="form-control" id="english-name" name="english_name" value="{{ old('english_name', $students->English_Name ?? '') }}" />
</div>
<div class="mb-3">
    <strong>Gender <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Gender" class="form-control" id="gender" name="gender" value="{{ old('gender', $students->Gender ?? '') }}" />
</div>
<div class="mb-3">
    <strong>College <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input College" class="form-control" id="college" name="college" value="{{ old('college', $students->College ?? '') }}" />
</div>
<div class="mb-3">
    <strong>Classroom <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Classroom" class="form-control" id="classroom" name="classroom" value="{{ old('classroom', $students->Classroom ?? '') }}" />
</div>
<div class="mb-3">
    <strong>Short Course <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Short Course" class="form-control" id="short-course" name="short_course" value="{{ old('short_course', $students->Short_Course ?? '') }}" />
</div>
<div class="mb-3">
    <strong>English Level <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input English Level" class="form-control" id="english-level" name="english_level" value="{{ old('english_level', $students->English_level ?? '') }}" />
</div>
<div class="mb-3">
    <strong>IT Level <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input IT Level" class="form-control" id="it-level" name="it_level" value="{{ old('it_level', $students->IT_level ?? '') }}" />
</div>
<div class="mb-3">
    <strong>Working Team <span class="text-danger">*</span></strong>
    <input type="text" placeholder="Input Working Team" class="form-control" id="working-team" name="working_team" value="{{ old('working_team', $students->Working_team ?? '') }}" />
</div>
