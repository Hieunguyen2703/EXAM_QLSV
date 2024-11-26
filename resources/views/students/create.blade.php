<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Students</title> 
</head>

<body>
    <h1 style="margin: 50px 50px">Thêm học sinh mới</h1>
    <form action="{{ route('students.store') }}" method="POST" style="margin: 50px 50px">
        @csrf


        <div class="mb-3">
            <label for="last_name" class="form-label">Họ học sinh</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>

        <div class="mb-3">
            <label for="first_name" class="form-label">Tên học sinh</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>

        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
        </div>

        <div class="mb-3">
            <label for="parent_phone" class="form-label">Số điện thoại phụ huynh</label>
            <input type="text" class="form-control" id="parent_phone" name="parent_phone" required>
        </div>

        <div class="mb-3">
            <label for="class_id" class="form-label">Cấp độ lớp </label>
            <select class="form-control" id="class_id" name="class_id" required>
                @foreach($classes as $classe)
                <option value="{{ $classe->id }}">{{ $classe->grade_level }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</body>