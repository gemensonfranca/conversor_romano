<?php

// IMPORTAR MINHA CLASS DE CONVERSÃO
include_once "class/class_conversao.php";

// INICIAR A CLASS ALGARISMOS
$algarismo = new Conversao();

if (isset($_GET['arabico'])) {

    $algarismo->arabico = $_GET['arabico'];
}

@$arabico = $algarismo->converterArabico();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Romano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    @media all and (min-width:2px) and (max-width:742px) {
        #coluna_1, #coluna_3{
            width: 0px;
            padding: 0px;
        }
        #coluna_2{
            width: 80%;
            padding: 0px;
            margin: 0px 10%;
        }
    }
</style>

<body>
    <main class="form-signin">

        <div class="row">
            <div id="coluna_1" class="col-4"></div>
            <div id="coluna_2" class="col-4 pt-5">

                <h1 class="h3 mb-3 fw-normal pb-5"><b>Conversor Romanos/Arábicos</b></h1>

                <div class="row pb-3">
                    <div class="col-6"><a href="romanos.php"><button style="width: 100%; font-size: 14px;" type="button" class="btn btn-primary btn-lg">Converter Romanos</button></a></div>
                    <div class="col-6"><a href="arabicos.php"><button style="width: 100%; font-size: 14px;" type="button" class="btn btn-secondary btn-lg">Converter Arábicos</button></a></div>
                </div>

                <?php include "components/form_arabicos.php"; ?>

                <p class="mt-5 mb-3 text-muted text-center">Desenvolvido por Gemenson França &copy; <?php echo date('Y')?></p>
            </div>
            <div id="coluna_3" class="col-4"></div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>