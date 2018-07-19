<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
 
if ($_POST['delete']) {
 
    require_once 'dbconfig.php';
 
    $id = intval($_POST['delete']);
    $query = "DELETE FROM tb_item WHERE id=:id";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute(array(':id'=>$t['id']));
    
    if ($stmt) {
        $response['status']  = 'success';
 $response['message'] = 'Product Deleted Successfully ...';
    } else {
        $response['status']  = 'error';
 $response['message'] = 'Unable to delete product ...';
    }
    echo json_encode($response);
}