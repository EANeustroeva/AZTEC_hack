<?php


namespace app\controllers;


class CompsController extends AppController {

    public function indexAction() {
//        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Компетенции');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['comps'] = \R::getAll('select * from complist');

        $napr_list = ['1' => "Бизнес-информатика", '2' => "Гостиничное дело", '3' => "Государственное и муниципальное управление", '4' => "Землеустройство и кадастры", '5' => "Информатика и вычислительная техника", '6' => "Менеджмент", '7' => "Прикладная информатика", '8' => "Продукты питания из растительного сырья", '9' => "Технология продукции и организация общественного питания", '10' => "Товароведение", '11' => "Торговое дело", '12' => "Туризм", '13' => "Управление качеством", '14' => "Управление персоналом", '15' => "Экономика", '16' => "Юриспруденция",];

        foreach ($data['comps'] as $k=>$item) {
            $napr = \R::getAssoc("select id,napr_id from compnapr where comp_id=? order by napr_id",[$item['id']]);
//            dd($data);
            foreach ($napr as &$value) $value = '<span style="cursor: pointer" title="'.$napr_list[$value].'" class="label label-success">'.$napr_list[$value].'</span>';//$napr_list[$value];
            $data['comps'][$k]['napr'] = (!empty($napr)) ? implode(' ',$napr) : 'Не выбрано';
        }
        if (isset($_GET['dd'])) dd($data['comps']);
        $this->set($data);
    }

    public function editAction() {
//        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Компетенции');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['comp'] = \R::findOne('complist','id=?',[$_GET['id']]);
//        $napr_list = \R::getAssoc("SELECT napr_post FROM users WHERE napr_post!='' ORDER BY napr_post");
        $napr_list = ['1' => "Бизнес-информатика", '2' => "Гостиничное дело", '3' => "Государственное и муниципальное управление", '4' => "Землеустройство и кадастры", '5' => "Информатика и вычислительная техника", '6' => "Менеджмент", '7' => "Прикладная информатика", '8' => "Продукты питания из растительного сырья", '9' => "Технология продукции и организация общественного питания", '10' => "Товароведение", '11' => "Торговое дело", '12' => "Туризм", '13' => "Управление качеством", '14' => "Управление персоналом", '15' => "Экономика", '16' => "Юриспруденция",];


        $napr_ids = \R::getAssoc("select id,napr_id from compnapr where comp_id = ?",[$_GET['id']]);
        $list_napr = '';

        foreach ($napr_list as $k => $item) {
            $sel = (in_array($k, $napr_ids)) ? ' selected' : '';
            $list_napr .= '<option' . $sel . ' value="'. $k .'">' . $item . '</option>';
        }
        $data['list_napr'] = $list_napr;
//        dd($napr_list);
        $this->set($data);
    }

    public function discsAction() {
        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Компетенции');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;

        $discs = $discs2 = [];
        $p = \R::getAssoc('select disc from compdisc');
        foreach ($p as $item) $discs = array_merge($discs, explode('|', $item));
        $discs = array_unique(array_filter($discs, function($value) { return $value !== ''; }));
        $p2 = array_values(\R::getAssoc('select disc from plan where class like "%18%" and s1 != "0|0|0|0|0|0|0|0|0"'));
        foreach ($p2 as $item) {
            $parse = explode('|',$item);
            if ( ( (int)$parse[5] == 0 && (int)$parse[7] == 0 ) ) $discs2[] = $item;
        }
        sort($discs);
        sort($discs2);
        $data['discs'] = $discs;
        $data['discs2'] = $discs2;

        $this->set($data);
    }

    public function discsaveAction() {
        $tests = $_POST['tests'];
        $t = [];
        foreach ($_POST['disc'] as $id => $test) $t[$id] = isset($tests[$id]) ? implode(',',$tests[$id]) : '';
        $comp = \R::findOne('compdisc','id=?',[$_POST['id']]);
        $comp->comp = implode('|',$_POST['comp']);
        $comp->disc = implode('|',$_POST['disc']);
        $comp->tests = implode('|',$t);
        $comp->att = str_replace("\r\n",'|', $_POST['att']);
        $comp->caftext = $_POST['caftext'];
        $comp->cafname = $_POST['cafname'];
        \R::store($comp);
        $_SESSION['info_msg'][] = 'Успешно сохранено!';
        redirect();
    }

