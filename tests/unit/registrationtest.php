<?php
require_once 'db.php';
require_once 'registration.php';
require_once 'login.php';


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$I->submitForm('#update_form', array('user' => array(
     'name' => 'Miles',
     'email_id' => 'Davis',
     'Username' => 'dadi.p.srinivas',
     'password'=> 'kumarharsha23',
     'confirm_password'=>'kumarharsha23',
     'companyname'=>'niituniversity',
     'phonenumber'=>'9672329029'
)), 'submit');
// this would have the same effect, but the value has to be explicitly specified
$I->submitForm('#update_form', array('user' => array(
      'name' => 'Miles',
     'email_id' => 'Davis',
     'Username' => 'dadi.p.srinivas',
     'password'=> 'kumarharsha23',
     'confirm_password'=>'kumarharsha23',
     'companyname'=>'niituniversity',
     'phonenumber'=>'9672329029',
     'submit' => 'Update'
)));
?>
