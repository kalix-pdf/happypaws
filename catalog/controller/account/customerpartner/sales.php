<?php
require_once DIR_SYSTEM . 'ocMpTrait.php';

class ControllerAccountCustomerpartnerSales extends Controller
{
    use OcMpTrait;

    private $error = array();
    private $data = array();

    public function index()
    {
        $this->checkMpModuleStatus();

        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/customerpartner/sales', '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->model('account/customerpartner');

        $this->data['chkIsPartner'] = $this->model_account_customerpartner->chkIsPartner();

        if (!$this->data['chkIsPartner'] || (isset($this->session->data['marketplace_seller_mode']) && !$this->session->data['marketplace_seller_mode'])) {
            $this->response->redirect($this->url->link('account/account', '', true));
        }

        $this->getList();
    }

    protected function getList()
    {

        $this->language->load('account/customerpartner/sales');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('customerpartner/dashboard');

        $this->data['breadcrumbs'] = array();

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_home'),
            'href'      => $this->url->link('common/home', '', true),
            'separator' => false
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('text_account'),
            'href'      => $this->url->link('account/account', '', true),
            'separator' => $this->language->get('text_separator')
        );

        $this->data['breadcrumbs'][] = array(
            'text'      => $this->language->get('heading_title'),
            'href'      => $this->url->link('account/customerpartner/sales', '', true),
            'separator' => $this->language->get('text_separator')
        );

        // no filter

        $paid_amount = $this->model_customerpartner_dashboard->getPaidAmount();

        $sales = $this->model_customerpartner_dashboard->getTotalSales();

        $sale_total     = isset($sales['total']) ? (float)$sales['total'] : 0;

        $admin_amount     = isset($sales['admin']) ? (float)$sales['admin'] : 0;
        $seller_amount     = isset($sales['seller']) ? (float)$sales['seller'] : 0;

        if ($paid_amount) {
            $payable_amount = round($sales['total'] - ($paid_amount + $sales['admin']), 2);
            $payable_amount = $payable_amount;
        } else {
            if (isset($sales['seller']) && $sales['seller']) {
                $payable_amount = $sales['seller'];
            } else {
                $payable_amount = 0;
            }
        }

        $paid_amount = $paid_amount;

        if ($sale_total > 1000000000000) {
            $data['total'] = round($sale_total / 1000000000000, 2) . 'T';
        } elseif ($sale_total > 1000000000) {
            $data['total'] = round($sale_total / 1000000000, 2) . 'B';
        } elseif ($sale_total > 1000000) {
            $data['total'] = round($sale_total / 1000000, 2) . 'M';
        } elseif ($sale_total > 1000) {
            $data['total'] = round($sale_total / 1000, 2) . 'K';
        } else {
            $data['total'] = round($sale_total, 2);
        }

        if ($admin_amount > 1000000000000) {
            $data['admin_amount'] = round($admin_amount / 1000000000000, 2) . 'T';
        } elseif ($admin_amount > 1000000000) {
            $data['admin_amount'] = round($admin_amount / 1000000000, 2) . 'B';
        } elseif ($admin_amount > 1000000) {
            $data['admin_amount'] = round($admin_amount / 1000000, 2) . 'M';
        } elseif ($admin_amount > 1000) {
            $data['admin_amount'] = round($admin_amount / 1000, 2) . 'K';
        } else {
            $data['admin_amount'] = round($admin_amount, 2);
        }

        if ($seller_amount > 1000000000000) {
            $data['seller_amount'] = round($seller_amount / 1000000000000, 2) . 'T';
        } elseif ($seller_amount > 1000000000) {
            $data['seller_amount'] = round($seller_amount / 1000000000, 2) . 'B';
        } elseif ($seller_amount > 1000000) {
            $data['seller_amount'] = round($seller_amount / 1000000, 2) . 'M';
        } elseif ($seller_amount > 1000) {
            $data['seller_amount'] = round($seller_amount / 1000, 2) . 'K';
        } else {
            $data['seller_amount'] = round($seller_amount, 2);
        }

