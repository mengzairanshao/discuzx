<?php
/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_home_userapp_plying.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class table_home_userapp_plying extends discuz_table {
	public function __construct() {

		$this->_table = 'home_userapp_plying';
		$this->_pk    = 'uid';

		parent::__construct();
	}
}

?>