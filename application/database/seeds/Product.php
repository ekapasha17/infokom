<?php
class Product extends Seeder {

	public function run()
	{
		$this->db->truncate('product');

		$data = [
			'name' => 'CodeIgniter Book',
			'detail' => 'Very good CodeIgniter book.',
			'price' => 3800,
		];
		$this->db->insert('product', $data);

		$data = [
			'name' => 'CodeIgniter CD',
			'detail' => 'Great CodeIgniter CD.',
			'price' => 4800,
		];
		$this->db->insert('product', $data);

		$data = [
			'name' => 'CodeIgniter DVD',
			'detail' => 'Awesome CodeIgniter DVD.',
			'price' => 5800,
		];
		$this->db->insert('product', $data);
	}

}
?>