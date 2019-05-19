<?php
    $serverName = "tcp:dicodingwebappamsolserver.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "dicodingamsoldb", // update me
        "Uid" => "dicoding", // update me
        "PWD" => "rakan@ra19" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * from biodata";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['id'] . " " . $row['nama'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
