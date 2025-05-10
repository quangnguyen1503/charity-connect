<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa chiến dịch</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fa;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
        }

        h1 {
            font-size: 28px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 25px;
            transition: box-shadow 0.3s ease;
        }

        .form-card:hover {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        .form-group img {
            max-width: 150px;
            margin-top: 10px;
            border-radius: 5px;
        }

        .form-actions {
            text-align: center;
            margin-top: 30px;
        }

        .form-actions button,
        .form-actions a {
            display: inline-block;
            padding: 12px 25px;
            margin: 0 10px;
            text-decoration: none;
            color: white;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-save {
            background-color: #27ae60;
            border: none;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: #219653;
            transform: scale(1.05);
        }

        .btn-back {
            background-color: #7f8c8d;
        }

        .btn-back:hover {
            background-color: #6c757d;
            transform: scale(1.05);
        }

        .message-success {
            color: #27ae60;
            background-color: #e8f5e9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .message-error {
            color: #c0392b;
            background-color: #ffebee;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .error-text {
            color: #c0392b;
            font-size: 14px;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            .form-actions button,
            .form-actions a {
                margin: 5px 0;
                width: 100%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chỉnh sửa chiến dịch</h1>

        @if (session('success'))
            <div class="message-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="message-error">
                {{ session('error') }}
            </div>
        @endif

        <div class="form-card">
            <form action="{{ route('events.update', $event->event_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Tên chiến dịch</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $event->name) }}" required>
                    @error('name')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea name="description" id="description" required>{{ old('description', $event->description) }}</textarea>
                    @error('description')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="start_date">Ngày bắt đầu</label>
                    <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $event->start_date->format('Y-m-d')) }}" required>
                    @error('start_date')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="end_date">Ngày kết thúc</label>
                    <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $event->end_date ? $event->end_date->format('Y-m-d') : '') }}">
                    @error('end_date')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="location">Địa điểm</label>
                    <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" required>
                    @error('location')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="min_quantity">Số lượng tối thiểu</label>
                    <input type="number" name="min_quantity" id="min_quantity" value="{{ old('min_quantity', $event->min_quantity) }}" required min="1">
                    @error('min_quantity')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="max_quantity">Số lượng tối đa</label>
                    <input type="number" name="max_quantity" id="max_quantity" value="{{ old('max_quantity', $event->max_quantity) }}" required min="{{ $event->min_quantity }}">
                    @error('max_quantity')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status" required>
                        <option value="active" {{ $event->status === 'active' ? 'selected' : '' }}>Hoạt động</option>
                        <option value="inactive" {{ $event->status === 'inactive' ? 'selected' : '' }}>Không hoạt động</option>
                    </select>
                    @error('status')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="approved">Phê duyệt</label>
                    <select name="approved" id="approved" required>
                        <option value="pending" {{ $event->approved === 'pending' ? 'selected' : '' }}>Đang chờ duyệt</option>
                        <option value="approved" {{ $event->approved === 'approved' ? 'selected' : '' }}>Đã duyệt</option>
                        <option value="rejected" {{ $event->approved === 'rejected' ? 'selected' : '' }}>Bị từ chối</option>
                    </select>
                    @error('approved')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    @if ($event->image)
                        <div>
                            <img src="{{ asset('storage/' . $event->image) }}" alt="Hình ảnh hiện tại">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" accept="image/*">
                    @error('image')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Lưu</button>
                    <a href="{{ route('events.show', $event->event_id) }}" class="btn-back">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>