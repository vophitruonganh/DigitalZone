<?php
	interface Product_Interface{
		function __construct();
		function Laptop($trademarkName = null ,$detailInfo = null,$noInclude = true);
		function Accessories($trademarkName = null ,$detailInfo = null,$noInclude = true);
		function SmartPhone($trademarkName = null ,$detailInfo = null,$noInclude = true);
	}
?>