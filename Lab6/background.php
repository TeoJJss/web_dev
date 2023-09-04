<?php 
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $time = date('h'); // in 12-hour clock
    $period=date('a'); // Get am or pm
    $img='';
    if ($period == 'pm' && $time!=12){
        $time += 12; // Get time to 24-hour clock if it's afternoon/night after 12pm
    }

    if ($period == 'am' && $time==12){
        $time = 0; // Set to 0 if it's 12am
    }

    if ($time>=6 && $time < 12) {
        $img='./images/morning.jpg';
    }else if ($time>=12 && $time<17){
        $img = './images/afternoon.jpg';
    }else if ($time>=17 && $time<22){
        $img = './images/evening.jpg';
    }else if ($time>=22 || $time<6){
        $img = './images/night.png';
    }

?>
<html>
    <head>
        <style>
            body{
                background-image: url('<?php echo $img; ?>');
                background-size: 80%;
            }
        </style>
    </head>
    <body>  

    </body>
    
</html>
<?php 
    echo '<script>alert("MYT Time now: '.date('h:i:sa').'")</script>'; 
?>