<div class="col-sm-12">

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="row">
                <div class="bs">
                    <img id="id_avatar" class="img-responsive" src="<?= $user['avatar'] ?>"/>
                    <span style="font-size:12px; color:#777;text-align: center;width: 100%;display: block; padding-top: 1em"><?php
                        switch ($user['role']) {
                            case 'abiturient': echo 'Участник'; break;
                            case 'student': echo "Студент"; break;
                            case 'prepod': echo "Преподаватель"; break;
                            case 'admin': echo "Администратор"; break;
                            case 'expert': echo "Эксперт"; break;
                            case 'manager': echo "Менеджер"; break;
                        }
                        ?></span>
                    <?php if ($my_id): ?>
                        <?php if ($uid == $my_id): ?>
                            <div id="id_modal_avatar" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                                                    style="font-size:18px;">&times;
                                            </button>

                                            <h4 class="modal-title" id="myModalLabel">Загрузите новое фото</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div id="id_preload_ava" class="col-md-3"
                                                     style="text-align:center; padding-bottom:20px;"></div>
                                                <div class="col-sm-9" id="id_upload_ava"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"
                                                    onClick="del_avatar();">Удалить фото
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            <a href="--><? //= BASE_URL . 'edit' ?><!--" class="btn btn-primary" style="width: 100%;">Изменить</a>-->
                        <?php endif; ?>
                        <?php if ($uid !== $my_id): ?>

                            <button type="button" class="btn btn-primary" style="margin: 5px 0 0;width: 100%;"
                                    data-toggle="modal" data-target="#myModal<?= $user['id'] ?>">Написать
                            </button>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (!$my_id): ?>
                        <a href="/<?php echo $link[3]; ?>">
                            <button type="button" class="btn btn-primary"
                                    style="width:100%;"><?php echo $lang[137]; ?></button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="bs" style="margin-right: -15px">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 style="margin: 0;"><?= $user->name; ?></h4>
                        <hr>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-xs-5">
                                <p style="color:#999;">Телефон:</p>
                                <p style="color:#999;">Email:</p>
                            </div>
                            <div class="col-xs-7">
                                <p><?= $user->phone ?: 'Не указан' ?></p>
                                <p><?= $user->email ?: 'Не указан' ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h6><b>Учебные данные:</b></h6>
                        <hr>
                        <div class="row">
                            <div class="col-xs-5">
                                <p style="color:#999;">Группа:</p>
                            </div>
                            <div class="col-xs-7">
                                <p><?php echo @$user->class; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5">
                                <p style="color:#999;">Курс:</p>
                            </div>
                            <div class="col-xs-7">
                                <p><?php echo @$user->course; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5">
                                <p style="color:#999;">Семестр:</p>
                            </div>
                            <div class="col-xs-7">
                                <p><?php echo @$user->sem; ?></p>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 1em;">
                            <div class="col-xs-5">
                                <p style="color:#999;">Статус оплаты:</p>
                            </div>
                            <div class="col-xs-7"><div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>Оплачено</div></div>
                        </div>
                    </div>
                    <div id="dopinfa" style="display: none">
                        <div class="col-sm-12">
                            <h6><b>Персональные данные:</b></h6>
                            <hr>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">Пол:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?= @$user->sex ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">День рождения:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?= @$user->birthday ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h6><b>Образование:</b></h6>
                            <hr>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">Специальность:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?= @$user->start_obr_spec ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">Форма обучения:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?= @$user->forma_obuch ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">Иностранный язык:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?php
                                        if (is_null($user->fl)) echo $user->foreign_language ?: 'Не указан';
                                        else {
                                            switch ($user->fl) {
                                                case 7:
                                                    echo 'Английский';
                                                    break;
                                                case 8:
                                                    echo 'Немецкий';
                                                    break;
                                                case 9:
                                                    echo 'Французский';
                                                    break;
                                            }
                                        }
                                        ?></p>
                                </div>
                            </div>
                            <?php if ($user->napr_post): ?>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <p style="color:#999;">Направление:</p>
                                    </div>
                                    <div class="col-xs-7">
                                        <p><?= @$user->napr_post ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-xs-5">
                                    <p style="color:#999;">Срок обучения:</p>
                                </div>
                                <div class="col-xs-7">
                                    <p><?= @$user->srok_obuch ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button id="dopinfatoggle" class="form-control">Дополнительная информация</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    </div>-->
</div>

