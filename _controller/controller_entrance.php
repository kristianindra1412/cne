<?php 
class controller_entrance extends basicController {  
  public function __construct() {
    parent::__construct();	
  }
  public function index() {
    $param['model'] = new model_entrance();
    $this->loadView("entrance",$param);
  }
  public function insertAjaxForm() {
    $o['html'] = $this->bufferView("entrance_insert");
    $this->output_json($o);
  }
  public function updateAjaxForm($id) {
    $model = new model_entrance($id);
    $param['data'] = $model->data();
    $o['html'] = $this->bufferView("entrance_update",$param);
    $this->output_json($o);
  }
  public function deleteAjaxForm($id) {
    $model = new model_entrance($id);
    $param['data'] = $model->data();
    $o['html'] = $this->bufferView("entrance_delete",$param);
    $this->output_json($o);
  }
  public function inserting() {
    $model = new model_entrance();
    $insert = $_POST;
    $model->inserting($insert);
    $this->forward("entrance");
  }
  public function updating() {
    $model = new model_entrance($_POST['entrance_code']);
    $update = $_POST;    
    $model->updating($update);
    $this->forward("entrance");
  }
  public function deleting() {
    $model = new model_entrance($_POST['entrance_code']);
    $model->deleting();
    $this->forward("entrance");
  }
  
  
}
?>