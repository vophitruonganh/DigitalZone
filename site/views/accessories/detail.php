<div id="wapper_main">
    <div id="wapper_main_content">
        <?php foreach($this->productInfo as $key=>$value): ?>

        <div id="group-product-title" class="navbar navbar-default" style="padding: 25px 10px;" >
        
            <div class="col-lg-7 col-md-7 col-xs-12 small">
                <h2 class="text-center"><?php echo strtoupper($value->product_name);?></h2>
                <img class="img-responsive" src="<?php echo URL_SITE; ?>public/images/product/<?php echo $value->product_avata; ?>"/>
            </div>
        <?php endforeach; ?>
            
            <div class="col-lg-5 col-md-6 col-xs-12 small" >
            <?php if(sizeof($this->productInfoDetail) != null):?>
            <?php foreach($this->productInfoDetail as $key=>$value):?>
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
                            <td><?php if($value->product_detail_ram == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_OS;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">CPU</td>
                            <td><?php if($value->product_detail_cpu == ''){ echo "Đang Cập Nhật";} else{ echo $value->product_detail_cpu;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">RAM</td>
                            <td><?php if($value->product_detail_ram == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_ram;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">CARD MÀN HÌNH</td>
                            <td><?php if($value->product_detail_vga == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_vga;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">BỘ NHỚ</td>
                            <td><?php if($value->product_detail_memory == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_memory;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">ĐĨA QUANG</td>
                            <td><?php if($value->product_detail_dvd == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_dvd;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">NETWORK CARD</td>
                           
                            <td><?php if($value->product_detail_wireless == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_wireless;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">ĐỘ PHÂN GIẢI</td>
                            <td><?php if($value->product_detail_resolution == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_resolution;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">CỔNG GIAO TIẾP</td>
                            <td><?php if($value->product_detail_interface == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_interface;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">SIZE</td>
                            <td><?php if($value->product_detail_size == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_size;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">PIN/Battery</td>
                            <td><?php if($value->product_detail_battery == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_battery;} ?></td>
                        </tr>
                        <tr class="danger">
                            <td style="border-right: 1px solid #ccc;">TRỌNG LƯỢNG</td>
                            <td><?php if($value->product_detail_weight == ''){echo "Đang Cập Nhật";} else{ echo $value->product_detail_weight;} ?></td>
                        </tr>
                        <tr class="success">
                            <td style="border-right: 1px solid #ccc;">HANG SẢN XUẤT</td>
                            <td><?php if($value->trademark_name == ''){echo "Đang Cập Nhật";} else{ echo strtoupper( $value->trademark_name);} ?></td>
                        </tr>
                    </tbody>
               
                    <?php endforeach;?>
                </table>
            
                <div class="btn-group" style="margin: -20px 0px 0px 0px;">
                  <a class="order-products-info btn btn-danger" href="#"><?php echo number_format($value->product_price) . " VND"; ?></a>
                  <a class="more-products-info btn btn-success" href="#order">MUA NGAY</a>
              </div>
            <?php else:?>
                <table class="table" style="margin-bottom:  20x">
                    <thead>
                        <tr>
                            <th class="text-center">TÊN LOẠI</th>
                            <th class="text-center">THÔNG SỐ KỸ THUẬT</th>
                            
                        </tr>
                    </thead>
                     <tbody>
                        <tr class="success">
                            <td>CPU</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>RAM</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="success">
                            <td>CARD MÀN HÌNH</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>BỘ NHỚ</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="success">
                            <td>ĐĨA QUANG</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>WLAN CARD</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="success">
                            <td>WIFI CARD</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>ĐỘ PHÂN GIẢI</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="success">
                            <td>CỔNG GIAO TIẾP</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>KẾT NỐI KHÁC</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="success">
                            <td>PIN/Battery</td>
                           <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>TRỌNG LƯỢNG</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                        <tr class="danger">
                            <td>HÃNG SẢN XUẤT</td>
                            <td>Đang Cập Nhật</td>                        </tr>
                    </tbody>
                </table>
                <div class="btn-group" style="margin: -20px 0px 0px 0px;">
                  <a class="order-products-info btn btn-success" href="#"><?php echo number_format($value->product_price) . " VND"; ?></a>
                  <a class="more-products-info btn btn-danger" href="#order">MUA NGAY</a>
              </div>
            <?php endif; ?>
            </div>
            <div  class="container ">
            <div class="row">
                <form role="form">
                    <div id="order" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small" style="margin-top: 0px;">
                        <hr><h2 class="text-center">ĐĂNG KÝ MUA SẢN PHẨM</h2><hr>
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label for="InputName">HỌ TÊN KHÁCH HÀNG</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Họ Tên Khách Hàng" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">ĐỊA CHỈ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Nhập Địa Chỉ" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">EMAIL KHÁCH HÀNG</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Email Khách Hàng" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">NHẬP LẠI EMAIL</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Nhập lại Email" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            </div>
                        </div>
                    
                      
                    </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                            <label for="InputName">SỐ ĐIỆN THOẠI KHÁCH HÀNG</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Số Điện Thoại" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">SỐ ĐIỆN THOẠI DỰ PHÒNG</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Số Điện Thoại Dự Phòng" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">SỐ CHỨNG MINH THƯ</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Số Chứng Minh Nhân Dân" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="InputEmail">CÁCH THỨC THANH TOÁN</label>
                            <div class="input-group">
                                <select class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Nhập Địa Chỉ" required>
                                    <option> Thanh Toán Trực Tiếp</option>
                                    <option> Chuyển Khoản Ngân Hàng</option>
                                    <option> Mua Trả Góp</option>
                                </select>
                                <span class="input-group-addon"></span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="InputMessage">THÔNG TIN KHÁC</label>
                            <div class="input-group">
                                <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required placeholder="Mô tả địa điểm giao hoặc thông tin khác. "></textarea>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="btn-group">
                
                        <input style="height: 50px;" type="submit" name="submit" id="submit" value="ĐẶT HÀNG"  class=" from-control btn btn-success  col-lg-6 "/>
                        <input style="height: 50px;" type="reset" name="reset" id="reset" value="NHẬP LẠI" class="btn btn-danger col-lg-6 ">
                        </div>
                    </div>

                    
                </form>
                <!--div class="col-lg-5 col-md-push-1">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                        </div>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                        </div>
                    </div>
                </div!-->
            </div>
            </div>
            


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small" style="margin-top: 0px;">
                <hr><h2 class="text-center">FEATURE PRODUCT</h2><hr>
            </div>
             <?php foreach($this->listProduct as $key=>$value): ?>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3" style="padding: 10px 10px 10px 10px; ">
                <a href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url); ?>">
                    <img class="img-responsive img-resize" src="<?php echo URL_SITE; ?>public/images/product/<?php echo $value->product_avata; ?>" alt="" class="avata-product"/>
                </a>

                <h3 class="text-center text-uppercase title">
                    <a class=" text-info" href="/product/<?php echo $value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url); ?>">
                    <?php echo substr($value->product_name,0,25);?>
                    </a>
                </h3>
                <h4 class="subitem-price text-uppercase text-center"><?php echo number_format($value->product_price).' VND'?></h4>
                <small class="info-products">During the early days of SSDs ,During the early days of SSDs During the early days of SSDs During the early days of SSDs .</small>
                 <div class="btn-group">
                  <a class="order-products-info btn btn-success" href="#">ĐẶT HÀNG</a>
                  <a class="more-products-info btn btn-danger" href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url .'/'.$value->trademark_url.'/'. strtolower($value->product_url);?>">CHI TIẾT</a>
                </div>
            </div>
          <?php endforeach; ?>
        </div>

    </div>
    </div>
</div>