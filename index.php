<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"">
    <meta name="HandheldFriendly" content="true">
    <link href="style/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
            <a href="index.php?page=dostavka">
                Доставка
            </a>
        </div>
    </div>
</header>

    <?php
/////////////////////////////////////////////////////////
    $f_json = 'tem/scratch.json';
    $newperem= 10;
    $newperem= 9;
    $json = file_get_contents("$f_json");
    $ob = json_decode($json,true);
    $objs = $ob[product];
    for ($c=0;$c<count($objs);$c++){
        $objs[$c]['id'] = $c;
    }



if(isset($_POST["start1"])){
    $name = htmlspecialchars( $_POST["Имя"]);
    $nomer = htmlspecialchars( $_POST["nomer"]);
    $email = htmlspecialchars( $_POST["email"]);
    $prodname = htmlspecialchars( $_POST["tovar"]);
    $name = urldecode( $_POST["Имя"]);
    $nomer = urldecode( $_POST["nomer"]);
    $email = urldecode( $_POST["email"]);
    $prodname = urldecode( $_POST["tovar"]);
    $name = trim( $_POST["Имя"]);
    $nomer = trim( $_POST["nomer"]);
    $emali = trim( $_POST["email"]);
    $prodname = trim( $_POST["tovar"]);



    mail($emali, "Заказ", "ФИО:".$name ." E-mail: ".$email." Номер телеона: ".  $nomer . " Название товара ".  $prodname,
        "From: host1825783@semkinshop.ru \r\n");
}



    $host = 'mysql: 3306';
    $database = 'site';
    $user = "admin";
    $password = "1234";




    $conn = mysqli_connect($host,$user,$password,$database);
    if(isset($_POST["start"])){
        $name = htmlspecialchars( $_POST["name"]);
        $message = htmlspecialchars( $_POST["message"]);
        if(($name != "")  && ($message != "")){

            $sql = 'INSERT INTO comments ( name, message) VALUE( "' . $name . '","' . $message . '")';

            $result = mysqli_query($conn, $sql);
        }

    }



    $sql = 'SELECT * FROM comments';
    $result = mysqli_query($conn, $sql);


    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


    for ($i=0;$i<count($rows);$i++){
        $ot = $ot . "\n" . "\n" .$rows[$i]["name"] . " ". $rows[$i]["date_tame"] . "\n" . $rows[$i]["message"];
    }

    //$_SESSION["chat"] = $ot;
    $param = $ot;
