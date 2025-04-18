<!DOCTYPE html>
<html>

<head>
    <title>Danh sách Chiến dịch</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 200px;
            height: auto;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Danh sách chiến dịch</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tên chiến dịch</th>
                <th>Mô tả</th>
                <th>Ngày bắt đầu</th>
                <th>Địa điểm</th>
                <th>Ảnh</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $index => $event)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d/m/Y') }}</td>
                <td>{{ $event->location }}</td>
                <td>
                    @if ($event->images)
                    <img src="{{ $event->images }}" alt="Ảnh chiến dịch">
                    @else
                    Không có ảnh
                    @endif
                </td>
                <td>{{ $event->status }}</td>
                <td>
                    <a href="{{ route('event.show', $event->event_id) }}">Xem chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>