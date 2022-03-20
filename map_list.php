<?php
// DB연결 DB連結
require_once("./require/mysql.php");

//상세검색란 詳しく検索
if($_GET['map_key']!="全体"){

    // 確認有無
    if (!empty($_GET['existence1']) && !empty($_GET['existence2']) && !empty($_GET['existence3'])) {
        $existence = "WHERE `existence` IN (1, 2, 3)AND `status` = 1";
        $existence_get = "&existence1=1&&existence2=2&existence3=3";
    }else if (!empty($_GET['existence1']) && !empty($_GET['existence2'])) {
        $existence = "WHERE `existence` IN (1, 2)AND `status` = 1";
        $existence_get = "&existence1=1&&existence2=2";
    }else if (!empty($_GET['existence1']) && !empty($_GET['existence3'])) {
        $existence = "WHERE `existence` IN (1, 3)AND `status` = 1";
        $existence_get = "&existence1=1&&existence3=3";
    }else if (!empty($_GET['existence2']) && !empty($_GET['existence3'])) {
        $existence = "WHERE `existence` IN (2, 3)AND `status` = 1";
        $existence_get = "&existence2=2&&existence3=3";
    }else if ($_GET['existence1']) {
        $existence = "WHERE `existence` = 1 AND `status` = 1";
        $existence_get = "&existence1=1";
    }else if ($_GET['existence2']) {
        $existence = "WHERE `existence` = 2 AND `status` = 1";
        $existence_get = "&existence2=2";
    }else if ($_GET['existence3']) {
        $existence = "WHERE `existence` = 3 AND `status` = 1";
        $existence_get = "&existence3=3";
    }else {
        $existence = "WHERE `status` = 1";
    }

    // 都道府県、商品、その他検索
    if(!empty($_GET['map_word'])){
        $map_select = "AND `prefecture` = '{$_GET['map_word']}'";
        if(!empty($_GET['map_word2'])){
            $map_select2 = "AND `{$_GET['map_key2']}` LIKE '%{$_GET['map_word2']}%'";
        }
        if(!empty($_GET['map_word3'])){
            $map_select3 = "AND `{$_GET['map_word3']}` >= 1";
        }
    }elseif(!empty($_GET['map_word2'])){
        $map_select2 = "AND `{$_GET['map_key2']}` LIKE '%{$_GET['map_word2']}%'";
        if(!empty($_GET['map_word3'])){
            $map_select3 = "AND `{$_GET['map_word3']}` >= 1";
        }
    }elseif(!empty($_GET['map_word3'])){
        $map_select3 = "AND `{$_GET['map_word3']}` >= 1";
    }
}
//페이지 정보 구하기 ページ情報を求める
$page = isset($_GET['page'])?$_GET['page']:1;
$date_count = 10;

$sql = "SELECT `id`
        FROM `ecowin_map`
        $existence
        $map_select
        $map_select2
        $map_select3
        ";
if($res = $_link->query($sql)){
    if($res->num_rows!=0){
        $total_date = $res->num_rows;
    }
}

//최대 페이지와 시작 페이지 넘버 最大ページとスタットページ番号
$max_page = ceil($total_date/$date_count);
$start_num = ($page-1)*$date_count;

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
            ,`existence`
            ,`company`
        FROM
            `ecowin_map`
        $existence
        $map_select
        $map_select2
        $map_select3
        ORDER BY `id` ASC
        LIMIT {$start_num},{$date_count}";
if($res = $_link->query($sql)){
    $map_array = array();
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
        $map_array[] = $row;
    }
    $count = count($map_array);
}
// 都道府県
if(!empty($_GET['map_word'])){
    $map_page = "&map_word={$_GET['map_word']}";
}
//　検索条件
if(!empty($_GET['map_word2'])){
    $map_page2 = "&map_key2={$_GET['map_key2']}&map_word2={$_GET['map_word2']}";
}
//　商品名
if(!empty($_GET['map_word3'])){
    $map_page3 = "&map_word3={$_GET['map_word3']}";
}

for ($i=0; $i < $count; $i++) {
    if(!empty($map_array[$i]['hs_w6'])){
        $hs_w6 = true;
    }
    if(!empty($map_array[$i]['hs_w9'])){
        $hs_w9 = true;
    }
    if(!empty($map_array[$i]['hw_w6'])){
        $hw_w6 = true;
    }
    if(!empty($map_array[$i]['hw_w9'])){
        $hw_w9 = true;
    }
    if(!empty($map_array[$i]['hl_a6_l'])){
        $hl_a6_l = true;
    }
    if(!empty($map_array[$i]['hl_a9_l'])){
        $hl_a9_l = true;
    }
    if(!empty($map_array[$i]['hl_a6_s'])){
        $hl_a6_s = true;
    }
    if(!empty($map_array[$i]['hl_a9_s'])){
        $hl_a9_s = true;
    }
}
include_once("./map_list.tpl.php");
?>
