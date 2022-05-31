<?php

include("includes/db.php");
include("includes/header.php");
?>

<?php


$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";


$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);
if($check_product == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_product = mysqli_fetch_array($run_product);
$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$pro_label = $row_product['product_label'];

$pro_psp_price = $row_product['product_psp_price'];

$pro_features = $row_product['product_features'];

//$pro_video = $row_product['product_video'];

$status = $row_product['status'];

$pro_url = $row_product['product_url'];

if($pro_label == ""){


}
else{

$product_label = "

<h2>$pro_label</h2>

";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

?>
<link rel="stylesheet" href="styles/details.css">
</head>
<body background="images/bg.jpg">
<section id="home" >
        <header id="header" class="header">
            <img src="images/logo.png" alt="La Fleur" class="logo">
            <ul class="nav-links">
                <li>
                    <a href="#" data-text="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="#best-sales" data-text="Nos meilleures ventes">Nos meilleures ventes</a>
                </li>
                <li>
                    <a href="#plants" data-text="Nos plantes">Nos plantes</a>
                </li>
                <li>
                    <a href="#Inscription" data-text="Inscription">Inscription</a>
                </li>
                 <li>
                    <a href="login.php" data-text="Connexion">Connexion</a>
                </li>
            </ul>
            <ul class="nav-links panier">
                <li>
                    <a href="panier.php" data-text="Panier" ><image src="images/panier.png" alt="Panier" class="img-panier"></a>
                </li>
            </ul>
            <div class="burger-container">
                <div class="burger"></div>
        </header>
    </section>
    <section id="zone-products" class='zone-products'>

<?php
echo"
<section id='details-products' class='detail-prod'>
    <div class='detail-img'>
        <image src='admin_area/product_images/$pro_img1' alt='photo 1 du produit' class='img-prod'>
    </div>
    <div class='detail-info'> 
        <div class='detail-detail'>
            <h3> $pro_title </h3>
            <h4>Type:  $p_cat_id </h4>
        </div>
        <div class='detail-garanti-fraicheur'>
            <image src='images/Garantie_Fraicheur.png' alt='logo garantie fraicheur' class='img-garanti-fraicheur'>
        </div>
        <div class='detail-btn-quantité'>
            <p>Quantité : </p>
            <select name='product_qty' class='select-style ' >
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <div class='detail-btn-ajout-panier'>
        <form method='post' action='panier.php?action=add&pid=$pro_id '>
            <input type='text' class='product-quantity' name='quantity' value='1' size='2' />
                <input type='submit' value='Ajouter' class='btnAddAction' />
            
                    </form>           
        </div>
    </div>
</section>
<section id='details-products-desc' class='detail-prod-desc'>
    <h2>Description</h2>
    $pro_desc
</section>
";


?>
</section>
</body>
</html>
<!--class='btn-ajout-panier'  name='Ajouter' href='panier.php?action=ajout&amp;l=$pro_title&amp;q=1&amp;p=$pro_psp_price'-->
<!--<button type='submit' value='Add to Cart' class='btn-ajout-panier'> Ajouter</button>-->
<?php } ?>
