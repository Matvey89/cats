<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://bsn.by/register_enter.php"); /* Переходим на страницу, на которой нужно пройти процедуру авторизации */
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "name=global&pass=2244"); /* Внимание! Здесь необходимо передать параметры, полученные Вами от сниффера – параметры разделяются знаком & */
curl_setopt($ch, CURLOPT_COOKIEJAR,$_SERVER['DOCUMENT_ROOT'].'/cookiefile.txt');
$result = curl_exec($ch);
curl_setopt($ch, CURLOPT_URL, "http://bsn.by/register_success.php"); /* Теперь заходите на сайт как авторизованный пользователь – в данном случае нужно вместо example.com указать URL страницы, на которую может попасть только авторизованный пользователь */
curl_setopt($ch, CURLOPT_POST, 0); /* Также необязательное действие, но я указал этот параметр – устанавливаю CURLOPT_POST в нуль, ведь теперь мне не нужно передавать данные методом POST */
curl_setopt($ch, CURLOPT_COOKIEFILE, $_SERVER['DOCUMENT_ROOT'].'/cookiefile.txt'); /* Внимание! Здесь третий параметр (адрес текстового файла с куками) должен быть точно таким же, как и при использовании CURLOPT_COOKIEJAR, иначе процедура авторизации работать не будет, так как требуемые серверу Куки не передадутся */
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>