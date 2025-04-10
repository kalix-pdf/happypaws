<?php
class ControllerStartupSeoUrl extends Controller {
	public function index() {
		// Add rewrite to url class
		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

		// Decode URL
		if (isset($this->request->get['_route_'])) {
			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			
             if ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo')) {
                
                if($this->config->get('marketplace_product_seo_default_name') && strlen(array_search($this->config->get('marketplace_product_seo_default_name'),$parts)) > 0)  {
                    
                    unset($parts[array_search($this->config->get('marketplace_product_seo_default_name'),$parts)]);
                }
            }
            
            foreach ($parts as $part) {

                if ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo')) {
                    // add extension after seo keyword
                    if ($this->config->get('marketplace_product_seo_page_ext')) {
                        $part = str_replace($this->config->get('marketplace_product_seo_page_ext'),'',$part);
                    }
                }
              
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($part) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

				if ($query->num_rows) {
					$url = explode('=', $query->row['query']);

					if ($url[0] == 'product_id') {

            if ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo')) {

              $_route_ = explode('/', $this->request->get['_route_']);

              $new_route = str_replace($this->config->get('marketplace_product_seo_page_ext'), '', $this->request->get['_route_']);

              $product_name = false;

              if ($this->config->get('marketplace_product_seo_format')) {

                  if ($this->config->get('marketplace_product_seo_format') == '1') {
                     $product_name = basename($new_route);
                  } else if ($this->config->get('marketplace_product_seo_format') == '2') {
                      $mpparts = explode($this->config->get('marketplace_product_seo_default_name') . '/', $new_route, 2);

                      if (!isset($mpparts[1])) {
                          $mpparts = explode('/', $mpparts[0], 2);
                      }

                      if (isset($mpparts[1])) {
                        $product_name = basename($mpparts[1]);
                      }
                  }
              }

              if (empty($product_name)) {
                  $product_name = $new_route;
              }

              if ($product_name) {
                  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($product_name) . "'");

                  if ($query->num_rows) {
                      $url = explode('=', $query->row['query']);


                      if ($url[0] == 'product_id') {
                          $this->request->get['product_id'] = $url[1];
                      }
                  }

                  $this->request->get['route'] = 'product/product';
              }
            } else {
          
						$this->request->get['product_id'] = $url[1];

            }
              
					}

					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
					}


            // marketplace seo for vendor	                   
            if ($url[0] == 'seller_id' && $this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo')) {                        
                $this->request->get['seller_id'] = $url[1];
                $this->request->get['route'] = 'customerpartner/profile';                     
            }
            // code end
              
					if ($url[0] == 'manufacturer_id') {
						$this->request->get['manufacturer_id'] = $url[1];
					}

					if ($url[0] == 'information_id') {
						$this->request->get['information_id'] = $url[1];
					}

					
            if ($query->row['query'] && $url[0] != 'information_id' && $url[0] != 'manufacturer_id' && $url[0] != 'category_id' && $url[0] != 'product_id' && $url[0] != 'seller_id') {
              
						$this->request->get['route'] = $query->row['query'];
					}

            } elseif($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') && $this->request->get['_route_'] == 'Marketplace-Collection') {
                $this->request->get['route'] =  'customerpartner/profile/collection';
            } elseif ($this->config->get('module_marketplace_status')
              && $this->config->get('marketplace_useseo')
              && is_array($this->config->get('marketplace_SefUrlsvalue'))
              && (in_array($this->request->get['_route_'], $this->config->get('marketplace_SefUrlsvalue')) || in_array(current(explode('/', $this->request->get['_route_'])), $this->config->get('marketplace_SefUrlsvalue')))
              ) {
                  $_route_ = explode('/', $this->request->get['_route_']);
                  $sefKey = array_search($_route_[0], $this->config->get('marketplace_SefUrlsvalue'));
                  $wkSefUrlspath = $this->config->get('marketplace_SefUrlspath');

                  if (isset($wkSefUrlspath[$sefKey])) {
                      $this->request->get['route'] =  $wkSefUrlspath[$sefKey];
                  }      
          
				} else {
					$this->request->get['route'] = 'error/not_found';

					break;
				}
			}

			if (!isset($this->request->get['route'])) {
				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
				} elseif (isset($this->request->get['path'])) {
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				}
			}
		}
	}

	public function rewrite($link) {
		$url_info = parse_url(str_replace('&amp;', '&', $link));

		$url = '';

		$data = array();

		parse_str($url_info['query'], $data);

		foreach ($data as $key => $value) {
			if (isset($data['route'])) {
				
            if (($data['route'] == 'product/product' && $key == 'product_id')) {
              if ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo')) {

                  $sellerDetail = '';

                  $sellerDetails = $this->db->query("SELECT c2c.screenname,c2c.companyname,c.firstname as sellername FROM " . DB_PREFIX . "customerpartner_to_product c2p LEFT JOIN " . DB_PREFIX . "product p ON (p.product_id=c2p.product_id) LEFT JOIN " . DB_PREFIX . "customerpartner_to_customer c2c ON (c2p.customer_id=c2c.customer_id) LEFT JOIN " . DB_PREFIX . "customer c ON (c.customer_id=c2c.customer_id) WHERE c2p.product_id = '" . (int)$value . "' ")->row;

                  if (isset($sellerDetails[$this->config->get('marketplace_product_seo_name')]) && $sellerDetails[$this->config->get('marketplace_product_seo_name')]) {
                      $sellerDetail = $sellerDetails[$this->config->get('marketplace_product_seo_name')];
                  } else {
                      $sellerDetail = $this->config->get('marketplace_product_seo_default_name');
                  }

                  $keyword = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . (int)$value . "' ")->row;

                  // if keyword find the create seo url otherwise create default path
                  if (!empty($keyword)) {
                      if (isset($keyword['keyword']) && $keyword['keyword']) {

                          $keyword = $keyword['keyword'];
                          unset($data[$key]);
                      } else if ($this->config->get('marketplace_product_seo_name')) {
                          $key_word = $this->db->query("SELECT name FROM " . DB_PREFIX . "product_description pd WHERE product_id = '" . (int)$value . "' AND language_id = '" . $this->config->get('config_language_id') . "' ")->row;

                          if (isset($key_word['name'])) {
                              $keyword = str_replace(' ', '-', $key_word['name']);
                          } else {
                              $keyword = '';
                          }
                      }

                      if ($sellerDetail) {

                          if ($this->config->get('marketplace_product_seo_format') == '1') {
                              $url .= '/' . $keyword;
                              // product_name

                          } else if ($this->config->get('marketplace_product_seo_format') == '2') {
                              $url .= '/' . str_replace(array(' ', '-'), '-', $sellerDetail) . '/' . $keyword;
                              // product_name/vendor_name
                          }

                          // add extension after seo keyword
                          if ($this->config->get('marketplace_product_seo_page_ext')) {
                              $url .= $this->config->get('marketplace_product_seo_page_ext');
                          }

                          unset($data[$key]);
                      } else {

                          if ($keyword) {
                              $url .=  '/' . $keyword;
                          }
                          // add extension after seo keyword
                          if ($this->config->get('marketplace_product_seo_page_ext')) {
                              $url .= $this->config->get('marketplace_product_seo_page_ext');
                          }

                          unset($data[$key]);
                      }
                      unset($data[$key]);
                  }
              } else {
                  $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

                  if ($query->num_rows && $query->row['keyword']) {
                      $url .= '/' . $query->row['keyword'];

                      unset($data[$key]);
                  }
              }
            } elseif(($data['route'] == 'customerpartner/profile' && $key == 'seller_id' && $this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo'))) {

              $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

              if ($query->num_rows && $query->row['keyword']) {
                  $url .= '/' . $query->row['keyword'];

                  unset($data[$key]);
              }

            } elseif ((($data['route'] == 'product/manufacturer/info' || $data['route'] == 'product/product') && $key == 'manufacturer_id')
              || ($data['route'] == 'information/information' && $key == 'information_id')                    
              ) {
          
					$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = '" . $this->db->escape($key . '=' . (int)$value) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

					if ($query->num_rows && $query->row['keyword']) {
						$url .= '/' . $query->row['keyword'];

						unset($data[$key]);
					}

            } elseif ($this->config->get('module_marketplace_status') && $this->config->get('marketplace_useseo') && $data['route'] == 'customerpartner/profile/collection') {
              $url .= '/Marketplace-Collection';
              unset($data[$key]);
            } elseif ($this->config->get('module_marketplace_status')
              && $this->config->get('marketplace_useseo')
              && is_array($this->config->get('marketplace_SefUrlspath'))
              && in_array($data['route'], $this->config->get('marketplace_SefUrlspath'))
              ) {
                  $sefKey = array_search($data['route'], $this->config->get('marketplace_SefUrlspath'));

                  $wkSefUrlsvalue = $this->config->get('marketplace_SefUrlsvalue');

                  if (isset($wkSefUrlsvalue[$sefKey])) {
                      $url .=  '/' . $wkSefUrlsvalue[$sefKey];
                      unset($data[$key]);
                  }
                  // webkul code end  

          
				} elseif ($key == 'path') {
					$categories = explode('_', $value);

					foreach ($categories as $category) {
						$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE `query` = 'category_id=" . (int)$category . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

						if ($query->num_rows && $query->row['keyword']) {
							$url .= '/' . $query->row['keyword'];
						} else {
							$url = '';

							break;
						}
					}

					unset($data[$key]);
				}
			}
		}

		if ($url) {
			
                  unset($data['route']);
                  unset($data['path']);
              

			$query = '';

			if ($data) {
				foreach ($data as $key => $value) {
					$query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
				}

				if ($query) {
					$query = '?' . str_replace('&', '&amp;', trim($query, '&'));
				}
			}

			return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
		} else {
			return $link;
		}
	}
}
