<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*
 *  /
 * 
 * 
 * 
 * 
 */
   require_once(login.php); 
   require_once(db.php);
 
 ?>
 
class WrapperTest extends PHPUnit_Framework_TestCase {
 
    function testDoesNotWrapAShorterThanMaxCharsWord() {
        $wrapper = new Wrapper();
        assertEquals('word', $wrapper->wrap('word', 5));
    }
 
}
 

