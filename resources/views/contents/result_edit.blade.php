@extends('layouts.app')

@section('title', 'Sửa kết quả')

@section('content')
    <h2>Sửa kết quả</h2>

    <form action="{{ route('result.update', $result->result_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="content">Nội dung:</label><br>
        <textarea name="content" rows="5" required>{{ $result->content }}</textarea><br><br>

        <label for="images">Tải ảnh (chọn ảnh mới nếu muốn thay đổi):</label>
        <input type="file" name="images[]" multiple><br><br>

        <button type="submit">Cập nhật kết quả</button>
        <a href="{{ route('result.list') }}">Hủy</a>
    </form>
@endsection