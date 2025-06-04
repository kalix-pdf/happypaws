<?php
class ModelCatalogOption extends Model {
	public function addOption($data) {
		
		$this->log->write($data);

		$seller_id = $this->customer->getId();
		$data['type'] = 'select';
		$sort_order = isset($data['sort_order']) ? (int)$data['sort_order'] : 0;

		// $option_name = isset($data['option_description'][1]['name']) ? $data['option_description'][1]['name'] : '';

		$option_name = $data['option_description']['name'];

		$this->db->query("INSERT INTO `seller_product_option` SET type = '" . $this->db->escape($data['type']) . "', 
						sort_order = '" . (int)$sort_order . "', seller_id = '" . (int)$seller_id . "',
						name = '" . $this->db->escape($option_name) . "'");

		$option_id = $this->db->getLastId();

		if (isset($data['option_value'])) {
			foreach ($data['option_value'] as $option_value) {
				$value = $option_value['option_value_description']['name'];
				$image = isset($option_value['image']) ? html_entity_decode($option_value['image'], ENT_QUOTES, 'UTF-8') : '';
				$sort_order = isset($option_value['sort_order']) ? (int)$option_value['sort_order'] : 0;

				$this->db->query("INSERT INTO seller_product_option_value SET 
							seller_option_id = '" . (int)$option_id . "', 
							image = '" . $this->db->escape($image) . "',
							value = '" . $this->db->escape($value) . "',
							sort_order = '" . $this->db->escape($sort_order) . "'");
			}
		}

		return $option_id;

		// foreach ($data['option_description'] as $language_id => $value) {
			// 	$this->db->query("INSERT INTO " . DB_PREFIX . "option_description SET option_id = '" . (int)$option_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "'");
			// }
	
	}
	public function getOptionsBySeller($seller_id) {
		$query = $this->db->query("SELECT seller_option_id,
									name AS option_name 
									FROM `seller_product_option`  
				WHERE seller_id = '". (int)$seller_id . "'");
	
		return $query->rows;
	}

	public function editOption($option_id, $data) {
		$data['type'] = 'select';
		// $this->log->write($data);
		if (!empty($data['option_description'])) {
			$this->db->query("UPDATE seller_product_option SET type = '" . $this->db->escape($data['type']) . "', sort_order = '" . (int)$data['sort_order'] . "'
			, name = '" . $this->db->escape($data['option_description']['name']) . "' WHERE seller_option_id = '" . (int)$option_id . "'");
		}
		
		$this->db->query("DELETE FROM seller_product_option_value WHERE seller_option_id = '" . (int)$option_id . "'");

		if (!empty($data['option_value'])) {
			foreach ($data['option_value'] as $option_value) {

				if (!empty($option_value['option_value_id'])) {
					$this->db->query("INSERT INTO seller_product_option_value SET option_value_id = '" . (int)$option_value['option_value_id'] . "', seller_option_id = '" . (int)$option_id . "', value = '" . $this->db->escape($option_value['option_value_description']['name']) . "', image = '" . $this->db->escape(html_entity_decode($option_value['image'], ENT_QUOTES, 'UTF-8')) . "', sort_order = '" . (int)$option_value['sort_order'] . "'");
				} else {
					$this->db->query("INSERT INTO seller_product_option_value SET seller_option_id = '" . (int)$option_id . "', value = '" . $this->db->escape($option_value['option_value_description']['name']) . "', image = '" . $this->db->escape(html_entity_decode($option_value['image'], ENT_QUOTES, 'UTF-8')) . "', sort_order = '" . (int)$option_value['sort_order'] . "'");
				}
			}
		}
	}

	public function deleteOption($option_id) {
		$this->db->query("DELETE FROM `seller_product_option` WHERE seller_option_id = '" . (int)$option_id . "'");
		$this->db->query("DELETE FROM seller_product_option_value WHERE seller_option_id = '" . (int)$option_id . "'");
	}

	public function getOption($option_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "option` o LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE o.option_id = '" . (int)$option_id . "' AND od.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getOptions($data = array()) {
		$sql = "SELECT * FROM `" . DB_PREFIX . "option` o LEFT JOIN " . DB_PREFIX . "option_description od ON (o.option_id = od.option_id) WHERE od.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND od.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'od.name',
			'o.type',
			'o.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY od.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function origgetOptionDescriptions($option_id) {
		$option_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_description WHERE option_id = '" . (int)$option_id . "'");

		foreach ($query->rows as $result) {
			$option_data[$result['language_id']] = array('name' => $result['name']);
		}

		return $option_data;
	}
	public function getOptionDescriptions($option_id) {
		$option_data = array();

		$query = $this->db->query("SELECT * FROM seller_product_option WHERE seller_option_id = '" . (int)$option_id . "'");

		 if ($query->num_rows) {
			$option_data = array(
				'name' => $query->row['name']
			);
    	}

		return $option_data;
	}


	public function getOptionValue($option_value_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value ov LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE ov.option_value_id = '" . (int)$option_value_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getOptionValues($option_id) {
		$option_value_data = array();

		$option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value ov LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (ov.option_value_id = ovd.option_value_id) WHERE ov.option_id = '" . (int)$option_id . "' AND ovd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY ov.sort_order, ovd.name");

		foreach ($option_value_query->rows as $option_value) {
			$option_value_data[] = array(
				'option_value_id' => $option_value['option_value_id'],
				'name'            => $option_value['name'],
				'image'           => $option_value['image'],
				'sort_order'      => $option_value['sort_order']
			);
		}

		return $option_value_data;
	}

	public function originalgetOptionValueDescriptions($option_id) {
		$option_value_data = array();

		$option_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value WHERE option_id = '" . (int)$option_id . "' ORDER BY sort_order");

		foreach ($option_value_query->rows as $option_value) {
			$option_value_description_data = array();

			$option_value_description_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value_description WHERE option_value_id = '" . (int)$option_value['option_value_id'] . "'");

			foreach ($option_value_description_query->rows as $option_value_description) {
				$option_value_description_data[$option_value_description['language_id']] = array('name' => $option_value_description['name']);
			}

			$option_value_data[] = array(
				'option_value_id'          => $option_value['option_value_id'],
				'option_value_description' => $option_value_description_data,
				'image'                    => $option_value['image'],
				'sort_order'               => $option_value['sort_order']
			);
		}

		return $option_value_data;
	}

	public function getOptionValueDescriptions($option_id) {
		$option_value_data = array();

		$option_value_query = $this->db->query("SELECT * FROM seller_product_option_value WHERE seller_option_id = '" . (int)$option_id . "' ORDER BY sort_order");

		foreach ($option_value_query->rows as $row) {
		$option_value_data[] = array(
			'option_value_id'          => $row['option_value_id'],
			'name'                     => $row['value'], // no language_id
			'image'                    => $row['image'],
			'sort_order'               => $row['sort_order']
		);
	}
		// $this->log->write($option_value_data);
		return $option_value_data;
	}

	public function getTotalOptions() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "option`");

		return $query->row['total'];
	}
}