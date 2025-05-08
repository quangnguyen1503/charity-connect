
@extends('layouts.app')


@section('content')

<div class="main-container">
    <div class="flex-row-aeb">
        <div class="border">
            <div class="avatar">
                <img src="{{ $organization['avatar'] }}" alt="Avatar" style="width: 100px; height: 100px; border-radius: 50%;">
            </div>
        </div>
    
        <span class="hi-green-truong-sa">{{ $organization['fullname'] }}</span>
    
        <div class="image">
            <div class="image-fill">
                <div class="component"></div>
            </div>
        </div>
    
        <div class="button">
            <div class="container"></div>
            <div class="image-1">
                <div class="image-fill-2">
                    <div class="component-3"></div>
                </div>
            </div>
            <span class="theo-doi">Theo dõi</span>
        </div>
    
        <div class="button-4">
            <div class="container-5"></div>
            <div class="image-6">
                <div class="image-fill-7">
                    <div class="component-8"></div>
                </div>
            </div>
        </div>
    
        <span class="higreentruongsa">@ {{ ($organization['fullname']) }}</span>
    
        <div class="rectangle"></div>
    
        <div class="icon-follow">
            <div class="image-fill-9">
                <div class="component-a"></div>
            </div>
        </div>
    
        <div class="icon-post">
            <div class="image-fill-b">
                <div class="component-c"></div>
            </div>
        </div>
    
        <span class="n">1.2 N</span>
        <span class="nguoi-theo-doi">người theo dõi</span>
        <span class="text-6">2</span>
        <span class="bai-viet">bài viết</span>
    
        <div class="vertical-divider"></div>
    </div>
    
    <div class="overlay-horizontal-border-shadow">
        <div class="container-d">
            <div class="tablist">
                <div class="tab">
                    <span class="hoat-dong">Hoạt động đang diễn ra</span>
                    <div class="container-e"></div>
                </div>
                <div class="tab-f">
                    <span class="thanh-tuu">Hoạt động đã kết thúc</span>
                    <div class="container-10"></div>
                </div>
                <div class="tab-11">
                    <span class="chien-dich">Kết quả</span>
                    <div class="container-12"></div>
                </div>
            </div>
            <div class="horizontal-divider"></div>
        </div>
    </div>
    <div class="background">
        <div class="flex-row-f">
            <div class="container-19">
                <div class="container-1a">
                    <div class="flex-row-df">
                        <div class="overlay">
                            <div class="flex-row-ca">
                                <div class="icon-donate-bbe-webp"></div>
                                <span class="amount">2.172.357.978 đ</span><span class="percentage">1%</span>
                            </div>
                            <div class="background-1b">
                                <div class="progressbar"></div>
                            </div>
                        </div>
                        <div class="green-iguana"></div>
                    </div>
                    <div class="container-1c">
                        <span class="program-description">Chương trình trồng 1 triệu cây xanh cho…</span>
                    </div>
                    <div class="support-count">
                        <span class="days-left">6169 lượt ủng hộ</span><span class="image-1d">Còn 256 ngày</span>
                        <div class="image-fill-1e">
                            <div class="component-1f">
                                <div class="background-20"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-1a">
                    <div class="flex-row-df">
                        <div class="overlay">
                            <div class="flex-row-ca">
                                <div class="icon-donate-bbe-webp"></div>
                                <span class="amount">2.172.357.978 đ</span><span class="percentage">1%</span>
                            </div>
                            <div class="background-1b">
                                <div class="progressbar"></div>
                            </div>
                        </div>
                        <div class="green-iguana"></div>
                    </div>
                    <div class="container-1c">
                        <span class="program-description">Chương trình trồng 1 triệu cây xanh cho…</span>
                    </div>
                    <div class="support-count">
                        <span class="days-left">6169 lượt ủng hộ</span><span class="image-1d">Còn 256 ngày</span>
                        <div class="image-fill-1e">
                            <div class="component-1f">
                                <div class="background-20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-57">
                <div class="flex-column">
                    <span class="companion">Thông tin tổ chức</span>
            
                    <div class="link">
                        <div class="container-58">
                            <span class="cscq-ho-mb">Email: {{ $organization['email'] }}</span>
                        </div>
                    </div>
            
                    <div class="link-5e">
                        <div class="container-5f">
                            <span class="mb-thuong-tin">Địa chỉ: {{ $organization['address'] }}</span>
                        </div>
                    </div>
            
                    <div class="link-63">
                        <div class="container-64">
                            <span class="mua-dong-am">Đại diện: {{ $organization['representative'] }}</span>
                        </div>
                    </div>
            
                    <div class="mt-2 link-63">
                        <div class="container-64">
                            <span class="mua-dong-am">Ngày thành lập: {{ \Carbon\Carbon::parse($organization['founded_at'])->format('d/m/Y') }}</span>
                        </div>
                    </div>
            
                    <div class="mt-2 link-63">
                        <div class="container-64">
                            <span class="mua-dong-am">Mô tả: {{ $organization['description'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="flex-row-c-2b">
            <div class="container-2c">
                <div class="background-shadow">
                    <span class="xanh-hoa-truong-sa">XANH HÓA TRƯỜNG SA: NHIỆM VỤ CẤP BÁCH NHẰM PHÁT TRIỂN BỀN VỮNG
                        QUẦN ĐẢO TRƯỜNG SA <br />
                        ...</span>
                    <div class="button-2d">
                        <span class="xem-them">Xem thêm</span>
                    </div>
                    <div class="overlay-shadow">
                        <div class="component-2e">
                            <div class="dbd-b-bccd"></div>
                        </div>
                    </div>
                    <div class="flex-row-eb">
                        <span class="chia-se"> Chia sẻ</span><span class="luot-thich">1 lượt thích</span><span
                            class="binh-luan">Bình luận</span>
                        <div class="image-2f">
                            <div class="image-fill-30">
                                <div class="component-31">
                                    <div class="share-network"></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-32">
                            <div class="image-fill-33">
                                <div class="component-34"></div>
                            </div>
                        </div>
                        <div class="component-35"></div>
                    </div>
                    <div class="flex-row-af">
                        <div class="container-36">
                            <div class="remy-sharp"></div>
                        </div>
                        <span class="higreen-truong-sa">HiGreen Trường Sa</span>
                        <div class="image-37">
                            <div class="image-fill-38">
                                <div class="component-39"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row-b">
                        <div class="da-them-anh-moi">
                            <span class="da-them-1-anh-moi">Đã thêm 1 ảnh mới</span><span class="ngay-truoc">
                            </span>
                        </div>
                        <span class="ngay-truoc-3a">3 ngày trước</span>
                        <div class="image-3b">
                            <div class="image-fill-3c">
                                <div class="component-3d"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-shadow-3e">
                    <span class="higreen-truong-sa-buoc-di">HiGreen Trường Sa - Bước đi chiến lược hiện thực hóa các
                        cam
                        kết về môi trường của Việt Nam <br />
                        ...</span>
                    <div class="button-3f">
                        <span class="xem-them-40">Xem thêm</span>
                    </div>
                    <div class="overlay-shadow-41">
                        <div class="component-42">
                            <div class="b-fde"></div>
                        </div>
                        <div class="component-43">
                            <div class="dcfa-c-f-a-bbb"></div>
                        </div>
                    </div>
                    <div class="flex-row-a">
                        <span class="share"> Chia sẻ</span><span class="like-count">2 lượt thích</span><span
                            class="comment">Bình luận</span>
                        <div class="image-44">
                            <div class="image-fill-45">
                                <div class="component-46">
                                    <div class="share-network-47"></div>
                                </div>
                            </div>
                        </div>
                        <div class="image-48">
                            <div class="image-fill-49">
                                <div class="component-4a"></div>
                            </div>
                        </div>
                        <div class="component-4b"></div>
                    </div>
                    <div class="flex-row">
                        <div class="container-4c">
                            <div class="remy-sharp-4d"></div>
                        </div>
                        <span class="hi-green-truong-sa-4e">HiGreen Trường Sa</span>
                        <div class="image-4f">
                            <div class="image-fill-50">
                                <div class="component-51"></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row-b-52">
                        <div class="new-image">
                            <span class="new-image-53">Đã thêm 2 ảnh mới</span><span class="space"> </span>
                        </div>
                        <span class="days-ago">5 ngày trước</span>
                        <div class="image-54">
                            <div class="image-fill-55">
                                <div class="component-56"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="image-78">
    <img src="{{ $organization['avatar'] }}" alt="Avatar của {{ $organization['fullname'] }}" style="width: 100%; height: auto;">
 </div>
 
</div>

@endsection