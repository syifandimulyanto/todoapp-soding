<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->table 		= 'task';
		$this->layout_path 	= 'layout/app/index';
		$this->load_view	= 'app/task/';
		$this->uri 			= 'task';
		$this->path 		= './uploads/todo/';
		$this->notification = array(
									'type' 		=> ($this->session->flashdata('__notif_type__') ? $this->session->flashdata('__notif_type__') : '' ),
									'message'	=> ($this->session->flashdata('__notif_message__') ? $this->session->flashdata('__notif_message__') : '' )
									);

		$this->load->model('Globalmodel', 'modeldb');
		$this->load->helper('uploads');
	}

	public function index() 
	{	
		$page = array('title' => 'Todo', 'sub_title' => 'Listing');
		$data = array();
		$data['page']					= $page;
		$data['parent_navigation']  	= 'task';
		$data['navigation'] 			= 'task';
		$data['sub_navigation']			= 'index';
		$data['create_url']				= app_url( $this->uri . '/create');
		$data['uri']					= $this->uri;
		$data['notification'] 			= $this->notification;
		$data['task_status']			= $this->config->item('task_status');
		$data['get_data_active']		= $this->modeldb->get_list_array( $this->table, array('status' => intval(1), 'flag' => intval(1)) );
		$data['get_data_active_cnt']	= $this->modeldb->count( $this->table, array('status' => intval(1), 'flag' => intval(1)) );
		$data['get_data_pending']		= $this->modeldb->get_list_array( $this->table, array('status' => intval(0), 'flag' => intval(1)) );
		$data['get_data_pending_cnt']	= $this->modeldb->count( $this->table, array('status' => intval(0), 'flag' => intval(1)) );
		$data['get_data_trash']			= $this->modeldb->get_list_array( $this->table, array('flag' => intval(0)) );
		$data['get_data_trash_cnt']		= $this->modeldb->count( $this->table, array('flag' => intval(0)) );

		$this->template->load( $this->layout_path, $this->load_view.'listing/index',  $data, '' );
	}

	public function create()
	{
	    $this->form_validation->set_rules('title', 'Title cant empty', 'required');
	    $this->form_validation->set_rules('start_at', 'Start at cant empty', 'required');
	    $this->form_validation->set_rules('end_at', 'End at cant empty', 'required');
	    if ($this->form_validation->run() == TRUE)
      	{
      		$param =  $this->input->post();

      		if($_FILES['image']['size'] > 0)
      		{
      			$upload   	= Uploads::single_upload($input = 'image', $this->path);
      			if(!empty($upload['data']['file_name']))
      			{	
      				$param['image']  		= $upload['data']['file_name'];
      			}
      		}

      		$param['start_at']			= strtotime($param['start_at']);
      		$param['end_at']			= strtotime($param['end_at']);
	        $param['status']			= intval(1);
	        $param['flag']				= intval(1);
            $param['create_at'] 		= time();
        	$this->modeldb->insert($this->table, $param);

        	$this->session->set_flashdata('__notif_type__', 'success');
	    	$this->session->set_flashdata('__notif_message__', 'Success create data');
	    	redirect(app_url( $this->uri ));
      	}
      	else
      	{	
      		if( !empty(validation_errors()) )
      		{
      			$this->session->set_flashdata('__notif_type__', 'error');
      			$this->session->set_flashdata('__notif_message__', validation_errors());
      		}

			$page = array('title' => 'Todo', 'sub_title' => 'Entry');
      		$data = array();
      		$data['parent_navigation']  = 'task';
			$data['navigation'] 		= 'task';
			$data['sub_navigation']		= 'create';
			$data['notification'] 		= $this->notification;
			$data['page']				= $page;
			$data['uri']				= $this->uri;
			$this->template->load( $this->layout_path, $this->load_view.'form/index', $data);
      	}
	}

	public function update($ID = FALSE)
	{
		$where 			= array('id' => $ID);
        $get_data   	= $this->modeldb->get_list_array($this->table, $where);
        $get_data_cnt  	= $this->modeldb->count($this->table, $where);

		if($ID && $get_data_cnt > 0)
		{
		    $this->form_validation->set_rules('title', 'Title cant empty', 'required');
		    $this->form_validation->set_rules('start_at', 'Start at cant empty', 'required');
	    	$this->form_validation->set_rules('end_at', 'End at cant empty', 'required');
		    if ($this->form_validation->run() == TRUE)
	      	{	
	            $param = $this->input->post();

	            if($_FILES['image']['size'] > 0)
	      		{
	      			$upload   	= Uploads::single_upload($input = 'image', $this->path);
	      			if(!empty($upload['data']['file_name']))
	      			{	
	      				$param['image']  		= $upload['data']['file_name'];
	      			}
	      		}

	            $param['start_at']	= strtotime($param['start_at']);
      			$param['end_at']	= strtotime($param['end_at']);
		        $param['status'] 	= ($param['status'] == 'on') ? intval(1) : intval(0);
            	$param['update_at'] = time();
            	$this->modeldb->update($this->table, $param, $where);

            	$this->session->set_flashdata('__notif_type__', 'success');
		    	$this->session->set_flashdata('__notif_message__', 'Success update data');
		    	redirect(app_url( $uri ));
	      	}
	      	else
	      	{	
	      		if( !empty(validation_errors()) )
	      		{
	      			$this->session->set_flashdata('__notif_type__', 'error');
	      			$this->session->set_flashdata('__notif_message__', validation_errors());
	      		}

				$page = array('title' => 'Todo', 'sub_title' => 'Update');
	      		$data = array();
	      		$data['parent_navigation']  = 'task';
				$data['navigation'] 		= 'task';
				$data['sub_navigation']		= 'create';
				$data['notification'] 		= $this->notification;
				$data['page']				= $page;
				$data['get_data']			= $get_data[0];
				$data['uri']				= $this->uri;
				$data['path']				= $this->path;
				$this->template->load( $this->layout_path, $this->load_view.'form/index', $data);
	      	}
	    }
	    else
	    {
	    	$this->session->set_flashdata('__notif_type__', 'error');
	    	$this->session->set_flashdata('__notif_message__', 'Not found data');
	    	redirect(app_url( $uri ));
	    }
	}

	public function delete($ID = FALSE)
	{
		$where 			= array('id' => $ID);
        $get_data_cnt  	= $this->modeldb->count($this->table, $where);

		if($ID && $get_data_cnt > 0)
		{
			$param['status']	= intval(0);
			$param['flag']		= intval(0);
            $param['update_at'] = time();	
        	
        	$this->modeldb->update($this->table, $param, $where);
        	$this->session->set_flashdata('__notif_type__', 'success');
	    	$this->session->set_flashdata('__notif_message__', 'Success delete data');
	    	redirect(app_url( $uri ));
	    }
	    else
	    {
	    	$this->session->set_flashdata('__notif_type__', 'error');
	    	$this->session->set_flashdata('__notif_message__', 'Not found data');
	    	redirect(app_url( $uri ));
	    }
	}

	public function cancel_delete($ID = FALSE)
	{
		$where 			= array('id' => $ID);
        $get_data_cnt  	= $this->modeldb->count($this->table, $where);

		if($ID && $get_data_cnt > 0)
		{
			$param['flag']		= intval(1);
            $param['update_at'] = time();	
        	
        	$this->modeldb->update($this->table, $param, $where);
        	$this->session->set_flashdata('__notif_type__', 'success');
	    	$this->session->set_flashdata('__notif_message__', 'Success delete data');
	    	redirect(app_url( $uri ));
	    }
	    else
	    {
	    	$this->session->set_flashdata('__notif_type__', 'error');
	    	$this->session->set_flashdata('__notif_message__', 'Not found data');
	    	redirect(app_url( $uri ));
	    }
	}

	public function delete_permanent($ID = FALSE)
	{
		$where 			= array('id' => $ID);
        $get_data_cnt  	= $this->modeldb->count($this->table, $where);

		if($ID && $get_data_cnt > 0)
		{
        	$this->modeldb->delete($this->table, $where);
        	$this->session->set_flashdata('__notif_type__', 'success');
	    	$this->session->set_flashdata('__notif_message__', 'Success delete data');
	    	redirect(app_url( $uri ));
	    }
	    else
	    {
	    	$this->session->set_flashdata('__notif_type__', 'error');
	    	$this->session->set_flashdata('__notif_message__', 'Not found data');
	    	redirect(app_url( $uri ));
	    }
	}

}