<div class="col-sm-12">
    <div class="row">
    <div id="port-discs" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">


            <div class="item active">
                <h3 class="text-center">Предметы на 1 семестр</h3>

                <h4 class="text-center">Контрольные работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Бухгалтерский учет">
                                    Бухгалтерский учет                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Высшая математика (Линейная алгебра)">
                                    Высшая математика (Линейная алгебра)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">атт:<b>5</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Высшая математика (Математический анализ)">
                                    Высшая математика (Математический анализ)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Менеджмент">
                                    Менеджмент                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Мельчекова Ольга Георгиевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Микроэкономика">
                                    Микроэкономика                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Илюхин Алексей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Психология и педагогика">
                                    Психология и педагогика                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Качалова Наталья Германовна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Экономика организации">
                                    Экономика организации                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Черепанова Татьяна Геннадьевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    </tbody>
                </table>


                <h4 class="text-center">Дополнительные учебные материалы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Безопасность жизнедеятельности">
                                    Безопасность жизнедеятельности                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Введение в экономику и организация НИР">
                                    Введение в экономику и организация НИР                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Иностранный язык">
                                    Иностранный язык                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Информатика">
                                    Информатика                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="История">
                                    История                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Политология">
                                    Политология                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Трофимов Андрей Владимирович</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Практика по получению первичных профессиональных умений и навыков, в том числе первичных умений и навыков научно-исследовательской деятельности">
                                    Практика по получению первичных профессиональных умений и навыков, в том числе первичных умений и навыков научно-исследовательской деятельности                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Физическая культура и спорт">
                                    Физическая культура и спорт                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="1">
                                <button class="btn-link text-left" name="disc" value="Философия">
                                    Философия                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    </tbody>
                </table>

            </div>


            <div class="item">
                <h3 class="text-center">Предметы на 2 семестр</h3>

                <h4 class="text-center">Контрольные работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Высшая математика(Методы оптимальных решений)">
                                    Высшая математика(Методы оптимальных решений)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Высшая математика(Теория вероятностей и математическая статистика)">
                                    Высшая математика(Теория вероятностей и математическая статистика)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Макроэкономика">
                                    Макроэкономика                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Илюхин Алексей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Статистика и эконометрика(Статистика)">
                                    Статистика и эконометрика(Статистика)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Козлова Мария Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Теория экономического анализа">
                                    Теория экономического анализа                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Перминова Ирина Михайловна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Финансы">
                                    Финансы                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Авдеев Павел Андреевич</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Курсовые работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <!--                        <th style="width: 10%;">Семестр</th>-->
                        <th style="width: 35%;">Предмет</th>
                        <th style="width: 40%;">Руководитель</th>
                        <th style="width: 15%;">Оценка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <!--                            <td>--><!--?//= $item['sem'] ?--><!--</td>-->
                        <td class="text-left">
                            <form action="/curstasks" method="post" target="_blank">
                                <input type="hidden" name="sem" value="2">
                                <button class="btn-link text-left" name="disc" value="Финансовый учет">Финансовый учет</button>
                            </form>
                        </td>
                        <td class="text-left">Поведишникова Светлана Викторовна</td>
                        <td class="text-left"></td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Дополнительные учебные материалы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="2">
                                <button class="btn-link text-left" name="disc" value="Управленческий учет">
                                    Управленческий учет                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Буянова Татьяна Игоревна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>


            <div class="item">
                <h3 class="text-center">Предметы на 3 семестр</h3>

                <h4 class="text-center">Контрольные работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Деньги, кредит, банки">
                                    Деньги, кредит, банки                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Пищулов Виктор Михайлович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="История и перспективы развития анализа и аудита">
                                    История и перспективы развития анализа и аудита                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Маркетинг">
                                    Маркетинг                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Попова Ольга Ивановна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Мировая экономика и международные экономические отношения">
                                    Мировая экономика и международные экономические отношения                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Сухих Василий Валентинович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Правоведение">
                                    Правоведение                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Митцукова Гелена Алексеевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Статистика и эконометрика(Эконометрика)">
                                    Статистика и эконометрика(Эконометрика)                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Кокорина Елена Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Управленческий анализ хозяйственной деятельности">
                                    Управленческий анализ хозяйственной деятельности                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Надольская Нина Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Курсовые работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <!--                        <th style="width: 10%;">Семестр</th>-->
                        <th style="width: 35%;">Предмет</th>
                        <th style="width: 40%;">Руководитель</th>
                        <th style="width: 15%;">Оценка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <!--                            <td>--><!--?//= $item['sem'] ?--><!--</td>-->
                        <td class="text-left">
                            <form action="/curstasks" method="post" target="_blank">
                                <input type="hidden" name="sem" value="3">
                                <button class="btn-link text-left" name="disc" value="Управленческий учет">Управленческий учет</button>
                            </form>
                        </td>
                        <td class="text-left">Матвеева Виолета Стасио</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">курсовая:<b>3</b></span> </td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Дополнительные учебные материалы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <button class="btn-link text-left" name="disc" value="Базы данных">
                                    Базы данных                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Зубкова Екатерина Владимировна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <button class="btn-link text-left" name="disc" value="Бухгалтерская (финансовая) отчетность и МСФО">
                                    Бухгалтерская (финансовая) отчетность и МСФО                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Буянова Татьяна Игоревна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <button class="btn-link text-left" name="disc" value="Деловая этика">
                                    Деловая этика                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шуталева Анна Владимировна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="3">
                                <button class="btn-link text-left" name="disc" value="Элективные курсы по физической культуре и спорту">
                                    Элективные курсы по физической культуре и спорту                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Воловик Татьяна Владимировна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>


            <div class="item">
                <h3 class="text-center">Предметы на 4 семестр</h3>

                <h4 class="text-center">Контрольные работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Лабораторный практикум по бухгалтерскому учету">
                                    Лабораторный практикум по бухгалтерскому учету                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Девятова Татьяна Юрьевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Налоговый учет">
                                    Налоговый учет                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Попов Алексей Юрьевич</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Налоговый учет и отчетность доходов физических лиц">
                                    Налоговый учет и отчетность доходов физических лиц                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Матвеева Виолета Стасио</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Ответственность за экономические правонарушения">
                                    Ответственность за экономические правонарушения                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Кожевников Олег Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Страхование">
                                    Страхование                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Разумовская Елена Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Судебно-бухгалтерская экспертиза">
                                    Судебно-бухгалтерская экспертиза                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Козырчикова Эльвира Юрьевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Учет и анализ внешнеэкономической деятельности">
                                    Учет и анализ внешнеэкономической деятельности                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Надольская Нина Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Финансовый менеджмент">
                                    Финансовый менеджмент                                                                                            <i class="glyphicon glyphicon-film"></i>
                                </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Ростовцев Константин Викторович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="4">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Элективные курсы по физической культуре и спорту">
                                    Элективные курсы по физической культуре и спорту                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Садков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>на дораб.</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Курсовые работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <!--                        <th style="width: 10%;">Семестр</th>-->
                        <th style="width: 35%;">Предмет</th>
                        <th style="width: 40%;">Руководитель</th>
                        <th style="width: 15%;">Оценка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <!--                            <td>--><!--?//= $item['sem'] ?--><!--</td>-->
                        <td class="text-left">
                            <form action="/curstasks" method="post" target="_blank">
                                <input type="hidden" name="sem" value="4">
                                <button class="btn-link text-left" name="disc" value="Бухгалтерская (финансовая) отчетность и МСФО">Бухгалтерская (финансовая) отчетность и МСФО</button>
                            </form>
                        </td>
                        <td class="text-left">Власова Ирина Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">курсовая:<b>5</b></span> </td>
                    </tr>
                    </tbody>
                </table>


            </div>


            <div class="item">
                <h3 class="text-center">Предметы на 5 семестр</h3>

                <h4 class="text-center">Контрольные работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Аудит">
                                    Аудит                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Власова Ирина Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Гражданское право">
                                    Гражданское право                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Соколов Сергей Леонидович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Информационные технологии в экономике">
                                    Информационные технологии в экономике                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Лаптева Анна Викторовна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Компьютерные технологии в профессиональной деятельности">
                                    Компьютерные технологии в профессиональной деятельности                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитова Татьяна Федоровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>4</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>4</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Макроэкономическое планирование и прогнозирование">
                                    Макроэкономическое планирование и прогнозирование                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Белюсова Елена Васильевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Предпринимательское право">
                                    Предпринимательское право                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Слукин Сергей Викторович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Рынок ценных бумаг">
                                    Рынок ценных бумаг                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Волков Алексей Николаевич</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Учет и анализ в строительстве">
                                    Учет и анализ в строительстве                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Власова Ирина Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <input type="hidden" name="dolg" value="1">                                        <button class="btn-link text-left" name="disc" value="Учет и аудит ценных бумаг">
                                    Учет и аудит ценных бумаг                                                                                    </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Буянова Татьяна Игоревна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Курсовые работы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <!--                        <th style="width: 10%;">Семестр</th>-->
                        <th style="width: 35%;">Предмет</th>
                        <th style="width: 40%;">Руководитель</th>
                        <th style="width: 15%;">Оценка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <!--                            <td>--><!--?//= $item['sem'] ?--><!--</td>-->
                        <td class="text-left">
                            <form action="/curstasks" method="post" target="_blank">
                                <input type="hidden" name="sem" value="5">
                                <button class="btn-link text-left" name="disc" value="Анализ бухгалтерской отчетности">Анализ бухгалтерской отчетности</button>
                            </form>
                        </td>
                        <td class="text-left">Крылов Сергей Иванович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">курсовая:<b>3</b></span> </td>
                    </tr>
                    </tbody>
                </table>

                <h4 class="text-center">Дополнительные учебные материалы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <form action="/tasks" method="post" target="_blank">
                                <input type="hidden" name="s" value="5">
                                <button class="btn-link text-left" name="disc" value="Производственная практика и дипломирование -установка">
                                    Производственная практика и дипломирование -установка                                                                                            </button>
                            </form>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>


            <div class="item">
                <h3 class="text-center">Предметы на 6 семестр</h3>



                <h4 class="text-center">Дополнительные учебные материалы</h4>
                <table class="table table-condensed table-bordered table-striped table-hover table-responsive">
                    <thead>
                    <tr>
                        <th style="width: 30%;">Предмет</th>
                        <th style="width: 30%;">Преподаватель</th>
                        <th style="width: 25%;">Оценки</th>
                        <th style="width: 15%;">Итоговая</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-left">
                            <a href="https://portfolio.usue.ru/" target="_blank">Подготовка и защита выпускной квалификационной работы</a>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- Controls -->
        <div class="full-width-navigation">
            <a class="left carousel-control" href="#port-discs" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#port-discs" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
