<?php
namespace MyVideo\Controller;
use MyVideo\Helper\Request;
class BaseController
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
