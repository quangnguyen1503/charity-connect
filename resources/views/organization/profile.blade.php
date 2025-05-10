@extends('layouts.master')

@section('styles')
    <style>
        body {
            background-color: #f0f2f5;
        }

        .cover-section {
            position: relative;
            height: 350px;
            background-image: url('https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg');
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

        .org-avatar-container {
            position: absolute;
            bottom: 15px;
            left: 15px;
            z-index: 10;
        }

        .org-avatar {
            width: 170px;
            height: 170px;
            object-fit: cover;
            border: 4px solid #fff;
            border-radius: 50%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            top: -30px;
        }

        .org-info {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding-bottom: 10px;
        }

        .nav-tabs .nav-tap {
            color: #65676B;
            font-weight: 600;
            padding: 16px 20px;
            border: none;
            border-radius: 0;
        }

        .nav-tabs .nav-tap.active {
            color: #ff5722;
            border-bottom: 3px solid #ff5722;
            background-color: transparent;
        }

        .nav-tabs .nav-tap:hover:not(.active) {
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 6px;
        }

        .info-card {
            transition: all 0.3s;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .post-card {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .post-header {
            display: flex;
            align-items: center;
            padding: 12px;
        }

        .post-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-meta {
            flex-grow: 1;
        }

        .post-actions {
            display: flex;
            border-top: 1px solid #ddd;
            padding: 8px;
        }

        .post-action {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
        }

        .post-action:hover {
            background-color: #f0f2f5;
        }

        @media (max-width: 768px) {
            .profile-container {
                padding-left: 0;
                text-align: center;
            }

            .org-avatar-container {
                position: relative;
                left: 50%;
                transform: translateX(-50%);
                bottom: auto;
                margin-bottom: 20px;
            }

            .org-info {
                padding-left: 15px;
                padding-right: 15px;
                align-items: center;
            }
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
            width: 50px;
            height: 3px;
            /* background-color: #1877F2; */
        }

        .fb-btn {
            background-color: #ff5722;
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

        .container.py-3 {
            padding-top: 0.1rem !important;
        }

        .nav-tap {
            text-decoration: none;
        }

        .nav-tap:hover {
            text-decoration: none;
        }

        .nav-tabs {
            border-bottom: none !important;
        }

        .bottom-0.mb-3.position-absolute.end-0.me-3 {
    bottom: 20px;
    left: 8rem;
}
    </style>
@endsection



@section('content')
    <div class="container py-3">
        <!-- Cover Section với Avatar và thông tin cơ bản -->
        <div class="mb-3 position-relative">
            <div class="cover-section">
                <!-- Cover image is set as background in CSS -->
                <div class="top-0 m-3 position-absolute end-0">
                <button class="btn btn-light">
                    <i class="fas fa-camera me-1"></i> Thêm ảnh bìa
                </button>
            </div>
            </div>

            <div class="container">
                <div class="profile-container">
                    <div class="org-avatar-container">
                        <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                            alt="Austin Dach" class="org-avatar">
                         <div class="bottom-0 mb-3 position-absolute end-0 me-3">
                        <button class="p-2 btn btn-light rounded-circle">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    </div>

                    <div class="org-info">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end">
                            <div>
                                <h1 class="mb-1 fw-bold">{{$organization->fullname}}</h1>
                                <p class="mb-1 text-muted">
                                    <i class="fas fa-user me-2"></i>
                                    Người đại diện: <strong>{{$organization->representative}}</strong>
                                </p>
                                <p class="mb-2 text-muted">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    Thành lập: <strong>{{$organization->founded_at}}</strong>
                                </p>
                            </div>

                            <div class="gap-2 mt-3 d-flex mt-md-0">
                                <button class="fb-btn">
                                    <i class="fas fa-plus-circle me-1"></i> Theo dõi
                                </button>
                                <button class="fb-btn-outline">
                                    <i class="fas fa-envelope me-1"></i> Nhắn tin
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="mb-4 nav nav-tabs">
            <li class="nav-item">
                <a class="nav-tap active" href="#" id="tab-su-kien">Sự kiện</a>
            </li>
            <li class="nav-item">
                <a class="nav-tap" href="#" id="tab-ket-qua">Kết quả</a>
            </li>
        </ul>

        <!-- Thông tin chi tiết -->
        <div class="row">
            <!-- Cột bên trái -->
            <div class="col-md-5 col-lg-4">
                <!-- Mô tả tổ chức -->
                <div class="mb-4">
                    <div class="card info-card">
                        <div class="bg-white card-header">
                            <h5 class="mb-0 section-title">Mô tả tổ chức</h5>
                        </div>
                        <div class="card-body">
                            <p>{{$organization->description}}</p>
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
                                            <p class="mb-0">{{$organization->email}}
                                            </p>
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
                                            <p class="mb-0">{{$organization->phone}}</p>
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
                                            <p class="mb-0">{{$organization->address}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cột bên phải - Nội dung posts -->
            <div class="col-md-7 col-lg-8">


                <!-- Content container cho các tab -->


                <div id="content-su-kien" class="tab-content">
                    <!-- Sự kiện mẫu 1 -->
                    <div class="card post-card">
                        <div class="post-header">
                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                alt="Avatar" class="post-avatar">
                            <div class="post-meta">
                                <h6 class="mb-0">Austin Dach</h6>
                                <small class="text-muted">12 tháng 5, 2025</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Lưu sự
                                            kiện</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bell-slash me-2"></i> Tắt
                                            thông báo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <h5 class="card-title">Sự kiện âm nhạc mùa hè
                                15 tháng 7, 2025 | 18:00 - 22:00
                                Công viên Thống Nhất, Hà Nội
                                Chúng tôi mời bạn tham gia sự kiện âm nhạc mùa hè với nhiều ca sĩ nổi tiếng. Vé miễn phí cho
                                tất cả mọi người!</h5>


                            <!-- Album ảnh -->
                            <div class="mb-3 row g-2">
                                <div class="col-md-6">
                                    <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                        class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Event Image 1">
                                </div>
                                <div class="col-md-6">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Event Image 2">
                                        </div>
                                        <div class="col-6">
                                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover"
                                                alt="Event Image 3">
                                        </div>
                                        <div class="col-6">
                                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                                class="rounded img-fluid w-100 h-100 object-fit-cover"
                                                alt="Event Image 4">
                                        </div>
                                        <!-- <div class="col-6 position-relative">
                                                <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg" class="rounded img-fluid w-100 h-100 object-fit-cover" alt="Event Image 5">
                                                <div class="top-0 left-0 bg-opacity-50 rounded position-absolute w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
                                                    <span class="text-white fw-bold">+15</span>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="gap-2 d-flex">
                                <button class="fb-btn"><i class="fas fa-check-circle me-1"></i> Tham gia</button>
                                <button class="fb-btn-outline"><i class="fas fa-share me-1"></i> Chia sẻ</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sự kiện mẫu 2 -->
                    <div class="card post-card">
                        <div class="post-header">
                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                alt="Avatar" class="post-avatar">
                            <div class="post-meta">
                                <h6 class="mb-0">Austin Dach</h6>
                                <small class="text-muted">10 tháng 5, 2025</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Lưu
                                            sự
                                            kiện</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bell-slash me-2"></i>
                                            Tắt
                                            thông báo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <h5 class="card-title">Workshop kỹ năng lập trình</h5>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="far fa-calendar-alt me-2 text-primary"></i>
                                <span>20 tháng 6, 2025 | 9:00 - 16:00</span>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <i class="fas fa-map-marker-alt me-2 text-danger"></i>
                                <span>Học viện Công nghệ, 123 Đường Lê Lợi</span>
                            </div>
                            <p>Workshop giúp bạn cải thiện kỹ năng lập trình với các chuyên gia hàng đầu. Số lượng chỗ
                                có hạn!</p>

                            <!-- Album ảnh -->
                            <div class="mb-3 row g-2">
                                <div class="col-4">
                                    <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                        class="rounded img-fluid w-100" alt="Workshop Image 1">
                                </div>
                                <div class="col-4">
                                    <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                        class="rounded img-fluid w-100" alt="Workshop Image 2">
                                </div>
                                <div class="col-4">
                                    <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                        class="rounded img-fluid w-100" alt="Workshop Image 3">
                                </div>
                            </div>

                            <div class="gap-2 d-flex">
                                <button class="fb-btn"><i class="fas fa-check-circle me-1"></i> Tham gia</button>
                                <button class="fb-btn-outline"><i class="fas fa-share me-1"></i> Chia sẻ</button>
                            </div>
                        </div>
                    </div>
                </div>

                <d id="content-ket-qua" class="tab-content" style="display:none;">
                    <!-- Kết quả mẫu 1 -->
                    <div class="card post-card">
                        <div class="post-header">
                            <img src="https://static.thiennguyen.app/public/banner/2024/12/27/87e86cfb-8703-4dfb-adc2-7c51fdfcc55a.jpg"
                                alt="Avatar" class="post-avatar">
                            <div class="post-meta">
                                <h6 class="mb-0">Austin Dach</h6>
                                <small class="text-muted">8 tháng 5, 2025</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Lưu
                                            bài
                                            viết</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bell-slash me-2"></i>
                                            Tắt
                                            thông báo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <h5 class="card-title">Kết quả cuộc thi Vẽ tranh học sinh năm 2025</h5>
                            <p>Chúng tôi vui mừng thông báo kết quả cuộc thi Vẽ tranh học sinh năm 2025 với sự tham gia
                                của hơn 500 thí sinh.</p>
                            <div class="mb-3 card">
                                <div class="card-body"></div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>

    </div>
@endsection
