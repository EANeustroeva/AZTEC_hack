<div class="col-sm-12" style="margin-bottom: 1em;">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="box box-primary">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Смена ФИО</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Введите новые данные</label>
                            <input type="text" class="form-control" placeholder="Фамилия Имя Отчество" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Причина редактирования данных</label>
                            <select class="form-control" name="" id="">
                                <option value="" selected disabled>Укажите причину</option>
                                <option value="">Заключение брака</option>
                                <option value="">Расторжение брака</option>
                                <option value="">Иная</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Прикрепить файл:</label>
                            <input type="text" class="form-control" placeholder="Обзор.." disabled="">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" data-dismiss="modal">СОХРАНИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="box box-primary">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Смена академической группы</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Введите новые данные</label>
                            <input type="text" class="form-control" placeholder="Академическая группа" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Причина редактирования данных</label>
                            <select class="form-control" name="" id="">
                                <option value="" selected disabled>Укажите причину</option>
                                <option value="">Перевод на новый курс</option>
                                <option value="">Академический отпуск</option>
                                <option value="">Восстановление/отчисление</option>
                                <option value="">Иная</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Прикрепить файл:</label>
                            <input type="text" class="form-control" placeholder="Обзор.." disabled="">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" data-dismiss="modal">СОХРАНИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
<!--            <div class="row">-->
                <img class="img-responsive" src="/img/prof1.jpg" alt="">
