<?php 
 class jumlahTest extends PHPUnit_Framework_TestCase
 {
    function jum()
    {
      $jumlah = 20;
      $target = 40;
      $persen = $jumlah/$target*100;
      $testJum = $persen;
      $this->assertEquals('50',$testJum);
        
    }
 }
?>