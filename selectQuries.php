
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php"); ?>

<div class="selectQuries">
     
    <table>
       
        <tr id="header">
            <td colspan='3' ><h1 Style="margin-top:-30px;font-size:40px;height:0px;">YOUR REPORTS</h1></td>
        </tr>
       
        <tr id="singleLink">
            <td><a href="view_01/whole_monthly_income/">WHOLE MONTHLY INCOME</a></td>
            <td><a href="view_01/yearly_income/">YEARLY INCOME</a></td>
<!--            <td><a href="#">TODAY'S INCOME</a></td>-->
        </tr>
        
        
       
        
        
        <tr>
            <td colspan="3" Style="text-align:left;font-size:16px;"> ROUTES INCOME i.e. income that is obtain from that routes<br><br>
         
                <form method="post" action="view_01/routes_income/">    

                <?php include("routes.php"); ?>
                
                    <input type="submit" value="GO" name="routes_income">
            </form>
            
            </td>
        </tr>
    
        
        <tr>
            <td colspan="3" Style="text-align:left;font-size:16px;"> ESTIMATED BUSES INCOME i.e. list of all the buses who has earn max amount of money <br><br>
             <form method="post" action="view_01/estimated_bus_income/">
                
                 <?php include("routes.php")?>
                    
                    <input type="submit" value="GO" name="estimated_bus_income">
                
                </form>
            </td>
        </tr>
    
        
        <tr>
             <td colspan="3" Style="text-align:left;font-size:16px;"> SEARCH FOR A PASSENGER<br><br>
                 
              <form method="post" action="view_01/search_passenger/">
                <input type="text" name="cnic" placeholder="ENTER PASSENGER CNIC i.e. xxxx-xxxxxx....">
                    <input type="submit" value="GO" name="search_passenger">
                    </form>
             </td>
        </tr>
        
        
        <tr>
             <td colspan="3" Style="text-align:left;font-size:16px;"> BUS INCOME IN A MONTH i.e. how much trips bus has taken in a month<br><br>
                 
              <form method="post" action="view_01/bus_income/">
                <input type="text" name="bus_model" placeholder="ENTER model i.e. DAEWOO....">
                    <input type="submit" value="GO" name="bus_income">
                    </form>
             </td>
        </tr>
        
        
        <tr>
            <td colspan="3" Style="text-align:left;font-size:16px;"> CHOOSE MONTH AND YEAR TO SHOW REVENUE RESULT<br><br>
              
                 <form method="post" action="view_01/revenue_of_selected_month_and_year/"> 
                     
                <?php include("month.php")?>
                <?php include("year.php")?>
                     
                 <input type="submit" value="GO" name="monthly_reveue">
                    </form>    
            </td>
        </tr>
        
         <tr>
            <td colspan="3" Style="text-align:left;font-size:16px;"> TOTAL TICKETS BOOK IN A YEAR: CHOOSE YEAR<br><br>
              
                 <form method="post" action="view_01/tickets_booked_in_year/"> 
                     
                <?php include("year.php")?>
                     
                 <input type="submit" value="GO" name="year_tickets">
                    </form>    
            </td>
        </tr>
        
         <tr>
            <td colspan="3" Style="text-align:left;font-size:16px;"> TOTAL TICKETS BOOKED IN A MONTH: CHOOSE MONTH AND YEAR<br><br>
              
                 <form method="post" action="view_01/tickets_booked_in_month/"> 
                     
                <?php include("month.php")?>
                <?php include("year.php")?>
                     
                 <input type="submit" value="GO" name="monthly_tickets">
                    </form>    
            </td>
        </tr>         
        
       
        <tr>
             <td colspan="3" Style="text-align:left;font-size:16px;"> REMOVE A BUS<br><br>
                 
              <form method="post" action="remove/bus/">
                <input type="text" name="remove_bus" placeholder="ENTER BUS ID i.e 1">
                    <input type="submit" value="GO" name="search_passenger" Style="background-color:#5cd65c;">
                    </form>
             </td>
        </tr>
        
        <tr>
             <td colspan="3" Style="text-align:left;font-size:16px;"> REMOVE A DRIVER<br><br>
                 
              <form method="post" action="remove/driver/">
                <input type="text" name="remove_driver" placeholder="ENTER DRIVE NAME i.e. John Doe">
                    <input type="submit" value="GO" name="search_passenger"  Style="background-color:#5cd65c;">
                    </form>
             </td>
        </tr>
        
        <tr>
             <td colspan="3" Style="text-align:left;font-size:16px;"> REMOVE A ROUTE<br><br>
                 
              <form method="post" action="remove/route/">
                <input type="text" name="delete_route" placeholder="ENTER ROUTE NAME i.e. Pes*** To Mar***">
                    <input type="submit" value="GO" name="search_passenger"  Style="background-color:#5cd65c;">
                    </form>
             </td>
        </tr>
        
        
    </table>
    
</div>