

$(document).ready(function(){
	$("#customer-order").click(function(){
		var order_product = new Array($("#InputName").val(),$("#InputAddress").val() ,$("#InputEmailFirst").val(),$("#InputEmailSecond").val(),$("#InputPhone1").val(),$("#InputPhone2").val(), $("#InputIdCard").val(), $("#InputProduct").val());
		switch(order_product.length > 0){
			case $.trim(order_product[0]) == '':
				$("#InputName").focus();
			break;
			case $.trim(order_product[1]) == '':
				$("#InputAddress").focus();
			break;
			case $.trim(order_product[2]) == '':
				$("#InputEmailFirst").focus();
			break;
			case $.trim(order_product[3]) == '':
				$("#InputEmailSecond").focus();
			break;
			case $.trim(order_product[4]) == '':
				$("#InputPhone1").focus();
			break;
			case $.trim(order_product[5]) == '':
				$("#InputPhone2").focus();
			break;
			case $.trim(order_product[6]) == '':
				$("#InputIdCard").focus();
			break;
			case $.trim(order_product[7]) == '':
				$("#InputProduct").focus();
			break;
			default:
				var data = '/product/customerorder/'
						+order_product[0].replace('/','-')+'/'
						+order_product[1].replace('/','-')+'/'
						+order_product[2].replace('/','-')+'/'
						+order_product[3].replace('/','-')+'/'
						+order_product[4].replace('/','-')+'/'
						+order_product[5].replace('/','-')+'/'
						+order_product[6].replace('/','-');
		        $.post(
		        		data,
		        		function(message){
		        			
		        			$("#result_order").html(message);
		        			$("#result_order").show();

		        			$("#InputName").val(null);
		        			$("#InputAddress").val(null);
		        			$("#InputEmailFirst").val(null);
		        			$("#InputEmailSecond").val(null);
		        			$("#InputPhone1").val(null);
		        			$("#InputPhone2").val(null);
		        			$("#InputIdCard").val(null);
		        		},
		        		'text'
		        );
			break;
		}

		$("#result_order").click(function(){
			$("#result_order").hide(100);
		})
    })
});

