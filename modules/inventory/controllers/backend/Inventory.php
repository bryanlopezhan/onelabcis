<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Inventory Controller
*| --------------------------------------------------------------------------
*| Inventory site
*|
*/
class Inventory extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_inventory');
		$this->load->model('group/model_group');
		$this->lang->load('web_lang', $this->current_lang);
	}

	/**
	* show all Inventorys
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('inventory_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['inventorys'] = $this->model_inventory->get($filter, $field, $this->limit_page, $offset);
		$this->data['inventory_counts'] = $this->model_inventory->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/inventory/index/',
			'total_rows'   => $this->data['inventory_counts'],
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Inventory List');
		$this->render('backend/standart/administrator/inventory/inventory_list', $this->data);
	}
	
	/**
	* Add new inventorys
	*
	*/
	public function add()
	{
		$this->is_allowed('inventory_add');

		$this->template->title('Inventory New');
		$this->render('backend/standart/administrator/inventory/inventory_add', $this->data);
	}

	/**
	* Add New Inventorys
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('inventory_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		

		$this->form_validation->set_rules('name_of_pure_chemical', 'Name Of Pure Chemical', 'trim|required');
		

		$this->form_validation->set_rules('chemical_formula', 'Chemical Formula', 'trim|required');
		

		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		

		$this->form_validation->set_rules('registered_by', 'Registered By', 'trim|required');
		

		$this->form_validation->set_rules('state_of_chemical', 'State Of Chemical', 'trim|required');
		

		$this->form_validation->set_rules('chemical_color_group', 'Chemical Color Group', 'trim|required');
		

		$this->form_validation->set_rules('cas_no', 'Cas No', 'trim|required');
		

		$this->form_validation->set_rules('brand', 'Brand', 'trim|required');
		

		$this->form_validation->set_rules('lot_no', 'Lot No', 'trim|required');
		

		$this->form_validation->set_rules('container', 'Container', 'trim|required');
		

		$this->form_validation->set_rules('storage_condition', 'Storage Condition', 'trim|required');
		

		$this->form_validation->set_rules('original_amount', 'Original Amount', 'trim|required');
		

		$this->form_validation->set_rules('estimated_current_mount', 'Estimated Current Mount', 'trim|required');
		

		$this->form_validation->set_rules('date_of_receipt', 'Date Of Receipt', 'trim|required');
		

		$this->form_validation->set_rules('received_by', 'Received By', 'trim|required');
		

		$this->form_validation->set_rules('date_of_expiration', 'Date Of Expiration', 'trim|required');
		

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'name_of_pure_chemical' => $this->input->post('name_of_pure_chemical'),
				'chemical_formula' => $this->input->post('chemical_formula'),
				'location' => $this->input->post('location'),
				'date_registered' => date('Y-m-d H:i:s'),
				'registered_by' => $this->input->post('registered_by'),
				'state_of_chemical' => $this->input->post('state_of_chemical'),
				'chemical_color_group' => $this->input->post('chemical_color_group'),
				'cas_no' => $this->input->post('cas_no'),
				'brand' => $this->input->post('brand'),
				'lot_no' => $this->input->post('lot_no'),
				'container' => $this->input->post('container'),
				'storage_condition' => $this->input->post('storage_condition'),
				'original_amount' => $this->input->post('original_amount'),
				'estimated_current_mount' => $this->input->post('estimated_current_mount'),
				'date_of_receipt' => $this->input->post('date_of_receipt'),
				'received_by' => $this->input->post('received_by'),
				'date_of_expiration' => $this->input->post('date_of_expiration'),
			];

			
			
//$save_data['_example'] = $this->input->post('_example');
			



			
			
			$save_inventory = $id = $this->model_inventory->store($save_data);
            

			if ($save_inventory) {
				
				$id = $save_inventory;
				
				
					
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_inventory;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/inventory/edit/' . $save_inventory, 'Edit Inventory'),
						anchor('administrator/inventory', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/inventory/edit/' . $save_inventory, 'Edit Inventory')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/inventory');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/inventory');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
		/**
	* Update view Inventorys
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('inventory_update');

		$this->data['inventory'] = $this->model_inventory->find($id);

		$this->template->title('Inventory Update');
		$this->render('backend/standart/administrator/inventory/inventory_update', $this->data);
	}

	/**
	* Update Inventorys
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('inventory_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
				$this->form_validation->set_rules('name_of_pure_chemical', 'Name Of Pure Chemical', 'trim|required');
		

		$this->form_validation->set_rules('chemical_formula', 'Chemical Formula', 'trim|required');
		

		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		

		$this->form_validation->set_rules('registered_by', 'Registered By', 'trim|required');
		

		$this->form_validation->set_rules('state_of_chemical', 'State Of Chemical', 'trim|required');
		

		$this->form_validation->set_rules('chemical_color_group', 'Chemical Color Group', 'trim|required');
		

		$this->form_validation->set_rules('cas_no', 'Cas No', 'trim|required');
		

		$this->form_validation->set_rules('brand', 'Brand', 'trim|required');
		

		$this->form_validation->set_rules('lot_no', 'Lot No', 'trim|required');
		

		$this->form_validation->set_rules('container', 'Container', 'trim|required');
		

		$this->form_validation->set_rules('storage_condition', 'Storage Condition', 'trim|required');
		

		$this->form_validation->set_rules('original_amount', 'Original Amount', 'trim|required');
		

		$this->form_validation->set_rules('estimated_current_mount', 'Estimated Current Mount', 'trim|required');
		

		$this->form_validation->set_rules('date_of_receipt', 'Date Of Receipt', 'trim|required');
		

		$this->form_validation->set_rules('received_by', 'Received By', 'trim|required');
		

		$this->form_validation->set_rules('date_of_expiration', 'Date Of Expiration', 'trim|required');
		

		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'name_of_pure_chemical' => $this->input->post('name_of_pure_chemical'),
				'chemical_formula' => $this->input->post('chemical_formula'),
				'location' => $this->input->post('location'),
				'date_registered' => date('Y-m-d H:i:s'),
				'registered_by' => $this->input->post('registered_by'),
				'state_of_chemical' => $this->input->post('state_of_chemical'),
				'chemical_color_group' => $this->input->post('chemical_color_group'),
				'cas_no' => $this->input->post('cas_no'),
				'brand' => $this->input->post('brand'),
				'lot_no' => $this->input->post('lot_no'),
				'container' => $this->input->post('container'),
				'storage_condition' => $this->input->post('storage_condition'),
				'original_amount' => $this->input->post('original_amount'),
				'estimated_current_mount' => $this->input->post('estimated_current_mount'),
				'date_of_receipt' => $this->input->post('date_of_receipt'),
				'received_by' => $this->input->post('received_by'),
				'date_of_expiration' => $this->input->post('date_of_expiration'),
			];

			

			
//$save_data['_example'] = $this->input->post('_example');
			


			
			
			$save_inventory = $this->model_inventory->change($id, $save_data);

			if ($save_inventory) {

				
				

				
				
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/inventory', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/inventory');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/inventory');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = 'Opss validation failed';
			$this->data['errors'] = $this->form_validation->error_array();
		}

		$this->response($this->data);
	}
	
	/**
	* delete Inventorys
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('inventory_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'inventory'), 'success');
        } else {
            set_message(cclang('error_delete', 'inventory'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Inventorys
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('inventory_view');

		$this->data['inventory'] = $this->model_inventory->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Inventory Detail');
		$this->render('backend/standart/administrator/inventory/inventory_view', $this->data);
	}
	
	/**
	* delete Inventorys
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$inventory = $this->model_inventory->find($id);

		
		
		return $this->model_inventory->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('inventory_export');

		$this->model_inventory->export(
			'inventory', 
			'inventory',
			$this->model_inventory->field_search
		);
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('inventory_export');

		$this->model_inventory->pdf('inventory', 'inventory');
	}


	public function single_pdf($id = null)
	{
		$this->is_allowed('inventory_export');

		$table = $title = 'inventory';
		$this->load->library('HtmlPdf');
      
        $config = array(
            'orientation' => 'p',
            'format' => 'a4',
            'marges' => array(5, 5, 5, 5)
        );

        $this->pdf = new HtmlPdf($config);
        $this->pdf->setDefaultFont('stsongstdlight'); 

        $result = $this->db->get($table);
       
        $data = $this->model_inventory->find($id);
        $fields = $result->list_fields();

        $content = $this->pdf->loadHtmlPdf('core_template/pdf/pdf_single', [
            'data' => $data,
            'fields' => $fields,
            'title' => $title
        ], TRUE);

        $this->pdf->initialize($config);
        $this->pdf->pdf->SetDisplayMode('fullpage');
        $this->pdf->writeHTML($content);
        $this->pdf->Output($table.'.pdf', 'H');
	}

	
}


/* End of file inventory.php */
/* Location: ./application/controllers/administrator/Inventory.php */