<?php 

class ContactUsController extends BaseController {

    public function __construct()
    {
    }

    public function index()
    {
        return $this->layout->nest('content', 'pages.contact_us');
    }
}