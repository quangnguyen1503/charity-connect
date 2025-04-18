<!DOCTYPE html>
<html>

<head>
    <title>Danh sách Kết Quả Sự Kiện</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
            transition: background-color 0.3s;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        @media (max-width: 600px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #ccc;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                padding-left: 10px;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <h1>Danh sách kết quả các sự kiện</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Event ID</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $index => $result)
            <tr>
                <td data-label="#"> {{ $index + 1 }} </td>
                <td data-label="Event ID"> {{ $result->event_id }} </td>
                <td data-label="Nội dung"> {{ $result->content }} </td>
                <td data-label="Hình ảnh">
                    @if($result->images)
                    <img src="{{ $result->images }}" alt="Ảnh kết quả">
                    @else
                    Không có ảnh
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>