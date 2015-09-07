<?php
/**
 * Created by IntelliJ IDEA.
 * User: DELL
 * Date: 9/7/2015
 * Time: 9:12 AM
 */

session_start();
include("../lib/meekrodb.2.3.class.php");

$postdata = $_POST;

/**
 * Check if Name exists
 */

$name = $postdata['inp_cmnt_name'];

$count_name = DB::queryFirstRow("SELECT COUNT(*) AS icount FROM tb_comments WHERE nama='$name'");

if($count_name['icount']>0) {
	$_SESSION['comment_exist']=true;
}
else {
	date_default_timezone_set("Asia/Jakarta");
	$this_date = date("Y-m-d H:i:s");

	DB::insert('tb_comments',array(
		'id'=>'',
		'nama'=>$name,
		'status'=>$postdata['inp_cmnt_status'],
		'star_rating'=>$postdata['inp_cmnt_star_rating'],
		'photo'=>'',
		'comments'=>$postdata['inp_cmnt_comments'],
		'created_date'=>$this_date,
		'modified_date'=>$this_date
	));

	$_SESSION['comment_success']=true;
}

header("Location:../");