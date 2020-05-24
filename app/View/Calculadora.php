<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    
</head>
<body>
    <div class="container">
        
    <form class="form" method="post">
        <h3 class="h3">Calculadora</h3>
        <input class="input" type="number" name="n1" placeholder="Primeiro numero">
        <input class="input" type="number" name="n2" placeholder="segundo numero">
        <select class="select" name="option">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <button class="button" type="submit">Calcular</button>
        <div class="resultado"><?php require"Controller/Calculadora.php"?></div> 
    </form>
</div>
</body>
</html>