<?php
class Viborkashum
{
    public $file;
    public $monat;
    public $erste_key;
    public $erste = 0;
    public $this_key = 0;
    public $this_key_knop = 0;
    public $vzad = 0;
    public $pered = 0;
	public $konez = 0;
	
	function __construct()
	{
		$this->file = scandir('shumann_img/', 1);
		if($last = count($this->file)){
			array_pop($this->file);
			array_pop($this->file);
			$erste = each($this->file);
			$this->erste = $erste['key'];
			$this->konez = $last-3;
		}

		if(isset($_GET['step'])){
			$this->this_key_knop = $_GET['step'];
			$this->nichterste();
		}
		$this->ablesung();
	}
	
	public function nichterste()
	{
		$this_key = $this->this_key_knop;
		for($key=$this_key, $key_i=--$this_key, $i=0; $i<=3; $key_i--, $key--){
			if($key_i<=0) {
				$this->vzad = 0;
				break;
			}
			if(substr($this->file[$key], 5, 2) != substr($this->file[$key_i], 5, 2)){
				$i++;
				$this->vzad = $key;
			}
		}
		for($i = 0; $i<=$this_key; $i++) {
			unset($this->file[$i]);
		}
	}
	
	public function ablesung()
	{
		reset($this->file);
		$erste_elem = each($this->file);
        $this->erste_key = $erste_elem['key'];
        $erste_val = $erste_elem['value'];
        $this->monat = substr($erste_val, 5, 2);
	}
	
	public function viborka()
	{
		if(count($this->file)){
			$current = "<ul>";
			foreach($this->file as $key=>$value){
				$month = substr($value, 5, 2);
				if($key == $this->konez){
					$this->pered = $this->erste_key;
				}
				if($month == $this->monat){
					if(strrchr($value, '.')=='.jpg'){
						$day = substr($value, 0, 10);
						$current = $current."<li><a href='shumann_img/$value' target='_blank'>$day</a></li>";
					}
					unset($this->file[$key]);
				}
				else {
					$this->monat = $month;
					$this->pered = $key;
					break;
				}
			}
			$current = $current."</ul>";
			return $current;
		}
		return "Записей нет";
	}
}
?>
