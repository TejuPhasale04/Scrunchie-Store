<!DOCTYPE html>
<head>
    <title>Scrunchie Store</title>
</head>
<style>
    body {
        background : #e6e6fa;
    }

    form{
        margin-left : 400px;
    } 
    h2{
        margin-left : 500px;
    }
    input[type="submit"]{
        padding : 10px 20px;
        border : none;
        border-radius : 12px;
        cursor : pointer;
        font-size : 16px;
        font-weight : bold;
        background : #dcd0ff;
        margin-left : 98px
    }
    input[type="text"]{
        padding : 20px 80px;
        box-sizing: border-box;
        border-radius : 4px;
        cursor : pointer;
        font-size : 16px;
        font-family : times new roman;
    }
    textarea{
        padding : 15px 80px;
        box-sizing: border-box;
        border-radius : 4px;
        cursor : pointer;
        font-size : 17px;
        font-family : times new roman;
    }
</style>
<body>
    <?php include 'Navbar.php' ?>
    <div class="container">
        <br>
            <h2> Get In Touch</h2>
            <form method="POST" >
                <br><br><input type="text" placeholder="Your Name"/>
                <br><br><input type="text" placeholder="Your Email Address"/>
                <br><br><input type="text" placeholder="Your Phone"/>
                <br><br><textarea cols="22" rows="3" placeholder="Feedback"></textarea><br>
                <br><br><input type="submit" value="Send Message" id="b1"/>
            </form>
    </div>
                    <br><br><br><br><br>
                    <center>@vionca.in is Created By GROUP NO. 1</center>
                    <br><br>
</body>