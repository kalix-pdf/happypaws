<?php
class ModelGetReviews extends Model {
    public function getReviewsByProductId($product_id, $start = 0, $limit = 20) {
        if ($start < 0) $start = 0;
        if ($limit < 1) $limit = 20;

        // Step 1: Get base review info (excluding filenames)
        $review_query = $this->db->query("
            SELECT 
                r.review_id, 
                r.author, 
                r.rating, 
                r.text, 
                p.product_id, 
                pd.name, 
                p.price, 
                p.image, 
                r.date_added
            FROM " . DB_PREFIX . "review r
            LEFT JOIN " . DB_PREFIX . "product p ON (r.product_id = p.product_id)
            LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id)
            WHERE 
                p.product_id = '" . (int)$product_id . "'
                AND p.date_available <= NOW()
                AND p.status = '1'
                AND r.status = '1'
                AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
            ORDER BY r.date_added DESC
            LIMIT " . (int)$start . "," . (int)$limit);

        $reviews = $review_query->rows;

        if (!$reviews) {
            return [];
        }

        $review_ids = array_column($reviews, 'review_id');

        $attachment_query = $this->db->query("
            SELECT review_id, filename
            FROM review_attachments
            WHERE review_id IN (" . implode(',', array_map('intval', $review_ids)) . ")");

        $attachments_by_review = [];
        foreach ($attachment_query->rows as $row) {
            $attachments_by_review[$row['review_id']][] = $row['filename'];
        }

        // Step 5: Attach filename arrays to each review
        foreach ($reviews as &$review) {
            $review['filenames'] = $attachments_by_review[$review['review_id']] ?? [];
        }
        
        return $reviews;
    }

}