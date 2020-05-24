<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#222;
            
        }
    .container{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        width:100%;
        font-family:arial;
        size:18pt;
    }
     .form{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width:30%;
        background-color: #555;
        padding:10px;
        margin-top:100px;
        height: 60vh;
        border-radius: 20px;
        
     }
    .input{
        padding: 10px;
        margin: 10px;
        width: 80%;
        background-color:#222;
        border:none;
        color:#fff;
    }
    .select{
     width:85%;
     padding:10px;
     margin:10px;
     background-color:#222;
     color:#fff;
     border:none;
    }
    .button{
        width:85%;
        margin-top:20px;
        padding:10px;
        background-color:#3db372;
        color:#222;
        font-size:12pt;
        font-family: verdana;
        border-radius:15px;
    }
    .resultado{
        width:100%;
        text-align:center;
        border-top:20px solid #222;
        padding:10px;
        margin:20px;
        color:#36cbd6;
        font-size:18pt;
        text-decoration:underline;
    }
    .h3{
        width:100%;
        text-align:center;
        padding:10px;
        border-bottom:20px solid #222;
        text-decoration:underline #36cbd6;
    }
    </style>
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
        <div class="resultado"><?php require"Calculadora.php"?></div> 
    </form>
</div>
</body>
</html>