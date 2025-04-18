<!DOCTYPE html>
<html>

<head>
    <title>Chi tiết chiến dịch</title>
    <style>
        body {
            font-family: Arial;
            line-height: 1.6;
            padding: 30px;
        }

        h1 {
            color: #444;
        }

        .event-detail {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        .event-detail img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="event-detail">
        <h1>{{ $event->name }}</h1>

        @if ($event->image)
        <img src="{{ $event->image }}" alt="Ảnh chiến dịch">
        @endif

        <p><span class="label">Mô tả:</span> {{ $event->description }}</p>
        <p><span class="label">Địa điểm:</span> {{ $event->location }}</p>
        <p><span class="label">Thời gian:</span> {{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }}
            - {{ \Carbon\Carbon::parse($event->end_date)->format('d/m/Y') }}</p>
        <p><span class="label">Số lượng tối thiểu:</span> {{ $event->min_quantity }}</p>
        <p><span class="label">Số lượng tối đa:</span> {{ $event->max_quantity }}</p>
        <p><span class="label">Đã đăng ký:</span> {{ $event->quantity_now }}</p>
        <p><span class="label">Trạng thái:</span> {{ $event->status }}</p>
        <p><span class="label">Duyệt:</span> {{ $event->approved }}</p>
        <p><span class="label">Ngày tạo:</span> {{ $event->created_at }}</p>
    </div>
</body>

</html>