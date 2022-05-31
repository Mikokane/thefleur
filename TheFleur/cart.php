<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto" rel="stylesheet">
  <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon gif" href="images/Icone4.png" type="image/gi">
  <link href="styles/style.css" rel="stylesheet">

</head>

<body>

  

  <!-- MAIN -->
  



<div id="content"><!-- content Starts -->
<div class="container"><!-- container Starts -->



<div class="col-md-9" id="cart"><!-- col-md-9 Starts -->

<div class="box"><!-- box Starts -->

<form action="cart.php" method="post" enctype="multipart-form-data"><!-- form Starts -->

<h1> Shopping Cart </h1>


<p class="text-muted"> You currently have 0 item(s) in your cart. </p>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table"><!-- table Starts -->

<thead><!-- thead Starts -->

<tr>

<th colspan="2">Product</th>

<th>Quantity</th>

<th>Unit Price</th>

<th>Size</th>

<th colspan="1">Delete</th>

<th colspan="2"> Sub Total </th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->


</tbody><!-- tbody Ends -->

<tfoot><!-- tfoot Starts -->

<tr>

<th colspan="5"> Total </th>

<th colspan="2"> $0.00 </th>

</tr>

</tfoot><!-- tfoot Ends -->

</table><!-- table Ends -->

<div class="form-inline pull-right"><!-- form-inline pull-right Starts -->

<div class="form-group"><!-- form-group Starts -->

<label>Coupon Code : </label>

<input type="text" name="code" class="form-control">

</div><!-- form-group Ends -->

<input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code">

</div><!-- form-inline pull-right Ends -->

</div><!-- table-responsive Ends -->


<div class="box-footer"><!-- box-footer Starts -->

<div class="pull-left"><!-- pull-left Starts -->

<a href="index.php" class="btn btn-default">

<i class="fa fa-chevron-left"></i> Continue Shopping

</a>

</div><!-- pull-left Ends -->

<div class="pull-right"><!-- pull-right Starts -->

<button class="btn btn-default" type="submit" name="update" value="Update Cart">

<i class="fa fa-refresh"></i> Update Cart

</button>

<a href="checkout.php" class="btn btn-primary">

Proceed to checkout <i class="fa fa-chevron-right"></i>

</a>

</div><!-- pull-right Ends -->

</div><!-- box-footer Ends -->

</form><!-- form Ends -->


</div><!-- box Ends -->





<div id="row same-height-row"><!-- row same-height-row Starts -->

















</div><!-- row same-height-row Ends -->


</div><!-- col-md-9 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<div class="box" id="order-summary"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<h3>Order Summary</h3>

</div><!-- box-header Ends -->

<p class="text-muted">
Shipping and additional costs are calculated based on the values you have entered.
</p>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table"><!-- table Starts -->

<tbody><!-- tbody Starts -->

<tr>

<td> Order Subtotal </td>

<th> $0.00 </th>

</tr>

<tr>

<td> Shipping and handling </td>

<th>$0.00</th>

</tr>

<tr>

<td>Tax</td>

<th>$0.00</th>

</tr>

<tr class="total">

<td>Total</td>

<th>$0.00</th>

</tr>

</tbody><!-- tbody Ends -->

</table><!-- table Ends -->

</div><!-- table-responsive Ends -->

</div><!-- box Ends -->

</div><!-- col-md-3 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->





<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>





</body>