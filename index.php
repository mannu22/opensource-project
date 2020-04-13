<?php 
    $bill = "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $units = $_POST['bill'];
        if($units <= 50) {
            $bill = "<br>Your Total Bill is ".$units * 9;
        }
        else if($units > 50 && $units <= 100) {
            $temp = 50 * 9;
            $remaining_units = $units - 50;
            $bill = "<br>Your Total Bill is Rs ".($temp + ($remaining_units * 12));
        }else {
            $temp = (50 * 9) + (100 * 12);
            $remaining_units = $units - 100;
            $bill = "<br>Your Total Bill is Rs ".($temp + ($remaining_units * 15));
        }
    }
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <br><br><label for="fname">Electricity Bill</label><br>
            <input type="text" id="fname" name="bill" placeholder="Enter Your Units">
        </form>
        <div class="ans"><?php echo $bill; ?></div>
    </body>
</html>