<?php
function build_mail_body($post, $template)
{
  $content = file_get_contents('templates/' . $template);
  foreach ($post as $k => $v) {
    $content = str_replace('{' . $k . '}', $v, $content);
  }

  return $content;
}
function secret_captcha()
{
  return '6LcEAPUaAAAAALMUYVefGa3dqiaEx1pmWA8r7wSt';
}
function verifyCaptcha($secret_key, $token, $ip)
{
  $url = "https://www.google.com/recaptcha/api/siteverify";
  $data = [
    'secret' => $secret_key,
    'response' => $token,
    'remoteip' => $ip,
  ];

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );

  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);

  $res = json_decode($response, true);
  return $res['success'];
}