</div>

<script>
    var uid = <?php echo $uid; ?>;
    var my_id = <?php if ($my_id) {
        echo $my_id;
    } else {
        echo 0;
    } ?>;

    $(document).ready(function () {
        $('#dopinfatoggle').click(function () {
            if ($('#dopinfa').is(':hidden'))
                $('#dopinfa').fadeIn(1000);
            else
                $('#dopinfa').fadeOut(1000);
        });
    });
</script>

<script>
        $(document).ready(function () {
            $(".carousel").carousel({interval: false});
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        });
</script>
<style>
h3 {
text-transform: uppercase;
font-weight: 700
}

.carousel-control {
color: #f60;
opacity: .8
}

.carousel-control:focus, .carousel-control:hover {
color: #f60;
opacity: 1
}

.carousel-control.right, .carousel-control.left {
background: none;
}

.btn-capsul {
border-radius: 30px;
}

.full-width-navigation {
position: absolute;
width: 100%;
top: 30px;
}

.full-width-navigation .carousel-control .glyphicon-chevron-right {
right: 10%
}

.full-width-navigation .carousel-control .glyphicon-chevron-left {
left: 10%
}

.small-width-navigation {
bottom: 34%;
position: absolute;
width: 5%;
}

.social-links span {
width: 40px;
height: 40px;
border: 1px solid #fff;
color: #fff;
border-radius: 50%;
text-align: center;
line-height: 40px;
margin: 20px 10px;
}

