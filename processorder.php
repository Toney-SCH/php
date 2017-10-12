<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Bob's汽配商店</h1>
<h2>订购结果</h2>
<?php
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $totalqty = null;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    if($totalqty==0){
    	echo "you did not anything on the previous page!<br/>";
    }else{
    echo "Item order 总数量：".$totalqty."<br>";
    //定义各个物品价格常量
    define('TIREPRICE',100);
    define('OILPRICE',10);
    define('SPARKPRICE',4);
    if($tireqty<10){
    	$discount = 0;
    }
    if(($tireqty>10)&&($tireqty<50)){
    	$discount = 5;
    }
    if($tireqty>50){
    	$discount = 10;
    }
    $totalamount = $tireqty*TIREPRICE*(1-$discount/100) + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
    //number_format:小数点
    echo '金额总计:$'.number_format($totalamount,2).'<br>';
    $taxrate = 0.1;
    $totalamount = $totalamount*(1+$taxrate);
    echo "total including rate :".number_format($totalamount,2).'<br>';
	echo "<p>订购时间：".date('Y-n-s , h:i:s')."</p>";
	if($tireqty>0){
		echo "轮胎：".$tireqty."个<br/>";
	}elseif($oilqty>0){
		echo "机油:"." $oilqty"." 瓶"."<br/>";
	}elseif($sparkqty>0){
		echo '火花塞'.$sparkqty.'个<br/>';
	}

  $find = $_POST['find'];

if($find=="a"){
    echo "<p>Regular customer.</p>";
}elseif($find=="b"){
    echo "<p>customer referred by TV advert.</p>";
}elseif($find=="c"){
    echo "<p>Customer referred by phone directory.</p>";
}elseif($find=="d"){
    echo "<p>Customer referred by world of mouth.</p>";
}else{
  echo "<p>We do not konw this customer found us.</p> ";
}

switch($find){
	case "a":
	  echo "<p>Regular customer.</p>";
	break;
	case "b":
	  echo "<p>customer referred by TV advert.</p>";
	break;
	case "c":
	  echo "<p>Customer referred by phone directory.</p>";
	break;
	case "d":
	  echo "<p>Customer referred by world of mouth.</p>";
	break;
	default:
	 echo "<p>We do not konw this customer found us.</p> ";

	}
}

?>

</body>
</html>
