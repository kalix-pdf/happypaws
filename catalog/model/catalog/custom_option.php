<?php
class ModelCatalogCustomOption extends Model {
    public function getProductOption($product_id) 
    {
        $product_option_query = $this->db->query("SELECT * FROM custom_product_option WHERE 
            product_id = '" . (int)$product_id ."'");

        foreach ($product_option_query->rows as $product_option_data) {
            $product_option[] = array(
                'product_option_id' => $product_option_data['product_option_id'],
                'product_id' => $product_option_data['product_id'],
                'name' => $product_option_data['name'],
                'quantity' => $product_option_data['quantity'],
                'subtract' => $product_option_data['subtract'],
                'price' => $product_option_data['price'],
                'weight' => $product_option_data['weight']
            );
        }

        return $product_option;
    }
}