<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	{{-- <link rel="stylesheet" href="css/bootstrap.min.css" /> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/blog_tour_trong_ngoai.css') }}">
	{{-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <script src="js/bootstrap.min.js"></script> --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	{{-- <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('jquery-3.4.1.min.js') }}"></script> --}}

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<script>
	function checkName(){
				var name = document.getElementById("name").value;
				var check_error_name = document.getElementById("noti_name");
				var regexName = /^[^\d+]*[\d+]{0}[^\d+]*$/;

				if (name == "" || name == null) {
					check_error_name.innerHTML = "Họ tên không được để trống!";
				}else if (!regexName.test(name)){
					check_error_name.innerHTML = "Họ tên không hợp lệ!";
				}else{
					check_error_name.innerHTML = "";
					return name;
				}

	};

	function checkPhone(){
				var phone = document.getElementById("phone").value;
				var check_error_phone = document.getElementById("noti_phone");
				var regexphone = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;

				if (phone == "" || phone == null) {
					check_error_phone.innerHTML = "Số điện thoại không được để trống!";
				}else if (!regexphone.test(phone)){
					check_error_phone.innerHTML = "Số điện thoại không hợp lệ!";
				}else{
					check_error_phone.innerHTML = "";
					return phone;
				}

	};

	function checkEmail(){
				var email = document.getElementById("email").value;
				var check_error_email = document.getElementById("noti_email");
				var regexEmail = /\b[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,6}\b/i;

				if (email == ""){
					check_error_email.innerHTML = "Email không được để trống!";
				}else if(!regexEmail.test(email)){
					check_error_email.innerHTML = "Email không hợp lệ!";
				}else{
					check_error_email.innerHTML = "";
					return email;
				}
	};

  	function checkBank(){
			var bank = document.getElementsById("bank").value;
  			var check_error_bank= document.getElementById("noti_bank");
  			if(document.getElementById("pay").value==1 && bank == ""){
    			check_error_bank.innerHTML="Vui lòng điền số tài khoản!";
    			return 0;
    		}else{
    			check_error_bank.innerHTML="";
    			return bank;
    		}

  	};


    function validate(){
				if (checkName() && checkPhone() && checkEmail() && checkBank())
				{	
					return true;
            	}
            		else
            	{
            	alert("Dữ liệu không được để trống!");
            	return false;
            	} 

            	return false;

    };

	</script>
<body>

	@extends('master.home')
	@section('chi_tiet')
	
	<div class="container all">
		<div  style="padding-top: 30px;" class="head_con">
			<span class="fa fa-home" style="padding-right: 10px;"><a href="#"> Trang chủ / </a></span>
			<span style="padding-right: 10px;"><a href="#"> Malaysia /</a></span>
			<span><a href="#"> Tour {{$detail->name}} {{$detail->length}} ngày {{$detail->length-1}} đêm</a></span>
			<h1 style="color:#003c71;font-weight: bold;">Tour {{$detail->name}} {{$detail->length}} ngày {{$detail->length-1}} đêm</h1>
		</div>
		<div style="padding-top: 10px;padding-bottom: 5px;">	
			<span  class="score">9.4</span>
			<span class="cmt" style="color:#9fc43a;font-weight: bold; ">Tuyệt vời</span>
			<span style="font-size: 14px;">| 7 đánh giá</span>	
			<!-- Button trigger modal -->



		</div>
		<br>
		<div class="row">
			<div class="col-md-8 col-sm-12">
				<div class="ima">
					<img style="width: 700px;height: 390px;" src="img/test/{{$detail->avatar}}">
					<br>
					<br>
					<span  style="margin-right: 30px;padding-top: 20px;"><i class="glyphicon glyphicon-map-marker"></i> Hồ Chí Minh</span>
					<span style="margin-right: 30px;"><i class="glyphicon glyphicon-time"></i>{{$detail->name}} {{$detail->length}} ngày {{$detail->length-1}} đêm</span>
					<span>Phương tiện :</span>
					<span class="fa fa-plane"></span>
					<span class="fa fa-car"></span><br/>
					<span style="padding-left:100px" >Mã Tour:</span>
					<span style="color: #00c1de">{{$detail->code}}</span>
				</div>
				<div class="thong_tin" style="background-color: white">
					<h3 style="color: #003c71;">LIÊN TUYẾN SING-MÃ:HÀNH TRÌNH XUYÊN Á LÍ TƯỞNG</h3>
					<P>Đông Nam Á là một khu vực ẩn chứa nhiều đặc trưng văn hóa của nhiều dân tộc cùng nhiều cảnh sắc thiên nhiên mà tạo hóa đã ưu ái ban cho nơi này. Một hành trình khám phá ẩm thực 2 quốc gia Singapore - Malaysia đã trở thành sức hút du khách bởi những đặc sắc vốn có. Đến Singapore không thể không chụp ảnh cùng tượng Merlion, biểu tượng của đất nước Singapore, chiêm ngưỡng Gardens by the Bay. Ở Malaysia không thể bỏ qua những thắng cảnh tuyệt đẹp: động Ba Tu; cung điện Hoàng Gia, quảng trường độc lập, đài tưởng niệm quốc gia, toà tháp đôi Petronas – biểu tượng của Malaysia. Ngại ngần gì nữa cùng iVIVU khám phá Sing - Mã ngay hôm nay!</P>

					<h3 style="color: #003c71">Những trải nghiệm thú vị trong chương trình</h3>
					<p>Hành trình độc đáo khám phá 2 quốc gia Đông Nam Á không thể bỏ lỡ...</p>
					<p> <span style="font-weight: bold">-Gardens By The Bay</span>: kỳ quan nổi tiếng của Singapore với kiến trúc độc đáo và là “công trình mà người dân Singapore có thể tự hào” mỗi khi nhắc đến.</p>
					<h3 style="color: #003c71" id="ctr_tour">Chương trình tour</h3>
					{{$detail->lich_trinh}}
					<br>

					


				</div>
				<div class="calendar">
					<h3 style="color: #003c71">Lịch khởi hành: {{$detail->departure}}</h3>



				</div>
				<div class="dich_vu">
					<h3 style="color: #003c71">Dịch vụ đi kèm</h3>
					<div class="row">
						<div class="col-md-4 beside_service">
							<a href="#"><span><i class="fa fa-check text-blue"></i> Bảo hiểm</span></a>
						</div>
						<div class="col-md-4 beside_service">
							<a href="#"><span><i class="fa fa-cutlery"></i> Bữa ăn</span></a>
						</div>
						<div class="col-md-4 beside_service">
							<a href="#"><span><i class="fa fa-flag"></i> Hướng dẫn viên</span></a>
						</div>
						<div class="col-md-4 beside_service">
							<a href="#"><span><i class="fa fa-ticket text-blue"></i> Vé thăm quan</span></a>
						</div>
						<div class="col-md-4 beside_service">
							<a href="#"><span><i class="fa fa-bus"></i> Xe đưa đón</span></a>
						</div>
					</div>

				</div>
				<br>
				<div class="col-md-12 col-sm-12 cspt">
					<h3 style="color: #003c71">Chính sách phụ thu</h3>
					<p>- Phòng đơn : 200usd cho 4 đêm.<br> 
						- Trẻ em dưới 2 tuổi : phụ thu 35% giá vé người lớn<br>

						- Trẻ em từ 2 tuổi tới dưới 11 tuổi : 90% giá vé người lớn.<br>

						Hai người lớn được kèm 1 trẻ em,trẻ thứ 2 mua vé như người lớn.<br>

					- Trẻ em trên 11 tuổi : mua vé người lớn. </p>

					<div class="dieu_khoan">
						<h3>Điều khoản khác</h3>
						<div class="d_k">
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#">Giá bao gồm</a></li>
								<li><a href="#">Giá không bao gồm</a></li>
								<li><a href="#">Hủy đổi</a></li>
								<li><a href="#">Lưu ý</a></li>
							</ul>
							<p>
								<br>
								Vận Chuyển : <br>

								- Vé máy bay khứ hồi TPHCM - Singapore //Kul – TPHCM (Hàng không Vietjet Air - Giờ bay: Chuyến đi 12h55,Chuyến về 13h10)<br>
								<br>

								- Hành lý xách tay : 7 kg. Hành lý ký gửi : 20kg<br>
								<br>

								- Thuế phi trường 2 nước, thuế an ninh, phụ phí xăng dầu. <br>  
								<br>

								- Xe du lịch chất lượng cao có máy lạnh đưa đón tham quan suốt tuyến.<br>
							</p>
						</div>
					</div>

					<br>
					<div class="evaluate">
						<h4 style="color: #003c71;padding-bottom: 10px;">Đánh giá khách hàng về Tour Singapore 5 ngày 4 đêm: Singapore -Malaysia(Deal)</h4>

						<div style="padding-top: 10px;padding-bottom: 5px;">	
							<span  class="score_1">8.9/10</span>
							<span class="cmt" style="color:#9fc43a;font-weight: bold; ">Tuyệt vời</span>
							<span style="font-size: 15px;">| 7 đánh giá</span>	
						</div>
						<br>
						<div class="danh_gia">
							<h4>Đánh giá gần đây</h4>
							<div class="customerReview">
								<div class="line" style=" border-bottom: 1px solid #ddd;margin: 8px 0;"><p style="color: white">i</p></div>
								<div class=" col-sm-3 col-md-3 ">
									<div class="row">
										<div class="customerReviewName">
											<span class="glyphicon glyphicon-user"></span>
											<span> Lê Khắc Định</span>
										</div>
									</div>
								</div>
								<div class=" col-sm-9 col-md-9 ">
									<div class="row">
										<div class="col-xs-12 vspacing3">
											<span class="score_span">10.0</span>
											<span class="status">Tuyệt vời</span>
											<span class="scoreReviewDate" style="font-size: 14px;">19-11-2019</span>
										</div>
										<div class="col-xs-12">
											<span class="customerReviewContent">
												Tour đi tốt, chất lượng, cũng biết là tour đi ghép đoàn nhưng nên chuẩn bị nón cho khách cùng màu với mọi người thì tốt hơn. VÌ đi cả đoàn mọi người nón trắng, chỉ có nhóm khách tôi là nón vàng. Nên cảm giác hơi lạc lỏng, NGoài ra thì dịch vụ còn lại đều tốt hết.
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="customerReview">
								<div class="line" style=" border-bottom: 1px solid #ddd;margin: 8px 0;"><p style="color: white">i</p></div>
								<div class=" col-sm-3 col-md-3 ">
									<div class="row">
										<div class="customerReviewName">
											<span class="glyphicon glyphicon-user"></span>
											<span> Lê Khắc Định</span>
										</div>
									</div>
								</div>
								<div class=" col-sm-9 col-md-9 ">
									<div class="row">
										<div class="col-xs-12 vspacing3">
											<span class="score_span">10.0</span>
											<span class="status">Tuyệt vời</span>
											<span class="scoreReviewDate" style="font-size: 14px;">19-11-2019</span>
										</div>
										<div class="col-xs-12">
											<span class="customerReviewContent">
												Tour đi tốt, chất lượng, cũng biết là tour đi ghép đoàn nhưng nên chuẩn bị nón cho khách cùng màu với mọi người thì tốt hơn. VÌ đi cả đoàn mọi người nón trắng, chỉ có nhóm khách tôi là nón vàng. Nên cảm giác hơi lạc lỏng, NGoài ra thì dịch vụ còn lại đều tốt hết.
											</span>
										</div>
									</div>
								</div>
							</div>


						</div>

					</div>

					<div class="tvn">
						<h3>Tư Vấn Ngay</h3>
						<p>Để được tư vấn kỹ hơn, Quý Khách vui lòng để lại thông tin liên lạc. DPV sẽ gọi lại ngay!</p>

						<div class="row">
							<div class="col-md-6">
								<form role="form" enctype="multipart/form-data" method="POST" action="{{ route('save-contact') }}">
									@csrf
									<div class="form-group">
										<label for="">Họ tên</label>
										<input class="form-control" id="" required placeholder="Nhập tên của bạn" name="name">
									</div>
									<div class="form-group">
										<label for="">Điện thoại</label>
										<input type="number" class="form-control" id="" required placeholder="Nhập số điện thoại của bạn" name="phone">

									</div>
									<div class="form-group">
										<label for="">Nội dung</label>
										<textarea class="form-control" rows="3" placeholder="Bạn có thắc mắc gì nhỉ?" name="question"></textarea>
									</div>
									<button type="submit" class="btn btn-warning" style="width: 100%;">Đăng kí tư vấn</button>
								</form>
							</div>

							<div class="col-md-6">
								<img src="images/irene.jpg" alt="..." class="rounded-circle" style="width: 200px;height: 200px;margin-left: 72px;">
								<div style="text-align: center;">
									<p style="font-size: 18px;margin-top: 10px;">Tư vấn ngay? Gọi tổng đài</p>
									<a href="#"><p class="header_hotline glyphicon glyphicon-earphone" style="letter-spacing: 2px; font-size: 20px;margin-top: -8px;">0928 0416</p></a>
									<p style="font-size: 15px;">Hỗ trợ dịch vụ 24/24</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- START PHẦN THANH TOÁN -->
			<div class="col-md-4 ">
				<div id="form_thanhtoan">
					<p style="font-weight: bold; font-size: 15px;">Đặt ngay, chỉ 2 phút!! Hoặc gọi (028) 0928 0416.</p>
					<div class="row no-gutters">
						<div class="col-md-7 margin-top-20px">
							<label style="padding-top: 8px;" for="pickDate">Chọn ngày khởi hành:</label>
						</div>

						{{-- Chọn ngày đi --}}
						<div class="col-md-5 margin-top-20px">
							<input type="date" name="date" id="pickDate" class="form-control focus">
						</div>

						{{-- Chọn số ngày --}}
						@php
							$adult_number=2;
							$children_number=2;
							$discount=15;

						@endphp
						<div class="col-md-8 margin-top-20px" style="padding-top: 8px;">
							@php echo $adult_number;@endphp
							<span>Người lớn</span>
							<span style="padding-right: 3px;">-@php echo $discount; @endphp%</span>
							<span style="float:right;font-size: 15px;">@php echo $detail->price*$adult_number; @endphp</span>
						</div>	
						{{-- <div class="col-md-7 margin-top-20px" style="padding-top: 8px;">
							@php echo $adult_number; @endphp
							<span>Người lớn</span>
							<span style="padding-right: 3px;">-@php echo $discount; @endphp%</span>
							<span style="float:right;font-size: 15px;">9.000.000</span>
						</div> --}}

						<div class="col-md-4 margin-top-20px">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-default minus_plus" onclick="" class="button_minus btn-block"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-default minus_plus" onclick="" class="button_plus btn-block"><i class="fa fa-plus"></i></button>
							</div>
						</div>

						<div class="col-md-8 margin-top-20px" style="padding-top: 8px;">
							<span>2</span>
							<span>Trẻ em</span>
							<span style="padding-right: 3px;">-15%</span>
							<span style="float:right;font-size: 15px;">@php echo $detail->price*$adult_number; @endphp</span>
						</div>

						<div class="col-md-4 margin-top-20px">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-default minus_plus" onclick="" class="button_minus btn-block"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-default minus_plus" onclick="" class="button_plus btn-block"><i class="fa fa-plus"></i></button>
							</div>
						</div>	

						<div class="col-md-6 margin-top-20px">
							<p style="font-size: 16px;">Tổng cộng</p>
						</div>	

						<div class="col-md-6 margin-top-20px">
							<p class="total_price">@php echo $detail->price*$adult_number+$detail->price*$children_number; @endphp</p>
						</div>		

						<div class="col-md-12">
							<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MODALX" style="width: 100%;">Yêu cầu đặt Tour</button>
						</div>
					</div>
				</div>

				<div>
					<a href="#ctr_tour">Chương trình Tour</a>
				</div>
			</div>
			<!-- END PHẦN THANH TOÁN -->
		</div>


		<!-- START TOUR LIÊN QUAN -->
		<div class="tlq_title">
			<a href="#"><p style="margin-left: 20px;font-size: 19px;padding-top: 10px;">Xem thêm các tour liên quan<span class="glyphicon glyphicon-chevron-right" style="font-size: 16px;"></span></p></a>

			<div class="row tlq">
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>	
		<!-- END TOUR LIÊN QUAN -->


		<!-- START TOUR VỪA XEM -->
		<div class="tlq_title1">
			<a href="#"><p style="margin-left: 20px;font-size: 19px;padding-top: 10px;">Xem thêm các tour bạn vừa xem<span class="glyphicon glyphicon-chevron-right" style="font-size: 16px;"></span></p></a>

			<div class="row tlq">
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>	
		<!-- END TOUR VỪA XEM -->				
	</div>

	<div class="modal fade in" id="MODALX" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Xác nhận đặt tour</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="store" method="POST" role="form" onsubmit="return validate();">   
						@csrf    
						<input type="hidden" name="id_tour" value="{{$detail->id}}">
						<input type="hidden" name="time" value="{{$detail->departure}}">
						<div class="form-group">
							<label for="">Họ và tên(*)<span id="noti_name" class="noti"></span></label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" onblur="checkName();if (this.value=='') {this.focus();}">
						</div>

						<div class="form-group">
							<label for="">Số điện thoại(*)<span id="noti_phone" class="noti"></span></label>
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" onblur="checkPhone();if (this.value=='') {this.focus();}">
						</div>

						<div class="form-group">
							<label for="">Email(*)<span id="noti_email" class="noti"></span></label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Email" onblur="checkEmail();if (this.value=='') {this.focus();}">
						</div>

						<div class="form-group">
							<label for="">Hình thức thanh toán(*)</label>
							<select name="pay" id="pay" class="form-control">
								<option value="1">Thanh toán trực tuyến</option>
								<option value="2">Thanh toán tại chi nhánh</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Số tài khoản<span id="noti_bank" class="noti"></span></label>
							<p>(Chỉ bắt buộc khi bạn chọn thanh toán trực tuyến, nếu bỏ trống sẽ mặc định là thanh toán tại chi nhánh)</p>
							<input type="text" class="form-control" id="bank" name="bank" placeholder="Số tài khoản..." onblur="checkBank();if (this.value=='') {this.focus();}">
						</div>


						<div class="form-group">
							<label for="">Yêu cầu khác</label>
							<input type="text" class="form-control" id="" name="note" placeholder="Yêu cầu khác...">
						</div>

					</div>
					<div class="modal-footer">
						<button type="reset"  class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Xác nhận</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	@endsection

</body>
</html>