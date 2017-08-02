<?php
    class Uploads
    {
        public static function single_upload($input = 'img', $path = './uploads/')
        {
            $CI =& get_instance();
            $config = array(
                'upload_path'       => $path,
                'max_size'          => 1024 * 100,
                'allowed_types'     => 'gif|jpeg|jpg|png|svg',
                'overwrite'         => true,
                'remove_spaces'     => true,
                'encrypt_name'      => true
            );

            $CI->load->library('upload', $config);
            if ( ! $CI->upload->do_upload($input))
            {
                $error = array('error' => $CI->upload->display_errors());
                return $error;
            }
            else
            {
                $pic = array('data' => $CI->upload->data());
               
                Uploads::resize_image($pic,'thumb', $path);
                Uploads::resize_image($pic,'medium', $path);
                Uploads::resize_image($pic,'large', $path);      
                return $pic;
            }
        }

        public static function resize_image($pic, $type, $path = './uploads/')
        {
            $CI =& get_instance();
            $CI->load->library('image_lib');

            $size   = $CI->config->item('cdn_'.$type);
            $config['image_library']    = 'gd2';
            $config['source_image']     = $pic['data']['full_path'];
            $config['new_image']        = $pic['data']['file_path'].$type.'_'.$pic['data']['file_name'];
            $config['maintain_ratio']   = $size['crop'];
            $config['width']            = $size['width'];
            $config['height']           = $size['height'];
            $config['overwrite']        = TRUE;
           
            $CI->image_lib->clear();
            $CI->image_lib->initialize($config);
            $CI->image_lib->resize();
        }
    }
?>