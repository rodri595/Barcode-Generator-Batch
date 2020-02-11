<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 3%">
		<?php
		include 'barcode128.php';
		$new = (int)$_POST['product_id'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b></b></span>".bar128(stripcslashes($new))."<span ><b></b><span></p>&nbsp&nbsp&nbsp&nbsp";
			$new = $new + 1;

		}

		?>
	</div>
</body>
</html>