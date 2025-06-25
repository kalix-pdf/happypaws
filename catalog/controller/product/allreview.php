<?php
class ControllerProductAllReview extends Controller {
    public function index() {
        $this->load->language('product/product');
        $this->load->model('catalog/review');
        $product_id = isset($this->request->get['product_id']) ? (int)$this->request->get['product_id'] : 0;

        $page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
        $limit = 5;
        $start = ($page - 1) * $limit;

        $review_total = $this->model_catalog_review->getTotalReviewsByProductId($product_id);
        $results = $this->model_catalog_review->getReviewsByProductId($product_id, $start, $limit);

        $data['reviews'] = [];

        foreach ($results as $result) {
            $data['reviews'][] = [
                'author'     => $result['author'],
                'text'       => nl2br($result['text']),
                'rating'     => (int)$result['rating'],
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
            ];
        }

        $pagination = new Pagination();
        $pagination->total = $review_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('product/allreview', 'product_id=' . $product_id . '&page={page}');

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf(
            $this->language->get('text_pagination'),
            ($review_total) ? (($page - 1) * $limit) + 1 : 0,
            ((($page - 1) * $limit) > ($review_total - $limit)) ? $review_total : ((($page - 1) * $limit) + $limit),
            $review_total,
            ceil($review_total / $limit)
        );

        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('product/all_review', $data));
    }
}
