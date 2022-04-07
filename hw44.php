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

    $n1 = $n2 = $n3 = $n4 = $n5 = $n6 = $n7 = $n8 = $n9 = $n10 = $n11 = $n12 = $n13 = $n14 = $n15 = $n16 = $n17 = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n1 = test_input($_POST["var1"]);
            $n2 = test_input($_POST["var2"]);
            $n4 = test_input($_POST["var3"]);
            $n5 = test_input($_POST["var4"]);
            $n7 = test_input($_POST["var5"]);
            $n9 = test_input($_POST["var6"]);
            $n10 = test_input($_POST["var7"]);
            $n11= test_input($_POST["var8"]);
            $n13 = test_input($_POST["var9"]);
            $n14 = test_input($_POST["var10"]);
            $n16 = test_input($_POST["var11"]);
    }
    $n3 = $n1*$n2/2;
    $n6 = $n4*$n5;
    $n8 = $n7*$n7*3.14;
    $n12 = $n9*$n10*$n11;
    $n15 = 3.14*$n13*$n13*$n14; 
    $n17 = 4/3*3.14*$n16*$n16*$n16;
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

  ?>
    <div style="margin:auto; width: 1000px;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" style="margin:auto; width:1000px; ">
    <h2>삼각형의 면적</h2>
    삼각형 밑변 입력: <input type="number" name="var1"></span><br>
    삼각형 높이 입력: <input type="number" name="var2"></span><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "삼각형의 면적: $n3 (밑변: $n1 높이: $n2)";
    ?>
    <h2>직사각형의 면적</h2>
    직사각형 밑변 입력: <input type="number" name="var3"></span><br>
    직사각형 높이 입력: <input type="number" name="var4"></span><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "직사각형의 면적: $n6 (밑변: $n5 높이: $n4)";
    ?>

    <h2>원의 면적</h2>
    원 반지름 입력: <input type="number" name="var5"></span><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "원의 면적: $n8 (반지름: $n7)";
    ?>

    <h2>직육면체의 체적</h2>
    직육면체 가로 입력: <input type="number" name="var6"><br>
    직육면체 세로 입력: <input type="number" name="var7"><br>
    직육면체 높이 입력: <input type="number" name="var8"><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "직육면체의 체적: $n12 (가로: $n9 세로: $n10 높이: $n11)";
    ?>

    
    <h2>원통의 체적</h2>
    원 반지름 입력: <input type="number" name="var9"><br>
    원통 높이: <input type="number" name="var10"><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "원통의 체적: $n15 (반지름: $n13 높이: $n14)";
    ?>

    <h2>구의 체적</h2>
    구 반지름 입력: <input type="number" name="var11"><br>
    <input type="submit" value="Submit"><br><br>
    <?php
    echo "원통의 체적: $n17 (반지름: $n16)";
    ?>
    </form>
    
    </div>
</body>
</html>