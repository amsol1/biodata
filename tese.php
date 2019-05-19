<?php  
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dicoding@dicodingwebappamsolserver", "pwd" => "{rakan@ra19}", "Database" => "dicodingamsoldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dicodingwebappamsolserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
    $tsql= "select * from biodata";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['id'] . " " . $row['nama'] . PHP_EOL);
     
     echo '.$getResults.';
    }
    sqlsrv_free_stmt($getResults);
    
    ?>
