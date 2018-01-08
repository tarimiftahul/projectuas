<?php
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("paw") or die (mysql_error());


class test extends PHPUnit_Framework_TestCase{
	function testalamat(){
		$sql = mysql_query("SELECT * FROM tb_user where username ='TariJannah'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['alamat'];
		$content = $test_user;
		$this->assertEquals('bekasi',$content);
	}
	
	function testUsername(){
		$sql = mysql_query("SELECT * FROM tb_user where alamat ='bekasi'");
		$user = mysql_fetch_array($sql);
		$test_user = $user['username'];
		$content = $test_user;
		$this->assertEquals('TariJannah',$content);
	}
}
?>