
<html>  
<head>  
<Title>Azure SQL Database - PHP Website</Title>  
</head>  
<body>  
<form method="post" action="?action=add" enctype="multipart/form-data" >  
Emp Id <input type="text" name="t_emp_id" id="t_emp_id"/></br>  
Name <input type="text" name="t_name" id="t_name"/></br>  
Education <input type="text" name="t_education" id="t_education"/></br>  
E-mail address <input type="text" name="t_email" id="t_email"/></br>  
<input type="submit" name="submit" value="Submit" />  
</form>  
<?php  
/*Connect using SQL Server authentication.*/  
$serverName = "tcp:dicodingwebappamsolserver.database.windows.net,1433";  
$connectionOptions = array(  
    "Database" => "dicodingamsoldb",  
    "UID" => "dicoding",  
    "PWD" => "rakan@ra19"  
);  
$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  
  

/*Display registered people.*/  
$sql = "SELECT * FROM biodata ORDER BY id"; 
$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
print("<table border='1px'>"); 
print("<tr><td>Id</td>"); 
print("<td>Nama</td>"); 

 
while($row = sqlsrv_fetch_array($stmt)) 
{ 
 
print("<tr><td>".$row['id']."</td>"); 
print("<td>".$row['nama']."</td>"); 

} 
 
print("</table>"); 
}
?>  
</body>  
</html>  
