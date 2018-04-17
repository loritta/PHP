<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Basic PHP Features</title>
        <style>
            .goodBalance {
                color: #000;
                background-color: #0f0;
            }
            .badBalance {
                color: #00f;
                background-color: #f00;
        </style>
    </head>
    <body>
        <?php
        #Perl style comments
        // C style comments
        
        /* multi-line
         * 
         */
        ?>
        
        <?php
        /**
         *  API documentation has two standards, this is not a PHP syntax distribution, but it is a convention
         * 
         */
        ?>
        
        <p>
        <?php
        echo "Hello World from ECHO";
        print '<br />';
        print 'Hello World from PRINT';
        echo '<br />';
        ?>
        <?= 'Hello World' ?>
        </p>
        
        <?php
        echo 'Hello World'; //wprks
        // declare variable: $variable_name
        $greeting = "Hello World from Variable";
        print '<br />';
        echo $greeting;
        ?>
        
        <div>
            Balance:
            <?php
            // declare and initialize bank balance variable
            $bankBalance = 100;
            if ($bankBalance > 0 ) : ?>
            <p class="goodBalance">The Bank Balance is:
            <?php echo $bankBalance ?> </p>
            <?php else : ?>
            <p class="badBalance">The Bank Balance is: 
            <?php echo $bankBalance ?> </p>
            <?php endif; ?>
        </div>
        
        <?php
        //boolean scalar type
        $a = (boolean) True;
        $b = (bool) True;
        
        echo var_dump($a === $b);
        ?>
        
        
        <?php
        $aString = '123'; // $a is a string
        $aNumber = (int)$aString; // $aNumber is an integer
        $aBool = (bool)$aNumber; // $aNumber is now Boolean and iti is true
        
        echo $aString;
        print '<br/>';
        echo $aNumber;
        print '<br/>';
        echo $aBool;
        ?>   
    </body>
</html>
