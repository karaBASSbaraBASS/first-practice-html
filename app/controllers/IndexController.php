<?php

/**
 * Class IndexController
 * Контроллер главной страницы
 */
class IndexController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function actionIndex () {
        $data['title'] = 'Welcome To ';
        $this->_view->rendertemplate('header',$data);
        $this->_view->render('index/index',$data);
        $this->_view->rendertemplate('footer',$data);

    }

}
