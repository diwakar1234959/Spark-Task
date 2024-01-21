<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "spark_bank"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>
            
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
        <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
               padding-top: 100px;
               font-size:20px;
               padding-bottom: 100px;
               background: #feeab8;
               margin: 0;
  font-family: 'Arial', sans-serif;
               
              }
              
        .container{      
            padding-top:5px;
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 60%; 
        }
        td,th { border: 1px solid #ddd; padding: 10px;}
        #Table{ font-family: Arial,Helvetica, sans-serif; border-collapse: collapse; margin-bottom: 15px;}
        #Table tr:nth-child(even){ background-color: #79c0bd; color:#000; }
        #Table tr:nth-child(odd){ background-color: #45A29E; }
        #Table tr:hover{ background-color: #b5d0eb; }
        #Table th { padding-top: 12px; padding-bottom: 12px; text-align:center; background-color: #ef9c51; color:black; }
        


        footer{
    left: 0;
    bottom: 0; 
    background-color:#ef9c51;
    width: 100%;
    position: absolute;
    margin-top: 500px;
}
.footerclass{
color: black;
font-size: large;
font-weight: 500;
display:flex;
justify-content:center;
}


    </style>
</head>

<body>
 
  <?php include('navbar.php'); ?>
	<div class="container">
        <h2 style="text-align: center">Transaction History</h2>

       <br>
       <div>
    <table id = "Table">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Payer</th>
                <th>Payer Acc ID</th>
                <th>Payee</th>
                <th>Payee Acc ID</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
  ?> 
 <tr>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        <td><?php echo $row['payee']; ?></td>
        <td><?php echo $row['payeeAcc']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>

     
        </tr>
 <?php
    }
  
$conn->close();
?> 
</
</table>
    </div>
</div>
<footer>
    <div class="footerclass">
    <p>© 2023 Designed and Coded By Diwakar V | The Spark Foundation</p>
    </div>
</footer>            

<body>

</html>

