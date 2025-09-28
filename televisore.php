<?php

    // --- DATI TELEVISORE ---
    $marca = $_GET['marca'];
    $modello = $_GET['modello'];
    $porteHDMI = (int)$_GET['porte_hdmi'];
    $refreshRate = (int)$_GET['refresh_rate'];
    $risoluzione = $_GET['risoluzione'];

    echo "<h2>Dettagli Televisore</h2>";
    echo "Marca: $marca <br>";
    echo "Modello: $modello <br>";
    echo "Porte HDMI: $porteHDMI <br>";
    echo "Refresh Rate: $refreshRate Hz <br>";
    echo "Risoluzione: $risoluzione <br>";

    echo "<h2>Consigli per l'acquisto</h2>";

    $ok = true;

    if ($porteHDMI < 2) {
        echo "Consiglio: Considera un televisore con almeno 2 porte HDMI.<br>";
        $ok = false;
    }

    if ($refreshRate < 50) {
        echo "Consiglio: scegli un televisore con refresh rate almeno 50Hz.<br>";
        $ok = false;
    }

    if ($risoluzione == "HD Ready" || $risoluzione == "Full HD") {
        echo "Consiglio: scegli un televisore Ultra HD o 4K.<br>";
        $ok = false;
    }

    if ($ok) {
        echo "Il televisore selezionato soddisfa tutti i criteri consigliati!";
    }
?>