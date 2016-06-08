<?php 
	class Product_Model extends Model
	{
		function __construct() {
			parent::__construct();
	        $controller  = new Controller();
    	}

    	/*====================================================================================*/
		/*======================== GET INFOMATION MENU ======================================*/
		/*====================================================================================*/
    	public function getProductGroup($groupName = null){
    		$this->db->connect();
    		if($groupName == null){
    			$listGroup = $this->db->excuteQuery('select * from groupbytrademark');
    		}else{
    			$listGroup = $this->db->excuteQuery("select * from groupbytrademark where gruop_url = '$groupName'");
    		}
    		$this->db->disconnet();
    		return $listGroup;
    	}
    	
    	public function getGroupTradeMarkByGroup($groupName = null ){
    		$this->db->connect();
    		if($groupName == null){
    			$listTradeMarkGroup = $this->db->excuteQuery(
    				'select * from trademark_group'
    			);
    		}else{
    			$listTradeMarkGroup = $this->db->excuteQuery(
    				"select * from trademark_group where gruop_url = '$groupName'"
    			);
    		}
    		$this->db->disconnet();
    		return $listTradeMarkGroup;
    	}

    	public function getProductByKeyword($keyword = null){
    		if($keyword == null){
    			return false;
    		}else{
	    		$this->db->connect();

	    		$listProductByKeyWord = $this->db->excuteQuery(
	    			"select * from getallproduct where product_name like '%".$keyword."%' order by product_name asc limit 0,7"
	    		);
	    		$this->db->disconnet();
    		}
    		return$listProductByKeyWord;
    	}

    	
    	/*====================================================================================*/
		/*======================== GET ALL PRODUCT ======================================*/
		/*====================================================================================*/
		public function getAllProduct($groupName = null , $trademarkName = null , $limitFrist= null , $limitLast= null){
			$this->db->connect();
			if($groupName == null && $trademarkName == null){
				$listProduct = $this->db->excuteQuery(
					'select * from getallproduct order by product_name asc '
				);
			}else if($groupName != null && $trademarkName == null){
				$listProduct = $this->db->excuteQuery(
					"select * from getallproduct where gruop_url = '$groupName' order by product_name asc "
				);
			}else if($groupName != null && $trademarkName != null){
				$listProduct = $this->db->excuteQuery(
					"select * from getallproduct where trademark_url = '$trademarkName' and gruop_url = '$groupName'  order by product_name asc"
				);
			}

			$this->db->disconnet();

			return $listProduct;
		}

		/*====================================================================================*/
		/*======================== GET PRODUCT FEARTURE ======================================*/
		/*====================================================================================*/
		public function getAllProductByFeature($groupName = null ,$trademarkName = null){

			$this->db->connect();

			if($groupName == null  && $trademarkName == null){
				$listProduct = $this->db->excuteQuery(
					'select * from getallproduct where product_feature = true order by product_name asc'
				);
			}else if($groupName != null  && $trademarkName == null){
				$listProduct = $this->db->excuteQuery(
					"select * from getallproduct where gruop_url ='$groupName' order by product_id desc limit 0,8"
				);
			}else if($groupName != null  && $trademarkName != null){
				$listProduct = $this->db->excuteQuery(
					"select * from getallproduct where trademark_url = '$trademarkName' and gruop_url = '$groupName' order by product_name asc limit 0,8"
				);
			}

			$this->db->disconnet();

			return $listProduct;
		}
		/*====================================================================================*/
		/*======================== GET PRODUCT DETAIL ======================================*/
		/*====================================================================================*/

		public function getDetailProductByUrl($groupName,$trademarkName,$productUrl){
			$this->db->connect();
			
			$product = $this->db->excuteQuery(
				"select * from getallproduct where gruop_url = '$groupName' and trademark_url = '$trademarkName' and product_url = '$productUrl' order by product_name asc"
			);

			$this->db->disconnet();

			return $product;
		}
		public function getDetailProductByUrlDetail($productUrl){
			$this->db->connect();
			$product = $this->db->excuteQuery(
				"select * from productbydetail where product_url = '$productUrl'"
			);

			$this->db->disconnet();

			return $product;
		}

		/*====================================================================================*/
	/*============================ PRODUCT ORDER =========================================*/
	/*====================================================================================*/
	public function OrderProduct($customer_name=null,$customer_address=null,$customer_email_last=null,$customer_phone_first=null,$customer_phone_last=null,$customer_idcard=null,$product_name=null){
		$this->db->connect();
			$result = $this->db->insertQuery(
			"INSERT INTO customer_order(product_name
						,product_order_customer_name
					    ,product_order_customer_address
					    ,product_order_customer_email
					    ,product_order_customer_phone1
					    ,product_order_customer_phone2
					    ,product_order_customer_idcard)
					    VALUES ('".$product_name."'
					    	  ,'".$customer_name."'
					    	  ,'".$customer_address."'
					          ,'".$customer_email_last."'
					    	  ,'".$customer_phone_first."'
					    	  ,'".$customer_phone_last."'
					    	  ,'".$customer_idcard."'
					    )"
		);
		if($result == true)
			return true;
		else
			return false;	
		$this->db->disconnet();
		
		}
	}


?>