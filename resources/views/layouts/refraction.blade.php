<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="{{ url('') }}/Refraction/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('') }}/Refraction/css/refraction-template.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ url('') }}/Refraction/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/Refraction/js/navigation.js"></script>
</head>
<body style="background-color: #EAEAEA">
    <div class="container" style="background-color: #ffffff;margin-bottom: 50px;padding-bottom: 50px;">
        <div class="row">
            <ul class="nav nav-pills">
                <li><a href="{{ route('index') }}/">Главная</a></li>
                <li><a href="{{ route('blog.index') }}">Новости</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row" id="alert" style="display: none">
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <div id="alert-message"></div>
            </div>
        </div>
        <div class="row">
            <div class="jumbotron">
                <h1>Jumbotron</h1>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <p><a class="btn btn-primary btn-lg">Learn more</a></p>
            </div>
        </div>

        <div class="row" style="padding-top: 30px" id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="box">
                            <div class="box-icon">
                                <span class="fa fa-4x fa-server"></span>
                            </div>
                            <div class="info">
                                <h4 class="text-center">Сервера</h4>
                                <a href="#" class="list-group-item row" style="border: 0;">
                                    <div class="col-md-2">
                                        <img src="http://www.myarena.ru/images/news/top/hurtworld.jpg" alt="" class="img-circle" style="width: 64px; height: 64px">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="list-group-item-heading">MINIGAME</h4>
                                        <p class="list-group-item-text"></p>
                                    </div>
                                </a>
                                <a href="" class="btn info-link">Link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="box">
                            <div class="box-icon">
                                <span class="fa fa-4x fa-file-text"></span>
                            </div>
                            <div class="info">
                                <h4 class="text-center">Новости</h4>
                                <a href="#" class="list-group-item row" style="border: 0;">
                                    <div class="col-md-2">
                                        <img src="http://www.myarena.ru/images/news/top/hurtworld.jpg" alt="" class="img-circle" style="width: 64px; height: 64px">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item row" style="border: 0;">
                                    <div class="col-md-2">
                                        <img src="http://www.myarena.ru/images/news/top/hurtworld.jpg" alt="" class="img-circle" style="width: 64px; height: 64px">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    </div>
                                </a>
                                <p>

                                </p>
                                <a href="" class="btn info-link">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('.nav').on('click', 'li', function() {
        if(($(this).attr('class') != 'active') && ($(this).attr('class') != 'disabled') && ($(this).attr('class') != 'dropdown') && ($(this).attr('class') != 'dropdown open')) {
            $('li.active').attr('class', '');
            $(this).attr('class', 'active');
        }
    }) ;
</script>
</html>