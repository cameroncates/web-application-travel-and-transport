
<?php include($_SERVER['DOCUMENT_ROOT'] . "/travel_and_transport/includes/connection.php"); ?>
        <ul>
            <?php
//                $var = "12-18-2017";
//                  $pieces = explode("-",$var);
//                echo $pieces[0];
//               
//                
//                $jd = gregoriantojd($pieces[0],$pieces[1],$pieces[2]);
//                echo jddayofweek($jd,1);
            ?>
            <h1>BEST 15 QURIES</h1>
              
                <li><a href="view/totalBuses/">BUSES OPERATING RIGHT NOW</a></li>
                <li><a href="view/tripsPerMonth">DAY HAVING MAXUMUM NUMBER OF TRIPS</a></li>
               
            <li>CHOOSE ROUTE FOR AVAILABLE BUSES<br>
                <form method="post" action="view/busRoutes/select.php">    
                 FROM
                   <select name="routeFrom">
         <option value="peshawar">PESHAWAR</option>
         <option value="mardan">MARDAN</option>
         <option value="sawabi">SAWABI</option>
         <option value="tarnol">TARNOL</option>
         <option value="islamabad">ISLAMABAD(CAPITAL)</option>
         <option value="faisalabad">FAISALABAD</option>
         <option value="taxila">TAXILA</option>
         <option value="ghazi barod">GHAZI BAROD</option>
         <option value="muzafarabad">MUZAFARABAD</option>
         <option value="fateh jang">FATEH JANG</option>
         <option value="multan">MULTAN</option>
         <option value="lahore">LAHORE</option>
         <option value="karachi">KARACHI</option>
    </select>
                    TO
        <select name="routeTo">
         <option value="peshawar">PESHAWAR</option>
         <option value="mardan">MARDAN</option>
         <option value="sawabi">SAWABI</option>
         <option value="tarnol">TARNOL</option>
         <option value="islamabad">ISLAMABAD(CAPITAL)</option>
         <option value="faisalabad">FAISALABAD</option>
         <option value="taxila">TAXILA</option>
         <option value="ghazi barod">GHAZI BAROD</option>
         <option value="muzafarabad">MUZAFARABAD</option>
         <option value="fateh jang">FATEH JANG</option>
         <option value="multan">MULTAN</option>
         <option value="lahore">LAHORE</option>
         <option value="karachi">KARACHI</option>
    </select>
                    <input type="submit" value="GO" name="findRouteBuses">
                    </form>    
                </li>
            
            
                <li>FIND DRIVER INFO<br>
                    <form method="post" action="view/driverInfo/select.php">
                <input type="text" name="driverName" placeholder="i.e. John Doe">
                    <input type="submit" value="GO" name="findDriver">
                    </form>
                </li>
            
            <li><a href="view/avgSalary/">DRIVERS WHO EARN MORE THAN AVERAGE SALARY</a></li>
            
                <li>ENTER DRIVER NAME TO SEE HOW MUCH HE EARNS EVERY DAY <br>
                    <form method="post" action="view/earnPerDay/select.php">
                <input type="text" name = "driverEarning" placeholder="i.e. John Doe">
                    <input type="submit" value="GO" name="findDriverEarning">
                    </form>
                </li>
            
            <li>SELECT RANGE TO DETERMINE DRIVERS SALARY <br><br>
                    <form method="post" action="view/salaryRange/select.php">
                          From
                    <select name="salaryFrom">
                            <?php
                            $sql = "SELECT SALARY FROM driver ORDER BY SALARY ASC";
                            $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?> 
                                            <option> <?php echo $row['SALARY']?> </option>
                                        <?php
                                }
                            ?>
                        
                    </select>
                To 
                    <select name="salaryTo">
                            <?php
                            $sql = "SELECT SALARY FROM driver ORDER BY SALARY DESC";
                            $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?> 
                                            <option> <?php echo $row['SALARY']?> </option>
                                        <?php
                                }
                            ?>
                    </select>
                        <input type="submit" value="GO">
                    </form>
                </li>
            
                <li><a href="view/topRatedDrivers/">TOP RATED DRIVERS</a></li>
                <li>CHOOSE RATING TO SHOW DRIVERS NAME  <br> <br>
                    <form method="post" action="view/chooseRating/select.php">
               <select name="chooseRating">
                        <?php
                            $sql = "SELECT RATINGNAME FROM rating ORDER BY RATINGNAME";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <option><?php echo $row['RATINGNAME']; ?> </option>
                                <?php
                            }
                        ?>
                </select>
                        <input type="submit" value="GO">
                    </form>
                    </li>
                <li><a href="view/accidentOccurs/">POSSIBLE ACCIDENT OCCURS</a></li>
                    <li><a href="view/driverStatus/select.php">TOTAL RATED DRIVERS </a>
                </li>
                <li><a href="view/busesStrength/">BUSES STRENGTH</a></li>
                <li><a href="javascript:void(0)">CRUSHED AND UNCRUSHED BUSES</a></li>
                <li><a href="javascript:void(0)">ROUTES THAT HAS CURRENTLY NO BUSES</a></li>
            </ul>
