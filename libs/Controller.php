<?php 
	/**
	* 
	*/
	class Controller
	{
		function __construct()
		{
			$this->view = new View();
			
		}
	}

	class Customer_Order{
		var $customer_name = null;
		var $customer_address = null;
		var $customer_email = null;
		var $customer_phone1= null;
		var $customer_phone2 = null;
		var $product_name = null;
		var $customer_idcard = null;
		function __construct( $customer_name = null,
							 $customer_address = null,
							 $customer_email = null,
							 $customer_phone1 = null,
							 $customer_phone2 = null,
							 $product_name = null,
							 $customer_idcard = null){
			$this->customer_name = $customer_name;
			$this->customer_address = $customer_address;
			$this->customer_email = $customer_email;
			$this->customer_phone1 = $customer_phone1;
			$this->customer_phone2 = $customer_phone2;
			$this->product_name = $product_name;
			$this->customer_idcard = $customer_idcard;
		}
	
	}
?>