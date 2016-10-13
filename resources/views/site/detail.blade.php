@extends('home')
@section('main')
	<div id="wapper_main">
	    <div id="wapper_main_content">
	        <div id="detail_product" class="navbar navbar-default" style="padding: 25px 10px;" >
				@foreach ($products as $key => $value)
	            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 small">
	            	<h2 class="text-center">{{ strtoupper($value->name)}}</h2>
	                <img class=" img-responsive" src="{{  asset('images/product').'/'.$value->image }}">
	            </div>
	            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 small" >
					@foreach($details as $key => $detail)
	                <table class="table" style="border: 1px solid #ccc;">
	                    <thead>
	                        <tr class="danger">
	                            <th class="text-center" style="border-right: 1px solid #ccc;">TÊN LOẠI</th>
	                            <th class="text-center">THÔNG SỐ KỸ THUẬT</th>
	                        </tr>
	                    </thead>
	                     <tbody>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">OS</td>
	                            <td>{{ $detail->product_detail_OS?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="success">
	                            <td style="border-right: 1px solid #ccc;">CPU</td>
	                            <td>{{ $detail->product_detail_cpu?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">RAM</td>
	                            <td>{{ $detail->product_detail_ram?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="success">
	                            <td style="border-right: 1px solid #ccc;">CARD MÀN HÌNH</td>
	                            <td>{{ $detail->product_detail_vga?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">BỘ NHỚ</td>
	                            <td>{{ $detail->product_detail_memory?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="success">
	                            <td style="border-right: 1px solid #ccc;">ĐĨA QUANG</td>
	                            <td>{{ $detail->product_detail_dvd?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">NETWORK CARD</td>
	                            <td>{{ $detail->product_detail_wireless?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">ĐỘ PHÂN GIẢI</td>
	                            <td>{{ $detail->product_detail_resolution?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="success">
	                            <td style="border-right: 1px solid #ccc;">CỔNG GIAO TIẾP</td>
	                            <td>{{ $detail->product_detail_interface?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">SIZE</td>
	                            <td>{{ $detail->product_detail_size?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="success">
	                            <td style="border-right: 1px solid #ccc;">PIN/Battery</td>
	                            <td>{{ $detail->product_detail_battery?:'Đang Cập Nhật' }}</td>
	                        </tr>
	                        <tr class="danger">
	                            <td style="border-right: 1px solid #ccc;">TRỌNG LƯỢNG</td>
	                            <td>{{ $detail->product_detail_weight?:'Đang Cập Nhật' }}</td>
	                        </tr>

	                    </tbody>
	                </table>
	                <div class="btn-group" style="margin: -20px 0px 0px 0px;">
	                  <a class="order-products-info btn btn-danger" href="#">{{ number_format($value->price) . ' VNĐ' }}</a>
	                  <a class="more-products-info btn btn-success" href="#order">BUY NOW</a>
	                </div>
	                @endforeach
	            </div>
				@endforeach
			<div  class="container ">
		        <div class="row">
		            <form id="orderForm" role="form" method="post">
		                <div id="order" class="col-lg-12 col-md-6 col-sm-12 col-xs-12 small" style="margin-top: 0px;">
		                    <hr><h2 class="text-center">ĐĂNG KÝ MUA SẢN PHẨM</h2><hr>
		                </div>
		                <div class="col-lg-6">

		                    <div class="form-group" >
		                        <label for="InputName">HỌ TÊN KHÁCH HÀNG</label>
		                        <div class="input-group">
		                            <input type="text" class="form-control" name="customer_name" id="InputName" placeholder="Họ Tên Khách Hàng" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="InputEmail">ĐỊA CHỈ</label>
		                        <div class="input-group">
		                            <input type="text" class="form-control" id="InputAddress" name="customer_address" placeholder="Nhập Địa Chỉ" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="InputEmail">EMAIL KHÁCH HÀNG</label>
		                        <div class="input-group">
		                            <input type="email" class="form-control" id="InputEmailFirst" name="customer_email" placeholder="Email Khách Hàng" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="InputEmail">NHẬP LẠI EMAIL</label>
		                        <div class="input-group">
		                            <input type="email" class="form-control" id="InputEmailSecond" name="customer_name_validate" placeholder="Nhập lại Email" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
		                        </div>
		                    </div>
		                </div>
		                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		                    <div class="form-group">
		                        <label for="InputName">SỐ ĐIỆN THOẠI KHÁCH HÀNG</label>
		                        <div class="input-group">
		                            <input type="text" class="form-control" name="customer_phone1" id="InputPhone1" placeholder="Số Điện Thoại" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="InputNumber">SỐ ĐIỆN THOẠI DỰ PHÒNG</label>
		                        <div class="input-group">
		                            <input type="text" class="form-control" id="InputPhone2" name="customer_phone2" placeholder="Số Điện Thoại Dự Phòng" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="InputEmail">SỐ CHỨNG MINH THƯ</label>
		                        <div class="input-group">
		                            <input type="text" class="form-control" id="InputIdCard" name="customer_idcard" placeholder="Số Chứng Minh Nhân Dân" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
		                        </div>
		                    </div>

		                    <div class="form-group">
		                        <label for="InputText">SẢN PHẨM</label>
		                        <div class="input-group">
		                           <input type="text" class="form-control" id="customer_product" name="customer_product" disabled="true" value="<?php echo $value->product_name; ?>" placeholder="Tên sản phẩm" required>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
		                        </div>
		                    </div>

		                </div>
		                <div class="col-lg-12">
		                    <div class="form-group">
		                        <label for="InputMessage">THÔNG TIN KHÁC</label>
		                        <div class="input-group">
		                            <textarea id="customer_messager" name="customer_messager" class="form-control" rows="5" required placeholder="Mô tả địa điểm giao hoặc thông tin khác. "></textarea>
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
		                        </div>
		                    </div>
		                    <div class="btn-group">

		                    <input style="height: 50px;" type="button" name="submit" id="customer-order" value="ORDER PRODUCT"  class=" from-control btn btn-success  col-lg-6 "/>
		                    <input style="height: 50px;" type="reset" name="reset" id="reset" value="RESET INFO" class="btn btn-danger col-lg-6 ">
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small" style="margin-top: 0px;">
		        <hr>
	        	<h2 class="text-center">FEATURE PRODUCT</h2>
	        	<hr>
		    </div>
    		@foreach ($feature_products as $key => $feature_product)
		    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 10px 10px 10px 10px; ">
		        <a href="">
		            <img class="img-responsive img-resize" src="{{ URL::to('images/product/',$feature_product->image) }}" alt="" class="avata-product"/>
		        </a>
		        <h3 class="text-center text-uppercase title">
		            <a class=" text-info" href="">
		            	{{ substr($feature_product->name,0,25) }}
		            </a>
		        </h3>
		        <h4 class="subitem-price text-uppercase text-center">{{ number_format($feature_product->price) . ' VNĐ' }}</h4>
		        <small class="info-products">During the early days of SSDs ,During the early days of SSDs During the early days of SSDs During the early days of SSDs .</small>
		         <div class="btn-group">
		          <a class="order-products-info btn btn-success" href="">BUY NOW</a>
		          <a class="more-products-info btn btn-danger" href="">DETAIL</a>
		        </div>
		    </div>
			@endforeach
    	</div>
	</div>
</div>
@overwrite