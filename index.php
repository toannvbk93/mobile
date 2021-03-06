<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home tanosige.com</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .row > div.dropdown.open { position: static; }
            .row > div.dropdown.open .dropdown-menu {display:block; width: 100%;  }
            .dropdown-menu>li { display: block; }
            .dropdown-img{
                width: 8%;
                height: 8%;
            }
            .dropdown-text{
                font-size:18px;
                display: inline-block;
            }
            .dropdown-header-text{
                font-size:20px;
            }
            .fb-like{
                padding: 0px;
            }
            .fb-share-button{
                padding: 2px;
            }
            .center-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .col-xs-6{
                padding: 0px;
            }
            .col-xs-5{
                padding: 0px;
            }
            .col-xs-4{
                padding: 0px;
            }
            .col-xs-3{
                padding: 0px;
            }
            .col-xs-2{
                padding: 0px;
            }
            .img-responsive{
                padding: 0px;
            }
            .img-rounded{
                padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 12px;
                padding-top: 0px;
            }
            .row{
                max-width: 100%;
                padding: 0px;
                margin: auto;
            }
            .container-fluid { 
                padding: 0px;
            }
            .header{
                position: fixed; 
                top: 0;
            }
            .content{
                margin-top: 300px;
            }
            @media screen and (max-width: 768px) {
                p{
                    font-size:20px;
                }
                .content{
                    margin-top: 60px;
                }
            }
        </style>

    </head>
    <body>
        <div id="fb-root"></div>
        <div class="container-fluid header">
            <div class="row">      
                <div class="col-xs-2"><button type="button" class="btn btn-primary">
                        <img src="icon/news-icon-1.ico" class="img-responsive"/></button></div>
                <div class="col-xs-2"><button type="button" class="btn btn-primary">
                        <img src="icon/video-icon-2.png" class="img-responsive"/></button></div>
                <div class="col-xs-2"><button type="button" class="btn btn-primary">
                        <img src="icon/heart-icon-1.png" class="img-responsive"/></button></div>
                <div class="col-xs-2"><button type="button" class="btn btn-primary">
                        <img src="icon/paint-icon-1.png" class="img-responsive"/></button></div>
                <div class="col-xs-2"><button type="button" class="btn btn-primary">
                        <img src="icon/upload-icon-1.ico" class="img-responsive"/></button></div>   
                <div class="col-xs-2 dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <img src="icon/menu-icon-1.png" class="img-responsive"/>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header"><p class="dropdown-header-text text-muted">thanh tung</p></li>
                        <li>
                            <a href="#"><img src="icon/uploaded-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  uploaded articles</p></a></li>
                        <li>
                            <a href="#"><img src="icon/loved-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  love articles</p></a></li>
                        <li>
                            <a href="#"><img src="icon/message-icon-1.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  messenger</p></a></li>
                        <li>
                            <a href="#"><img src="icon/config-icon.ico" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  config</p></a></li>
                        <li>
                            <a href="#"><img src="icon/logout-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  logout</p></a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header"><p class="dropdown-header-text text-muted">function</p></li>
                        <li>
                            <a href="#"><img src="icon/search-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  search</p></a></li>
                        <li>
                            <a href="#"><img src="icon/evaluate-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  evaluate</p></a></li>
                        <li>
                            <a href="#"><img src="icon/gif-icon.png" class="dropdown-img"/>
                                <p class="dropdown-text text-muted">  gif</p></a></li>
                    </ul>
                </div> 
            </div>
        </div>

        <div class="container-fluid content">
            <p>Her name is Pham Thi Thuy Anh</p>
            <img src="img/1-1.jpg" alt="img1" class="img-rounded img-responsive" >
            <div class="row">
                <div class="col-xs-4">
                    <div class="fb-like" 
                         data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-action="like" data-size="large" 
                         data-show-faces="false" data-share="false">
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-size="large" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" 
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a>
                    </div>
                </div>
                <div class="col-xs-3 center-wrapper">
                    <div class="row">
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/comment-icon.ico" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/seen-icon.png" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p>Her name is Luong Nguyen Mai Linh</p>
            <img src="img/1-2.jpg" class="img-rounded img-responsive" >
            <div class="row">
                <div class="col-xs-4">
                    <div class="fb-like" 
                         data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-action="like" data-size="large" 
                         data-show-faces="false" data-share="false">
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-size="large" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" 
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a>
                    </div>
                </div>
                <div class="col-xs-3 center-wrapper">
                    <div class="row">
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/comment-icon.ico" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/seen-icon.png" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p>Her name is Dinh Truc Ly</p>
            <img src="img/1-3.jpg" class="img-rounded img-responsive" >
            <div class="row">
                <div class="col-xs-4">
                    <div class="fb-like" 
                         data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-action="like" data-size="large" 
                         data-show-faces="false" data-share="false">
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-size="large" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" 
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a>
                    </div>
                </div>
                <div class="col-xs-3 center-wrapper">
                    <div class="row">
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/comment-icon.ico" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/seen-icon.png" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p>Her name is Dinh Truc Ly. She is beautiful, right??</p>
            <img src="img/1-4.jpg" class="img-rounded img-responsive" >
            <div class="row">
                <div class="col-xs-4">
                    <div class="fb-like" 
                         data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-action="like" data-size="large" 
                         data-show-faces="false" data-share="false">
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-size="large" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" 
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a>
                    </div>
                </div>
                <div class="col-xs-3 center-wrapper">
                    <div class="row">
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/comment-icon.ico" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/seen-icon.png" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p>Her name is Dinh Vu My Hang</p>
            <img src="img/1-5.jpg" class="img-rounded img-responsive" >
            <div class="row">
                <div class="col-xs-4">
                    <div class="fb-like" 
                         data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-action="like" data-size="large" 
                         data-show-faces="false" data-share="false">
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" 
                         data-layout="button_count" data-size="large" data-mobile-iframe="true">
                        <a class="fb-xfbml-parse-ignore" target="_blank" 
                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a>
                    </div>
                </div>
                <div class="col-xs-3 center-wrapper">
                    <div class="row">
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/comment-icon.ico" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                        <div class="col-xs-3 center-wrapper">
                            <img src="icon/seen-icon.png" class="img-rounded img-responsive" >
                        </div>
                        <div class="col-xs-3">
                            <p>30</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
		<script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>
