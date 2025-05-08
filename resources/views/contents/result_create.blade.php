@extends('layouts.app')

@section('title', 'Tạo kết quả')

@section('content')
     <h2>Tạo kết quả cho chiến dịch: {{ $event->title }}</h2>


    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('result.store', $event->event_id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="content">Nội dung:</label><br>
        <textarea name="content" rows="5" required></textarea><br><br>

        <label for="images">Tải ảnh:</label>
        <input type="file" name="images[]" multiple><br><br>

        <button type="submit">Tạo kết quả</button>
    </form>

@endsection
