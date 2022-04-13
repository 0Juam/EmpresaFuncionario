<?php
require_once 'classe.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicial</title>
</head>
<body> 
    <div id="tela">
        <center>
    <img src="../img/form.png" style="heigh:120px; width:120px; center;" alt="imagemzinha">
    <br><br>
        </center>
        
    <form method="POST">
    <h2>Digite as informações do funcionario:</h2><br>
    <input type="text" name="nome" id="nome" value="" placeholder="Nome:" required><br><br>
    <input type="text" name="cidade" id="cidade" value="" placeholder="Cidade:" required><br><br>
    <input type="number" name="salHR" id="salHR" value="" placeholder="Salário por Hora:" required><br><br>
    <input type="number" name="horasTB" id="horasTB" value="" placeholder="Horas trabalhadas:" required><br><br><br>
    <h2>Selecione a opção:</h2>
    <br>
    <select name="select" id="select">
      <option value="1">Cadastrar</option>
      <option value="2">Calcular salário</option>
      <option value="3">Dar aumento</option>
      <option value="4">Mostrar dados</option>
      <option value="0">Sair</option>
    </select>
    <br><br>
    <h2>Opcional (dar aumento):</h2>
    <br>
    <input style="width: 70px;" type="number" name="aumento" id="aumento" value="" placeholder="valor">
    
    <center>
        <br><br>
    <button class="botao" type="submit" name="enviar">Enviar</button>
    </center>
    <br><br>
    <center>
    <?php
if(isset($_POST['enviar'])){
    $func = new Funcionario();
    $func->setNome($_POST['nome']);
    $func->setCidade($_POST['cidade']);
    $func->setSalHora($_POST['salHR']);
    $func->setHorasTrab($_POST['horasTB']);

    switch ($_POST['select']) {
        case 1:
            $resultado = "Funcionario cadastrado!";
            break;
        case 2:
            $resultado = $func->calcularSalario();
            break;
        case 3:
            $resultado = $func->darAumento($_POST['aumento']);
            break;
        case 4:
            $resultado = $func->mostrarDados();
            break;
        case 0:
            $resultado = "Saiu!";
            break;
        default:
            $resultado = "Escolha uma opção!";
            break;
    }
    
    echo "<span><strong>".$resultado."<strong></span>";

}
?>
</center>
<br>
</div>
</body>
</html>