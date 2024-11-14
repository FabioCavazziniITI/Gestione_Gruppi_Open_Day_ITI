<!DOCTYPE>
<html>
    <?php
        session_start();
        
        $array = json_decode(file_get_contents('../dati.txt'), true);
        foreach ($array as $key=>$value)
        { 
            if ($key=="valueGiallo")
            {
                echo "<span class='stylecolor'>".$value."</span>";
            }
        }
    ?>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="../css/CssIndexGiallo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Percorso Gruppo Giallo</title>
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
            <div id = "ImgColoreArancione">
                <img src="../img/giallo.jpg" class = "ModImmagine">
                <p class = "ModGuida">Giallo</p>
            </div>
            
            <div id = "Questinario">
                <form action="pagina_invisibile2.php" method="post">
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id0"> <span class = "ModTesto" id="p1"><b>Elettronica/Telecomunicazioni</b><br>lab. 16/17<br>5 minuti + 5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id1"> <span class = "ModTesto" id="p2"><b>Elettrotecnica</b><br>OE secondopiano<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id2"> <span class = "ModTesto" id="p3"><b>Meccanica/Energia</b><br>lab 49/Officina Meccanica<br>5 minuti + 5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id3"> <span class = "ModTesto" id="p4"><b>Chimica/Biotecnologie</b><br>lab. 38/ACH<br>tot 10 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id4"> <span class = "ModTesto" id="p5"><b>Ottica</b><br>lab. 11<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id5"> <span class = "ModTesto" id="p6"><b>Corso Quadriennale</b><br>Aula 10<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id6"> <span class = "ModTesto" id="p7"><b>Moda</b><br>Aula 02<br>5 minuti</span><br><br><br>
                    <input onchange="cambiaeInvia()" type="radio" class="ModCheckbox" name="Rad" id="id7"> <span class = "ModTesto" id="p8"><b>Informatica</b><br>lab. 19<br>5 minuti</span>
                </form>
            </div>
        </div>    
    </body>
</html>