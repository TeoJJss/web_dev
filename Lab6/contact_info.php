<?php
    $title = "Contact Information"; 
    $name = "John Doe"; 
    $email = "john@apu.edu.my"; 
    $address[0] = "Lot 6 Technology Park Malaysia"; 
    $address[1] = "Bukit Jalil"; 
    $address[2] = "Kuala Lumpur"; 
    $postcode = "57000"; 
    $telephone = "0389961000";

    echo "<h1>".$title."</h1>";
?>
<ul>
    <li>Name: <?php echo $name; ?></li>
    <li>Email: <?php echo $email; ?></li>
    <li>Address: <?php 
                    for ($i = 0; $i < 3; $i++) {
                        echo $address[$i];
                        if ($i < 2) {
                            echo ", "; 
                        }
                    }
                ?>
    </li>
    <li>Contact Number: <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></li>
</ul>
