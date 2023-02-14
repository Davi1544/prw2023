<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- comment HTML -->
  <h1>TESTE</h1>
    <?php 
      //PHP
      echo "<h1 onclick='callother()' style='font-size: 5em;'>Hello World</h1>";
    ?>
  <script>
    function callother(){
      console.log("deu certor")
    }
  </script>
</body>
</html>