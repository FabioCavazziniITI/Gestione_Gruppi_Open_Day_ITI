let nRosso = 0;
let nBlu = 0;
let nGiallo = 0;
let nVerde = 0;
let nViola = 0;
let nLimite = 5;

let img_colori = [];

function contatore(colore)
{

    switch(colore)
    {
        case "rosso": 
        {
            if(nRosso < nLimite)
            {
                nRosso++;
               
                document.getElementById('hRosso').value=nRosso;
				document.getElementById('pRosso').innerHTML=nRosso+"/"+nLimite;
				
                if(nRosso == nLimite)
                    document.getElementById("rosso").style.filter = "grayscale(100%)";
            }
			break;
        }
        case "blu":
        {
            if(nBlu < nLimite)
            {
                nBlu++;
                //aggiornare numero del colore
				document.getElementById('hBlu').value=nBlu;
                document.getElementById("pBlu").innerHTML=nBlu+"/"+nLimite;

                if(nBlu == nLimite)
                document.getElementById("blu").style.filter = "grayscale(100%)";
            }
			break;
        }

        case "giallo":
        {
            if(nGiallo < nLimite)
            {
                nGiallo++;
                //aggiornare numero del colore
				document.getElementById('hGiallo').value=nGiallo;
                document.getElementById("pGiallo").innerHTML=nGiallo+"/"+nLimite;

                if(nGiallo == nLimite)
                document.getElementById("giallo").style.filter = "grayscale(100%)";
            }
			break;
        }
        case "verde":
        {
            if(nVerde < nLimite)
            {
                nVerde++;
                //aggiornare numero del colore
				document.getElementById('hVerde').value=nVerde;
                document.getElementById("pVerde").innerHTML=nVerde+"/"+nLimite;
                
                    if(nVerde == nLimite)
                    document.getElementById("verde").style.filter = "grayscale(100%)";
            }   
			break;
        }
        case "viola":
        {
            if(nViola < nLimite)
            {
                nViola++;
                //aggiornare numero del colore
				document.getElementById('hViola').value=nViola;
                document.getElementById("pViola").innerHTML=nViola+"/"+nLimite;

                if(nViola == nLimite)
                document.getElementById("viola").style.filter = "grayscale(100%)";
            }
			break;
        }
    }

    if((nRosso >= nLimite)&&(nBlu >= nLimite)&&(nGiallo >= nLimite)&&(nVerde >= nLimite)&&(nViola >= nLimite))
    {
        nLimite += 5;

        img_colori = document.getElementsByTagName('img');

        for(let i=0; i<6; i++)
        {
            img_colori[i].style.filter ="none";
        }
    }
}