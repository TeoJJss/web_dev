<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input, textarea, select{
            width: 90%;
            padding: 15px;
            margin-top: 5px;
            margin-bottom: 22px;
            display: inline-block;
            font-size: 15px;
        }
        
        input:focus:valid{
            background-color: green;
        }
        input:focus:invalid{
            background-color: red;
        }
        input[type=radio]{
            width: 10px
        }
        input[type=submit]{
            background-color: grey;
            width: 49%;
            float: left
        }
        input[type=submit]:hover, input[type=reset]:hover{
            background-color: whitesmoke;
        }
        input[type=reset]{
            background-color: grey;
            width: 49%;
            float: right
        }
        #wrapper{
            width: 900px;
            margin: auto 0
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
    <h1>My Address Book</h1>
    <h2>Add New Contact</h2>
    <form action="./insert.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" class="user_input" required>
        <br><br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" id="phone" required>
        <br><br>
        <label for="email">Email Address</label><br>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="address">Home Address</label><br>
        <textarea name="address" id="address" cols="30" rows="10" required></textarea>
        <br><br>
        <label for="Gender">Gender</label><br>
        <input type="radio" name="Gender" id="Male" required>Male
        <input type="radio" name="Gender" id="Female" required>Female
        <br><br>
        <label for="relationship">Relationship</label><br>
        <select name="relationship" id="relationship" required>
            <option>Please Select</option>
            <option value="Family">Family</option>
            <option value="Friend">Friend</option>
            <option value="Colleague">Colleague</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Date of Birth</label><br>
        <input type="date" name="dob" id="dob" required><br><br>
        <input type="submit" name="submit" id="submit">
        <input type="reset">
    </form>
    </div>
</body>
</html>