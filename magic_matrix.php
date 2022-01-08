<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matrix Program</title>
</head>
<body>
  <form method="post">
    Enter a positive odd number: <input type="number" name="number">
    <br><br>
    <input type="submit" name="submit" />
  </form>
  <br><br>
  <?php
  $n = $_POST['number'];
  if(isset($_POST['submit'])){
    if($n % 2 == 0){
      echo "Please Enter the odd number";
    }
    elseif($n<=1){
      echo "Number should be positive or greater than one!";
    }
    else{
      $sq;
    for ($i = 0; $i < $n; $i++)
        for ($j = 0; $j < $n; $j++)
            $sq[$i][$j] = 0;
 
    $i = (int)$n / 2;
    $j = $n - 1;
 
    for ($a = 1; $a <= $n * $n; )
    {
         
        if ($i == -1 && $j == $n)
        {
            $j = $n-2;
            $i = 0;
        }
        else
        {
            if ($j == $n)
                $j = 0;

            if ($i < 0)
                $i = $n-1;
        }
         
        if ($sq[$i][$j])
        {
            $j -= 2;
            $i++;
            continue;
        }
        else
            $sq[$i][$j] = $a++;
 
        $j++; $i--;
    }
 
    echo "The Magic Square for n = " . $n . ":";
         
    echo "<br>";
    echo "<br>";
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $n; $j++)
            echo $sq[$i][$j] . " ";
        echo "<br>";
    }

    }
  }
  ?>
</body>
</html>