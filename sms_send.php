<?php
echo "hello";
$number = $_POST['mob'];
$message = "https://telimatique.000webhostapp.com/check_email.html";
$fields = array(
"sender_id" => "FSTSMS",
"message" => "$message",
"language" => "english",
"route" => "p",
"numbers" => "$number",
"flash" => "0"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: tdl6uha8NZVzRK5IFwLQ4HTfyDqYo3JEPg97CXsMG1Bpj0keOngkRK7wmHx8aGEWsLFS14MIT3QeOvzJ",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $message;
}
?>

