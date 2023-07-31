<!DOCTYPE html>
<head>
    <title>Scrunchie Store</title>
</head>
<style>
    body {
        background : #e6e6fa;
    }
    input[type="submit"] {
        padding: 10px 30px;
        border-radius : 4px;
        cursor : pointer;
        font-size : 16px;
        font-family : times new roman;
        background : #dcd0ff;
        font-weight : bold;
        border: none;
    }
    input[type="text"] {
        padding: 10px 30px;
        box-sizing: border-box;
        border-radius : 4px;
        cursor : pointer;
        font-size : 16px;
        font-family : times new roman;
    }
    input[type="number"] {
        padding: 10px 30px;
        box-sizing: border-box;
        border-radius : 4px;
        cursor : pointer;
        font-size : 16px;
        font-family : times new roman;
    }
    #scrunchie{
        border-radius :4px;
        padding : 10px 85px;
        box-sizing: border-box;
        border : bold;
    }
</style>
<body>

    <?php include 'Navbar.php' ?>

            <div class="container">
            
            <form class="myform" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <br>
            <center><h2>Shopping Bag</h2></center>
            <br>
            <center><input type="text" name="name" id="name" required placeholder="Enter your name"></center>
            <br><br>
			<center><select id="scrunchie">
                <option value="All">All</option>
                <option value="Satin">Satin</option>
                <option value="Organza">Organza</option>
                <option value="Quirky">Quirky</option>
                <option value="BubbleGum">BubbleGum</option>
                <option value="JellyBelly">JellyBelly</option>
                <option value="SilkCrepe">SilkCrepe</option>
            </select></center>

            <br><br>
            <center>
            <input type="number" name="quantity" value="1"/>	
            </center>

            <br><br>
            <center><input type="text" name="mob" id="mob" placeholder="Mobile No" required "></center>
            <br><br>
            
            <center><input type="text" name="address" id="address" placeholder="Delivery Address""></center>
            <br><br>
            

            <center><input type="text" name="city" id="city" placeholder="City"/></center>
            
            <br><br>
            <center><input type="text" name="district" id="district" placeholder="District"/></center>
            
            <br><br>
            <center><input type="text" name="state" id="state" placeholder="State"/></center>
            
            <br><br>
            <center><input type="text" name="code" id="code" placeholder="Pin Code"/></center>
            
            <br><br> 
            <center>
            <input type="radio" name="mode"  value="COD" /> COD
            <input type="radio" name="mode"  value="UPI" /> UPI
            </center>
            <br><br>
       
            <center>
                <input type="Submit" id="pay" value="Place Order" style="width:80px height=80px"> 				
            </center>
</form>
                    <br><br><br><br><br>
                    <center>@vionca.in is Created By GROUP NO. 1</center>
                    <br><br>
	</div> 

        <?php
            if(isset($_POST['name']))
            {
            $conn=mysqli_connect("localhost","root");
            mysqli_select_db($conn,'ytshoppingcart');

            if($conn->connect_error)die($conn->connect_error);
        
            $a=$_POST['name'];
            $b=$_POST['scrunchie'];
            $c=$_POST['quantity'];
            $d=$_POST['mob'];
            $e=$_POST['address'];
            $f=$_POST['city'];
            $g=$_POST['district'];
            $h=$_POST['state'];
            $i=$_POST['code'];
            $j=$_POST['mode'];
        
            $query="INSERT INTO cart VALUES('$a','$b','$c','$d','$e','$$f','$g','$h','$i','$j')";
            $result=$conn->query($query);      // $conn object and stores the result in the $result variable.
            if(!$result)
            {
                echo"failed payment,try again";
                die("database failed".$conn->error);
        
            }
            else
            {
                echo'<script>alert("Your order has been placed!!!")</script>';
            } 
        }
        
        ?>


</body>
	