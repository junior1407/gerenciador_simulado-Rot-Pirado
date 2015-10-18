<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Simulado</title>
</head>

<body>
<div class="container text-center">
    <h2><legend>Resultado</legend></h2></div>


<?php
header('Content-Type: text/html; charset=utf-8');

require("bd.php");
$contador=0;
$acertos=0;
?>

    <?php
    foreach($questoes as $atual){

        $contador++;

        $certa= $atual["certa"];
        $marcada=$_POST[$contador];
        if ($certa==$marcada){
            $acertos++;

        }

        ?>
        <div class="container fundinho-cinza questao">
            <div class="numero-questao">Questao <?php echo $contador;?></div> <?php echo ($atual["enunciado"])."<br>"; ?>
            <div class="alternativa <?php if ('a'==$certa){echo " certa";} if (('a'==$marcada)&&('a'!=$certa)){ echo " errada";}?>"> <input <?php if ($marcada=='a'){echo "checked ";}?>type="radio" required name="<?php echo($contador);?>" value="a"> <?php echo($atual["a"]); ?></div>
            <div class="alternativa<?php if ('b'==$certa){echo " certa";} if (('b'==$marcada)&&('b'!=$certa)){ echo " errada";}?>"> <input <?php if ($marcada=='b'){echo "checked ";}?>type="radio" name="<?php echo($contador);?>" value="b"> <?php echo($atual["b"]); ?></div>
            <div class="alternativa<?php if ('c'==$certa){echo " certa";} if (('c'==$marcada)&&('c'!=$certa)){ echo " errada";}?>">   <input <?php if ($marcada=='c'){echo "checked ";}?>type="radio" name="<?php echo($contador);?>" value="c"> <?php echo($atual["c"]); ?></div>
            <div class="alternativa<?php if ('d'==$certa){echo " certa";} if (('d'==$marcada)&&('d'!=$certa)){ echo " errada";}?>">   <input <?php if ($marcada=='d'){echo "checked ";}?>type="radio" name="<?php echo($contador);?>" value="d"> <?php echo($atual["d"]); ?></div>
        </div>

    <?php }
    ?>
<div class="container">
    <div class="col-lg-6">
          Acertos : <?php echo ($acertos."/".count($questoes));?>
</div></div>


</body>
</html>