<!--            </div>-->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9">
<!--            <img class="img-responsive" src="/img/prof2.jpg" alt="" width="100%">-->

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">ЛИЧНАЯ ИНФОРМАЦИЯ</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>ФИО</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Васильева Екатерина Вадимовна" disabled="">
                                <span class="input-group-addon"><a href="/#" title="Редактировать" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label>Транслитерация фамилии и имени</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Vasilieva Ekaterina" disabled="">
                                <span class="input-group-addon"><a href="/#" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <label>Группа</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="МИА11" disabled="">
                                <span class="input-group-addon"><a href="/#" title="Редактировать" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Номер зачетной книжки</label>
                            <input type="text" class="form-control" placeholder="1997266" disabled="">
                        </div>
                        <div class="col-xs-1">
                            <label>Курс</label>
                            <input type="text" class="form-control" placeholder="4" disabled="">
                        </div>
                        <div class="col-xs-3">
                            <label>Факультет</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Маг." disabled="">
                                <span class="input-group-addon"><a href="/#" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Год поступления</label>
                            <input type="text" class="form-control" placeholder="2019" disabled="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label>E-mail</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="notrealemail@gmail.com" disabled="">
                                <span class="input-group-addon">
                                    <a href="/#" title="Отправить письмо"><i class="fa fa-envelope-o"></i></a>
                                    <a href="/#" title="Добавить почту"><i class="fa fa-plus-circle"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Номер телефона</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="+7(962)1922917" disabled="">
                                <span class="input-group-addon">
                                    <a href="/#" title="Позвонить"><i class="fa fa-phone"></i></a>
                                    <a href="/#" title="Добавить номер"><i class="fa fa-plus-circle"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label>Дата последней авторизации</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="22.06.2020" disabled="">
                                <span class="input-group-addon"><a href="/#" title=""><i class="fa fa-calendar"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <label>Дата рождения</label>
                            <input type="text" class="form-control" placeholder="28 апреля 1997 г." disabled="">
                        </div>
                        <div class="col-xs-3">
                            <label>Гражданство</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Россия" disabled="">
                                <span class="input-group-addon"><a href="/#" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Статус оплаты</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Оплачено" disabled="">
                                <span class="input-group-addon">
                                    <a href="/#" title="Просмотреть"><i class="fa fa-eye"></i></a>
                                    <a href="/#" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <label>Ин. язык</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Английский" disabled="">
                                <span class="input-group-addon">
                                    <a href="/#" title="Сменить"><i class="fa fa-exchange"></i></a>
                                    <a href="/#" title="Добавить"><i class="fa fa-plus"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label>Индивидуальная учебная траектория</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="12312312312.plx" disabled="">
                                <span class="input-group-addon"><a href="/#" title="Скачать"><i class="fa fa-download"></i></a></span>
                            </div>

                        </div>
                        <div class="col-xs-4">
                            <label>Научный руководитель</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Иванов И.А." disabled="">
                                <span class="input-group-addon">
                                    <a href="/#" title="Сменить"><i class="fa fa-exchange"></i></a>
                                    <a href="/#" title="Написать"><i class="fa fa-pencil"></i></a>
                                </span>
                            </div>

                        </div>
                        <div class="col-xs-3">
                            <label>Процент прогулов</label>
                            <input type="text" class="form-control" placeholder="3% или 12 часов" disabled="">
                        </div>
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
                            <button class="btn-link text-left" name="disc" value="Бухгалтерский учет">
                                    Бухгалтерский учет                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Высшая математика (Линейная алгебра)">
                                    Высшая математика (Линейная алгебра)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">атт:<b>5</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Высшая математика (Математический анализ)">
                                    Высшая математика (Математический анализ)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Менеджмент">
                                    Менеджмент                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Мельчекова Ольга Георгиевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Микроэкономика">
                                    Микроэкономика                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Илюхин Алексей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Психология и педагогика">
                                    Психология и педагогика                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Качалова Наталья Германовна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Экономика организации">
                                    Экономика организации                                                                                    </button>
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
                            <button class="btn-link text-left" name="disc" value="Безопасность жизнедеятельности">
                                    Безопасность жизнедеятельности                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Введение в экономику и организация НИР">
                                    Введение в экономику и организация НИР                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Иностранный язык">
                                    Иностранный язык                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Информатика">
                                    Информатика                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="История">
                                    История                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Политология">
                                    Политология                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Трофимов Андрей Владимирович</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Практика по получению первичных профессиональных умений и навыков, в том числе первичных умений и навыков научно-исследовательской деятельности">
                                    Практика по получению первичных профессиональных умений и навыков, в том числе первичных умений и навыков научно-исследовательской деятельности                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Физическая культура и спорт">
                                    Физическая культура и спорт                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left"></td>
                        <td class="text-left"></td>
                        <td class="text-left">Тестирование</td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Философия">
                                    Философия                                                                                            </button>
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
                            <button class="btn-link text-left" name="disc" value="Высшая математика(Методы оптимальных решений)">
                                    Высшая математика(Методы оптимальных решений)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Высшая математика(Теория вероятностей и математическая статистика)">
                                    Высшая математика(Теория вероятностей и математическая статистика)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитиков Сергей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Макроэкономика">
                                    Макроэкономика                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Илюхин Алексей Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Статистика и эконометрика(Статистика)">
                                    Статистика и эконометрика(Статистика)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Козлова Мария Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Теория экономического анализа">
                                    Теория экономического анализа                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Перминова Ирина Михайловна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Финансы">
                                    Финансы                                                                                    </button>
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
                            <button class="btn-link text-left" name="disc" value="Финансовый учет">Финансовый учет</button>
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
                            <button class="btn-link text-left" name="disc" value="Управленческий учет">
                                    Управленческий учет                                                                                            </button>
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
                            <button class="btn-link text-left" name="disc" value="Деньги, кредит, банки">
                                    Деньги, кредит, банки                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Пищулов Виктор Михайлович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="История и перспективы развития анализа и аудита">
                                    История и перспективы развития анализа и аудита                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Нечеухина Надежда Семеновна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Маркетинг">
                                    Маркетинг                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Попова Ольга Ивановна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Мировая экономика и международные экономические отношения">
                                    Мировая экономика и международные экономические отношения                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Сухих Василий Валентинович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Правоведение">
                                    Правоведение                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Митцукова Гелена Алексеевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Статистика и эконометрика(Эконометрика)">
                                    Статистика и эконометрика(Эконометрика)                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Кокорина Елена Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">ауд.к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Управленческий анализ хозяйственной деятельности">
                                    Управленческий анализ хозяйственной деятельности                                                                                    </button>
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
                            <button class="btn-link text-left" name="disc" value="Управленческий учет">Управленческий учет</button>
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
                            <button class="btn-link text-left" name="disc" value="Базы данных">
                                    Базы данных                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Зубкова Екатерина Владимировна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Бухгалтерская (финансовая) отчетность и МСФО">
                                    Бухгалтерская (финансовая) отчетность и МСФО                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Буянова Татьяна Игоревна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">Без оценки</span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Деловая этика">
                                    Деловая этика                                                                                            </button>
                        </td>
                        <!--                                <td class="text-left">--><!--?//= $item['disc'] ?--><!-- --><!--</td>-->
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шуталева Анна Владимировна</td>
                        <td class="text-left"></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Элективные курсы по физической культуре и спорту">
                                    Элективные курсы по физической культуре и спорту                                                                                            </button>
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
                            <button class="btn-link text-left" name="disc" value="Лабораторный практикум по бухгалтерскому учету">
                                    Лабораторный практикум по бухгалтерскому учету                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Девятова Татьяна Юрьевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Налоговый учет">
                                    Налоговый учет                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Попов Алексей Юрьевич</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Налоговый учет и отчетность доходов физических лиц">
                                    Налоговый учет и отчетность доходов физических лиц                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Матвеева Виолета Стасио</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Ответственность за экономические правонарушения">
                                    Ответственность за экономические правонарушения                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Кожевников Олег Александрович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">зач:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Страхование">
                                    Страхование                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Разумовская Елена Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Судебно-бухгалтерская экспертиза">
                                    Судебно-бухгалтерская экспертиза                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Козырчикова Эльвира Юрьевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Учет и анализ внешнеэкономической деятельности">
                                    Учет и анализ внешнеэкономической деятельности                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Надольская Нина Александровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Финансовый менеджмент">
                                    Финансовый менеджмент                                                                                            <i class="glyphicon glyphicon-film"></i>
                                </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Ростовцев Константин Викторович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>3</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Элективные курсы по физической культуре и спорту">
                                    Элективные курсы по физической культуре и спорту                                                                                    </button>
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
                            <button class="btn-link text-left" name="disc" value="Бухгалтерская (финансовая) отчетность и МСФО">Бухгалтерская (финансовая) отчетность и МСФО</button>
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
                            <button class="btn-link text-left" name="disc" value="Аудит">
                                    Аудит                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Власова Ирина Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Гражданское право">
                                    Гражданское право                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Соколов Сергей Леонидович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Информационные технологии в экономике">
                                    Информационные технологии в экономике                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Лаптева Анна Викторовна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Компьютерные технологии в профессиональной деятельности">
                                    Компьютерные технологии в профессиональной деятельности                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Шитова Татьяна Федоровна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>4</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>4</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Макроэкономическое планирование и прогнозирование">
                                    Макроэкономическое планирование и прогнозирование                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Белюсова Елена Васильевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Предпринимательское право">
                                    Предпринимательское право                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Слукин Сергей Викторович</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">диф.з:<b>4</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Рынок ценных бумаг">
                                    Рынок ценных бумаг                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Волков Алексей Николаевич</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Учет и анализ в строительстве">
                                    Учет и анализ в строительстве                                                                                    </button>
                        </td>
                        <!--                                <td class="text-left"><a href="--><!--?//= BASE_URL ?--><!--?id=--><!--?//= $item['user_id'] ?--><!--" target="_blank">--><!--?//= @$item['lektor'] ?--><!--</a></td>-->
                        <td class="text-left">Власова Ирина Евгеньевна</td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">кр:<b>зач</b></span> <span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">к/р:<b>5</b></span></td>
                        <td class="text-left"><span class="btn btn-xs btn-default" style="margin: 2px 2px 2px 0;">экз:<b>5</b></span></td>
                    </tr>
                    <tr>
                        <td class="text-left">
                            <button class="btn-link text-left" name="disc" value="Учет и аудит ценных бумаг">
                                    Учет и аудит ценных бумаг                                                                                    </button>
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
                            <button class="btn-link text-left" name="disc" value="Анализ бухгалтерской отчетности">Анализ бухгалтерской отчетности</button>
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
                            <button class="btn-link text-left" name="disc" value="Производственная практика и дипломирование -установка">
                                    Производственная практика и дипломирование -установка                                                                                            </button>
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
    .content .input-group .input-group-addon {
        background-color: #eee!important;
    }
    .content .input-group-addon {
        padding: 0!important;
    }
    .content .input-group-addon a {
        padding: 6px 12px;
        color: #555
    }
    .content .input-group-addon a:hover {
        color: white;
        background-color: #555;
    }
    .content .input-group-addon a + a {
        border-left: 1px solid #ccc
    }
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