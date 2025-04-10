<?php

/**
 * @version [2.3.x.x] [Supported opencart version 2.3.x.x]
 * @category Webkul
 * @package Opencart-Amazon Connector
 * @author [Webkul] <[<http://webkul.com/>]>
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license https://store.webkul.com/license.html
 */

class B2b
{

    /**
     * @var string logFile is the file path of the logs.
     */
    public $logFile;

    public $config;
    public $request;
    public $url;
    public $db;
    public $session;
    public $response;
    public $cache;
    public $tax;
    public $load;
    public $language;

    public $encryptionKey = '';

    /**
     * __construct
     *
     * @return void
     */
    function __construct($registry)
    {
        // log file path
        $this->logFile = DIR_APPLICATION . '/wk_mp_b2b.logs';

        $this->encryptionKey = openssl_random_pseudo_bytes(32); // Generate a 256-bit encryption key

        $this->config = $registry->get('config');
        $this->request = $registry->get('request');
        $this->url = $registry->get('url');
        $this->db = $registry->get('db');
        $this->session = $registry->get('session');
        $this->response = $registry->get('response');
        $this->cache = $registry->get('cache');
        $this->tax = $registry->get('tax');
        $this->load = $registry->get('load');
        $this->language = $registry->get('language');
    }

    /**
     * encryption
     *
     * @param  mixed $value
     * @return string
     */
    public function encryption($value)
    {

        // Store the cipher method for encrypting  
        $ciphering_value = "AES-128-CTR";
        // Store the encryption key  
        $encryption_key = "webkul";
        // Use openssl_encrypt() function for encrypting the data  
        $encryption_value   = openssl_encrypt($value, $ciphering_value, $encryption_key);
        // Display the encrypted string  
        return $encryption_value;
    }

    /**
     * decryption
     *
     * @param  mixed $value
     * @return string
     */
    public function decryption($value)
    {
        // Store the cipher method   
        $ciphering_value = "AES-128-CTR";

        $decryption_key = "webkul";
        // Use openssl_decrypt() function to decrypt the data  
        $decryption_value = openssl_decrypt($value, $ciphering_value, $decryption_key);
        // Display the decrypted string as an original data  
        return $decryption_value;
    }


