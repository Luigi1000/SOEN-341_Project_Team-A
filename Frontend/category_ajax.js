$(document).ready(function() {
	$("#productCategory1").change(function() {
		var productCategory1_id = $(this).val();
		if(productCategory1_id != "") {
			$.ajax({
				url:"get-productCategory2.php",
				data:{c_id:productCategory1_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#product_category2").html(resp);
				}
			});
		} else {
			$("#product_category2").html("<option value=''>------- Select --------</option>");
		}
	});
	$("#product_category2").change(function() {
		var product_category2_id = $(this).val();
		if(product_category2_id != "") {
			$.ajax({
				url:"get-productCategory3.php",
				data:{c_id:product_category2_id},
				type:'POST',
				success:function(response) {
					var resp = $.trim(response);
					$("#product_category3").html(resp);
				}
			});
		} else {
			$("#product_category3").html("<option value=''>------- Select --------</option>");
		}
	});
});
