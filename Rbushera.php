


 <html>
    <head>
      


        <title>
            
        </title>
    </head>
    <body>
    
        <form action="bushera_assement.php" method="POST">
            <fieldset>
                <legend>SALES AGENT INFORMATION:</legend>
                Team:<input type="text" name="team1"/>
                Date:<input type="date" name="date1" />
                Ref No.:<input type="text" name="ref1" />
               
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
                        <td>Bushera 300mls</td>
                        <td><input type="number" name="bout3"></td>
                        <td><input type="number" name="bin3"></td>
                    </tr>
                     <tr>
                        <td>Bushera 500mls</td>
                        <td><input type="number" name="bout5"></td>
                        <td><input type="number" name="bin5"></td>
                    </tr>
                     <tr>
                        <td>Mango 300mls</td>
                        <td><input type="number" name="mout3m"></td>
                        <td><input type="number" name="min3m"></td>
                    </tr>
                     <tr>
                        <td>Mango 500mls </td>
                        <td><input type="number" name="mout5"></td>
                        <td><input type="number" name="min5"></td>
                    </tr>
                    <tr>
                        <td>Mango 1LTR </td>
                        <td><input type="number" name="mout1"></td>
                        <td><input type="number" name="min1"></td>
                    </tr>
                    <tr>
                        <td>Mango 2LTR </td>
                        <td><input type="number" name="mout2"></td>
                        <td><input type="number" name="min2"></td>
                    </tr>
                    <tr>
                        <td>Mango 3LTR </td>
                        <td><input type="number" name="mout3"></td>
                        <td><input type="number" name="min3"></td>
                    </tr>
                    <tr>
                        <td>Mango 5LTR </td>
                        <td><input type="number" name="mout"></td>
                        <td><input type="number" name="min"></td>
                    </tr>
                </table>
                    
                
                <fieldset>
                    <legend>Samples:</legend>
                    
                    <table boarder="0" cellspacing="0">
                        <tr>
                            <th>item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                            <td><input type="number" name="1"> </td>
                        </tr>
                    </table>
                </fieldset>
                
                        <fieldset align="right">
                    <legend>Expenses:</legend>
                    <table boarder="0" cellspacing="0">
                        <tr>
                            <th>item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>Fuel </td>
                            <td><input type="number" name="22"> </td>
                            <td><input type="number" name="33"> </td>
                        </tr>
                        <tr>
                            <td>Mechanicals </td>
                            <td><input type="number" name="222"> </td>
                            <td><input type="number" name="333"> </td>
                        </tr>
                        <tr>
                            <td>others</td>
                            <td><input type="number" name="2222"> </td>
                            <td><input type="number" name="3333"> </td>
                        </tr>
                        <textarea name="comment" rows="5" cols="15">
Please specify others 
                        </textarea>
                    </table>
                    </fieldset>
                     <fieldset>
                    <legend >Invoice Handling:</legend>
                    <table boarder="1" cellspacing="0">
                        <tr>
                            <th>item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Collection Date</th>
                            <th>issued by</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="item"> </td>
                            <td><input type="number" name="qtt"> </td>
                            <td><input type="number" name="amount"> </td>
                            <td><input type="date" name="collect"> </td>
                            <td><input type="text" name="issue"> </td>
                        </tr>
                        <td><input type="text" name="item1"> </td>
                            <td><input type="number" name="qtt1"> </td>
                            <td><input type="number" name="amount1"> </td>
                            <td><input type="date" name="collect1"> </td>
                            <td><input type="text" name="issue1"> </td>
                        <tr>
                            <td><input type="text" name="item1"> </td>
                            <td><input type="number" name="qtt1"> </td>
                            <td><input type="number" name="amount1"> </td>
                            <td><input type="date" name="collect1"> </td>
                            <td><input type="text" name="issue1"> </td>
                        </tr>
                        <tr>
                          
                        </tr>
                    </table>
                    </fieldset>
                
                <h2>AMOUNT HANDED IN: <input type="text" name="ami"></h2>
              
                    </fieldset>
                
                                   
              
            </fieldset>
            <input type="button" value="Save" name="save" />
            <input type="submit" name="submit" value="Compute" align="Right">
            <input type="reset" value="Clear" name="reset" />
            
        </form>
    
        
       
   
         
   
    
   </body>
  
    
</html>





