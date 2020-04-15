<?php
$info= "" ;
$data= "" ;
if(isset($_POST))
{
    $info = " data is feched successfully"; 
    $data = $_POST;

}
else{ 
    $info = "DAta is not feched successfully"; 
    $data = "No Data Found";
}
$result -> data=$data;
$result -> info=$info;
echo json_encode([$result]);
?>