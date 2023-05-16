<?php
$num01 = filter_input(INPUT_POST, "alt");
$num02 = filter_input(INPUT_POST, "larg");
$opera = filter_input(INPUT_POST, "form");
$resul = "";
 
if($num01 && $num02){
  switch($opera){
    case "q":
      $resul = ($num01 * $num02);
    break;
    case "t":
      $resul = ($num01 * $num02 / 2);
    break;
  }
}
 
?>
 
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
       @font-face {
        font-family: Ubuntu;
        src: url('ubunto/Ubuntu-Regular.ttf')format('opentype');
      }
      input, select{
        padding:10px;
        margin: 5px;
        border: 1px solid #00FA9A;
        border-radius: 8px;
      }
      div{
        color:#fff;
        position:absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
      }
      body{
        font-family:Ubuntu;
        font-size:20px;
        background-image: url(fund.jpg);
        background-size: 100%;
      }
      .t{
        width: 400px;
        height: 350px;
        color:#fff;
        position:absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        background-color: #000;
        opacity: .6;
        border: 1.5px solid #fff;
      }
     </style>
     <link rel="stylesheet" href="ubunto/Ubuntu-Regular.ttf">
   </head>
   <body>
    <div class = "t">
    </div>
    <div> 
     <form method="post">
       <label>Digite a altura: <input type="text" name="alt"/></label><br>
       <label>Digite a largura: <input type="text" name="larg"/></label><br>
       <label>Forma
         <select name="form">
           <option value="q">Quadrado</option>
           <option value="t">Triangulo</option>
         </select>
       </label><br>
       <center><input type="submit" name="btnCalcular" value="Calcular"></center>
     </form>
     <h1>Resultado:  <?=$resul;?></h1>
    </div>
   </body>
 </html>
