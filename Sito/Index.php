<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Static/Css/Style.css">
        <script src="Static/Js/Index.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="container">
            <div class="col-6">
                <div class="rec_Sfondo">
            
                    <div class="row">
                        <div class="col-6">
                            <h1 class="title"> Quanto sarai povero </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <p class="Paraghrap">Giorni</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <input type="text" id="DurataLavoro" name="DurataLavoro" placeholder="Quanti giorni durerà il lavoro?">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p class="Campo_OBG">Campo obbligatorio</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <p class="Paraghrap">Ore giornaliere di lavoro</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <input type="text" id="QuantoLavori" name="QuantoLavori" placeholder="Quanto lavori al giorno?">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p class="Campo_OBG">Campo obbligatorio</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-1">
                            <p class="Paraghrap">Compenso orario</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <input type="text" id="PagamentoOra" name="PagamentoOra" placeholder="Quanto verrai pagato all’ora?">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p class="Campo_OBG">CaMpo obbligatorio</p>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-4">
                            <input type="submit" name="submit" value="Calcola">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <p>"Guadagnerai <b><span id="PagamentoLavoro"></span> €</b> lavorando <span id="DurataDelLavoro"></span> giorni al compenso di <span id="PagamentoPerOra"></span> €/h";</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])){
        
   
        $DurataLavoro = $_POST["DurataLavoro"];
        $LavoroPerGiorno = $_POST["QuantoLavori"];
        $PagamentoOra = $_POST["PagamentoOra"];

        $PagamentoLavoro = ($LavoroPerGiorno*$PagamentoOra)*$DurataLavoro;

        echo "<script> Stampa($PagamentoLavoro, $DurataLavoro, $PagamentoOra); </script>";
        
    }
?>