<?php
/**
 * Created by IntelliJ IDEA.
 * User: godhepaer
 * Date: 3/8/2015
 * Time: 11:40 PM
 */

include("../lib/meekrodb.2.3.class.php");


$_POST['tag']=$_GET['id'];

if(isset($_POST['tag']))
{
    $tag = $_POST['tag'];
    $doctor_data = DB::query("SELECT * FROM tb_doctors WHERE tag='$tag'");
    echo json_encode($doctor_data);
}

