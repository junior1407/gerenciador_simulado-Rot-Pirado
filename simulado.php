<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
</html>
<body>
<?php
header('Content-Type: text/html; charset=utf-8');
require("bd.php");
$contador=0;
foreach($questoes as $atual){$contador++;?>
        <h1> <?php echo ($atual["enunciado"])."<br>"; ?></h1>
        <input type="radio" name="quest<?php echo($contador);?>" value="a"> <?php echo($atual["a"]); ?>
       <input type="radio" name="quest<?php echo($contador);?>" value="b"> <?php echo($atual["b"]); ?>
         <input type="radio" name="quest<?php echo($contador);?>" value="c"> <?php echo($atual["c"]); ?>
         <input type="radio" name="quest<?php echo($contador);?>" value="d"> <?php echo($atual["d"]); ?>


<?php }
?>
</body>
</html>