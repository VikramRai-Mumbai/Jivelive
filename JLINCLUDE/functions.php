<?php
session_start();


//Normal User Logged
function UserLogged(){if(isset($_SESSION['User_ID'])){return true;}else {return false;}}
// Supper Admin Logged
function AdminLogged(){if(isset($_SESSION['Admin_ID'])){return true;}else{return false;}}
// Admin Logged 1  
function AdminLogged1(){if(isset($_SESSION['Admin_ID1'])){return true;}else{return false;}}
// Admin Logged 2
function AdminLogged2(){if(isset($_SESSION['Admin_ID2'])){return true;}else{return false;}}
// Admin Logged 3
function AdminLogged3(){if(isset($_SESSION['Admin_ID3'])){return true;}else{return false;}}
// Admin Logged 4
function AdminLogged4(){if(isset($_SESSION['Admin_ID4'])){return true;}else{return false;}}
// Admin Logged 5
function AdminLogged5(){if(isset($_SESSION['Admin_ID5'])){return true;}else{return false;}}
// Admin Logged 6
function AdminLogged6(){if(isset($_SESSION['Admin_ID6'])){return true;}else{return false;}}
// Admin Logged 7
function AdminLogged7(){if(isset($_SESSION['Admin_ID7'])){return true;}else{return false;}}
// Admin Logged 8
function AdminLogged8(){if(isset($_SESSION['Admin_ID8'])){return true;}else{return false;}}
// Admin Logged 9
function AdminLogged9(){if(isset($_SESSION['Admin_ID9'])){return true;}else{return false;}}
// Admin Logged 10
function AdminLogged10(){if(isset($_SESSION['Admin_ID10'])){return true;}else{return false;}}


// To change password
function Recover(){
if(isset($_SESSION['Recover']) && !empty($_SESSION['Recover'])){
        return true;
}   else {
            return false;
               }

}

function getUserIP(){$client  = @$_SERVER['HTTP_CLIENT_IP'];$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];$remote  = $_SERVER['REMOTE_ADDR'];if(filter_var($client, FILTER_VALIDATE_IP)){$ip = $client;}elseif(filter_var($forward, FILTER_VALIDATE_IP)){$ip = $forward;}else{$ip = $remote;}return $ip;}





?>