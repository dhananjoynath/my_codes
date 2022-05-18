<?php
	
 ?>

<?php 
function timeAgo($date){
 
 $now_timestamp = strtotime(date('Y-m-d H:i:s'));
 $diff_timestamp = $now_timestamp - strtotime($date);
 
 if($diff_timestamp<60){
  return 'few secs ago';
 }
 else if($diff_timestamp>=60 && $diff_timestamp<3600){
  return round($diff_timestamp/60).' mins ago';
 }
 else if($diff_timestamp>=3600 && $diff_timestamp<86400){
  return round($diff_timestamp/3600).' hrs ago';
 }
 else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
  return round($diff_timestamp/(86400)).' days ago';
 }
 else if($diff_timestamp>=(86400*30) && $diff_timestamp<(86400*365)){
  return round($diff_timestamp/(86400*30)).' mons ago';
 }
 else{
 
 return round($diff_timestamp/(86400*365)).' yrs ago';
 }
}

?>




<?php

function browserName(){
$agent = strtolower($_SERVER["HTTP_USER_AGENT"]);
$agent=strtolower($agent);

if( preg_match('/msie(\d+\.\d+);/', $agent) || preg_match('/ie(\d+\.\d+);/', $agent)) { $browser_name="Internet Explore";
return $browser_name;
} 

else if (preg_match('/chrome[\/\s](\d+\.\d+)/', $agent)  &&  preg_match('/safari[\/\s](\d+\.\d+)/', $agent)    && !preg_match('/opr[\/\s](\d+\.\d+)/', $agent)  && !preg_match('/edga[\/\s](\d+\.\d+)/', $agent)  && !preg_match('/samsungbrowser[\/\s](\d+\.\d+)/', $agent)  ) {
  
  $browser_name="Chrome";
  return $browser_name;
} 
else if (preg_match('/chrome[\/\s](\d+\.\d+)/', $agent)  &&  preg_match('/safari[\/\s](\d+\.\d+)/', $agent)    && preg_match('/edga[\/\s](\d+\.\d+)/', $agent)  ) {

  $browser_name="Edge";
  return $browser_name;
} 

else if( preg_match('/firefox[\/\s](\d+\.\d+)/', $agent) ) {
  $browser_name="Firefox";
  return $browser_name;
} 

else if ( preg_match('/opr[\/\s](\d+\.\d+)/', $agent) ) {
   $browser_name="Opera";
  return $browser_name;
} 


else if ( preg_match('/samsungbrowser[\/\s](\d+\.\d+)/', $agent) ) {
   $browser_name="Samsung";
  return $browser_name;
} 


else{$browser_name="Unknown browser"; }
return $browser_name;

}

?>


<?PHP

function my_ip(){

        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    
    
    
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
         $ip='127.0.0.1';
    }

   
   

    return $ip;
    
    
    
}


?>


<?php
	
	
	


 ?>
 
 
 <?php
//$ip='2409:4066:e99:8c10::f509:2601';  

function my_ip_details($ip) {

 $api_encoded_data=@file_get_contents("http://ip-api.com/json/".$ip);
return $decode=json_decode($api_encoded_data);
}

?>





<?php


$message=urlencode('Hi this is your login link:-  ');
$message.='https://djbhai.site/localhost?otlid=';

function send_otp($message,$to,$otp) {

$api="213082944:AAGzDHQUqO7v8oFHwvdUMUfuA4NNsubA7YA";	
	$google_api='KfycbzWWdmnLb2f5uXKat4_8f3y3sCwrJ7MpIbTGxyzw75XP3akt2m5i6mPJeOOvelm3du7TQ';

 @file_get_contents('https://script.google.com/macros/s/'.$google_api.'/exec?Api='.$api.'&text='.$message.''.$otp.'&Chatid='.$to);

}

?>





<?php

function send_Mail($recipient,$subject,$body) {
$body=urlencode($body);
$subject=urlencode($subject);

$mail_api='AKfycbyrsMR4GgBemRAfyz2cdqnSHjQ_t9hQQX5KqYnrBWZa7Dgai8vw0wu-HAowdzLN8f2a';
$s_name=urlencode('Techno Pencil');
$replay_To='phpdjbhai@gmail.com';
 $link='https://script.google.com/macros/s/'.$mail_api.'/exec?subject='.$subject.'&recipient='.$recipient.'&body='.$body.'&Sname='.$s_name.'&Remail='.$replay_To;

@file_get_contents($link);

}


?>


 <?php

define("F", "F");

 
   function numb2word($number, $text,$u1,$u2){
   //function start
   $text=strtolower($text);
  
   
   if(isset($number)) {
   // ------ start of isset number ------
   
   $number_set='true';
   
   
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   
   $str = array();
   $words = array(
   '0' => 'zero', 
   '1' => 'one', 
   '2' => 'two',
    '3' => 'three', 
    '4' => 'four', 
    '5' => 'five', 
    '6' => 'six',
    '7' => 'seven', 
    '8' => 'eight', 
    '9' => 'nine',
    '10' => 'ten', 
    '11' => 'eleven',
     '12' => 'twelve',
    '13' => 'thirteen', 
    '14' => 'fourteen',
    '15' => 'fifteen',
     '16' => 'sixteen', 
     '17' => 'seventeen',
    '18' => 'eighteen', 
    '19' =>'nineteen',
     '20' => 'twenty',
    '30' => 'thirty', 
    '40' => 'forty',
     '50' => 'fifty',
    '60' => 'sixty',
     '70' => 'seventy',
    '80' => 'eighty', 
    '90' => 'ninety' );
    
    
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
 
  
  $str = array_reverse($str);
  
  $result = implode('', $str);
  $points= ($point) ?
    "  " . $words[$point / 10] . "  " . 
          $words[$point = $point % 10] : '';
          
        
    }
           // ---- end of isset number ---
  
      
      
       if($number_set=='true')  {
       
     
 if($number ==0){$balance_in_word= strtoupper("zero ");} 
 else{
    if (empty($points)) {$balance_in_word= ucfirst($result) . "rupees  ";}
          else{$balance_in_word= ucfirst($result) . "rupees " .strtoupper($points) . " paise ";}
 }
 
 
 
 
     
 if($number ==0){$custom_in_word= strtoupper($u1);} 
 else{
    if (empty($points)) {$custom_in_word= ucfirst($result) . "".$u1;}
          else{$custom_in_word= ucfirst($result) . "".$u1."" .ucfirst($points) . "".$u2;}
 }
 
 
 
 if($number ==0){$number_in_word= strtoupper("zero ");} 
 else{
 
    if (empty($points)) {$number_in_word= ucfirst($result); }
          else{$number_in_word= ucfirst($result) . "points " .ucfirst($points);}
 }
 
  
  

 }else{ 
           $number_not_set_msg='Sorry ! number not set.';
          $number_in_word=$number_not_set_msg;
          $balance_in_word=$number_not_set_msg;
          $custom_in_word=$number_not_set_msg;
 
   }
 
          if($text=='balance') {
         return $balance_in_word;  }
         
         
         elseif($text=='word') {
         return $number_in_word;  }
         
       elseif($text=='custom') {
         return $custom_in_word;  }
       
         
         
         }
         //function end
 ?> 
