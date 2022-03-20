<?php

//DB接続
require_once("./mysql.php");

$input = $_POST['input'];
$product = $_POST['product'];
$product_date = $_POST['product_date'];
// 상품의 종류를 카운터
$product_count = count($product_date['product_name']);

//삭제쿼리
if(isset($_GET['id']) && $_GET['status'] == '2'){
    $sql = "UPDATE `ecowin_map` SET `status` = '{$_GET['status']}' WHERE `id` = '{$_GET['id']}'";
    if($res = $_link->query($sql)){
        header('location:./map_list.php');
        exit();
    }else{
        header('location:./map_write.php?id='.$_GET['id'].'&status=3');
        exit();
    }
}else{
    $input['status'] = 1;
}

//전체 항목 全体項目
$allow_columns = array(
    'input' => array(
        'estimate_num'      => '見積もり'
        ,'document_type'    => '書類種別'
        ,'recipient'        => '宛名'
        ,'site_name'        => '現場名'
        ,'site_address'     => '現場住所'
        ,'zip_code'         => '郵便番号'
        ,'prefecture'       => '都道府県'
        ,'supply_address'   => '納品先住所'
        ,'agency'           => '加盟店名'
        ,'manager'          => '担当者'
        ,'tel'              => '連絡先'
        ,'note'             => '備考'
        ,'status'           => '公開状態'
        ,'color'    => '商品色'
        ,'existence'        => '設置有無'
        ,'company'          => '会社名'
    )
);

//필수 항목 必須項目
$required_inputs = array(
    'input' => array(
        'estimate_num'
        ,'document_type'
        ,'recipient'
        ,'site_name'
        ,'status'
        ,'existence'
        ,'company'
    )
);

// DB테이블 2개를 1개로 만든 바람에 그로인한 추가 작업
// 에러확인 테이블 값 추가, product테이블로 값이전
for ($i=0; $i < $product_count; $i++) {
    $p_name = $product_date['product_name'][$i];
    $product[$p_name] = $product_date['count'][$i];
    $allow_columns['product'][$p_name] = '商品';
    $required_inputs['product'][] = $p_name;
}

//null가능한목록 NULL可能な目録
$null_inputs = array(
    'input' => array(
        'site_address'
        ,'zip_code'
        ,'supply_address'
        ,'agency'
        ,'recipient'
        ,'manager'
        ,'tel'
        ,'note'
        ,'color'
        ,'prefecture'
    )
);

