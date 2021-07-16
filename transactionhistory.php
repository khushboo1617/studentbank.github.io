<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 3px solid black;
		border-radius: 3px;
		text-align: center;
		padding: 5px;
		}
		tr:nth-child(odd) {
		background-color: orange;
		}
		
	</style>
</head>
<body style="background-color:rgb(210,100,0);">
<link rel = "stylesheet" type = "text/css" href = "style.css">

	<!--<div align="center" style="top:0px">-->
	<div class="one" style=" background-color:orange ; height: :50px; width:100%;">		  			
		<table class = "t">
			<tr>
            <td style = "text-align:center;border:2px"> <a href="index.php"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:2px"><a href="customer.php"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:2px"><a href="transfermoney.php"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:2px"><a href="transactionhistory.php"><button class = "btn2">View Transaction History</button></a></td>
			</tr>
		</table>
	</div>

    <h1 style="color:black;text-align: center;font-family: serif;" >Transaction History</h1>
    <table style="font-family: serif;color:white; ;font-weight: bold;">
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Receiver"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
		
</body>
</html>
