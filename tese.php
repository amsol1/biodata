
<?php  

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dicoding@dicodingwebappamsolserver", "pwd" => "{rakan@ra19}", "Database" => "dicodingamsoldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dicodingwebappamsolserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
    ?>
