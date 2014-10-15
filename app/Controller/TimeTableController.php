<?php
/**
 * TimeTableコントローラー
 *
 * @category     gorin2014
 * @package      TimeTable
 */
App::uses('AppController', 'Controller');

//App::import( "Vendor", "SampleClass" );
//include_once("../Vendor/SampleClass.php");

class TimeTableController extends AppController {

	//public $uses = array();
	//public $request;

	public function index() {
		
		//$this->autoLayout = false;
		
		print "TimeTableController index";
		//exit;
		//debug($this->request->params);
		
		//debug($this->TimeTable->name);
		//$this->set("name",$this->TimeTable->name);
		
		//$obj_sample = new SampleClass();
		//$obj_sample->setGlobal("三郎");
		//debug($obj_sample->getGlobal());
		
	}
	public function view() {
		print "TimeTableController view";
		exit;
	}
}
