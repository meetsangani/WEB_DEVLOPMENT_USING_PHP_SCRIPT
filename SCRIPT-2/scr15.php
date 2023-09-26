<!DOCTYPE html>
<html>
<head>
    <title>Find the Largest Number</title>
</head>
<body>
    <h1>Find the Largest Number</h1>
    <form method="post" action="">
        Enter the first number: <input type="number" name="num1"><br><br>
        Enter the second number: <input type="number" name="num2"><br><br>
        Enter the third number: <input type="number" name="num3"><br><br>
        <input type="submit" value="Find Largest">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        
        // Check which number is the largest
        if ($num1 >= $num2 && $num1 >= $num3) {
            $largest = $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            $largest = $num2;
        } else {
            $largest = $num3;
        }
        
        echo "<p>The largest number is: $largest</p>";
    }
    ?>
</body>
</html>
