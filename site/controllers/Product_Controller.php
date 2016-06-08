<?php 
	class Product_Controller extends Controller {
		function __construct(){
			
			parent::__construct();
			require PATH_SITE.'/models/Product_Model.php';
		}
		function Index(){
			header("LOCATION:".URL_SITE);
		}

		function Laptop($trademarkName = null ,$detailInfo = null,$noInclude = false){
			$product = new Product_Model();

			if($trademarkName != null && $detailInfo == null) 
			{ // GET THONG TIN THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('laptop');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				

				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('laptop',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('laptop',$trademarkName);
				

				// CALL VIEW
				$this->view->render('laptop'.'/trademark_product');

			}else if($trademarkName != null && $detailInfo != null)
			{// GET THONG TIN CHI TIET THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)

				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('laptop');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				$this->view->listProduct = $product->getAllProduct('laptop',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('laptop',$trademarkName);
				//GET INFO MAIN CONTENTNER
				$this->view->productInfo =  $product->getDetailProductByUrl('laptop',$trademarkName,$detailInfo);
				$this->view->productInfoDetail =  $product->getDetailProductByUrlDetail($detailInfo);
				$this->view->render('laptop'.'/detail');

			}else
			{// GET THONG TIN CHI TIET THEO NHOM SAN PHAM (LAPTOP , SMARTPHONE .....)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->listGroupTitle = $product->getProductGroup('laptop');
				$this->view->nameGroup = $product->getAllProduct('laptop');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				
				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('laptop');
				$this->view->listProductFeature = $product->getAllProductByFeature('laptop');
				
				// CALL VIEW
				$this->view->render('laptop'.'/index');
			}
		}

		function Accessories($trademarkName = null ,$detailInfo = null,$noInclude = false){
			$product = new Product_Model();

			if($trademarkName != null && $detailInfo == null) 
			{ // GET THONG TIN THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('accessories');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				

				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('accessories',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('accessories',$trademarkName);
				

				// CALL VIEW
				$this->view->render('accessories'.'/trademark_product');

			}else if($trademarkName != null && $detailInfo != null)
			{// GET THONG TIN CHI TIET THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)

				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('accessories');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				$this->view->listProduct = $product->getAllProduct('accessories',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('accessories',$trademarkName);
				//GET INFO MAIN CONTENTNER
				$this->view->productInfo =  $product->getDetailProductByUrl('accessories',$trademarkName,$detailInfo);
				$this->view->productInfoDetail =  $product->getDetailProductByUrlDetail($detailInfo);
				$this->view->render('accessories'.'/detail');

			}else
			{// GET THONG TIN CHI TIET THEO NHOM SAN PHAM (LAPTOP , SMARTPHONE .....)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->listGroupTitle = $product->getProductGroup('accessories');
				$this->view->nameGroup = $product->getAllProduct('accessories');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				
				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('accessories');
				$this->view->listProductFeature = $product->getAllProductByFeature('accessories');
				
				// CALL VIEW
				$this->view->render('accessories'.'/index');
			}
		}

		function SmartPhone($trademarkName = null ,$detailInfo = null,$noInclude = false){
			$product = new Product_Model();

			if($trademarkName != null && $detailInfo == null) 
			{ // GET THONG TIN THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('smartphone');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				

				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('smartphone',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('smartphone',$trademarkName);
				

				// CALL VIEW
				$this->view->render('smartphone'.'/trademark_product');

			}else if($trademarkName != null && $detailInfo != null)
			{// GET THONG TIN CHI TIET THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)

				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('smartphone');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				$this->view->listProduct = $product->getAllProduct('smartphone',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('smartphone',$trademarkName);
				//GET INFO MAIN CONTENTNER
				$this->view->productInfo =  $product->getDetailProductByUrl('smartphone',$trademarkName,$detailInfo);
				$this->view->productInfoDetail =  $product->getDetailProductByUrlDetail($detailInfo);
				$this->view->render('smartphone'.'/detail');

			}else
			{// GET THONG TIN CHI TIET THEO NHOM SAN PHAM (LAPTOP , SMARTPHONE .....)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->listGroupTitle = $product->getProductGroup('smartphone');
				$this->view->nameGroup = $product->getAllProduct('smartphone');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				
				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('smartphone');
				$this->view->listProductFeature = $product->getAllProductByFeature('smartphone');
				
				// CALL VIEW
				$this->view->render('smartphone'.'/index');
			}
		}

		function Tablet($trademarkName = null ,$detailInfo = null,$noInclude = false){
			$product = new Product_Model();

			if($trademarkName != null && $detailInfo == null) 
			{ // GET THONG TIN THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('tablet');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				

				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('tablet',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('tablet',$trademarkName);
				

				// CALL VIEW
				$this->view->render('tablet'.'/trademark_product');

			}else if($trademarkName != null && $detailInfo != null)
			{// GET THONG TIN CHI TIET THEO HANG SAN XUAT (ACER , ASUS , APPLE , DELL ......)

				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->nameGroup = $product->getAllProduct('tablet');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				$this->view->listProduct = $product->getAllProduct('tablet',$trademarkName);
				$this->view->listProductFeature = $product->getAllProductByFeature('tablet',$trademarkName);
				//GET INFO MAIN CONTENTNER
				$this->view->productInfo =  $product->getDetailProductByUrl('tablet',$trademarkName,$detailInfo);
				$this->view->productInfoDetail =  $product->getDetailProductByUrlDetail($detailInfo);
				$this->view->render('tablet'.'/detail');

			}else
			{// GET THONG TIN CHI TIET THEO NHOM SAN PHAM (LAPTOP , SMARTPHONE .....)
				
				//GET INFO MENUBAR
				$this->view->listGroup = $product->getProductGroup();
				$this->view->listGroupTitle = $product->getProductGroup('tablet');
				$this->view->nameGroup = $product->getAllProduct('tablet');
				$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
				
				//GET INFO MAIN CONTENTNER
				$this->view->listProduct = $product->getAllProduct('tablet');
				$this->view->listProductFeature = $product->getAllProductByFeature('tablet');
				
				// CALL VIEW
				$this->view->render('tablet'.'/index');
			}
		}
		function Order(){
			$product = new Product_Model();
			$this->view->listGroup = $product->getProductGroup();
			$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();
			$this->view->render('order/index');

		}

		function LiveSearch($keyword = null){
			$product = new Product_Model();
			if($keyword != null){
				
				$listProduct = $product->getProductByKeyword($keyword);
			
				if(sizeof($listProduct) <= 0){
			        	echo '<h2 style=" font-family:tahoma !important;margin:-10px 0px 10px 0px;"class="text-center">Không Tìm Thấy Kết Quả </h2>';
				}else{
					foreach($listProduct as $key => $value){
					echo '<div class="col-lg-3 col-xs-12">';
			        	echo '<div class="subitem">';
			        		echo '<a href="' .URL_SITE .'product/'.$value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url).'">';
			        		echo '<img class="img-responsive img-resize" src="'.URL_SITE.'public/images/product/'.$value->product_avata.'" alt="" class="avata-product"/></a>';

			            echo '<h3 class="text-center text-uppercase title">
			                <a class=" text-info" href="/product/'.$value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url).'">'.
			                substr($value->product_name,0,25).'</a></h3>';
			            echo '<h4 class="subitem-price text-uppercase text-center">'.number_format($value->product_price).' VND </h4>';
						echo '</div>';
					echo '</div>';
					
					}
				}
			}
		}

		function CustomerOrder($customer_name=null,$customer_address=null,$customer_email_last=null,$customer_phone_first=null,$customer_phone_last=null,$customer_idcard=null,$product_name=null)
		{
			$product = new Product_Model();
			if($customer_name != null && $customer_address != null 
				&& $customer_email_last != null && $customer_phone_first != null
				&& $customer_phone_last != null && $customer_idcard !=null 
				&& $product_name != null)
			{
				$result =  $product->OrderProduct($customer_name,$customer_address,$customer_email_last,$customer_phone_first,$customer_phone_last,$customer_idcard,$product_name);

				if($result == true){
					$subject = "DigitalZone - Đơn đặt hàng sản phẩm " + $product_name;
					$info  = 'THÔNG TIN CHI TIẾT NGƯỜI ĐẶT HÀNG\nHỌ TÊN KHÁCH HÀNG : ' + $customer_name 
					+ '\n TÊN SẢN PHẨM : ' + $product_name
					+ '\n EMAIL KHÁCH HÀNG : ' + $customer_email_last
					+ '\n SỐ ĐIỆN THOẠI KHÁCH HÀNG 1 : ' + $customer_phone_first
					+ '\n SỐ ĐIỆN THOẠI KHÁCH HÀNG 2 : ' + $customer_phone_last
					+ '\n ĐƠN HÀNG SẼ ĐƯỢC GIAO TRONG VÒNG 7 NGÀY \n CHÍNH SACHS BẢO HÀNH SẢN PHẨM THAM KHẢO TRÊN WEBSITE
					\n NẾU QUÝ KHÁCH NHẬN THẤY SẢN PHẨM CÓ LỖI VỀ PHẦM CỨNG HAY PHẦN MỀM DIGITALZONE SẼ ĐỔI SẢN PHẨM MỚI TRONG VÒNG 7 NGÀY TÍNH TỪ NGÀY NHẬN HÀNG \n MỌI THÔNG TIN CHI TIẾT VỀ HỖ TRỢ DỊCH VỤ - SẢN PHẨM  & ĐÓNG GÓP Ý KIẾN LIÊN HỆ QUA HOTLINE 01666696151 /n CHÂN THÀNH CÁM ƠN QUÝ KHÁCH ĐÃ SỬ DỤNG DỊCH VỤ CỦA CHÚNG TÔI ';
						//mail($customer_email_last,$subject,$info) or die();
					echo "<h3>Đặt Hàng Thành Công</h3>";
				}
				else{
					echo "Đặt Hàng Thất Bại ";
				}
			}else{
				return false;
			}
			
		}
	}

	
?>