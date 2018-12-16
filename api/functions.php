<?php

/* FUNCTIONS FOR FILTERING JSON */

	function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };

    function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };

    function between ($this, $that, $inthat)
    {
        return before ($that, after($this, $inthat));
    };

/* JSON FUNCTION */
// https://itunes.apple.com/br/app/bradesco/id336954985?mt=8
// https://itunes.apple.com/br/rss/customerreviews/id=336954985/sortBy=mostRecent/page=3/json

	function getjson( $appid,$page) {
		if(!file_get_contents('https://itunes.apple.com/br/rss/customerreviews/page='.$page.'/id=' . $appid . '/sortby=mostrecent/json')) {

			echo "<script>alert('Unable to get json_data')</script>";
			die("");
		} else {

			$json_data = file_get_contents('https://itunes.apple.com/br/rss/customerreviews/page='.$page.'/id=' . $appid . '/sortby=mostrecent/json');
			return $json_data;
		}
	}

	?>
