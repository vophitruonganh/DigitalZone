<?php


	class Index_Controller extends Controller
	{
		function __construct($groupName = null){
			parent::__construct();
			require PATH_SITE.'/models/Product_Model.php';
			$product = new Product_Model();
			$this->view->listProduct = $product->getAllProduct();
			$this->view->listProductLaptop = $product->getAllProductByFeature('laptop');
			$this->view->listProductSmartPhone = $product->getAllProductByFeature('smartphone');
			$this->view->listProductAccessories = $product->getAllProductByFeature('accessories');
			$this->view->listProductTablet = $product->getAllProductByFeature('tablet');
			$this->view->listProductFeature = $product->getAllProductByFeature();
			$this->view->listGroup = $product->getProductGroup();
			$this->view->listTradeMarkGroup = $product->getGroupTradeMarkByGroup();

		}

		function Index(){
			$this->view->render('index/index');
		}
	}
?>