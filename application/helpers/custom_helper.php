<?php defined('BASEPATH') OR exit('No direct script access allowed');
    /**
    * Helpers Custom function
    *
    * @author: Syifandi Mulyanto
    * @copyright:  syifandimulyanto.id @ 2016
    */
    function asset($path = FALSE)
    {
        $CI = &get_instance();
        return $CI->config->item('asset_url'). $path;
    }

    function app_url($path = FALSE)
    {
        $CI = &get_instance();
        return $CI->config->item('app_url'). $path;
    }

?>