<div class="mb-3">
    <label for="faculty_id" class="form-label">Faculty Code Name</label>
    <input type="text" class="form-control" id="faculty_id" name="faculty_id" value="{{ isset($faculty) ? $faculty->faculty_id : '' }}" required>
</div>
<div class="mb-3">
    <label for="faculty_name" class="form-label">Faculty Name</label>
    <input type="text" class="form-control" id="faculty_name" name="faculty_name" value="{{ isset($faculty) ? $faculty->faculty_name : '' }}" required>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Faculty Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ isset($faculty) ? $faculty->description : '' }}" required>
</div>