    public function saveAction() {
        if (!empty($_POST['id'])) $comp = \R::findOne('complist',"id=?",[$_POST['id']]);
        else $comp = \R::dispense('complist');
        $comp->short_val = $_POST['short_val'];
        $comp->val = $_POST['val'];
        $comp->type = $_POST['type'];
        $comp->course = $_POST['course'];
        \R::store($comp);

        $napr_list = ['1' => "Бизнес-информатика", '2' => "Гостиничное дело", '3' => "Государственное и муниципальное управление", '4' => "Землеустройство и кадастры", '5' => "Информатика и вычислительная техника", '6' => "Менеджмент", '7' => "Прикладная информатика", '8' => "Продукты питания из растительного сырья", '9' => "Технология продукции и организация общественного питания", '10' => "Товароведение", '11' => "Торговое дело", '12' => "Туризм", '13' => "Управление качеством", '14' => "Управление персоналом", '15' => "Экономика", '16' => "Юриспруденция",];
        if (empty($_POST['napr'])) {
            $find = \R::findAll('compnapr','comp_id='.$comp->id);
            if ($find) \R::trashAll($find);
        } else {
            $find = \R::findAll('compnapr','comp_id='.$comp->id.' and napr_id not in ('.\R::genSlots($_POST['napr']).')',$_POST['napr']);
            if ($find) \R::trashAll($find);
            foreach ($_POST['napr'] as $item) {
                $rel = \R::findOne('compnapr','comp_id=? and napr_id=?',[$comp->id, $item]);
                if(!$rel) {
                    $napr = \R::dispense('compnapr');
                    $napr->comp_id = $comp->id;
                    $napr->napr_id = $item;
                    \R::store($napr);
                }
            }
        }
        redirect('/comps/');
        die;
    }

    public function deleteAction() {
        if (!empty($_GET['id'])) {
            \R::trash('complist', $_GET['id']);
        }
        redirect('/comps/');
        die;
    }

    public function profileAction() {
        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Компетенции');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['profs'] = \R::getAll('select * from compdisc');

        $napr_list = ['1' => "Бизнес-информатика", '2' => "Гостиничное дело", '3' => "Государственное и муниципальное управление", '4' => "Землеустройство и кадастры", '5' => "Информатика и вычислительная техника", '6' => "Менеджмент", '7' => "Прикладная информатика", '8' => "Продукты питания из растительного сырья", '9' => "Технология продукции и организация общественного питания", '10' => "Товароведение", '11' => "Торговое дело", '12' => "Туризм", '13' => "Управление качеством", '14' => "Управление персоналом", '15' => "Экономика", '16' => "Юриспруденция",];

        foreach ($data['profs'] as $k=>$item) {
            $comps = explode('|', $item['comp']);
            $discs = explode('|', $item['disc']);
            $tests = explode('|', $item['tests']);
            foreach ($comps as $kk=>$ii) {
                $test = !empty($tests[$kk]) ? " <span class='label label-success'>тест</span>" : '';
                $comps[$kk] = "<li>{$discs[$kk]}: <span class='label label-primary'>{$ii}</span>{$test}</li>";
            }
            $comps = implode('', $comps);
            $data['profs'][$k]['comps'] = $comps;
            $class = \R::getAssoc(" select class from classprof where prof=? and course=?",[$item['prof'],$item['course']]);
            $data['profs'][$k]['class'] = implode(', ', $class);
        }
        $this->set($data);
    }