    /**
     * getWishlistCheck
     *
     * @param  mixed $product_id
     * @return bool
     */
    public function getWishlistCheck($product_id = 0)
    {
        try {
            $customer_id = !empty($this->session->data['customer_id']) ? $this->session->data['customer_id'] : 0;
            return $this->select('customer_wishlist', array('product_id'), array('customer_id' => $customer_id, 'product_id' => $product_id), 'row');
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * addCard
     *
     * @param  mixed $data
     * @return bool
     */
    public function addCard($data = array())
    {
        if (!empty($data['payment_card'])) {

            $array = [
                'card_number' => $data['payment_card']['card_number'],
                'card_type' => $data['payment_card']['card_type'],
                'card_exp' => $data['payment_card']['card_exp'],
                'card_cvv' => $this->encryption($data['payment_card']['card_cvv']),
                'card_name' => $data['payment_card']['card_name'],
                'timestamp' => strtotime(date('d-m-y h:i:s'))
            ];

            $this->replace('wk_paymentcard', $array, []);
        }

        return ['error' => true, 'msg' => 'Data is empty.'];
    }

    /**
     * select
     *
     * @param  string $table
     * @param  array $select
     * @param  array $where
     * @return array
     */
    public function select($table = '', $selection = array(), $where = array(), $func = 'rows')
    {
        try {
            $query = '';

            $query .= "SELECT " . (is_array($selection) ? implode(",", $selection) : $selection) . " FROM " . DB_PREFIX . "$table";
            if (!empty($where)) {
                $query .= " WHERE 1 ";
                foreach ($where as $column => $values) {
                    if (is_array($values)) {
                        $value = $this->checkWhereClause($values[1]) ? "('" . implode("', '", $values[0]) . "')" : $this->checkIsString($values[0]);
                        $constraint = $values[1];
                    } else {
                        $_isValid = !empty(explode(':', $values)[1]);
                        $value = $_isValid ? $this->checkIsString(explode(':', $values)[0]) : $this->checkIsString($values);
                        $constraint = $_isValid ? explode(':', $values)[1] : '=';
                    }
                    $query .= "AND $column $constraint $value ";
                }
            }
            return $this->db->query($query)->$func;
        } catch (Exception $e) {
            $this->_writeLog($this->logFile, $e->getMessage());
        }
    }

    /**
     * update
     * 
     * @param string
     * @param array
     * @param array
     * 
     * @return int
     */
    public function update($table, $params, $where = array())
    {

        // update query
        $query = "UPDATE " . DB_PREFIX . "$table SET ";

        $setParams = $condition = '';

        // making condition
        if (!empty($where)) {
            $condition .= " WHERE 1 ";

            foreach ($where as $column => $values) {
                if (is_array($values)) {
                    if ($this->checkWhereClause($values[1])) {
                        $value = "('" . implode("', '", $values[0]) . "')";
                    } else {
                        $value = $this->checkIsString($values[0]);
                    }
                    $constraint = $values[1];
                } else {

                    $_isValid = !empty(explode(':', $values)[1]) ? true : false;
                    if ($_isValid) {
                        $value = $this->checkIsString(explode(':', $values)[0]);
                        $constraint = explode(':', $values)[1];
                    } else {
                        $value = $this->checkIsString($values);
                        $constraint = '=';
                    }
                }
                $condition .= "AND $column $constraint $value ";
            }
        }

        // making update params         
        if (!empty($params)) {
            $setParams = array_map(function ($key, $value) {
                return "$key = '$value'";
            }, array_keys($params), $params);

            $setParams = implode(', ', $setParams);
        }

        try {

            return $this->db->query($query . '' . $setParams . ' ' . $condition);
        } catch (Exception $e) {
            $this->_writeLog($this->logFile, $e->getMessage());
        }
    }

    /**
     * update
     * 
     * @param string
     * @param array
     * @param array
     * 
     * @return int
     */
    public function replace($table, $params, $where = array())
    {

        // update query
        $query = "REPLACE INTO " . DB_PREFIX . "$table SET ";

        $setParams = $condition = '';

        // making condition
        if (!empty($where)) {
            $condition .= " WHERE 1 ";

            foreach ($where as $column => $values) {
                if (is_array($values)) {
                    if ($this->checkWhereClause($values[1])) {
                        $value = "('" . implode("', '", $values[0]) . "')";
                    } else {
                        $value = $this->checkIsString($values[0]);
                    }
                    $constraint = $values[1];
                } else {

                    $_isValid = !empty(explode(':', $values)[1]) ? true : false;
                    if ($_isValid) {
                        $value = $this->checkIsString(explode(':', $values)[0]);
                        $constraint = explode(':', $values)[1];
                    } else {
                        $value = $this->checkIsString($values);
                        $constraint = '=';
                    }
                }
                $condition .= "AND $column $constraint $value ";
            }
        }

        // Making update params
        if (!empty($params)) {
            $setParams = array_map(function ($key, $value) {
                return "$key = '$value'";
            }, array_keys($params), $params);

            $setParams = implode(', ', $setParams);
        }

        try {

            $this->db->query($query . '' . $setParams . ' ' . $condition);
            // get inserted ID            
            return $this->db->getLastId();
        } catch (Exception $e) {
            $this->_writeLog($this->logFile, $e->getMessage());
            return false;
        }
    }

    /**
     * 
     * @param string
     * @param array
     * 
     * @return int
     */
    // public function insert($table,$params){

    //     $query = "INSERT INTO " . DB_PREFIX . "$table";

    //     try {            
    //         return db_query($query,$params);
    //     } catch (Exception $e) {

    //         $this->writeLog($this->logFile,$e->getMessage());
    //     }

    // }

    /**
     * 
     * @param string
     * @param array
     * 
     * @return void
     */
    public function delete($table, $where = array())
    {
        $query = "DELETE FROM " . DB_PREFIX . "$table";
        $condition = '';
        if (!empty($where)) {
            $condition .= " WHERE 1 ";

            foreach ($where as $column => $values) {
                if (is_array($values)) {
                    if ($this->checkWhereClause($values[1])) {
                        $value = "('" . implode("', '", $values[0]) . "')";
                    } else {
                        $value = $this->checkIsString($values[0]);
                    }
                    $constraint = $values[1];
                } else {

                    $_isValid = !empty(explode(':', $values)[1]) ? true : false;
                    if ($_isValid) {
                        $value = $this->checkIsString(explode(':', $values)[0]);
                        $constraint = explode(':', $values)[1];
                    } else {
                        $value = $this->checkIsString($values);
                        $constraint = '=';
                    }
                }
                $condition .= "AND $column $constraint $value ";
            }

            try {

                return $this->db->query($query . '' . $condition);
            } catch (Exception $e) {
                $this->_writeLog($this->logFile, $e->getMessage());
            }
        }
    }


    /**
     * _alterTable
     *
     * @param  string $table
     * @param  array $keys
     * @param  string $action
     * @return bool|array|string|void
     */
    protected function _alterTable($table = '', $keys = array(), $action = '')
    {
        $query = ' ';

        try {
            // action
            $alter = 'ALTER TABLE ';

            if (!empty($keys)) {
                foreach ($keys as $key => $value) {
                    if ($this->_checkClause($action)) {
                        $query .= $key . ' ' . $value;
                    } else {
                        $query .= $value;
                    }
                }
            }
            $dbQuery = $alter . '' . DB_PREFIX . $table . ' ' . $action . $query;

            return $this->db->query($dbQuery);
        } catch (Exception $e) {
            $this->_writeLog($this->logFile, $e->getMessage());
        }
    }

    /**
     * _checkClause
     *
     * @param  string $action
     * @return bool
     */
    private function _checkClause($action)
    {
        return in_array($action, ['DROP', 'MODIFY']) ? true : false;
    }

    /**
     * @param string
     * 
     * @return string
     */
    private function checkIsString($value)
    {
        return (is_string($value)) ? "\"$value\"" : $value;
    }

    /**
     * Check Where clause exist or not.
     * 
     * @param string
     * 
     * @return bool
     */
    private function checkWhereClause($value)
    {
        $allowedClause = array('NOT IN', 'IN');
        return in_array($value, $allowedClause);
    }

    /**
     * @param string
     * @param array
     * 
     * @return string|array|void
     */
    private function _writeLog($file, $contents)
    {
        $file = fopen($this->logFile, "a");
        $contents = date("Y-m-d h:i:s") . " " . $contents . "\n";
        fwrite($file, $contents);
        fclose($file);
    }
}
