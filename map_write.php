<?php

//DB接続
require_once("./mysql.php");

if(!empty($_GET['id'])){
    $sql = "SELECT
                `id`
                ,`estimate_num`
                ,`document_type`
                ,`recipient`
                ,`site_name`
                ,`site_address`
                ,`zip_code`
                ,`prefecture`
                ,`supply_address`
                ,`agency`
                ,`manager`
                ,`tel`
                ,`hs_w6`
                ,`hs_w9`
                ,`hw_w6`
                ,`hw_w9`
                ,`hl_a6_l`
                ,`hl_a9_l`
                ,`hl_a6_s`
                ,`hl_a9_s`
                ,`color`
                ,`note`
                ,`status`
                ,`registration_datetime`
                ,`update_datetime`
                ,`existence`
                ,`company`
            FROM
                `ecowin_map`
            WHERE `id` = '{$_GET['id']}'";
    if($res = $_link->query($sql)){
        while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
            $ecowin_write = $row;
        }
    }
    $list = array('hs_w6','hs_w9','hw_w6','hw_w9','hl_a6_l','hl_a9_l','hl_a6_s','hl_a9_s');
    foreach ($list as $key => $val) {
        if ($ecowin_write[$val] >= 1) {
            $ecowin_list[] = $val;
        }
    }
    $count = count($ecowin_list);
    foreach ($ecowin_write as $key => $val) {
        if(in_array($key, array_values($ecowin_list))){
            $ecowin_write_list['count'][] = $val;
            $ecowin_write_list['product_name'][] = $key;
        }
    }
}else{
    $count = 1;
}
//실패시
if(isset($_SESSION['error_msgs'])){
    // 본문 내용을 재입력
    $ecowin_write = $_SESSION['input'];
    $ecowin_write['registration_datetime'] = $_SESSION['product_date']['date_time'][0];
    $ecowin_write['update_datetime'] = $_SESSION['product_date']['date_time'][1];
    $ecowin_write_list['product_name'] = $_SESSION['product_date']['product_name'];
    $ecowin_write_list['count'] = $_SESSION['product_date']['count'];
    // 에러 내용 입력
    $ecowin_errors = $_SESSION['error_msgs'];
}
unset($ecowin_list,$list,$_SESSION['error_msgs'],$_SESSION['input'],$_SESSION['product_date']);

include_once("./map_write.tpl.php");
?>
