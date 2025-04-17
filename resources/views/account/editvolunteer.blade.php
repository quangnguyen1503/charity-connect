@extends('layouts.master') {{-- vì file master nằm trong thư mục layouts --}}

@section('title', 'Chỉnh sửa thông tin cá nhân')

@section('content')
    <div class="container">
        <div class="avatar">
            <img src="{{ asset('images/' . $volunteer->avatar) }}" alt="Avatar" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
        </div>

        <h2>Chỉnh sửa thông tin cá nhân</h2>
        <form method="POST" action="{{ route('editvolunteer') }}">
            @csrf
            <div class="form-group">
                <label>Tên tài khoản *</label>
                <input type="text" name="username" value="{{ $volunteer->username }}" required>
            </div>
            <div class="form-group">
                <label>Email liên hệ</label>
                <input type="email" name="email" value="{{ $volunteer->email }}" required>
            </div>
            <div class="form-group">
                <label>Full name</label>
                <input type="text" name="fullname" value="{{ $volunteer->fullname }}" required>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="tel" name="phone" value="{{ $volunteer->phone}}">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea name="address">{{ $volunteer->address }}</textarea>   
            </div>
            <button type="submit" class="update-btn">Cập nhật</button>
        </form>
    </div>
@endsection
@section('bodyclass', 'editvolunteer')
    <link rel="stylesheet" href="{{ asset('css/editvolunteer.css') }}">