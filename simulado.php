<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Simulado</title>
</head>

<body>
<div class="container text-center">
<h2><legend>Simulado</legend></h2></div>


<?php
require("bd.php");
$contador=0;
?>
<form action="submissao.php" name="form1" method="post">
<?php
foreach($questoes as $atual){$contador++;?>
    <div class="container fundinho-cinza questao">
    <span class="btn btn-info btn-xs">Questao <?php echo $contador;?></span> <?php echo ($atual["enunciado"])."<br>"; ?>
       <div class="alternativa"> <input type="radio" required name="<?php echo($contador);?>" value="a"> <?php echo($atual["a"]); ?></div>
        <div class="alternativa"> <input type="radio" name="<?php echo($contador);?>" value="b"> <?php echo($atual["b"]); ?></div>
            <div class="alternativa">   <input type="radio" name="<?php echo($contador);?>" value="c"> <?php echo($atual["c"]); ?></div>
                <div class="alternativa">   <input type="radio" name="<?php echo($contador);?>" value="d"> <?php echo($atual["d"]); ?></div>
    </div>
<?php }
?>
    <div class="container text-center">
        <button class="btn btn-success" type="submit">Submeter</button>
    </div>

</form>

</body>
</html>