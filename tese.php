
   <?php

  
try {    
    $hostname = 'dicodingwebappamsolserver.database.windows.net';
    $dbname = 'dicodingamsoldb';
    $username = 'dicoding';
    $pwd = 'rakan@ra19';
 
    $pdo = new PDO ("dblib:version=8.0;charset=UTF-8;host={$hostname};dbname={$dbname}", $username, $pwd);
    $query = "SELECT * FROM biodata";
    $statement = $pdo->prepare($query);
    $statement->execute();
    
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
 
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}
?>