//    mysqli_close($conn);


    for ($c=0;$c<count($objs);$c++){
        $objs[$c]['sql'] =  $param;
    }
    //echo "<pre>"; print_r($objs); echo "</pre>";






    $page = $_GET['page'];
    //c



    $o = 1;
    $vid=1;
    $id = 0;
    $date = 0;
    $pr =1;

    $vr =0;
    $vdate = 0;
    $dop = "";

    $sql11 = 'SELECT * FROM `r`';
    $result11 = mysqli_query($conn, $sql11);


    $rows11 = mysqli_fetch_all($result11, MYSQLI_ASSOC);
    //echo "<pre>"; print_r( $rows11); echo "</pre>";







    if(isset($_POST["start"])) {
        $id = htmlspecialchars($_POST["hello"]);

        $sql5 = 'SELECT region FROM `r` WHERE ID = ' . $id;
        $result5 = mysqli_query($conn, $sql5);
        $region = mysqli_fetch_all($result5, MYSQLI_ASSOC);




        $vr = 1;
        //echo "<pre>"; print_r( $id); echo "</pre>";
    }









    if(isset($_POST["start2"])) {
        $date= htmlspecialchars($_POST["date"]);
        $datеd= $date;
        $id = htmlspecialchars($_POST["r"]);
        //echo "<pre>"; print_r( $id); echo "</pre>";
        $sql2 = 'SELECT * FROM `rz`';
        $result2 = mysqli_query($conn, $sql2);
        $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

        $sql4 = 'SELECT vrm FROM `r` WHERE ID = ' . $id;
        $result4 = mysqli_query($conn, $sql4);
        $vrm = mysqli_fetch_all($result4, MYSQLI_ASSOC);
        $sql9 = 'SELECT region FROM `r` WHERE ID = ' . $id;
        $result9 = mysqli_query($conn, $sql9);
        $region = mysqli_fetch_all($result9, MYSQLI_ASSOC);
        //echo "<pre>"; print_r( $vrm); echo "</pre>";
        //echo "<pre>"; print_r( $vrm[0]["vrm"]); echo "</pre>";


        $date = date('Y-m-d ', strtotime($date . " + " . $vrm[0]["vrm"] . "day"));

        $vdate=1;

        //echo "<pre>"; print_r( $datеd); echo "</pre>";
        $d1=strtotime($datеd);
        $d2=strtotime($date);










        $rows5 = [];
        for($d=0;$d<count($rows2);$d++){
            $datev=strtotime($rows2[$d]['datev']);
            $datep=strtotime($rows2[$d]['datep']);


            //"<pre>"; print_r( ($datev < $d1 && $d1 < $datep) ||($datev == $d1)  || ($datep == $d1) ); echo "</pre>";
            if( (($datev > $d1 && $d2 > $datev) || ($datev == $d1) || ($datev == $d2))||
                (($datep > $d1 && $d2 > $datep) || ($datep == $d1) || ($datep == $d2))
            )
            {
                array_push($rows5, $rows2[$d]['kID']);
            }

        }

        //echo "<pre>"; print_r( $rows2); echo "</pre>";
        //echo "<pre>"; print_r( $rows5); echo "</pre>";

        // "<pre>"; print_r( $rows5[0]); echo "</pre>";
        $rows4=[];
        for($i = 1;$i<=10;$i++){
            $k=0;
            for ($i2 = 0;$i2<count($rows5);$i2++){
                if($i == $rows5[$i2]){
                    $k=1;
                }
            }

            if ( $k==0){
                $sql3 = 'SELECT * FROM `k` WHERE ID = ' . $i;
                //echo "<pre>"; print_r( $sql3); echo "</pre>";
                $result3 = mysqli_query($conn, $sql3);
                $rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
                array_push($rows4, $rows3);
            }
        }




        //echo "<pre>"; print_r( $rows2); echo "</pre>";


        //echo "<pre>"; print_r( $rows4); echo "</pre>";

        if(count($rows4)>0){
            $vid = 0;
        }



    }
    if(isset($_POST["start3"])){
        $a= htmlspecialchars($_POST["k"]);
        $b= htmlspecialchars($_POST["r"]);
        $c= htmlspecialchars($_POST["r1"]);
        $d= htmlspecialchars($_POST["r2"]);
        $b = "'". $b. "'";
        $d = "'". $d. "'";
        $a = (int)$a;
        $c = (int)$c;
        //echo "<pre>"; print_r( $a); echo "</pre>";
        //echo "<pre>"; print_r( $c); echo "</pre>";
        //echo "<pre>"; print_r( $b); echo "</pre>";
        $sql7 = 'INSERT INTO `rz`(`rID`, `kID`, `datev`,`datep`) VALUE( ' . $a . ',' . $c . ','  . $d. ',' . $b . ')';
        //echo "<pre>"; print_r( $sql7); echo "</pre>";
        $result7 = mysqli_query($conn, $sql7);




    }

    if(isset($_POST["start4"])){


        $d1= htmlspecialchars($_POST["d1"]);
        $d2= htmlspecialchars($_POST["d2"]);
        $d1=strtotime($d1);
        $d2=strtotime($d2);
        $sql9 = 'SELECT * FROM `rz`';

        $result9 = mysqli_query($conn, $sql9);
        $rows9 = mysqli_fetch_all($result9, MYSQLI_ASSOC);
        $rows10 = $rows9;
        //echo "<pre>"; print_r( $rows9); echo "</pre>";
        for($d=0;$d<count($rows10);$d++){
            $datev=strtotime($rows9[$d]['datev']);
            $datep=strtotime($rows9[$d]['datep']);


            //"<pre>"; print_r( ($datev < $d1 && $d1 < $datep) ||($datev == $d1)  || ($datep == $d1) ); echo "</pre>";
            if( (($datev > $d1 && $d2 > $datev) || ($datev == $d1) || ($datev == $d2))||
                (($datep > $d1 && $d2 > $datep) || ($datep == $d1) || ($datep == $d2))
            )
            {

            } else {
                unset($rows9[$d]);
            }

        }
        //strtotime($date2)
        $rows9 = array_values($rows9);
        //echo "<pre>"; print_r( $rows9); echo "</pre>";
        //echo "<pre>"; print_r( $d1); echo "</pre>";
        //echo "<pre>"; print_r( $d2); echo "</pre>";
        $pr = 0;

    }



    if (!isset($page)){
        require('tem/main.php');
    } else if ($page == 'shop') {
        require('tem/shop.php');
    } else if ($page == 'product'){
        $id = $_GET['id'];
        $obj = [];
        foreach (/*$goods as $product*/  $objs as $product ) {
            if ($product['id'] == $id){
                $obj = $product;
                break;

            }
        }
        require('tem/openProduct.php');
    } else if ($page == 'dostavka'){
        require('tem/dostavka.php');
    }

    mysqli_close($conn);
     ?>


</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                pochta@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 000 000 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, улица, номер дома
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>