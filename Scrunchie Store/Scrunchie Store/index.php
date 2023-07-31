<!DOCTYPE html>
<head>
    <title>Scrunchie Store</title>
    
</head>
<style>
    body {
        background : #e6e6fa;
    }
    
    img.rounded-corners {
        border : none;
        border-radius : 300px;
        margin-left : 20px;
    }
    td {
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 50px;
        padding-right: 50px;
        font-size : 20px;
    }
    .container {
        text-align : center;
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
    .box-container {
        display: flex;
        flex-wrap: wrap;
        gap: 6rem;
        padding-left: 50px;
        padding-right: 50px;

    }
    .box-container .box {
        flex: 1 1 30rem;
        text-align: center;
        padding: 0px;
        border: .4rem solid rgba(0,0,0,.3);
        border-radius: .5rem;
        overflow: hidden;
        position: relative;
    }
    .main1 {
    display : flex;
    align-items : center;
    justify-content: center;
    list-style : none;
    }
    .main1 li{
    padding : 25px 30px;
    margin-right: 30px;
    font-size : 20px;
    }
    .main2 {
    display : flex;
    align-items : center;
    justify-content: center;
    list-style : none;
    }
    .main2 li{
    padding : 25px 30px;
    margin-right: 30px;
    font-size : 20px;
    }
</style>
<body>
    <?php include 'Navbar.php' ?>
    <br><br>
        <table>
            <tr>
                <td><img src="Aboutus2.png" alt="banner" class="rounded-corners" width="450" height="450"></td>
                <td><h1>GPA's Online Scrunchie Store</h1><br>
                India's Leading Exclusive ScrunchiesE-Store<br><br><br>
                <form name="imp" method="get" action="Shop.php">
		            <input type="submit" value="Shop Now">
		        </form>
                    
                </td>
            </tr>
        </table>
        
        <div class="container">
            <br><br><br><br>
            <h1>CATEGORIES</h1>
            <br>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="vv">
                    <ul class="main1">
                        <li><img src="C1.png" alt="Satin" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="Satin">
                                </form>
                        </li>
                        <li><img src="c2.png" alt="Organza" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="Quirky">
                                </form>
                        </li>
                        <li><img src="c3.png" alt="Quirky" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="Organza">
                                </form>
                        </li>
                    </ul>
                    <ul class="main2">
                        <li><img src="c4.png" alt="Bubblegum" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="Bubblegum">
                                </form>
                        </li>
                        <li><img src="c5.png" alt="JellyBelly" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="JellyBelly">
                                </form>
                        </li>
                        <li><img src="c6.png" alt="Silk Crepe" style="width:250px;height:250px"><br><br>
                                <form name="imp" method="get" action="Shop.php">
                                    <input type="submit" value="SilkCrepe">
                                </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container">
             @vionca.in is Created By GROUP NO. 1
        </div>
        <br><br><br><br><br>
</body>