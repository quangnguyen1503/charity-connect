<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo chiến dịch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/event-create.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tạo chiến dịch mới</h1>
        <a href="{{ route('events.index') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Quay lại</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="event-form">
            @csrf
            <div class="form-group">
                <label for="name"><i class="fas fa-heading"></i> Tên chiến dịch</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description"><i class="fas fa-align-left"></i> Mô tả</label>
                <textarea name="description" id="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="start_date"><i class="fas fa-calendar-alt"></i> Ngày bắt đầu</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required>
                @error('start_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="end_date"><i class="fas fa-calendar-alt"></i> Ngày kết thúc</label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}">
                @error('end_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="location"><i class="fas fa-map-marker-alt"></i> Địa điểm</label>
                <input type="text" name="location" id="location" value="{{ old('location') }}" required>
                @error('location')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="min_quantity"><i class="fas fa-users"></i> Số lượng tối thiểu</label>
                <input type="number" name="min_quantity" id="min_quantity" value="{{ old('min_quantity') }}" min="1" required>
                @error('min_quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="max_quantity"><i class="fas fa-users"></i> Số lượng tối đa</label>
                <input type="number" name="max_quantity" id="max_quantity" value="{{ old('max_quantity') }}" min="1" required>
                @error('max_quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image"><i class="fas fa-image"></i> Hình ảnh</label>
                <input type="file" name="image" id="image">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-create">Tạo chiến dịch</button>
        </form>
    </div>
</body>
</html>