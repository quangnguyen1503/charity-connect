<header class="header_simple" id="header_simple">
    <!-- Desktop Header -->
    <div class="header-desktop w-100">
        <div class="container container-new">
            <div class="d-flex align-items-center justify-content-between h-100">
                <!-- Logo -->
                <a href="/" class="logo">
                    <img src="{{ asset('images/Nitro_Wallpaper_5000x2813.jpg') }}" alt="Thiện Nguyện" width="247" height="60" style="width: 130px; height: auto;">
                </a>

                <!-- Search Box -->
                <div id="input_search_header">
                    <img src="{{ asset('images/icon-search.svg') }}" alt="icon search" width="20" height="20" style="width: 20px; height: 20px;">
                    <input type="text" value="" placeholder="Tìm kiếm tên chiến dịch">
                </div>

                <!-- Navigation Menu -->
                <div class="menuHeader flex-grow-1 flex-shrink-1">
                    <div class="menu_header_list menu_header_list_in_large" id="menu_header_list">
                        <!-- Ủng hộ Menu -->
                        <div class="menu_header_item">
                            <span>Ủng hộ</span>
                            <div class="sub_menu_header_item">
                                <div class="sub_menu_header_list" id="sub_menu_header_list" style="left:-12px">
                                    <div class="diamond diamond_in_large diamond_in_large_first"></div>
                                    <div class="sub_menu_content sub_menu_content_in_large sub_menu_content__in_large_first">
                                        <div class="sub_background"></div>
                                        <div class="sub_menu_list">
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Chiến dịch</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Đồng hành</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Tổ chức gây quỹ</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Cá nhân gây quỹ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gây quỹ Menu -->
                        <div class="menu_header_item">
                            <span>Gây quỹ</span>
                            <div class="sub_menu_header_item">
                                <div class="sub_menu_header_list" id="sub_menu_header_list">
                                    <div class="diamond diamond_in_large"></div>
                                    <div class="sub_menu_content sub_menu_content_in_large">
                                        <div class="sub_background"></div>
                                        <div class="sub_menu_list">
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Bắt đầu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Khám phá Menu -->
                        <div class="menu_header_item">
                            <span>Khám phá</span>
                            <div class="sub_menu_header_item">
                                <div class="sub_menu_header_list" id="sub_menu_header_list">
                                    <div class="diamond diamond_in_large"></div>
                                    <div class="sub_menu_content sub_menu_content_in_large">
                                        <div class="sub_background"></div>
                                        <div class="sub_menu_list">
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Bản đồ thiện nguyện</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Sự kiện thiện nguyện</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Bảng tin</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Tin tức</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Giới thiệu Menu -->
                        <div class="menu_header_item">
                            <span>Giới thiệu</span>
                            <div class="sub_menu_header_item">
                                <div class="sub_menu_header_list" id="sub_menu_header_list">
                                    <div class="diamond diamond_in_large"></div>
                                    <div class="sub_menu_content sub_menu_content_in_large">
                                        <div class="sub_background"></div>
                                        <div class="sub_menu_list">
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Về thiện nguyện</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Hỏi đáp</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Điều khoản</span>
                                                </div>
                                            </div>
                                            <div class="sub_menu_item">
                                                <div class="sub_menu_dropdown_item">
                                                    <span>Chính sách bảo mật</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login and Create Campaign buttons -->
                <div class="boxSearchAndLogin">
                    <button class="btn-create-donate-target">
                        <span>Tạo chiến dịch</span>
                    </button>
                    <div class="btnLogin">Đăng nhập</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="header-mobile">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-between h-100">
                <div class="header-mobile-left d-flex align-items-center">
                    <img class="logo-app" src="{{ asset('images/Nitro_Wallpaper_5000x2813.jpg') }}" alt="Thiện Nguyện" width="130" height="30">
                </div>
                <div class="header-mobile-right d-flex align-items-center">
                    <div class="noti">
                        <span>
                            <img src="{{ asset('images/icon-notification.svg') }}" alt="Notification" width="24" height="24">
                        </span>
                    </div>
                    <div>
                        <a class="download-link" rel="nofollow" href="#">Tải App</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
