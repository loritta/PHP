<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <p>Today is <?php echo date ('l jS \of F Y h:i:s A -- M j, Y'); ?>  </p>
        
        <br/>
        <?php
        date_default_timezone_set("America/Toronto");
        echo date_default_timezone_get();
        ?>
        <br/><br/>
        <?php 
        /* look for date | mktime | DATE_ATOM | DATE_RFC822
         * 
         */
        
        
        //print something like Monday
        echo "<br/>";
        print date('l');
        echo "<br/>";
        //print something like Monday 16th of April 2018 12:5 PM
        echo "<br/>";
        print date('l jS \of F Y g:i A');
        echo "<br/>";
        //print something like Monday April 21, 2018 is on a Saturday
        
        //mktime(hour, minute, second, month, day, year
        echo "<br/>";
        print "April 121 2018 is on a ".date('l', mktime(0,0,0,3,21,2018));
        echo "<br/>";
        //print something like Mon, 16 Apr 2018 12:10:45 UTC
        echo date(DATE_RFC822);
        echo "<br/>";
        //print something like 202007-01TO0:00
        echo date(DATE_ATOM, mktime(0,0,0,7,1,2020));
        ?>
    </body>
</html>
