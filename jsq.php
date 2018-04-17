<html>
	<head>
		<title>PHP实现简单计算器</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
<?php
	$num1=true;
	$num2=true;
	$numa=true;
	$numb=true;
	$message="";
	//单路分支
	if(isset($_GET["sub"])){
		if($_GET["num1"]==""){
			$num1=false;
			$message.="第一个数不能为空";

		}
		if(!is_numeric($_GET["num1"])){
			$numa=false;
			$message.="第一个数不是数字";
		}

		if($_GET["num2"]==""){
			$num2=false;
			$message.="第二个数不能为空";

		}
		if(!is_numeric($_GET["num2"])){
			$numb=false;
			$message.="第二个数不是数字";
		}
		

		if($num1 && $num2 && $numa && $numb) {
			$sum=0;
			//多路分支switch
			switch($_GET["ysf"]){
				case "+":
					$sum=$_GET["num1"]+$_GET["num2"];
					break;
				case "-":
					$sum=$_GET["num1"]-$_GET["num2"];
					break;
				case "x":
					$sum=$_GET["num1"]*$_GET["num2"];
					break;
				case "/":
					$sum=$_GET["num1"]/$_GET["num2"];
					break;
				case "%":
					$sum=$_GET["num1"]%$_GET["num2"];
					break;
			}
		}
	}
?>
	<body>
		<table align="center" border="1" width="500">
			<caption><h1>计算器</h1></caption>
			<form action="jsq.php">
			<tr>
				<td>
					<input type="text" size="5" name="num1" value="<?php echo $_GET["num1"] ?>" >
				</td>
				<td>
					<select name="ysf">
						<option value="+" <?php if($_GET["ysf"]=="+") echo "selected" ?>>+</option>
						<option value="-" <?php if($_GET["ysf"]=="-") echo "selected" ?>>-</option>
						<option value="x" <?php echo $_GET["ysf"]=="x"?"selected":"" ?>>x</option>
						<option value="/" <?php echo $_GET["ysf"]=="/"?"selected":"" ?>>/</option>
						<option value="%" <?php echo $_GET["ysf"]=="%"?"selected":"" ?>>%</option>
					</select>
				</td>
				<td>
					<input type="text" size="5" name="num2" value="<?php echo $_GET["num2"] ?>">
				</td>
				<td>
					<input type="submit" name="sub" value="计算">
				</td>
			</tr>

			<?php
				if(isset($_GET["sub"])){

					echo '<tr><td colspan="5">';
					if($num1 && $num1 && $numa && $numb){
						echo "结果：".$_GET["num1"]." ".$_GET["ysf"]." ".$_GET["num2"]." = ".$sum;
					}else{
						echo $message;
					}	
					echo '</td></tr>';
				}
			?>
			</form>
			</table>
	</body>
</html>
