<?php
class ControllerApiBanner extends Controller
{
    public function slideshow()
    {
        header("Access-Control-Allow-Origin: *"); 
        header("Access-Control-Allow-Headers: Content-Type, xocmerchantid");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        
        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $banner_id = isset($this->request->get['id']) ? (int)$this->request->get['id'] : 0;
        $banners = $this->model_design_banner->getBanner($banner_id);

        $images = array();

        foreach ($banners as $banner) {
            $images[] = [
                'title' => $banner['title'],
                'link'  => $banner['link'],
                'image' => $this->model_tool_image->resize($banner['image'], 800, 400) // Adjust size as needed
            ];
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($images));
    }
}
