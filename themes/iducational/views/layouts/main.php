  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

<<<<<<< HEAD
=======
  
          <!-- font Awesome -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/forum/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/forum/css/ionicons.min.css" rel="stylesheet" type="text/css" />
   <!-- Theme style -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/forum/css/AdminLTE.css" rel="stylesheet" type="text/css" />



>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
    <!-- Loading Flat UI -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/dist/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/docs/assets/css/demo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/js/jcarousel.responsive.css">

    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/js/jquery.jcarousel.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/js/jcarousel.responsive.js"></script>

    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
<<<<<<< HEAD
=======


>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
  </head>
 <body style="background-color:#BDC3C7;">
 <div class="row" >
      <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
        <div class="navbar-header" style="">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01" >
            <span class="sr-only">Toggle navigation</span>
          </button>
         <a class="navbar-brand" href="#">&nbsp</a>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01"  style="background-color:#27AE60;">
          <ul class="nav navbar-nav navbar-left">
<<<<<<< HEAD
            <li><a data-toggle="modal" data-target="#myModal"><span class="fui-user"></span></a></li>
=======
              
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
            <li><a href="#fakelink"><span class="fui-home"></span></a></li>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-document"></span></a></li>
            <li><a href="#fakelink"><div><img src="<?php echo Yii::app()->theme->baseUrl; ?>/Flat/img/icons/svg/book.svg" alt="Book" style="width:25px;"></div></a></li>
                     <!-- Button trigger modal -->
            <li>
            <form class="navbar-form navbar-right" action="#" role="search">
              <div class="form-group">
                <div class="input-group">
                  <input class="fouuawrm-control" id="navbarInput-01" type="search" placeholder="Search" style="width:500px;background-color:#ECF0F1;height:37px;margin-top:-2px;">
                  <span class="input-group-btn">
                    <button type="submit" class="btn" style="background-color:#ECF0F1;" ><span class="fui-search"></span></button>
                  </span>
                </div>
              </div>
            </form>
            </li>
            <li><a data-toggle="modal" data-target="#myModal"><span class="fui-new"></span></a></li>
           </ul>  
<<<<<<< HEAD
=======


           <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             <span class="fui-user"></span>  
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?= Yii::app()->session['username'] ?>                                        
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= Yii::app()->createUrl('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                                </ul>
                          </li>
                </ul>
                
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tulis Statusmu</h4>
                  </div>
                  <div class="modal-body">
                      <div class="well"> 
                           <form class="form-horizontal" role="form">
                            <h4>Curhatkan Pikiran Mu</h4>
                             <div class="form-group" style="padding:14px;">
                              <textarea class="form-control" placeholder="Curhat Yuk!! Sama teman kamu"></textarea>
                            </div>
                            <button class="btn btn-primary pull-right" type="button">Post</button>
                            <ul class="list-inline">
                              <li><a href=""><span class="fui-photo"></span></a></li>
                              <li><a href=""><span class="fui-video"></span></a></li>
                              <li><a href=""><span class="fui-location"></span></a></li>
                            </ul>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->
    
  </div> <!-- /row -->
  <div class="container" >
     <?php echo $content; ?>
<<<<<<< HEAD

  </body>
=======
  </div>
  <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/forum/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/forum/js/scripts.js"></script>



        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/forum/AdminLTE/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/forum/AdminLTE/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/forum/AdminLTE/AdminLTE/demo.js" type="text/javascript"></script>

<!-- end script references -->
  </body>

>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
</html>