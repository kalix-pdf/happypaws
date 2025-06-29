<?php
class ControllerProductAllReview extends Controller {
    public function index() {
        $this->load->language('product/product');
        $this->load->model('catalog/review');
        $this->load->model('catalog/product');
        $url = '';
        
        $product_id = isset($this->request->get['product_id']) ? (int)$this->request->get['product_id'] : 0;

        $product_info = $this->model_catalog_product->getProduct($product_id);

        $data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
        
        $data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

        $data['breadcrumbs'][] = array(
			'text' => "Reviews",
		);
        
		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($product_id);

		$results = $this->model_catalog_review->getReviewsByProductId($product_id, ($page - 1) * 3, 3);

		foreach ($results as $result) {
            $review_id = $result['review_id'];

			if (!isset($data['reviews'][$review_id])) {
                $data['reviews'][$review_id] = array(
                    'author'     => $result['author'],
                    'text'       => nl2br($result['text']),
                    'rating'     => (int)$result['rating'],
                    'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                    'filenames'  => array()
                );
            }
            if (!empty($result['filename'])) {
                $data['reviews'][$review_id]['filenames'][] = $result['filename'];
            }
        }

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 3;
		$pagination->url = $this->url->link('product/allreview', 'product_id=' . $product_id . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));
       
		if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && $this->request->server['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
           $this->response->setOutput($this->load->view('product/all_review_partial', $data));
        } else {
            // Normal full page request
            $data['header'] = $this->load->controller('common/header');
            $data['footer'] = $this->load->controller('common/footer');
            $this->response->setOutput($this->load->view('product/all_review', $data));
        }

    }
}
