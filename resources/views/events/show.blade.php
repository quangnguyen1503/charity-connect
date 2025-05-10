@extends ('layouts.master')
@section('style')
    <style>
        :root {
            --primary: #e74c3c;
            --secondary: #3498db;
            --success: #2ecc71;
            --warning: #f39c12;
            --light-gray: #f5f5f5;
            --dark-gray: #333;
            --text-gray: #666;
            --border-color: #ddd;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-gray);
            color: var(--dark-gray);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .event-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .back-button {
            background-color: transparent;
            border: none;
            color: var(--primary);
            font-size: 16px;
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-right: 15px;
        }
        
        .page-title {
            font-size: 22px;
            font-weight: 600;
            flex-grow: 1;
        }
        
        .event-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .event-top-section {
            display: flex;
            flex-direction: row;
        }
        
        .event-image-container {
            width: 50%;
            position: relative;
            overflow: hidden;
        }
        
        .event-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        
        .image-navigation {
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: flex;
            gap: 10px;
        }
        
        .image-nav-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }
        
        .image-nav-dot.active {
            background-color: white;
        }
        
        .event-info {
            width: 50%;
            padding: 20px;
        }
        
        .event-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-gray);
        }
        
        .event-meta {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            color: var(--text-gray);
        }
        
        .meta-item i {
            margin-right: 8px;
            color: var(--primary);
            width: 20px;
            text-align: center;
        }
        
        .event-progress {
            margin-bottom: 25px;
        }
        
        .progress-title {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progress-bar {
            height: 12px;
            background-color: #eee;
            border-radius: 6px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background-color: var(--primary);
            width: 0%; /* Will be set dynamically */
        }
        
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .btn {
            width: 100%;
            padding: 14px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-outline {
            background-color: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .btn-results {
            background-color: white;
            color: var(--secondary);
            border: 1px solid var(--secondary);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        .event-description {
            padding: 20px;
            line-height: 1.7;
            color: var(--text-gray);
            text-align: justify;
        }
        
        .event-details {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .details-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-gray);
            display: flex;
            align-items: center;
        }
        
        .details-title i {
            margin-right: 10px;
            color: var(--primary);
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .details-item {
            display: flex;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .details-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .details-content {
            flex-grow: 1;
        }
        
        .details-label {
            font-size: 14px;
            color: var(--text-gray);
            margin-bottom: 5px;
        }
        
        .details-value {
            font-weight: 600;
            color: var(--dark-gray);
        }
        
        .status-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        
        .status-active {
            background-color: rgba(46, 204, 113, 0.15);
            color: #27ae60;
        }
        
        .status-pending {
            background-color: rgba(243, 156, 18, 0.15);
            color: #f39c12;
        }
        
        .thumbnail-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            overflow-x: auto;
            padding: 10px 0;
        }
        
        .thumbnail {
            width: 80px;
            height: 60px;
            border-radius: 6px;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.2s ease;
        }
        
        .thumbnail.active {
            border-color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .event-top-section {
                flex-direction: column;
            }
            
            .event-image-container, .event-info {
                width: 100%;
            }
            
            .event-image {
                height: 250px;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

@endsection
@section('content')
<div class="container">
        <div class="event-header">
            <button class="back-button">
                <i class="fas fa-arrow-left"></i> Quay lại
            </button>
            <h1 class="page-title">Chi tiết sự kiện</h1>
        </div>
        
        <div class="event-card">
            <div class="event-top-section">
                <!-- Event Image Section (Left) -->
                <div class="event-image-container">
                    <img src="https://static.thiennguyen.app/public/donate-target/photo/2025/4/2/cover_tsx.webp" alt="Ung ho nguoi ngheo Quoc oai" class="event-image" id="main-image">
                    
                    <!-- Image Navigation Dots -->
                    <div class="image-navigation">
                        <div class="image-nav-dot active" data-image="/api/placeholder/600/400"></div>
                        <div class="image-nav-dot" data-image="/api/placeholder/600/400?text=Ảnh+2"></div>
                        <div class="image-nav-dot" data-image="/api/placeholder/600/400?text=Ảnh+3"></div>
                    </div>
                    
                    <!-- Thumbnails for multiple images -->
                    <div class="thumbnail-container">
                        <img src="/api/placeholder/600/400" class="thumbnail active" alt="Thumbnail 1">
                        <img src="/api/placeholder/600/400?text=Ảnh+2" class="thumbnail" alt="Thumbnail 2">
                        <img src="/api/placeholder/600/400?text=Ảnh+3" class="thumbnail" alt="Thumbnail 3">
                    </div>
                </div>
                
                <!-- Event Info Section (Right) -->
                <div class="event-info">
                    <h2 class="event-title">Ung ho nguoi ngheo Quoc oai</h2>
                    
                    <div class="event-meta">
                        <div class="meta-item">
                            <i class="fas fa-calendar"></i>
                            <span>11/05/2025 - 31/05/2025</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Quoc Oai, Ha Noi</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-users"></i>
                            <span>Số người tham gia: 0/70</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-tag"></i>
                            <span><span class="status-badge status-active">Đang hoạt động</span></span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-check-circle"></i>
                            <span><span class="status-badge status-pending">Đang chờ phê duyệt</span></span>
                        </div>
                    </div>
                    
                    <div class="event-progress">
                        <div class="progress-title">
                            <span>Số lượng tình nguyện viên</span>
                            <span>0/70 người</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 0%"></div>
                        </div>
                    </div>
                    
                    <div class="action-buttons">
                        <button class="btn btn-primary">
                            <i class="fas fa-hand-holding-heart"></i> Đăng ký tham gia
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-share-alt"></i> Chia sẻ
                        </button>
                        <button class="btn btn-outline btn-results">
                            <i class="fas fa-chart-bar"></i> Kết quả
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Event Description Section (Below) -->
            <div class="event-description">
                <h3 class="details-title">
                    <i class="fas fa-align-left"></i> Mô tả sự kiện
                </h3>
                <p>Trước đó, HĐND thành phố Đà Nẵng đã thông qua nghị quyết bổ sung danh mục dự án chuẩn bị đầu tư, kế hoạch vốn đầu tư công trung hạn giai đoạn 2021- 2025. Trong số các dự án hạ tầng nhằm phục vụ cho việc xây dựng Khu thương mại tự do, có Đề án lấn biển tại vịnh Đà Nẵng do Sở Xây dựng đề xuất.</p>
                <br>
                <p>Tại buổi tiếp xúc cử tri ngày 25/4, ông Nguyễn Văn Quảng, Bí thư Thành ủy Đà Nẵng, cho biết về một điểm nhấn đầy tham vọng khi thành phố nghiên cứu dự án khu đô thị ven biển trên vịnh Đà Nẵng.</p>
                <br>
                <p>Theo ông Quảng, thành phố đang nghiên cứu hình thành đề án xây dựng 5 hòn đảo nổi, tạo ra khoảng 48km đường bờ biển mới, hướng đến một tổ hợp trung tâm tài chính, thương mại, dịch vụ mang tầm quốc tế.</p>
            </div>
        </div>
        
        <div class="event-details">
            <h3 class="details-title">
                <i class="fas fa-info-circle"></i> Thông tin chi tiết
            </h3>
            
            <div class="details-grid">
                <div class="details-item">
                    <div class="details-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="details-content">
                        <div class="details-label">Mã sự kiện</div>
                        <div class="details-value">8820a173-3161-444a-b7a4-9658ad90079e</div>
                    </div>
                </div>
                
                <div class="details-item">
                    <div class="details-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="details-content">
                        <div class="details-label">Tổ chức</div>
                        <div class="details-value">0a95205f-1ca7-3ab3-a476-4af8897b61d7</div>
                    </div>
                </div>
                
                <div class="details-item">
                    <div class="details-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="details-content">
                        <div class="details-label">Yêu cầu tình nguyện viên</div>
                        <div class="details-value">Tối thiểu: 15 người | Tối đa: 70 người</div>
                    </div>
                </div>
                
                <div class="details-item">
                    <div class="details-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="details-content">
                        <div class="details-label">Ngày tạo</div>
                        <div class="details-value">10/05/2025 09:21:30</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection