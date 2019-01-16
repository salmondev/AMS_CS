<?php 

$assetdatabase="C:\xampp\htdocs\ci_qr\DatabaseProject.mdb";

$host="localhost";
$mydatabase="amsappne_nfc";
$username="amsappne_nfcdb";
$password="AMSnfcapp1";

try { 
  # OPEN BOTH DATABASE CONNECTIONS
  $accConn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)}; DBq=$assetdatabase;Uid=Admin;Pwd=;"); 

  $myConn = new PDO("mysql:host=$host;dbname=$mydatabase",$username,$password); 
  $myConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM emp_attendance"; 
  $accstmt = $accConn->query($sql);
  $accstmt->setFetchMode(PDO::FETCH_ASSOC); 

  // FETCH ROWS FROM MS ACCESS
  while($row = $accstmt->fetch()) { 
    // APPEND TO MYSQL
    $mystmt = $myConn->prepare("INSERT INTO emp_attendance (empid, `date`, status, notes) VALUES (?, ?, ?, ?)");

    # BIND PARAMETERS 
    /*$mystmt->bindParam(1, $row['empid'], PDO::PARAM_STR, 50); 
    $mystmt->bindParam(2, $row['date'], PDO::PARAM_STR, 50);    
    $mystmt->bindParam(3, $row['status'], PDO::PARAM_STR, 50); 
    $mystmt->bindParam(4, $row['notes'], PDO::PARAM_STR, 50);*/

    # EXECUTE QUERY
    $mystmt->execute();
  }
} 
catch(PDOException $e) {         
    echo $e->getMessage()."\n"; 
    exit; 
}

// CLOSE CONNECTIONS
$accConn = null;
$myConn = null;

?>
