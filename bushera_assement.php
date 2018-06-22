


 <html>
     <head>
     
         <title>
             
         </title>
         <?php
         $team =$_POST['team1'];
         $date =$_POST['date1'];
         $ref =$_POST['ref1'];
         
         
         
         //items sold
         $bushera300sold=$_POST['bout3']-$_POST['bin3'];
         $bushera500sold=$_POST['bout5']-$_POST['bin5'];
         $mango300sold=$_POST['mout3m']-$_POST['min3m'];
         $mango500sold=$_POST['mout5']-$_POST['min5'];
         $mango1sold=$_POST['mout1']-$_POST['min1'];
         $mango2sold=$_POST['mout2']-$_POST['min2'];
         $mango3sold=$_POST['mout3']-$_POST['min3'];
         $mango5sold=$_POST['mout']-$_POST['min'];
         
         
                 
         //amount sold
         $amountbushera300=$bushera300sold*8750;
         $amountbushera500=$bushera500sold*11000;
         $amountmango300=$mango300sold*8750;
         $amountmango500=$mango3sold*11750;
         $amountmango1=$mango1sold*24000;
         $amountmango2=$mango2sold*24000;
         $amountmango3=$mango3sold*36000;
         $amountmango5=$mango5sold*36000;
         //expenses
         $exp1 =$_POST['33'];
         $exp2 =$_POST['333'];
         $exp3 =$_POST['3333'];
         
         $TOTAL_EXPENSES = $exp1+$exp2+$exp3;
         
                 
          //amount computations
                 $TOTAL_SALES=$amountbushera300+$amountbushera500+$amountmango300+
                         $amountmango500+$amountmango1+$amountmango2+$amountmango3+$amountmango5;
           //others
                 $amounthanded=$_POST['ami'];
                 $amounexpected=$TOTAL_SALES-$TOTAL_EXPENSES;
                 $balance= $amounthanded-$amounexpected;
         ?>
         <link rel="stylesheet" href="ass.css">
    
     </head>
     <body>
         <img src="logo.jpg" width="1000" height="150" alt="logo"/>


             <fieldset>
        <legend><h1>ASSESSMENT</h1></legend>
        <div class="infor">
            <p id="sale"><h2> SALES INFORMATION </h2></p>
        <b>Team:</b> <?php echo $team ?><br/>
        <b>Date: </b><?php echo $date ?><br/>
        <b>Ref No.: </b><?php echo $ref ?><br/>
            
        </div>
        <fieldset>
            <legend>Computation</legend>
            <h3>Total Expenses: <?php echo $TOTAL_EXPENSES;?></h3>
        <h3>Amount Expected:  <?php echo $TOTAL_SALES-$TOTAL_EXPENSES?></h3>
        
        <h3>Amount Handed In: <?php echo $amounthanded?></h3>
        
        <h3>Balance: <?php echo $balance ?><h3/>
            
           
    
        </fieldset>
        
            
            
            
         
     </body>
 </html>





