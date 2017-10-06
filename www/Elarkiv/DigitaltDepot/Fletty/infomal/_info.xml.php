<?php
    // Loads all Templates for info.xml (update with new sections when new structural versions of info.xml is available)

    // TODO 2017-10-06 TAA: replace hardcoded 'mets' and 'info' with php varibales in an include_once settings file for reuse and central change

    // #1 ETP v0.93.4_20160503.01
    // if ($typeFil == 'etp_v0.93.4') {
    if ($typeFil == 'metsfil') {
        include "infomal/info.xml_ETP_v0.93.4_20160503.01.php";
    }// if metsfil slutt
    
    // #2 Arkade5 v1.0.4.0
    elseif ($typeFil == 'arkade5_v1.0.4.0') {
        include "infomal/info.xml_Arkade5_v1.0.4.0.php";
    }

    // #3 IKA Kongsberg v1.0
    // elseif ($typeFil == 'ikak_infofil') {
        elseif ($typeFil == 'infofil') {
        include "infomal/info.xml_ikakongsberg_v1.0.php";
    } //elseif
?>
