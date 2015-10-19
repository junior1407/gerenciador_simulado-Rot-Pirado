<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Simulado</title>
</head>

<body>
<div class="container text-center">
    <h1>
        <legend>Resultado</legend>
    </h1>
</div>


<?php

require("bd.php");
$contador = 0;
$acertos = 0;
?>

<?php
foreach ($questoes as $atual) {

    $contador++;

    $certa = $atual["certa"];
    $marcada = $_POST[$contador];
    if ($certa == $marcada) {
        $acertos++;

    }

    ?>
    <div class="container fundinho-cinza questao">
        <div class="numero-questao">Questao <?php echo $contador; ?></div> <?php echo ($atual["enunciado"]) . "<br>"; ?>
        <div class="alternativa ">
            <input <?php if ($marcada == 'a') {
                echo "checked ";
            } ?>type="radio" required name="<?php echo($contador); ?>" value="a">
            <?php echo($atual["a"]);
            if (('a' == $marcada) && ('a' != $certa)) {
                echo('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('a' == $certa) {
                echo('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'b') {
                echo "checked ";
            } ?>type="radio" name="<?php echo($contador); ?>" value="b">
            <?php echo($atual["b"]);
            if (('b' == $marcada) && ('b' != $certa)) {
                echo('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('b' == $certa) {
                echo('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'c') {
                echo "checked ";
            } ?>type="radio" name="<?php echo($contador); ?>" value="c">
            <?php echo($atual["c"]);
            if (('c' == $marcada) && ('c' != $certa)) {
                echo('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('c' == $certa) {
                echo('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'd') {
                echo "checked ";
            } ?>type="radio" name="<?php echo($contador); ?>" value="d">
            <?php echo($atual["d"]);
            if (('d' == $marcada) && ('d' != $certa)) {
                echo('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('d' == $certa) {
                echo('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
    </div>


<?php }
?>
<div class="container ">
    <h4 class="text-center"> Pontuação </h4>

    <div class="col-lg-offset-4 col-lg-2 text-center">
        Acertos :
    </div>
    <div class="col-lg-2 text-center ">
        <?php
        echo ($acertos) . " / " . count($questoes) . " ( " . number_format(($acertos * 100 / count($questoes)), 2, ",", ".") . "% )"; ?>
    </div>
    <div class="col-lg-offset-4"></div>
</div>


</body>
</html>