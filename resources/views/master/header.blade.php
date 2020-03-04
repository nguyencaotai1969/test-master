
<div id="header" class="fix">
	{{-- <div class="row">					
		<div class="offset-md-1 col-md-1 col-sm-offset-1 col-sm-1">
			<img src="images/lo-go.png" style="width: 80px;height: 80px;">
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="trang-chu"><p class="header_text">Trang chủ</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="khuyen-mai"><p class="header_text_2">Combo - Khuyến mại</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="{{route('trong-nuoc')}}"><p class="header_text_2">Du lịch trong nước</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="{{route('nuoc-ngoai')}}"><p class="header_text_2">Du lịch nước ngoài</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="ve-chung-toi"><p class="header_text_2" style="margin-top: 15px;">Về chúng tôi</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="cam-nang"><p class="header_text">Blog</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<nav>

				<ul>
					<li>Tài khoản
						<ul>
							@if (Route::has('login'))
							<div class="top-right links">

								<li><a style="font-size: 16px;" href = "{{ route('login') }}">Đăng nhập</a></li>

								@if (Route::has('register'))
								<li><a style="font-size: 16px;" href = "{{ route('register') }}">Đăng kí</li>
								@endif
								
							</div>
							@endif	
							
							
							</ul>
						</li>
					</ul>
				</nav>
			</div>

			<div class="col-md-2 col-sm-2">
				<a href="#" class="header_hotline  none"><p class="fa fa-phone" style="padding-top: 14px;"> 0928 0416</p></a>
			<p style="color: #fff;margin-top: -12px;">Hỗ trợ dịch vụ 24/24</p>
			</div>
		</div> --}}

	












<style>
	@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}

.navbar .dropdown-menu a:hover {
    color: #616161 !important;
}
.darken-grey-text {
    color: #2E2E2E;
}

</style>
<nav class="navbar navbar-expand-lg navbar-dark teal mb-4" style="height: 135%">
                <a class="navbar-brand" href="#"><img src="images/lo-go.png" style="width: 50%;height: 50%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Trang chủ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Combo - Khuyến mạ<i></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Du lịch trong nước</a>
                        </li>
                        <li class="nav-item ">
         
                                <a class="nav-link" href="#">Về chúng tôi</a>
                        </li>
                       <li class="nav-item ">
         
                                <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
       
                </div>
            </nav>
        </div>