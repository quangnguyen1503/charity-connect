<header class="header">
    <div class="logo">
        Thiennguyen
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Tìm kiếm tên chiến dịch">
    </div>

    <nav class="nav-links">
        <a href="#">Ứng hộ</a>
        <a href="#">Gây quỹ</a>
        <a href="#">Khám phá</a>
        <a href="#">Giới thiệu</a>
        <a href="#" class="create-service">Tạo chiến dịch</a>
        <a href="#" class="notification">🔔</a>

        <div class="avatarheader">
            <img 
                src="{{ asset('images/' . ($volunteer->avatar ?? 'default-avatar.png')) }}" 
                alt="Avatar"
                style="border-radius: 50%; width: 36px; height: 36px; object-fit: cover;">
        </div>
    </nav>
</header>