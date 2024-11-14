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
        <title>Percorso Gruppo Rosso</title>
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
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id0"> <span class = "ModTesto" id="p1"><b>Informatica</b><br>lab. 19<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id1"> <span class = "ModTesto" id="p2"><b>Elettronica/Telecomunicazioni</b><br>lab. 16/17<br>5 minuti + 5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id2"> <span class = "ModTesto" id="p3"><b>Elettrotecnica</b><br>OE scondo piano<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id3"> <span class = "ModTesto" id="p4"><b>Meccanica/Energia</b><br>lab. 49/Officinia Meccanica<br>5 minuti + 5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id4"> <span class = "ModTesto" id="p5"><b>Chimica/Biotecnologie</b><br>lab. 38/ACH<br>tot 10 min</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id5"> <span class = "ModTesto" id="p6"><b>Ottica</b><br>lab. 11<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id6"> <span class = "ModTesto" id="p7"><b>Moda</b><br>aula 02<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id7"> <span class = "ModTesto" id="p8"><b>Corso Quadriennale</b><br>aula 10<br>5 minuti</span>
                </form>
            </div>
        </div>    
    </body>
</html>
