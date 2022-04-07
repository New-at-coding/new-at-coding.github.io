<!DOCTYPE html>
<html>
<body>

<?php 
$n = $sum = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = test_input($_POST["var1"]);
    
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="margin:auto; width:300px; ">
    n 입력: <input type="number" name="var1"><br>
    <input type="submit">
    </form>


<?php
$xSum = 1;
for ($a = 1; $a <= $n; $a+=1){
    $sum += $a;
    $xSum *= $a;
    echo "<h2>$a<br><h2>";
}
echo "<h2>합: $sum</h2><br><h2>전체 곱: $xSum</h2>";
?>  
</body>
</html>
