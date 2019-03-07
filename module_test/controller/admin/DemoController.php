<?php

namespace ModuleTest\Controller\Admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class DemoController extends FrameworkBundleAdminController {

    
    public function demoAction(){

        return $this->render('@Modules/module_test/views/templates/admin/demo.html.twig');
    }
}