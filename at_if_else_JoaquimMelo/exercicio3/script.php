<?php
// Variaveis
$altura = floatval($_POST['altura']);
$peso = floatval($_POST['peso']);

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $mensagem  = "Abaixo do peso! ";

} elseif ($imc >= 18.5 && $imc <= 24.9 ) {
    $mensagem  = "Peso Normal! ";

} elseif ($imc >= 25.0 && $imc <= 29.9 ){ 
    $mensagem  = "Sobre Peso! ";

}elseif ($imc >= 30.0 && $imc <= 34.9 ) {
    $mensagem  = "Obessidade I! ";

}   elseif ($imc >= 35 ) {
    $mensagem  = "Obessidade II! ";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado IMC</title>
  <style>
       body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .result-box {
      background: rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(15px);
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 32px 0 rgba(46, 46, 46, 0.37);
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 320px;
      text-align: center;
    }

    h1 {
      margin-bottom: 15px;
      color: whitesmoke;
    }

    p {
      font-size: 1.2rem;
      font-weight: bold;
      color: whitesmoke;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background: #fff;
      color: #f12711;
      padding: 10px 20px;
      border-radius: 10px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    a:hover {
      background: #f5f5f5;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Resultado do IMC</h1>
    <p>Seu IMC é: <?php echo number_format($imc, 2); ?></p>
    <p>Classificação: <?php echo $mensagem; ?></p>
    <a href="index.html">⏪ Voltar</a>
  </div>
</body>
</html>