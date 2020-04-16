<?php
echo "Masukkan Skey =";
$sharekey = trim(fgets(STDIN));
$headers [] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';

$get = curl("https://games.shopee.co.id/farm/api/friend/share_info/get?shareKey=".$sharekey."", null, $headers);
$geid = explode("userId\":",$get[0]);
$eid = explode(",", $geid[1]);
$friendID = $eid[0];

$getcrop = curl("https://games.shopee.co.id/farm/api/friend/share_info/get?shareKey=".$sharekey."", null, $headers);
$gcropid = explode("crop\":{\"id\":",$getcrop[0]);
$cropid = explode(",", $gcropid[1]);
$crop = $cropid[0];
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="A9t5+VgXJwxaktyS4jWxxhEx3DqOLm9+wJ00TV6IzdSRh4W/1K0fqUBcLgr9Psn6tqe0DAFwuJF79YUdGqilzb9aN/7ziAV3uVF/1ddCpgeoUODIjXXiOhUoWDFF8PX2pBPMa2H+CnpjdMJBOT3ifrM33SVyf6ZkFsI/xpk7leg="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="ci37uvi9Mz7x/7Zwb+NGcwoPoknkV/gloEkGiqRSZyBQzZH63pFkjwY/l2gKEGJ8tCQTZBc9DXErLhunKlQmPWHHqjw8Vutu0IeFUKKdeJqLPT9vwsux4zzxI5+3Nhttqr8BLh7nAEIccKP3/aPkhcfYX5m/yf55Q1Pm92SuSws="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="Sv3Jp/GnR7/c6aKG1R49TSWJmb00cB1lLOvwVOr4Dj+asG4RfJUDsso0tUtCFcgDFb55VpPlsG884uBLD1aje27i6yCeVz7UQ3XnXkwlB6csiGNQ3fAL0acUvyUg8moRa7Zc40LbhSr2tJ9ZUvaYIJXOyRvDQC3UL9DuM2SsVsI="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="cAjor/t0fQ50Ilc3NNo+9yNg3im2RHC9l73h1UIei5o3ERBhG+SVY5hnPVurJkBLy8n78+NPQb4tFaxvpBHp3gOX6UIurmPrVOiCQsHbfUO+nlGztBVeKMdPVBfM/C0pR5p4/WSrTRTqE1aiZKzRk9gT4JnhPVOuvbHhhUjbDRY="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="ppPwl9eV7GMuxGpzzx3f96E2Ky/z6kvFPhTagvAQtgffC0oAbBpR9ILGpGC9zXXSMRN7XYNrudB0qGikPCAj9jUZjLod6oDVStGlL1U76pLKYFaLWBeUOJzH8DMJ/BcQdM3XU9y1b1H78/xqoHzlx8teD0Sr9Gn15rqm+FmKdpk="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="vKW34/BKK+BnTHDpOpwDQSu6urWyD3b8/KLm/FGxslfgCnoIoXbqgM1HR4PZ4v6tvkzJVTaYFFMOoXhgvw0as5rdXgRPJML28ijZZu0Q/esHI664aq0WcM4BU5QCT9NJYjGW5/V75Ap8VgyiM9DP8vnhitPB1lBT0OUsOlJ/oTY="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="nO/u6q00QrXUT/e4UN4hj5DjmSuk09HNbvKTiAAF2FAO4Po3IcvM4bpuXnjaSkN6tIcUsyuIEp3lYNSnLbZct30JDmph8dgwxDimEAgQ4sYP98tuo2GyCaJw31+BS1/5ceDn4ubGJdXCi7+yMe60wszH4r3NAPjYkKp67RxSfVI="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="bR8Q4YHue1fH5yzbGYEik6s5M5SEQC0eP74iqgO147IEa59O8JiEQDtpK95NPbwkQDyANM1dc9fkjF6Eu8JocxA5UJ37ofG9tueR77OYerO6vq8bNGiGcINvoUw3xwM1v7joUn6V/nWM0EWLIfk4lImUxZHEj8/xV3O++pdm96c="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="eS1ih5ehUVQBxvCUBQ6ST6qhoSE81QOkP1Vl4XVzqY43vAGBNwf4Ey9PTRCRfbOz/RvBYkwcu3wIpRyzg6ZPSDwaI/lb4wj3SdHBCOa/Usmls2A9hL80U9WXr4wSqXy2CzDwT5JXa99BQFOrziYfngWX8ThccuzEJKu/Fl8Sa2Q="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="owUIt35duRJ43Y66pNx0JInf8YwX89DrbVLMT8lreV2KCs2izMSH78SNUvokMX7P6Kb83TALjgJCVmlWrbCfDFcqCz3stIJ1gsM7aoSv5Vkma5UaMCQf4VRkw3lEfAzh9B7maFK2tj3nNUj4P0VWQ3vI0TFIvZJmXrfhoy0SW2o="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="GRniUu6A4pPMFrh8f1VBaavNwPq/LTfMADaop11B8j9erlUKvgBwQhCgAsv2PbhOTPNXre2WeZbHuUjQRl0WFzLd2ccuntzK3ATVTcTwq1YfTLpPcF9n8t1uR0nC3+wjeB1tNX5kY75UyKwtZQ0SEY7/XBj0tuwWrD0dQJkRCHU="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="iE8NuQOMqzznMDQsf5abNJ24pXHwW+elZEpLZfVWrJnJOeyanTF5q5OH/+gOH6Z4JyZkSuPVNkH1tS49ML8vQDTeKejnrgO/QxkbBfIgpd+4ixjXlcpgjQDm47ML3kU3a8eoc5v/pCFdWqMWMPvQHsUPWPpMz1LNEoG7sIlIEZ4="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="CDVzATsfGYat3FvrNRtpE7yD90IR3bGZmlWQyUyrjokkCLRQjFCcDpaARImMduv9TFooi4vE/Dy34HiJR4EhR3jffCy4B0/TXzg1w2FFl1SQoxlr01G6DOg1d0qiAc48SkuEh86f+TFAeYszjyo4pCLd4q2K5EJ2E0DJQJvwZVw="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="EXPR0yTwFyddl+yfj98kcS45/Y/89EXMOFHIIRQzxZOyuI1UetZbXw8sXDdZ1Yez3gbAVriHavCOFbp14xo9Vuxf0N4wTrp+qE4P9e971dY7rvOnmqlbher22SM2JHYFlz9WnlMdgrtgumE6VsFdlrxmymzLd+aNEKkZsYZtgfg="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="0mHDDYFtGzfF08YM98xPnY8FNNidsXNOUbEOMwdpulZTIYdvRCi2qShsrsj7++1z2PgyEAh3aoauzmXRA+wRlX1JXd1Yw2MOMLxqOOe9/YDCYQJiZQhUqkS1YCW+tDTT3CXudSfyQojHZm/s8LpMS3qasuKY4M6wUdPb42Fjrzs="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="2iaOKyInKR1HKom2JO2jcvY1WJg9IDeEgIzK1n7XVWjEL+k6/vnMAtT/rHK+PLz9DQXiJLksBCju2teUaTzBdquiwqMTNTNWWImmyCOgf97Z1LsrC6KTCEwRr9TTlaFfXbbv8N0JqhCqnB1FJlW4Q0PWeuM0teU8ksSZnQLD4iE="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="7hv7C9geZBpoktKXaXmzFl+9VO8oWyQUT5eTgF3h7mduJMAhwSJ+PgA5vQC+wY0tkhzYhwmxG8jVngNuwpk0InYvKz2QpF0r8AXmK6/0TI0IwQMxRV0vQbqZ0smlVDIULaxfOu1PNYWhxWqnV8TX7gzOTFU4n1SYYEb55PltfIk="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="1/DsY02hHCItVJC+5AcFSTfyS9v6TjtaMQsb5uApCrYG8shXZ/TsXgUaWqEzqrtPY6AHoUkVq3ChhSISC2rygsYZ9IXovURopO48aLu/U+8p09BC0sd/QznSHMp9pwzZCSRQXiT77fQxnDk9pBkvi9F8orAaFX/2ueIgK8C8YI4="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="ODmF+kyA/7vSOuEbji9EUI5XKIN2OXP8m2UaXgF/4zWUnaFcmkI7I7kFxjVH5yqrEf0uG6L5iqH2ca5GAwMcviM0VQm8Lzz4iUJiOuWzCuoo+sKHu0bRyhW317RVBgH7jBa0USein+wt/iuDmJKkJfeRu9B8erRF1R43Jspcm6A="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="WJ+roCkvouctMuy0ovRJ3X3U5/kcZIbnjCq/d7K9emmWYgfX773QoGy97tfn0mRUmLERjLjbLqojTx3D1A0I4iOGtgewki5GnCLMwQyDBlslh5kTEOVZtMlHYlyAO/7hrtCwsVS1SluFFN9K4eAuKjTrqWGiE5AgTHBg+OibYYE="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);



function curl($url, $fields = null, $headers = null) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  if ($fields !== null) {
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
  }
  if ($headers !== null) {
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  }
  $result = curl_exec($ch);
  $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  return array($result, $httpcode);
  }
  
