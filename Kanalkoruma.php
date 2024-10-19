<?php
error_reporting(0);
$host=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$token = "8096850247:AAGV0XfegpdprVpMyeAyLHkSIv3NkKt3xOQ"; #Bot jetonu
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
echo "تم تشغيل البوت ✅";#Buradaki hiçbir şeye dokunmayın 
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

$admin = 6880248833; #Ellerinizi Telegram'a koyun 
mkdir("data");

$channel = file_get_contents("lhttps://t.me/yenihack25");
$link = file_get_contents("https://t.me/+BbfP4un4atswMDg0");
$ch = "$channel"; #لا تلعب هنا
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| Üzgünüm canım 
🔰| Kullanabilmek için bot kanalına abone olmanız gerekmektedir. 

- [Kanala abone olmak için buraya tıklayın ]($link)

‼️| Abone ol ve gönder  /start",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| Üzgünüm canım 
🔰| Kullanabilmek için bot kanalına abone olmanız gerekmektedir. 

- $uuser

‼️| Abone ol ve gönder  /start",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
Liste güncellendi /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"• Bot'a yeni bir kişi girdi  😊 •–––––––––––––––––––––––––•
• Kişi bilgileri  📜👤🤍 :

↫ isim   ↫ ⦗ $name ⦘
↫ İD   ↫⦗ $user ⦘
↫ eller  ↫ ⦗ $id ⦘
 •–––––––––––––––––––––––––•
↫ Toplam üye sayısı  : ⦗ $all ⦘
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"-•
🤍 | Hoş geldiniz sevgili geliştirici 
🤍 | İşte komut listeniz 
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• Botu kilitle  •","callback_data"=>"abcd"],["text"=>"• Botu aç  •","callback_data"=>"abcde"]],
[["text"=>"• Bot üyeleri  •","callback_data"=>"userd"]],
[["text"=>"• Alarmı etkinleştir  •","callback_data"=>"ont"],["text"=>"• Alarmı devre dışı bırak  •","callback_data"=>"oft"]],
[["text"=>"• Radyo Departmanı  •","callback_data"=>"for"]],
[['text' => "• Abonelik listesi  •", 'callback_data' => "channel"],['text' => "• Abonelik  ($skor) •", "callback_data" => "off"]],
[['text' => "• Destek olmak  •", 'callback_data' => "file"],['text' => "• Kopyayı yükle  •", 'callback_data' => "up"]],
[['text' => "• İstatistik  •", 'callback_data' => "pannel"],['text' => "• Yönetici bölümü  •", 'callback_data' => "lIllabbas"]],
[['text' => "• Değişiklikler  •", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "• Basmakalıp  /start •", 'callback_data' => "editstart"]],
]])
]);   
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"Hoşgeldin ", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• Yöneticiyi Yükselt  •","callback_data"=>"adl"]],
[["text"=>"• Son yönetici  •","callback_data"=>"addmin"]],
[["text"=>"• Yöneticiyi sil  •","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
Üye ellerini gönder 
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Üye yüklendi ", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"Botta yöneticiliğe yükseltildiniz ", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Üye zaten bağımlı ", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"Son beş bağımlı  :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- Ana sayfa .","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
Silmek istediğine emin misin? 
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'hayır ' ,'callback_data'=>"bak"]],
[['text'=>'Evet ' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
Yönetici silindi 
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'Ana sayfa ' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- Hoş geldin canım - bot açıldı 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'Ana sayfa ' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- Hoş geldin canım - bot kilitlendi 
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'Ana sayfa' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوق" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"Üzgünüz, bot şu anda güncelleniyor ",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Hoşgeldiniz sayın admin 
 Üye sayısı  : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'Ana sayfa' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 Merhaba canım botta bildirimler aktif edildi 
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 Merhaba canım, botta bildirimler devre dışı bırakıldı 
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, sana uygun olanı seç ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Görüntü yayını ",'callback_data'=>"photoi"]],
[['text' => "Mesaj yayınlama ", 'callback_data' => "msg"],['text' => "Oryantasyon Radyosu ", 'callback_data' => "forward"]],
[['text' => "Radyo Medyası ", 'callback_data' => "midea"],['text' => "Çevrimiçi radyo ", 'callback_data' => "inline"]],
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, mesajınızı tüm abonelere iletmek için gönderin ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Iptal etmek \ bozmak ",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, başarıyla yayınlandı  ( $all ) abone ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, mesajınızı tüm abonelere direktif şeklinde aktarmak için gönderin ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Iptal etmek \ bozmak  ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, başarıyla bir radyo rotası oluşturuldu.  ( $all ) abone ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri ",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, resim dışında her türlü medyayı kullanabilirsin (poster - video - parmak izi - ses dosyası - dosya - animasyon - iletişim) ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Iptal etmek \ bozmak ",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Tamam canım, yayınlanacak fotoğrafı tüm abonelere gönder ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Iptal etmek \ bozmak  ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, fotoğraf başarıyla şuraya gönderildi:  ( $all ) abone ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, çevrimiçi metni yönlendir ki abonelere yayınlayabileyim ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Iptal etmek \ bozmak ",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, çevrimiçi yayın başarıyla yayınlandı  ( $all ) abone ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Tamam canım, komutu belirle ki çalıştırabileyim ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Özel kanal  ",'callback_data'=>"link"]],
[['text'=>"Herkese açık kanal  ",'callback_data'=>"user"]],
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, botu kanalda yönetici olarak yükselt, sonra kanaldan buraya bir talimat gönder ا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Tamam canım şimdi kanal linkini buraya gönder ا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, abonelik başarıyla etkinleştirildi ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Süreci tamamla ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Üzgünüm canım, bağlantıyı doğru gönder ",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Peki canım, botu kanalda yönetici olarak yükselt, ardından aboneliği etkinleştirmek için kanala bir kullanıcı adı gönder ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Peki canım, abonelik başarıyla etkinleştirildi ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Süreci tamamla  ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 Üzgünüm canım, kullanıcıyı doğru gönder ",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 Merhaba canım, zorunlu abonelik devre dışıysa - abonelik listesini seçip etkinleştir 
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 Peki canım, aboneliğin etkinleştirildi Aboneliği devre dışı bırakmak istediğinden emin misin? 
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'Evet  ', 'callback_data'=>'yesde2'],
['text'=>'hayır  ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
Peki canım, tüm kanallara abonelikler devre dışı bırakıldı. Kanalına abonelikleri daha sonra etkinleştirebilirsin. ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri ",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 Aboneleriniz için bir kopya 
 Iletim süresi  : ( $bloktime )
 Abone sayısı  : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 Tamam canım, şimdi üyelerin dosyasını gönder. Dosyayı isimle gönder.  : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"Geri  ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*İstatistikler bölümüne hoş geldiniz  . 📊
--------------------------
 Bot üye sayısı  : $all
 Bugünün etkileşimcileri   : $todayuser
 Gönderilen mesa
