<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA DE IDADE</title>
    <style>
        body{
            background-color:pink;
        }
        h1{
            color:white;
            font-size:40px
                        
        }
        #central{
            display:flex;  
            flex-direction:column;
            align-items:center;          
            background-color:gray;
            height:700px;
            width:700px;
            margin-left:auto;
            margin-right:auto;
            margin-top:50px;
            border-radius:30px;
           
        }
        #textinput{
            color:gray;
        }
        h2{
            display:flex;
            width:50px;
            flex-direction:column;
            align-items:left;
            color:white;
            text-align:end;
            margin-left:auto;
            margin-right:600px;
            justify-content:space-evenly;
        }
        #ipt{
            border-radius:10px;
        }
    </style>
</head>
<body>
    <div id="central">
        <form method="get" action="01valor.php">
            <input  id="ipt" type="number" name="v"/>
            <input  id="ipt" type="submit" value="calcular Raiz"/>
    </div>
</body>
 
</html>