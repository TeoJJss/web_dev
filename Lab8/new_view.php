<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Address Book</title>
    <style>
        #scrollable{
            width: 100%;
            overflow: scroll;
            display: flex;
        }
        #box {
            font-family: Arial, Helvetica, sans-serif;
            min-width: 30vw;
            min-height: 500px;
            float: left;
            margin: 10px;
            border-radius: 10px;
            padding: 10px;
            background-color:oldlace;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        include("conn.php");
        if (isset($_GET['name'])){
            $sql = "SELECT * FROM contacts WHERE contact_name LIKE '%".$_GET['name']."%'";
        }else{
            $sql = "SELECT * FROM contacts";
        }
        
        $result=mysqli_query($con, $sql);
    ?>
    <a href="default.php">Add New Contact</a><br><br>
    <span>Search: </span> <input type="text" name="search-bar" id="search-bar"> <button onclick="search()">Button</button><br><br>
    <div id="scrollable">
        <?php 
            while($row=mysqli_fetch_array($result)){
                $name=$row['contact_name'];
                $gender=$row['contact_gender'];
                echo '<div id="box">';
                if ($gender=="male"){
                    echo '<img src="man.png" width="50"><br><br>';
                }
                else if ($gender=="female"){
                    echo '<img src="woman.png" width="50"><br><br>';
                }
                echo '<b>'.$row['contact_name'].'</b><br><br>';
                echo "Email: <br>$row[contact_email]<br><br>";
                echo "Home Address:<br>$row[contact_address]<br><br>";
                echo "Relationship:<br>$row[contact_relationship]<br><br>";
                echo "Date of Birth:<br>$row[contact_dob]";

                echo '</div>';
            }
            mysqli_close(($con));
        ?>
    </div>
    <script>
        function search(){
            var name = document.getElementById("search-bar").value;
            window.location.href="new_view?name="+name;
        }
    </script>
</body>
</html>