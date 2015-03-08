<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dion
 * Date: 21/02/2015
 * Time: 20:54
 */

include("../lib/meekrodb.2.3.class.php");

$postdata = $_POST;

date_default_timezone_set("Asia/Jakarta");

$this_time = date("Y-m-d H:i:s");


$data_insert = array(
    'name' => $postdata['inp_name'],
    'email' => $postdata['inp_email'],
    'phone' => $postdata['inp_phone'],
    'address' => $postdata['inp_address'],
    'city' => $postdata['inp_city'],
    'state' => $postdata['inp_state'],
    'appointment_day' => $postdata['inp_appointment_day'],
    'appointment_time' => $postdata['inp_appointment_time'],
    'appointment_nature' => $postdata['inp_appointment_nature'],
    'status' => 'pending',
    'create_date' => $this_time,
    'modified_date' => $this_time
);

DB::insert('tb_appointment',$data_insert);

echo "Success";