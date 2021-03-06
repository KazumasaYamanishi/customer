<?php
// data-taxonomy.php
// 各カスタム投稿(カテゴリー)の説明

function get_tax_title($tax_name){
	switch ($tax_name) {
		case "cat_flooring":
			$jtitle = "フローリング";
			$etitle = "Flooring";
			break;
		case "cat_paneling":
			$jtitle = "羽目板";
			$etitle = "Paneling";
			break;
		case "cat_decking":
			$jtitle = "デッキ材";
			$etitle = "Decking";
			break;
		case "cat_other":
			$jtitle = "その他";
			$etitle = "Other";
			break;
	}
	return array($jtitle,$etitle);
}



function the_term_info($cat_jname, $term_name){ 
//$text に<br>不要
//カスタム投稿 カテゴリー名と合わせる

if($cat_jname=="フローリング"):
	switch ($term_name) {
case "チーク":
$title = "「木の王様」と呼ばれる世界で最高級の無垢フローリング材";
$text = "チークは「木の王様」と呼ばれ世界で最高級の無垢フローリング材として珍重されています。
加工性にも富み、寸法安定性も抜群で、耐水性や防虫力と言う点においても優れています。
当社のジャワチークは、ジャワ島国有林で認定された材のみを使用しています。
※日本グレードはインドネシア産材です。
※床暖房用は、含水率を±8％でコントロールしています。";
break;

case "サクラ":
$title = "女性に人気のサクラフローリング。おススメです！";
$text = "薄く淡いピンク色と白を基調とした西南サクラは、日本で街中にあるサクラの木とは別のもので中国で採れるピンク系のカバ（バーチ）のことを指すことが多いです。
重硬で均質、肌目は上品な風合いがみられ加工性もよく、表面の仕上げも良好です。";
break;

case "オーク（ナラ）":
$title = "硬く重厚ではっきりとした木目が特徴です！";
$text = "はっきりとした杢目が特徴で、ブナ科コナラ属落葉広葉樹のナラ材。
現在では、数百種類以上が知られていて、亜熱帯から亜寒帯まで北半球に広く分布しています。
日本では北海道から本州、四国、九州に生育していて、北海道産のナラ材が質・量ともに有名です。
※「道産の楢（ナラ）」と呼ばれています。";
break;

case "ローズウッド（ソノクリン）":
$title = "ローズウッドやシタン（紫檀）と呼ばれる銘木";
$text = "紫檀は英語の呼称でローズウッドと呼ばれ、インドネシアではソノクリン、またはソノケリンと呼ばれその名が知れ渡っています。
新鮮な材は、バラの花のような芳香を持つことから「ローズウッド」と呼ばれているとか・・・。
木目の美しさももさることながら、材も素直で収縮や反りも少ないのが特徴です。
インドネシア国有林で認定された材のみを使用しています。";
break;

case "東北カバ":
$title = "柔らかな木目と明るいフローリングの代表的な樹種";
$text = "英語ではバーチ、日本語ではカバザクラと呼ばれています。
主な用途は家具材、建築内装材、フローリング、敷居、ドアなどの建具材で使用されています。
高級感のある光沢を放ちスッキリとした明るい室内空間を演出します。";
break;

case "米ヒバ":
$title = "日本の神社仏閣建築には欠かせない木材";
$text = "樹齢1000年以上のカナダ産のヒバの背板から製材して加工しています。
大径木で長材がとれ、耐久性もあることから、現在の日本の神社仏閣建築には欠かせない材となっています。
クリーム色の板巾のラインが通るスッキリとした印象になります。";
break;

case "小国杉":
$title = "適度な凹凸で足裏を刺激してくれる！？";
$text = "熊本県北部のブランド杉である小国杉のみを素材の仕入れから製材・乾燥・加工まですべての管理を1工場で行い、安定した品質を生み出しています。
浮造り加工を施していますので、適度な凹凸で足裏を刺激してくれます。
その肌触りは、小国杉特有の油分の多さにより滑らかな仕上がりとなり類をみないほどの光沢をもっています。";
break;

case "柳杉":
$title = "柳杉は、日本の杉を中国に植林したもの";
$text = "柳杉は、日本の杉を中国に植林したもの。ここ数年で伐期を迎え、産地である四川省などでは現在盛んに製材されている材料です。日本の杉とDNAの構造が同じであるため、「日本の杉だ」と言っても見分けがつかないほど、性質はほぼ同じ。杉が使える部位であればどこでも利用することが出来ます。
色味も、若干赤味が強いのが特徴ですが、日本の杉よりもむしろ暖かな印象を与えてくれますし、塗装せずにこのままご使用頂いても、ウッディーな雰囲気を醸し出すことが出来るのではないでしょうか。硬さは日本の杉と比べほんの少し柔らかいので、子ども部屋の内装などに、特にお勧め致します。傷がついても気にならないという方にはもってこいの材です。";
break;

case "国産桧":
$title = "1000年の歴史、日本を代表する建材";
$text = "桧（ヒノキ）は、日本では建材として最高品質のものとされています。
世界最古の木造建築物として有名な法隆寺は、桧（ヒノキ）を建材に使用しています。
耐朽性・強度に優れ、建材として1000年以上の寿命を持つものがあります。
また、桧（ヒノキ）の香りには、気分を落ち着け、リラックスさせるなど、ヒーリング効果があるといわれています。";
break;

case "本欅":
$title = "日本建築では、代表的な高級材";
$text = "はっきりとした力強い木目が好まれています。 材質は硬くじょうぶなため、寺社建築、高級和家具、臼、杵、太鼓の胴などによく用いられています。";
break;

case "パイン":
$title = "お部屋に統一感を持たせたいという方におススメ";
$text = "柔らかな木目と材質を持ち、加工しやすく、建材だけではなく家具などにもよく利用されます。
パイン材にはさまざまな種類があり、それぞれユニークな木柄や特徴を持ちます。
また、清潔感あふれる表情を持ち、年月を経て飴色に変化し、マツ特有の美しさを味わうことができます。
針葉樹ならではの柔らかさが、素足にぬくもりと心地よさを伝えます。";
break;

case "本カリン":
$title = "高級感溢れる花梨（カリン）のフローリング";
$text = "非常に硬く、緻密な木材で、色調光沢ともに美しい仕上がりになります。
フローリング材だけでなく、床柱や造作の装飾部分、家具などにも使用されます。
また、バイオリンの弓などに用いられることでも有名です。";
break;

case "アカシア":
$title = "高級感漂うブラウン系のアンティークな床材！";
$text = "アカシアは非常に重硬で、衝撃力にも強く、耐久性もあります。
黒褐色の濃淡、木目を横切って現れる光沢のある縞模様が、独特のニュアンスを醸し出します。
高級感漂うブラウン系のアンティークな床材をお探しの方には、おススメの木材となっております。";
break;
}

elseif($cat_jname=="羽目板"):
switch ($term_name) {

case "柳杉":
$title = "";
$text = "";
break;

case "福州杉":
$title = "";
$text = "";
break;

case "小国杉":
$title = "";
$text = "";
break;

case "米ヒバ":
$title = "";
$text = "";
break;
}

elseif($cat_jname=="デッキ材"):
switch ($term_name) {

case "TOREM（トレム）":
$title = "";
$text = "";
break;

case "セランガンバツ":
$title = "";
$text = "";
break;

case "米杉":
$title = "";
$text = "";
break;
}

elseif($cat_jname=="その他"):
switch ($term_name) {
case "框・踏板・巾木など":
$title = "";
$text = "";
break;

case "玄関材":
$title = "";
$text = "";
break;

case "その他銘木":
$title = "";
$text = "";
break;

case "フリー板":
$title = "";
$text = "";
break;

case "赤松（障子松）":
$title = "";
$text = "";
break;
}
endif;
	echo '<p class="lead">'.$title.'</p><p>'.nl2br($text).'</p>';

}