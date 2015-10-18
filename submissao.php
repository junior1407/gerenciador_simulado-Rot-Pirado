<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Simulado</title>
</head>

<body>
<div class="container text-center">
    <h2>
        <legend>Resultado</legend>
    </h2>
</div>


<?php
header('Content-Type: text/html; charset=utf-8');

require("bd.php");
$contador = 0;
$acertos = 0;
?>A

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
            <input <?php if ($marcada == 'a') {echo "checked ";} ?>type="radio" required name="<?php echo($contador); ?>" value="a">
                <?php echo($atual["a"]);
                if (('a' == $marcada) && ('a' != $certa)) {
                    echo ('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
                }
                if ('a'==$certa){
                    echo ('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
                 }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'b') {echo "checked ";} ?>type="radio" required name="<?php echo($contador); ?>" value="b">
            <?php echo($atual["b"]);
            if (('b' == $marcada) && ('b' != $certa)) {
                echo ('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('b'==$certa){
                echo ('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'c') {echo "checked ";} ?>type="radio" required name="<?php echo($contador); ?>" value="c">
            <?php echo($atual["c"]);
            if (('c' == $marcada) && ('c' != $certa)) {
                echo ('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('c'==$certa){
                echo ('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        <div class="alternativa ">
            <input <?php if ($marcada == 'd') {echo "checked ";} ?>type="radio" required name="<?php echo($contador); ?>" value="d">
            <?php echo($atual["d"]);
            if (('d' == $marcada) && ('d' != $certa)) {
                echo ('   <span style="color: red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>');
            }
            if ('d'==$certa){
                echo ('   <span style="color: green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
            }
            ?></div>
        </div>


<?php }
?>
<div class="container">
    <div class="col-lg-6">
        Acertos : <?php echo($acertos . "/" . count($questoes)); ?>
    </div>
</div>


</body>
</html>