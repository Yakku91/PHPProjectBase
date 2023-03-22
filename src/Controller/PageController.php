<?php
namespace MyVideo\Controller;
use MyVideo\Helper\View;
class PageController extends BaseController {

    public function showHomepage()
    {
        $view = new View();
        $view->render('homepage');
    }

}