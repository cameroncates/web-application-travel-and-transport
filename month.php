  <select name="month">
                       <?php
                       for ($m=1; $m<=12; $m++) 
                        {
                           $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
                           ?> 
                            <option value="<?php echo $month?>"><?php echo $month;  ?> </option>
                             echo $month. '<br>';
                <?php     }
                       ?>
                </select>