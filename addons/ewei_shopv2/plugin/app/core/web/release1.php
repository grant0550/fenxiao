<?php
if (!defined('IN_IA')) {
	exit('Access Denied');
}

class Release_EweiShopV2Page extends PluginWebPage
{
	private $key = 'asdf734JH3464tr56GJ';

	public function main()
	{
		global $_W;
		$error = NULL;
		

		include $this->template();
	}

	
}

?>