//에러 타입 エラータイプ
$error_types = array(
    '1' => 'が未入力です'
    ,'2' => 'が不正な入力です'
    ,'3' => 'が重複してます'
    ,'4' => 'が半角数字ではありません'
    ,'5' => 'が重複して情報が正しくありません'
    ,'6' => '情報が正しくありません'
);
//미츠모리 정보확인 見積もり情報確認
foreach ($input as $key => $val) {
    if(!in_array($key, array_keys($allow_columns['input']))){
        $errors['input'][$key] = '2';
    }
}
foreach ($required_inputs['input'] as $key => $val) {
    if(empty($input[$val])){
        $errors['input'][$val] = '1';
    }
}
// 상품 정보 확인
foreach($product as $key => $val){
    if(!in_array($key, array_keys($allow_columns['product']))){
        $errors['product'][$key] = '2';
    }
}
foreach($required_inputs['product'] as $key => $val){
    if(empty($product[$val])){
        $errors['product'][$val] = '1';
    }
}
// 에러확인 상품중복 방지용 함수
$overlap_key = count(array_unique($product_date['product_name']));
for ($i=0; $i < $product_count; $i++) {
    if($product_count != $overlap_key){
        $product_name = $product_date['product_name'][$i];
        $errors['product'][$product_name] = '3';
    }
}
// 에러확인 에코윈 수량값이 숫자인지 체크
for ($i=0; $i < $product_count; $i++) {
    if(!is_numeric($product_date['count'][$i])){
        $product_name = $product_date['product_name'][$i];
        if($errors['product'][$product_name] == '3' && $errors['product'][$product_name] != '1'){
            $errors['product'][$product_name] = '5';
        }else if($errors['product'][$product_name] != '1' && $errors['product'][$product_name] != '3' && $errors['product'][$product_name] != '5'){
            $errors['product'][$product_name] = '4';
        }
    }
}
// 설치유무
if(!preg_match('/^([1-3]{1})$/',$input['existence'])){
    $errors['input']['existence'] = '6';
}
// 회사명유무
if(!preg_match('/^([1-4]{1})$/',$input['company'])){
    $errors['input']['existence'] = '6';
}
//에러를 확인한다. 없다면 데이터베이스에 업로드
if (isset($errors)){
    // var_dump($errors);
    // exit();
    //에러가 있다면 에러문구를 작성한다
    $error_msgs = array();
    if(isset($errors['input'])){
        foreach ($errors['input'] as $key => $val) {
            $tmp_column_name['input'] = isset($allow_columns['input'][$key]) ? $allow_columns['input'][$key] : '未設定項目';
            $error_msgs['input'][$key] = "{$tmp_column_name['input']}{$error_types[$val]}";
        }
    }
    if(isset($errors['product'])){
        foreach ($errors['product'] as $key => $val) {
            $tmp_column_name['product'] = isset($allow_columns['product'][$key]) ? $allow_columns['product'][$key] : '未設定項目';
            $error_msgs['product'][$key] = "{$tmp_column_name['product']}{$error_types[$val]}";
        }
    }

    //에러 내용 쎄트
    $_SESSION['error_msgs']['input'] = $error_msgs['input'];
    $_SESSION['error_msgs']['product'] = $error_msgs['product'];
    //입력 내용 쎄트
    $_SESSION['input'] = $_POST['input'];
    $_SESSION['input']['id'] = $_POST['id'];
    $_SESSION['product_date'] = $_POST['product_date'];


    header('location:./map_write.php?id='.$_POST['id']);
    exit();
}else{
    $sql_flg = false;
    $columns['input'] = array();
    $values['input'] = array();
    $columns['product'] = array();
    $values['product'] = array();

    //미츠모리 정보
    foreach ($allow_columns['input'] as $key => $val) {
        if (!empty($_POST['id'])) {
            // 수정정보
            if(empty($input[$key]) && in_array($key, $null_inputs['input'])){
                $values['input'][] = "`{$key}` = NULL";
            }else{
                $values['input'][] = "`{$key}` = '".$_link->real_escape_string($input[$key])."'";
            }
        }else{
            // 신규입력
            $columns['input'][] = "`{$key}`";
            if(empty($input[$key]) && in_array($key, $null_inputs['input'])){
                $values['input'][] = "NULL";
            }else{
                $values['input'][] = "'".$_link->real_escape_string($input[$key])."'";
            }
        }
    }
    //상품 정보
    foreach ($allow_columns['product'] as $key => $val) {
        if (!empty($_POST['id'])) {
            // 수정정보
            if (empty($product[$key]) && in_array($key, $null_inputs['product'])) {
                $values['product'][] = "`{$key}` = NULL";
            }else{
                $values['product'][] = "`{$key}` = '".$_link->real_escape_string($product[$key])."'";
            }
        }else{
            // 신규입력
            $columns['product'][] = "`{$key}`";
            if(empty($product[$key]) && in_array($key, $null_inputs['product'])){
                $values['product'][] = "NULL";
            }else{
                $values['product'][] = "'".$_link->real_escape_string($product[$key])."'";
            }
        }
    }
    $input_columns = implode(',',$columns['input']);
    $input_values = implode(',',$values['input']);
    $product_columns = implode(',',$columns['product']);
    $product_values = implode(',',$values['product']);

//업데이트
    if (!empty($_POST['id'])) {
        $sql = "UPDATE `ecowin_map` SET {$input_values},{$product_values} WHERE `id` = '{$_POST['id']}'";
        // echo $sql;
        if($res = $_link->query($sql)){
            $sql_flg = true;
        }
    }else{
        // 신규입력
        $sql = "INSERT INTO `ecowin_map` ($input_columns,$product_columns,`registration_datetime`)
        VALUES ($input_values,$product_values, now())";
        echo $sql;
        if($res = $_link->query($sql)){
            $sql_flg = true;
            echo "確認";
        }else{
            echo "失敗";
        }
    }
    if($sql_flg){
        $_SESSION['confirm_msg'] = "登録完了";
        $_link->commit();
        header("location:./map_list.php");
    }else{
        $_link->rollback();
    }
}

?>
