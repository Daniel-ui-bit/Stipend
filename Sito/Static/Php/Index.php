<?php
if (isset($_POST["submit"])){
        
    function CalcoloGuadagno(){
        $DurataLavoro = $_POST["DurataLavoro"];
        $LavoroPerGiorno = $_POST["QuantoLavori"];
        $PagamentoOra = $_POST["PagamentoOra"];

        $PagamentoLavoro = ($LavoroPerGiorno*$PagamentoOra)*$DurataLavoro;

        echo "<span>Guadagnerai <b>$PagamentoLavoro €</b> lavorando $DurataLavoro giorni al compenso di $PagamentoOra €/h</span>"
    }
    }
?>