<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Inventory extends API
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_api_inventory');
	}

	/**
	 * @api {get} /inventory/all Get all inventorys.
	 * @apiVersion 0.1.0
	 * @apiName AllInventory 
	 * @apiGroup inventory
	 * @apiHeader {String} X-Api-Key Inventorys unique access-key.
	 * @apiHeader {String} X-Token Inventorys unique token.
	 * @apiPermission Inventory Cant be Accessed permission name : api_inventory_all
	 *
	 * @apiParam {String} [Filter=null] Optional filter of Inventorys.
	 * @apiParam {String} [Field="All Field"] Optional field of Inventorys : chemical_code, name_of_pure_chemical, chemical_formula, location, date_registered, registered_by, state_of_chemical, chemical_color_group, cas_no, brand, lot_no, container, storage_condition, original_amount, estimated_current_mount, date_of_receipt, received_by, date_of_expiration.
	 * @apiParam {String} [Start=0] Optional start index of Inventorys.
	 * @apiParam {String} [Limit=10] Optional limit data of Inventorys.
	 *
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 * @apiSuccess {Array} Data data of inventory.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError NoDataInventory Inventory data is nothing.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function all_get()
	{
		$this->is_allowed('api_inventory_all');

		$filter = $this->get('filter');
		$field = $this->get('field');
		$limit = $this->get('limit') ? $this->get('limit') : $this->limit_page;
		$start = $this->get('start');

		$select_field = ['chemical_code', 'name_of_pure_chemical', 'chemical_formula', 'location', 'date_registered', 'registered_by', 'state_of_chemical', 'chemical_color_group', 'cas_no', 'brand', 'lot_no', 'container', 'storage_condition', 'original_amount', 'estimated_current_mount', 'date_of_receipt', 'received_by', 'date_of_expiration'];
		$inventorys = $this->model_api_inventory->get($filter, $field, $limit, $start, $select_field);
		$total = $this->model_api_inventory->count_all($filter, $field);
		$inventorys = array_map(function($row){
						
			return $row;
		}, $inventorys);

		$data['inventory'] = $inventorys;
				
		$this->response([
			'status' 	=> true,
			'message' 	=> 'Data Inventory',
			'data'	 	=> $data,
			'total' 	=> $total,
		], API::HTTP_OK);
	}

		/**
	 * @api {get} /inventory/detail Detail Inventory.
	 * @apiVersion 0.1.0
	 * @apiName DetailInventory
	 * @apiGroup inventory
	 * @apiHeader {String} X-Api-Key Inventorys unique access-key.
	 * @apiHeader {String} X-Token Inventorys unique token.
	 * @apiPermission Inventory Cant be Accessed permission name : api_inventory_detail
	 *
	 * @apiParam {Integer} Id Mandatory id of Inventorys.
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 * @apiSuccess {Array} Data data of inventory.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError InventoryNotFound Inventory data is not found.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function detail_get()
	{
		$this->is_allowed('api_inventory_detail');

		$this->requiredInput(['chemical_code']);

		$id = $this->get('chemical_code');

		$select_field = ['chemical_code', 'name_of_pure_chemical', 'chemical_formula', 'location', 'date_registered', 'registered_by', 'state_of_chemical', 'chemical_color_group', 'cas_no', 'brand', 'lot_no', 'container', 'storage_condition', 'original_amount', 'estimated_current_mount', 'date_of_receipt', 'received_by', 'date_of_expiration'];
		$inventory = $this->model_api_inventory->find($id, $select_field);

		if (!$inventory) {
			$this->response([
					'status' 	=> false,
					'message' 	=> 'Blog not found'
				], API::HTTP_NOT_FOUND);
		}

					
		$data['inventory'] = $inventory;
		if ($data['inventory']) {
			
			$this->response([
				'status' 	=> true,
				'message' 	=> 'Detail Inventory',
				'data'	 	=> $data
			], API::HTTP_OK);
		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Inventory not found'
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}

	
	/**
	 * @api {post} /inventory/add Add Inventory.
	 * @apiVersion 0.1.0
	 * @apiName AddInventory
	 * @apiGroup inventory
	 * @apiHeader {String} X-Api-Key Inventorys unique access-key.
	 * @apiHeader {String} X-Token Inventorys unique token.
	 * @apiPermission Inventory Cant be Accessed permission name : api_inventory_add
	 *
 	 * @apiParam {String} Name_of_pure_chemical Mandatory name_of_pure_chemical of Inventorys.  
	 * @apiParam {String} Chemical_formula Mandatory chemical_formula of Inventorys.  
	 * @apiParam {String} Location Mandatory location of Inventorys.  
	 * @apiParam {String} Date_registered Mandatory date_registered of Inventorys.  
	 * @apiParam {String} Registered_by Mandatory registered_by of Inventorys.  
	 * @apiParam {String} State_of_chemical Mandatory state_of_chemical of Inventorys.  
	 * @apiParam {String} Chemical_color_group Mandatory chemical_color_group of Inventorys.  
	 * @apiParam {String} Cas_no Mandatory cas_no of Inventorys.  
	 * @apiParam {String} Brand Mandatory brand of Inventorys.  
	 * @apiParam {String} Lot_no Mandatory lot_no of Inventorys.  
	 * @apiParam {String} Container Mandatory container of Inventorys.  
	 * @apiParam {String} Storage_condition Mandatory storage_condition of Inventorys.  
	 * @apiParam {String} Original_amount Mandatory original_amount of Inventorys.  
	 * @apiParam {String} Estimated_current_mount Mandatory estimated_current_mount of Inventorys.  
	 * @apiParam {String} Date_of_receipt Mandatory date_of_receipt of Inventorys.  
	 * @apiParam {String} Received_by Mandatory received_by of Inventorys.  
	 * @apiParam {String} Date_of_expiration Mandatory date_of_expiration of Inventorys.  
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function add_post()
	{
		$this->is_allowed('api_inventory_add');

		$this->form_validation->set_rules('name_of_pure_chemical', 'Name Of Pure Chemical', 'trim|required');
		$this->form_validation->set_rules('chemical_formula', 'Chemical Formula', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('date_registered', 'Date Registered', 'trim|required');
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
				'date_registered' => $this->input->post('date_registered'),
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
			
			$save_inventory = $this->model_api_inventory->store($save_data);

			if ($save_inventory) {
				$this->response([
					'status' 	=> true,
					'message' 	=> 'Your data has been successfully stored into the database'
				], API::HTTP_OK);

			} else {
				$this->response([
					'status' 	=> false,
					'message' 	=> cclang('data_not_change')
				], API::HTTP_NOT_ACCEPTABLE);
			}

		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Validation Errors.',
				'errors' 	=> $this->form_validation->error_array()
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}

	/**
	 * @api {post} /inventory/update Update Inventory.
	 * @apiVersion 0.1.0
	 * @apiName UpdateInventory
	 * @apiGroup inventory
	 * @apiHeader {String} X-Api-Key Inventorys unique access-key.
	 * @apiHeader {String} X-Token Inventorys unique token.
	 * @apiPermission Inventory Cant be Accessed permission name : api_inventory_update
	 *
	 * @apiParam {String} Name_of_pure_chemical Mandatory name_of_pure_chemical of Inventorys.  
	 * @apiParam {String} Chemical_formula Mandatory chemical_formula of Inventorys.  
	 * @apiParam {String} Location Mandatory location of Inventorys.  
	 * @apiParam {String} Date_registered Mandatory date_registered of Inventorys.  
	 * @apiParam {String} Registered_by Mandatory registered_by of Inventorys.  
	 * @apiParam {String} State_of_chemical Mandatory state_of_chemical of Inventorys.  
	 * @apiParam {String} Chemical_color_group Mandatory chemical_color_group of Inventorys.  
	 * @apiParam {String} Cas_no Mandatory cas_no of Inventorys.  
	 * @apiParam {String} Brand Mandatory brand of Inventorys.  
	 * @apiParam {String} Lot_no Mandatory lot_no of Inventorys.  
	 * @apiParam {String} Container Mandatory container of Inventorys.  
	 * @apiParam {String} Storage_condition Mandatory storage_condition of Inventorys.  
	 * @apiParam {String} Original_amount Mandatory original_amount of Inventorys.  
	 * @apiParam {String} Estimated_current_mount Mandatory estimated_current_mount of Inventorys.  
	 * @apiParam {String} Date_of_receipt Mandatory date_of_receipt of Inventorys.  
	 * @apiParam {String} Received_by Mandatory received_by of Inventorys.  
	 * @apiParam {String} Date_of_expiration Mandatory date_of_expiration of Inventorys.  
	 * @apiParam {Integer} chemical_code Mandatory chemical_code of Inventory.
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function update_post()
	{
		$this->is_allowed('api_inventory_update');

		
		$this->form_validation->set_rules('name_of_pure_chemical', 'Name Of Pure Chemical', 'trim|required');
		$this->form_validation->set_rules('chemical_formula', 'Chemical Formula', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('date_registered', 'Date Registered', 'trim|required');
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
				'date_registered' => $this->input->post('date_registered'),
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
			
			$save_inventory = $this->model_api_inventory->change($this->post('chemical_code'), $save_data);

			if ($save_inventory) {
				$this->response([
					'status' 	=> true,
					'message' 	=> 'Your data has been successfully updated into the database'
				], API::HTTP_OK);

			} else {
				$this->response([
					'status' 	=> false,
					'message' 	=> cclang('data_not_change')
				], API::HTTP_NOT_ACCEPTABLE);
			}

		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Validation Errors.',
				'errors' 	=> $this->form_validation->error_array()
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}
	
	/**
	 * @api {post} /inventory/delete Delete Inventory. 
	 * @apiVersion 0.1.0
	 * @apiName DeleteInventory
	 * @apiGroup inventory
	 * @apiHeader {String} X-Api-Key Inventorys unique access-key.
	 * @apiHeader {String} X-Token Inventorys unique token.
	 	 * @apiPermission Inventory Cant be Accessed permission name : api_inventory_delete
	 *
	 * @apiParam {Integer} Id Mandatory id of Inventorys .
	 *
	 * @apiSuccess {Boolean} Status status response api.
	 * @apiSuccess {String} Message message response api.
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *
	 * @apiError ValidationError Error validation.
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 403 Not Acceptable
	 *
	 */
	public function delete_post()
	{
		$this->is_allowed('api_inventory_delete');

		$inventory = $this->model_api_inventory->find($this->post('chemical_code'));

		if (!$inventory) {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Inventory not found'
			], API::HTTP_NOT_ACCEPTABLE);
		} else {
			$delete = $this->model_api_inventory->remove($this->post('chemical_code'));

			}
		
		if ($delete) {
			$this->response([
				'status' 	=> true,
				'message' 	=> 'Inventory deleted',
			], API::HTTP_OK);
		} else {
			$this->response([
				'status' 	=> false,
				'message' 	=> 'Inventory not delete'
			], API::HTTP_NOT_ACCEPTABLE);
		}
	}
	
}

/* End of file Inventory.php */
/* Location: ./application/controllers/api/Inventory.php */