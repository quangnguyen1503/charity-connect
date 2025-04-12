@extends('layouts.app')

@section('title', 'Vũ Nam - Thiện Nguyện App')

@section('content')
    {{-- <div id="containerUserProfile">
    <div class="coverProfile" style="background-image: url(&quot;blob:https://thiennguyen.app/8e745982-2db8-405a-b7f6-d4209af854f5&quot;); background-position: center center; background-size: cover; background-repeat: no-repeat;"><div class="chooseEditCover"><label for="coverProfile"><img src="/_next/static/media/iconEditCover.8d2ff3b2.webp" alt="" class="iconEditCover"></label><input hidden="" type="file" id="coverProfile" name="coverProfile" accept="image/png,image/jpeg"></div></div>
    <!-- Profile Banner Section -->
    <div class="boxTopProfile">
        <div class="container">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-4 boxInfo">
                <!-- User Avatar -->
                <div class="MuiGrid-root MuiGrid-item">
                    <span class="MuiBadge-root">
                        <div class="MuiAvatar-root MuiAvatar-circular">
                            <img alt="avatar" src="{{ asset('images/Nitro_Wallpaper_5000x2813.jpg') }}" class="MuiAvatar-img" width="188" height="188">
                        </div>
                        <span class="MuiBadge-badge"></span>
                    </span>
                </div>

                <!-- User Info -->
                <div class="MuiGrid-root MuiGrid-item">
                    <div class="MuiGrid-root MuiGrid-container">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-8">
                            <div class="groupParameter">
                                <div class="name">Vũ Nam</div>
                                <div class="username">@vunam3445</div>
                                <div class="boxInfoNumber">
                                    <div class="item item2">
                                        <img src="{{ asset('images/icon-follow.svg') }}" alt="icon-follow" width="25" height="25">
                                        <span>0</span> <span>người theo dõi</span>
                                    </div>
                                    <div class="item item3">
                                        <img src="{{ asset('images/icon-post.svg') }}" alt="icon-post" width="24" height="25">
                                        <span> 0</span> <span>bài viết</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-md-4">
                            <div class="groupBtn">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary" type="button">
                                    <span class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge">
                                        <img src="{{ asset('images/icon-follow.svg') }}" alt="" width="21" height="20" style="margin-right: 4px">
                                    </span>
                                    Theo dõi
                                </button>
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary" type="button">
                                    <span class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge">
                                        <img src="{{ asset('images/icon-share.svg') }}" alt="" width="20" height="20">
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs Section -->
    <div class="containerTabsPage">
        <div class="container">
            <div class="boxTabsPage">
                <div class="boxTabs col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="MuiTabs-root">
                        <div class="MuiTabs-scroller MuiTabs-fixed" style="overflow: hidden; margin-bottom: 0px;">
                            <div class="MuiTabs-flexContainer" role="tablist">
                                <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected" tabindex="0" type="button" role="tab" aria-selected="true">Hoạt động</button>
                                <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary" tabindex="-1" type="button" role="tab" aria-selected="false">Thành tựu</button>

                            <span class="MuiTabs-indicator" style="left: 0px; width: 119.656px; background-color: rgb(255, 159, 46);"></span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="boxGroupIconSocial">
                    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" rel="noreferrer">
                        <div class="item">
                            <img src="{{ asset('images/icon-gmail.svg') }}" alt="" width="25" height="25">
                            <div class="itemBorder"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="containerMainContent">
        <div class="container">
            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-3">
                <!-- Left Column - Activities -->
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-8">
                    <div class="empty-content">
                        <img src="{{ asset('images/empty-activities.svg') }}" alt="No activities">
                        <h3>Chưa có hoạt động nào</h3>
                        <p>Hiện tại Vũ Nam chưa có hoạt động nào. Hãy quay lại sau nhé!</p>
                    </div>
                </div>

                <!-- Right Column - Sidebar -->
            
            </div>
        </div>
    </div>
</div> --}}
    {{-- <main>
        <div id="containerUserProfile">
            <div class="coverProfile"
                style="background-image: url(&quot;https://static.thiennguyen.app/public/user/banner/2025/4/10/0e53435f-aa72-434b-9b47-4822d327460d.jpg&quot;); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                <div class="chooseEditCover"><label for="coverProfile"><img
                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZF81NDFfNTY4NykiPgo8Y2lyY2xlIGN4PSIyNSIgY3k9IjIwIiByPSIyMCIgZmlsbD0iI0ZDRkNGQyIvPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDBfNTQxXzU2ODcpIj4KPHBhdGggZD0iTTI5LjE2NjcgMTIuNUwyOC4wMzQ3IDEwLjk3MzNDMjcuODA5MiAxMC42NzE1IDI3LjUyMDYgMTAuNDI3IDI3LjE5MDggMTAuMjU4NEMyNi44NjEgMTAuMDg5NyAyNi40OTg2IDEwLjAwMTQgMjYuMTMxMSAxMEgyMy4wMzU1QzIyLjY2OCAxMC4wMDE0IDIyLjMwNTcgMTAuMDg5NyAyMS45NzU5IDEwLjI1ODRDMjEuNjQ2MSAxMC40MjcgMjEuMzU3NSAxMC42NzE1IDIxLjEzMiAxMC45NzMzTDIwIDEyLjVIMjkuMTY2N1oiIGZpbGw9IiM0NzQ3NDciLz4KPHBhdGggZD0iTTI0Ljk5OTggMjVDMjYuODQwOCAyNSAyOC4zMzMyIDIzLjUwNzYgMjguMzMzMiAyMS42NjY2QzI4LjMzMzIgMTkuODI1NyAyNi44NDA4IDE4LjMzMzMgMjQuOTk5OCAxOC4zMzMzQzIzLjE1ODkgMTguMzMzMyAyMS42NjY1IDE5LjgyNTcgMjEuNjY2NSAyMS42NjY2QzIxLjY2NjUgMjMuNTA3NiAyMy4xNTg5IDI1IDI0Ljk5OTggMjVaIiBmaWxsPSIjNDc0NzQ3Ii8+CjxwYXRoIGQ9Ik0zMC44MzMzIDE0LjE2NjdIMTkuMTY2N0MxOC4wNjIgMTQuMTY4IDE3LjAwMyAxNC42MDc0IDE2LjIyMTggMTUuMzg4NUMxNS40NDA3IDE2LjE2OTcgMTUuMDAxMyAxNy4yMjg3IDE1IDE4LjMzMzRMMTUgMjUuODMzNEMxNS4wMDEzIDI2LjkzOCAxNS40NDA3IDI3Ljk5NzEgMTYuMjIxOCAyOC43NzgyQzE3LjAwMyAyOS41NTkzIDE4LjA2MiAyOS45OTg3IDE5LjE2NjcgMzBIMzAuODMzM0MzMS45MzggMjkuOTk4NyAzMi45OTcgMjkuNTU5MyAzMy43NzgyIDI4Ljc3ODJDMzQuNTU5MyAyNy45OTcxIDM0Ljk5ODcgMjYuOTM4IDM1IDI1LjgzMzRWMTguMzMzNEMzNC45OTg3IDE3LjIyODcgMzQuNTU5MyAxNi4xNjk3IDMzLjc3ODIgMTUuMzg4NUMzMi45OTcgMTQuNjA3NCAzMS45MzggMTQuMTY4IDMwLjgzMzMgMTQuMTY2N1pNMjUgMjYuNjY2N0MyNC4wMTExIDI2LjY2NjcgMjMuMDQ0NCAyNi4zNzM0IDIyLjIyMjEgMjUuODI0QzIxLjM5OTkgMjUuMjc0NiAyMC43NTkgMjQuNDkzNyAyMC4zODA2IDIzLjU4MDFDMjAuMDAyMiAyMi42NjY1IDE5LjkwMzEgMjEuNjYxMSAyMC4wOTYxIDIwLjY5MTJDMjAuMjg5IDE5LjcyMTMgMjAuNzY1MiAxOC44MzA0IDIxLjQ2NDUgMTguMTMxMkMyMi4xNjM3IDE3LjQzMTkgMjMuMDU0NiAxNi45NTU3IDI0LjAyNDUgMTYuNzYyOEMyNC45OTQ1IDE2LjU2OTggMjUuOTk5OCAxNi42Njg5IDI2LjkxMzQgMTcuMDQ3M0MyNy44MjcgMTcuNDI1NyAyOC42MDc5IDE4LjA2NjYgMjkuMTU3MyAxOC44ODg4QzI5LjcwNjggMTkuNzExMSAzMCAyMC42Nzc4IDMwIDIxLjY2NjdDMjkuOTk4NyAyMi45OTI0IDI5LjQ3MTUgMjQuMjYzNCAyOC41MzQxIDI1LjIwMDhDMjcuNTk2NyAyNi4xMzgyIDI2LjMyNTcgMjYuNjY1NCAyNSAyNi42NjY3WiIgZmlsbD0iIzQ3NDc0NyIvPgo8L2c+CjwvZz4KPGRlZnM+CjxmaWx0ZXIgaWQ9ImZpbHRlcjBfZF81NDFfNTY4NyIgeD0iMCIgeT0iMCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUNvbG9yTWF0cml4IGluPSJTb3VyY2VBbHBoYSIgdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDEyNyAwIiByZXN1bHQ9ImhhcmRBbHBoYSIvPgo8ZmVPZmZzZXQgZHk9IjUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMi41Ii8+CjxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9Im91dCIvPgo8ZmVDb2xvck1hdHJpeCB0eXBlPSJtYXRyaXgiIHZhbHVlcz0iMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMC4wOCAwIi8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3IiByZXN1bHQ9InNoYXBlIi8+CjwvZmlsdGVyPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzU0MV81Njg3Ij4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJ3aGl0ZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTUgMTApIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="
                            alt="" class="iconEditCover"></label><input hidden="" type="file" id="coverProfile"
                        name="coverProfile" accept="image/png,image/jpeg"></div>
            </div>
            <div class="boxTopProfile">
                <div class="container">
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1 boxInfo css-1vfbpkf">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1dvm79k"><span
                                class="MuiBadge-root css-1rzb3uu">
                                <div class="MuiAvatar-root MuiAvatar-circular css-1d6k19r">
                                    <img alt="avatar"
                                        src="https://static.thiennguyen.app/public/user/profile/2025/4/10/1309ae00-9cbc-4d3f-a5c5-108dfbf547ee.jpg"
                                        class="MuiAvatar-img css-1hy9t21">
                                </div>
                                <span
                                    class="MuiBadge-badge MuiBadge-standard MuiBadge-anchorOriginBottomRight MuiBadge-anchorOriginBottomRightCircular MuiBadge-overlapCircular css-1vkeucp">
                                    <div class="chooseEditAvatar"><label for="avatar"><img
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZF81NDFfNTY4NykiPgo8Y2lyY2xlIGN4PSIyNSIgY3k9IjIwIiByPSIyMCIgZmlsbD0iI0ZDRkNGQyIvPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDBfNTQxXzU2ODcpIj4KPHBhdGggZD0iTTI5LjE2NjcgMTIuNUwyOC4wMzQ3IDEwLjk3MzNDMjcuODA5MiAxMC42NzE1IDI3LjUyMDYgMTAuNDI3IDI3LjE5MDggMTAuMjU4NEMyNi44NjEgMTAuMDg5NyAyNi40OTg2IDEwLjAwMTQgMjYuMTMxMSAxMEgyMy4wMzU1QzIyLjY2OCAxMC4wMDE0IDIyLjMwNTcgMTAuMDg5NyAyMS45NzU5IDEwLjI1ODRDMjEuNjQ2MSAxMC40MjcgMjEuMzU3NSAxMC42NzE1IDIxLjEzMiAxMC45NzMzTDIwIDEyLjVIMjkuMTY2N1oiIGZpbGw9IiM0NzQ3NDciLz4KPHBhdGggZD0iTTI0Ljk5OTggMjVDMjYuODQwOCAyNSAyOC4zMzMyIDIzLjUwNzYgMjguMzMzMiAyMS42NjY2QzI4LjMzMzIgMTkuODI1NyAyNi44NDA4IDE4LjMzMzMgMjQuOTk5OCAxOC4zMzMzQzIzLjE1ODkgMTguMzMzMyAyMS42NjY1IDE5LjgyNTcgMjEuNjY2NSAyMS42NjY2QzIxLjY2NjUgMjMuNTA3NiAyMy4xNTg5IDI1IDI0Ljk5OTggMjVaIiBmaWxsPSIjNDc0NzQ3Ii8+CjxwYXRoIGQ9Ik0zMC44MzMzIDE0LjE2NjdIMTkuMTY2N0MxOC4wNjIgMTQuMTY4IDE3LjAwMyAxNC42MDc0IDE2LjIyMTggMTUuMzg4NUMxNS40NDA3IDE2LjE2OTcgMTUuMDAxMyAxNy4yMjg3IDE1IDE4LjMzMzRMMTUgMjUuODMzNEMxNS4wMDEzIDI2LjkzOCAxNS40NDA3IDI3Ljk5NzEgMTYuMjIxOCAyOC43NzgyQzE3LjAwMyAyOS41NTkzIDE4LjA2MiAyOS45OTg3IDE5LjE2NjcgMzBIMzAuODMzM0MzMS45MzggMjkuOTk4NyAzMi45OTcgMjkuNTU5MyAzMy43NzgyIDI4Ljc3ODJDMzQuNTU5MyAyNy45OTcxIDM0Ljk5ODcgMjYuOTM4IDM1IDI1LjgzMzRWMTguMzMzNEMzNC45OTg3IDE3LjIyODcgMzQuNTU5MyAxNi4xNjk3IDMzLjc3ODIgMTUuMzg4NUMzMi45OTcgMTQuNjA3NCAzMS45MzggMTQuMTY4IDMwLjgzMzMgMTQuMTY2N1pNMjUgMjYuNjY2N0MyNC4wMTExIDI2LjY2NjcgMjMuMDQ0NCAyNi4zNzM0IDIyLjIyMjEgMjUuODI0QzIxLjM5OTkgMjUuMjc0NiAyMC43NTkgMjQuNDkzNyAyMC4zODA2IDIzLjU4MDFDMjAuMDAyMiAyMi42NjY1IDE5LjkwMzEgMjEuNjYxMSAyMC4wOTYxIDIwLjY5MTJDMjAuMjg5IDE5LjcyMTMgMjAuNzY1MiAxOC44MzA0IDIxLjQ2NDUgMTguMTMxMkMyMi4xNjM3IDE3LjQzMTkgMjMuMDU0NiAxNi45NTU3IDI0LjAyNDUgMTYuNzYyOEMyNC45OTQ1IDE2LjU2OTggMjUuOTk5OCAxNi42Njg5IDI2LjkxMzQgMTcuMDQ3M0MyNy44MjcgMTcuNDI1NyAyOC42MDc5IDE4LjA2NjYgMjkuMTU3MyAxOC44ODg4QzI5LjcwNjggMTkuNzExMSAzMCAyMC42Nzc4IDMwIDIxLjY2NjdDMjkuOTk4NyAyMi45OTI0IDI5LjQ3MTUgMjQuMjYzNCAyOC41MzQxIDI1LjIwMDhDMjcuNTk2NyAyNi4xMzgyIDI2LjMyNTcgMjYuNjY1NCAyNSAyNi42NjY3WiIgZmlsbD0iIzQ3NDc0NyIvPgo8L2c+CjwvZz4KPGRlZnM+CjxmaWx0ZXIgaWQ9ImZpbHRlcjBfZF81NDFfNTY4NyIgeD0iMCIgeT0iMCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUNvbG9yTWF0cml4IGluPSJTb3VyY2VBbHBoYSIgdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDEyNyAwIiByZXN1bHQ9ImhhcmRBbHBoYSIvPgo8ZmVPZmZzZXQgZHk9IjUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMi41Ii8+CjxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9Im91dCIvPgo8ZmVDb2xvck1hdHJpeCB0eXBlPSJtYXRyaXgiIHZhbHVlcz0iMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMC4wOCAwIi8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3IiByZXN1bHQ9InNoYXBlIi8+CjwvZmlsdGVyPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzU0MV81Njg3Ij4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJ3aGl0ZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTUgMTApIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="
                                                alt="" class="iconEditAvatar"></label>
                                        <input hidden="" type="file" id="avatar" name="avatar"
                                            accept="image/png,image/jpeg">
                                    </div>
                                </span>
                            </span></div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                            <div class="groupParameter">
                                <div class="name">Vũ Nam</div>
                                <div class="username">@vunam3445</div>
                                <div class="boxInfoNumber">
                                    <div class="item item2"><img
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjUiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNSAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwLjU1NzYgMTkuMTk3N0MyMC41NTc2IDE5LjM5NDEgMjAuNDc5NiAxOS41ODI1IDIwLjM0MDcgMTkuNzIxNEMyMC4yMDE4IDE5Ljg2MDIgMjAuMDEzNCAxOS45MzgzIDE5LjgxNyAxOS45MzgzQzE5LjYyMDYgMTkuOTM4MyAxOS40MzIyIDE5Ljg2MDIgMTkuMjkzNCAxOS43MjE0QzE5LjE1NDUgMTkuNTgyNSAxOS4wNzY1IDE5LjM5NDEgMTkuMDc2NSAxOS4xOTc3QzE5LjA3NjUgMTEuODQ3NSAxMy4wOTYzIDUuODY3NDMgNS43NDYxOSA1Ljg2NzQzQzUuNTQ5NzcgNS44Njc0MyA1LjM2MTQxIDUuNzg5NDEgNS4yMjI1MiA1LjY1MDUyQzUuMDgzNjQgNS41MTE2NCA1LjAwNTYyIDUuMzIzMjcgNS4wMDU2MiA1LjEyNjg2QzUuMDA1NjIgNC45MzA0NSA1LjA4MzY0IDQuNzQyMDggNS4yMjI1MiA0LjYwMzJDNS4zNjE0MSA0LjQ2NDMyIDUuNTQ5NzcgNC4zODYyOSA1Ljc0NjE5IDQuMzg2MjlDMTMuOTEyOCA0LjM4NjI5IDIwLjU1NzYgMTEuMDMxMSAyMC41NTc2IDE5LjE5NzdaTTUuNzQ2MTkgMTEuMDUxNEM1LjU0OTc3IDExLjA1MTQgNS4zNjE0MSAxMS4xMjk0IDUuMjIyNTIgMTEuMjY4M0M1LjA4MzY0IDExLjQwNzIgNS4wMDU2MiAxMS41OTU2IDUuMDA1NjIgMTEuNzkyQzUuMDA1NjIgMTEuOTg4NCA1LjA4MzY0IDEyLjE3NjggNS4yMjI1MiAxMi4zMTU3QzUuMzYxNDEgMTIuNDU0NSA1LjU0OTc3IDEyLjUzMjYgNS43NDYxOSAxMi41MzI2QzcuNTEzMjkgMTIuNTM0NSA5LjIwNzQ1IDEzLjIzNzQgMTAuNDU3IDE0LjQ4NjlDMTEuNzA2NSAxNS43MzY0IDEyLjQwOTQgMTcuNDMwNiAxMi40MTEzIDE5LjE5NzdDMTIuNDExMyAxOS4zOTQxIDEyLjQ4OTMgMTkuNTgyNSAxMi42MjgyIDE5LjcyMTRDMTIuNzY3MSAxOS44NjAyIDEyLjk1NTUgMTkuOTM4MyAxMy4xNTE5IDE5LjkzODNDMTMuMzQ4MyAxOS45MzgzIDEzLjUzNjcgMTkuODYwMiAxMy42NzU2IDE5LjcyMTRDMTMuODE0NCAxOS41ODI1IDEzLjg5MjUgMTkuMzk0MSAxMy44OTI1IDE5LjE5NzdDMTMuODkgMTcuMDM3OSAxMy4wMzEgMTQuOTY3MyAxMS41MDM4IDEzLjQ0MDFDOS45NzY1NyAxMS45MTI5IDcuOTA1OTYgMTEuMDUzOSA1Ljc0NjE5IDExLjA1MTRaTTYuMTE2NDcgMTcuNzE2NkM1Ljg5Njc2IDE3LjcxNjYgNS42ODE5OSAxNy43ODE3IDUuNDk5MzEgMTcuOTAzOEM1LjMxNjYzIDE4LjAyNTggNS4xNzQyNSAxOC4xOTkzIDUuMDkwMTcgMTguNDAyM0M1LjAwNjEgMTguNjA1MyA0Ljk4NDEgMTguODI4NiA1LjAyNjk2IDE5LjA0NDFDNS4wNjk4MiAxOS4yNTk2IDUuMTc1NjIgMTkuNDU3NSA1LjMzMDk4IDE5LjYxMjlDNS40ODYzMyAxOS43NjgzIDUuNjg0MjcgMTkuODc0MSA1Ljg5OTc1IDE5LjkxNjlDNi4xMTUyNCAxOS45NTk4IDYuMzM4NTkgMTkuOTM3OCA2LjU0MTU4IDE5Ljg1MzdDNi43NDQ1NiAxOS43Njk2IDYuOTE4MDUgMTkuNjI3MiA3LjA0MDExIDE5LjQ0NDZDNy4xNjIxOCAxOS4yNjE5IDcuMjI3MzMgMTkuMDQ3MSA3LjIyNzMzIDE4LjgyNzRDNy4yMjczMyAxOC41MzI4IDcuMTEwMjkgMTguMjUwMiA2LjkwMTk2IDE4LjA0MTlDNi42OTM2NCAxNy44MzM2IDYuNDExMDkgMTcuNzE2NiA2LjExNjQ3IDE3LjcxNjZaIiBmaWxsPSIjNzU3NTc1Ii8+Cjwvc3ZnPgo="
                                            alt=""> </div>
                                    <div class="item item3"><img
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNCAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwLjExOTYgNC4zODYyOUgzLjgyNzA5QzMuNDM0MjYgNC4zODYyOSAzLjA1NzUzIDQuNTQyMzQgMi43Nzk3NiA0LjgyMDExQzIuNTAyIDUuMDk3ODggMi4zNDU5NSA1LjQ3NDYxIDIuMzQ1OTUgNS44Njc0M1YxOS4xOTc3QzIuMzQ1OTUgMTkuNTkwNSAyLjUwMiAxOS45NjczIDIuNzc5NzYgMjAuMjQ1QzMuMDU3NTMgMjAuNTIyOCAzLjQzNDI2IDIwLjY3ODggMy44MjcwOSAyMC42Nzg4SDIwLjExOTZDMjAuNTEyNSAyMC42Nzg4IDIwLjg4OTIgMjAuNTIyOCAyMS4xNjcgMjAuMjQ1QzIxLjQ0NDcgMTkuOTY3MyAyMS42MDA4IDE5LjU5MDUgMjEuNjAwOCAxOS4xOTc3VjUuODY3NDNDMjEuNjAwOCA1LjQ3NDYxIDIxLjQ0NDcgNS4wOTc4OCAyMS4xNjcgNC44MjAxMUMyMC44ODkyIDQuNTQyMzQgMjAuNTEyNSA0LjM4NjI5IDIwLjExOTYgNC4zODYyOVpNMjAuMTE5NiAxOS4xOTc3SDMuODI3MDlWNS44Njc0M0gyMC4xMTk2VjE5LjE5NzdaTTE3LjE1NzQgOS41NzAyOEMxNy4xNTc0IDkuNzY2NjkgMTcuMDc5MyA5Ljk1NTA2IDE2Ljk0MDQgMTAuMDkzOUMxNi44MDE2IDEwLjIzMjggMTYuNjEzMiAxMC4zMTA5IDE2LjQxNjggMTAuMzEwOUg3LjUyOTk0QzcuMzMzNTMgMTAuMzEwOSA3LjE0NTE2IDEwLjIzMjggNy4wMDYyOCAxMC4wOTM5QzYuODY3MzkgOS45NTUwNiA2Ljc4OTM3IDkuNzY2NjkgNi43ODkzNyA5LjU3MDI4QzYuNzg5MzcgOS4zNzM4NyA2Ljg2NzM5IDkuMTg1NSA3LjAwNjI4IDkuMDQ2NjJDNy4xNDUxNiA4LjkwNzc0IDcuMzMzNTMgOC44Mjk3MSA3LjUyOTk0IDguODI5NzFIMTYuNDE2OEMxNi42MTMyIDguODI5NzEgMTYuODAxNiA4LjkwNzc0IDE2Ljk0MDQgOS4wNDY2MkMxNy4wNzkzIDkuMTg1NSAxNy4xNTc0IDkuMzczODcgMTcuMTU3NCA5LjU3MDI4Wk0xNy4xNTc0IDEyLjUzMjZDMTcuMTU3NCAxMi43MjkgMTcuMDc5MyAxMi45MTczIDE2Ljk0MDQgMTMuMDU2MkMxNi44MDE2IDEzLjE5NTEgMTYuNjEzMiAxMy4yNzMxIDE2LjQxNjggMTMuMjczMUg3LjUyOTk0QzcuMzMzNTMgMTMuMjczMSA3LjE0NTE2IDEzLjE5NTEgNy4wMDYyOCAxMy4wNTYyQzYuODY3MzkgMTIuOTE3MyA2Ljc4OTM3IDEyLjcyOSA2Ljc4OTM3IDEyLjUzMjZDNi43ODkzNyAxMi4zMzYyIDYuODY3MzkgMTIuMTQ3OCA3LjAwNjI4IDEyLjAwODlDNy4xNDUxNiAxMS44NyA3LjMzMzUzIDExLjc5MiA3LjUyOTk0IDExLjc5MkgxNi40MTY4QzE2LjYxMzIgMTEuNzkyIDE2LjgwMTYgMTEuODcgMTYuOTQwNCAxMi4wMDg5QzE3LjA3OTMgMTIuMTQ3OCAxNy4xNTc0IDEyLjMzNjIgMTcuMTU3NCAxMi41MzI2Wk0xNy4xNTc0IDE1LjQ5NDhDMTcuMTU3NCAxNS42OTEzIDE3LjA3OTMgMTUuODc5NiAxNi45NDA0IDE2LjAxODVDMTYuODAxNiAxNi4xNTc0IDE2LjYxMzIgMTYuMjM1NCAxNi40MTY4IDE2LjIzNTRINy41Mjk5NEM3LjMzMzUzIDE2LjIzNTQgNy4xNDUxNiAxNi4xNTc0IDcuMDA2MjggMTYuMDE4NUM2Ljg2NzM5IDE1Ljg3OTYgNi43ODkzNyAxNS42OTEzIDYuNzg5MzcgMTUuNDk0OEM2Ljc4OTM3IDE1LjI5ODQgNi44NjczOSAxNS4xMTAxIDcuMDA2MjggMTQuOTcxMkM3LjE0NTE2IDE0LjgzMjMgNy4zMzM1MyAxNC43NTQzIDcuNTI5OTQgMTQuNzU0M0gxNi40MTY4QzE2LjYxMzIgMTQuNzU0MyAxNi44MDE2IDE0LjgzMjMgMTYuOTQwNCAxNC45NzEyQzE3LjA3OTMgMTUuMTEwMSAxNy4xNTc0IDE1LjI5ODQgMTcuMTU3NCAxNS40OTQ4WiIgZmlsbD0iIzc1NzU3NSIvPgo8L3N2Zz4K"
                                            alt=""> 0</div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                            <div class="groupBtn"><button
                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary css-1miqth6"
                                    tabindex="0" type="button"><span
                                        class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge css-wth0qt"><img
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMSAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE4LjI1ODYgNS43MzIwMUwxNC43NjggMi4yNDA2MUMxNC42NTE5IDIuMTI0NSAxNC41MTQxIDIuMDMyNCAxNC4zNjI0IDEuOTY5NTdDMTQuMjEwNyAxLjkwNjczIDE0LjA0ODIgMS44NzQzOSAxMy44ODQgMS44NzQzOUMxMy43MTk4IDEuODc0MzkgMTMuNTU3MiAxLjkwNjczIDEzLjQwNTYgMS45Njk1N0MxMy4yNTM5IDIuMDMyNCAxMy4xMTYxIDIuMTI0NSAxMyAyLjI0MDYxTDMuMzY2NDEgMTEuODc1QzMuMjQ5ODMgMTEuOTkwNiAzLjE1NzQxIDEyLjEyODMgMy4wOTQ1MSAxMi4yOEMzLjAzMTYgMTIuNDMxNyAyLjk5OTQ4IDEyLjU5NDQgMy4wMDAwMSAxMi43NTg2VjE2LjI1QzMuMDAwMDEgMTYuNTgxNSAzLjEzMTcgMTYuODk5NCAzLjM2NjEyIDE3LjEzMzlDMy42MDA1NCAxNy4zNjgzIDMuOTE4NDkgMTcuNSA0LjI1MDAxIDE3LjVINy43NDE0MUM3LjkwNTYzIDE3LjUwMDUgOC4wNjgzIDE3LjQ2ODQgOC4yMTk5OSAxNy40MDU1QzguMzcxNjggMTcuMzQyNiA4LjUwOTM1IDE3LjI1MDIgOC42MjUwMSAxNy4xMzM2TDE4LjI1ODYgNy40OTk5OEMxOC4zNzQ3IDcuMzgzOSAxOC40NjY4IDcuMjQ2MDkgMTguNTI5NiA3LjA5NDQyQzE4LjU5MjUgNi45NDI3NCAxOC42MjQ4IDYuNzgwMTcgMTguNjI0OCA2LjYxNkMxOC42MjQ4IDYuNDUxODIgMTguNTkyNSA2LjI4OTI1IDE4LjUyOTYgNi4xMzc1OEMxOC40NjY4IDUuOTg1OSAxOC4zNzQ3IDUuODQ4MDkgMTguMjU4NiA1LjczMjAxWk03Ljc0MTQxIDE2LjI1SDQuMjUwMDFWMTIuNzU4NkwxMS4xMjUgNS44ODM1OEwxNC42MTY0IDkuMzc0OThMNy43NDE0MSAxNi4yNVpNMTUuNSA4LjQ5MDYxTDEyLjAwODYgNC45OTk5OEwxMy44ODM2IDMuMTI0OThMMTcuMzc1IDYuNjE1NjFMMTUuNSA4LjQ5MDYxWiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=="
                                            alt="" style="margin-right: 4px;"></span>Chỉnh sửa thông tin<span
                                        class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary css-1o0h03t"
                                    tabindex="0" type="button"><span
                                        class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge css-wth0qt"><img
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEzLjc0OTkgMTIuNUMxMy4zMzMgMTIuNDk5OSAxMi45MjAzIDEyLjU4MzQgMTIuNTM2MiAxMi43NDU2QzEyLjE1MjIgMTIuOTA3OSAxMS44MDQ2IDEzLjE0NTUgMTEuNTE0IDEzLjQ0NDVMNy45MTI0NCAxMS4xMjk3QzguMTk1NzUgMTAuNDAzMiA4LjE5NTc1IDkuNTk2OCA3LjkxMjQ0IDguODcwMzFMMTEuNTE0IDYuNTU1NDdDMTIuMDU1IDcuMTA5NjIgMTIuNzgyNSA3LjQ0MzE3IDEzLjU1NTQgNy40OTE0M0MxNC4zMjgzIDcuNTM5NjkgMTUuMDkxNiA3LjI5OTIzIDE1LjY5NzMgNi44MTY2OEMxNi4zMDMxIDYuMzM0MTIgMTYuNzA4IDUuNjQzODQgMTYuODMzNyA0Ljg3OTY4QzE2Ljk1OTQgNC4xMTU1MSAxNi43OTY5IDMuMzMxOSAxNi4zNzc2IDIuNjgwNzZDMTUuOTU4NCAyLjAyOTYyIDE1LjMxMjMgMS41NTczNSAxNC41NjQ2IDEuMzU1NTFDMTMuODE2OSAxLjE1MzY2IDEzLjAyMSAxLjIzNjYzIDEyLjMzMSAxLjU4ODMyQzExLjY0MSAxLjk0MDAyIDExLjEwNjIgMi41MzUzOCAxMC44MzAzIDMuMjU4OThDMTAuNTU0MyAzLjk4MjU4IDEwLjU1NjkgNC43ODI4NyAxMC44Mzc0IDUuNTA0NjlMNy4yMzU4OCA3LjgxOTUzQzYuODAyMTggNy4zNzQyOCA2LjI0NTU2IDcuMDY4NDcgNS42MzcxNiA2Ljk0MTIxQzUuMDI4NzYgNi44MTM5NCA0LjM5NjI0IDYuODcwOTkgMy44MjA0MyA3LjEwNTA4QzMuMjQ0NjMgNy4zMzkxNiAyLjc1MTcxIDcuNzM5NjQgMi40MDQ2OSA4LjI1NTMxQzIuMDU3NjcgOC43NzA5OSAxLjg3MjMxIDkuMzc4NDMgMS44NzIzMSAxMEMxLjg3MjMxIDEwLjYyMTYgMi4wNTc2NyAxMS4yMjkgMi40MDQ2OSAxMS43NDQ3QzIuNzUxNzEgMTIuMjYwNCAzLjI0NDYzIDEyLjY2MDggMy44MjA0MyAxMi44OTQ5QzQuMzk2MjQgMTMuMTI5IDUuMDI4NzYgMTMuMTg2MSA1LjYzNzE2IDEzLjA1ODhDNi4yNDU1NiAxMi45MzE1IDYuODAyMTggMTIuNjI1NyA3LjIzNTg4IDEyLjE4MDVMMTAuODM3NCAxNC40OTUzQzEwLjU5NjIgMTUuMTE3NiAxMC41NjA1IDE1LjgwMDggMTAuNzM1NiAxNi40NDQ4QzEwLjkxMDcgMTcuMDg4OSAxMS4yODc0IDE3LjY1OTkgMTEuODEwNSAxOC4wNzQ0QzEyLjMzMzYgMTguNDg4OSAxMi45NzU3IDE4LjcyNSAxMy42NDI3IDE4Ljc0ODFDMTQuMzA5OCAxOC43NzEzIDE0Ljk2NjcgMTguNTgwMiAxNS41MTczIDE4LjIwM0MxNi4wNjc5IDE3LjgyNTggMTYuNDgzMyAxNy4yODIyIDE2LjcwMjYgMTYuNjUxOUMxNi45MjE5IDE2LjAyMTUgMTYuOTMzNiAxNS4zMzc1IDE2LjczNjEgMTQuN0MxNi41Mzg1IDE0LjA2MjUgMTYuMTQyIDEzLjUwNDkgMTUuNjA0NyAxMy4xMDkxQzE1LjA2NzMgMTIuNzEzMiAxNC40MTc0IDEyLjQ5OTggMTMuNzQ5OSAxMi41Wk0xMy43NDk5IDIuNUMxNC4xMjA4IDIuNSAxNC40ODMzIDIuNjA5OTcgMTQuNzkxNiAyLjgxNTk5QzE1LjEgMy4wMjIwMiAxNS4zNDAzIDMuMzE0ODYgMTUuNDgyMiAzLjY1NzQ3QzE1LjYyNDEgNC4wMDAwOCAxNS42NjEzIDQuMzc3MDggMTUuNTg4OSA0Ljc0MDc5QzE1LjUxNjYgNS4xMDQ1MSAxNS4zMzggNS40Mzg2IDE1LjA3NTggNS43MDA4M0MxNC44MTM1IDUuOTYzMDUgMTQuNDc5NSA2LjE0MTYyIDE0LjExNTcgNi4yMTM5N0MxMy43NTIgNi4yODYzMiAxMy4zNzUgNi4yNDkxOSAxMy4wMzI0IDYuMTA3MjdDMTIuNjg5OCA1Ljk2NTM2IDEyLjM5NyA1LjcyNTA0IDEyLjE5MDkgNS40MTY2OUMxMS45ODQ5IDUuMTA4MzUgMTEuODc0OSA0Ljc0NTg0IDExLjg3NDkgNC4zNzVDMTEuODc0OSAzLjg3NzcyIDEyLjA3MjUgMy40MDA4MSAxMi40MjQxIDMuMDQ5MTdDMTIuNzc1NyAyLjY5NzU0IDEzLjI1MjcgMi41IDEzLjc0OTkgMi41Wk00Ljk5OTk0IDExLjg3NUM0LjYyOTEgMTEuODc1IDQuMjY2NTkgMTEuNzY1IDMuOTU4MjUgMTEuNTU5QzMuNjQ5OTEgMTEuMzUzIDMuNDA5NTggMTEuMDYwMSAzLjI2NzY3IDEwLjcxNzVDMy4xMjU3NiAxMC4zNzQ5IDMuMDg4NjIgOS45OTc5MiAzLjE2MDk3IDkuNjM0MkMzLjIzMzMyIDkuMjcwNDkgMy40MTE5IDguOTM2NCAzLjY3NDEyIDguNjc0MTdDMy45MzYzNCA4LjQxMTk1IDQuMjcwNDMgOC4yMzMzNyA0LjYzNDE1IDguMTYxMDNDNC45OTc4NiA4LjA4ODY4IDUuMzc0ODYgOC4xMjU4MSA1LjcxNzQ3IDguMjY3NzNDNi4wNjAwOSA4LjQwOTY0IDYuMzUyOTIgOC42NDk5NiA2LjU1ODk1IDguOTU4MzFDNi43NjQ5OCA5LjI2NjY1IDYuODc0OTQgOS42MjkxNiA2Ljg3NDk0IDEwQzYuODc0OTQgMTAuNDk3MyA2LjY3NzQgMTAuOTc0MiA2LjMyNTc3IDExLjMyNThDNS45NzQxNCAxMS42Nzc1IDUuNDk3MjIgMTEuODc1IDQuOTk5OTQgMTEuODc1Wk0xMy43NDk5IDE3LjVDMTMuMzc5MSAxNy41IDEzLjAxNjYgMTcuMzkgMTIuNzA4MyAxNy4xODRDMTIuMzk5OSAxNi45NzggMTIuMTU5NiAxNi42ODUxIDEyLjAxNzcgMTYuMzQyNUMxMS44NzU4IDE1Ljk5OTkgMTEuODM4NiAxNS42MjI5IDExLjkxMSAxNS4yNTkyQzExLjk4MzMgMTQuODk1NSAxMi4xNjE5IDE0LjU2MTQgMTIuNDI0MSAxNC4yOTkyQzEyLjY4NjMgMTQuMDM2OSAxMy4wMjA0IDEzLjg1ODQgMTMuMzg0MSAxMy43ODZDMTMuNzQ3OSAxMy43MTM3IDE0LjEyNDkgMTMuNzUwOCAxNC40Njc1IDEzLjg5MjdDMTQuODEwMSAxNC4wMzQ2IDE1LjEwMjkgMTQuMjc1IDE1LjMwOSAxNC41ODMzQzE1LjUxNSAxNC44OTE2IDE1LjYyNDkgMTUuMjU0MiAxNS42MjQ5IDE1LjYyNUMxNS42MjQ5IDE2LjEyMjMgMTUuNDI3NCAxNi41OTkyIDE1LjA3NTggMTYuOTUwOEMxNC43MjQxIDE3LjMwMjUgMTQuMjQ3MiAxNy41IDEzLjc0OTkgMTcuNVoiIGZpbGw9IiMwREE2NUMiLz4KPC9zdmc+Cg=="
                                            alt=""></span><span
                                        class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                            <div class="desMobile"></div>
                            <div class="boxGroupIconSocial"><a href="https://mail.google.com/mail/u/0/#inbox"
                                    target="_blank" rel="noreferrer">
                                    <div class="item"><img
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjUiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNSAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzFfOTA5OSkiPgo8cGF0aCBkPSJNMi4yMTQ5NyAyMS4zNTMySDYuMDMzMTdWMTIuMDgwNEwzLjUzMjk2IDcuNzE0NkwwLjU3ODYxMyA3Ljk4OTUyVjE5LjcxNjhDMC41Nzg2MTMgMjAuNjIwOSAxLjMxMDg5IDIxLjM1MzIgMi4yMTQ5NyAyMS4zNTMyWiIgZmlsbD0iIzAwODVGNyIvPgo8cGF0aCBkPSJNMTkuMTI0MyAyMS4zNTMySDIyLjk0MjVDMjMuODQ2NSAyMS4zNTMyIDI0LjU3ODggMjAuNjIwOSAyNC41Nzg4IDE5LjcxNjhWNy45ODk1MkwyMS42Mjg4IDcuNzE0NkwxOS4xMjQzIDEyLjA4MDRWMjEuMzUzMkgxOS4xMjQzWiIgZmlsbD0iIzAwQTk0QiIvPgo8cGF0aCBkPSJNMTkuMTI0NCA0Ljk4OTMzTDE2Ljg4MTYgOS4yNjkxNkwxOS4xMjQ0IDEyLjA4MDNMMjQuNTc5IDcuOTg5MzNWNS44MDc1M0MyNC41NzkgMy43ODUyNSAyMi4yNzAzIDIuNjMwMjUgMjAuNjUxNyAzLjg0Mzg5TDE5LjEyNDQgNC45ODkzM1oiIGZpbGw9IiNGRkJDMDAiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjAzMzE3IDEyLjA4MDNMMy44OTYgNy41NjU3N0w2LjAzMzE3IDQuOTg5MzhMMTIuNTc4NiA5Ljg5ODQ2TDE5LjEyNCA0Ljk4OTM4VjEyLjA4MDNMMTIuNTc4NiAxNi45ODk0TDYuMDMzMTcgMTIuMDgwM1oiIGZpbGw9IiNGRjQxMzEiLz4KPHBhdGggZD0iTTAuNTc4ODU3IDUuODA3NTlWNy45ODkzOUw2LjAzMzQyIDEyLjA4MDNWNC45ODkzOUw0LjUwNjE0IDMuODQzOTVDMi44ODc1IDIuNjMwMzEgMC41Nzg4NTcgMy43ODUzMSAwLjU3ODg1NyA1LjgwNzU5WiIgZmlsbD0iI0U1MUMxOSIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzFfOTA5OSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuNTc5MTAyIDAuMzUwOTUyKSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                            alt="">
                                        <div class="itemBorder"></div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="containerTabsPage">
                    <div class="container">
                        <div class="boxTabsPage">
                            <div class="boxTabs col-lg-7 col-md-6 col-sm-12 col-12">
                                <div class="MuiTabs-root css-pc1mzd">
                                    <div class="MuiTabs-scrollableX MuiTabs-hideScrollbar css-oqr85h"
                                        style="width: 99px; height: 99px; position: absolute; top: -9999px; overflow: scroll;">
                                    </div>
                                    <div class="MuiTabs-scroller MuiTabs-hideScrollbar MuiTabs-scrollableX css-12qnib"
                                        style="margin-bottom: 0px;">
                                        <div class="MuiTabs-flexContainer css-k008qs" role="tablist"><button
                                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1i10x67"
                                                tabindex="0" type="button" role="tab" aria-selected="true">Hoạt
                                                động<span class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                tabindex="-1" type="button" role="tab" aria-selected="false">Thành
                                                tựu<span class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                tabindex="-1" type="button" role="tab" aria-selected="false">Chiến
                                                dịch đồng hành<span
                                                    class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                tabindex="-1" type="button" role="tab" aria-selected="false">Ủng
                                                hộ<span class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                tabindex="-1" type="button" role="tab" aria-selected="false">Sự
                                                kiện<span class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                                        <span class="MuiTabs-indicator css-3tj5b5"
                                            style="left: 0px; width: 90px; background-color: rgb(255, 159, 46); padding: 0px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="horizontalLineTab"></div>
                </div>
            </div>
            <div class="containerMainContent">
                <div class="container">
                    <div class="MuiGrid-root MuiGrid-container css-1d3bbye">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-4 css-2zdtwo">
                            <div class="commonBoxCardRight containerCardMotor">
                                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1.5 css-sag665">
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                                        <div class="boxCard">
                                            <div class="boxGroupAvatar"></div>
                                            <div class="boxMoney">
                                                <div class="des">Đã ủng hộ và đồng hành</div>
                                                <div class="money"><span>0 đ</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                                        <div class="boxNumber"><img
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIyLjkzNDUgMTQuMjExMkMyMi42Nzg0IDE0LjAxMzkgMjIuMzg0OCAxMy44NzA3IDIyLjA3MTYgMTMuNzkwNEMyMS43NTg0IDEzLjcxMDEgMjEuNDMyMiAxMy42OTQ0IDIxLjExMjggMTMuNzQ0M0MyMi45NTExIDExLjg4ODMgMjMuODgxMSAxMC4wNDMxIDIzLjg4MTEgOC4yMzQxMkMyMy44ODExIDUuNjQzMDEgMjEuNzk3IDMuNTM1NDYgMTkuMjM1MyAzLjUzNTQ2QzE4LjU1NTUgMy41MzExOSAxNy44ODMxIDMuNjc1NzYgMTcuMjY1MiAzLjk1OTAxQzE2LjY0NzMgNC4yNDIyNyAxNi4wOTg4IDQuNjU3MzQgMTUuNjU4NCA1LjE3NTFDMTUuMjE4IDQuNjU3MzQgMTQuNjY5NSA0LjI0MjI3IDE0LjA1MTYgMy45NTkwMUMxMy40MzM3IDMuNjc1NzYgMTIuNzYxMyAzLjUzMTE5IDEyLjA4MTUgMy41MzU0NkM5LjUxOTggMy41MzU0NiA3LjQzNTc0IDUuNjQzMDEgNy40MzU3NCA4LjIzNDEyQzcuNDM1NzQgOS4zMTA5IDcuNzUyOSAxMC4zNTczIDguNDIwNSAxMS40NjQ0QzcuODczNzQgMTEuNjAzIDcuMzc0NzUgMTEuODg3MSA2Ljk3NjY1IDEyLjI4NjdMNC43NjI0IDE0LjQ5OUgxLjk1Mzk4QzEuNTM4NTkgMTQuNDk5IDEuMTQwMjEgMTQuNjY0IDAuODQ2NDkxIDE0Ljk1NzdDMC41NTI3NjggMTUuMjUxNSAwLjM4Nzc1NiAxNS42NDk4IDAuMzg3NzU2IDE2LjA2NTJMMC4zODc3NTYgMTkuOTgwOEMwLjM4Nzc1NiAyMC4zOTYyIDAuNTUyNzY4IDIwLjc5NDUgMC44NDY0OTEgMjEuMDg4M0MxLjE0MDIxIDIxLjM4MiAxLjUzODU5IDIxLjU0NyAxLjk1Mzk4IDIxLjU0N0gxMi4xMzQ0QzEyLjE5ODQgMjEuNTQ3IDEyLjI2MjIgMjEuNTM5MSAxMi4zMjQzIDIxLjUyMzVMMTguNTg5MiAxOS45NTczQzE4LjYyOTEgMTkuOTQ3OCAxOC42NjgxIDE5LjkzNDcgMTguNzA1NyAxOS45MTgxTDIyLjUxMDYgMTguMjk5TDIyLjU1MzcgMTguMjc5NUMyMi45MTk0IDE4LjA5NjcgMjMuMjMyNSAxNy44MjM5IDIzLjQ2MzYgMTcuNDg2N0MyMy42OTQ3IDE3LjE0OTUgMjMuODM2MiAxNi43NTkgMjMuODc0NyAxNi4zNTIxQzIzLjkxMzEgMTUuOTQ1MSAyMy44NDc0IDE1LjUzNSAyMy42ODM2IDE1LjE2MDVDMjMuNTE5OCAxNC43ODU5IDIzLjI2MzMgMTQuNDU5MiAyMi45Mzg0IDE0LjIxMTJIMjIuOTM0NVpNMTIuMDgxNSA1LjEwMTY4QzEyLjY4ODEgNS4wOTI4IDEzLjI4MzUgNS4yNjUwMyAxMy43OTE2IDUuNTk2MzRDMTQuMjk5NyA1LjkyNzY1IDE0LjY5NzUgNi40MDI5OSAxNC45MzQgNi45NjE1N0MxNC45OTMgNy4xMDUyIDE1LjA5MzQgNy4yMjgwNSAxNS4yMjI0IDcuMzE0NUMxNS4zNTEzIDcuNDAwOTYgMTUuNTAzMSA3LjQ0NzEyIDE1LjY1ODQgNy40NDcxMkMxNS44MTM3IDcuNDQ3MTIgMTUuOTY1NCA3LjQwMDk2IDE2LjA5NDQgNy4zMTQ1QzE2LjIyMzQgNy4yMjgwNSAxNi4zMjM4IDcuMTA1MiAxNi4zODI4IDYuOTYxNTdDMTYuNjE5MyA2LjQwMjk5IDE3LjAxNzEgNS45Mjc2NSAxNy41MjUyIDUuNTk2MzRDMTguMDMzMyA1LjI2NTAzIDE4LjYyODcgNS4wOTI4IDE5LjIzNTMgNS4xMDE2OEMyMC45MDQzIDUuMTAxNjggMjIuMzE0OCA2LjUzNTc1IDIyLjMxNDggOC4yMzQxMkMyMi4zMTQ4IDEwLjE0MzkgMjAuNzY5MiAxMi4zMDQzIDE3Ljg0NTIgMTQuNDg5MkwxNi43NTk2IDE0LjczODhDMTYuODU0OSAxNC4zMzYzIDE2Ljg1NzkgMTMuOTE3NCAxNi43NjgzIDEzLjUxMzZDMTYuNjc4NiAxMy4xMDk4IDE2LjQ5ODggMTIuNzMxNSAxNi4yNDIxIDEyLjQwN0MxNS45ODU1IDEyLjA4MjYgMTUuNjU4OCAxMS44MjA1IDE1LjI4NjUgMTEuNjQwM0MxNC45MTQxIDExLjQ2MDEgMTQuNTA1OCAxMS4zNjY1IDE0LjA5MjIgMTEuMzY2NkgxMC4yNDMyQzkuMzk4NDEgMTAuMjI3MSA5LjAwMTk2IDkuMjI0NzUgOS4wMDE5NiA4LjIzNDEyQzkuMDAxOTYgNi41MzU3NSAxMC40MTI1IDUuMTAxNjggMTIuMDgxNSA1LjEwMTY4Wk0xLjk1Mzk4IDE2LjA2NTJINC4zMDMzMVYxOS45ODA4SDEuOTUzOThWMTYuMDY1MlpNMjEuODY3NSAxNi44Njg5TDE4LjE0NzcgMTguNDUyN0wxMi4wMzY1IDE5Ljk4MDhINS44Njk1MlYxNS42MDYxTDguMDg0NzUgMTMuMzkxOUM4LjIyOTY2IDEzLjI0NTggOC40MDIxNiAxMy4xMyA4LjU5MjIyIDEzLjA1MTJDOC43ODIyOCAxMi45NzI0IDguOTg2MTEgMTIuOTMyMSA5LjE5MTg3IDEyLjkzMjhIMTQuMDkyMkMxNC40MDM3IDEyLjkzMjggMTQuNzAyNSAxMy4wNTY1IDE0LjkyMjggMTMuMjc2OEMxNS4xNDMxIDEzLjQ5NzEgMTUuMjY2OCAxMy43OTU5IDE1LjI2NjggMTQuMTA3NEMxNS4yNjY4IDE0LjQxOSAxNS4xNDMxIDE0LjcxNzggMTQuOTIyOCAxNC45MzgxQzE0LjcwMjUgMTUuMTU4MyAxNC40MDM3IDE1LjI4MjEgMTQuMDkyMiAxNS4yODIxSDExLjM1MTNDMTEuMTQzNiAxNS4yODIxIDEwLjk0NDQgMTUuMzY0NiAxMC43OTc2IDE1LjUxMTVDMTAuNjUwNyAxNS42NTgzIDEwLjU2ODIgMTUuODU3NSAxMC41NjgyIDE2LjA2NTJDMTAuNTY4MiAxNi4yNzI5IDEwLjY1MDcgMTYuNDcyMSAxMC43OTc2IDE2LjYxOUMxMC45NDQ0IDE2Ljc2NTggMTEuMTQzNiAxNi44NDgzIDExLjM1MTMgMTYuODQ4M0gxNC40ODM3QzE0LjU0MjcgMTYuODQ4MiAxNC42MDE0IDE2Ljg0MTYgMTQuNjU5IDE2LjgyODdMMjEuMjE3NSAxNS4zMjAzTDIxLjI0NzggMTUuMzEyNUMyMS40NDgxIDE1LjI1NjkgMjEuNjYxNyAxNS4yNzczIDIxLjg0NzggMTUuMzY5OEMyMi4wMzM5IDE1LjQ2MjMgMjIuMTc5MSAxNS42MjAzIDIyLjI1NTcgMTUuODEzNUMyMi4zMzIyIDE2LjAwNjcgMjIuMzM0NiAxNi4yMjEzIDIyLjI2MjQgMTYuNDE2MkMyMi4xOTAyIDE2LjYxMSAyMi4wNDg1IDE2Ljc3MjMgMjEuODY0NSAxNi44Njg5SDIxLjg2NzVaIiBmaWxsPSIjRkY5QTNDIi8+Cjwvc3ZnPgo="
                                                alt="" class="iconC">
                                            <div class="boxNumberC"><span class="numberC"><span>0</span></span></div>
                                            <div class="textDes">chiến dịch đã tham gia</div>
                                        </div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                                        <div class="boxNumber"><img
                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjYyIDUuNTU1MDhDMTEuNDM2MSA1LjM3MTY0IDExLjIwODkgNS4yMzc0OCAxMC45NTk1IDUuMTY0OThDMTAuNzEgNS4wOTI0OCAxMC40NDYzIDUuMDgzOTcgMTAuMTkyNyA1LjE0MDI1QzkuOTM5MTIgNS4xOTY1MyA5LjcwMzc4IDUuMzE1NzggOS41MDg0MiA1LjQ4N0M5LjMxMzA2IDUuNjU4MjEgOS4xNjM5NyA1Ljg3NTg3IDkuMDc0OSA2LjExOTlMMy45MzY3MyAyMC4yNTMxQzMuODUyMzIgMjAuNDg2MSAzLjgyNTA1IDIwLjczNiAzLjg1NzIyIDIwLjk4MThDMy44ODkzOSAyMS4yMjc2IDMuOTgwMDUgMjEuNDYyMSA0LjEyMTU5IDIxLjY2NTZDNC4yNjMxMyAyMS44NjkxIDQuNDUxNDMgMjIuMDM1NiA0LjY3MDY3IDIyLjE1MTNDNC44ODk5MSAyMi4yNjcgNS4xMzM2OSAyMi4zMjgzIDUuMzgxNTYgMjIuMzMwM0M1LjU2NDA2IDIyLjMyOSA1Ljc0NDk0IDIyLjI5NTkgNS45MTYwNCAyMi4yMzI0TDIwLjA0ODIgMTcuMDkzMkMyMC4yOTIzIDE3LjAwNDMgMjAuNTEwMSAxNi44NTUzIDIwLjY4MTQgMTYuNjZDMjAuODUyNyAxNi40NjQ2IDIwLjk3MjEgMTYuMjI5MyAyMS4wMjg1IDE1Ljk3NTdDMjEuMDg0OSAxNS43MjIxIDIxLjA3NjQgMTUuNDU4NCAyMS4wMDQgMTUuMjA4OUMyMC45MzE2IDE0Ljk1OTQgMjAuNzk3NSAxNC43MzIxIDIwLjYxNCAxNC41NDgxTDExLjYyIDUuNTU1MDhaTTEwLjgwNDYgMTguNzkwNkw3LjM3ODQ5IDE1LjM2NDVMOC42NjY3MSAxMS44MkwxNC4zNDkxIDE3LjUwMjRMMTAuODA0NiAxOC43OTA2Wk01LjQyMDcyIDIwLjc0ODRMNi43OTExNiAxNi45ODg1TDkuMTg0NTQgMTkuMzgxOUw1LjQyMDcyIDIwLjc0ODRaTTE1Ljk3NyAxNi45MTEyTDkuMjU3OTYgMTAuMTkyMUwxMC41MzA1IDYuNjgwOEwxOS40ODA1IDE1LjYzMDhMMTUuOTc3IDE2LjkxMTJaTTE2LjM2ODYgNy40NTExOUMxNi4zODMzIDYuOTIxNzggMTYuNTExNSA2LjQwMTY5IDE2Ljc0NDUgNS45MjYwOEMxNy4yNjMzIDQuODg5NDQgMTguMjQyMiA0LjMxODc1IDE5LjUwMSA0LjMxODc1QzIwLjE1NjkgNC4zMTg3NSAyMC41Nzc4IDQuMDk0NTggMjAuODM3MiAzLjYxMjk3QzIwLjk3MzggMy4zNDM1MyAyMS4wNTIyIDMuMDQ4MzcgMjEuMDY3MyAyLjc0NjY2QzIxLjA2OCAyLjUzODk2IDIxLjE1MTMgMi4zNDAwOCAyMS4yOTg3IDIuMTkzNzdDMjEuNDQ2MSAyLjA0NzQ2IDIxLjY0NTYgMS45NjU3IDIxLjg1MzMgMS45NjY0OEMyMi4wNjEgMS45NjcyNiAyMi4yNTk5IDIuMDUwNTEgMjIuNDA2MiAyLjE5NzkzQzIyLjU1MjUgMi4zNDUzNCAyMi42MzQzIDIuNTQ0ODQgMjIuNjMzNSAyLjc1MjUzQzIyLjYzMzUgNC4wMTEzOCAyMS43OTk1IDUuODg0OTcgMTkuNTAxIDUuODg0OTdDMTguODQ1MiA1Ljg4NDk3IDE4LjQyNDMgNi4xMDkxMyAxOC4xNjQ5IDYuNTkwNzVDMTguMDI4MyA2Ljg2MDE5IDE3Ljk0OTkgNy4xNTUzNSAxNy45MzQ4IDcuNDU3MDZDMTcuOTM0NCA3LjU1OTkgMTcuOTEzOCA3LjY2MTY2IDE3Ljg3NDEgNy43NTY1MkMxNy44MzQ0IDcuODUxMzggMTcuNzc2NCA3LjkzNzUgMTcuNzAzNCA4LjAwOTk0QzE3LjYzMDQgOC4wODIzOSAxNy41NDM4IDguMTM5NzUgMTcuNDQ4NyA4LjE3ODc1QzE3LjM1MzUgOC4yMTc3NSAxNy4yNTE2IDguMjM3NjIgMTcuMTQ4OCA4LjIzNzIzQzE3LjA0NTkgOC4yMzY4NSAxNi45NDQyIDguMjE2MjEgMTYuODQ5MyA4LjE3NjVDMTYuNzU0NCA4LjEzNjc5IDE2LjY2ODMgOC4wNzg3OCAxNi41OTU5IDguMDA1NzlDMTYuNTIzNCA3LjkzMjggMTYuNDY2MSA3Ljg0NjI1IDE2LjQyNzEgNy43NTEwOUMxNi4zODgxIDcuNjU1OTQgMTYuMzY4MiA3LjU1NDAzIDE2LjM2ODYgNy40NTExOVpNMTQuMDE5MyA0LjMxODc1VjEuOTY5NDJDMTQuMDE5MyAxLjc2MTczIDE0LjEwMTggMS41NjI1NCAxNC4yNDg2IDEuNDE1NjhDMTQuMzk1NSAxLjI2ODgyIDE0LjU5NDcgMS4xODYzMSAxNC44MDI0IDEuMTg2MzFDMTUuMDEwMSAxLjE4NjMxIDE1LjIwOTMgMS4yNjg4MiAxNS4zNTYxIDEuNDE1NjhDMTUuNTAzIDEuNTYyNTQgMTUuNTg1NSAxLjc2MTczIDE1LjU4NTUgMS45Njk0MlY0LjMxODc1QzE1LjU4NTUgNC41MjY0NCAxNS41MDMgNC43MjU2MyAxNS4zNTYxIDQuODcyNDlDMTUuMjA5MyA1LjAxOTM1IDE1LjAxMDEgNS4xMDE4NiAxNC44MDI0IDUuMTAxODZDMTQuNTk0NyA1LjEwMTg2IDE0LjM5NTUgNS4wMTkzNSAxNC4yNDg2IDQuODcyNDlDMTQuMTAxOCA0LjcyNTYzIDE0LjAxOTMgNC41MjY0NCAxNC4wMTkzIDQuMzE4NzVaTTIzLjk3MDYgMTIuMzc4OUMyNC4wNDMzIDEyLjQ1MTcgMjQuMTAxIDEyLjUzOCAyNC4xNDAzIDEyLjYzMzFDMjQuMTc5NiAxMi43MjgxIDI0LjE5OTggMTIuODMgMjQuMTk5OCAxMi45MzI4QzI0LjE5OTcgMTMuMDM1NyAyNC4xNzk0IDEzLjEzNzUgMjQuMTQgMTMuMjMyNUMyNC4xMDA2IDEzLjMyNzUgMjQuMDQyOSAxMy40MTM4IDIzLjk3MDEgMTMuNDg2NUMyMy44OTc0IDEzLjU1OTIgMjMuODExIDEzLjYxNjkgMjMuNzE2IDEzLjY1NjJDMjMuNjIwOSAxMy42OTU1IDIzLjUxOTEgMTMuNzE1NyAyMy40MTYyIDEzLjcxNTdDMjMuMzEzNCAxMy43MTU2IDIzLjIxMTYgMTMuNjk1MyAyMy4xMTY1IDEzLjY1NTlDMjMuMDIxNSAxMy42MTY1IDIyLjkzNTIgMTMuNTU4OCAyMi44NjI1IDEzLjQ4NkwyMS4yOTYzIDExLjkxOThDMjEuMTQ5NCAxMS43NzI5IDIxLjA2NjggMTEuNTczNiAyMS4wNjY4IDExLjM2NThDMjEuMDY2OCAxMS4xNTc5IDIxLjE0OTQgMTAuOTU4NyAyMS4yOTYzIDEwLjgxMTdDMjEuNDQzMyAxMC42NjQ4IDIxLjY0MjYgMTAuNTgyMiAyMS44NTA0IDEwLjU4MjJDMjIuMDU4MiAxMC41ODIyIDIyLjI1NzUgMTAuNjY0OCAyMi40MDQ0IDEwLjgxMTdMMjMuOTcwNiAxMi4zNzg5Wk0yNC40NDc0IDguMTk0MTZMMjIuMDk4IDguOTc3MjdDMjEuOTAxIDkuMDQyOTYgMjEuNjg1OSA5LjAyNzY3IDIxLjUwMDEgOC45MzQ3OEMyMS4zMTQzIDguODQxODkgMjEuMTczMSA4LjY3OTAxIDIxLjEwNzQgOC40ODE5NkMyMS4wNDE3IDguMjg0OTEgMjEuMDU3IDguMDY5ODQgMjEuMTQ5OSA3Ljg4NDA2QzIxLjI0MjggNy42OTgyOCAyMS40MDU3IDcuNTU3MDEgMjEuNjAyNyA3LjQ5MTMyTDIzLjk1MiA2LjcwODIxQzI0LjE0OTEgNi42NDI1MyAyNC4zNjQyIDYuNjU3ODEgMjQuNTQ5OSA2Ljc1MDdDMjQuNzM1NyA2Ljg0MzU5IDI0Ljg3NyA3LjAwNjQ4IDI0Ljk0MjcgNy4yMDM1M0MyNS4wMDg0IDcuNDAwNTggMjQuOTkzMSA3LjYxNTY1IDI0LjkwMDIgNy44MDE0M0MyNC44MDczIDcuOTg3MjEgMjQuNjQ0NCA4LjEyODQ4IDI0LjQ0NzQgOC4xOTQxNloiIGZpbGw9IiNGRjlBM0MiLz4KPC9zdmc+Cg=="
                                                alt="" class="iconC">
                                            <div class="boxNumberC"><span class="numberC"><span>0</span></span></div>
                                            <div class="textDes">lượt ủng hộ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontalLine"></div>
                            <div class="commonBoxCardRight containerFollowList">
                                <div class="boxHeader">
                                    <div class="titleB"> Đang theo dõi</div>
                                    <div class="btnViewAll">Tất cả <svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowForwardIosIcon"
                                            style="color: rgb(255, 170, 92); font-size: 11px;">
                                            <path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"></path>
                                        </svg></div>
                                </div>
                                <div class="boxSwitch">
                                    <div class="switch switchActive">Tổ chức</div>
                                    <div class="switch false">Cá nhân</div>
                                </div>
                                <div class="boxListFollow">
                                    <div class="d-flex justify-content-center align-items-center"
                                        style="opacity: 0.5; font-size: 14px; text-align: center;">Không có nội dung hiển
                                        thị </div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-8 css-efwuvd">
                            <div class="containerActivitiesProfile">
                                <div class="containerPostCommon" style="overflow: visible clip;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="_rht_toaster" class="toast-container"
            style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
        <div class="chat-bot" id="chat-bot">
            <div class="chat-icon" id="chat-icon"><img src="/_next/static/media/chatbot.6cf6b344.webp" alt="Chat Icon">
            </div>
            <div class="">
                <div class="chat-popup" id="chat-popup">
                    <div class="chat-header">
                        <h2>Bee Kind</h2><span class="close-btn" id="close-btn"><img
                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjAzMDYgOS45Njk5N0MxMS4xNzE1IDEwLjExMDkgMTEuMjUwNiAxMC4zMDIgMTEuMjUwNiAxMC41MDEyQzExLjI1MDYgMTAuNzAwNSAxMS4xNzE1IDEwLjg5MTYgMTEuMDMwNiAxMS4wMzI1QzEwLjg4OTcgMTEuMTczNCAxMC42OTg2IDExLjI1MjUgMTAuNDk5MyAxMS4yNTI1QzEwLjMwMDEgMTEuMjUyNSAxMC4xMDkgMTEuMTczNCA5Ljk2ODEgMTEuMDMyNUw1Ljk5OTk3IDcuMDYzMUwyLjAzMDYgMTEuMDMxMkMxLjg4OTcgMTEuMTcyMSAxLjY5ODYxIDExLjI1MTMgMS40OTkzNSAxMS4yNTEzQzEuMzAwMDkgMTEuMjUxMyAxLjEwODk5IDExLjE3MjEgMC45NjgwOTggMTEuMDMxMkMwLjgyNzIwMiAxMC44OTAzIDAuNzQ4MDQ3IDEwLjY5OTIgMC43NDgwNDcgMTAuNUMwLjc0ODA0NyAxMC4zMDA3IDAuODI3MjAyIDEwLjEwOTYgMC45NjgwOTggOS45Njg3Mkw0LjkzNzQ3IDYuMDAwNkwwLjk2OTM0OCAyLjAzMTIyQzAuODI4NDUxIDEuODkwMzMgMC43NDkyOTcgMS42OTkyMyAwLjc0OTI5NyAxLjQ5OTk3QzAuNzQ5Mjk3IDEuMzAwNzIgMC44Mjg0NTEgMS4xMDk2MiAwLjk2OTM0OCAwLjk2ODcyM0MxLjExMDI0IDAuODI3ODI3IDEuMzAxMzQgMC43NDg2NzIgMS41MDA2IDAuNzQ4NjcyQzEuNjk5ODYgMC43NDg2NzIgMS44OTA5NSAwLjgyNzgyNyAyLjAzMTg1IDAuOTY4NzIzTDUuOTk5OTcgNC45MzgxTDkuOTY5MzUgMC45NjgwOThDMTAuMTEwMiAwLjgyNzIwMSAxMC4zMDEzIDAuNzQ4MDQ3IDEwLjUwMDYgMC43NDgwNDdDMTAuNjk5OSAwLjc0ODA0NyAxMC44OTEgMC44MjcyMDEgMTEuMDMxOCAwLjk2ODA5OEMxMS4xNzI3IDEuMTA4OTkgMTEuMjUxOSAxLjMwMDA5IDExLjI1MTkgMS40OTkzNUMxMS4yNTE5IDEuNjk4NjEgMTEuMTcyNyAxLjg4OTcgMTEuMDMxOCAyLjAzMDZMNy4wNjI0NyA2LjAwMDZMMTEuMDMwNiA5Ljk2OTk3WiIgZmlsbD0id2hpdGUiIGZpbGwtb3BhY2l0eT0iMC43MiIvPgo8L3N2Zz4K"
                                alt="close-btn"></span>
                    </div>
                    <div class="chat-body">
                        <div class="bot-avatar"><img src="/_next/static/media/chatbot.6cf6b344.webp" alt="">
                        </div>
                        <div class="bot-name">Bee Kind</div>
                        <div class="bot-intro">Tôi có thể hỗ trợ bạn thông tin về các chương trình thiện nguyện</div>
                        <div class="message bot first-message"><img src="/_next/static/media/chatbot.6cf6b344.webp"
                                alt="Bot Avatar" class="avatar">
                            <p>
                            <div class="text-wellcome">Chào <span class="username">Vũ Nam!</span> Rất vui được đồng hành
                                cùng bạn.</div>
                            <div class="text-second">Dưới đây là một vài thao tác mẫu tôi có thể hỗ trợ nhanh trong đoạn
                                hội thoại:</div>
                            <ul class="text-second">
                                <li>Thực hiện nhanh: Ủng hộ, xem sao kê, tạo chiến dịch chỉ trong vài bước.</li>
                                <li>Khám phá thêm: Những chiến dịch ý nghĩa, hoàn cảnh cần giúp đỡ.</li>
                                <li>Và tất nhiên, tôi luôn sẵn sàng hỗ trợ và giải đáp mọi vấn đề của bạn về nền tảng Thiện
                                    Nguyện. 🌟</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="chat-footer"><input type="text" placeholder="Bạn cần chúng tôi hỗ trợ gì?"
                            maxlength="255" value=""></div>
                </div>
            </div>
        </div>
    </main> --}}

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KLM3RXD');
    </script><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLM3RXD" height="0"
            width="0" style="display:none;visibility:hidden"></iframe></noscript>
        
        <div id="__next" data-reactroot="">
            <header class="header_simple" id="header_simple" style="padding-right: 0px;">
                <div class="header-desktop w-100">
                    <div class="container container-new">
                        <div class="d-flex align-items-center justify-content-between h-100"><img class="header-logo"
                                src="/_next/static/media/logo.663b61a0.webp" alt="">
                            <div id="input_search_header"><img
                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE5Ljc2NjMgMTguNTg4OUwxNC43OTYyIDEzLjYxODhDMTYuMTUwNiAxMS45NjIzIDE2LjgxNjUgOS44NDg2NiAxNi42NTYyIDcuNzE0OTdDMTYuNDk1OSA1LjU4MTI4IDE1LjUyMTYgMy41OTA4MyAxMy45MzQ5IDIuMTU1MzRDMTIuMzQ4MiAwLjcxOTg0MSAxMC4yNzA0IC0wLjA1MDg3NDIgOC4xMzEzNiAwLjAwMjYwODM1QzUuOTkyMzMgMC4wNTYwOTA5IDMuOTU1NjggMC45Mjk2NzkgMi40NDI2OCAyLjQ0MjY4QzAuOTI5Njc5IDMuOTU1NjggMC4wNTYwOTA5IDUuOTkyMzMgMC4wMDI2MDgzNSA4LjEzMTM2Qy0wLjA1MDg3NDIgMTAuMjcwNCAwLjcxOTg0MSAxMi4zNDgyIDIuMTU1MzQgMTMuOTM0OUMzLjU5MDgzIDE1LjUyMTYgNS41ODEyOCAxNi40OTU5IDcuNzE0OTcgMTYuNjU2MkM5Ljg0ODY2IDE2LjgxNjUgMTEuOTYyMyAxNi4xNTA2IDEzLjYxODggMTQuNzk2MkwxOC41ODg5IDE5Ljc2NjNDMTguNzQ1OSAxOS45MTc5IDE4Ljk1NjMgMjAuMDAxOSAxOS4xNzQ2IDIwQzE5LjM5MjkgMTkuOTk4MSAxOS42MDE3IDE5LjkxMDUgMTkuNzU2MSAxOS43NTYxQzE5LjkxMDUgMTkuNjAxNyAxOS45OTgxIDE5LjM5MjkgMjAgMTkuMTc0NkMyMC4wMDE5IDE4Ljk1NjMgMTkuOTE3OSAxOC43NDU5IDE5Ljc2NjMgMTguNTg4OVpNOC4zNTMxNCAxNS4wMTQzQzcuMDM1NjggMTUuMDE0MyA1Ljc0NzgxIDE0LjYyMzcgNC42NTIzOCAxMy44OTE3QzMuNTU2OTUgMTMuMTU5OCAyLjcwMzE3IDEyLjExOTQgMi4xOTkgMTAuOTAyM0MxLjY5NDgzIDkuNjg1MSAxLjU2MjkyIDguMzQ1NzUgMS44MTk5NCA3LjA1MzYxQzIuMDc2OTcgNS43NjE0NiAyLjcxMTM4IDQuNTc0NTUgMy42NDI5NyAzLjY0Mjk3QzQuNTc0NTUgMi43MTEzOCA1Ljc2MTQ2IDIuMDc2OTcgNy4wNTM2MSAxLjgxOTk0QzguMzQ1NzUgMS41NjI5MiA5LjY4NTEgMS42OTQ4MyAxMC45MDIzIDIuMTk5QzEyLjExOTQgMi43MDMxNyAxMy4xNTk4IDMuNTU2OTUgMTMuODkxNyA0LjY1MjM4QzE0LjYyMzcgNS43NDc4MSAxNS4wMTQzIDcuMDM1NjggMTUuMDE0MyA4LjM1MzE0QzE1LjAxMjQgMTAuMTE5MiAxNC4zMDk5IDExLjgxMjMgMTMuMDYxMSAxMy4wNjExQzExLjgxMjMgMTQuMzA5OSAxMC4xMTkyIDE1LjAxMjQgOC4zNTMxNCAxNS4wMTQzWiIgZmlsbD0iI0Y1NEEwMCIvPgo8L3N2Zz4K"
                                    alt="icon search"><input type="text" placeholder="Tìm kiếm tên chiến dịch"
                                    value=""></div>
                            <div class="menuHeader flex-grow-1 flex-shrink-1">
                                <div class="menu_header_list" id="menu_header_list">
                                    <div class="menu_header_item"><span>Ủng hộ</span><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-14h0jh8" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="KeyboardArrowDownRoundedIcon">
                                            <path
                                                d="M8.12 9.29 12 13.17l3.88-3.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0L6.7 10.7a.9959.9959 0 0 1 0-1.41c.39-.38 1.03-.39 1.42 0">
                                            </path>
                                        </svg>
                                        <div class="sub_menu_header_item">
                                            <div class="sub_menu_header_list" id="sub_menu_header_list"
                                                style="left: -12px;">
                                                <div class="diamond"></div>
                                                <div class="sub_menu_content">
                                                    <div class="sub_background"></div>
                                                    <div class="sub_menu_list">
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Chiến dịch</span>
                                                            </div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Đồng hành</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Tổ chức gây quỹ</span>
                                                            </div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Cá nhân gây quỹ</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu_header_item"><span>Gây quỹ</span><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-14h0jh8" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="KeyboardArrowDownRoundedIcon">
                                            <path
                                                d="M8.12 9.29 12 13.17l3.88-3.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0L6.7 10.7a.9959.9959 0 0 1 0-1.41c.39-.38 1.03-.39 1.42 0">
                                            </path>
                                        </svg>
                                        <div class="sub_menu_header_item">
                                            <div class="sub_menu_header_list" id="sub_menu_header_list">
                                                <div class="diamond"></div>
                                                <div class="sub_menu_content">
                                                    <div class="sub_background"></div>
                                                    <div class="sub_menu_list">
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Bắt đầu</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu_header_item"><span>Khám phá</span><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-14h0jh8" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="KeyboardArrowDownRoundedIcon">
                                            <path
                                                d="M8.12 9.29 12 13.17l3.88-3.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0L6.7 10.7a.9959.9959 0 0 1 0-1.41c.39-.38 1.03-.39 1.42 0">
                                            </path>
                                        </svg>
                                        <div class="sub_menu_header_item">
                                            <div class="sub_menu_header_list" id="sub_menu_header_list">
                                                <div class="diamond"></div>
                                                <div class="sub_menu_content">
                                                    <div class="sub_background"></div>
                                                    <div class="sub_menu_list">
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Bản đồ thiện
                                                                    nguyện</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Sự kiện thiện
                                                                    nguyện</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Bảng tin</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Tin tức</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span><img
                                                                        src="/_next/static/icon-higreen-menu-1b0a42e4eb1c6e3b3dad07605cb53164.svg"
                                                                        alt=""></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu_header_item"><span>Giới thiệu</span><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-14h0jh8" focusable="false"
                                            aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="KeyboardArrowDownRoundedIcon">
                                            <path
                                                d="M8.12 9.29 12 13.17l3.88-3.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-4.59 4.59c-.39.39-1.02.39-1.41 0L6.7 10.7a.9959.9959 0 0 1 0-1.41c.39-.38 1.03-.39 1.42 0">
                                            </path>
                                        </svg>
                                        <div class="sub_menu_header_item">
                                            <div class="sub_menu_header_list" id="sub_menu_header_list">
                                                <div class="diamond"></div>
                                                <div class="sub_menu_content">
                                                    <div class="sub_background"></div>
                                                    <div class="sub_menu_list">
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Về thiện
                                                                    nguyện</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Hỏi đáp</span></div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Điều khoản</span>
                                                            </div>
                                                        </div>
                                                        <div class="sub_menu_item">
                                                            <div class="sub_menu_dropdown_item"><span>Chính sách bảo
                                                                    mật</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="boxSearchAndLogin"><button class="btn-create-donate-target"><span>Tạo chiến
                                            dịch</span></button>
                                    <div class="">
                                        <div class="boxLogined"><span class="boxIconNoti"><span><span
                                                        class="MuiBadge-root css-1lw1rmd"><svg
                                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-x1tti5"
                                                            focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                            data-testid="NotificationsIcon">
                                                            <path
                                                                d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2m6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1z">
                                                            </path>
                                                        </svg><span
                                                            class="MuiBadge-badge MuiBadge-standard MuiBadge-invisible MuiBadge-anchorOriginTopRight MuiBadge-anchorOriginTopRightRectangular MuiBadge-overlapRectangular MuiBadge-colorError css-c6vaoj">0</span></span></span></span>
                                            <div id="dropdown-basic-button" class="dropdownLogged dropdown"><button
                                                    aria-haspopup="true" aria-expanded="false"
                                                    id="dropdown-autoclose-true" type="button"
                                                    class="btnDropdownLogged dropdown-toggle btn btn-primary">
                                                    <div class="MuiAvatar-root MuiAvatar-circular css-15xn9eg"><img
                                                            alt="Remy Sharp"
                                                            src="https://static.thiennguyen.app/public/user/profile/2025/4/10/25e4ef3d-6657-476b-9b17-efe8888b2443.jpg"
                                                            class="MuiAvatar-img css-1hy9t21"></div><img
                                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE3LjkyMDcgOC4xNzk5M0gxMS42OTA3SDYuMDgwNzJDNS4xMjA3MiA4LjE3OTkzIDQuNjQwNzMgOS4zMzk5MyA1LjMyMDczIDEwLjAxOTlMMTAuNTAwNyAxNS4xOTk5QzExLjMzMDcgMTYuMDI5OSAxMi42ODA3IDE2LjAyOTkgMTMuNTEwNyAxNS4xOTk5TDE1LjQ4MDcgMTMuMjI5OUwxOC42OTA3IDEwLjAxOTlDMTkuMzYwNyA5LjMzOTkzIDE4Ljg4MDcgOC4xNzk5MyAxNy45MjA3IDguMTc5OTNaIiBmaWxsPSIjMzkzOTM5Ii8+Cjwvc3ZnPgo="
                                                        alt="drop">
                                                </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mobile">
                    <div class="container h-100">
                        <div class="d-flex align-items-center justify-content-between h-100">
                            <div class="header-mobile-left d-flex align-items-center">
                                <div class="side-bar"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMgNkgyMSIgc3Ryb2tlPSIjMkIyQjJCIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+CjxwYXRoIGQ9Ik0zIDEySDE1IiBzdHJva2U9IiMyQjJCMkIiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPHBhdGggZD0iTTMgMThIMjEiIHN0cm9rZT0iIzJCMkIyQiIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8L3N2Zz4K"
                                        alt=""></div><img class="logo-app"
                                    src="/_next/static/media/logo.663b61a0.webp" alt="">
                            </div>
                            <div class="header-mobile-right d-flex align-items-center">
                                <div class="noti"><span><span class="MuiBadge-root css-1lw1rmd"><svg
                                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-x1tti5"
                                                focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                data-testid="NotificationsIcon">
                                                <path
                                                    d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2m6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1z">
                                                </path>
                                            </svg><span
                                                class="MuiBadge-badge MuiBadge-standard MuiBadge-invisible MuiBadge-anchorOriginTopRight MuiBadge-anchorOriginTopRightRectangular MuiBadge-overlapRectangular MuiBadge-colorError css-c6vaoj">0</span></span></span>
                                </div>
                                <div><a class="download-link" rel="nofollow" href="">Tải App</a></div>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div>
                    <div aria-hidden="true" class="MuiBackdrop-root css-1b84eol" style="opacity: 0; visibility: hidden;">
                        <span
                            class="MuiCircularProgress-root MuiCircularProgress-indeterminate MuiCircularProgress-colorInherit css-8yzpf7"
                            role="progressbar" style="width: 40px; height: 40px;"><svg
                                class="MuiCircularProgress-svg css-13o7eu2" viewBox="22 22 44 44">
                                <circle
                                    class="MuiCircularProgress-circle MuiCircularProgress-circleIndeterminate css-14891ef"
                                    cx="44" cy="44" r="20.2" fill="none" stroke-width="3.6"></circle>
                            </svg></span></div>
                </div>
            </header>
            <main>
                <div id="containerUserProfile">
                    <div class="coverProfile"
                        style="background-image: url(&quot;https://static.thiennguyen.app/public/user/banner/2025/4/10/0e53435f-aa72-434b-9b47-4822d327460d.jpg&quot;); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                        <div class="chooseEditCover"><label for="coverProfile"><img
                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZF81NDFfNTY4NykiPgo8Y2lyY2xlIGN4PSIyNSIgY3k9IjIwIiByPSIyMCIgZmlsbD0iI0ZDRkNGQyIvPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDBfNTQxXzU2ODcpIj4KPHBhdGggZD0iTTI5LjE2NjcgMTIuNUwyOC4wMzQ3IDEwLjk3MzNDMjcuODA5MiAxMC42NzE1IDI3LjUyMDYgMTAuNDI3IDI3LjE5MDggMTAuMjU4NEMyNi44NjEgMTAuMDg5NyAyNi40OTg2IDEwLjAwMTQgMjYuMTMxMSAxMEgyMy4wMzU1QzIyLjY2OCAxMC4wMDE0IDIyLjMwNTcgMTAuMDg5NyAyMS45NzU5IDEwLjI1ODRDMjEuNjQ2MSAxMC40MjcgMjEuMzU3NSAxMC42NzE1IDIxLjEzMiAxMC45NzMzTDIwIDEyLjVIMjkuMTY2N1oiIGZpbGw9IiM0NzQ3NDciLz4KPHBhdGggZD0iTTI0Ljk5OTggMjVDMjYuODQwOCAyNSAyOC4zMzMyIDIzLjUwNzYgMjguMzMzMiAyMS42NjY2QzI4LjMzMzIgMTkuODI1NyAyNi44NDA4IDE4LjMzMzMgMjQuOTk5OCAxOC4zMzMzQzIzLjE1ODkgMTguMzMzMyAyMS42NjY1IDE5LjgyNTcgMjEuNjY2NSAyMS42NjY2QzIxLjY2NjUgMjMuNTA3NiAyMy4xNTg5IDI1IDI0Ljk5OTggMjVaIiBmaWxsPSIjNDc0NzQ3Ii8+CjxwYXRoIGQ9Ik0zMC44MzMzIDE0LjE2NjdIMTkuMTY2N0MxOC4wNjIgMTQuMTY4IDE3LjAwMyAxNC42MDc0IDE2LjIyMTggMTUuMzg4NUMxNS40NDA3IDE2LjE2OTcgMTUuMDAxMyAxNy4yMjg3IDE1IDE4LjMzMzRMMTUgMjUuODMzNEMxNS4wMDEzIDI2LjkzOCAxNS40NDA3IDI3Ljk5NzEgMTYuMjIxOCAyOC43NzgyQzE3LjAwMyAyOS41NTkzIDE4LjA2MiAyOS45OTg3IDE5LjE2NjcgMzBIMzAuODMzM0MzMS45MzggMjkuOTk4NyAzMi45OTcgMjkuNTU5MyAzMy43NzgyIDI4Ljc3ODJDMzQuNTU5MyAyNy45OTcxIDM0Ljk5ODcgMjYuOTM4IDM1IDI1LjgzMzRWMTguMzMzNEMzNC45OTg3IDE3LjIyODcgMzQuNTU5MyAxNi4xNjk3IDMzLjc3ODIgMTUuMzg4NUMzMi45OTcgMTQuNjA3NCAzMS45MzggMTQuMTY4IDMwLjgzMzMgMTQuMTY2N1pNMjUgMjYuNjY2N0MyNC4wMTExIDI2LjY2NjcgMjMuMDQ0NCAyNi4zNzM0IDIyLjIyMjEgMjUuODI0QzIxLjM5OTkgMjUuMjc0NiAyMC43NTkgMjQuNDkzNyAyMC4zODA2IDIzLjU4MDFDMjAuMDAyMiAyMi42NjY1IDE5LjkwMzEgMjEuNjYxMSAyMC4wOTYxIDIwLjY5MTJDMjAuMjg5IDE5LjcyMTMgMjAuNzY1MiAxOC44MzA0IDIxLjQ2NDUgMTguMTMxMkMyMi4xNjM3IDE3LjQzMTkgMjMuMDU0NiAxNi45NTU3IDI0LjAyNDUgMTYuNzYyOEMyNC45OTQ1IDE2LjU2OTggMjUuOTk5OCAxNi42Njg5IDI2LjkxMzQgMTcuMDQ3M0MyNy44MjcgMTcuNDI1NyAyOC42MDc5IDE4LjA2NjYgMjkuMTU3MyAxOC44ODg4QzI5LjcwNjggMTkuNzExMSAzMCAyMC42Nzc4IDMwIDIxLjY2NjdDMjkuOTk4NyAyMi45OTI0IDI5LjQ3MTUgMjQuMjYzNCAyOC41MzQxIDI1LjIwMDhDMjcuNTk2NyAyNi4xMzgyIDI2LjMyNTcgMjYuNjY1NCAyNSAyNi42NjY3WiIgZmlsbD0iIzQ3NDc0NyIvPgo8L2c+CjwvZz4KPGRlZnM+CjxmaWx0ZXIgaWQ9ImZpbHRlcjBfZF81NDFfNTY4NyIgeD0iMCIgeT0iMCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUNvbG9yTWF0cml4IGluPSJTb3VyY2VBbHBoYSIgdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDEyNyAwIiByZXN1bHQ9ImhhcmRBbHBoYSIvPgo8ZmVPZmZzZXQgZHk9IjUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMi41Ii8+CjxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9Im91dCIvPgo8ZmVDb2xvck1hdHJpeCB0eXBlPSJtYXRyaXgiIHZhbHVlcz0iMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMC4wOCAwIi8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3IiByZXN1bHQ9InNoYXBlIi8+CjwvZmlsdGVyPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzU0MV81Njg3Ij4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJ3aGl0ZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTUgMTApIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="
                                    alt="" class="iconEditCover"></label><input hidden="" type="file"
                                id="coverProfile" name="coverProfile" accept="image/png,image/jpeg"></div>
                    </div>
                    <div class="boxTopProfile">
                        <div class="container">
                            <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1 boxInfo css-1vfbpkf">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-1dvm79k"><span
                                        class="MuiBadge-root css-1rzb3uu">
                                        <div class="MuiAvatar-root MuiAvatar-circular css-1d6k19r"><img alt="avatar"
                                                src="https://static.thiennguyen.app/public/user/profile/2025/4/10/1309ae00-9cbc-4d3f-a5c5-108dfbf547ee.jpg"
                                                class="MuiAvatar-img css-1hy9t21"></div><span
                                            class="MuiBadge-badge MuiBadge-standard MuiBadge-anchorOriginBottomRight MuiBadge-anchorOriginBottomRightCircular MuiBadge-overlapCircular css-1vkeucp">
                                            <div class="chooseEditAvatar"><label for="avatar"><img
                                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfZF81NDFfNTY4NykiPgo8Y2lyY2xlIGN4PSIyNSIgY3k9IjIwIiByPSIyMCIgZmlsbD0iI0ZDRkNGQyIvPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDBfNTQxXzU2ODcpIj4KPHBhdGggZD0iTTI5LjE2NjcgMTIuNUwyOC4wMzQ3IDEwLjk3MzNDMjcuODA5MiAxMC42NzE1IDI3LjUyMDYgMTAuNDI3IDI3LjE5MDggMTAuMjU4NEMyNi44NjEgMTAuMDg5NyAyNi40OTg2IDEwLjAwMTQgMjYuMTMxMSAxMEgyMy4wMzU1QzIyLjY2OCAxMC4wMDE0IDIyLjMwNTcgMTAuMDg5NyAyMS45NzU5IDEwLjI1ODRDMjEuNjQ2MSAxMC40MjcgMjEuMzU3NSAxMC42NzE1IDIxLjEzMiAxMC45NzMzTDIwIDEyLjVIMjkuMTY2N1oiIGZpbGw9IiM0NzQ3NDciLz4KPHBhdGggZD0iTTI0Ljk5OTggMjVDMjYuODQwOCAyNSAyOC4zMzMyIDIzLjUwNzYgMjguMzMzMiAyMS42NjY2QzI4LjMzMzIgMTkuODI1NyAyNi44NDA4IDE4LjMzMzMgMjQuOTk5OCAxOC4zMzMzQzIzLjE1ODkgMTguMzMzMyAyMS42NjY1IDE5LjgyNTcgMjEuNjY2NSAyMS42NjY2QzIxLjY2NjUgMjMuNTA3NiAyMy4xNTg5IDI1IDI0Ljk5OTggMjVaIiBmaWxsPSIjNDc0NzQ3Ii8+CjxwYXRoIGQ9Ik0zMC44MzMzIDE0LjE2NjdIMTkuMTY2N0MxOC4wNjIgMTQuMTY4IDE3LjAwMyAxNC42MDc0IDE2LjIyMTggMTUuMzg4NUMxNS40NDA3IDE2LjE2OTcgMTUuMDAxMyAxNy4yMjg3IDE1IDE4LjMzMzRMMTUgMjUuODMzNEMxNS4wMDEzIDI2LjkzOCAxNS40NDA3IDI3Ljk5NzEgMTYuMjIxOCAyOC43NzgyQzE3LjAwMyAyOS41NTkzIDE4LjA2MiAyOS45OTg3IDE5LjE2NjcgMzBIMzAuODMzM0MzMS45MzggMjkuOTk4NyAzMi45OTcgMjkuNTU5MyAzMy43NzgyIDI4Ljc3ODJDMzQuNTU5MyAyNy45OTcxIDM0Ljk5ODcgMjYuOTM4IDM1IDI1LjgzMzRWMTguMzMzNEMzNC45OTg3IDE3LjIyODcgMzQuNTU5MyAxNi4xNjk3IDMzLjc3ODIgMTUuMzg4NUMzMi45OTcgMTQuNjA3NCAzMS45MzggMTQuMTY4IDMwLjgzMzMgMTQuMTY2N1pNMjUgMjYuNjY2N0MyNC4wMTExIDI2LjY2NjcgMjMuMDQ0NCAyNi4zNzM0IDIyLjIyMjEgMjUuODI0QzIxLjM5OTkgMjUuMjc0NiAyMC43NTkgMjQuNDkzNyAyMC4zODA2IDIzLjU4MDFDMjAuMDAyMiAyMi42NjY1IDE5LjkwMzEgMjEuNjYxMSAyMC4wOTYxIDIwLjY5MTJDMjAuMjg5IDE5LjcyMTMgMjAuNzY1MiAxOC44MzA0IDIxLjQ2NDUgMTguMTMxMkMyMi4xNjM3IDE3LjQzMTkgMjMuMDU0NiAxNi45NTU3IDI0LjAyNDUgMTYuNzYyOEMyNC45OTQ1IDE2LjU2OTggMjUuOTk5OCAxNi42Njg5IDI2LjkxMzQgMTcuMDQ3M0MyNy44MjcgMTcuNDI1NyAyOC42MDc5IDE4LjA2NjYgMjkuMTU3MyAxOC44ODg4QzI5LjcwNjggMTkuNzExMSAzMCAyMC42Nzc4IDMwIDIxLjY2NjdDMjkuOTk4NyAyMi45OTI0IDI5LjQ3MTUgMjQuMjYzNCAyOC41MzQxIDI1LjIwMDhDMjcuNTk2NyAyNi4xMzgyIDI2LjMyNTcgMjYuNjY1NCAyNSAyNi42NjY3WiIgZmlsbD0iIzQ3NDc0NyIvPgo8L2c+CjwvZz4KPGRlZnM+CjxmaWx0ZXIgaWQ9ImZpbHRlcjBfZF81NDFfNTY4NyIgeD0iMCIgeT0iMCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUNvbG9yTWF0cml4IGluPSJTb3VyY2VBbHBoYSIgdHlwZT0ibWF0cml4IiB2YWx1ZXM9IjAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDEyNyAwIiByZXN1bHQ9ImhhcmRBbHBoYSIvPgo8ZmVPZmZzZXQgZHk9IjUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMi41Ii8+CjxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9Im91dCIvPgo8ZmVDb2xvck1hdHJpeCB0eXBlPSJtYXRyaXgiIHZhbHVlcz0iMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMC4wOCAwIi8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iZWZmZWN0MV9kcm9wU2hhZG93XzU0MV81Njg3IiByZXN1bHQ9InNoYXBlIi8+CjwvZmlsdGVyPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzU0MV81Njg3Ij4KPHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJ3aGl0ZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTUgMTApIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="
                                                        alt="" class="iconEditAvatar"></label><input
                                                    hidden="" type="file" id="avatar" name="avatar"
                                                    accept="image/png,image/jpeg"></div>
                                        </span>
                                    </span></div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                                    <div class="groupParameter">
                                        <div class="name">Vũ Nam</div>
                                        <div class="username">@vunam3445</div>
                                        <div class="boxInfoNumber">
                                            <div class="item item2"><img
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjUiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNSAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwLjU1NzYgMTkuMTk3N0MyMC41NTc2IDE5LjM5NDEgMjAuNDc5NiAxOS41ODI1IDIwLjM0MDcgMTkuNzIxNEMyMC4yMDE4IDE5Ljg2MDIgMjAuMDEzNCAxOS45MzgzIDE5LjgxNyAxOS45MzgzQzE5LjYyMDYgMTkuOTM4MyAxOS40MzIyIDE5Ljg2MDIgMTkuMjkzNCAxOS43MjE0QzE5LjE1NDUgMTkuNTgyNSAxOS4wNzY1IDE5LjM5NDEgMTkuMDc2NSAxOS4xOTc3QzE5LjA3NjUgMTEuODQ3NSAxMy4wOTYzIDUuODY3NDMgNS43NDYxOSA1Ljg2NzQzQzUuNTQ5NzcgNS44Njc0MyA1LjM2MTQxIDUuNzg5NDEgNS4yMjI1MiA1LjY1MDUyQzUuMDgzNjQgNS41MTE2NCA1LjAwNTYyIDUuMzIzMjcgNS4wMDU2MiA1LjEyNjg2QzUuMDA1NjIgNC45MzA0NSA1LjA4MzY0IDQuNzQyMDggNS4yMjI1MiA0LjYwMzJDNS4zNjE0MSA0LjQ2NDMyIDUuNTQ5NzcgNC4zODYyOSA1Ljc0NjE5IDQuMzg2MjlDMTMuOTEyOCA0LjM4NjI5IDIwLjU1NzYgMTEuMDMxMSAyMC41NTc2IDE5LjE5NzdaTTUuNzQ2MTkgMTEuMDUxNEM1LjU0OTc3IDExLjA1MTQgNS4zNjE0MSAxMS4xMjk0IDUuMjIyNTIgMTEuMjY4M0M1LjA4MzY0IDExLjQwNzIgNS4wMDU2MiAxMS41OTU2IDUuMDA1NjIgMTEuNzkyQzUuMDA1NjIgMTEuOTg4NCA1LjA4MzY0IDEyLjE3NjggNS4yMjI1MiAxMi4zMTU3QzUuMzYxNDEgMTIuNDU0NSA1LjU0OTc3IDEyLjUzMjYgNS43NDYxOSAxMi41MzI2QzcuNTEzMjkgMTIuNTM0NSA5LjIwNzQ1IDEzLjIzNzQgMTAuNDU3IDE0LjQ4NjlDMTEuNzA2NSAxNS43MzY0IDEyLjQwOTQgMTcuNDMwNiAxMi40MTEzIDE5LjE5NzdDMTIuNDExMyAxOS4zOTQxIDEyLjQ4OTMgMTkuNTgyNSAxMi42MjgyIDE5LjcyMTRDMTIuNzY3MSAxOS44NjAyIDEyLjk1NTUgMTkuOTM4MyAxMy4xNTE5IDE5LjkzODNDMTMuMzQ4MyAxOS45MzgzIDEzLjUzNjcgMTkuODYwMiAxMy42NzU2IDE5LjcyMTRDMTMuODE0NCAxOS41ODI1IDEzLjg5MjUgMTkuMzk0MSAxMy44OTI1IDE5LjE5NzdDMTMuODkgMTcuMDM3OSAxMy4wMzEgMTQuOTY3MyAxMS41MDM4IDEzLjQ0MDFDOS45NzY1NyAxMS45MTI5IDcuOTA1OTYgMTEuMDUzOSA1Ljc0NjE5IDExLjA1MTRaTTYuMTE2NDcgMTcuNzE2NkM1Ljg5Njc2IDE3LjcxNjYgNS42ODE5OSAxNy43ODE3IDUuNDk5MzEgMTcuOTAzOEM1LjMxNjYzIDE4LjAyNTggNS4xNzQyNSAxOC4xOTkzIDUuMDkwMTcgMTguNDAyM0M1LjAwNjEgMTguNjA1MyA0Ljk4NDEgMTguODI4NiA1LjAyNjk2IDE5LjA0NDFDNS4wNjk4MiAxOS4yNTk2IDUuMTc1NjIgMTkuNDU3NSA1LjMzMDk4IDE5LjYxMjlDNS40ODYzMyAxOS43NjgzIDUuNjg0MjcgMTkuODc0MSA1Ljg5OTc1IDE5LjkxNjlDNi4xMTUyNCAxOS45NTk4IDYuMzM4NTkgMTkuOTM3OCA2LjU0MTU4IDE5Ljg1MzdDNi43NDQ1NiAxOS43Njk2IDYuOTE4MDUgMTkuNjI3MiA3LjA0MDExIDE5LjQ0NDZDNy4xNjIxOCAxOS4yNjE5IDcuMjI3MzMgMTkuMDQ3MSA3LjIyNzMzIDE4LjgyNzRDNy4yMjczMyAxOC41MzI4IDcuMTEwMjkgMTguMjUwMiA2LjkwMTk2IDE4LjA0MTlDNi42OTM2NCAxNy44MzM2IDYuNDExMDkgMTcuNzE2NiA2LjExNjQ3IDE3LjcxNjZaIiBmaWxsPSIjNzU3NTc1Ii8+Cjwvc3ZnPgo="
                                                    alt=""> </div>
                                            <div class="item item3"><img
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNCAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwLjExOTYgNC4zODYyOUgzLjgyNzA5QzMuNDM0MjYgNC4zODYyOSAzLjA1NzUzIDQuNTQyMzQgMi43Nzk3NiA0LjgyMDExQzIuNTAyIDUuMDk3ODggMi4zNDU5NSA1LjQ3NDYxIDIuMzQ1OTUgNS44Njc0M1YxOS4xOTc3QzIuMzQ1OTUgMTkuNTkwNSAyLjUwMiAxOS45NjczIDIuNzc5NzYgMjAuMjQ1QzMuMDU3NTMgMjAuNTIyOCAzLjQzNDI2IDIwLjY3ODggMy44MjcwOSAyMC42Nzg4SDIwLjExOTZDMjAuNTEyNSAyMC42Nzg4IDIwLjg4OTIgMjAuNTIyOCAyMS4xNjcgMjAuMjQ1QzIxLjQ0NDcgMTkuOTY3MyAyMS42MDA4IDE5LjU5MDUgMjEuNjAwOCAxOS4xOTc3VjUuODY3NDNDMjEuNjAwOCA1LjQ3NDYxIDIxLjQ0NDcgNS4wOTc4OCAyMS4xNjcgNC44MjAxMUMyMC44ODkyIDQuNTQyMzQgMjAuNTEyNSA0LjM4NjI5IDIwLjExOTYgNC4zODYyOVpNMjAuMTE5NiAxOS4xOTc3SDMuODI3MDlWNS44Njc0M0gyMC4xMTk2VjE5LjE5NzdaTTE3LjE1NzQgOS41NzAyOEMxNy4xNTc0IDkuNzY2NjkgMTcuMDc5MyA5Ljk1NTA2IDE2Ljk0MDQgMTAuMDkzOUMxNi44MDE2IDEwLjIzMjggMTYuNjEzMiAxMC4zMTA5IDE2LjQxNjggMTAuMzEwOUg3LjUyOTk0QzcuMzMzNTMgMTAuMzEwOSA3LjE0NTE2IDEwLjIzMjggNy4wMDYyOCAxMC4wOTM5QzYuODY3MzkgOS45NTUwNiA2Ljc4OTM3IDkuNzY2NjkgNi43ODkzNyA5LjU3MDI4QzYuNzg5MzcgOS4zNzM4NyA2Ljg2NzM5IDkuMTg1NSA3LjAwNjI4IDkuMDQ2NjJDNy4xNDUxNiA4LjkwNzc0IDcuMzMzNTMgOC44Mjk3MSA3LjUyOTk0IDguODI5NzFIMTYuNDE2OEMxNi42MTMyIDguODI5NzEgMTYuODAxNiA4LjkwNzc0IDE2Ljk0MDQgOS4wNDY2MkMxNy4wNzkzIDkuMTg1NSAxNy4xNTc0IDkuMzczODcgMTcuMTU3NCA5LjU3MDI4Wk0xNy4xNTc0IDEyLjUzMjZDMTcuMTU3NCAxMi43MjkgMTcuMDc5MyAxMi45MTczIDE2Ljk0MDQgMTMuMDU2MkMxNi44MDE2IDEzLjE5NTEgMTYuNjEzMiAxMy4yNzMxIDE2LjQxNjggMTMuMjczMUg3LjUyOTk0QzcuMzMzNTMgMTMuMjczMSA3LjE0NTE2IDEzLjE5NTEgNy4wMDYyOCAxMy4wNTYyQzYuODY3MzkgMTIuOTE3MyA2Ljc4OTM3IDEyLjcyOSA2Ljc4OTM3IDEyLjUzMjZDNi43ODkzNyAxMi4zMzYyIDYuODY3MzkgMTIuMTQ3OCA3LjAwNjI4IDEyLjAwODlDNy4xNDUxNiAxMS44NyA3LjMzMzUzIDExLjc5MiA3LjUyOTk0IDExLjc5MkgxNi40MTY4QzE2LjYxMzIgMTEuNzkyIDE2LjgwMTYgMTEuODcgMTYuOTQwNCAxMi4wMDg5QzE3LjA3OTMgMTIuMTQ3OCAxNy4xNTc0IDEyLjMzNjIgMTcuMTU3NCAxMi41MzI2Wk0xNy4xNTc0IDE1LjQ5NDhDMTcuMTU3NCAxNS42OTEzIDE3LjA3OTMgMTUuODc5NiAxNi45NDA0IDE2LjAxODVDMTYuODAxNiAxNi4xNTc0IDE2LjYxMzIgMTYuMjM1NCAxNi40MTY4IDE2LjIzNTRINy41Mjk5NEM3LjMzMzUzIDE2LjIzNTQgNy4xNDUxNiAxNi4xNTc0IDcuMDA2MjggMTYuMDE4NUM2Ljg2NzM5IDE1Ljg3OTYgNi43ODkzNyAxNS42OTEzIDYuNzg5MzcgMTUuNDk0OEM2Ljc4OTM3IDE1LjI5ODQgNi44NjczOSAxNS4xMTAxIDcuMDA2MjggMTQuOTcxMkM3LjE0NTE2IDE0LjgzMjMgNy4zMzM1MyAxNC43NTQzIDcuNTI5OTQgMTQuNzU0M0gxNi40MTY4QzE2LjYxMzIgMTQuNzU0MyAxNi44MDE2IDE0LjgzMjMgMTYuOTQwNCAxNC45NzEyQzE3LjA3OTMgMTUuMTEwMSAxNy4xNTc0IDE1LjI5ODQgMTcuMTU3NCAxNS40OTQ4WiIgZmlsbD0iIzc1NzU3NSIvPgo8L3N2Zz4K"
                                                    alt=""> 0</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                                    <div class="groupBtn"><button
                                            class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary css-1miqth6"
                                            tabindex="0" type="button"><span
                                                class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge css-wth0qt"><img
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMSAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE4LjI1ODYgNS43MzIwMUwxNC43NjggMi4yNDA2MUMxNC42NTE5IDIuMTI0NSAxNC41MTQxIDIuMDMyNCAxNC4zNjI0IDEuOTY5NTdDMTQuMjEwNyAxLjkwNjczIDE0LjA0ODIgMS44NzQzOSAxMy44ODQgMS44NzQzOUMxMy43MTk4IDEuODc0MzkgMTMuNTU3MiAxLjkwNjczIDEzLjQwNTYgMS45Njk1N0MxMy4yNTM5IDIuMDMyNCAxMy4xMTYxIDIuMTI0NSAxMyAyLjI0MDYxTDMuMzY2NDEgMTEuODc1QzMuMjQ5ODMgMTEuOTkwNiAzLjE1NzQxIDEyLjEyODMgMy4wOTQ1MSAxMi4yOEMzLjAzMTYgMTIuNDMxNyAyLjk5OTQ4IDEyLjU5NDQgMy4wMDAwMSAxMi43NTg2VjE2LjI1QzMuMDAwMDEgMTYuNTgxNSAzLjEzMTcgMTYuODk5NCAzLjM2NjEyIDE3LjEzMzlDMy42MDA1NCAxNy4zNjgzIDMuOTE4NDkgMTcuNSA0LjI1MDAxIDE3LjVINy43NDE0MUM3LjkwNTYzIDE3LjUwMDUgOC4wNjgzIDE3LjQ2ODQgOC4yMTk5OSAxNy40MDU1QzguMzcxNjggMTcuMzQyNiA4LjUwOTM1IDE3LjI1MDIgOC42MjUwMSAxNy4xMzM2TDE4LjI1ODYgNy40OTk5OEMxOC4zNzQ3IDcuMzgzOSAxOC40NjY4IDcuMjQ2MDkgMTguNTI5NiA3LjA5NDQyQzE4LjU5MjUgNi45NDI3NCAxOC42MjQ4IDYuNzgwMTcgMTguNjI0OCA2LjYxNkMxOC42MjQ4IDYuNDUxODIgMTguNTkyNSA2LjI4OTI1IDE4LjUyOTYgNi4xMzc1OEMxOC40NjY4IDUuOTg1OSAxOC4zNzQ3IDUuODQ4MDkgMTguMjU4NiA1LjczMjAxWk03Ljc0MTQxIDE2LjI1SDQuMjUwMDFWMTIuNzU4NkwxMS4xMjUgNS44ODM1OEwxNC42MTY0IDkuMzc0OThMNy43NDE0MSAxNi4yNVpNMTUuNSA4LjQ5MDYxTDEyLjAwODYgNC45OTk5OEwxMy44ODM2IDMuMTI0OThMMTcuMzc1IDYuNjE1NjFMMTUuNSA4LjQ5MDYxWiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg=="
                                                    alt="" style="margin-right: 4px;"></span>Chỉnh sửa thông
                                            tin<span class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                            class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary css-1o0h03t"
                                            tabindex="0" type="button"><span
                                                class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeLarge css-wth0qt"><img
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEzLjc0OTkgMTIuNUMxMy4zMzMgMTIuNDk5OSAxMi45MjAzIDEyLjU4MzQgMTIuNTM2MiAxMi43NDU2QzEyLjE1MjIgMTIuOTA3OSAxMS44MDQ2IDEzLjE0NTUgMTEuNTE0IDEzLjQ0NDVMNy45MTI0NCAxMS4xMjk3QzguMTk1NzUgMTAuNDAzMiA4LjE5NTc1IDkuNTk2OCA3LjkxMjQ0IDguODcwMzFMMTEuNTE0IDYuNTU1NDdDMTIuMDU1IDcuMTA5NjIgMTIuNzgyNSA3LjQ0MzE3IDEzLjU1NTQgNy40OTE0M0MxNC4zMjgzIDcuNTM5NjkgMTUuMDkxNiA3LjI5OTIzIDE1LjY5NzMgNi44MTY2OEMxNi4zMDMxIDYuMzM0MTIgMTYuNzA4IDUuNjQzODQgMTYuODMzNyA0Ljg3OTY4QzE2Ljk1OTQgNC4xMTU1MSAxNi43OTY5IDMuMzMxOSAxNi4zNzc2IDIuNjgwNzZDMTUuOTU4NCAyLjAyOTYyIDE1LjMxMjMgMS41NTczNSAxNC41NjQ2IDEuMzU1NTFDMTMuODE2OSAxLjE1MzY2IDEzLjAyMSAxLjIzNjYzIDEyLjMzMSAxLjU4ODMyQzExLjY0MSAxLjk0MDAyIDExLjEwNjIgMi41MzUzOCAxMC44MzAzIDMuMjU4OThDMTAuNTU0MyAzLjk4MjU4IDEwLjU1NjkgNC43ODI4NyAxMC44Mzc0IDUuNTA0NjlMNy4yMzU4OCA3LjgxOTUzQzYuODAyMTggNy4zNzQyOCA2LjI0NTU2IDcuMDY4NDcgNS42MzcxNiA2Ljk0MTIxQzUuMDI4NzYgNi44MTM5NCA0LjM5NjI0IDYuODcwOTkgMy44MjA0MyA3LjEwNTA4QzMuMjQ0NjMgNy4zMzkxNiAyLjc1MTcxIDcuNzM5NjQgMi40MDQ2OSA4LjI1NTMxQzIuMDU3NjcgOC43NzA5OSAxLjg3MjMxIDkuMzc4NDMgMS44NzIzMSAxMEMxLjg3MjMxIDEwLjYyMTYgMi4wNTc2NyAxMS4yMjkgMi40MDQ2OSAxMS43NDQ3QzIuNzUxNzEgMTIuMjYwNCAzLjI0NDYzIDEyLjY2MDggMy44MjA0MyAxMi44OTQ5QzQuMzk2MjQgMTMuMTI5IDUuMDI4NzYgMTMuMTg2MSA1LjYzNzE2IDEzLjA1ODhDNi4yNDU1NiAxMi45MzE1IDYuODAyMTggMTIuNjI1NyA3LjIzNTg4IDEyLjE4MDVMMTAuODM3NCAxNC40OTUzQzEwLjU5NjIgMTUuMTE3NiAxMC41NjA1IDE1LjgwMDggMTAuNzM1NiAxNi40NDQ4QzEwLjkxMDcgMTcuMDg4OSAxMS4yODc0IDE3LjY1OTkgMTEuODEwNSAxOC4wNzQ0QzEyLjMzMzYgMTguNDg4OSAxMi45NzU3IDE4LjcyNSAxMy42NDI3IDE4Ljc0ODFDMTQuMzA5OCAxOC43NzEzIDE0Ljk2NjcgMTguNTgwMiAxNS41MTczIDE4LjIwM0MxNi4wNjc5IDE3LjgyNTggMTYuNDgzMyAxNy4yODIyIDE2LjcwMjYgMTYuNjUxOUMxNi45MjE5IDE2LjAyMTUgMTYuOTMzNiAxNS4zMzc1IDE2LjczNjEgMTQuN0MxNi41Mzg1IDE0LjA2MjUgMTYuMTQyIDEzLjUwNDkgMTUuNjA0NyAxMy4xMDkxQzE1LjA2NzMgMTIuNzEzMiAxNC40MTc0IDEyLjQ5OTggMTMuNzQ5OSAxMi41Wk0xMy43NDk5IDIuNUMxNC4xMjA4IDIuNSAxNC40ODMzIDIuNjA5OTcgMTQuNzkxNiAyLjgxNTk5QzE1LjEgMy4wMjIwMiAxNS4zNDAzIDMuMzE0ODYgMTUuNDgyMiAzLjY1NzQ3QzE1LjYyNDEgNC4wMDAwOCAxNS42NjEzIDQuMzc3MDggMTUuNTg4OSA0Ljc0MDc5QzE1LjUxNjYgNS4xMDQ1MSAxNS4zMzggNS40Mzg2IDE1LjA3NTggNS43MDA4M0MxNC44MTM1IDUuOTYzMDUgMTQuNDc5NSA2LjE0MTYyIDE0LjExNTcgNi4yMTM5N0MxMy43NTIgNi4yODYzMiAxMy4zNzUgNi4yNDkxOSAxMy4wMzI0IDYuMTA3MjdDMTIuNjg5OCA1Ljk2NTM2IDEyLjM5NyA1LjcyNTA0IDEyLjE5MDkgNS40MTY2OUMxMS45ODQ5IDUuMTA4MzUgMTEuODc0OSA0Ljc0NTg0IDExLjg3NDkgNC4zNzVDMTEuODc0OSAzLjg3NzcyIDEyLjA3MjUgMy40MDA4MSAxMi40MjQxIDMuMDQ5MTdDMTIuNzc1NyAyLjY5NzU0IDEzLjI1MjcgMi41IDEzLjc0OTkgMi41Wk00Ljk5OTk0IDExLjg3NUM0LjYyOTEgMTEuODc1IDQuMjY2NTkgMTEuNzY1IDMuOTU4MjUgMTEuNTU5QzMuNjQ5OTEgMTEuMzUzIDMuNDA5NTggMTEuMDYwMSAzLjI2NzY3IDEwLjcxNzVDMy4xMjU3NiAxMC4zNzQ5IDMuMDg4NjIgOS45OTc5MiAzLjE2MDk3IDkuNjM0MkMzLjIzMzMyIDkuMjcwNDkgMy40MTE5IDguOTM2NCAzLjY3NDEyIDguNjc0MTdDMy45MzYzNCA4LjQxMTk1IDQuMjcwNDMgOC4yMzMzNyA0LjYzNDE1IDguMTYxMDNDNC45OTc4NiA4LjA4ODY4IDUuMzc0ODYgOC4xMjU4MSA1LjcxNzQ3IDguMjY3NzNDNi4wNjAwOSA4LjQwOTY0IDYuMzUyOTIgOC42NDk5NiA2LjU1ODk1IDguOTU4MzFDNi43NjQ5OCA5LjI2NjY1IDYuODc0OTQgOS42MjkxNiA2Ljg3NDk0IDEwQzYuODc0OTQgMTAuNDk3MyA2LjY3NzQgMTAuOTc0MiA2LjMyNTc3IDExLjMyNThDNS45NzQxNCAxMS42Nzc1IDUuNDk3MjIgMTEuODc1IDQuOTk5OTQgMTEuODc1Wk0xMy43NDk5IDE3LjVDMTMuMzc5MSAxNy41IDEzLjAxNjYgMTcuMzkgMTIuNzA4MyAxNy4xODRDMTIuMzk5OSAxNi45NzggMTIuMTU5NiAxNi42ODUxIDEyLjAxNzcgMTYuMzQyNUMxMS44NzU4IDE1Ljk5OTkgMTEuODM4NiAxNS42MjI5IDExLjkxMSAxNS4yNTkyQzExLjk4MzMgMTQuODk1NSAxMi4xNjE5IDE0LjU2MTQgMTIuNDI0MSAxNC4yOTkyQzEyLjY4NjMgMTQuMDM2OSAxMy4wMjA0IDEzLjg1ODQgMTMuMzg0MSAxMy43ODZDMTMuNzQ3OSAxMy43MTM3IDE0LjEyNDkgMTMuNzUwOCAxNC40Njc1IDEzLjg5MjdDMTQuODEwMSAxNC4wMzQ2IDE1LjEwMjkgMTQuMjc1IDE1LjMwOSAxNC41ODMzQzE1LjUxNSAxNC44OTE2IDE1LjYyNDkgMTUuMjU0MiAxNS42MjQ5IDE1LjYyNUMxNS42MjQ5IDE2LjEyMjMgMTUuNDI3NCAxNi41OTkyIDE1LjA3NTggMTYuOTUwOEMxNC43MjQxIDE3LjMwMjUgMTQuMjQ3MiAxNy41IDEzLjc0OTkgMTcuNVoiIGZpbGw9IiMwREE2NUMiLz4KPC9zdmc+Cg=="
                                                    alt=""></span><span
                                                class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                                    <div class="desMobile"></div>
                                    <div class="boxGroupIconSocial"><a href="https://mail.google.com/mail/u/0/#inbox"
                                            target="_blank" rel="noreferrer">
                                            <div class="item"><img
                                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjUiIGhlaWdodD0iMjUiIHZpZXdCb3g9IjAgMCAyNSAyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzFfOTA5OSkiPgo8cGF0aCBkPSJNMi4yMTQ5NyAyMS4zNTMySDYuMDMzMTdWMTIuMDgwNEwzLjUzMjk2IDcuNzE0NkwwLjU3ODYxMyA3Ljk4OTUyVjE5LjcxNjhDMC41Nzg2MTMgMjAuNjIwOSAxLjMxMDg5IDIxLjM1MzIgMi4yMTQ5NyAyMS4zNTMyWiIgZmlsbD0iIzAwODVGNyIvPgo8cGF0aCBkPSJNMTkuMTI0MyAyMS4zNTMySDIyLjk0MjVDMjMuODQ2NSAyMS4zNTMyIDI0LjU3ODggMjAuNjIwOSAyNC41Nzg4IDE5LjcxNjhWNy45ODk1MkwyMS42Mjg4IDcuNzE0NkwxOS4xMjQzIDEyLjA4MDRWMjEuMzUzMkgxOS4xMjQzWiIgZmlsbD0iIzAwQTk0QiIvPgo8cGF0aCBkPSJNMTkuMTI0NCA0Ljk4OTMzTDE2Ljg4MTYgOS4yNjkxNkwxOS4xMjQ0IDEyLjA4MDNMMjQuNTc5IDcuOTg5MzNWNS44MDc1M0MyNC41NzkgMy43ODUyNSAyMi4yNzAzIDIuNjMwMjUgMjAuNjUxNyAzLjg0Mzg5TDE5LjEyNDQgNC45ODkzM1oiIGZpbGw9IiNGRkJDMDAiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik02LjAzMzE3IDEyLjA4MDNMMy44OTYgNy41NjU3N0w2LjAzMzE3IDQuOTg5MzhMMTIuNTc4NiA5Ljg5ODQ2TDE5LjEyNCA0Ljk4OTM4VjEyLjA4MDNMMTIuNTc4NiAxNi45ODk0TDYuMDMzMTcgMTIuMDgwM1oiIGZpbGw9IiNGRjQxMzEiLz4KPHBhdGggZD0iTTAuNTc4ODU3IDUuODA3NTlWNy45ODkzOUw2LjAzMzQyIDEyLjA4MDNWNC45ODkzOUw0LjUwNjE0IDMuODQzOTVDMi44ODc1IDIuNjMwMzEgMC41Nzg4NTcgMy43ODUzMSAwLjU3ODg1NyA1LjgwNzU5WiIgZmlsbD0iI0U1MUMxOSIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzFfOTA5OSI+CjxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuNTc5MTAyIDAuMzUwOTUyKSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                                                    alt="">
                                                <div class="itemBorder"></div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="containerTabsPage">
                            <div class="container">
                                <div class="boxTabsPage">
                                    <div class="boxTabs col-lg-7 col-md-6 col-sm-12 col-12">
                                        <div class="MuiTabs-root css-pc1mzd">
                                            <div class="MuiTabs-scrollableX MuiTabs-hideScrollbar css-oqr85h"
                                                style="width: 99px; height: 99px; position: absolute; top: -9999px; overflow: scroll;">
                                            </div>
                                            <div class="MuiTabs-scroller MuiTabs-hideScrollbar MuiTabs-scrollableX css-12qnib"
                                                style="margin-bottom: 0px;">
                                                <div class="MuiTabs-flexContainer css-k008qs" role="tablist"><button
                                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-1i10x67"
                                                        tabindex="0" type="button" role="tab"
                                                        aria-selected="true">Hoạt động<span
                                                            class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                        tabindex="-1" type="button" role="tab"
                                                        aria-selected="false">Thành tựu<span
                                                            class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                        tabindex="-1" type="button" role="tab"
                                                        aria-selected="false">Chiến dịch đồng hành<span
                                                            class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                        tabindex="-1" type="button" role="tab"
                                                        aria-selected="false">Ủng hộ<span
                                                            class="MuiTouchRipple-root css-w0pj6f"></span></button><button
                                                        class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-1i10x67"
                                                        tabindex="-1" type="button" role="tab"
                                                        aria-selected="false">Sự kiện<span
                                                            class="MuiTouchRipple-root css-w0pj6f"></span></button></div>
                                                <span class="MuiTabs-indicator css-3tj5b5"
                                                    style="left: 0px; width: 90px; background-color: rgb(255, 159, 46); padding: 0px;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontalLineTab"></div>
                        </div>
                    </div>
                    <div class="containerMainContent">
                        <div class="container">
                            <div class="MuiGrid-root MuiGrid-container css-1d3bbye">
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-4 css-2zdtwo">
                                    <div class="commonBoxCardRight containerCardMotor">
                                        <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1.5 css-sag665">
                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 css-15j76c0">
                                                <div class="boxCard">
                                                    <div class="boxGroupAvatar"></div>
                                                    <div class="boxMoney">
                                                        <div class="des">Đã ủng hộ và đồng hành</div>
                                                        <div class="money"><span>0 đ</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                                                <div class="boxNumber"><img
                                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIyLjkzNDUgMTQuMjExMkMyMi42Nzg0IDE0LjAxMzkgMjIuMzg0OCAxMy44NzA3IDIyLjA3MTYgMTMuNzkwNEMyMS43NTg0IDEzLjcxMDEgMjEuNDMyMiAxMy42OTQ0IDIxLjExMjggMTMuNzQ0M0MyMi45NTExIDExLjg4ODMgMjMuODgxMSAxMC4wNDMxIDIzLjg4MTEgOC4yMzQxMkMyMy44ODExIDUuNjQzMDEgMjEuNzk3IDMuNTM1NDYgMTkuMjM1MyAzLjUzNTQ2QzE4LjU1NTUgMy41MzExOSAxNy44ODMxIDMuNjc1NzYgMTcuMjY1MiAzLjk1OTAxQzE2LjY0NzMgNC4yNDIyNyAxNi4wOTg4IDQuNjU3MzQgMTUuNjU4NCA1LjE3NTFDMTUuMjE4IDQuNjU3MzQgMTQuNjY5NSA0LjI0MjI3IDE0LjA1MTYgMy45NTkwMUMxMy40MzM3IDMuNjc1NzYgMTIuNzYxMyAzLjUzMTE5IDEyLjA4MTUgMy41MzU0NkM5LjUxOTggMy41MzU0NiA3LjQzNTc0IDUuNjQzMDEgNy40MzU3NCA4LjIzNDEyQzcuNDM1NzQgOS4zMTA5IDcuNzUyOSAxMC4zNTczIDguNDIwNSAxMS40NjQ0QzcuODczNzQgMTEuNjAzIDcuMzc0NzUgMTEuODg3MSA2Ljk3NjY1IDEyLjI4NjdMNC43NjI0IDE0LjQ5OUgxLjk1Mzk4QzEuNTM4NTkgMTQuNDk5IDEuMTQwMjEgMTQuNjY0IDAuODQ2NDkxIDE0Ljk1NzdDMC41NTI3NjggMTUuMjUxNSAwLjM4Nzc1NiAxNS42NDk4IDAuMzg3NzU2IDE2LjA2NTJMMC4zODc3NTYgMTkuOTgwOEMwLjM4Nzc1NiAyMC4zOTYyIDAuNTUyNzY4IDIwLjc5NDUgMC44NDY0OTEgMjEuMDg4M0MxLjE0MDIxIDIxLjM4MiAxLjUzODU5IDIxLjU0NyAxLjk1Mzk4IDIxLjU0N0gxMi4xMzQ0QzEyLjE5ODQgMjEuNTQ3IDEyLjI2MjIgMjEuNTM5MSAxMi4zMjQzIDIxLjUyMzVMMTguNTg5MiAxOS45NTczQzE4LjYyOTEgMTkuOTQ3OCAxOC42NjgxIDE5LjkzNDcgMTguNzA1NyAxOS45MTgxTDIyLjUxMDYgMTguMjk5TDIyLjU1MzcgMTguMjc5NUMyMi45MTk0IDE4LjA5NjcgMjMuMjMyNSAxNy44MjM5IDIzLjQ2MzYgMTcuNDg2N0MyMy42OTQ3IDE3LjE0OTUgMjMuODM2MiAxNi43NTkgMjMuODc0NyAxNi4zNTIxQzIzLjkxMzEgMTUuOTQ1MSAyMy44NDc0IDE1LjUzNSAyMy42ODM2IDE1LjE2MDVDMjMuNTE5OCAxNC43ODU5IDIzLjI2MzMgMTQuNDU5MiAyMi45Mzg0IDE0LjIxMTJIMjIuOTM0NVpNMTIuMDgxNSA1LjEwMTY4QzEyLjY4ODEgNS4wOTI4IDEzLjI4MzUgNS4yNjUwMyAxMy43OTE2IDUuNTk2MzRDMTQuMjk5NyA1LjkyNzY1IDE0LjY5NzUgNi40MDI5OSAxNC45MzQgNi45NjE1N0MxNC45OTMgNy4xMDUyIDE1LjA5MzQgNy4yMjgwNSAxNS4yMjI0IDcuMzE0NUMxNS4zNTEzIDcuNDAwOTYgMTUuNTAzMSA3LjQ0NzEyIDE1LjY1ODQgNy40NDcxMkMxNS44MTM3IDcuNDQ3MTIgMTUuOTY1NCA3LjQwMDk2IDE2LjA5NDQgNy4zMTQ1QzE2LjIyMzQgNy4yMjgwNSAxNi4zMjM4IDcuMTA1MiAxNi4zODI4IDYuOTYxNTdDMTYuNjE5MyA2LjQwMjk5IDE3LjAxNzEgNS45Mjc2NSAxNy41MjUyIDUuNTk2MzRDMTguMDMzMyA1LjI2NTAzIDE4LjYyODcgNS4wOTI4IDE5LjIzNTMgNS4xMDE2OEMyMC45MDQzIDUuMTAxNjggMjIuMzE0OCA2LjUzNTc1IDIyLjMxNDggOC4yMzQxMkMyMi4zMTQ4IDEwLjE0MzkgMjAuNzY5MiAxMi4zMDQzIDE3Ljg0NTIgMTQuNDg5MkwxNi43NTk2IDE0LjczODhDMTYuODU0OSAxNC4zMzYzIDE2Ljg1NzkgMTMuOTE3NCAxNi43NjgzIDEzLjUxMzZDMTYuNjc4NiAxMy4xMDk4IDE2LjQ5ODggMTIuNzMxNSAxNi4yNDIxIDEyLjQwN0MxNS45ODU1IDEyLjA4MjYgMTUuNjU4OCAxMS44MjA1IDE1LjI4NjUgMTEuNjQwM0MxNC45MTQxIDExLjQ2MDEgMTQuNTA1OCAxMS4zNjY1IDE0LjA5MjIgMTEuMzY2NkgxMC4yNDMyQzkuMzk4NDEgMTAuMjI3MSA5LjAwMTk2IDkuMjI0NzUgOS4wMDE5NiA4LjIzNDEyQzkuMDAxOTYgNi41MzU3NSAxMC40MTI1IDUuMTAxNjggMTIuMDgxNSA1LjEwMTY4Wk0xLjk1Mzk4IDE2LjA2NTJINC4zMDMzMVYxOS45ODA4SDEuOTUzOThWMTYuMDY1MlpNMjEuODY3NSAxNi44Njg5TDE4LjE0NzcgMTguNDUyN0wxMi4wMzY1IDE5Ljk4MDhINS44Njk1MlYxNS42MDYxTDguMDg0NzUgMTMuMzkxOUM4LjIyOTY2IDEzLjI0NTggOC40MDIxNiAxMy4xMyA4LjU5MjIyIDEzLjA1MTJDOC43ODIyOCAxMi45NzI0IDguOTg2MTEgMTIuOTMyMSA5LjE5MTg3IDEyLjkzMjhIMTQuMDkyMkMxNC40MDM3IDEyLjkzMjggMTQuNzAyNSAxMy4wNTY1IDE0LjkyMjggMTMuMjc2OEMxNS4xNDMxIDEzLjQ5NzEgMTUuMjY2OCAxMy43OTU5IDE1LjI2NjggMTQuMTA3NEMxNS4yNjY4IDE0LjQxOSAxNS4xNDMxIDE0LjcxNzggMTQuOTIyOCAxNC45MzgxQzE0LjcwMjUgMTUuMTU4MyAxNC40MDM3IDE1LjI4MjEgMTQuMDkyMiAxNS4yODIxSDExLjM1MTNDMTEuMTQzNiAxNS4yODIxIDEwLjk0NDQgMTUuMzY0NiAxMC43OTc2IDE1LjUxMTVDMTAuNjUwNyAxNS42NTgzIDEwLjU2ODIgMTUuODU3NSAxMC41NjgyIDE2LjA2NTJDMTAuNTY4MiAxNi4yNzI5IDEwLjY1MDcgMTYuNDcyMSAxMC43OTc2IDE2LjYxOUMxMC45NDQ0IDE2Ljc2NTggMTEuMTQzNiAxNi44NDgzIDExLjM1MTMgMTYuODQ4M0gxNC40ODM3QzE0LjU0MjcgMTYuODQ4MiAxNC42MDE0IDE2Ljg0MTYgMTQuNjU5IDE2LjgyODdMMjEuMjE3NSAxNS4zMjAzTDIxLjI0NzggMTUuMzEyNUMyMS40NDgxIDE1LjI1NjkgMjEuNjYxNyAxNS4yNzczIDIxLjg0NzggMTUuMzY5OEMyMi4wMzM5IDE1LjQ2MjMgMjIuMTc5MSAxNS42MjAzIDIyLjI1NTcgMTUuODEzNUMyMi4zMzIyIDE2LjAwNjcgMjIuMzM0NiAxNi4yMjEzIDIyLjI2MjQgMTYuNDE2MkMyMi4xOTAyIDE2LjYxMSAyMi4wNDg1IDE2Ljc3MjMgMjEuODY0NSAxNi44Njg5SDIxLjg2NzVaIiBmaWxsPSIjRkY5QTNDIi8+Cjwvc3ZnPgo="
                                                        alt="" class="iconC">
                                                    <div class="boxNumberC"><span class="numberC"><span>0</span></span>
                                                    </div>
                                                    <div class="textDes">chiến dịch đã tham gia</div>
                                                </div>
                                            </div>
                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                                                <div class="boxNumber"><img
                                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjYyIDUuNTU1MDhDMTEuNDM2MSA1LjM3MTY0IDExLjIwODkgNS4yMzc0OCAxMC45NTk1IDUuMTY0OThDMTAuNzEgNS4wOTI0OCAxMC40NDYzIDUuMDgzOTcgMTAuMTkyNyA1LjE0MDI1QzkuOTM5MTIgNS4xOTY1MyA5LjcwMzc4IDUuMzE1NzggOS41MDg0MiA1LjQ4N0M5LjMxMzA2IDUuNjU4MjEgOS4xNjM5NyA1Ljg3NTg3IDkuMDc0OSA2LjExOTlMMy45MzY3MyAyMC4yNTMxQzMuODUyMzIgMjAuNDg2MSAzLjgyNTA1IDIwLjczNiAzLjg1NzIyIDIwLjk4MThDMy44ODkzOSAyMS4yMjc2IDMuOTgwMDUgMjEuNDYyMSA0LjEyMTU5IDIxLjY2NTZDNC4yNjMxMyAyMS44NjkxIDQuNDUxNDMgMjIuMDM1NiA0LjY3MDY3IDIyLjE1MTNDNC44ODk5MSAyMi4yNjcgNS4xMzM2OSAyMi4zMjgzIDUuMzgxNTYgMjIuMzMwM0M1LjU2NDA2IDIyLjMyOSA1Ljc0NDk0IDIyLjI5NTkgNS45MTYwNCAyMi4yMzI0TDIwLjA0ODIgMTcuMDkzMkMyMC4yOTIzIDE3LjAwNDMgMjAuNTEwMSAxNi44NTUzIDIwLjY4MTQgMTYuNjZDMjAuODUyNyAxNi40NjQ2IDIwLjk3MjEgMTYuMjI5MyAyMS4wMjg1IDE1Ljk3NTdDMjEuMDg0OSAxNS43MjIxIDIxLjA3NjQgMTUuNDU4NCAyMS4wMDQgMTUuMjA4OUMyMC45MzE2IDE0Ljk1OTQgMjAuNzk3NSAxNC43MzIxIDIwLjYxNCAxNC41NDgxTDExLjYyIDUuNTU1MDhaTTEwLjgwNDYgMTguNzkwNkw3LjM3ODQ5IDE1LjM2NDVMOC42NjY3MSAxMS44MkwxNC4zNDkxIDE3LjUwMjRMMTAuODA0NiAxOC43OTA2Wk01LjQyMDcyIDIwLjc0ODRMNi43OTExNiAxNi45ODg1TDkuMTg0NTQgMTkuMzgxOUw1LjQyMDcyIDIwLjc0ODRaTTE1Ljk3NyAxNi45MTEyTDkuMjU3OTYgMTAuMTkyMUwxMC41MzA1IDYuNjgwOEwxOS40ODA1IDE1LjYzMDhMMTUuOTc3IDE2LjkxMTJaTTE2LjM2ODYgNy40NTExOUMxNi4zODMzIDYuOTIxNzggMTYuNTExNSA2LjQwMTY5IDE2Ljc0NDUgNS45MjYwOEMxNy4yNjMzIDQuODg5NDQgMTguMjQyMiA0LjMxODc1IDE5LjUwMSA0LjMxODc1QzIwLjE1NjkgNC4zMTg3NSAyMC41Nzc4IDQuMDk0NTggMjAuODM3MiAzLjYxMjk3QzIwLjk3MzggMy4zNDM1MyAyMS4wNTIyIDMuMDQ4MzcgMjEuMDY3MyAyLjc0NjY2QzIxLjA2OCAyLjUzODk2IDIxLjE1MTMgMi4zNDAwOCAyMS4yOTg3IDIuMTkzNzdDMjEuNDQ2MSAyLjA0NzQ2IDIxLjY0NTYgMS45NjU3IDIxLjg1MzMgMS45NjY0OEMyMi4wNjEgMS45NjcyNiAyMi4yNTk5IDIuMDUwNTEgMjIuNDA2MiAyLjE5NzkzQzIyLjU1MjUgMi4zNDUzNCAyMi42MzQzIDIuNTQ0ODQgMjIuNjMzNSAyLjc1MjUzQzIyLjYzMzUgNC4wMTEzOCAyMS43OTk1IDUuODg0OTcgMTkuNTAxIDUuODg0OTdDMTguODQ1MiA1Ljg4NDk3IDE4LjQyNDMgNi4xMDkxMyAxOC4xNjQ5IDYuNTkwNzVDMTguMDI4MyA2Ljg2MDE5IDE3Ljk0OTkgNy4xNTUzNSAxNy45MzQ4IDcuNDU3MDZDMTcuOTM0NCA3LjU1OTkgMTcuOTEzOCA3LjY2MTY2IDE3Ljg3NDEgNy43NTY1MkMxNy44MzQ0IDcuODUxMzggMTcuNzc2NCA3LjkzNzUgMTcuNzAzNCA4LjAwOTk0QzE3LjYzMDQgOC4wODIzOSAxNy41NDM4IDguMTM5NzUgMTcuNDQ4NyA4LjE3ODc1QzE3LjM1MzUgOC4yMTc3NSAxNy4yNTE2IDguMjM3NjIgMTcuMTQ4OCA4LjIzNzIzQzE3LjA0NTkgOC4yMzY4NSAxNi45NDQyIDguMjE2MjEgMTYuODQ5MyA4LjE3NjVDMTYuNzU0NCA4LjEzNjc5IDE2LjY2ODMgOC4wNzg3OCAxNi41OTU5IDguMDA1NzlDMTYuNTIzNCA3LjkzMjggMTYuNDY2MSA3Ljg0NjI1IDE2LjQyNzEgNy43NTEwOUMxNi4zODgxIDcuNjU1OTQgMTYuMzY4MiA3LjU1NDAzIDE2LjM2ODYgNy40NTExOVpNMTQuMDE5MyA0LjMxODc1VjEuOTY5NDJDMTQuMDE5MyAxLjc2MTczIDE0LjEwMTggMS41NjI1NCAxNC4yNDg2IDEuNDE1NjhDMTQuMzk1NSAxLjI2ODgyIDE0LjU5NDcgMS4xODYzMSAxNC44MDI0IDEuMTg2MzFDMTUuMDEwMSAxLjE4NjMxIDE1LjIwOTMgMS4yNjg4MiAxNS4zNTYxIDEuNDE1NjhDMTUuNTAzIDEuNTYyNTQgMTUuNTg1NSAxLjc2MTczIDE1LjU4NTUgMS45Njk0MlY0LjMxODc1QzE1LjU4NTUgNC41MjY0NCAxNS41MDMgNC43MjU2MyAxNS4zNTYxIDQuODcyNDlDMTUuMjA5MyA1LjAxOTM1IDE1LjAxMDEgNS4xMDE4NiAxNC44MDI0IDUuMTAxODZDMTQuNTk0NyA1LjEwMTg2IDE0LjM5NTUgNS4wMTkzNSAxNC4yNDg2IDQuODcyNDlDMTQuMTAxOCA0LjcyNTYzIDE0LjAxOTMgNC41MjY0NCAxNC4wMTkzIDQuMzE4NzVaTTIzLjk3MDYgMTIuMzc4OUMyNC4wNDMzIDEyLjQ1MTcgMjQuMTAxIDEyLjUzOCAyNC4xNDAzIDEyLjYzMzFDMjQuMTc5NiAxMi43MjgxIDI0LjE5OTggMTIuODMgMjQuMTk5OCAxMi45MzI4QzI0LjE5OTcgMTMuMDM1NyAyNC4xNzk0IDEzLjEzNzUgMjQuMTQgMTMuMjMyNUMyNC4xMDA2IDEzLjMyNzUgMjQuMDQyOSAxMy40MTM4IDIzLjk3MDEgMTMuNDg2NUMyMy44OTc0IDEzLjU1OTIgMjMuODExIDEzLjYxNjkgMjMuNzE2IDEzLjY1NjJDMjMuNjIwOSAxMy42OTU1IDIzLjUxOTEgMTMuNzE1NyAyMy40MTYyIDEzLjcxNTdDMjMuMzEzNCAxMy43MTU2IDIzLjIxMTYgMTMuNjk1MyAyMy4xMTY1IDEzLjY1NTlDMjMuMDIxNSAxMy42MTY1IDIyLjkzNTIgMTMuNTU4OCAyMi44NjI1IDEzLjQ4NkwyMS4yOTYzIDExLjkxOThDMjEuMTQ5NCAxMS43NzI5IDIxLjA2NjggMTEuNTczNiAyMS4wNjY4IDExLjM2NThDMjEuMDY2OCAxMS4xNTc5IDIxLjE0OTQgMTAuOTU4NyAyMS4yOTYzIDEwLjgxMTdDMjEuNDQzMyAxMC42NjQ4IDIxLjY0MjYgMTAuNTgyMiAyMS44NTA0IDEwLjU4MjJDMjIuMDU4MiAxMC41ODIyIDIyLjI1NzUgMTAuNjY0OCAyMi40MDQ0IDEwLjgxMTdMMjMuOTcwNiAxMi4zNzg5Wk0yNC40NDc0IDguMTk0MTZMMjIuMDk4IDguOTc3MjdDMjEuOTAxIDkuMDQyOTYgMjEuNjg1OSA5LjAyNzY3IDIxLjUwMDEgOC45MzQ3OEMyMS4zMTQzIDguODQxODkgMjEuMTczMSA4LjY3OTAxIDIxLjEwNzQgOC40ODE5NkMyMS4wNDE3IDguMjg0OTEgMjEuMDU3IDguMDY5ODQgMjEuMTQ5OSA3Ljg4NDA2QzIxLjI0MjggNy42OTgyOCAyMS40MDU3IDcuNTU3MDEgMjEuNjAyNyA3LjQ5MTMyTDIzLjk1MiA2LjcwODIxQzI0LjE0OTEgNi42NDI1MyAyNC4zNjQyIDYuNjU3ODEgMjQuNTQ5OSA2Ljc1MDdDMjQuNzM1NyA2Ljg0MzU5IDI0Ljg3NyA3LjAwNjQ4IDI0Ljk0MjcgNy4yMDM1M0MyNS4wMDg0IDcuNDAwNTggMjQuOTkzMSA3LjYxNTY1IDI0LjkwMDIgNy44MDE0M0MyNC44MDczIDcuOTg3MjEgMjQuNjQ0NCA4LjEyODQ4IDI0LjQ0NzQgOC4xOTQxNloiIGZpbGw9IiNGRjlBM0MiLz4KPC9zdmc+Cg=="
                                                        alt="" class="iconC">
                                                    <div class="boxNumberC"><span class="numberC"><span>0</span></span>
                                                    </div>
                                                    <div class="textDes">lượt ủng hộ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontalLine"></div>
                                    <div class="commonBoxCardRight containerFollowList">
                                        <div class="boxHeader">
                                            <div class="titleB"> Đang theo dõi</div>
                                            <div class="btnViewAll">Tất cả <svg
                                                    class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv"
                                                    focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                    data-testid="ArrowForwardIosIcon"
                                                    style="color: rgb(255, 170, 92); font-size: 11px;">
                                                    <path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"></path>
                                                </svg></div>
                                        </div>
                                        <div class="boxSwitch">
                                            <div class="switch switchActive">Tổ chức</div>
                                            <div class="switch false">Cá nhân</div>
                                        </div>
                                        <div class="boxListFollow">
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="opacity: 0.5; font-size: 14px; text-align: center;">Không có nội
                                                dung hiển thị </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-md-8 css-efwuvd">
                                    <div class="containerActivitiesProfile">
                                        <div class="containerPostCommon" style="overflow: visible clip;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="_rht_toaster" class="toast-container"
                    style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
                <div class="chat-bot" id="chat-bot">
                    <div class="chat-icon" id="chat-icon"><img src="/_next/static/media/chatbot.6cf6b344.webp"
                            alt="Chat Icon"></div>
                    <div class="">
                        <div class="chat-popup" id="chat-popup">
                            <div class="chat-header">
                                <h2>Bee Kind</h2><span class="close-btn" id="close-btn"><img
                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTExLjAzMDYgOS45Njk5N0MxMS4xNzE1IDEwLjExMDkgMTEuMjUwNiAxMC4zMDIgMTEuMjUwNiAxMC41MDEyQzExLjI1MDYgMTAuNzAwNSAxMS4xNzE1IDEwLjg5MTYgMTEuMDMwNiAxMS4wMzI1QzEwLjg4OTcgMTEuMTczNCAxMC42OTg2IDExLjI1MjUgMTAuNDk5MyAxMS4yNTI1QzEwLjMwMDEgMTEuMjUyNSAxMC4xMDkgMTEuMTczNCA5Ljk2ODEgMTEuMDMyNUw1Ljk5OTk3IDcuMDYzMUwyLjAzMDYgMTEuMDMxMkMxLjg4OTcgMTEuMTcyMSAxLjY5ODYxIDExLjI1MTMgMS40OTkzNSAxMS4yNTEzQzEuMzAwMDkgMTEuMjUxMyAxLjEwODk5IDExLjE3MjEgMC45NjgwOTggMTEuMDMxMkMwLjgyNzIwMiAxMC44OTAzIDAuNzQ4MDQ3IDEwLjY5OTIgMC43NDgwNDcgMTAuNUMwLjc0ODA0NyAxMC4zMDA3IDAuODI3MjAyIDEwLjEwOTYgMC45NjgwOTggOS45Njg3Mkw0LjkzNzQ3IDYuMDAwNkwwLjk2OTM0OCAyLjAzMTIyQzAuODI4NDUxIDEuODkwMzMgMC43NDkyOTcgMS42OTkyMyAwLjc0OTI5NyAxLjQ5OTk3QzAuNzQ5Mjk3IDEuMzAwNzIgMC44Mjg0NTEgMS4xMDk2MiAwLjk2OTM0OCAwLjk2ODcyM0MxLjExMDI0IDAuODI3ODI3IDEuMzAxMzQgMC43NDg2NzIgMS41MDA2IDAuNzQ4NjcyQzEuNjk5ODYgMC43NDg2NzIgMS44OTA5NSAwLjgyNzgyNyAyLjAzMTg1IDAuOTY4NzIzTDUuOTk5OTcgNC45MzgxTDkuOTY5MzUgMC45NjgwOThDMTAuMTEwMiAwLjgyNzIwMSAxMC4zMDEzIDAuNzQ4MDQ3IDEwLjUwMDYgMC43NDgwNDdDMTAuNjk5OSAwLjc0ODA0NyAxMC44OTEgMC44MjcyMDEgMTEuMDMxOCAwLjk2ODA5OEMxMS4xNzI3IDEuMTA4OTkgMTEuMjUxOSAxLjMwMDA5IDExLjI1MTkgMS40OTkzNUMxMS4yNTE5IDEuNjk4NjEgMTEuMTcyNyAxLjg4OTcgMTEuMDMxOCAyLjAzMDZMNy4wNjI0NyA2LjAwMDZMMTEuMDMwNiA5Ljk2OTk3WiIgZmlsbD0id2hpdGUiIGZpbGwtb3BhY2l0eT0iMC43MiIvPgo8L3N2Zz4K"
                                        alt="close-btn"></span>
                            </div>
                            <div class="chat-body">
                                <div class="bot-avatar"><img src="/_next/static/media/chatbot.6cf6b344.webp"
                                        alt=""></div>
                                <div class="bot-name">Bee Kind</div>
                                <div class="bot-intro">Tôi có thể hỗ trợ bạn thông tin về các chương trình thiện nguyện
                                </div>
                                <div class="message bot first-message"><img
                                        src="/_next/static/media/chatbot.6cf6b344.webp" alt="Bot Avatar" class="avatar">
                                    <p>
                                    <div class="text-wellcome">Chào <span class="username">Vũ Nam!</span> Rất vui được
                                        đồng hành cùng bạn.</div>
                                    <div class="text-second">Dưới đây là một vài thao tác mẫu tôi có thể hỗ trợ nhanh trong
                                        đoạn hội thoại:</div>
                                    <ul class="text-second">
                                        <li>Thực hiện nhanh: Ủng hộ, xem sao kê, tạo chiến dịch chỉ trong vài bước.</li>
                                        <li>Khám phá thêm: Những chiến dịch ý nghĩa, hoàn cảnh cần giúp đỡ.</li>
                                        <li>Và tất nhiên, tôi luôn sẵn sàng hỗ trợ và giải đáp mọi vấn đề của bạn về nền
                                            tảng Thiện Nguyện. 🌟</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="chat-footer"><input type="text" placeholder="Bạn cần chúng tôi hỗ trợ gì?"
                                    maxlength="255" value=""></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{"pageData":{"item":{"role":"NORMAL","description":null,"userId":"1910341624387366912","username":"vunam3445","fullname":"Vũ Nam","email":"vunam3445@gmail.com","emailReport":null,"phone":null,"facebook":null,"tiktok":null,"youtube":null,"mailContact":"vunam3445@gmail.com","enableDonate":false,"bannerPhotoUrl":{"small":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/34310449-fc47-4270-80cb-dbc6d876d52f.jpg","dimension":{"width":640,"height":448}},"medium":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/624f1996-2938-4b36-a818-ca13904f59e9.jpg","dimension":{"width":960,"height":672}},"large":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/0e53435f-aa72-434b-9b47-4822d327460d.jpg","dimension":{"width":1200,"height":840}}},"bannerWebPhotoUrl":{"small":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/34310449-fc47-4270-80cb-dbc6d876d52f.jpg","dimension":{"width":640,"height":448}},"medium":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/624f1996-2938-4b36-a818-ca13904f59e9.jpg","dimension":{"width":960,"height":672}},"large":{"url":"https://static.thiennguyen.app/public/user/banner/2025/4/10/0e53435f-aa72-434b-9b47-4822d327460d.jpg","dimension":{"width":1200,"height":840}}},"avatarPhotoUrl":{"small":{"url":"https://static.thiennguyen.app/public/user/profile/2025/4/10/25e4ef3d-6657-476b-9b17-efe8888b2443.jpg","dimension":{"width":128,"height":128}},"medium":{"url":"https://static.thiennguyen.app/public/user/profile/2025/4/10/469a34aa-04ae-4dcf-8268-f240765925bb.jpg","dimension":{"width":256,"height":256}},"large":{"url":"https://static.thiennguyen.app/public/user/profile/2025/4/10/1309ae00-9cbc-4d3f-a5c5-108dfbf547ee.jpg","dimension":{"width":512,"height":512}}},"isVerified":false,"userDetail":{"nbFollower":0,"nbLike":0,"nbDonator":0,"nbDonation":0,"followed":false,"liked":false,"bankAccountBalanceMap":null,"followedDonorUserIds":null,"nbPost":0,"permalink":"https://thiennguyen.app/user/vunam3445","defaultBankAccountVietQrCode":null,"defaultBankAccount":null},"targetCommonDto":{"totalAmount":null,"fundraisingCompanion":null,"nbDonater":null,"nbDonate":0,"nbDonateTarget":0},"companions":null,"bankAccount":null}},"appData":{"facebookPageUrl":"https://www.facebook.com/groups/congdongthiennguyenbenvung","socialNetworkShareUrl":"https://thiennguyen.app/","googleFormsUrl":"https://thiennguyen.app/register","hotline":"0988456679","email":"contact@thiennguyen.app","allowRegisterKols":true,"fundraisingStepsUrl":"https://drive.google.com/drive/folders/1Vq8p9nr8wEtwdFd1F3r9cNdTOI8DX7eA","deepLinkMiniapp":"https://thiennguyen.app","allowDeepLink":true,"linkDownLoadApp":"https://thiennguyen.page.link/dl"}}},"page":"/user/[id]","query":{"tab":"ACTIVITIES","id":"vunam3445"},"buildId":"bleSMrVh6DG7CDVHteWhh","runtimeConfig":{"appStore":{"url":"https://apps.apple.com/us/app/thi%E1%BB%87n-nguy%E1%BB%87n/id1583539685","appId":"1583539685","teamId":"HR8KMXWN6N","bundleId":"com.mbbank.thiennguyen"},"playStore":{"url":"https://play.google.com/store/apps/details?id=com.mbbank.thiennguyen","packageName":"com.mbbank.thiennguyen","sha256Fingerprints":"3A:CC:57:0C:53:21:6F:FB:69:4D:B4:55:F0:85:A1:2F:17:48:EC:CA:E1:E2:B2:32:15:02:6C:C0:D1:2E:4B:60"},"pageLink":"https://thiennguyen.page.link/","canonicalDomain":"https://thiennguyen.app","gtmId":"GTM-KLM3RXD","apiBaseUrl":"http://10.236.6.60:80","apiBaseUrlv2":"https://apiv2.thiennguyen.app","useHsts":false,"useCsp":false,"apiPublicUrl":"https://api.thiennguyen.app","appIdFacebook":"628901978072024","pageIdFacebook":"156863407508464","clientIdGoogle":"715353110231-dmsiegf9giud2g8l09tc1o21msk3n95s.apps.googleusercontent.com","maps":{"apiUrl":"https://maps.vnpost.vn/api","apiKey":"674052d5aeb7658157d37306d8fc0bb42e7b69cff5e37440","accessToken":"674052d5aeb7658157d37306d8fc0bb42e7b69cff5e37440","apiVersion":1.1}},"isFallback":false,"customServer":true,"gip":true,"appGip":true,"scriptLoader":[]}</script>
        <script src="https://accounts.google.com/gsi/client" async="" defer=""></script><next-route-announcer>
            <p aria-live="assertive" id="__next-route-announcer__" role="alert"
                style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">
                /user/vunam3445</p>
        </next-route-announcer>
        <script src="/_next/static/chunks/pages/index-08b8c411298ce7f9.js"></script>
        <script src="/_next/static/chunks/pages/donate-target/info-donate/%5Bid%5D-44bec95f23fa6015.js"></script>
        <script src="/_next/static/chunks/pages/donate-target-d3c34d05874f3108.js"></script>
        <script src="/_next/static/chunks/pages/user/edit-a411fa5029e45132.js"></script>
        <script src="/_next/static/chunks/pages/my-donate-2b04b9a68e2d916f.js"></script>
        <script src="/_next/static/chunks/pages/user/setting-a10f20a6350e26e5.js"></script>
        <div id="fb-root" class=" fb_reset">
            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                <div></div>
            </div>
        </div>

@endsection
