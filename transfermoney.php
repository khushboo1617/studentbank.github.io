<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 3px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color:orange ;
		}
	</style>
</head>
<body style="background-color:	rgb(210,100,0) ;">

	<!--<div align="center" style="top:0px">-->
	<div class="one" style=" background-color:orange ; height: :50px; width:100%;">	  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transfermoney.php"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color:wheat;text-align: center;font-family: serif;" >To transfer money, click on the user name:) </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:white;font-weight: bold;">
	<thead>
		<th>USER ID</th>
		<th>USER NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["C_ID"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["Email"]; ?></td>
		<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>