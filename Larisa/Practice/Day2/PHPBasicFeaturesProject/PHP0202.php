<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Data Type conversion</title>
    </head>
    <body>
        <?php
        // declare a string, double and integer variables
        $testString = "3.5 seconds";
        $testDouble= 79.2;
        $testInteger=12;
        ?>
        
        <?php 
        //print variables and types
        print ("$testString is a(n) " . gettype($testString) ."<br/>");
        print ("$testDouble is a(n) " . gettype($testDouble) ."<br/>");
        print ("$testInteger is a(n) " . gettype($testInteger) ."<br/>");
        ?>
        
        <?php 
        // converting
        //call set type to conert variables
        // test String to different data types
        print("$testString");
        settype($testString, "double");
        print (" as a double is $testString <br/>");
        print("$testString");
        settype($testString , "integer");
        print (" as an integer is $testString <br/>");        
                ?>
        <?php 
        //comparing strings
        $fruits = array("apple", "orange", "banana");
        
        //iterate through each array element
        for ($counter = 0; $counter < count($fruits); $counter++) {
            //call function strcomp to compare array elements
            if (strcmp($fruits[$counter], "banana") < 0) {
                print ($fruits[$counter]." is less than banana <br/>");
                }
                elseif (strcmp($fruits[$counter], "banana") > 0) {
                print ($fruits[$counter] . " is less than banana <br/>");
            }
            else {print ($fruits[$counter] . " is equal to banana ");}
        }
        ?>
    </body>
</html>