        if ($payable_amount > 1000000000000) {
            $data['payable_amount'] = round($payable_amount / 1000000000000, 2) . 'T';
        } elseif ($payable_amount > 1000000000) {
            $data['payable_amount'] = round($payable_amount / 1000000000, 2) . 'B';
        } elseif ($payable_amount > 1000000) {
            $data['payable_amount'] = round($payable_amount / 1000000, 2) . 'M';
        } elseif ($payable_amount > 1000) {
            $data['payable_amount'] = round($payable_amount / 1000, 2) . 'K';
        } else {
            $data['payable_amount'] = round($payable_amount, 2);
        }

        if ($paid_amount > 1000000000000) {
            $data['paid_amount'] = round($paid_amount / 1000000000000, 2) . 'T';
        } elseif ($paid_amount > 1000000000) {
            $data['paid_amount'] = round($paid_amount / 1000000000, 2) . 'B';
        } elseif ($paid_amount > 1000000) {
            $data['paid_amount'] = round($paid_amount / 1000000, 2) . 'M';
        } elseif ($paid_amount > 1000) {
            $data['paid_amount'] = round($paid_amount / 1000, 2) . 'K';
        } else {
            $data['paid_amount'] = round($paid_amount, 2);
        }

        $this->data['paid_link'] = $this->url->link('account/customerpartner/transaction', '', true);
        $this->data['sale'] = $this->url->link('account/customerpartner/income', '&sort=c2o.date_added&order=DESC&filter_display_type=order&filter_display_group=year&dashboard=wk_filter', true);
        $this->data['sales'] = [
            'total'     =>  $data['total'],
            'seller'    =>  $data['seller_amount'],
            'admin'     =>  $data['admin_amount'],
            'paid'      =>  $data['paid_amount'],
            'unpaid'    =>  $data['payable_amount']
        ];

        $this->data['isMember'] = true;
        if ($this->config->get('module_wk_seller_grouper_group_status')) {
            $this->data['module_wk_seller_grouper_group_status'] = true;
            $this->load->model('account/customer_group');
            $isMember = $this->model_account_customer_group->getSellerMembershipGroup($this->customer->getId());
            if ($isMember) {
                $allowedAccountMenu = $this->model_account_customer_group->getaccountMenu($isMember['gid']);
                if ($allowedAccountMenu['value']) {
                    $accountMenu = explode(',', $allowedAccountMenu['value']);
                    if ($accountMenu && !in_array('sales:sales', $accountMenu)) {
                        $this->data['isMember'] = false;
                    }
                }
            } else {
                $this->data['isMember'] = false;
            }
        } else {
            if (!is_array($this->config->get('marketplace_allowed_account_menu')) || !in_array('sales', $this->config->get('marketplace_allowed_account_menu'))) {
                $this->response->redirect($this->url->link('account/account', '', true));
            }
        }

        $this->data['current'] = $this->url->link('account/customerpartner/sales');

        $this->data['column_left'] = $this->load->controller('common/column_left');
        $this->data['column_right'] = $this->load->controller('common/column_right');
        $this->data['content_top'] = $this->load->controller('common/content_top');
        $this->data['content_bottom'] = $this->load->controller('common/content_bottom');
        $this->data['footer'] = $this->load->controller('common/footer');
        $this->data['header'] = $this->load->controller('common/header');

        $this->data['separate_view'] = false;

        $this->data['separate_column_left'] = '';

        if ($this->config->get('marketplace_separate_view') && isset($this->session->data['marketplace_separate_view']) && $this->session->data['marketplace_separate_view'] == 'separate') {
            $this->data['separate_view'] = true;
            $this->data['column_left'] = '';
            $this->data['column_right'] = '';
            $this->data['content_top'] = '';
            $this->data['content_bottom'] = '';
            $this->data['separate_column_left'] = $this->load->controller('account/customerpartner/column_left');
            $this->data['footer'] = $this->load->controller('account/customerpartner/footer');
            $this->data['header'] = $this->load->controller('account/customerpartner/header');
        }

        $this->response->setOutput($this->load->view('account/customerpartner/total_sales', $this->data));
    }
}
