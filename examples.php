<!--Include Head-->
<?php include './partials/head.php';?>
<body id="examples">
    <!--Include Header-->
    <?php include './partials/header.php';?>
    <main>
    <!--
        Module 6 Examples
    -->
        <section id="module6">
            <h2>Module 6 PHP Examples</h2>
            <h3>PHP Data Types</h3>
            <!--
                    Data Types
            -->
            <p>List of supported data types in PHP with examples.</p>
            <ul>
                <li><strong>String:</strong> <code>"This is a String."</code>
                </li>
                <li><strong>Integer:</strong> <code>123</code></li>
                <li><strong>Floats:</strong> <code>3.3333333</code></li>
                <li><strong>Boolean:</strong> <code>True && False</code></li>
                <li><strong>Array:</strong> <code>$numbers = array(0, 1, 2, 3);</code></li>
                <li><strong>Class:</strong> <code>class Person { public $height; public $eye_color; public $hair_color; }</code>
                </li>
                <li><strong>Object:</strong> <code>$jim = new Person("6 feet", "blue", "brown");</code></li>
                <li><strong>Null:</strong> <code>$null = null;</code></li>
            </ul>
            <hr>
            <h3>PHP integer, float and number string.</h3>
            <!--
                Int, float, num string
            -->
            <p>The difference between the three.</p>
            <ul>
                <li><strong>Integer</strong>  is a whole number: <code>9</code></li>
                <li><strong>Floats</strong> are none integer numbers such as decimals: <code>4.2323 && 4.23+10</code></li>
                <li><strong>Number Strings</strong> are numbers written as a string: <code>"1234"</code></li>
            </ul>
            <hr>
            <h3>Arrays</h3>
            <p>What are PHP arrays?</p>
            <ul>
                <li>
                    <strong>Index/Numeric Array:</strong> An array stored linearly and accessed through a numerical index.  This array prints the day of the week.
                    Right now it is printing at the [2] index.
                    <br>
                    <code>$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
                            echo "Result of code: " . $days[2];</code>
                    <br>
                    <!--
                        Index Array with string values that prints them with echo
                    -->
                    <em>
                        <?php
                            $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
                            echo "Result of code: " . $days[2];
                        ?>
                    </em>
                </li>
                <li>
                    <strong>Associative Array:</strong> These arrays work in key / value pairs. Right now it is printing $days_two["Wed"].  
                    <br>
                    <code>$days_two = array("Mon" => "Monday", "Tues" => "Tuesday", "Wed" => "Wednesday", "Thurs" => "Thursday", "Fri" =>  "Friday", "Sat" => "Saturday", "Sun" => "Sunday");
                    echo " Result of code: " . $days_two["Wed"];</code>
                    <br>
                    <em>
                    <!--
                        Associative Array with string values that prints them with echo
                    -->
                        <?php
                            $days_two = array("Mon" => "Monday", "Tues" => "Tuesday", "Wed" => "Wednesday", "Thurs" => "Thursday", "Fri" => "Friday", "Sat" => "Saturday", "Sun" => "Sunday");
                            echo " Result of code: " . $days_two["Wed"];
                        ?>
                    </em>
                </li>
            </ul>
            <hr>
            <h3>PHP Functions</h3>
            <p>What is a function?</p>
            <ul>
                <li>A function is a block of code that can be called over and over and will not run unless called.</li>
                <li>There are built in php functions such as the <code>date()</code> function.</li>
                <li>
                    <!--
                        User defined function that prints a string
                    -->
                    <?php
                        function print_this(){
                            echo 'There are also user defined functions.  This is being printed with one now! <code>< ?php #code block ?></code>';
                        }
                        print_this();
                    ?>
                </li>
            </ul>
            <hr>
            <h3>PHP Math Functions</h3>
            <p>What are math functions?</p>
            <ul>
                <li>PHP has several built in math functions <code>pi()</code> is an example.</li>
                <li>
                 <!--
                        PHP pi function that prints the value of pi with echo
                 -->
                    <em>
                        <?php
                            echo 'Result of code: ' . pi(); 
                        ?>
                    </em>
                </li>
            </ul>
            <hr>
            <h3>Top PHP Functions for WordPress</h3>
            <p>5 WordPress Functions</p>
            <ul>
                <li><code>get_theme_mod()</code>: Gets the theme modification value.</li>
                <li><code>add_setting()</code>: Allows you to add a custom setting.</li>
                <li><code>get_option()</code>: Retrieves the value of an option.</li>
                <li><code>get_template_part()</code>: Adds part to template.</li>
                <li><code>the_content()</code>: Displays all content in a post</li>
            </ul>
        </section>
             <!--
                Module 7 Examples
            -->
        <section id="module7">
            <h2>Module 7 PHP Examples</h2>
            <h3>PHP Loops</h3>
            <h4>While Loop</h4>
            <p> A While Loop runs through code block until condition is true.</p>
            <!--
                A While Loop that loops count var is less than three. Prints count then adds one to it. 
            -->
                <ul class='loops'>
                    <?php
                        $count = 0;
                        while ($count < 3) {
                            echo "<li> I am loop " . $count++ . " </li>";
                        }
                    ?>
                </ul>
            <h4>Do... While Loop</h4>
            <p> A Do... While Loop runs through code block until condition is true, but will run once no matter what.</p>
            <!--
                A Do... While Loop that loops count var is less than three. Prints count then adds one to it. Will loop once even if false  
            -->
                <ul class='loops'>
                    <?php
                        $count = 0;
                        do {
                            echo "<li> I am loop " . $count++ . " </li>";
                        } while ($count < 3);
                    ?>
                </ul>         
            <h4>For Loop</h4>
            <p> A For Loop runs through code block a set number of times.</p>
            <!--
                For loop that sets a temp var to 0, conditions that it will loop until var is 10, adds 1 to var. Prints the var each loop
            -->
                <ul class='loops'>
                    <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo "<li>This is loop " . $i . " </li>";
                        }
                    ?>
                </ul> 

            <h4>Foreach Loop</h4>
            <p> A Foreach Loop runs through code block until it reaches the end of an array.</p>
            <!--
                Foreach loop that loops for each index in numbers array and prints the temp var
            -->
                <ul class='loops'>
                    <?php
                        $numbers = array(0, 1, 2, 3, 4, 5);
                        foreach ($numbers as $number) {
                            echo "<li>I am index " . $number . " </li>";
                        }
                    ?>
                </ul> 
            <hr>
            <h3>PHP Conditional Statements</h3>
            <h4>If</h4>
            <p> If statement runs if condition is true.</p>
            <!--
                Prints string with echo because condition is true.
            -->
                <p>
                    <?php
                        $isTrue = true;
                        if($isTrue){
                            echo 'This if statement ran!';
                        }
                    ?>
                </p>
            <h4>If...Else...</h4>
            <p> If statement runs if condition is true.  Else runs if IF is false.</p>
            <!--
                Prints string with else echo because condition is false.
            -->
                <p>
                    <?php
                        $isTrue = false;
                        if($isTrue){
                            echo 'This did not run!';
                        } else {
                            echo 'The else code block ran!';
                        }
                    ?>
                </p>
            <h4>If...Elseif...Else</h4>
            <p> If statement runs if condition is true.  Elseif runs if IF is false and its condition is true. If both are false the else will run.</p>
            <!--
                Prints string with elseif echo because condition is true for it but not if. Never reads the else.
            -->
                <p>
                    <?php
                        $isTrue = false;
                        if($isTrue){
                            echo 'This did not run!';
                        } elseif(!$isTrue) {
                            echo 'The elseif ran!';
                        }else {
                            echo 'Did not run because elseif did!';
                        }
                    ?>
                </p>
            <h4>Switch</h4>
            <p>Switch runs different code blocks under different conditions.</p>
            <!--
                Switch that takes in a pram. And runs whatever case matches it. If none match default is ran. Case 0 is ran here.
            -->
                <p>
                    <?php
                        $number = 0;
                        switch ($number) {
                            case 0:
                                echo "Case 0 was executed!";
                                break;
                            case 1:
                                echo "Case 1 was executed";
                                break;
                            default:
                                echo "No case was switched.";
                      }
                    ?>
                </p>
            <hr>
            <h4>Custom Function</h4>
            <p>This is the output of a function that takes two arguments.</p>
               <!--
                Function has two parameters that prints numbers given, the numbers added, and then multiplied. 
                -->
            <p>
                <?php
                    function two_numbers($x, $y) {
                       echo 'The user entered ' . $x . ' and ' . $y .  '<br>';
                       echo 'Added together they equal ' . $x + $y . '<br>';
                       echo 'Multiplied they equal ' . $x * $y;
                    }

                    two_numbers(5, 4);
                ?>
            </p>
            <hr>
            <h4>Array Function</h4>
            <p>Reverse Array Function.</p>
               <!--
                Declare array, reverse array, print both arrays.
                -->
            <p>
                <?php
                   $nums = array(1, 2, 3);
                   $reverse = array_reverse($nums);
                    foreach ($nums as $num) {
                        echo  $num . " ";
                    }
                    echo '<br>';
                    foreach ($reverse as $rev) {
                        echo  $rev . " ";
                    }
                ?>
            </p>
        </section>
    </main>
    <!--Include Footer-->
    <?php include './partials/footer.php';?>
</body>
</html>
