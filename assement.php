<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>SHARK TECHNOLOGIES</h1>
        
    </header>

    <main>
        <div class="profile">
            <div class="profile-picture">
                
            </div>
            <div id="Profile-position">
                <p>Accountant</p>
            </div>
            <div class="others">
                <ul>
                    <li>Settings</li>
                <li>Privacy</li>
                <li>Change Password</li>
                <li>Log Out</li>
                    
                </ul>
                
            </div>
        </div>

        <div class="Report-Display"> 
            <h1 id="quick"> Quik Links</h1>
            <hr>
            <?php
         
         
       
         $team =$_POST['bteam'];
         $date =$_POST['bdate'];
         $ref =$_POST['bref'];
         
         
         
         //items sold
         $singles=$_POST['sout']-$_POST['sin'];
         $cookies=$_POST['cout']-$_POST['cin'];
         $heart_mix=$_POST['Hout']-$_POST['Hin'];
         $marble_2000=$_POST['Mout2']-$_POST['Min2'];
         $marble_2500=$_POST['Mout25']-$_POST['Min25'];
         $Queen=$_POST['qout']-$_POST['qin'];
         $delight=$_POST['dout']-$_POST['din'];
         $bd40=$_POST['bout4']-$_POST['bin4'];
         $bd20=$_POST['bout2']-$_POST['bin2'];
         $bd15=$_POST['bout15']-$_POST['bin15'];
         $bd10=$_POST['bout1']-$_POST['bin1'];
         $bd5=$_POST['bout5']-$_POST['bin5'];
         
         
                 
         //amount sold
         $amountsingles=$singles*800;
         $amountcookies=$cookies*2000;
         $amountheart=$heart_mix*1500;
         $amountmarble2=$marble_2000*2000;
         $amountmarble25=$marble_2500*2500;
         $amountqueen=$Queen*2500;
         $amountdelight=$delight*2000;
         $amountbd40=$bd40*40000;
         $amountbd20=$bd20*20000;
         $amountbd15=$bd15*15000;
         $amountbd10=$bd10*10000;
         $amountbd5=$bd5*5000;
         //expenses
         $expb1 =$_POST['b1'];
         $expb2 =$_POST['b2'];
         $expb3 =$_POST['b3'];
         
         $TOTAL_EXPENSES = $expb1+$expb2+$expb3;
         //samples
         $samb1 =$_POST['s1'];
         $samb2 =$_POST['s2'];
         $samb3 =$_POST['s3'];
         
         $TOTAL_SAMPLES = $samb1+$samb2+$samb3;
         
         $GENERAL_EXPENSES=$TOTAL_EXPENSES+$TOTAL_SAMPLES;
         //invoice handling
         $inv1 = $_POST['out1'];
         $inv2 = $_POST['out2'];
         $inv3 = $_POST['out3'];
         $inv4 = $_POST['c1'];
         $inv5 = $_POST['c2'];
         $inv6 = $_POST['c3'];
         
         $invoicein = $inv4+$inv5+$inv6;
         $invoiceout = $inv1+$inv2+$inv3;
         
                 
          //amount computations
                 $TOTAL_SALES=$amountsingles+$amountcookies+$amountheart+$amountmarble2+
                         $amountmarble25+$amountqueen+$amountbd40+$amountbd20+$amountbd15+$amountbd10+$amountbd5;
           //others
                 $amounthanded=$_POST['bakin'];
                 $amounexpected=($TOTAL_SALES+$invoicein)-($GENERAL_EXPENSES+$invoiceout);
                 $balance= $amounthanded-$amounexpected;
                 
                 
                 
                 
                 
                 //DATABASE
                 $conn= mysqli_connect('127.0.0.1', 'root','');
                 if(!$conn)
                 {
                     echo 'Not connected';
                 }
                 if(!mysqli_select_db($conn,'bakery'))
                 {
                     echo 'database not selected';
                 }
                 
                
                         
  
                 $sql= "INSERT INTO 'general'(Team,Date,Ref) VALUES('$team','$date')";
                         
                         
                         if(!mysqli_query($conn, $sql))
                         {
                             echo 'SAVED';
                         }
                         else
                             {
                             echo "Error:".$sql."<br/>".
                             mysqli_error($conn);
                         }
                         mysqli_close($conn);
                         ?>
    
     </head>
     <body>
         


             <fieldset class="form-group">
        <legend><h1>ASSESSMENT</h1></legend>
        <div class="infor">
            <p id="sale"><h2> SALES INFORMATION </h2></p>
        <b>Team:</b> <?php echo $team ?><br/>
        <b>Date: </b><?php echo $date ?><br/>
        <b>Ref No.: </b><?php echo $ref ?><br/>
            
        </div>
        <fieldset class="form-group">
            <legend>Computation</legend>
            <h4>Total Sales:<?php echo $TOTAL_SALES;?> </h4>
            <h4>Total Invoices Issued:<?php echo $invoiceout;?></h4>
            <h4>Total Invoices Collected:<?php echo $invoicein;?></h4>
           
            <h4>Total Expenses: <?php echo $TOTAL_EXPENSES;?></h4>
            <h4>Total Samples:<?php echo $TOTAL_SAMPLES?></h4>
            
            <h3 class="final">Amount Expected:  <?php echo $TOTAL_SALES-$GENERAL_EXPENSES?></h3>
        
            <h3 class="final">Amount Handed In: <?php echo $amounthanded?></h3>
        
            <h3 class="final">Balance: <?php echo $balance ?><h3/>
             
            
           
        </fieldset>
        
            
            
            

                
            
        </div>
        

    </main>






