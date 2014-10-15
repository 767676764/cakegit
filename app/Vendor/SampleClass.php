<?php
/**
 * SampleCLass:クラスの練習
 *
 * @category     gorin2014
 * @package      SampleCLass
 */

class SampleClass {
	public $global_var;
	private $private_var;
	
	public function getGlobal() {
		return $this->global_var;
	}
	public function setGlobal($value) {
		$this->global_var = $value;
	}
}