<?php


//CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "spark_bank"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //IF CONNECTION IS NOT SUCCESSSFUL
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
?>

<html>
<head> 
    <title>Transaction Page</title>
    <style>
    body {
               padding-top: 60px;
               font-size:20px;
               background: #feeab8;
               margin: 0;
  font-family: 'Arial', sans-serif;

        }
        
    .transferMoney{
        color:black;
        background: #1ab984;
        padding: 20px;
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
    }


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
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
       
    </script>
      
     
</head>

<body>
<?php include('navbar.php'); ?>

<div class = 'transferMoney'>
    <h1>Transfer Money</h1>
   
    <form name="myForm" action="ResultPage.php"  onsubmit="return validateForm()" method="post">
   
        <table id="table1">
        <tr>
            <td>Payer Account No</td>
            <td><input type="number" name="payerID"  min=100 required><td>
        </tr>
        
        <tr>
            <td>Payee Account No</td>
            <td><input type="number" name="payeeID" min=100 required ><td>
        </tr>
        
        <tr>
            <td>Amount (in Rupees)</td>
            <td><input type="number" name="amount" min=1 required><td>
        </tr>
        
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" value="PROCEED" style= background-color:black;color:white;padding:8px 20px><td>
        </tr>
       
        </table>
    </form>
</div>
 
 <script>
 
 function validateForm() {
            var x = document.forms["myForm"]["payerID"].value;
            var y = document.forms["myForm"]["payeeID"].value;
            var z = document.forms["myForm"]["amount"].value;
            var regex=/^[0-9]+$/;

            
            if (x == "" || y=="" || z=="") {
                alert("Fill it!!");
                return false;
            }

            
            if((Math.sign(z)==-1)||(Math.sign(z)==-0)||z==0){
                alert("Enter a valid amount to do transaction");
                return false;
            }
            if(isNaN(z)|| !x.match(regex)|| !y.match(regex) ||!z.match(regex)){
                alert("Enter correct input!");
                return false;
            }
            
           
        }
            
 </script>
 <footer>
    <div class="footerclass">
    <p>© 2023 Designed and Coded By Diwakar V | The Spark Foundation</p>
    </div>
</footer>
</body>
</html>
    