<?php
echo "Skey =";
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
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="81nqp9UiSaZppkr8EjoU11AkTwxAFzaE6E/DTahT7rLbWKFwiuixMy47Q/xMmE7AC4CpMde7rcHhY3I2vG7xFjENTw0arGeceHmOpFsu5ajf+c00nv64LvLJ8LCJgIh4ckM3X3UmicT9LvdfmYxPfgUGw6HSBiygB1So2qeLQDY="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="iBP6LfXitBP8FOYq+cJqGPgYiMXv5nIH8SNZRXm55rbKkXBZb8I5Orgrnm7rQka16Co2THwJh4JDQO/VcqYLh9UGq2K17tI+eBy6XqqezUe9F0Vn6qUNyW++cCq3H1H2HA1ZjptIDzxqzwTixDWIFmFDNXfYjT69JHoMxn/x5Sk="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="XivJekHRye3zIgXLF09fkGJFvknUXwvtJn/xezbktpwPDjJREWBbG42pN6DUziwp1f9GIue2N1Cr/vOkePZzndrOhvWfUL2yC3jCAyhP4B9EE/r2DzSJvLpPNc7Bn4Y/uLA//3qQOtKfbqFmvrf9j3yG2WCrjFBHnBVSbCtdYCM="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="9vGo+PkZFp1PhCGWEyihkzCj7Lm0I0CfGR0R+ZLNu5Fs+wZNHZRFQIcCC+aAXbwP9hJlN3R+CXEPG8gqNZWQQn2dMGhfPMrygJ+tnUGfMftWpZi9713Tv3UeLSsX9Oh7hqKFD74w6tUXEjnnVdNv0iXXcrG32p3UCz1Oh9Wz/uk="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="ymQPU9ryUipOmCYQZfe9vw5N7RODE6hMP6wcytancP9gPANzt8+PnVjLi1Z4axnaNwE6csBhEJ86+iJ9afsLlWzHCRe5g2LKkkBrFnYIXOhmGKyVOufIrLzB5naX+quR1lgD8HsM8q04i6d/L5yxzQnn/ZLifPlisCP3toa+XJw="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="/AmV4T2c32vQMFSaXQUGvtj7/h6S6mdNhgDTKjAU9u1KdE17cdNKuad2L1nI/ka1bW/arV1rTLrQaE1NUn6e8F0GJv469BjJfzv3j5hiKtaynVWzV/ABheEIfnUgPiSoEZGqL9snEfFBXRLFzjdQYX2RNLrE5m4gjTnQvWLPmi8="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="3dTooKA8iGrmrkBpS26iL0INjiXu7Y0Hd8OSWr+tSvTzgpwLCScXoTxTuZodOPB/Nhq7IDuw83rm9FwpG3SNJ+24rKmnsL4uhBskzQrtg9jMzRJ+xNuM5iCTlKpvQo0U7XLCWGZQAwoNW0oHKDNEfvLeTUIQvGD5CDabijh2ykA="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="czcqR5aWSmTHLuA4DgR5sWv4N0No1kkvUN1vnDf988i7+kkLTCLddao2mMM2QEC44qXBHER60UD41HUSruUQBzKWqOnySyVBqan71QRuWh7sWoyRm3dMzze12Yb58/ccX4WP+r3KRZAhRyxFLCAXh7HjR7C6JDCDx/hpOpnyH10="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="fvOanqdAJFV5wlmazlHbtaeLpZLt03wQoWfJbGnka0tOfJXOlngbxxE+2KmGXAnV8jjvFGTd42u5hTzYFOTBki8QSyCiKD996Yl3ups9xZudici1Cq3yGaPKQHFnx9xwktpWYr/QUwSc/hbBuByr7YFxEfvh5FETL6zdKc+0SC8="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="zX0/t2kqwzqeYtmVPQpxAq9xH+lWh6m7ZWZLCcGuvs8Go18oMfczBw3xJmIploE7u7MTasMUHDdHw+3vR6f6+aPOYMEX+avlvob+0wLyf0A1SRLkc8F2ieG83psBmTEJAcZ7e7R0gBxgR8Icb94ipKkh8yNxLMpUnDVZyG3kZds="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="MBFphrQnEPPKJY3oePzKWhWbjyk2zcXHD2Mdu9dkHv2lmN8sUkTU2vrIj/e8UNg1Kg8xQug/HXQKeAxYefAhJPKtb9OCnyDE5aLpSHikaaCcOWMrPtmAhjzzPywTo5qY3qJc/nQW4cRHCZRcfpmZ3LE4YZUyfg+Ldr0XQSJC8zY="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="EFxhHnSEakQerNOkCVensI9SxRZ/No+NyhOAv1xBkKptrfRh+zSlyOIxIzH/UhgzvyZrG/SeQ9MVxsip1tmqIkDr1lf5qoDLcoZuw2OPyBMjHdth0yeEZBLqPCfaMLsDwGMskbbL6dUTSwQCQjTiaMdPQS3A15e19vOokniVS6M="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="OdDCQxNZM2Rv4Yoh/b5iTnVE5dzqcTMPobYDNuWGVvKSMEx/SOBg3sPXjS5F/d/l9L8LT0vcVpUXKtMuohDJZRNT70fjbrxQmiKozRWnvv22OrSqq4monb6TQt69/VeCodHu/IghvITZ8bm8X6PjzechMFqW9iTZlU5ZVP5aiBo="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="c+Z4NfqGW4ejYTNO5BrNhPxWt+ySvQ06yiD26IpWrWfwu4wK11er7j112YjSiD4AHK5A8qaCSl6M8cvSPuF00y4PD6noNu3aK+YXPd49ht7qnJzJAAShUyF9ify2v8nqcthYlZK1xivpe3zxi2F2jl9LXu5sFBgQCqmKWe15O4U="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="M/7DE2VUa699YzMYFadmH6snm22oK4kABFlRQx7uETGqq6qD7rMWlVL6tIGTGZRniQLmkTIRt6FXSCFDjlXRBDC6eptY3ybML2AvvZWOUPEXKG2jS+H+gT6LETIUIgk3qCSiLk2ex4dtwVjJwl6xFWHJT7VB6lGjhbcuMFBqTsw="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="yh5g1V5M3jYyz5ozYX8Qoma1YB31c29IcvohE22wIbN0Hk5APHO7j8aUYV+85e3khXyBdODw4F1GZqvMjvBcnkbBbt/XB00uYm8qraDOHRv2TuxWNYmrZtUrm1cBfLdkp0bUR7F1r7AOIsMTBggUyIQsbTK6i9hWtd5cf7NBi/o="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="675DQit8vu+Vr1ukJHmk9v3hIm8YM8rDaUOSmiPF8n2k24F1xNJFhnozEgoF0q8J73n3uwLLNXdYhgZf8q6+WEl+hGZfginIJiyZO/iFvmbtjBHbh78NhZKuZ3wMVNL9X4nq45xU81WUIAeAx6DqzJRD9i4SepjOl9ZtIanB4W8="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="qXcdHc9ODhE00pU9RDX4Dpdhi3Z9nRMubYwOzKIIqfZuXQTDRHW0UWj7naZy8OXBqhE60NMkp7ay1mj5EMSZ4bYsqCv4tKQdst/oMXGJCVmJ7M7oZBf+XtZk3tmr6dYTLGhSEkKSrL81FdxHZg+1YtwIPixS45N9C3JG0S2+FaU="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="Zz07zgV8TqQGuS4jA7kzuJnNog1ii8TZx6giXoSg+ax5uaGthSrdbo/R50G+XQepmI5MC2H7aK2bQe6dAIlV5XoNiJ7997mp7d9XyXWwlcNmfuLFoPGi2GIEQ9zk8Qf1ayYT9o/KITika2GKgFrKhzZWb0n5I5RVefsCEK/+XYg="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="KvyVrCVV+Y0k8GHHLT5f/2hUJRYeG/aA0515Yz45ce/fAyVL392XQntnhE7PoXXbteow5FA3QUXsq+4kX/oXpkPsTpO+xKZYpl8KSc/3hex9UMpr18Jx9AX1lYXUzbcq+9aRt8PCAq6qUAEvwdrthP3DJNRFewYtMujMHUPY3aM="');

$data = '{"friendId":'.$friendID.',"cropId":'.$crop.',"deviceId":"","friendName":"","channel":""}';
$body = curl('https://games.shopee.co.id/farm/api/friend/help', $data, $headers);
$ket = json_decode($body[0]);
$hasil = $ket->msg;
echo "".$hasil."\n";
sleep(2);
$headers = array('content-type: application/json;charset=UTF-8','cookie: SPC_EC="Tig/Ijx3oWpG71/t4dvhw+8fOYDgmnYHf7GC7Jjho2huYztOpJ2asrNDDLesSe5OO/54Xq6LV9OGLiY6ybE8tELoJyVAUi9gv1WJcNriG75P3hNp0nBNoPW54zy7lkKueLsSOBwpGxBdJrGLRG2KPKXs+dCbvWRt6uRTIPYDxhY="');

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
  