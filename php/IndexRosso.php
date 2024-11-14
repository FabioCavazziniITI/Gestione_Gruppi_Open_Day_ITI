<!DOCTYPE>
<html>
    <?php
        session_start();

         $array = json_decode(file_get_contents('../dati.txt'), true);
        foreach ($array as $key=>$value)
        { 
            if ($key=="valueRosso")
            { 
                echo "<span class='stylecolor'>".$value."</span>";
            }
        }
    ?>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="../css/CssIndexRosso.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Percorso1</title>
        <script>
function cambiaeInvia()
{
var i,j;
var arrivato = document.forms[0];
for (i = 0; i < arrivato.length; i++)
{
if (arrivato[i].checked)
{
j=i;
}
}

document.getElementById("id"+j).disabled = true;
// document.forms[0].submit();

document.getElementById("p"+j).style.textDecoration = "line-through";
}
</script>
    </head>
    
    <body>
        <div id = "Contenitore">
            <div id = "ImgColoreRosso">
                <img src="../img/rosso.jpg" class = "ModImmagine">
                <p class = "ModGuida">Rosso</p>
            </div>
            
            <div id = "Questinario">
                <form action="pagina_invisibile2.php" method="post">
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id0"> <span class = "ModTesto" id="p0">Informatica (lab. 19) [5minuti+5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id1"> <span class = "ModTesto" id="p1">Elettronica/Telecom (lab. 16/17) [5minuti+5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id2"> <span class = "ModTesto" id="p2">Elettrotecnica (OE secondo piano) [5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id3"> <span class = "ModTesto" id="p3">Meccanica / Energia (capannone) [5minuti+5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id4"> <span class = "ModTesto" id="p4">Chimica / Biotec (lab. 38/ACH) [5minuti+5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id5"> <span class = "ModTesto" id="p5">Ottico (lab 12) [5minuti]</span><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id6"> <span class = "ModTesto" id="p6">Moda (aula 2) [5minuti]</span><br>
                </form>
            </div>
        </div>    
    </body>
</html>