<?php 
/**
 * @version [Supported opencart version 3.x.x.x.]
 * @category Webkul
 * @package Opencart Marketplace Module Income model
 * @author [Webkul] <[<http://webkul.com/>]>
 * @copyright Copyright (c) 2010-2019 Webkul Software Private Limited (https://webkul.com)
 * @license https://store.webkul.com/license.html
 */

class ModelAccountCustomerpartnerIncome extends Model {


    public function getProductWiseEarnng($partner_id = 0,$filter_data = array(),$type = false) {
       
        $sql = '';

        if (!empty($filter_data['filter_display_group'])) {
            $group = $filter_data['filter_display_group'];
        } else {
            $group = 'month';
        }

        $format = "%b %d, %Y %H:%i"; 

        switch($group) {
            case 'month':
                $format = "%b %d, %Y %H:%i";
                break;
            case 'year':
                $format = "%Y %H:%i";
                break;
        }   

        $sql .= "SELECT DATE_FORMAT(c2o.date_added,'".$format."') as date_display,
            c2o.date_added as date_start,
            pd.name,
            p.product_id,
            ps.subs_type, 
            SUM(c2o.price) as product_total,
            SUM(c2o.admin) as admin_amount,
            SUM((c2o.customer)) as seller_amount,
            SUM(c2o.shipping_applied) as shipping_total,
            SUM(c2o.commission_applied) as comission_applied,
            (SUM(c2o.admin) + SUM(c2o.customer)) as order_total
            FROM " . DB_PREFIX . "customerpartner_to_order c2o
            LEFT JOIN " . DB_PREFIX . "product p ON(p.product_id = c2o.product_id)
            LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id)
            LEFT JOIN " . DB_PREFIX . "customerpartner_to_product c2p ON(p.product_id=c2p.product_id)
            LEFT JOIN product_subscription ps ON (p.product_id = ps.product_id)
            WHERE c2p.customer_id='" . $partner_id . "'";

        if(!empty($filter_data['filter_custom_start']) && !empty($filter_data['filter_custom_end'])) {
            $sql .=" AND DATE(c2o.date_added) >= '".$this->db->escape($filter_data['filter_custom_start'])."' AND DATE(c2o.date_added) <= '".$this->db->escape($filter_data['filter_custom_end'])."'";
        }

        switch($group) {
            case 'day';
                $sql .= " GROUP BY DAY(c2o.date_added),c2p.product_id";
                break;
            default:
            case 'week':
                $sql .= " GROUP BY WEEK(c2o.date_added),c2p.product_id";
                break;
            case 'month':
                $sql .= " GROUP BY MONTH(c2o.date_added),c2p.product_id";
                break;
            case 'year':
                $sql .= " GROUP BY YEAR(c2o.date_added), c2p.product_id";
                break;
        }

        $sort_data = array(
         'c2o.date_added',
         'pd.name',
         'product_total',
         'admin_amount',
         'seller_amount',
         'shipping_total',
         'comission_applied',
		);

		if (isset($filter_data['sort']) && in_array($filter_data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $filter_data['sort'];
		} else {
			$sql .= " ORDER BY c2o.date_added";
		}

		if (isset($filter_data['order']) && ($filter_data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
            
        if($type) {
            $total = $this->db->query($sql)->rows;
            return count($total);
        }

        if (isset($filter_data['start']) || isset($filter_data['limit'])) {
            if ($filter_data['start'] < 0) {
                $filter_data['start'] = 0;
            }

            if ($filter_data['limit'] < 1) {
                $filter_data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$filter_data['start'] . "," . (int)$filter_data['limit'];
        } 
        
        $income_result = $this->db->query($sql)->rows;
           foreach ($income_result as &$value) {
                $product_price = (float)$value['product_total'];
                $platform_fee = $product_price * 0.03;
                $subs_type = isset($value['subs_type']) ? (int)$value['subs_type'] : 0;

                if ($subs_type == 3) {
                    $commission = $product_price * 0.05;
                } else {
                    $commission = 0;
                }

                $seller_income = $product_price - ($commission + $platform_fee);

                $value['commission'] = $commission;
                $value['platform_fee'] = $platform_fee;
                $value['seller_income'] = $seller_income;
            }
        return $income_result;
    }
    public function orderWiseEarning($partner_id = 0,$filter_data = array(), $type = false) {
        
        $sql = '';

        if (!empty($filter_data['filter_display_group'])) {
            $group = $filter_data['filter_display_group'];
        } else {
            $group = 'month';
        }

        $format = "%b %d,%Y";

        switch($group) {

            case 'month':
                $format = "%b %Y";
                break;
            case 'year':
                $format = "%Y";
                break;
        }

        $sql .= "SELECT DATE_FORMAT(c2o.date_added,'".$format."') as date_display,c2o.date_added as date_start,SUM(c2o.admin) as admin_amount,SUM(c2o.customer) as seller_amount,SUM(c2o.shipping_applied) as shipping_total, SUM(c2o.comission_applied) as comission_applied, (SUM(c2o.admin) + SUM(c2o.customer)) as order_total FROM " . DB_PREFIX . "customerpartner_to_order c2o LEFT JOIN " . DB_PREFIX .  "order o ON(o.order_id=c2o.order_id) WHERE c2o.customer_id='" . $partner_id . "'";
        
        if(!empty($filter_data['filter_custom_start']) && !empty($filter_data['filter_custom_end'])) {
            $sql .=" AND DATE(c2o.date_added) >= '".$this->db->escape($filter_data['filter_custom_start'])."' AND DATE(c2o.date_added) <= '".$this->db->escape($filter_data['filter_custom_end'])."'";
        }
        switch($group) {
            case 'day';
                $sql .= " GROUP BY DAY(c2o.date_added)";
                break;
            default:
            case 'week':
                $sql .= " GROUP BY WEEK(c2o.date_added)";
                break;
            case 'month':
                $sql .= " GROUP BY MONTH(c2o.date_added)";
                break;
            case 'year':
                $sql .= " GROUP BY YEAR(c2o.date_added)";
                break;
        }

        $sort_data = array(
         'c2o.date_added',
         'order_total',
         'admin_amount',
         'seller_amount',
         'shipping_total',
         'comission_applied',
		);


		if (isset($filter_data['sort']) && in_array($filter_data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $filter_data['sort'];
		} else {
			$sql .= " ORDER BY c2o.date_added";
		}

		if (isset($filter_data['order']) && ($filter_data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

        if($type) {
            $total = $this->db->query($sql)->rows;
            return count($total);
        }

        if (isset($filter_data['start']) || isset($filter_data['limit'])) {
            if ($filter_data['start'] < 0) {
                $filter_data['start'] = 0;
            }

            if ($filter_data['limit'] < 1) {
                $filter_data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$filter_data['start'] . "," . (int)$filter_data['limit'];
        }

        return $this->db->query($sql)->rows;  
    }
}

?>