<select name="year">
            <?php
                $startYear = 2000;               
                while($startYear <= date("Y"))
                {
                    ?>
            <option value="<?php echo $startYear; ?>"> <?php echo $startYear; ?> </option>   
            <?php   
                    $startYear += 1;
                
                }
            ?>
    </select>
     
                   