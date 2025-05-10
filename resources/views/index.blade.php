<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - Danh sách chiến dịch</title>
    <style>
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .events-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .event-card {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .event-card:hover {
            transform: translateY(-5px);
        }
        .event-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .event-info {
            padding: 15px;
            flex: 1;
        }
        .event-info h2 {
            font-size: 18px;
            margin: 0 0 10px;
            color: #333;
        }
        .event-info p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
        }
        .event-info .status-pending { color: #f39c12; }
        .event-info .status-approved { color: #28a745; }
        .event-info .status-rejected { color: #dc3545; }
        .btn-details {
            display: inline-block;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 14px;
        }
        .btn-details:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách chiến dịch</h1>

        @if (session('success'))
            <div style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div style="color: red; margin-bottom: 15px;">
                {{ session('error') }}
            </div>
        @endif

        @if ($events->isEmpty())
            <p>Chưa có chiến dịch nào.</p>
        @else
            <div class="events-list">
                @foreach ($events as $event)
                    <div class="event-card">
                        <div class="event-image">
                            @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}" alt="Hình ảnh chiến dịch">
                            @else
                                <img src="https://via.placeholder.com/150" alt="Không có hình ảnh">
                            @endif
                        </div>
                        <div class="event-info">
                            <h2>{{ $event->name }}</h2>
                            <p><strong>Ngày bắt đầu:</strong> {{ $event->start_date->format('d/m/Y') }}</p>
                            <p><strong>Địa điểm:</strong> {{ $event->location }}</p>
                            <p><strong>Trạng thái:</strong> 
                                <span class="status-{{ $event->approved }}">
                                    {{ $event->approved === 'pending' ? 'Đang chờ duyệt' : ($event->approved === 'approved' ? 'Đã duyệt' : 'Bị từ chối') }}
                                </span>
                            </p>
                            <a href="{{ route('events.show', $event->event_id) }}" class="btn-details">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div style="margin-top: 20px;">
            <a href="{{ route('events.create') }}" style="padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Tạo chiến dịch mới</a>
        </div>
    </div>
</body>
</html>