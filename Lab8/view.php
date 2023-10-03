<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conn.php");
        $sql = "SELECT * FROM contacts";
        $result=mysqli_query($con, $sql);
    ?>
    
    <table width="90%">
        <tr bgcolor="#CC99FF">
            <td>Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Relationship</td>
            <td>DOB</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php 
            while($row=mysqli_fetch_array($result)){
                echo "<tr bgcolor='#99FF66'>";

                echo "<td> $row[contact_name] </td>";

                echo "<td> $row[contact_phone] </td>";

                echo "<td><a href='mailto:$row[contact_email]'>$row[contact_email]</a></td>";

                echo "<td>$row[contact_address]</td>";

                echo "<td> $row[contact_gender] </td>";

                echo "<td> $row[contact_relationship] </td>";
                
                echo "<td> $row[contact_dob] </td>";

                echo "<td><a href='edit.php?id=$row[id]'>Edit</a></td>";

                echo "<td><a href=\"delete.php?id=$row[id]\" onclick=\"return confirm('Delete $row[contact_name] details?');\">Delete</a></td>";
            }
            mysqli_close(($con));
        ?>
    </table>
</body>
</html>