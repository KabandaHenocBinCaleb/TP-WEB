<?php
function addition($n1,$n2){
   echo "$n1 + $n2 = ".$n1+$n2;
}
function comparer($n1,$n2){
if ($n1>$n2) {
   echo "$n1 est supérieur à $n2";
}
else{
    echo "$n2 est supérieur à $n1";
}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1 WEB</title>
</head>

<body>
<style>
body{
    display: flex;
}
.question{
width: 30%;
height: 700px;
background-color: red;
display: flex;
align-items: center;
flex-direction: column;
justify-content: space-around;
}
.reponse{
width: 70%;
height: 700px;
background-color: green;
display: flex;
align-items: center;
justify-content: center;

}
.question input{
    width: 100%;
    padding: 8px;
    margin-top: 10px;
}
input{
   
}
form{
    margin: 20px;
}
</style>
<div class="question">
<form method="post">
    
    <input type="submit" value="addition de 2 nombre" name="addition"> <br>
    <input type="submit" value="plus grand nombre" name="grand"><br>
    <input type="submit" value="jours de la semaine" name="addition"><br>
    <input type="submit" value="carre" name="carre"><br>
    <input type="submit" value="triagle" name="triagle"><br>
    <input type="submit" value="cercle" name="cercle"><br>
    <input type="submit" value="losange" name="losange"><br>
    <input type="submit" value="cube" name="cube"><br>
    <input type="submit" value="sinus et cosinus" name="sinus"><br>
    <input type="submit" value="conversion fc en $" name="conversion"><br>
    <input type="submit" value="salaire aft" name="salaire"><br>
    <input type="submit" value="afficher le nom du user x fois" name="afficher"><br>

</form>
</div>

<div class="reponse">
    <div>
<?php
if(isset($_POST["addition"])):
?>
<form method="post" name="a">
<input type="number" placeholder="premier nombre" name="n1"> + 
<input type="number" placeholder="deuxieme nombre" name="n2"> 
<input type="submit" value="calculer" name="=">

</form>
<?php
endif;
?>
<?php if (isset($_POST["="])) {
   
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    addition($n1,$n2);
}
?>
<?php
if(isset($_POST["grand"])):
?>
<form method="post" name="b">
<input type="number" placeholder="premier nombre" name="n1"> et 
<input type="number" placeholder="deuxieme nombre" name="n2"> 
<input type="submit" value="comparer" name="comparer">
</form>
<?php
endif;
?>
<?php if (isset($_POST["comparer"])) {
   
   $n1=$_POST["n1"];
   $n2=$_POST["n2"];
   comparer($n1,$n2);
}
?>
<?php
if(isset($_POST["autre"])):
?>


<form method="post" name="c">
<input type="number" placeholder="côté">
<input type="submit" value="calculer" name="ccarre">
</form>

<form method="post" name="d">
<input type="number" placeholder="base"> et 
<input type="number" placeholder="hauteur"> 
<input type="submit" value="calculer" name="ctriangle">
</form>

<form method="post" name="e">

</form>

<form method="post" name="f">

</form>

<form method="post" name="g">

</form>

<form method="post" name="h">

</form>

<form method="post" name="i">
<input type="number" placeholder="angle">
<input type="submit" value="calculer" name="cangle">
</form>

<form method="post" name="j">

</form>
<form method="post" name="k">

</form>

<form method="post" name="l">
<input type="text" placeholder="nom">
<input type="number" placeholder="nombre de fois">
<input type="submit" value="afficher" name="affnom">
</form>
<?php
endif;
?>
</div>
</div>
</body>
</html>