<?php
####@php_aba###
 ###@armof###
ob_start();
define('API_KEY', 'توكن');
echo "https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $ok = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ok";
        $ok_Iq = file_get_contents($url);
        return json_decode($ok_Iq);
}
$update = json_decode(file_get_contents('php://input'));
$php_aba = $update->message;
$text = $php_aba->text;
$f_ppp = $php_aba->chat->id;
$from_id = $php_aba->from->id;
$fn = $php_aba->from->first_name;
$user = $php_aba->from->username;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
$f_ppp2 = $update->callback_query->message->chat->id;
$php_aba_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $php_aba->from->id;
$text = $php_aba->text;
$user = $php_aba->from->username;
$php_aba = $update->message;
$text = $php_aba->text;
$php_aba_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $php_aba->from->id;
$name = $update->message->from->first_name;
$from_id = $php_aba->from->id;
$data = $update->callback_query->data;
$f_ppp2 = $update->callback_query->message->chat->id;
$admin = "296369326"; #ايديك
$ok = file_get_contents("ARMOF.txt");
$ok0 = file_get_contents("ARMOF0.txt");
$ok1= file_get_contents("ARMOF1.txt");
$ok5 = file_get_contents("ARMOF2.txt");
$ok6 = file_get_contents("ARMOF3.txt");
$ok20 = json_decode(file_get_contents('php://input'));
$ok18 = $update->message;
$ok13 = $ok18->chat->id;
$ok17 = $ok18->text;
$meme = $ok20->callback_query->data;
$ok12 = $ok20->callback_query->message->chat->id;
$ok14 =  $ok20->callback_query->message->message_id;
$ok15 = $ok18->from->first_name;
$ok16 = $ok18->from->username;
$ok11 = $ok18->from->id;
$ok2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ok3 = count($ok2)-1;
if ($ok18 && !in_array($ok11, $ok2)) {
    file_put_contents("ARMOF4.txt", $ok11."\n",FILE_APPEND);
  }
