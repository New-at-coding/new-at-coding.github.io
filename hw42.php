<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.error {color: #FF0000;}</style>
</head>
<body>
<?php 
    $Errorn = "";
    $n = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = test_input($_POST["var1"]);
        if($n > 100 || $n < 10){
            $Errorn = "10이상 또는 100이하 입력";
            $n = 0;
        }
    }
    $arr = array();
    for($i = 0; $i < $n; $i++){
        $arr[$i] = rand(1, 30000);
    }
    sort($arr);
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

  ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" style="margin:auto; width:300px; ">
    정수 개수 입력: <input type="number" name="var1" ><span class="error"><?php echo $Errorn;?></span><br> 
    <input type="submit" value="Submit"> 
    </form>
    <?php
        for($i = 0; $i < $n; $i++){
            echo "$arr[$i]<br>";
        }
    ?>

</body>
</html>