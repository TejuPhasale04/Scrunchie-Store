<!DOCTYPE html>
<head>
    <title>Scrunchie Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<style>
    body {
        background : #e6e6fa;
    }
    .card{   
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
        width: 300px;
        height: 400px;
        margin-bottom: 50px;
        margin-left: 50px;
        margin-top: 50px;
        margin-right: 50px;
        }

        .box{
            display:flex ;
            /* flex-wrap: wrap; */
        }
        .row{
            overflow-x: scroll;
            /* overflow-wrap: break-word; */
            
        }
    input[type="submit"]{
        padding : 15px 25px;
        border : none;
        border-radius : 5px;
        cursor : pointer;
        font-size : 16px;
        font-weight : bold;
        background : #dcd0ff;
    }
    input[type="text"]{
        text-align: center;
        padding : 10px 0px;
        border : none;
        border-radius : 5px;
        margin-left: 10px;
        cursor : pointer;
        font-size : 14px;
    }
</style>
<body>
    <?php include 'Navbar.php' ?>
    <div class="row">
    <?php 
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'ytshoppingcart');

    $query = "SELECT * FROM ytshoppingcart";

    $queryfire = mysqli_query($con,$query);

    $num = mysqli_num_rows($queryfire);

    if($num >0){
        while($product = mysqli_fetch_array($queryfire)){
            ?>
            <div class = "box">
            <form action="My cart.php" method="POST">
                    <div class="card">
                        <h3 class="card-title">
                            <?php echo $product['name']; ?>
                        </h3>
                        <div class="card-body">
                            <img src="<?php echo $product['image'] ?>" alt="phone" class="img-fluid" width="140" height="140" />
                            <h3> &#8377; <?php echo $product['price']; ?></h3>
                            <span>(<?php echo $product['discount']; ?>% off)</span>
                            <input type="text" name="quantity" class="form-control" placeholder="Quantity"/>
                        </div>
                        <div class="btn-group">
                            <br>
                            <center>
                            <input type="submit" name="b1" value="Buy Now" />
                            </center>
                                
        
                        
        </div>
                </form>
            </div>

    <?php
        }
    }

    ?>

</div>
</body>