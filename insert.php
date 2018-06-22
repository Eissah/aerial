<?php
//team Table
$team=$_POST['bteam'];
$date=$_POST['bdate'];
$ref=$_POST['bref'];
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
         
                 
          //amount computations
                 $TOTAL_SALES=$amountsingles+$amountcookies+$amountheart+$amountmarble2+
                         $amountmarble25+$amountqueen+$bd40+$bd20+$bd10+$bd5;
           //others
                 $amounthanded=$_POST['bakin'];
                 $amounexpected=$TOTAL_SALES-$TOTAL_EXPENSES;
                 $balance= $amounthanded-$amounexpected;
                 
    $conn= mysqli_connect('127.0.0.1', 'root','');
    if(!$conn){
        echo 'Not Connected';
    }
    else{
    echo 'connected';
    }
        
        




?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

