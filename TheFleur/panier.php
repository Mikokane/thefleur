<?php

//code for Cart

$con = mysqli_connect("localhost","root","","fleur_store");
//if(!isset($_SESSION["cart_item"])){
        session_start();
//}else{
//    echo'ok';
//}
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
                        echo 'result'.$pid;
			$result=mysqli_query($con,"SELECT * FROM products WHERE product_id='$pid'");
                        $productByCode=mysqli_fetch_array($result);
                        if(isset($productByCode)){
                            echo $productByCode["product_id"];
                        }else{
                            echo error;
                        }
	          while($productByCode){
			$itemArray = array($productByCode["product_id"]=>array('product_id'=>$productByCode["product_id"], 'product_title'=>$productByCode["product_title"], 'quantity'=>$_POST["quantity"], 'product_price'=>$productByCode["product_price"], 'product_img1'=>$productByCode["product_img1"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["product_id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["product_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
                            if ($_GET["pid"] == $k) {
                        unset($_SESSION["cart_item"][$k]);
                    }
                    if (empty($_SESSION["cart_item"])) {
                        unset($_SESSION["cart_item"]);
                    }
                }
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}

?>
<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="panier.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">id</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["product_price"];
		?>
				<tr>
                                    <td><img src="admin_area/product_images/<?php echo $item["product_img1"]; ?>" class="cart-item-image" /><?php echo $item["product_title"]; ?></td>
				<td><?php echo $item["product_id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["product_price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                                <td style="text-align:center;"><a href="panier.php?action=remove&pid=<?php echo $item["product_id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["product_price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>