    public function profeditAction() {
        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Компетенции');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['profs'] = $item = \R::findOne('compdisc','id=?',[$_GET['id']]);

        $napr_list = ['1' => "Бизнес-информатика", '2' => "Гостиничное дело", '3' => "Государственное и муниципальное управление", '4' => "Землеустройство и кадастры", '5' => "Информатика и вычислительная техника", '6' => "Менеджмент", '7' => "Прикладная информатика", '8' => "Продукты питания из растительного сырья", '9' => "Технология продукции и организация общественного питания", '10' => "Товароведение", '11' => "Торговое дело", '12' => "Туризм", '13' => "Управление качеством", '14' => "Управление персоналом", '15' => "Экономика", '16' => "Юриспруденция",];

        $comps = explode('|', $item['comp']);
        $discs = explode('|', $item['disc']);
        $tests = explode('|', $item['tests']);

        $test_opt = \R::getAssoc("select id, title from tests where type=1");

        foreach ($discs as $kk=>$ii) {
            $discs[$kk] = "<input class='form-control' type='text' name='disc[{$kk}]' value='{$ii}' />";
            $val = !empty($comps[$kk]) ? $comps[$kk] : '';
            $comps[$kk] = "<input class='form-control' type='text' name='comp[{$kk}]' value='{$val}' />";
            $vals = !empty($tests[$kk]) ? explode(',',$tests[$kk]) : [];

            $test_list = '<select name="tests['.$kk.'][]" class="selectpicker form-control" multiple data-size="8" data-live-search="true" data-selected-text-format="count > 1">';
            foreach ($test_opt as $k=>$item) {
                $sel = in_array($k,$vals) ? ' selected': '';
                $test_list .= '<option value="'.$k.'" '.$sel.'>'.$item.'</option>';
            }
            $test_list .= '</select>';
            $tests[$kk] = $test_list;
//            $tests[$kk] = "<input class='form-control' type='text' name='tests[{$kk}]' value='{$val}' />";
        }

//        $comps = implode('', $comps);
        $data['comps'] = $comps;
        $data['discs'] = $discs;
        $data['tests'] = $tests;
        $this->set($data);
    }

    public function profsaveAction() {
        $tests = $_POST['tests'];
        $t = [];
        foreach ($_POST['disc'] as $id => $test) $t[$id] = isset($tests[$id]) ? implode(',',$tests[$id]) : '';
        $comp = \R::findOne('compdisc','id=?',[$_POST['id']]);
        $comp->comp = implode('|',$_POST['comp']);
        $comp->disc = implode('|',$_POST['disc']);
        $comp->tests = implode('|',$t);
        $comp->att = str_replace("\r\n",'|', $_POST['att']);
        $comp->caftext = $_POST['caftext'];
        $comp->cafname = $_POST['cafname'];
        \R::store($comp);
        $_SESSION['info_msg'][] = 'Успешно сохранено!';
        redirect();
    }

    public function classAction() {
        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Соответствие групп');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['classad'] = \R::getAll('select * from classad');
        $data['count'] = \R::count('users',"name IS NOT NULL AND class IS NOT NULL and login is null and access=4");
        $this->set($data);
    }

    public function classesAction() {
//         ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
        $ad = new \Adldap\Adldap();
        $config = [
            'domain_controllers'    => ['ldap.usue.ru'],
            'base_dn'               => 'dc=usue,dc=ru',
            'admin_username'        => 'inoonline_dev@usue.ru',
            'admin_password'        => 'rheukzi35%^',
        ];
        $ad->addProvider($config);
        $provider = $ad->connect();
        $bean = \R::findAll("users", "name IS NOT NULL AND class IS NOT NULL and login is null and access=4");
//        dd($bean);
        $err = [];
        foreach ($bean as $item) {
            try {
                $class = \R::findOne('classad','classedu=?',[$item['class']]);
                $class = ($class) ? $class->classad : $item['class'] ;
                $rawResults = $provider->search()->select(['cn', 'samaccountname','studgroupname'])->raw()
                    ->where('cn', '=', $item['name'])
//                    ->where('studgroupname', '=', $item['Gruppa'])
                    ->where('studgroupname', '=', $class)
                    ->get();

                if ($rawResults['count'] == 1) {
                    $item->login = $rawResults[0]['samaccountname'][0];
                    \R::store($item);
                } else {
//                    $err[] = $item;
//                    $this->tree($rawResults);
                }
//                $this->tree($rawResults);
//                dump($rawResults);
//                if (!empty($rawResults[0]['samaccountname'][0])) {
//                    $item->login = $rawResults[0]['samaccountname'][0];
//                    \R::store($item);
//                    die;
//                }
                unset($rawResults);
            } catch (\Adldap\Auth\BindException $e) {
                echo 'There was an issue binding / connecting to the server.';
            }
        }
        $this->printErr();
        die();
    }

