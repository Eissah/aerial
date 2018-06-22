<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
      
  

        <title>
            
            
        </title>
    </head>
    <body>
    
        <form action="assement.php" method="POST" role="form" >
            <div class="form-group">
            <fieldset>
                <legend>SALES AGENT INFORMATION:</legend>
                Team:<input type="text" name="bteam"/>
                Date:<input type="date" name="bdate" />
                Ref No.:<input type="text" name="bref" class="form-control" placeholder="Enter reference" />
            
               
            </fieldset>
            <fieldset>
                <legend>STOCK COMPUTATION:</legend>
                <table>
                    <tr>
                    <th>Product</th>
                    <th>Load</th>
                    <th>Reload</th>
                    </tr>
                    <tr>
                        <td>Singles</td>
                        <td><input type="text" name="sout"></td>
                        <td><input type="text" name="sin"></td>
                    </tr>
                     <tr>
                        <td>Cookies</td>
                        <td><input type="text" name="cout"></td>
                        <td><input type="text" name="cin"></td>
                    </tr>
                     <tr>
                        <td>Hear Mix</td>
                        <td><input type="text" name="Hout"></td>
                        <td><input type="text" name="Hin"></td>
                    </tr>
                     <tr>
                        <td>Marble 2000 </td>
                        <td><input type="text" name="Mout2"></td>
                        <td><input type="text" name="Min2"></td>
                    </tr>
                    <tr>
                        <td>Marble 2500 </td>
                        <td><input type="text" name="Mout25"></td>
                        <td><input type="text" name="Min25"></td>
                    </tr>
                    <tr>
                        <td>Queen Cakes </td>
                        <td><input type="text" name="qout"></td>
                        <td><input type="text" name="qin"></td>
                    </tr>
                    <tr>
                        <td>Delight </td>
                        <td><input type="text" name="dout"></td>
                        <td><input type="text" name="din"></td>
                    </tr>
                    <tr>
                        <td>Birthday 40000 </td>
                        <td><input type="text" name="bout4"></td>
                        <td><input type="text" name="bin4"></td>
                    </tr>
                    <tr>
                        <td>Birthday 20000 </td>
                        <td><input type="text" name="bout2"></td>
                        <td><input type="text" name="bin2"></td>
                    </tr>
                    <tr>
                        <td>Birthday 15000 </td>
                        <td><input type="text" name="bout15"></td>
                        <td><input type="text" name="bin15"></td>
                    </tr>
                    <tr>
                        <td>Birthday 10000 </td>
                        <td><input type="text" name="bout1"></td>
                        <td><input type="text" name="bin1"></td>
                    </tr>
                     <tr>
                        <td>Birthday 5000 </td>
                        <td><input type="text" name="bout5"></td>
                        <td><input type="text" name="bin5"></td>
                    </tr>
                    
                </table>
                
                    
                
                <fieldset id="sample">
                    
                    <legend>Samples:</legend>
                    <table boarder="0" cellspacing="0">
                        <tr>
                            <th>item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="s1"> </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="s2"> </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="1"> </td>
                            <td><input type="text" name="s3"> </td>
                        </tr>
                    </table>
                </fieldset>
                
                        <fieldset id="expense">
                    <legend>Expenses:</legend>
                    <table boarder="0" cellspacing="0">
                        <tr>
                            <th>item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>Fuel</td>
                            <td><input type="text" name="22"> </td>
                            <td><input type="text" name="b1"> </td>
                        </tr>
                        <tr>
                            <td>Mechanical</td>
                            <td><input type="text" name="222"> </td>
                            <td><input type="text" name="b2"> </td>
                        </tr>
                        <tr>
                            <td>Others </td>
                            <td><input type="text" name="2222"> </td>
                            <td><input type="text" name="b3"> </td>
                        </tr>
                    </table>
                    
                    <textarea name="other" rows="5" cols="20" class="form-control">
Please specify other
                    </textarea>
                    </fieldset>
                     <fieldset id="Invoice">
                    <legend >Invoice Handling:</legend>
                    <table boarder="1" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <th>Invoice issued</th>
                            <th>Invoice Collected</th>
                            
                            
                        </tr>
                        <tr>
                            <td><input type="text" name="name"> </td>
                        
                       
                            <td><input type="text" name="out1"> </td>
                            <td><input type="text" name="c1"> </td>
                            
                            
                        </tr>
                        <td><input type="text" name="name2"> </td>
                            <td><input type="text" name="out2"> </td>
                            <td><input type="text" name="c2"> </td>
                            
                        <tr>
                            <td><input type="text" name="name3"> </td>
                            <td><input type="text" name="out3"> </td>
                            <td><input type="text" name="c3"> </td>
                           
                        </tr>
                        <tr>
                          
                        </tr>
                    </table>
                    </fieldset>
                <h2>AMOUNT HANDED IN: <input type="text" name="bakin"></h2>
                <a href="assement.php">SAVE</a>
            <input type="submit" name="submit" value="Compute" align="Right">
            <input type="reset" value="Clear" name="reset" />
                                   
              
            </fieldset>
               
            
        </form>
    
        
       
   
         
   
    
   </body>
  
    
</html>


