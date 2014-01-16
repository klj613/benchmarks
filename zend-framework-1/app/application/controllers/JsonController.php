<?php

class JsonController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->layout()->disableLayout();
        $data = array(
            'json' => 'is',
            'better' => 'than',
            'xml' => 'most',
            'of' => 'the',
            'time' => '.'
        );

        $this->getResponse()->setBody(json_encode($data))->setHeader('Content-Type', 'application/json', true);
        return;
    }


}

