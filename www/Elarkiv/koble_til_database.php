<?php
    $servername = 'localhost';
    $username = 'databaseuser';
    $password = 'somepassword';
    $dbname = 'fletty';

    // Koble til databasen
    $db = new mysqli($servername, $username, $password, $dbname);
    $db->set_charset('utf8mb4');

    // print "Prøver å opprette kobling til " . PHP_EOL;
	// print "server (" . $servername . "), " . PHP_EOL;
	// print "database (" . $dbname . "), " . PHP_EOL;
	// print "brukernavn (*****), " . PHP_EOL;
	// print "passord (*****)" . PHP_EOL;

    // Sjekk tilkobling
    if ($db->connect_error) {
        print "Kunne ikke koble til database (" . $db->connect_error . ")" . PHP_EOL;
        
    }
    // else {
    //        print "Koblet til database" . PHP_EOL;
    // }
?>
