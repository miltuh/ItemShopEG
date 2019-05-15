<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "fuckyoulol";
    $dbname = "products";


    $product_name = $_POST["product"];
    $price = $_POST["price"];

    try {
      $con = new PDO("mysql:host=$servername;dbname=$dbname",$username,'fuckyoulol');
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO product VALUES (null, '$product_name','$price', 1 )";
      $con->exec($sql);
      echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $con = null;
     ?>

  </body>
</html>
