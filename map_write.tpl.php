
<?require_once("./require/header.php"); ?>
        <?if(empty($_GET['id'])){ ?>
            <h1 class="sakura_title">エコウィン 新規登録</h1>
        <?}else{?>
            <h1 class="sakura_title">エコウィン 情報修正</h1>
        <?}?>
        <div class="ecowin_main">
            <?if(empty($_GET['id'])){ ?>
                <h2 class="ecowin_title">エコウィン追加 FORM</h2>
            <?}else{?>
                <h2 class="ecowin_title">エコウィン修正 FORM</h2>
            <?}?>
            <form class="ecowin_wirte_border" action="./map_list_update.php" method="post">
                <input type="hidden" name="id" value="<?=$ecowin_write['id']?>">
                <dl>
                    <dt>*販売会社</dt>
                    <dd>
                        <select class="ecowinr_write_select select_height" name="input[company]">
                            <option value="1" <?=($ecowin_write['company']=="1")?"selected":""?>>サクラグローバル</option>
                            <option value="2" <?=($ecowin_write['company']=="2")?"selected":""?>>ワールドブレインズ</option>
                            <option value="3" <?=($ecowin_write['company']=="3")?"selected":""?>>ブレインズホールディングス</option>
                            <option value="4" <?=($ecowin_write['company']=="4")?"selected":""?>>SIソーラー</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>*見積もり№</dt>
                    <dd><input type="text" name="input[estimate_num]" value="<?=$ecowin_write['estimate_num']?>"></dd>
                    <?if(isset($ecowin_errors['input']['estimate_num'])) {?>
                        <br><span><?=$ecowin_errors['input']['estimate_num'] ?></span>
                    <?}?>
                </dl>
                <dl>
                    <dt>*書類種別</dt>
                    <dd>
                        <select class="ecowinr_write_select select_height" name="input[document_type]">
                            <option value="見積書" <?=($ecowin_write['document_type'] == "見積書")? "selected":""?>>見積書</option>
                            <option value="発注書" <?=($ecowin_write['document_type'] == "発注書")? "selected":""?>>発注書</option>
                        </select>
                    </dd>
                    <?if(isset($ecowin_errors['input']['document_type'])) {?>
                        <br><span><?=$ecowin_errors['input']['document_type'] ?></span>
                    <?}?>
                </dl>
                <dl>
                    <dt>*宛名</dt>
                    <dd><input type="text" name="input[recipient]" value="<?=$ecowin_write['recipient']?>"></dd>
                    <?if(isset($ecowin_errors['input']['recipient'])) {?>
                        <br><span><?=$ecowin_errors['input']['recipient'] ?></span>
                    <?}?>
                </dl>
                <dl>
                    <dt>*現場名</dt>
                    <dd><input type="text" name="input[site_name]" value="<?=$ecowin_write['site_name']?>"></dd>
                    <?if(isset($ecowin_errors['input']['site_name'])) {?>
                        <br><span><?=$ecowin_errors['input']['site_name'] ?></span>
                    <?}?>
                </dl>
                <dl>
                    <dt>現場住所</dt>
                    <dd><input type="text" name="input[site_address]" value="<?=$ecowin_write['site_address']?>" placeholder="例）山梨県甲府市中小河原町571"></dd>
                </dl>
                <dl>
                    <dt>郵便番号</dt>
                    <dd><input type="text" name="input[zip_code]" value="<?=$ecowin_write['zip_code']?>"></dd>
                </dl>
                <dl>
                    <dt>都道府県</dt>
                    <dd>
                        <select class="ecowinr_write_select select_height" name="input[prefecture]">
                            <option value=" ">なし</option>
                            <option value="北海" <?=($ecowin_write['prefecture']=='北海'?'selected':'')?>>北海道</option>
                            <option value="青森" <?=($ecowin_write['prefecture']=='青森'?'selected':'')?>>青森県</option>
                            <option value="岩手" <?=($ecowin_write['prefecture']=='岩手'?'selected':'')?>>岩手県</option>
                            <option value="宮城" <?=($ecowin_write['prefecture']=='宮城'?'selected':'')?>>宮城県</option>
                            <option value="秋田" <?=($ecowin_write['prefecture']=='秋田'?'selected':'')?>>秋田県</option>
                            <option value="山形" <?=($ecowin_write['prefecture']=='山形'?'selected':'')?>>山形県</option>
                            <option value="福島" <?=($ecowin_write['prefecture']=='福島'?'selected':'')?>>福島県</option>
                            <option value="茨城" <?=($ecowin_write['prefecture']=='茨城'?'selected':'')?>>茨城県</option>
                            <option value="栃木" <?=($ecowin_write['prefecture']=='栃木'?'selected':'')?>>栃木県</option>
                            <option value="群馬" <?=($ecowin_write['prefecture']=='群馬'?'selected':'')?>>群馬県</option>
                            <option value="埼玉" <?=($ecowin_write['prefecture']=='埼玉'?'selected':'')?>>埼玉県</option>
                            <option value="千葉" <?=($ecowin_write['prefecture']=='千葉'?'selected':'')?>>千葉県</option>
                            <option value="東京" <?=($ecowin_write['prefecture']=='東京'?'selected':'')?>>東京都</option>
                            <option value="神奈川" <?=($ecowin_write['prefecture']=='神奈川'?'selected':'')?>>神奈川県</option>
                            <option value="新潟" <?=($ecowin_write['prefecture']=='新潟'?'selected':'')?>>新潟県</option>
                            <option value="富山" <?=($ecowin_write['prefecture']=='富山'?'selected':'')?>>富山県</option>
                            <option value="石川" <?=($ecowin_write['prefecture']=='石川'?'selected':'')?>>石川県</option>
                            <option value="福井" <?=($ecowin_write['prefecture']=='福井'?'selected':'')?>>福井県</option>
                            <option value="山梨" <?=($ecowin_write['prefecture']=='山梨'?'selected':'')?>>山梨県</option>
                            <option value="長野" <?=($ecowin_write['prefecture']=='長野'?'selected':'')?>>長野県</option>
                            <option value="岐阜" <?=($ecowin_write['prefecture']=='岐阜'?'selected':'')?>>岐阜県</option>
                            <option value="静岡" <?=($ecowin_write['prefecture']=='静岡'?'selected':'')?>>静岡県</option>
                            <option value="愛知" <?=($ecowin_write['prefecture']=='愛知'?'selected':'')?>>愛知県</option>
                            <option value="三重" <?=($ecowin_write['prefecture']=='三重'?'selected':'')?>>三重県</option>
                            <option value="滋賀" <?=($ecowin_write['prefecture']=='滋賀'?'selected':'')?>>滋賀県</option>
                            <option value="京都" <?=($ecowin_write['prefecture']=='京都'?'selected':'')?>>京都府</option>
                            <option value="大阪" <?=($ecowin_write['prefecture']=='大阪'?'selected':'')?>>大阪府</option>
                            <option value="兵庫" <?=($ecowin_write['prefecture']=='兵庫'?'selected':'')?>>兵庫県</option>
                            <option value="奈良" <?=($ecowin_write['prefecture']=='奈良'?'selected':'')?>>奈良県</option>
                            <option value="和歌山" <?=($ecowin_write['prefecture']=='和歌山'?'selected':'')?>>和歌山県</option>
                            <option value="鳥取" <?=($ecowin_write['prefecture']=='鳥取'?'selected':'')?>>鳥取県</option>
                            <option value="島根" <?=($ecowin_write['prefecture']=='島根'?'selected':'')?>>島根県</option>
                            <option value="岡山" <?=($ecowin_write['prefecture']=='岡山'?'selected':'')?>>岡山県</option>
                            <option value="広島" <?=($ecowin_write['prefecture']=='広島'?'selected':'')?>>広島県</option>
                            <option value="山口" <?=($ecowin_write['prefecture']=='山口'?'selected':'')?>>山口県</option>
                            <option value="徳島" <?=($ecowin_write['prefecture']=='徳島'?'selected':'')?>>徳島県</option>
                            <option value="香川" <?=($ecowin_write['prefecture']=='香川'?'selected':'')?>>香川県</option>
                            <option value="愛媛" <?=($ecowin_write['prefecture']=='愛媛'?'selected':'')?>>愛媛県</option>
                            <option value="高知" <?=($ecowin_write['prefecture']=='高知'?'selected':'')?>>高知県</option>
                            <option value="福岡" <?=($ecowin_write['prefecture']=='福岡'?'selected':'')?>>福岡県</option>
                            <option value="佐賀" <?=($ecowin_write['prefecture']=='佐賀'?'selected':'')?>>佐賀県</option>
                            <option value="長崎" <?=($ecowin_write['prefecture']=='長崎'?'selected':'')?>>長崎県</option>
                            <option value="熊本" <?=($ecowin_write['prefecture']=='熊本'?'selected':'')?>>熊本県</option>
                            <option value="大分" <?=($ecowin_write['prefecture']=='大分'?'selected':'')?>>大分県</option>
                            <option value="宮崎" <?=($ecowin_write['prefecture']=='宮崎'?'selected':'')?>>宮崎県</option>
                            <option value="鹿児島" <?=($ecowin_write['prefecture']=='鹿児島'?'selected':'')?>>鹿児島県</option>
                            <option value="沖縄" <?=($ecowin_write['prefecture']=='沖縄'?'selected':'')?>>沖縄県</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>納品先住所</dt>
                    <dd><input type="text" name="input[supply_address]" value="<?=$ecowin_write['supply_address']?>" placeholder="Yahoo MAPに検索可否をご確認ください"></dd>
                </dl>
                <dl>
                    <dt>加盟店名</dt>
                    <dd><input type="text" name="input[agency]" value="<?=$ecowin_write['agency']?>"></dd>
                </dl>
                <dl>
                    <dt>担当者</dt>
                    <dd><input type="text" name="input[manager]" value="<?=$ecowin_write['manager']?>"></dd>
                </dl>
                <dl>
                    <dt>連絡先</dt>
                    <dd><input type="text" name="input[tel]" value="<?=$ecowin_write['tel']?>"></dd>
                </dl>
                <dl>
                    <dt>備考</dt>
                    <dd><input type="text" name="input[note]" value="<?=$ecowin_write['note']?>"></dd>
                </dl>
                <?for ($i=0; $i < $count; $i++) {?>
                    <dl>
                        <dt>*商品数量</dt>
                        <dd>
                            <select class="select_height" name="product_date[product_name][]">
                                <option value="hs_w6" <?=($ecowin_write_list['product_name'][$i] == 'hs_w6')?'selected':'' ?>>スクリーンタイプ(家庭用)</option>
                                <option value="hs_w9" <?=($ecowin_write_list['product_name'][$i] == 'hs_w9')?'selected':'' ?>>スクリーンタイプ(業務用)</option>
                                <option value="hw_w6" <?=($ecowin_write_list['product_name'][$i] == 'hw_w6')?'selected':'' ?>>ウォールタイプ(家庭用)</option>
                                <option value="hw_w9" <?=($ecowin_write_list['product_name'][$i] == 'hw_w9')?'selected':'' ?>>ウィールタイプ(業務用)</option>
                                <option value="hl_a6_l" <?=($ecowin_write_list['product_name'][$i] == 'hl_a6_l')?'selected':'' ?>>LOYBOY_L(家庭用)</option>
                                <option value="hl_a9_l" <?=($ecowin_write_list['product_name'][$i] == 'hl_a9_l')?'selected':'' ?>>LOYBOY_L(業務用)</option>
                                <option value="hl_a6_s" <?=($ecowin_write_list['product_name'][$i] == 'hl_a6_s')?'selected':'' ?>>LOYBOY_S(家庭用)</option>
                                <option value="hl_a9_s" <?=($ecowin_write_list['product_name'][$i] == 'hl_a9_s')?'selected':'' ?>>LOYBOY_S(業務用)</option>
                            </select><input class="ecowin_product_num" type="text" name="product_date[count][]" value="<?=$ecowin_write_list['count'][$i] ?>" placeholder="半角数字">台
                        </dd>
                        <?$product_name = $ecowin_write_list['product_name'][$i]?>
                        <?if(isset($ecowin_errors['product'][$product_name])) {?>
                            <br><span><?=$ecowin_errors['product'][$product_name] ?></span>
                        <?}?>
                    </dl>
                <?}?>
                <div id="parah"></div>
                <dl>
                    <dt>商品色</dt>
                    <dd>
                        <input type="text" name="input[color]" value="<?=$ecowin_write['color']?>">
                    </dd>
                </dl>
                <dl>
                    <dt>作成日付</dt>
                    <dd>
                        <input type="text" name="product_date[date_time][]" value="<?=$ecowin_write['registration_datetime'] ?>" readonly>
                    </dd>
                </dl>
                <dl>
                    <dt>修正日付</dt>
                    <dd>
                        <input type="text" name="product_date[date_time][]" value="<?=$ecowin_write['update_datetime'] ?>" readonly>
                    </dd>
                </dl>
                <dl class="write_radio" >
                    <dt>*設置有無</dt>
                    <dd>
                        <label for="existence_write1">有</label><input id="existence_write1" type="radio" name="input[existence]" <?=($ecowin_write['existence'] == '1')?'checked':''?> value="1">
                        <label for="existence_write2">無</label><input id="existence_write2" type="radio" name="input[existence]" <?=($ecowin_write['existence'] == '2')?'checked':''?> value="2">
                        <label for="existence_write3">未確認</label><input id="existence_write3" type="radio" name="input[existence]" <?=($ecowin_write['existence'] == '3')?'checked':''?> value="3">
                    </dd>
                    <?if(isset($ecowin_errors['input']['existence'])) {?>
                        <br><span><?=$ecowin_errors['input']['existence'] ?></span>
                    <?}?>
                </dl>
                <p id="write_submit">
                    <input type="button" onclick="addInput();" value="商品追加">
                    <input type="button" onclick="deleteInput();" value="商品削除">
                    <input type="submit" value="作成">
                    <?if(!empty($_GET['id'])){?>
                    <!-- 매우중요 자바스크립트 onclick으로 사용할때 복수의 함수를 ; 걸어서 사용가능함, 여기서 순서는 왼쪽부터 시작하고 오른쪽으로 넘어감 -->
                    <!-- 같은 html창내에 있으므로 php도 사용가능함 -->
                    <input type="button" value="削除" onclick="return delete_map();">
                    <?}?>
                    <?if($_GET['status']==3){?>
                        <br><span>削除に失敗しました</span>
                    <?}?>
                </p>
            </form>
        </div>
        <?if(empty($_GET['id'])){?>
        <div class="ecowin_map">
            <p class="ecowin_add_selected">
                <input id="word_address" class="address_select" type="text" placeholder="登録する前にMAPで検索してください">
                <!-- <button onclick="select_map();">検索</button> -->
                <input class="address_select_input" type="button" onclick="select_map();" value="検索">
            </p>
            <div id="select_map" class="wirte_map"></div>
        </div>
        <?}?>

        <script type="text/javascript" charset="utf-8"src="http://js.api.olp.yahooapis.jp/OpenLocalPlatform/V1/jsapi?appid=dj00aiZpPTNFbnlmeVlnbXdsSCZzPWNvbnN1bWVyc2VjcmV0Jng9MTk-"></script>
        <script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?appid=dj00aiZpPTNFbnlmeVlnbXdsSCZzPWNvbnN1bWVyc2VjcmV0Jng9MTk-"></script>
        <script type="text/javascript">
            //버튼으로 텍스트필드 추가하는 자바스크립트
        var arrInput = new Array(0);
        var arrInputValue = new Array(0);
        function addInput() {
            arrInput.push(arrInput.length);
            arrInputValue.push("");
            display();
        }
        function display() {
            document.getElementById('parah').innerHTML="";
            for (intI=0;intI<arrInput.length;intI++) {
                document.getElementById('parah').innerHTML+=createInput(arrInput[intI], arrInputValue[intI]);
            }
        }
        function saveValue(intId,strValue) {
            arrInputValue[intId]=strValue;
        }
        //추가할 내용
        function createInput(id,value) {
            return "<dl><dt>*商品数量</dt><dd><select class='select_height' name='product_date[product_name][]'><option value='hs_w6'>スクリーンタイプ(家庭用)</option><option value='hs_w9'>スクリーンタイプ(業務用)</option><option value='hw_w6'>ウォールタイプ(家庭用)</option><option value='hw_w9'>ウィールタイプ(業務用)</option><option value='hl_a6_l'>LOYBOY_L(家庭用)</option><option value='hl_a9_l'>LOYBOY_L(業務用)</option><option value='hl_a6_s'>LOYBOY_S(家庭用)</option><option value='hl_a9_s'>LOYBOY_S(業務用)</option></select><input class='ecowin_product_num' type='text' name='product_date[count][]' value='' placeholder='半角数字'>台</dd></dl>";
        }
        function deleteInput() {
            if (arrInput.length > 0) {
                arrInput.pop();
                arrInputValue.pop();
            }
            display();
        }
        //삭제하기 전 확인 문구
        function delete_map(){
            var rink = confirm("削除しますか？")
            if(rink == true){
                location.href="./map_list_update.php?id=<?=$ecowin_write['id']?>&status=2";
                alert("削除しました。");
            }else{
                alert("削除が取り消しされました。");
            }
        }
        //검색용 지도
        var geocoder = new Y.GeoCoder();
        var ymap = new Y.Map(
            "select_map",{
                "configure":{
                    "enableOpenStreetMap": true
                    ,"stylemap" : true
                    ,"scrollWheelZoom": true
                    ,"doubleClickZoom" : true
            }
        });
        var stylemaplayer = new Y.StyleMapLayer("standard");
        var style_param = [
            // ここにオブジェクトを追加していきます。
            {"label":true}
            ,{"landmark":false}
            ,{"line_name":false}
            ,{"station_name":false}
            ,{"symbol":false}
            ,{"area_name":false}
            ,{"building":false}
            ,{"rail":false}
            ,{"highway":false}
        ];
        stylemaplayer.setStyle(style_param);
        // setParam();
        var layerset = new Y.LayerSet("スタイル地図",[stylemaplayer]);
        ymap.addLayerSet("stylemap",layerset);
        function select_map(){
            var word_address = document.getElementById("word_address").value;
            var request = { query : word_address };
            geocoder.execute( request , function( ydf_data ) {
                if ( ydf_data.features.length > 0 ) {
                    var latlng = ydf_data.features[0].latlng;
                    var name = ydf_data.features[0].name;
                    var latitude = latlng.lat();
                    var longitude = latlng.lng();

                    //地図の描画
                    ymap.drawMap(new Y.LatLng(latitude, longitude), 15 ,"stylemap");
                    //컨트롤러 추가
                    ymap.addControl(new Y.LayerSetControl());
                    ymap.addControl(new Y.ScaleControl());
                    ymap.addControl(new Y.SliderZoomControlHorizontal());
                    // ymap.addControl(new Y.scrollWheelZoom());
                    //マーカー
                    var marker = new Y.Marker(new Y.LatLng(latitude, longitude));
                    ymap.addFeature(marker);
                    //ラベル
                    var label = new Y.Label(new Y.LatLng(latitude, longitude), name);
                    ymap.addFeature(label);
                }
            });
        }
        </script>
<?require_once("./require/footer.php") ?>
