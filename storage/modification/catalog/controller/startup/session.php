<?php

              /**
          		 * wkrestapi code
          		 */
               if (!function_exists('getallheaders')) {
               	function getallheaders() {
               		$headers = [];
               		foreach ($_SERVER as $name => $value) {
               			if (substr($name, 0, 5) == 'HTTP_') {
               				$headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
               			}
               		}
               		return $headers;
               	}
               }
          		/**
          		 * ends here
          		 */
            
class ControllerStartupSession extends Controller {
	public function index() {

              if(isset($this->request->post['wk_token']) && $this->request->post['wk_token'])
                $wk_token = $this->request->post['wk_token'];

              //Accepting data in json format / raw data

              $raw_data = json_decode(file_get_contents("php://input"),true);

              if (isset($raw_data['wk_token']) && $raw_data['wk_token']) {
                $wk_token = $raw_data['wk_token'];
              }

              //Get wk_token from header
              if (isset(getallheaders()['wk_token'])) {
                $wk_token = getallheaders()['wk_token'];
              } elseif (isset(getallheaders()['Wk-Token'])) {
                $wk_token = getallheaders()['Wk-Token'];
              }
            
		if (isset($this->request->get['api_token']) && isset($this->request->get['route']) && substr($this->request->get['route'], 0, 4) == 'api/') {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "api_session` WHERE TIMESTAMPADD(HOUR, 1, date_modified) < NOW()");
					
			// Make sure the IP is allowed
			$api_query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "api` `a` LEFT JOIN `" . DB_PREFIX . "api_session` `as` ON (a.api_id = as.api_id) LEFT JOIN " . DB_PREFIX . "api_ip `ai` ON (a.api_id = ai.api_id) WHERE a.status = '1' AND `as`.`session_id` = '" . $this->db->escape($this->request->get['api_token']) . "' AND ai.ip = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "'");
		 
			if ($api_query->num_rows) {
				$this->session->start($this->request->get['api_token']);
				
				// keep the session alive
				$this->db->query("UPDATE `" . DB_PREFIX . "api_session` SET `date_modified` = NOW() WHERE `api_session_id` = '" . (int)$api_query->row['api_session_id'] . "'");
			}
		} else {
			if (isset($_COOKIE[$this->config->get('session_name')])) {
				$session_id = $_COOKIE[$this->config->get('session_name')];
			} else {
				$session_id = '';
			}
			

              if (isset($wk_token) && $wk_token && $wk_token != 'Session_Not_Loggin' && preg_match('/^[a-zA-Z0-9,\-]{22,52}$/', $wk_token)) {
                $session_id = $wk_token;
              }
            
			$this->session->start($session_id);
			
			setcookie($this->config->get('session_name'), $this->session->getId(), ini_get('session.cookie_lifetime'), ini_get('session.cookie_path'), ini_get('session.cookie_domain'));	
		}
	}
}