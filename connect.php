
<?php  

// SQL Server Extension Sample Code:

    $host = "tcp:dicodingwebappamsolserver.database.windows.net";
    $user = "dicoding";
    $pass = "rakan@ra19";
    $db = "dicodingamsoldb";
    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }

    ?>

