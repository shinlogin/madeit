<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shinlogin
 * Date: 10/29/12
 * Time: 3:20 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Backend\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndicesController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
