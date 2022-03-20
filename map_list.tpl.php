<?require_once("./require/header.php"); ?>
        <h1 class="sakura_title">エコウィン管理</h1>
        <div class="ecowin_main">
            <h2 class="ecowin_title">エコウィンハイブリッド LIST</h2>
            <div id="ecowin_list_selecter">
                <form action="./map_list.php" method="get">
                    <span>
                        設置有無（
                        <label for="existence_list1">有</label><input id="existence_list1" type="checkbox" name="existence1" <?=(!empty($_GET['existence1'])?'checked':'')?> value="1">
                        <label for="existence_list2">無</label><input id="existence_list2" type="checkbox" name="existence2" <?=(!empty($_GET['existence2'])?'checked':'')?> value="2">
                        <label for="existence_list3">未確認</label><input id="existence_list3" type="checkbox" name="existence3" <?=(!empty($_GET['existence3'])?'checked':'')?> value="3">）
                        <br>
                    </span>
                    <select name="map_word">
                            <option value="" selected>都道府県</option>
                            <option value="北海" <?=($_GET['map_word']=='北海'?"selected":'')?>>北海道</option>
                            <option value="青森" <?=($_GET['map_word']=='青森'?"selected":'')?>>青森県</option>
                            <option value="岩手" <?=($_GET['map_word']=='岩手'?"selected":'')?>>岩手県</option>
                            <option value="宮城" <?=($_GET['map_word']=='宮城'?"selected":'')?>>宮城県</option>
                            <option value="秋田" <?=($_GET['map_word']=='秋田'?"selected":'')?>>秋田県</option>
                            <option value="山形" <?=($_GET['map_word']=='山形'?"selected":'')?>>山形県</option>
                            <option value="福島" <?=($_GET['map_word']=='福島'?"selected":'')?>>福島県</option>
                            <option value="茨城" <?=($_GET['map_word']=='茨城'?"selected":'')?>>茨城県</option>
                            <option value="栃木" <?=($_GET['map_word']=='栃木'?"selected":'')?>>栃木県</option>
                            <option value="群馬" <?=($_GET['map_word']=='群馬'?"selected":'')?>>群馬県</option>
                            <option value="埼玉" <?=($_GET['map_word']=='埼玉'?"selected":'')?>>埼玉県</option>
                            <option value="千葉" <?=($_GET['map_word']=='千葉'?"selected":'')?>>千葉県</option>
                            <option value="東京" <?=($_GET['map_word']=='東京'?"selected":'')?>>東京都</option>
                            <option value="神奈川" <?=($_GET['map_word']=='神奈川'?"selected":'')?>>神奈川県</option>
                            <option value="新潟" <?=($_GET['map_word']=='新潟'?"selected":'')?>>新潟県</option>
                            <option value="富山" <?=($_GET['map_word']=='富山'?"selected":'')?>>富山県</option>
                            <option value="石川" <?=($_GET['map_word']=='石川'?"selected":'')?>>石川県</option>
                            <option value="福井" <?=($_GET['map_word']=='福井'?"selected":'')?>>福井県</option>
                            <option value="山梨" <?=($_GET['map_word']=='山梨'?"selected":'')?>>山梨県</option>
                            <option value="長野" <?=($_GET['map_word']=='長野'?"selected":'')?>>長野県</option>
                            <option value="岐阜" <?=($_GET['map_word']=='岐阜'?"selected":'')?>>岐阜県</option>
                            <option value="静岡" <?=($_GET['map_word']=='静岡'?"selected":'')?>>静岡県</option>
                            <option value="愛知" <?=($_GET['map_word']=='愛知'?"selected":'')?>>愛知県</option>
                            <option value="三重" <?=($_GET['map_word']=='三重'?"selected":'')?>>三重県</option>
                            <option value="滋賀" <?=($_GET['map_word']=='滋賀'?"selected":'')?>>滋賀県</option>
                            <option value="京都" <?=($_GET['map_word']=='京都'?"selected":'')?>>京都府</option>
                            <option value="大阪" <?=($_GET['map_word']=='大阪'?"selected":'')?>>大阪府</option>
                            <option value="兵庫" <?=($_GET['map_word']=='兵庫'?"selected":'')?>>兵庫県</option>
                            <option value="奈良" <?=($_GET['map_word']=='奈良'?"selected":'')?>>奈良県</option>
                            <option value="和歌山" <?=($_GET['map_word']=='和歌山'?"selected":'')?>>和歌山県</option>
                            <option value="鳥取" <?=($_GET['map_word']=='鳥取'?"selected":'')?>>鳥取県</option>
                            <option value="島根" <?=($_GET['map_word']=='島根'?"selected":'')?>>島根県</option>
                            <option value="岡山" <?=($_GET['map_word']=='岡山'?"selected":'')?>>岡山県</option>
                            <option value="広島" <?=($_GET['map_word']=='広島'?"selected":'')?>>広島県</option>
                            <option value="山口" <?=($_GET['map_word']=='山口'?"selected":'')?>>山口県</option>
                            <option value="徳島" <?=($_GET['map_word']=='徳島'?"selected":'')?>>徳島県</option>
                            <option value="香川" <?=($_GET['map_word']=='香川'?"selected":'')?>>香川県</option>
                            <option value="愛媛" <?=($_GET['map_word']=='愛媛'?"selected":'')?>>愛媛県</option>
                            <option value="高知" <?=($_GET['map_word']=='高知'?"selected":'')?>>高知県</option>
                            <option value="福岡" <?=($_GET['map_word']=='福岡'?"selected":'')?>>福岡県</option>
                            <option value="佐賀" <?=($_GET['map_word']=='佐賀'?"selected":'')?>>佐賀県</option>
                            <option value="長崎" <?=($_GET['map_word']=='長崎'?"selected":'')?>>長崎県</option>
                            <option value="熊本" <?=($_GET['map_word']=='熊本'?"selected":'')?>>熊本県</option>
                            <option value="大分" <?=($_GET['map_word']=='大分'?"selected":'')?>>大分県</option>
                            <option value="宮崎" <?=($_GET['map_word']=='宮崎'?"selected":'')?>>宮崎県</option>
                            <option value="鹿児島" <?=($_GET['map_word']=='鹿児島'?"selected":'')?>>鹿児島県</option>
                            <option value="沖縄" <?=($_GET['map_word']=='沖縄'?"selected":'')?>>沖縄県</option>
                        </select>
                    <select name="map_word3">
                        <option value="">商品全体</option>
                        <option value="hs_w6" <?=($_GET['map_word3']=='hs_w6'?"selected":'')?>>スクリーンタイプ(家庭用)</option>
                        <option value="hs_w9" <?=($_GET['map_word3']=='hs_w9'?"selected":'')?>>スクリーンタイプ(業務用)</option>
                        <option value="hw_w6" <?=($_GET['map_word3']=='hw_w6'?"selected":'')?>>ウォールタイプ(家庭用)</option>
                        <option value="hw_w9" <?=($_GET['map_word3']=='hw_w9'?"selected":'')?>>ウィールタイプ(業務用)</option>
                        <option value="hl_a6_l" <?=($_GET['map_word3']=='hl_a6_l'?"selected":'')?>>LOYBOY_L(家庭用)</option>
                        <option value="hl_a9_l" <?=($_GET['map_word3']=='hl_a9_l'?"selected":'')?>>LOYBOY_L(業務用)</option>
                        <option value="hl_a6_s" <?=($_GET['map_word3']=='hl_a6_s'?"selected":'')?>>LOYBOY_S(家庭用)</option>
                        <option value="hl_a9_s" <?=($_GET['map_word3']=='hl_a9_s'?"selected":'')?>>LOYBOY_S(業務用)</option>
                    </select>
                    <select name="map_key2">
                        <option value="全体">全体</option>
                        <option value="estimate_num" <?=($_GET['map_key2']=='estimate_num'?"selected":'')?>>見積もり№</option>
                        <option value="document_type" <?=($_GET['map_key2']=='document_type'?"selected":'')?>>書類種別</option>
                        <option value="recipient" <?=($_GET['map_key2']=='recipient'?"selected":'')?>>宛名</option>
                        <option value="site_name" <?=($_GET['map_key2']=='site_name'?"selected":'')?>>現場名</option>
                        <option value="site_address" <?=($_GET['map_key2']=='site_address'?"selected":'')?>>現場住所</option>
                        <option value="zip_code" <?=($_GET['map_key2']=='zip_code'?"selected":'')?>>郵便番号</option>
                        <option value="supply_address" <?=($_GET['map_key2']=='supply_address'?"selected":'')?>>納品先住所</option>
                        <option value="agency" <?=($_GET['map_key2']=='agency'?"selected":'')?>>加盟店名</option>
                        <option value="manager" <?=($_GET['map_key2']=='manager'?"selected":'')?>>担当者名</option>
                        <option value="tel" <?=($_GET['map_key2']=='tel'?"selected":'')?>>連絡先</option>
                        <option value="color" <?=($_GET['map_key2']=='color'?"selected":'')?>>商品色</option>
                    </select>
                    <input class="ecowin_list_input" id="ecwin_list_selecter_text" type="text" name="map_word2" value="<?=($_GET['map_key2']=="全体"?'':$_GET['map_word2'])?>">
                    <input class="ecowin_list_input" type="submit" value="検索">
                    <input class="ecowin_list_input2" type="button" value="作成" onclick="location.href='./map_write.php'">
                </form>
            </div>
            <div id="ecowin_list">
                <table>
                    <tr>
                        <th>販売会社</th>
                        <th>設置有無</th>
                        <th>見積もり№</th>
                        <th>書類種別</th>
                        <th>宛名</th>
                        <th>現場名</th>
                        <th>現場住所</th>
                        <th>郵便番号</th>
                        <th>納品先住所</th>
                        <th>加盟店名</th>
                        <th>担当者</th>
                        <th>連絡先</th>
                        <?=isset($hs_w6)?'<th>スクリーンタイプ<br>(家庭用)</th>':'' ?>
                        <?=isset($hs_w9)?'<th>スクリーンタイプ<br>(業務用)</th>':'' ?>
                        <?=isset($hw_w6)?'<th>ウォールタイプ<br>(家庭用)</th>':'' ?>
                        <?=isset($hw_w9)?'<th>ウィールタイプ<br>(業務用)</th>':'' ?>
                        <?=isset($hl_a6_l)?'<th>LOYBOY_L<br>(家庭用)</th>':'' ?>
                        <?=isset($hl_a9_l)?'<th>LOYBOY_L<br>(業務用)</th>':'' ?>
                        <?=isset($hl_a6_s)?'<th>LOYBOY_S<br>(家庭用)</th>':'' ?>
                        <?=isset($hl_a9_s)?'<th>LOYBOY_S<br>(業務用)</th>':'' ?>
                        <th id="test11">商品色</th>
                        <th>備考</th>
                    </tr>
                    <?for ($i=0; $i < $count; $i++) {?>
                        <tr id="border_id<?=$i?>" class="border">
                            <td>
                                <?if($map_array[$i]['company'] == 1){?>
                                    <a class="update_num" href="./map_write.php?id=<?=$map_array[$i]['id'] ?>">サクラグローバル</a>
                                <?}else if ($map_array[$i]['company'] == 2){?>
                                    <a class="update_num" href="./map_write.php?id=<?=$map_array[$i]['id'] ?>">ワールドブレインズ</a>
                                <?}else if ($map_array[$i]['company'] == 3){?>
                                    <a class="update_num" href="./map_write.php?id=<?=$map_array[$i]['id'] ?>">ブレインズホールディングス</a>
                                <?}else if ($map_array[$i]['company'] == 4){?>
                                    <a class="update_num" href="./map_write.php?id=<?=$map_array[$i]['id'] ?>">SIソーラー</a>
                                <?}?>
                            </td>
                            <td>
                                <?if ($map_array[$i]['existence'] == '1') {?>
                                    有
                                <?}else if($map_array[$i]['existence'] == '2'){?>
                                    無
                                <?}else if($map_array[$i]['existence'] == '3'){?>
                                    未確認
                                <?}?>
                            </td>
                            <td><?=$map_array[$i]['estimate_num']?></td>
                            <td class="ecowin_text_center"><?=$map_array[$i]['document_type']?></td>
                            <td id="recipient<?=$i?>"><?=$map_array[$i]['recipient']?></td>
                            <td><?=$map_array[$i]['site_name']?></td>
                            <td><?=$map_array[$i]['site_address']?></td>
                            <td><?=$map_array[$i]['zip_code']?></td>
                            <td id="supply_address<?=$i?>" class="address"><?=(($map_array[$i]['supply_address']!='')?$map_array[$i]['supply_address']:' ')?></td>
                            <td><?=$map_array[$i]['agency']?></td>
                            <td><?=$map_array[$i]['manager']?></td>
                            <td><?=$map_array[$i]['tel']?></td>
                            <?=isset($hs_w6)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hs_w6']==0?"":$map_array[$i]['hs_w6'])?><?=isset($hs_w6)?'</td>':'' ?>
                            <?=isset($hs_w9)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hs_w9']==0?"":$map_array[$i]['hs_w9'])?><?=isset($hs_w9)?'</td>':'' ?>
                            <?=isset($hw_w6)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hw_w6']==0?"":$map_array[$i]['hw_w6'])?><?=isset($hw_w6)?'</td>':'' ?>
                            <?=isset($hw_w9)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hw_w9']==0?"":$map_array[$i]['hw_w9'])?><?=isset($hw_w9)?'</td>':'' ?>
                            <?=isset($hl_a6_l)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hl_a6_l']==0?"":$map_array[$i]['hl_a6_l'])?><?=isset($hl_a6_l)?'</td>':'' ?>
                            <?=isset($hl_a9_l)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hl_a9_l']==0?"":$map_array[$i]['hl_a9_l'])?><?=isset($hl_a9_l)?'</td>':'' ?>
                            <?=isset($hl_a6_s)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hl_a6_s']==0?"":$map_array[$i]['hl_a6_s'])?><?=isset($hl_a6_s)?'</td>':'' ?>
                            <?=isset($hl_a9_s)?'<td class="ecowin_text_center">':'' ?><?=($map_array[$i]['hl_a9_s']==0?"":$map_array[$i]['hl_a9_s'])?><?=isset($hl_a9_s)?'</td>':'' ?>
                            <td><?=$map_array[$i]['color']?></td>
                            <td><?=$map_array[$i]['note']?></td>
                        </tr>
                    <?} ?>
                </table>
            </div>
            <p id="ecowin_page">
                <?if($page != 1){?>
                    <a href="./map_list.php?page=1
                    <?=(empty($_GET['map_word'])?'':$map_page)?>
                    <?=(empty($_GET['map_word2'])?'':$map_page2)?>
                    <?=(empty($_GET['map_word3'])?'':$map_page3)?>
                    <?=(empty($existence_get)?'':$existence_get)?>"><<</a>
                <?}
                for($i=($page-5)<1?1:($page-5) ; $i<($page+5) ; $i++){
                    if($i < $page){?>
                        <a href="./map_list.php?page=<?=$i?>
                            <?=(empty($_GET['map_word'])?'':$map_page)?>
                            <?=(empty($_GET['map_word2'])?'':$map_page2)?>
                            <?=(empty($_GET['map_word3'])?'':$map_page3)?>
                            <?=(empty($existence_get)?'':$existence_get)?>"><?=$i?>
                        </a>
                    <?}elseif ($i == $page) {?>
                        <span id="ecowin_page_now"> <?=$i?> </span>
                    <?}elseif($i <= $max_page){?>
                        <a href="./map_list.php?page=<?=$i?>
                            <?=(empty($_GET['map_word'])?'':$map_page)?>
                            <?=(empty($_GET['map_word2'])?'':$map_page2)?>
                            <?=(empty($_GET['map_word3'])?'':$map_page3)?>
                            <?=(empty($existence_get)?'':$existence_get)?>"><?=$i?>
                        </a>
                    <?}?>
                <?}?>
                <?if($page != $max_page){?>
                    <a href="./map_list.php?page=<?=$max_page?>
                        <?=(empty($_GET['map_word'])?'':$map_page)?>
                        <?=(empty($_GET['map_word2'])?'':$map_page2)?>
                        <?=(empty($_GET['map_word3'])?'':$map_page3)?>
                        <?=(empty($existence_get)?'':$existence_get)?>">>>
                    </a>
                <?}?>
            </p>
        </div>
        <div class="ecowin_map">
            <h2 class="ecowin_title">エコウィンハイブリッド MAP</h2>
            <p class="ecowin_add_selected">
                <input id="address_select" class="address_select" type="text">
                <!-- <button onclick="address_select();">住所検索</button> -->
                <input class="address_select_input" type="button" onclick="address_select();" value="住所検索">
            </p>
            <div id="map" class="wirte_map"></div>
        </div>

        <!-- 위도경도 API -->
        <script type="text/javascript" charset="utf-8"src="http://js.api.olp.yahooapis.jp/OpenLocalPlatform/V1/jsapi?appid=dj00aiZpPTNFbnlmeVlnbXdsSCZzPWNvbnN1bWVyc2VjcmV0Jng9MTk-"></script>
        <!-- 맵 API -->
        <script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?appid=dj00aiZpPTNFbnlmeVlnbXdsSCZzPWNvbnN1bWVyc2VjcmV0Jng9MTk-"></script>
        <script type="text/javascript">
            var geocoder = new Y.GeoCoder();
            // 주소 정보를 취득한다(크기 측정용)
            var address = document.getElementsByClassName("address");
            // 맵
            var stylemaplayer;
            var ymap = new Y.Map(
                "map",{
                    "configure": {
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
            var flrst_map = true;
            var map_size9 = ['山口','北海','岩手'];
            var map_size10 = ['青森','秋田','山形','宮城','福島','千葉','石川','福井','長野','三重'
                             ,'兵庫','島根','高知','福岡','広島','愛媛','長崎','熊本','大分','宮崎','鹿児'];
            var map_size11 = ['沖縄','佐賀','茨城','栃木','群馬','埼玉','新潟','富山','山梨','岐阜'
                             ,'静岡','愛知','滋賀','大阪','奈良','和歌','鳥取','岡山','徳島'];
            var map_size12 = ['京都','東京','神奈川','香川'];
            function map_sizing(supply_address,latitude,longitude){
                //지도 첫 화면
                if(map_size9.indexOf(supply_address[0]) != -1){
                    ymap.drawMap(new Y.LatLng(latitude,longitude), 9, "stylemap");
                }else if(map_size10.indexOf(supply_address[0]) != -1){
                    ymap.drawMap(new Y.LatLng(latitude,longitude), 10, "stylemap");
                }else if(map_size11.indexOf(supply_address[0]) != -1){
                    ymap.drawMap(new Y.LatLng(latitude,longitude), 11, "stylemap");
                }else if(map_size12.indexOf(supply_address[0]) != -1){
                    ymap.drawMap(new Y.LatLng(latitude,longitude), 12, "stylemap");
                }
            }
            for (let i = 0; i < address.length; i++) {
                // 주소리스트 住所リスト
                let supply_address = document.getElementById("supply_address"+i).childNodes[0].nodeValue;
                // 이름
                let recipient = document.getElementById("recipient"+i).childNodes[0].nodeValue;
                // 주소변환
                let request = { query : supply_address};

                if(supply_address == " "){
                    let not_find = document.getElementById("border_id"+i);
                    not_find.style.backgroundColor="Pink";
                }else if(supply_address && flrst_map){
                    flrst_map = false;
                    geocoder.execute(request, function(ydf_data){
                        if(ydf_data.features.length > 0 ) {
                            var latlng = ydf_data.features[0].latlng;
                            // 위도경도 설정 라엇튜드,롱즈튜드
                            var latitude = latlng.lat();
                            var longitude = latlng.lng();

                            if(supply_address.match('県') == '県'){
                                supply_address = supply_address.split('県',1);
                                map_sizing(supply_address,latitude,longitude);
                            }else if(supply_address.match('府') == '府'){
                                supply_address = supply_address.split('府',1);
                                map_sizing(supply_address,latitude,longitude);
                            }else if(supply_address.match('都') == '都'){
                                supply_address = supply_address.split('都',1);
                                map_sizing(supply_address,latitude,longitude);
                            }else if(supply_address.match('道') == '道'){
                                supply_address = supply_address.split('道',1);
                                map_sizing(supply_address,latitude,longitude);
                            }
                            //컨트롤러 추가
                            ymap.addControl(new Y.LayerSetControl());
                            ymap.addControl(new Y.SliderZoomControlHorizontal());
                            //マーカー 첫번째 마커
                            var marker = new Y.Marker(new Y.LatLng(latitude, longitude),{icon:new Y.Icon('./pin_red.png')});
                            ymap.addFeature(marker);
                            //ラベル 첫번째 라벨
                            var label = new Y.Label(new Y.LatLng(latitude, longitude), recipient,{offset:new Y.Point(10,-20)},{iconLabelSize: new Y.Size(100,100)});
                            ymap.addFeature(label);
                        }else{
                            let not_find = document.getElementById("border_id"+i);
                            not_find.style.backgroundColor="Pink";
                        }
                    });
                }else{
                    var loopTimer = window.setTimeout(function(){
                        geocoder.execute(request, function(ydf_data){
                            if(ydf_data.features.length > 0 ) {
                                var latlng = ydf_data.features[0].latlng;
                                // 위도경도 설정 라엇튜드,롱즈튜드
                                var latitude = latlng.lat();
                                var longitude = latlng.lng();
                                //マーカー 마커
                                var marker = new Y.Marker(new Y.LatLng(latitude, longitude),{icon:new Y.Icon('./pin_red.png')});
                                ymap.addFeature(marker);
                                //ラベル　 라벨
                                var label = new Y.Label(new Y.LatLng(latitude, longitude), recipient,{offset:new Y.Point(10,-20)});
                                ymap.addFeature(label);
                            }else{
                                let not_find = document.getElementById("border_id"+i);
                                not_find.style.backgroundColor="Pink";
                            }
                        });
                    }, 1000);
                }
            }

            // 検索用 검색용 함수
            function address_select(){
                var geocoder = new Y.GeoCoder();
                var address = document.getElementById("address_select").value;
                var request = {query : address};
                geocoder.execute( request, function( ydf_data ){
                    if ( ydf_data.features.length > 0 ) {
                        var latlng = ydf_data.features[0].latlng;
                        var latitude = latlng.lat();
                        var longitude = latlng.lng();
                        ymap.drawMap(new Y.LatLng(latitude,longitude), 12);
                        //マーカー 첫번째 마커
                        var marker = new Y.Marker(new Y.LatLng(latitude, longitude),{icon:new Y.Icon('./pin_blue.png')});
                        ymap.addFeature(marker);
                        //ラベル 첫번째 라벨 {offset:new Y.Point(10,-20)} 마커를 조금 위에 표시함(평소원래위치보다 아래로 나옴)
                        var label = new Y.Label(new Y.LatLng(latitude, longitude), address,{offset:new Y.Point(10,-20)});
                        ymap.addFeature(label);
                    }else{
                        alert("検索失敗しました");
                    }
                });
            }
        </script>
<?require_once("./require/footer.php") ?>
