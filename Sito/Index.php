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
            <div class="col-12">
                <div class="rec_Sfondo">
            
                    <div class="row">
                        <div class="col-12">
                            <h1 class="title"> Quanto sarai povero? </h1>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12">
                            <p class="Paraghrap"><b>Giorni</b></p> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="number" id="DurataLavoro" name="DurataLavoro" placeholder="Quanti giorni durerà il lavoro?" class="Text-box">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <hr class="Linea">
                            <?php
                                if (isset($_POST["submit"])){
                                
                                $DurataLavoro = $_POST["DurataLavoro"];
                                
                                if($DurataLavoro == null ){
                                    echo "<p class='Campo_OBG'>Campo obbligatorio</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="Paraghrap">Ore giornaliere di lavoro</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="number" id="QuantoLavori" name="QuantoLavori" placeholder="Quanto lavori al giorno?" class="Text-box">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <hr class="Linea">
                            <?php
                                if (isset($_POST["submit"])){
                                
                                $LavoroPerGiorno = $_POST["QuantoLavori"];
                                
                                if($LavoroPerGiorno == null ){
                                    echo "<p class='Campo_OBG'>Campo obbligatorio</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="Paraghrap">Compenso orario</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="number" id="PagamentoOra" name="PagamentoOra" placeholder="Quanto verrai pagato all’ora?" class="Text-box">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <hr class="Linea">
                            <?php
                                if (isset($_POST["submit"])){
                                
                                $PagamentoOra = $_POST["PagamentoOra"];
                                
                                if($PagamentoOra == null ){
                                    echo "<p class='Campo_OBG'>Campo obbligatorio</p>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="submit" value="CALCOLA" class="Button">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <?php
                                if (isset($_POST["submit"])){
                                
                                $DurataLavoro = $_POST["DurataLavoro"];
                                $LavoroPerGiorno = $_POST["QuantoLavori"];
                                $PagamentoOra = $_POST["PagamentoOra"];
                                
                                if($DurataLavoro != null && $LavoroPerGiorno != null && $PagamentoOra != null ){
                                    
                                    if( $DurataLavoro>=0 && $LavoroPerGiorno>=0 && $PagamentoOra>=0 )
                                        {
                                            $PagamentoLavoro = ($LavoroPerGiorno*$PagamentoOra)*$DurataLavoro;
                                            echo "<p class='Result'>Guadagnerai <b>$PagamentoLavoro</b> lavorando $DurataLavoro giorni al compenso di <br>$PagamentoOra €/h</p>";
                                        }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</body>
</html>

