<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_faq extends CI_Migration {

	public function __construct(){
		parent::__construct();
		$this->load->dbforge();
	}


	public function up()
	{
		$fields = array(
						'`id` int(10) unsigned NOT NULL AUTO_INCREMENT',
						'`question` text NOT NULL',
						'`answer` mediumtext NOT NULL',
						'`created_by` int(11) NOT NULL',
						'`date_created` timestamp NULL DEFAULT NULL',
						'`date_published` timestamp NULL DEFAULT NULL',
						'`date_removed` timestamp NULL DEFAULT NULL',
					);
		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('faq');
		//--------------------------------------------
	}

	public function down()
	{
		$this->dbforge->drop_table('faq');
	}
}

/* End of file 005_add_faq.php */
/* Location: ./application/migrations/005_add_faq.php */