$ok9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ok0&user_id=".$ok11);
$ok10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ok1&user_id=".$ok11);
if($ok18 && (strpos($ok9,'"status":"left"') or strpos($ok9,'"Bad Request: USER_ID_INVALID"') or strpos($ok9,'"status":"kicked"') or strpos($ok10,'"status":"left"') or strpos($ok10,'"Bad Request: USER_ID_INVALID"') or strpos($ok10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$ok13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$ok0.'
'.$ok1,
]);return false;}
if($ok17 == "/admin" and $ok11 == $admin){
bot("sendmessage",[
"chat_id"=>$ok13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$f_ppp)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$php_aba->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
}
if($meme == "ARMOF" ){
bot('EditMessageText',[
'chat_id'=>$ok12,
'message_id'=>$ok14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$f_ppp2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF0"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF0");
}
if($ok17 and $ok == "ARMOF0" and $ok11 == $admin){
bot("sendmessage",[
"chat_id"=>$ok13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF0.txt","$ok17");
unlink("ARMOF.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF1'],
]    
]])
]);    
}
if($meme == "ARMOF1"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF0.txt");
}
if($meme == "ARMOF2"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF1");
}
if($ok17 and $ok == "ARMOF1" and $ok11 == $admin){
bot("sendmessage",[
"chat_id"=>$ok13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF1.txt","$ok17");
unlink("ARMOF.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF3'],
]    
]])
]);    
}
if($meme == "ARMOF3"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF1.txt");
}
if($meme == "ARMOF4"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $ok0 📢 
- القناة الثانية ،  $ok1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF5"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $ok3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF2");
}
if($ok18 and $ok == "ARMOF2" and $ok11 == $admin){
bot("sendmessage",[
"chat_id"=>$ok13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ok2); $i++){
bot('forwardMessage', [
'chat_id'=>$ok2[$i],
'from_chat_id'=>$ok11,
'message_id'=>$ok18->message_id
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF6"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $ok3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF3");
}
if($ok17 and $ok == "ARMOF3" and $ok11 == $admin){
bot("sendmessage",[
"chat_id"=>$ok13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ok2); $i++){
bot('sendMessage', [
'chat_id'=>$ok2[$i],
'text'=>$ok17
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF7"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>"- عدد مشتركين البوت  [ $ok3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF9"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF2.txt","ARMOF");
}
if($ok17 == "/start" and $ok5 == "ARMOF" and $ok11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$ok15](tg://user?id=$f_ppp) ، 🦕
- المعرف ، [@$ok16](tg://user?id=$f_ppp) ، 🐢
- الايدي ، [$ok11](tg://user?id=$f_ppp) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $ok3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "ARMOF10"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF2.txt");
}
if($meme == "ARMOF11"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF3.txt","ARMOF");
}
if($ok18 and $ok6 == "ARMOF" and $ok11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$ok11,
'message_id'=>$ok18->message_id
]);
}
if($ok18 and $ok6 == "ARMOF" and $ok11 == $admin){
bot('sendMessage',[
'chat_id'=>$ok18->reply_to_message->forward_from->id,
    'text'=>$ok17,
    ]);
}
if($meme == "ARMOF12"){
bot('EditMessageText',[
    'chat_id'=>$ok12,
    'message_id'=>$ok14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF3.txt");
} 
$zkrf = file_get_contents("zkrf.txt");
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>"*
•🦋| اهلا بك. $name
•🖤| في بوت الزخرفه
•🇮🇶| اختر •من الاسفل ، 
-- -- -- -- - -- -- -- -- -- -- -- -- -- 
W𝐄𝐋𝐂𝐎𝐌𝐄 𝐓𝐎 𝐓𝐇𝐄 𝐃𝐄𝐂𝐎𝐑𝐀𝐓𝐈𝐎𝐍 𝐁𝐎𝐓 C𝐇𝐎𝐎𝐒𝐄 𝐖𝐇𝐀𝐓 𝐘𝐎𝐔 𝐖𝐀𝐍𝐓 𝐅𝐑𝐎𝐌 𝐓𝐇𝐄 𝐁𝐎𝐓𝐓𝐎𝐌 𓊴
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'زخرفه الان 🇮🇶','callback_data'=>'ii']],
[['text'=>"بايو 🦋", 'callback_data'=>'M']],
]
])
]);
}
if($data == "ii" ){
file_put_contents("zkrf.txt","zkrf");
bot('EditMessageText',[
'chat_id'=>$f_ppp2,
'message_id'=>$php_aba_id2,
'text'=>"*حسنا ارسل ما تريد زخرفته 💞🌻*",
'parse_mode'=>"MarkDown",
]);   
}
if($text != "/start"   and $zkrf == "zkrf"){
file_put_contents("zkrf.txt","none");
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐴',$text); 
 $ok = str_replace('b','b',$ok); 
 $ok = str_replace('c','𝐶',$ok); 
 $ok = str_replace('d','𝐷',$ok); 
 $ok = str_replace('e','𝐸',$ok); 
 $ok = str_replace('f','𝐹',$ok); 
 $ok = str_replace('g','𝐺',$ok); 
 $ok = str_replace('h','𝐻',$ok); 
 $ok = str_replace('i','𝐼',$ok); 
 $ok = str_replace('j','𝐽',$ok); 
 $ok = str_replace('k','𝐾',$ok); 
 $ok = str_replace('l','𝐿',$ok); 
 $ok = str_replace('m','𝑀',$ok); 
 $ok = str_replace('n','𝑁',$ok); 
 $ok = str_replace('o','𝑂',$ok); 
 $ok = str_replace('p','𝑃',$ok); 
 $ok = str_replace('q','𝑄',$ok); 
 $ok = str_replace('r','𝑅',$ok); 
 $ok = str_replace('s','𝑆',$ok); 
 $ok = str_replace('t','𝑇',$ok); 
 $ok = str_replace('u','𝐔',$ok); 
 $ok = str_replace('v','𝑉',$ok); 
 $ok = str_replace('w','𝑊',$ok); 
 $ok = str_replace('x','𝑋',$ok); 
 $ok = str_replace('y','𝑌',$ok); 
 $ok = str_replace('z','𝑍',$ok);
 $ok = str_replace('ض','ض֮',$ok);
$ok = str_replace('ص','ص֓',$ok); 
$ok = str_replace('ث','ثֻ',$ok); 
$ok = str_replace('ق','ق֯',$ok); 
$ok = str_replace('ف','ف֛',$ok); 
$ok = str_replace('غ','غؒ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هٞ',$ok); 
$ok = str_replace('خ','خ٘٘٘٘٘٘٘٘٘٘',$ok); 
$ok = str_replace('ح','حٟ',$ok); 
$ok = str_replace('ج','جۤ',$ok); 
$ok = str_replace('ش','شۨ',$ok);
$ok = str_replace('س','سܱܰ',$ok); 
$ok = str_replace('ي','يަ',$ok); 
$ok = str_replace('ب','ب߬',$ok); 
$ok = str_replace('ل','ل',$ok); 
$ok = str_replace('ا','اࠗ',$ok); 
$ok = str_replace('ت','ت',$ok); 
$ok = str_replace('ن','نۨۨۨۨۨۨۨۨ',$ok); 
$ok = str_replace('م','مࣩ',$ok); 
$ok = str_replace('ك','ك๊',$ok); 
$ok = str_replace('ظ','ظ້',$ok); 
$ok = str_replace('ط','ط็',$ok); 
$ok = str_replace('ذ','ذྃ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ؤ','ؤ',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('و','୨و',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ظ',' ظ',$ok); 
$ok = str_replace('د','د',$ok); 
$a = $ok."".$smile;
$aa = $ok."".$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗']; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a',"𝓪",$text);
$ok = str_replace('A',"𝓐",$ok);
$ok = str_replace("b","𝓫",$ok);
$ok = str_replace("B","𝓑",$ok);
$ok = str_replace("c","𝓬",$ok);
$ok = str_replace("C","𝓒",$ok);
$ok = str_replace("d","𝓭",$ok);
$ok = str_replace("D","𝓓",$ok);
$ok = str_replace("e","𝓮",$ok);
$ok = str_replace("E","𝓔",$ok);
$ok = str_replace("f","𝓯",$ok);
$ok = str_replace("F","𝓕",$ok);
$ok = str_replace("g","𝓰",$ok);
$ok = str_replace("G","𝓖",$ok);
$ok = str_replace("h","𝓱",$ok);
$ok = str_replace("H","𝓗",$ok);
$ok = str_replace("i","𝓲",$ok);
$ok = str_replace("I","𝓘",$ok);
$ok = str_replace("j","𝓳",$ok);
$ok = str_replace("J","𝓙",$ok);
$ok = str_replace("k","𝓴",$ok);
$ok = str_replace("K","𝓚",$ok);
$ok = str_replace("l","𝓵",$ok);
$ok = str_replace("L","𝓛",$ok);
$ok = str_replace("m","𝓶",$ok);
$ok = str_replace("M","𝓜",$ok);
$ok = str_replace("n","𝓷",$ok);
$ok = str_replace("N","𝓝",$ok);
$ok = str_replace("o","𝓸",$ok);
$ok = str_replace("O","𝓞",$ok);
$ok = str_replace("p","𝓹",$ok);
$ok = str_replace("P","𝓟",$ok);
$ok = str_replace("q","𝓺",$ok);
$ok = str_replace("Q","𝓠",$ok);
$ok = str_replace("r","𝓻",$ok);
$ok = str_replace("R","𝓡",$ok);
$ok = str_replace("s","𝓼",$ok);
$ok = str_replace("S","𝓢",$ok);
$ok = str_replace("t","𝓽",$ok);
$ok = str_replace("T","𝓣",$ok);
$ok = str_replace("u","𝓾",$ok);
$ok = str_replace("U","𝓤",$ok);
$ok = str_replace("v","𝓿",$ok);
$ok = str_replace("V","𝓥",$ok);
$ok = str_replace("w","𝔀",$ok);
$ok = str_replace("W","𝓦",$ok);
$ok = str_replace("x","𝔁",$ok);
$ok = str_replace("X","𝓧",$ok);
$ok = str_replace("y","𝔂",$ok);
$ok = str_replace("Y","𝓨",$ok);
$ok = str_replace("z","𝔃",$ok);
$ok = str_replace("Z","𝓩",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$b = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝙰',$text);
$ok = str_replace("b","𝙱",$ok);
$ok = str_replace("c","𝙲",$ok);
$ok = str_replace("d","𝙳",$ok);
$ok = str_replace("e","𝙴",$ok);
$ok = str_replace("E","𝙵",$ok);
$ok = str_replace("g","𝙶",$ok);
$ok = str_replace("h","𝙷",$ok);
$ok = str_replace("i","𝙸",$ok);
$ok = str_replace("j","𝙹",$ok);
$ok = str_replace("k","𝙺",$ok);
$ok = str_replace("l","𝙻",$ok);
$ok = str_replace("m","𝙼",$ok);
$ok = str_replace("n","𝙽",$ok);
$ok = str_replace("o","𝙾",$ok);
$ok = str_replace("p","𝙿",$ok);
$ok = str_replace("q","𝚀",$ok);
$ok = str_replace("r","𝚁",$ok);
$ok = str_replace("s","𝚂",$ok);
$ok = str_replace("t","𝚃",$ok);
$ok = str_replace("u","𝚄",$ok);
$ok = str_replace("v","𝚅",$ok);
$ok = str_replace("w","𝚆",$ok);
$ok = str_replace("x","𝚇",$ok);
$ok = str_replace("y","𝚈",$ok);
$ok = str_replace("z","𝚉",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$c = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᴀ',$text); 
 $ok = str_replace('b','ʙ',$ok); 
 $ok = str_replace('c','ᴄ',$ok); 
 $ok = str_replace('d','ᴅ',$ok); 
 $ok = str_replace('e','ᴇ',$ok); 
 $ok = str_replace('f','ғ',$ok); 
 $ok = str_replace('g','ɢ',$ok); 
 $ok = str_replace('h','ʜ',$ok); 
 $ok = str_replace('i','ɪ',$ok); 
 $ok = str_replace('j','ᴊ',$ok); 
 $ok = str_replace('k','ᴋ',$ok); 
 $ok = str_replace('l','ʟ',$ok); 
 $ok = str_replace('m','ᴍ',$ok); 
 $ok = str_replace('n','ɴ',$ok); 
 $ok = str_replace('o','ᴏ',$ok); 
 $ok = str_replace('p','ᴘ',$ok); 
 $ok = str_replace('q','ǫ',$ok); 
 $ok = str_replace('r','ʀ',$ok); 
 $ok = str_replace('s','s',$ok); 
 $ok = str_replace('t','ᴛ',$ok); 
 $ok = str_replace('u','ᴜ',$ok); 
 $ok = str_replace('v','ᴠ',$ok); 
 $ok = str_replace('w','ᴡ',$ok); 
 $ok = str_replace('x','x',$ok); 
 $ok = str_replace('y','ʏ',$ok); 
 $ok = str_replace('z','ᴢ',$ok);
 $ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $d = $ok."".$smile;

 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝘼',$text); 
 $ok = str_replace('b','𝘽',$ok); 
 $ok = str_replace('c','𝘾',$ok); 
 $ok = str_replace('d','𝘿',$ok); 
 $ok = str_replace('e','𝙀',$ok); 
 $ok = str_replace('f','𝙁',$ok); 
 $ok = str_replace('g','𝙂',$ok); 
 $ok = str_replace('h','𝙃',$ok); 
 $ok = str_replace('i','𝙄',$ok); 
 $ok = str_replace('j','𝙅',$ok); 
 $ok = str_replace('k','𝙆',$ok); 
 $ok = str_replace('l','𝙇',$ok); 
 $ok = str_replace('m','𝙈',$ok); 
 $ok = str_replace('n','𝙉',$ok); 
 $ok = str_replace('o','𝙊',$ok); 
 $ok = str_replace('p','𝙋',$ok); 
 $ok = str_replace('q','𝙌',$ok); 
 $ok = str_replace('r','𝙍',$ok); 
 $ok = str_replace('s','𝙎',$ok); 
 $ok = str_replace('t','𝙏',$ok); 
 $ok = str_replace('u','𝙐',$ok); 
 $ok = str_replace('v','𝙑',$ok); 
 $ok = str_replace('w','𝙒',$ok); 
 $ok = str_replace('x','𝙓',$ok); 
 $ok = str_replace('y','𝙔',$ok); 
 $ok = str_replace('z','𝙕',$ok);
 $ok = str_replace('ض','᎗ᘞ̇',$ok);
$ok = str_replace('ص',' ᎗ᘗ',$ok); 
$ok = str_replace('ث','᎗̇̈ɹ ',$ok); 
$ok = str_replace('ق','',$ok); 
$ok = str_replace('ف','',$ok); 
$ok = str_replace('غ','᎗ϛ',$ok); 
$ok = str_replace('ع','᎗ჺ',$ok); 
$ok = str_replace('ه','᎗බ',$ok); 
$ok = str_replace('خ','ᓘ',$ok); 
$ok = str_replace('ح','ᓗ',$ok); 
$ok = str_replace('ج','ᓗฺ',$ok); 
$ok = str_replace('س',' ᎗ɹɹɹ',$ok); 
$ok = str_replace('ش','᎗ɹ̇̈ɹɹ',$ok); 
$ok = str_replace('ي',' ᎗̤ɹ',$ok); 
$ok = str_replace('ب','᎗̣ɹ ',$ok);
$ok = str_replace('ل','⅃',$ok); 
$ok = str_replace('ا','Ȋ',$ok); 
$ok = str_replace('ت','᎗̈ɹ',$ok); 
$ok = str_replace('ن','᎗̇ɹ',$ok); 
$ok = str_replace('ك','ܭ',$ok); 
$ok = str_replace('م','ᓄ',$ok); 
$ok = str_replace('ة',' ᎗Ꭷ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','᎗̇Ь',$ok); 
$ok = str_replace('ط','᎗Ь',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','ↄ',$ok); 
$ok = str_replace('ز','j',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','g',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $e = $ok.''.$smile;
$items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝒂',$text); 
 $ok = str_replace('b','𝒃',$ok); 
 $ok = str_replace('c','𝒄',$ok); 
 $ok = str_replace('d','𝒅',$ok); 
 $ok = str_replace('e','𝒆',$ok); 
 $ok = str_replace('f','𝒇',$ok); 
 $ok = str_replace('g','𝒈',$ok); 
 $ok = str_replace('h','𝒉',$ok); 
 $ok = str_replace('i','𝒊',$ok); 
 $ok = str_replace('j','𝒋',$ok); 
 $ok = str_replace('k','𝒌',$ok); 
 $ok = str_replace('l','𝒍',$ok); 
 $ok = str_replace('m','𝒎',$ok); 
 $ok = str_replace('n','𝒏',$ok); 
 $ok = str_replace('o','𝒐',$ok); 
 $ok = str_replace('p','𝒑',$ok); 
 $ok = str_replace('q','𝒒',$ok); 
 $ok = str_replace('r','𝒓',$ok); 
 $ok = str_replace('s','𝒔',$ok); 
 $ok = str_replace('t','𝒕',$ok); 
 $ok = str_replace('u','𝒖',$ok); 
 $ok = str_replace('v','𝒗',$ok); 
 $ok = str_replace('w','𝒘',$ok); 
 $ok = str_replace('x','𝒙',$ok); 
 $ok = str_replace('y','𝒚',$ok); 
 $ok = str_replace('z','𝒛',$ok);
 $ok = str_replace('ا','ا',$ok);
$ok = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$ok); 
$ok = str_replace('ث','ث̲ꫭـﮧ',$ok); 
$ok = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ف','فـٌٍ๋ۤ͜ﮧ',$ok); 
$ok = str_replace('غ','غـّٰ̐ہٰٰ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','ھہ',$ok); 
$ok = str_replace('خ','خ̲ﮧ',$ok); 
$ok = str_replace('ح','ح̲ꪳـﮧ',$ok); 
$ok = str_replace('ج','ج̲ꪸـﮧ',$ok); 
$ok = str_replace('ش','ش̲ꪾـﮧ',$ok); 
$ok = str_replace('س','سـ̷ٰٰﮧْ',$ok); 
$ok = str_replace('ي','يـِٰ̲ﮧ',$ok); 
$ok = str_replace('ب','ب̲ꪰـﮧْ',$ok);
$ok = str_replace('ل','لٍُـّٰ̐ہ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تـٰۧﮧ',$ok); 
$ok = str_replace('ن','نٰ̲̐ـﮧْ',$ok); 
$ok = str_replace('ك','كـِّﮧْٰٖ',$ok); 
$ok = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ة',' ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظَـ๋͜ﮧْ',$ok); 
$ok = str_replace('ط','ط̲꫁ـﮧ',$ok); 
 $ok = str_replace('ذ','ذٖ',$ok); 
$ok = str_replace('د','دُ',$ok); 
$ok = str_replace('ز','ژٰ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﯛ૭',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $f = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝐀',$text);
$ok = str_replace("b","𝐁",$ok);
$ok = str_replace("c","𝐂",$ok);
$ok = str_replace("d","𝐃",$ok);
$ok = str_replace("e","𝐄",$ok);
$ok = str_replace("E","𝐅",$ok);
$ok = str_replace("g","𝐆",$ok);
$ok = str_replace("h","𝐇",$ok);
$ok = str_replace("i","𝐈",$ok);
$ok = str_replace("j","𝐉",$ok);
$ok = str_replace("k","𝐊",$ok);
$ok = str_replace("l","𝑳",$ok);
$ok = str_replace("m","𝐌",$ok);
$ok = str_replace("n","𝐍",$ok);
$ok = str_replace("o","𝐎",$ok);
$ok = str_replace("p","𝐏",$ok);
$ok = str_replace("q","𝐐",$ok);
$ok = str_replace("r","𝐑",$ok);
$ok = str_replace("s","𝐒",$ok);
$ok = str_replace("t","𝐓",$ok);
$ok = str_replace("u","𝐔",$ok);
$ok = str_replace("v","𝐕",$ok);
$ok = str_replace("w","𝐖",$ok);
$ok = str_replace("x","𝐗",$ok);
$ok = str_replace("y","𝐘",$ok);
$ok = str_replace("z","𝐙",$ok);
 $ok = str_replace('ض','ضــٰـُ͢ـًُــ ',$ok); 
$ok = str_replace('ص','صــٰـُ͢ـُٰཻــ͒͜ـًـــ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ـــــ͒͜ـً',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــٰـُ͢ـُـ̷ِْــٰــ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰٰٰٖٖٖۧـ๋͜ــ۫͜ـــ',$ok); 
$ok = str_replace('ح','حـ̷ِْــٰــ۫͜ـــ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـ๋๋͜͜͡‏ــٰـُ͢ـُٰཻـــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـَٰــۘ❀ـَٰـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـ',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$g = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗔',$text);
$ok = str_replace("b","𝗕",$ok);
$ok = str_replace("c","𝗖",$ok);
$ok = str_replace("d","𝗗",$ok);
$ok = str_replace("e","𝗘",$ok);
$ok = str_replace("E","𝗙",$ok);
$ok = str_replace("g","𝗚",$ok);
$ok = str_replace("h","𝗛",$ok);
$ok = str_replace("i","𝗜",$ok);
$ok = str_replace("j","𝗝",$ok);
$ok = str_replace("k","𝗞",$ok);
$ok = str_replace("l","𝗟",$ok);
$ok = str_replace("m","𝗠",$ok);
$ok = str_replace("n","𝗡",$ok);
$ok = str_replace("o","𝗢",$ok);
$ok = str_replace("p","𝗣",$ok);
$ok = str_replace("q","𝗤",$ok);
$ok = str_replace("r","𝗥",$ok);
$ok = str_replace("s","𝗦",$ok);
$ok = str_replace("t","𝗧",$ok);
$ok = str_replace("u","𝗨",$ok);
$ok = str_replace("v","𝗩",$ok);
$ok = str_replace("w","𝗪",$ok);
$ok = str_replace("x","𝗫",$ok);
$ok = str_replace("y","𝗬",$ok);
$ok = str_replace("z","𝗭",$ok);
$ok = str_replace('ض','ضـ',$ok); 
$ok = str_replace('ض','ضــً',$ok); 
$ok = str_replace('ص','صـــ͒͜ـً',$ok); 
$ok = str_replace('ث','ثــہ',$ok); 
$ok = str_replace('ق','ق',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــ۫͜ـ',$ok); 
$ok = str_replace('ع','عــُ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰཻــ',$ok); 
$ok = str_replace('س','ســ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','لـ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـٰཻــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظً',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﻭ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$h = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐚',$text);
$ok = str_replace("b","𝐛",$ok);
$ok = str_replace("c","𝐜",$ok);
$ok = str_replace("d","𝐝",$ok);
$ok = str_replace("e","𝐞",$ok);
$ok = str_replace("E","𝐟",$ok);
$ok = str_replace("g","𝐠",$ok);
$ok = str_replace("h","𝐡",$ok);
$ok = str_replace("i","𝐢",$ok);
$ok = str_replace("j","𝐣",$ok);
$ok = str_replace("k","𝐤",$ok);
$ok = str_replace("l","𝐥",$ok);
$ok = str_replace("m","𝐦",$ok);
$ok = str_replace("n","𝐧",$ok);
$ok = str_replace("o","𝐨",$ok);
$ok = str_replace("p","𝐩",$ok);
$ok = str_replace("q","𝐪",$ok);
$ok = str_replace("r","𝐫",$ok);
$ok = str_replace("s","𝐬",$ok);
$ok = str_replace("t","𝐭",$ok);
$ok = str_replace("u","𝐮",$ok);
$ok = str_replace("v","𝐯",$ok);
$ok = str_replace("w","𝐰",$ok);
$ok = str_replace("x","𝐱",$ok);
$ok = str_replace("y","𝐲",$ok);
$ok = str_replace("z","𝐳",$ok);
$ok = str_replace('ض','ضــٰـُ͢ـًُ',$ok); 
$ok = str_replace('ص','صـ͒͜ـً',$ok); 
$ok = str_replace('ث','ثـَٰـَٰـ',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ــ͒͜ـً',$ok); 
$ok = str_replace('ف','فــ͡ـ',$ok); 
$ok = str_replace('غ','غــ̷ِْــٰ',$ok); 
$ok = str_replace('ع','عـ๋๋͜͜͡‏ـۂ',$ok); 
$ok = str_replace('هہ','ه',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰـُ͢ـُٰཻـ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ٰٖۧـৡ๋͜ت','تـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظـَٰـًَٰ',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ࢪ',$ok); 
$ok = str_replace('و','وُ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $i = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝑎',$text);
$ok = str_replace("b","𝑏",$ok);
$ok = str_replace("c","𝑐",$ok);
$ok = str_replace("d","𝑑",$ok);
$ok = str_replace("e","𝑒",$ok);
$ok = str_replace("E","𝑓",$ok);
$ok = str_replace("g","𝑔",$ok);
$ok = str_replace("h","ℎ",$ok);
$ok = str_replace("i","𝑖",$ok);
$ok = str_replace("j","𝑗",$ok);
$ok = str_replace("k","𝑘",$ok);
$ok = str_replace("l","𝑙",$ok);
$ok = str_replace("m","𝑚",$ok);
$ok = str_replace("n","𝑛",$ok);
$ok = str_replace("o","𝑜",$ok);
$ok = str_replace("p","𝑝",$ok);
$ok = str_replace("q","𝑞",$ok);
$ok = str_replace("r","𝑟",$ok);
$ok = str_replace("s","𝑠",$ok);
$ok = str_replace("t","𝑡",$ok);
$ok = str_replace("u","𝑢",$ok);
$ok = str_replace("v","𝑣",$ok);
$ok = str_replace("w","𝑤",$ok);
$ok = str_replace("x","𝑥",$ok);
$ok = str_replace("y","𝑦",$ok);
$ok = str_replace("z","𝑧",$ok);
$ok = str_replace('ض','ض',$ok); 
$ok = str_replace('ص','صـٰـَہ',$ok); 
$ok = str_replace('ق','قـٰـَہ',$ok); 
$ok = str_replace('ف','فـٰـَہ',$ok); 
$ok = str_replace('غ','غ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰـَہ',$ok); 
$ok = str_replace('ح','حـٰـَہ',$ok); 
$ok = str_replace('ج','ج',$ok); 
$ok = str_replace('ش','شـٰـَہ',$ok); 
$ok = str_replace('س','سـٰـَہ',$ok); 
$ok = str_replace('ي','يـٰـَہ',$ok); 
$ok = str_replace('ب','بـٰـَہ',$ok); 
$ok = str_replace('ل','لـٰـَہ',$ok); 
$ok = str_replace('ا','ا',$ok); 
$ok = str_replace('ت','تـٰـَہ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـٰـَہ',$ok); 
$ok = str_replace('ك','كـٰـَہ',$ok); 
$ok = str_replace('ظ','ظ',$ok); 
$ok = str_replace('ط','ط',$ok); 
$ok = str_replace('ذ','ذ',$ok); 
$ok = str_replace('د','د',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('͟໑໑','و',$ok); 
$ok = str_replace('ث',' ث',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ء','ء',$ok); 
$j = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᥲ️',$text);
$ok = str_replace("b","Ⴆ",$ok);
$ok = str_replace("c","ᥴ",$ok);
$ok = str_replace("d","ძ",$ok);
$ok = str_replace("e","ᥱ",$ok);
$ok = str_replace("E","ƒ",$ok);
$ok = str_replace("g","ᧁ",$ok);
$ok = str_replace("h","Ꮒ",$ok);
$ok = str_replace("i","Ꭵ",$ok);
$ok = str_replace("j","᧒",$ok);
$ok = str_replace("k","𝚔",$ok);
$ok = str_replace("l","ᥣ",$ok);
$ok = str_replace("m","꧑",$ok);
$ok = str_replace("n","ꪀ",$ok);
$ok = str_replace("o","᥆",$ok);
$ok = str_replace("p","ρ",$ok);
$ok = str_replace("q","ǫ",$ok);
$ok = str_replace("r","ℛ",$ok);
$ok = str_replace("s","᥉",$ok);
$ok = str_replace("t","ƚ",$ok);
$ok = str_replace("u","ᥙ",$ok);
$ok = str_replace("v","᥎",$ok);
$ok = str_replace("w","ꪝ",$ok);
$ok = str_replace("x","᥊",$ok);
$ok = str_replace("y","ꪗ",$ok);
$ok = str_replace("z","ᤁ",$ok);
$ok = str_replace('ض','ضــٰཻــ ',$ok); 
$ok = str_replace('ص','صــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ف','فـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('غ','غـٰཻـــًـًًٍـًٍـًًٍ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','ههہ',$ok); 
$ok = str_replace('خ','خــ ',$ok); 
$ok = str_replace('ح','حٰཻ͚͆ـــــ͒͜ــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شــ͒͜ـًﮧ̯͡ــ̷ــــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــًـًًًًٍٍـًٍـًًٍـــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــٰٰٰ๋ٖٖٖۧ͜ــ۫͜ــــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('تٰཻ͚͆','تـَٰﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','م',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ཻ͟و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$k = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','ᴬ',$text);
$ok = str_replace("b","ᴮ",$ok);
$ok = str_replace("c","ᶜ",$ok);
$ok = str_replace("d","ᴰ",$ok);
$ok = str_replace("e","ᴱ",$ok);
$ok = str_replace("f","ᶠ",$ok);
$ok = str_replace("g","ᴳ",$ok);
$ok = str_replace("h","ᴴ",$ok);
$ok = str_replace("i","ᴵ",$ok);
$ok = str_replace("j","ᴶ",$ok);
$ok = str_replace("k","ᴷ",$ok);
$ok = str_replace("l","ᴸ",$ok);
$ok = str_replace("m","ᴹ",$ok);
$ok = str_replace("n","ᴺ",$ok);
$ok = str_replace("o","ᴼ",$ok);
$ok = str_replace("p","ᴾ",$ok);
$ok = str_replace("q","ᵟ",$ok);
$ok = str_replace("r","ᴿ",$ok);
$ok = str_replace("s","ˢ",$ok);
$ok = str_replace("t","ᵀ",$ok);
$ok = str_replace("u","ᵁ",$ok);
$ok = str_replace("v","ᵛ",$ok);
$ok = str_replace("w","ᵂ",$ok);
$ok = str_replace("x","ˣ",$ok);
$ok = str_replace("y","ᵞ",$ok);
$ok = str_replace("z","ᶻ",$ok);
$l = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗮',$text);
$ok = str_replace("b","𝗯",$ok);
$ok = str_replace("c","𝗰",$ok);
$ok = str_replace("d","𝗱",$ok);
$ok = str_replace("e","𝗲",$ok);
$ok = str_replace("f","𝗳",$ok);
$ok = str_replace("g","𝗴",$ok);
$ok = str_replace("h","𝗵",$ok);
$ok = str_replace("i","𝗶",$ok);
$ok = str_replace("j","𝗴",$ok);
$ok = str_replace("k","𝗸",$ok);
$ok = str_replace("l","𝗹",$ok);
$ok = str_replace("m","𝗺",$ok);
$ok = str_replace("n","𝗻",$ok);
$ok = str_replace("o","𝗼",$ok);
$ok = str_replace("p","𝗽",$ok);
$ok = str_replace("q","𝗾",$ok);
$ok = str_replace("r","𝗿",$ok);
$ok = str_replace("s","𝘀",$ok);
$ok = str_replace("t","𝘁",$ok);
$ok = str_replace("u","𝘂",$ok);
$ok = str_replace("v","𝘃",$ok);
$ok = str_replace("w","𝘄",$ok);
$ok = str_replace("x","𝘅",$ok);
$ok = str_replace("y","𝘆",$ok);
$ok = str_replace("z","𝘇",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$m = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝕬',$text);
$ok = str_replace("b","𝕭",$ok);
$ok = str_replace("c","𝕮",$ok);
$ok = str_replace("d","𝕯",$ok);
$ok = str_replace("e","𝕰",$ok);
$ok = str_replace("E","𝕱",$ok);
$ok = str_replace("g","𝕲",$ok);
$ok = str_replace("h","𝕳",$ok);
$ok = str_replace("i","𝕴",$ok);
$ok = str_replace("j","𝕵",$ok);
$ok = str_replace("k","𝕶",$ok);
$ok = str_replace("l","𝕷",$ok);
$ok = str_replace("m","𝕸",$ok);
$ok = str_replace("n","𝕹",$ok);
$ok = str_replace("o","𝕺",$ok);
$ok = str_replace("p","𝕻",$ok);
$ok = str_replace("q","𝕼",$ok);
$ok = str_replace("r","𝕽",$ok);
$ok = str_replace("s","𝕾",$ok);
$ok = str_replace("t","𝕿",$ok);
$ok = str_replace("u","𝖀",$ok);
$ok = str_replace("v","𝖁",$ok);
$ok = str_replace("w","𝖂",$ok);
$ok = str_replace("x","𝖃",$ok);
$ok = str_replace("y","𝖄",$ok);
$ok = str_replace("z","𝖅",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$n = $ok.''.$smile;
 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ａ', $text);
$ok = str_replace('b', 'Ｂ', $ok);
$ok = str_replace('c', 'Ｃ', $ok);
$ok = str_replace('d', 'Ｄ', $ok);
$ok = str_replace('e', 'Ｅ', $ok);
$ok = str_replace('f', 'Ｆ', $ok);
$ok = str_replace('g', 'Ｇ', $ok);
$ok = str_replace('h', 'Ｈ', $ok);
$ok = str_replace('i', 'Ｉ', $ok);
$ok = str_replace('j', 'Ｊ', $ok);
$ok = str_replace('k', 'Ｋ', $ok);
$ok = str_replace('l', 'Ｌ', $ok);
$ok = str_replace('m', 'Ｍ', $ok);
$ok = str_replace('n', 'Ｎ', $ok);
$ok = str_replace('o', 'Ｏ', $ok);
$ok = str_replace('p', 'Ｐ', $ok);
$ok = str_replace('q', 'Ｑ', $ok);
$ok = str_replace('r', 'Ｒ', $ok);
$ok = str_replace('s', 'Ｓ', $ok);
$ok = str_replace('t', 'Ｔ', $ok);
$ok = str_replace('u', 'Ｕ', $ok);
$ok = str_replace('v', 'Ｖ', $ok);
$ok = str_replace('w', 'Ｗ', $ok);
$ok = str_replace('x', 'Ｘ', $ok);
$ok = str_replace('y', 'Ｙ', $ok);
$ok = str_replace('z', 'Ｚ', $ok);
$ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $o = ''.''.$ok.''.$smile.'';

 $items = ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ȃ̈', $text);
$ok = str_replace('b', 'B̑̈', $ok);
$ok = str_replace('c', 'C̑̈', $ok);
$ok = str_replace('d', 'D̑̈', $ok);
$ok = str_replace('e', 'Ȇ̈', $ok);
$ok = str_replace('f', 'F̑̈', $ok);
$ok = str_replace('g', 'G̑̈', $ok);
$ok = str_replace('h', 'H̑̈', $ok);
$ok = str_replace('i', 'Ȋ̈', $ok);
$ok = str_replace('j', 'J̑̈', $ok);
$ok = str_replace('k', 'K̑̈', $ok);
$ok = str_replace('l', 'L̑̈', $ok);
$ok = str_replace('m', 'M̑̈', $ok);
$ok = str_replace('n', 'N̑̈', $ok);
$ok = str_replace('o', 'Ȏ̈', $ok);
$ok = str_replace('p', 'P̑̈', $ok);
$ok = str_replace('q', 'Q̑̈', $ok);
$ok = str_replace('r', 'Ȓ̈', $ok);
$ok = str_replace('s', 'S̑̈', $ok);
$ok = str_replace('t', 'T̑̈', $ok);
$ok = str_replace('u', 'Ȗ̈', $ok);
$ok = str_replace('v', 'V̑̈', $ok);
$ok = str_replace('w', 'W̑̈', $ok);
$ok = str_replace('x', 'X̑̈', $ok);
$ok = str_replace('y', 'Y̑̈', $ok);
$ok = str_replace('z', 'Z̑̈‌‌', $ok);
$ok = str_replace('ض', 'ضِٰـۛৣـ', $ok);
$ok = str_replace('ص', 'صِٰـۛৣـ', $ok);
$ok = str_replace('ث', 'ثِٰـۛৣـ', $ok);
$ok = str_replace('ق', 'قِٰـۛৣـ', $ok);
$ok = str_replace('ف', 'فِٰ͒ـۛৣـ', $ok);
$ok = str_replace('غ', 'غِٰـۛৣـ', $ok);
$ok = str_replace('ع', 'عِٰـۛৣـ', $ok);
$ok = str_replace('خ', 'خِٰ̐ـۛৣـ', $ok);
$ok = str_replace('ح', 'حِٰـۛৣـ', $ok);
$ok = str_replace('ج', 'جِٰـۛৣـ', $ok);
$ok = str_replace('ش', 'شِٰـۛৣـ', $ok);
$ok = str_replace('س', 'سِٰـۛৣـ', $ok);
$ok = str_replace('ي', 'يِٰـۛৣـ', $ok);
$ok = str_replace('ب', 'بِٰـۛৣـ', $ok);
$ok = str_replace('ل', 'لِٰـۛৣـ', $ok);
$ok = str_replace('ا', 'آ', $ok);
$ok = str_replace('ت', 'تِٰـۛৣـ', $ok);
$ok = str_replace('ن', 'نِٰـۛৣـ', $ok);
$ok = str_replace('م', 'مِٰـۛৣـ', $ok);
$ok = str_replace('ك', 'ڪِٰـۛৣـ', $ok);
$ok = str_replace('ط', 'طِٰـۛৣـ', $ok);
$ok = str_replace('ظ', 'ظِٰـۛৣـ', $ok);
$ok = str_replace('ء', 'ء', $ok);
$ok = str_replace('ؤ', 'ؤ', $ok);
$ok = str_replace('ر', 'ر', $ok);
$ok = str_replace('ى', 'ى', $ok);
$ok = str_replace('ز', 'ز', $ok);
$ok = str_replace('و', 'ﯛ̲୭', $ok);
$ok = str_replace("ه", "໋۠هہؚ", $ok);
$p = $ok.''.$smile;
$items =  ['🇮🇶','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝔸',$text);
$ok = str_replace("b","𝔹",$ok);
$ok = str_replace("c","ℂ",$ok);
$ok = str_replace("d","𝔻",$ok);
$ok = str_replace("e","𝔼",$ok);
$ok = str_replace("E","𝔽",$ok);
$ok = str_replace("g","𝔾",$ok);
$ok = str_replace("h","ℍ",$ok);
$ok = str_replace("i","𝕀",$ok);
$ok = str_replace("j","𝕁",$ok);
$ok = str_replace("k","𝕂",$ok);
$ok = str_replace("l","𝕃",$ok);
$ok = str_replace("m","𝕄",$ok);
$ok = str_replace("n","ℕ",$ok);
$ok = str_replace("o","𝕆",$ok);
$ok = str_replace("p","ℙ",$ok);
$ok = str_replace("q","ℚ",$ok);
$ok = str_replace("r","ℝ",$ok);
$ok = str_replace("s","𝕊",$ok);
$ok = str_replace("t","𝕋",$ok);
$ok = str_replace("u","𝕌",$ok);
$ok = str_replace("v","𝕍",$ok);
$ok = str_replace("w","𝕎",$ok);
$ok = str_replace("x","𝕏",$ok);
$ok = str_replace("y","Ý",$ok);
$ok = str_replace("z","ℤ",$ok);
$ok = str_replace('ض', 'ضّـ', $ok);
$ok = str_replace('ص', 'صْـ', $ok);
$ok = str_replace('ق', 'قّـ', $ok);
$ok = str_replace('ف', 'فّـ', $ok);
$ok = str_replace('غ', 'ﻏ̣̐', $ok);
$ok = str_replace('ع', 'ﻋ̝̚', $ok);
$ok = str_replace('ه', 'ﮪ', $ok);
$ok = str_replace('خ', 'خـّ', $ok);
$ok = str_replace('ح', 'حّـ', $ok);
$ok = str_replace('ج', 'جّـ', $ok);
$ok = str_replace('ش', 'ﺷ͠', $ok);
$ok = str_replace('س', 'ﺳ̶', $ok);
$ok = str_replace('ي', 'ې', $ok);
$ok = str_replace('ب', 'بّ', $ok);
$ok = str_replace('ل', 'ﻟ̣̣', $ok);
$ok = str_replace('ا', 'ﺂ̣̥̐', $ok);
$ok = str_replace('ت', 'تٌ', $ok);
$ok = str_replace('ن', 'نّ', $ok);
$ok = str_replace('م', 'ﻣ̝', $ok);
$ok = str_replace('ك', 'ﮗ', $ok);
$ok = str_replace('ظ', 'ظَّ', $ok);
$ok = str_replace('ط', 'طِّ', $ok);
$ok = str_replace('ذ', 'ذِ', $ok);
$ok = str_replace('د', 'دّ', $ok);
$ok = str_replace('ز', 'زّ', $ok);
$ok = str_replace('و', 'وٌ', $ok);
$ok = str_replace('ة', 'ة', $ok);
$ok = str_replace('ث', 'ثّـ', $ok);
$q = $ok.''.$smile;
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>"🍓 𝒘𝒆𝒍𝒍𝒄𝒐𝒎𝒆 ๛ $name 🌰",
'disable_web_page_preview'=>'true',
'parse_mode'=>'html',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"$a","callback_data"=>"m1"],["text"=>"$b","callback_data"=>"m2"]],
[["text"=>"$c","callback_data"=>"m3"],["text"=>"$d","callback_data"=>"m4"]],
[["text"=>"$e","callback_data"=>"m5"],["text"=>"$f","callback_data"=>"m6"]],
[["text"=>"$g","callback_data"=>"m7"],["text"=>"$h","callback_data"=>"m8"]],
[["text"=>"$i","callback_data"=>"m9"],["text"=>"$j","callback_data"=>"m10"]],
[["text"=>"$k","callback_data"=>"m11"],["text"=>"$l","callback_data"=>"m12"]],
[["text"=>"$m","callback_data"=>"m13"],["text"=>"$n","callback_data"=>"m14"]],
[["text"=>"$o","callback_data"=>"m15"],["text"=>"$p","callback_data"=>"m16"]],
[["text"=>"$q","callback_data"=>"m17"],["text"=>"$r","callback_data"=>"m18"]],
[["text"=>"$s","callback_data"=>"m19"],["text"=>"$t","callback_data"=>"m20"]],
[['text'=>'𝐜𝐥𝐞𝐜𝐤 𝐭𝐨 𝐠𝐞𝐭 𝐢𝐭 🔝','callback_data'=>"000"]],
[['text'=>' 𝒃𝒊𝒐 🔜','callback_data'=>"M"],['text'=>'𝐚𝐠𝐢𝐧 ♻️','callback_data'=>"ii"]],
]
])
]);
file_put_contents("t.txt",$a);
file_put_contents("t1.txt",$b);
file_put_contents("t2.txt",$c);
file_put_contents("t3.txt",$d);
file_put_contents("t4.txt",$e);
file_put_contents("t5.txt",$f);
file_put_contents("t6.txt",$g);
file_put_contents("t7.txt",$h);
file_put_contents("t8.txt",$i);
file_put_contents("t9.txt",$j);
file_put_contents("t10.txt",$k);
file_put_contents("t11.txt",$l);
file_put_contents("t12.txt",$m);
file_put_contents("t13.txt",$n);
file_put_contents("t14.txt",$o);
file_put_contents("t15.txt",$p);
file_put_contents("t16.txt",$q);
file_put_contents("t17.txt",$r);
file_put_contents("t18.txt",$s);
file_put_contents("t19.txt",$t);
}
$arrmmoof = file_get_contents("t.txt");
if($data == "m1"){
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*$arrmmoof*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m2"){
$arrmmoof1 = file_get_contents("t1.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof1*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m3"){
$arrmmoof2 = file_get_contents("t2.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof2*", 
]);
}
if($data == "m4"){
$arrmmoof3 = file_get_contents("t3.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof3*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m5"){
$arrmmoof4 = file_get_contents("t4.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof4*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m6"){
$arrmmoof5 = file_get_contents("t5.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof5*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m7"){
$arrmmoof6 = file_get_contents("t6.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof6*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m8"){
$arrmmoof7 = file_get_contents("t7.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof7*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m9"){
$arrmmoof8 = file_get_contents("t8.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof8*",
'parse_mode'=>'Markdown',
]);
}
if($data == "m10"){
$arrmmoof9 = file_get_contents("t9.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof9*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m11"){
$arrmmoof10 = file_get_contents("t10.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof10*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m12"){
$arrmmoof11 = file_get_contents("t11.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof11*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m13"){
$arrmmoof12 = file_get_contents("t12.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof12*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m14"){
$arrmmoof13 = file_get_contents("t13.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof13*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m15"){
$arrmmoof14 = file_get_contents("t14.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof14*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m16"){
$arrmmoof15 = file_get_contents("t15.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof15*", 
'parse_mode'=>'Markdown',
]);
}


if($data == "m17"){
$arrmmoof16 = file_get_contents("t16.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof16*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m18"){
$arrmmoof17 = file_get_contents("t17.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof17*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m19"){
$arrmmoof18 = file_get_contents("t18.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof18*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m20"){
$arrmmoof19 = file_get_contents("t19.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof19*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m20"){
$arrmmoof20 = file_get_contents("t20.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof20*", 
'parse_mode'=>'Markdown',
]);
}

$ArrrMoF = file_get_contents("ArrrMoF.txt");
if($data == "M" ){
file_put_contents("ArrrMoF.txt","ArrrMoF");
bot('EditMessageText',[
'chat_id'=>$f_ppp2,
'message_id'=>$php_aba_id2,
'text'=>"*
ارسل المعلومات بهذه الصيغه لطفا 
 : الاسم armof
 : البلد  iraq
 : العمر  22
 : العمل  student
 : الهوايه  php*",
'parse_mode'=>"MarkDown",
]);   
}
if($text != "/start" and $ArrrMoF == "ArrrMoF"){
file_put_contents("ArrrMoF.txt","none");
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>'*انتظر لطفا🦋💞*',
'parse_mode'=>"MarkDown",
]);
$a = ($text);
$b = explode("\n",$a);
$d = array(
"
-🖤𓂇| 𝙉𝙖𝙈𝙚 : $b[0]
-🖤𓂇| 𝙁𝙧𝙊𝙢 : $b[1]
-🖤𓂇| 𝘼𝙜𝙀 : $b[2]
-🖤𓂇| 𝙒𝙤𝙍𝙠 : $b[3]
-🖤𓂇|  𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
𓋇: 𝙉𝙖𝙈𝙚 : $b[0]
𓋇: 𝙁𝙧𝙊𝙢 : $b[1]
𓋇: 𝘼𝙜𝙀 : $b[2]
𓋇: 𝙒𝙤𝙍𝙠 : $b[3]
𓋇: 𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
⌔︙𝙉𝙖𝙈𝙚 : $b[0]
⌔︙𝙁𝙧𝙊𝙢 : $b[1]
⌔︙𝘼𝙜𝙀 : $b[2]
⌔︙𝙒𝙤𝙍𝙠 : $b[3]
⌔︙𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
𝑁𝐴𝑀𝐸 : $b[0]
𝐶𝑂𝐔𝑁𝑇𝑅𝑌 : $b[1]
𝐴𝐺𝐸 : $b[2]
𝑊𝑂𝑅𝐾 : $b[3]
𝐻𝑂𝑃𝑌 : $b[4]
_____________࿖
","
𝓷𝓪𝓶𝓮 : $b[0]
𝓬𝓸𝓾𝓷𝓽𝓻𝔂 : $b[1]
𝓪𝓰𝓮 : $b[2]
𝔀𝓸𝓻𝓴 : $b[3]
𝓱𝓸𝓹𝔂 : $b[4]
_____________
","
ɴᴀᴍᴇ : $b[0]
ᴄᴏᴜɴᴛʀʏ : $b[1]
ᴀɢᴇ : $b[2]
ᴡᴏʀᴋ : $b[3]
ʜᴏᴘʏ : $b[4]
_____________🇮🇶
","
*𝙽𝙰𝙼𝙴 : $b[0]
𝙲𝙾𝚄𝙽𝚃𝚁𝚈 : $b[1]
𝙰𝙶𝙴 : $b[2]
𝚆𝙾𝚁𝙺 : $b[3]
𝙷𝙾𝙿𝚈 : $b[4]
_____________𖠖*
","
𝙉𝘼𝙈𝙀 : $b[0]
𝘾𝙊𝙐𝙉𝙏𝙍𝙔 : $b[1]
𝘼𝙂𝙀 : $b[2]
𝙒𝙊𝙍𝙆 : $b[3]
𝙃𝙊𝙋𝙔 : $b[4]
_____________ッ
","
ᴺᴬᴹᴱ : $b[0]
ᶜᴼᵁᴺᵀᴿᵞ : $b[1]
ᴬᴳᴱ : $b[2]
ᵂᴼᴿᴷ : $b[3]
ᴴᴼᴾᵞ : $b[4]
_____________𖤛
","
𝗻𝗮𝗺𝗲 : $b[0]
𝗰𝗼𝘂𝗻𝘁𝗿𝘆 : $b[1]
𝗮𝗴𝗲 : $b[2]
𝘄𝗼𝗿𝗸 : $b[3]
𝗵𝗼𝗽𝘆 : $b[4]
_____________𖤹
","
𝕹𝕬𝕸𝕰 : $b[0]
𝕮𝕺𝖀𝕹𝕿𝕽𝖄 : $b[1]
𝕬𝕲𝕰 : $b[2]
𝖂𝕺𝕽𝕶 : $b[3]
𝕳𝕺𝕻𝖄 : $b[4]
_____________𖠐
","
ＮＡＭＥ : $b[0]
ＣＯＵＮＴＲＹ : $b[1]
ＡＧＥ : $b[2]
ＷＯＲＫ : $b[3]
ＨＯＰＹ : $b[4]
_____________𖤢
","
ℕ𝔸𝕄𝔼 : $b[0]
ℂ𝕆𝕌ℕ𝕋ℝÝ : $b[1]
𝔸𝔾𝔼 : $b[2]
𝕎𝕆ℝ𝕂 : $b[3]
ℍ𝕆ℙÝ : $b[4]
_____________ ༖
",
);
$e = array_rand($d,1);
bot('sendMessage',[
'chat_id'=>$f_ppp,
'text'=>"*$d[$e]* ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ بايو مجددا','callback_data'=>"M"]],
[['text'=>'➤ زخرفه مجددا','callback_data'=>"ii"]],
]])
]);
}
 ####@php_aba###
 ###@armof###