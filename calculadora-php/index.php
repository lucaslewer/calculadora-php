<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Calculadora PHP</title>
</head>
<body class="text-center">
    <div class="row">
        <div class="col">
            <h1>Calculadora</h1>
        </div>
    </div>
    <br>
    <form name="calculadora" method="POST">
        <div class="row">
            <div class="col">
                1º Número: <input type="number" name="num1" id="num1">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="col">
                    2º Número: <input type="number" name="num2" id="num2">
            </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-outline-dark" name="operacao" value="Adição (+)">
                <input type="submit" class="btn btn-outline-dark" name="operacao" value="Subtração (-)">
                <input type="submit" class="btn btn-outline-dark" name="operacao" value="Multiplicação (*)">
                <input type="submit" class="btn btn-outline-dark" name="operacao" value="Divisão (/)">
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['num1'])){
            $num1 = $_POST['num1'];
        }
        if(isset($_POST['num2'])){
            $num2 = $_POST['num2'];
        }
        
        if(isset($_POST['operacao'])){
            switch ($_POST['operacao']){
                case "Adição (+)":
                    if($num2 < 0){
                        echo "<br><h5>Adição: $num1 + ($num2) = " . $num1 + $num2 . "</h5>";
                    }else{
                        echo "<br><h5>Adição: $num1 + $num2 = " . $num1 + $num2 . "</h5>";
                    }
                    break;
                case "Subtração (-)":
                    if($num2 < 0){
                        echo "<br><h5>Subtração: $num1 - ($num2) = " . $num1 - $num2 . "</h5>";
                    }else{
                        echo "<br><h5>Subtração: $num1 - $num2 = " . $num1 - $num2 . "</h5>";
                    }
                    break;
                case "Multiplicação (*)":
                    if($num2 < 0){
                        echo "<br><h5>Multiplicação: $num1 * ($num2) = " . $num1 * $num2 . "</h5>";
                    }else{
                        echo "<br><h5>Multiplicação: $num1 * $num2 = " . $num1 * $num2 . "</h5>";
                    }
                    break;
                case "Divisão (/)":
                    if($num2 < 0){
                        echo "<br><h5>Divisão: $num1 / ($num2) = " . $num1 / $num2 . "</h5>";
                    }else if($num2 == 0){
                        echo "<br><h5>ERRO: não foi possível realizar a divisão de $num1 por 0";
                    }else{
                        echo "<br><h5>Divisão: $num1 / $num2 = " . $num1 / $num2 . "</h5>";
                    }   
            }
        }
    ?>
</body>
</html>