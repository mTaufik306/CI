<?php
class Test extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function allowed_chars($param) {
		/**
		the configuration has been set to only allow alphanumeric and '-'
		*/
		echo "You passed me '$param'";
	}

	function md5_test($param) {
		echo md5($param)." with long: ".strlen(md5($param));
	}

	function sha1_test($param) {
		/*using php function*/
		echo sha1($param)." with long: ".strlen(sha1($param));
	}

	function sha1_test2($param) {
		/*using CI library*/
		$this->load->library('encrypt');
		echo $this->encrypt->sha1($param)." with long: ".strlen($this->encrypt->sha1($param));
	}

	function encode() {
		$message = "This is a secret message";
		$this->load->library('encrypt');

		echo $this->encrypt->encode($message)." with long: ".strlen($this->encrypt->encode($message));
	}

	function decode() {
		$this->load->library('encrypt');
		$message = "v6GOSJvC7MqNNpUMf6VdYu+7GXAZ6Mzh8OdduBFTfR+A2CPQwSWkUNR/Yq6uF95Uhf358yisLOkCa7zq3uI1pA==";
		echo $this->encrypt->decode($message);
	}

	function encode_with_key($key) {
		$message = "This is a secret message with key: $key";
		$this->load->library('encrypt');

		echo $this->encrypt->encode($message,$key)." with long: ".strlen($this->encrypt->encode($message,$key));
	}

	function decode_with_key($key) {
		$this->load->library('encrypt');
		$message = "fDLDMYhE0SOqqCrVzAaim20LDhnHKHH6zRixQR50ghju9FM1rKrtQ2xQUsjXuDHOPwB/7stGZHsrP7MsMmfWvCMgZbNL+sBXbe/YvAh6TKxVCcG4un6cxGkJKZTcS0qQ";
		echo $this->encrypt->decode($message,$key);
	}

	function sql() {

		$this->load->database();
		$name = "Taufik";
		$query = "SELECT * FROM users WHERE name = '$name' ";//unsafe

		$query = "SELECT * FROM users 
			WHERE name = '".mysql_real_escape_string($name)."'";

		$query = "SELECT * FROM users 
			WHERE name = '".$this->db->escape_str($name)."'"; //for string

		$query = "SELECT * FROM users 
			WHERE name = ".$this->db->escape($name).""; //with this you dont need to add backtick for even a string

		$query = "SELECT * FROM users 
			WHERE name LIKE '%".$this->db->escape_like_str($name)."'";
		//active record class is secure so dont worry about escape function
	}

	function xss_filter(){
		/*filtering to protect against xss attack
		xss : one entering information to a website and that information being displayed 
		to another person which can trigger things like javascript code in the
		other people's browser to steal cookies or another information or make them
		do things that they meant to
		example: comment in blog
		*/
		//if filtered by config ($config['global_xss_filtering'] = TRUE)
		//below code is same as $this->input->post('comment',true)
		$this->input->post('comment');

		$this->input->post('comment',true);//true is part which triggers xss-filtering
		$clean_string = $this->input->xss_clean($string); 
	}

	function output() {
		//this is in case where the data from the database contains html tag to prevent HTML page from breaking
		htmlspecialchars($string);

		//automatically filtered
		echo anchor($url);

		//automatically filtered
		echo form_input('name', set_value($name));

		?>
		<input type="text" name="name"
			value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>"/>
		<?php
	}

	function session() {
		/*session security*/
		$this->load->library('session');/*by default the setting are not very secure*/
		$this->session->set_userdata('user_id',2);
	}

	function session_read() {
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');

		if($user_id == 1)
			echo "You have all access";
		else
			echo "You have limited access, user id: $user_id";
	}

	function error() {
		foobar();
	}

	function _secret() {
		/*cant be accessed through url*/
		echo "You called secret";
	}

}







