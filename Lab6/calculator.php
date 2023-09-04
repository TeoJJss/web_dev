<?php
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $calc = isset($_POST['calc']) ? $_POST['calc']: '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="" method="POST">
        <input type="number" name="num1" id="" value='<?php echo $num1; ?>' required>
        <select name="calc" id="" required>
            <option value="" selected disabled>Please Select</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" id="" value='<?php echo $num2; ?>' required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $ans=0; $num1=floatval($_POST['num1']); $num2=floatval($_POST['num2']);
        $calc = $_POST['calc'];
        switch($calc){
            case "+": 
                $ans = $num1 + $num2;
                break;
            case "-": 
                $ans = $num1 - $num2; 
                break;
            case "*": 
                $ans = $num1 * $num2; 
                break;
            case "/": 
                if ($num2 != 0){
                    $ans = $num1 / $num2; 
                }else{
                    echo "<font style='color:red;'>Math Error</font>";
                }
                break;
            default: break;
        }
        echo "Answer: $ans";
    }
?>