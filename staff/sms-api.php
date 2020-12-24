<?php
function sendSms($phone, $jp){
          $url = "http://portal.bulksmsnigeria.net/api/?username=odehemmanuel5@gmail.com&password=okubemmanuel&message=". urlencode($jp)."&sender=LMS&mobiles=$phone";

          $ch = curl_init();
          $optArray = array(
                  CURLOPT_URL => $url,
                  CURLOPT_RETURNTRANSFER => true
          );
          curl_setopt_array($ch, $optArray);
          $result = curl_exec($ch);
          curl_close($ch);
}
?>
