<?php

namespace app\controllers;

use app\models\Main;
use app\models\User;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * Description of Main
 *
 */
class MainController extends AppController{

    public function indexAction(){
//        $model = new Main;

//        $lang = App::$app->getProperty('lang')['code'];
//        $total = \R::count('posts', 'lang_code = ?', [$lang]);
//        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//        $perpage = 2;
//
//        $pagination = new Pagination($page, $perpage, $total);
//        $start = $pagination->getStart();
//
//        $posts = \R::findAll('posts', "lang_code = ? LIMIT $start, $perpage", [$lang]);
        $this->view = 'profile';

        $my_id = $uid = $_SESSION['user']['id'];
        $user = $cur_user = \R::load('user', $_SESSION['user']['id']);
        $user['avatar'] = 'dist/img/user2-160x160.jpg';

        View::setMeta('Профиль', 'Описание страницы', 'Ключевые слова');
        $this->set(compact('title', 'user', 'my_id', 'uid', 'cur_user'));
    }


    
    public function testAction(){
//        if($this->isAjax()){
//            $model = new Main();
//            $post = \R::findOne('posts', "id = {$_POST['id']}");
//            $this->loadView('_test', compact('post'));
//            die;
//        }
//        echo 222;
    }
    
}
