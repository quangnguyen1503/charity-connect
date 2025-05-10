@extends('layouts.master')

@section('styles')
    <style>
        body {
            background-color: #f0f2f5;
        }

        .cover-section {
            position: relative;
            height: 300px;
            background-image: url('{{ $volunteer->cover }}');
            background-size: cover;
            background-position: center;
            border-radius: 0;
            margin-bottom: 15px;
        }

        .profile-container {
            position: relative;
            padding-left: 200px;
            margin-bottom: 20px;
        }

        .volunteer-avatar-container {
            position: absolute;
            bottom: 15px;
            left: 15px;
            z-index: 10;
        }

        .volunteer-avatar {
            width: 170px;
            height: 170px;
            object-fit: cover;
            border: 4px solid #fff;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            top: -30px;
        }

        .volunteer-info {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding-bottom: 10px;
        }

        .nav-tabs .nav-link {
            /* color: #65676B; */
            font-weight: 600;
            padding: 16px 20px;
            border: none;
            border-radius: 0;
        }

        .nav-tabs .nav-link.active {
            color: #1877F2;
            border-bottom: 3px solid #1877F2;
            background-color: transparent;
        }

        .nav-tabs .nav-link:hover:not(.active) {
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 6px;
        }

        .info-card {
            transition: all 0.3s;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .activity-card {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .activity-header {
            display: flex;
            align-items: center;
            padding: 12px;
        }

        .activity-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .activity-meta {
            flex-grow: 1;
        }

        .activity-actions {
            display: flex;
            border-top: 1px solid #ddd;
            padding: 8px;
        }

        .activity-action {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
        }

        .activity-action:hover {
            background-color: #f0f2f5;
        }

        .badge-volunteer {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .badge-hours {
            background-color: #ff5722;
            color: white;
            padding: 5px 10px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .section-title {
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            min-width: 100px;
            max-width: 150px;
            width: 100%;
            height: 3px;
        }

        .skill-badge {
            background-color: #e4e6eb;
            color: #050505;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-right: 8px;
            margin-bottom: 8px;
            display: inline-block;
        }

        .fb-btn {
            background-color: #1877F2;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-weight: 600;
        }

        .fb-btn:hover {
            background-color: #166FE5;
            color: white;
        }

        .fb-btn-outline {
            background-color: #E4E6EB;
            color: #050505;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            font-weight: 600;
        }

        .fb-btn-outline:hover {
            background-color: #d8dadf;
        }

        .stats-box {
            text-align: center;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .stats-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ff5722;
        }

        .stats-label {
            font-size: 0.9rem;
            color: #65676B;
        }

        @media (max-width: 768px) {
            .profile-container {
                padding-left: 0;
                text-align: center;
            }

            .volunteer-avatar-container {
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                bottom: auto;
                margin-bottom: 20px;
            }

            .volunteer-info {
                padding-left: 15px;
                padding-right: 15px;
                align-items: center;
            }

            .total-events {
                display: flex;
                justify-content: center !important;
            }

            .container.py-3 {
                padding-top: 0.1rem;
            }
        }
    </style>
@endsection


@section('content')
    <div class="container py-3">
        <!-- Cover Section với Avatar và thông tin cơ bản -->
        <div class="mb-3 position-relative">
            <div class="cover-section">
                <!-- Cover image is set as background in CSS -->
            </div>

            <div class="container">
                <div class="profile-container">
                    <div class="volunteer-avatar-container">
                        <img src="{{ $volunteer->avatar }}" alt="Justus Beier" class="volunteer-avatar">
                    </div>

                    <div class="volunteer-info">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end">
                            <div>
                                <div class="mb-1 d-flex align-items-center">
                                    <h1 class="mb-0 fw-bold">{{ $volunteer->fullname }}</h1>
                                </div>
                                <p class="mb-1 text-muted">
                                    <i class="fas fa-user me-2"></i>
                                    Username: <strong>{{ $volunteer->username }}</strong>
                                </p>
                                <p class="mb-2 text-muted">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    Tham gia: <strong>{{ $volunteer->created_at }}</strong>
                                </p>
                            </div>

                            {{-- <div class="gap-2 mt-3 d-flex mt-md-0">
                                <button class="fb-btn">
                                    <i class="fas fa-plus-circle me-1"></i> Kết nối
                                </button>
                                <button class="fb-btn-outline">
                                    <i class="fas fa-envelope me-1"></i> Nhắn tin
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="mb-4 nav nav-tabs">


        </ul>

        <!-- Thông tin chi tiết -->
        <div class="row">
            <!-- Cột bên trái -->
            <div class="col-md-5 col-lg-4">
                <!-- Tổng quan -->
                <div class="mb-4">
                    <div class="card info-card">
                        <div class="bg-white card-header">
                            <h5 class="mb-0 section-title">Tổng quan</h5>
                        </div>
                        <div class="card-body">
                            <div class="total-events">

                                <div class="total-events">
                                    <div class="stats-box">
                                        <div class="stats-number">8</div>
                                        <div class="stats-label">Sự kiện tham gia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                @php
                                    $point = $volunteer->point;
                                    if ($point < 1000) {
                                        $level = 'Tình nguyện viên Đồng';
                                    } elseif ($point <= 2000) {
                                        $level = 'Tình nguyện viên Bạc';
                                    } else {
                                        $level = 'Tình nguyện viên Vàng';
                                    }
                                @endphp
                                <span class="badge-hours">Cấp độ: {{ $level }} ({{ $point }} điểm)</span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Thông tin liên hệ -->
                <div class="mb-4">
                    <div class="card info-card">
                        <div class="bg-white card-header">
                            <h5 class="mb-0 section-title">Thông tin liên hệ</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="px-0 border-0 list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="p-2 rounded bg-light">
                                                <i class="fas fa-envelope text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">{{ $volunteer->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-0 border-0 list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="p-2 rounded bg-light">
                                                <i class="fas fa-phone text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">{{ $volunteer->phone }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-0 border-0 list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="p-2 rounded bg-light">
                                                <i class="fas fa-map-marker-alt text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="mb-0">{{ $volunteer->address }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kỹ năng -->
                <!-- <div class="mb-4">
                        <div class="card info-card">
                            <div class="bg-white card-header">
                                <h5 class="mb-0 section-title">Kỹ năng</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <span class="skill-badge">Tiếng Anh</span>
                                    <span class="skill-badge">Sơ cứu</span>
                                    <span class="skill-badge">Kỹ năng tổ chức</span>
                                    <span class="skill-badge">Truyền thông</span>
                                    <span class="skill-badge">Làm việc nhóm</span>
                                    <span class="skill-badge">Quản lý thời gian</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>

            <!-- Cột bên phải - Nội dung hoạt động -->
            <div class="col-md-7 col-lg-8">
                <!-- Content container cho các tab -->
                <div id="content-hoat-dong" class="tab-content">
                    <!-- Hoạt động mẫu 1 -->
                    <div class="card activity-card">
                        <div class="activity-header">
                            <img src="https://via.placeholder.com/640x480.png/002200?text=quia" alt="Avatar"
                                class="activity-avatar">
                            <div class="activity-meta">
                                <h6 class="mb-0">Justus Beier</h6>
                                <small class="text-muted">10 tháng 5, 2025</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Lưu
                                            hoạt động</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <h5 class="card-title">Tham gia tình nguyện "Dọn dẹp bãi biển"</h5>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="far fa-calendar-alt me-2 text-primary"></i>
                                <span>8 tháng 5, 2025 | 8:00 - 16:00</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-map-marker-alt me-2 text-danger"></i>
                                <span>Bãi biển Central, San Diego</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-clock me-2 text-success"></i>
                                <span>8 giờ tình nguyện</span>
                            </div>
                            <p>Tham gia cùng 50 tình nguyện viên khác trong hoạt động làm sạch bãi biển. Chúng tôi đã thu
                                gom được hơn 200kg rác thải nhựa!</p>

                            <!-- Album ảnh -->
                            <div class="mb-3 row g-2">
                                <div class="col-md-6">
                                    <img src="https://thiennguyen.app/resources/default-cover/default-cover-web.png"
                                        class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Hoạt động 1">
                                </div>
                                <div class="col-md-6">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <img src="https://thiennguyen.app/resources/default-cover/default-cover-web.png"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Hoạt động 2">
                                        </div>
                                        <div class="col-6">
                                            <img src="https://thiennguyen.app/resources/default-cover/default-cover-web.png"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Hoạt động 3">
                                        </div>
                                        <div class="col-6">
                                            <img src="https://thiennguyen.app/resources/default-cover/default-cover-web.png"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Hoạt động 4">
                                        </div>
                                        <div class="col-6">
                                            <img src="https://thiennguyen.app/resources/default-cover/default-cover-web.png"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Hoạt động 5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hoạt động mẫu 2 -->
                    <div class="card activity-card">
                        <div class="activity-header">
                            <img src="https://via.placeholder.com/640x480.png/002200?text=quia" alt="Avatar"
                                class="activity-avatar">
                            <div class="activity-meta">
                                <h6 class="mb-0">Justus Beier</h6>
                                <small class="text-muted">2 tháng 5, 2025</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Lưu
                                            hoạt động</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <h5 class="card-title">Hướng dẫn học sinh tại Trung tâm cộng đồng</h5>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="far fa-calendar-alt me-2 text-primary"></i>
                                <span>1 tháng 5, 2025 | 14:00 - 17:00</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-map-marker-alt me-2 text-danger"></i>
                                <span>Trung tâm cộng đồng Maplewood</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-clock me-2 text-success"></i>
                                <span>3 giờ tình nguyện</span>
                            </div>
                            <p>Hỗ trợ học sinh lớp 5-8 trong môn Toán và Khoa học. Giúp 12 học sinh hoàn thành bài tập về
                                nhà và chuẩn bị cho kỳ thi sắp tới.</p>

                            <!-- Album ảnh -->
                            <div class="mb-3 row g-2">
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/640x480.png/002200?text=quia"
                                        class="rounded img-fluid w-100" alt="Hướng dẫn học sinh 1">
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/640x480.png/002200?text=quia"
                                        class="rounded img-fluid w-100" alt="Hướng dẫn học sinh 2">
                                </div>
                                <div class="col-4">
                                    <img src="https://via.placeholder.com/640x480.png/002200?text=quia"
                                        class="rounded img-fluid w-100" alt="Hướng dẫn học sinh 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
