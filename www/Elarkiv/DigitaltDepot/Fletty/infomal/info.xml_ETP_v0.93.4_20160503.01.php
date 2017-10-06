<?php
    // Template for info.xml from ESSArch Tools for Producer (ETP) v0.9.3_20160503.01

        $fil = $target_file;
        $dom = new DOMDocument();
        $dom->load($fil);

        $alleAgenter = $dom->getElementsByTagName( "agent" );
        $list = array();
        foreach($alleAgenter as $agent) {
            $nameElement =  $agent->getElementsByTagName( "name" );
            $name = $nameElement->item(0)->nodeValue;
            $list[] = $name;

            // /*
            // DEBUG: Vis alle elementer hentet fra info.xml
            echo $name . '<br/>';
            // /*
        }

        $institusjonsnavn = $list[0];   //All informasjon om uttrekket
        $systemnavn = $list[1];
        $systemversjon = $list[2];
        $systemtype = $list[3];
        $metsprodusent = $list[4];
        $uttrekksprodusent = $list[5];
        $personuttrekksprodusent = $list[6];
        $uttrekksapplikasjon = $list[7];
        $arkivskaper = $list[8];
        $arkivleder = $list[9];
        $eier = $list[10];
        $arkivdepot = $list[11];

        $navn = $dom->getElementsByTagName( "altRecordID" );

        $avtaleNr = $navn->item(0)->nodeValue;  // Informasjon om uttrekket
        $startDato = $navn->item(1)->nodeValue;
        $sluttDato = $navn->item(2)->nodeValue;

        $alleFiler = $dom->getElementsByTagName( "file" ); 
        foreach($alleFiler as $fil) {
            $checksumtype =  $fil->getAttribute( "CHECKSUMTYPE" );  //All informasjon om uttrekksfila
            $created = $fil->getAttribute("CREATED");
            $checksum = $fil->getAttribute("CHECKSUM");
            $uttrekksize = $fil->getAttribute("SIZE");
        }

        $navn = $dom->getElementsByTagName( "FLocat" );
        foreach($navn as $filNavn) {
            $filnavn = $filNavn->getAttribute("xlink:href");  //Informasjon om filnavn
        }

        $labelID = $dom->getElementsByTagName( "structMap" );
        foreach($labelID as $labelBeskrivelse) {

            $labelID = $labelBeskrivelse->getElementsByTagName( "div" ); //informasjon om uttrekket
            $label = $labelID->item(0)->getAttribute('LABEL');
            $kommentar = $labelID->item(1)->getAttribute('LABEL');
            $datafil = $labelID->item(2)->getAttribute('LABEL');
            $filID = $labelID->item(0)->getAttribute('LABEL');

        }
?>