    public function printErr() {
        ini_set('max_execution_time', 9000);
        $html = '';
        $class = \R::getAssoc("select distinct class from users where access=4 and login is null and class is not null");
        $html = '';
        foreach ($class as $cl) {
            $html .= "<h3>{$cl}</h3>";
            $users = \R::findAll('users',"access=4 and login is null and class=?",[$cl]);
            $html .= '<table border=1 cellspacing=0 cellpadding=1 style="font-size: 14px;"><tr><thead>
<th width="10%">#</th>
<th width="40%">ФИО</th>
<th>Логин AD</th>
<th></th></thead>
</tr><tbody>';
            $ct = 0;
            foreach ($users as $user) {
                $ct++;
                $html .= "<tr>";
                $html .= "<td>{$ct}</td>";
                $html .= "<td>{$user->name}</td>";
                $html .= "<td>{$user->login}</td>";
                $html .= "<td> </td>";
                $html .= "</tr>";
            }
            $html .= "</tbody></table><br>";
        }

        require_once LIBS . '/../phpdocx/phpdocx/Classes/Phpdocx/Create/CreateDocx.inc';
        $docx = new \Phpdocx\Create\CreateDocx();
        $options = [
            'parseDivsAsPs'  => true,
            'baseURL'        => 'http://en.wikipedia.org/',
            'downloadImages' => true,
            'parseFloats' => true,
            'marginTop' => '571', 'marginRight' => '571', 'marginBottom' => '571', 'marginLeft' => '571'
        ];
        $docx->modifyPageLayout('A4', ['marginTop' => '571', 'marginRight' => '571', 'marginBottom' => '571', 'marginLeft' => '571',]);
        $docx->embedHTML($html,$options);
        $docx->createDocxAndDownload ('Login_Errors', true);
        die;
    }

    public function classeditAction() {
        // ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
        if ($this->cur_user->access != 1) redirect();
        $data = $this->data;
        $this->setMeta('Соответствие групп');
        $data['menu'] = $this->menu;
        $data['meta'] = $this->meta;
        $data['classad'] = \R::findOne('classad', "id=?", [$_GET['id']]);
        $this->set($data);
    }

    public function classsaveAction() {
        if ($this->cur_user->access != 1) redirect();
        if (!empty($_POST['id'])) $class = \R::findOne('classad','id=?',[$_POST['id']]);
        else $class = \R::dispense('classad');
        $class->classedu = $_POST['classedu'];
        $class->classad = $_POST['classad'];
        \R::store($class);
        $_SESSION['info_msg'][] = 'Успешно сохранено!';
        redirect();
    }

    public function tree($entries = []) {
        if ($entries['count'] > 0){
            $odd = 0;
            foreach ($entries[0] AS $key => $value){
                if (0 === $odd%2){
                    $ldap_columns[] = $key;
                }
                $odd++;
            }
            echo '<table class="data" cellspacing="2" border="1" cellpadding="5" width="600">';
            echo '<tr>';
            $header_count = 0;
            foreach ($ldap_columns AS $col_name){
                if (0 === $header_count++){
                    echo '<th class="ul">';
                }else if (count($ldap_columns) === $header_count){
                    echo '<th class="ur">';
                }else{
                    echo '<th class="u">';
                }
                echo $col_name .'</th>';
            }
            echo '</tr>';
            for ($i = 0; $i < $entries['count']; $i++){
                echo '<tr>';
                $td_count = 0;
                foreach ($ldap_columns AS $col_name){
                    if (0 === $td_count++){
                        echo '<td class="l">';
                    }else{
                        echo '<td>';
                    }
                    if (isset($entries[$i][$col_name])){
                        $output = NULL;
                        if ('lastlogon' === $col_name || 'lastlogontimestamp' === $col_name){
                            $output = date('D M d, Y @ H:i:s', ($entries[$i][$col_name][0] / 10000000) - 11676009600);
                        }else{
                            $output = $entries[$i][$col_name][0];
                        }
                        echo $output .'</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table><br>';
        }
    }
}