.banner-01 {
background: #CCCCCC;
float: left;
width: 100%;
padding: 30px 0;
margin-bottom: 50px;
position: relative;
}

.banner-02 {
background: #fff;
float: left;
width: 100%;
padding: 30px 0;
margin-bottom: 50px;
position: relative;
min-height: 400px
}

.banner-02 .carousel-inner {
min-height: 250px
}

.banner-03 {
background: #CCCCCC;
float: left;
width: 100%;
padding: 30px 0;
margin-bottom: 50px;
position: relative;
min-height: 400px
}

.banner-03 .carousel-inner {
min-height: 350px
}

.banner-04 {
background: #fff;
float: left;
width: 100%;
padding: 30px 0;
margin-bottom: 50px;
position: relative;
min-height: 400px
}

.banner-04 p {
font-size: 16px;
line-height: 30px;
}

.banner-04 .glyphicon {
color: #E8117F
}

.banner-04 .content-sec {
margin-top: 30px;
}

.banner-04 .carousel-inner {
min-height: 400px
}

.action-sec {
width: 100%;
float: left;
background: #222
}

.action-box {
float: left;
width: 100%;
text-align: center;
}

.action-box h2 {
color: #fff;
font-size: 20px;
}

</style>

<style>
    .bs {
        padding: 15px;
        background-color: #ffffff;
        border: 1px solid #e1e1e8;
        border-radius: 4px;
        margin-bottom: 15px;
        position: relative;
    }

    .bs-block {
        padding-bottom: 0px;
    }

    #port-discs {
        background-color: #ffffff;
        border: 1px solid #e1e1e8;
        border-radius: 4px;
        margin-bottom: 15px;
        position: relative;
    }

</style>