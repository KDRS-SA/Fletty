<?php
    // Template for info.xml from ESSArch Tools for Producer (ETP) v0.9.3_20160503.01

        $fil = $target_file;
        $dom = new DOMDocument();
        $dom->load($fil);

        $x = $dom->getElementsByTagName("navn");
        $arkivleder = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("telefon");
        $telefonnummer = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("arkivskaper");
        $arkivskaper = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("uttrekksdato");
        $uttrekksdato = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("metode");
        $uttrekksapplikasjon = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("produsent");
        $uttrekksprodusent = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("systemType");
        $systemtype = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("databaseplattform");
        $databaseplattform = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("filnavn");
        $filnavn = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("sjekksum");
        $checksum = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("algoritme");
        $checksumtype = $x->item(0)->nodeValue;

        $x = $dom->getElementsByTagName("kommentar");
        $kommentar = $x->item(0)->nodeValue;


        /*$arkivskaperinfo = $dom->getElementsByTagName( "arkivskaperInfo" );
        foreach($arkivskaperinfo as $arkivskaperInfo) {
            $navn = $arkivskaperInfo->getElementsByTagName( "kontaktperson" );
            $kontaktperson = $navn->getElementsByTagName("navn");
            $telefonnummer = $navn->getElementsByTagName("telefon");
            $arkivskaper = $arkivskaperInfo->getElementsByTagName("arkivskaper");
            echo " " . $navn . " - " . $kontaktperson . " - " . $telefonnummer . " ";
        } 	*/
?>
