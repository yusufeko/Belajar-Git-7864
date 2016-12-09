<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

	class age{

		private $db;

		public function Age(){
			$this->db = new DBClass();
		}

		public function umur($id){
			$a = new datetime($id);
			$b = getdate();
			$c = $b-$a;
			return $c;
		}
	}
?>