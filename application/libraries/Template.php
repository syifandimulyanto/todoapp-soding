<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Library Template function
 *
 * @author: Syifandi Mulyanto
 * @copyright:  syifandimulyanto.id @ 2016
 */
class Template {

    protected $_ci;
    var $template_data = array ();
   
    function __construct() 
    {
        $this->_ci = &get_instance();
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE, $js = FALSE, $css = FALSE) 
    {
        $this->CI = & get_instance ();
        $this->set ( 'contents', $this->CI->load->view ( $view, $view_data, TRUE ) );
        if($js) 
        {   
            $this->set ( 'addtional_js', $this->CI->load->view ($js, '', TRUE) );
        }
        if($css) 
        {
            $this->set ( 'addtional_css', $this->CI->load->view ($css, '', TRUE) );
        }

        return $this->CI->load->view ( $template, $this->template_data, $return );
    }


    function set($name, $value) 
    {
        $this->template_data [$name] = $value;
    }
}

?>
