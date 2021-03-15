<!--
        Products Partial. 
-->

<!--
    Six Products in Multidimensional Array. Total price is calculated in each array. Each product includes, name, image, price, total with tax, location, and a description. 
-->
<?php
    $products = array(
        array("name" => "Day Tour", "img" => "<img src='https://images.pexels.com/photos/5833982/pexels-photo-5833982.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='River in a forest'>" ,"price" => "Price: $" . 150.00, "total" => "Total after tax: $" . (150.00 * .0725) + 150.00, "Location" => "Location: East of Seattle", "description" => "Info: Enjoy a one day tour of prime locations in the PNW including hiking trails, places to eat, places to stay, waterfalls and more!"),

        array("name" => "Week Tour", "img" => "<img src='https://images.pexels.com/photos/5898966/pexels-photo-5898966.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='Seattle'>" ,"price" => "Price: $" . 850.00, "total" => "Total after tax: $" . (850.00 * .0725) + 850.00, "Location" => "Location: Seattle and North of Seattle" ,"description" => "Info: Enjoy a week tour of prime locations in the PNW including the Seattle area and Olympic Peninsula!"),

        array("name" => "Boat Rentals", "img" => "<img src='https://images.pexels.com/photos/2422557/pexels-photo-2422557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='Canoe'>" ,"price" => "Price: $" . 50.00, "total" => "Total after tax: $" . (50.00 * .0725) + 50.00, "Location" => "Location: Seattle and on tours" ,"description" => "Info: There will be lots and lots of water on our tours.  We will stop at lots of small lakes.  For a small fee, tourists can rent a canoe to use on their trip!"),

        array("name" => "Photos", "img" => "<img src='https://images.pexels.com/photos/212372/pexels-photo-212372.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='Camera'>" ,"price" => "Price: $" . 5.00, "total" => "Total after tax: $" . (5.00 * .0725) + 5.00, "Location" => "Location: On tours" ,"description" => "Info: Remember your trip forever!  Everyone wants photos of their vacation.  Let us take care of it for you so you can spend more time drinking in the sights!"),

        array("name" => "Agates / Fossils", "img" => "<img src='https://images.pexels.com/photos/4040607/pexels-photo-4040607.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='Gems'>" ,"price" => "Price: $" . 15.00, "total" => "Total after tax: $" . (15.00 * .0725) + 15.00, "Location" => "Location: On tours" ,"description" => "Info: Having trouble finding anything cool while beach combing on tour?  Buy a whole bag full to take home with you!"),

        array("name" => "Personal Tours", "img" => "<img src='https://images.pexels.com/photos/1387037/pexels-photo-1387037.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940' alt='People at the beach'>" ,"price" => "Price: $" . 1500.00, "total" => "Total after tax: $" . (1500.00 * .0725) + 1500.00, "Location" => "Location: Anywhere in the PNW" ,"description" => "Info: Want a personalized tour not offered in our group tours? Want a private tour for you and your family? Then this is the option for you! Private tours are limited to 8 people and 1 week.")
     
    );
    #first loop loops through $products array, the second loop loops through each array with in that array. Prints an unordered list for each product with the list items being the products info. 
    foreach($products as $product){
        echo '<ul>';
        foreach($product as $info){
            echo '<li>' . $info . '</li>';
        }
        echo '</ul><hr>';
    }
?>
