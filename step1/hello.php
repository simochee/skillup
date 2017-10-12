<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
    //$hash["one"]が"いち", $hash["two"]が"に", $hash["three"]が"さん"となる連想配列を作成
    $hash = array("one" => "いち", "two" => "に", "three" => "さん");
    $hash["four"] = "し";
    print_r($hash);

    echo '<br>';

    //$hashの各要素を取り出して処理
    foreach($hash as $key => $val)
      print("$key is $val. ");
  ?>
</body>
</html>