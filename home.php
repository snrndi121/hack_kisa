<!DOCTYPE html>
<?php
  $arr = array();
  function isValidJSON($str) {
    $arr = json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
  }

  $json_params = file_get_contents("php://input");

  if (isset($arr) && isValidJSON($json_params)) {
    $decoded_params = json_decode($json_params, true);
    //var_dump($decoded_params);
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $myfile2 = fopen("log.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $decoded_params);
    fwrite($myfile2, $decoded_params);
    fclose($myfile);
    fclose($myfile2);
  } else {
	//var_dump($arr);
	$myfile = fopen("dontwork.txt", "w");
	fwrite($myfile, "done work");
	fclose($myfile);
  }
?>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Clear - Home Admin </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="home.php" class="logo"><b>CLEAR</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="home.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">2</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">2 개의 모임에서 코인이 쌓였습니다.</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">군산읍 교회</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <div class="task-info">
                                        <div class="desc">강원도 철원 자원봉사</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                              <!--
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                          -->
                            <li class="external">
                                <a href="#">더 보기</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">3</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">3개의 메시지가 도착하였습니다.</p>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/friends/fr-02.jpg"></span>
                                    <span class="subject">
                                    <span class="from">이민종</span>
                                    <span class="time">40 분전.</span>
                                    </span>
                                    <span class="message">
                                     노트북이 이상해요.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/friends/fr-05.jpg"></span>
                                    <span class="subject">
                                    <span class="from">권성욱</span>
                                    <span class="time">4 시간 전.</span>
                                    </span>
                                    <span class="message">
                                        이제는 집에 보내주세요.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/friends/fr-01.jpg"></span>
                                    <span class="subject">
                                    <span class="from">이장형</span>
                                    <span class="time">40 시간 전.</span>
                                    </span>
                                    <span class="message">
                                        커피 드실래요?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.php#">모든 메시지 보기</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="#">로그아웃</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="index.php"><img src="assets/img/nh_knight.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">농키사</h5>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-tasks"></i>
                          <span>토큰 인센티브</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="javascript:;">헌금 마일리지</a></li>
                        <li><a  href="javascript:;">추천인</a></li>
                        <li><a  href="javascript:;">농촌 봉사</a></li>
                        <li><a  href="javascript:;">우대 금리 현황</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>판매 및 구매</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">농기구 및 비료</a></li>
                          <li><a  href="javascript:;">친환경 및 유기</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>농촌 모니터링</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="coin_monitor.php">전국 모니터링</a></li>
                          <li><a  href="javascript:;">가족 모니터링</a></li>
                        <!--
                          <li><a  href="todo_list.html">Todo List</a></li>
                          <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="inline_editor.html">Inline Editor</a></li>
                          <li><a  href="file_upload.html">Multiple File Upload</a></li>
                        -->
                      </ul>
                  </li>

                  <!--
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="pricing_table.html">Pricing Table</a></li>
                          <li><a  href="faq.html">FAQ</a></li>
                      </ul>
                  </li>
                -->
                  <!--
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>
                -->
                  <!--
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                          <li><a  href="advanced_table.html">Advanced Table</a></li>
                      </ul>
                  </li>
                -->
                  <!-- menu_item
                  <li>
                      <a  href="inbox.html">
                          <i class="fa fa-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-theme pull-right mail-info">2</span>
                      </a>
                  </li>
                -->
                  <!-- menu_item
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                          <li><a  href="flot_chart.html">Flot Charts</a></li>
                          <li><a  href="xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  -->
                  <!-- menu_item
                  <li class="sub-menu">
                      <a class="active" href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="lobby.html">Lobby</a></li>
                          <li><a  href="chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="chat-room mt">
                  <aside class="mid-side">
                      <div class="chat-room-head">
                          <h3>팜코인 현황</h3>
                          <form action="#" class="pull-right position">
                              <input type="text" placeholder="Search" class="form-control search-btn ">
                          </form>
                      </div>

                      <div class="room-desk">
                          <h4 class="pull-left">공개 모임</h4>
                          <a href="#" class="pull-right btn btn-theme02">+ 새 모임 만들기</a>
                          <div class="room-box">
                              <h5 class="text-primary"><a href="coin_stack.html">군산읍 교회</a></h5>
                              <p>깨끗한 군산, 부정없는 우리 교회.</p>
                              <p><span class="text-muted">모임장 :</span> 이장형 | <span class="text-muted">멤버 :</span> 98 | <span class="text-muted">마지막 활동 :</span> 2 분 전</p>
                          </div>
                          <div class="room-box">
                              <h5 class="text-primary"><a href="coin_stack.html">강원 철원군 자원봉사</a></h5>
                              <p>당신이 베푼 마음만큼 쌓여갑니다.</p>
                              <p><span class="text-muted">모임장 :</span> 이현서 | <span class="text-muted">멤버 :</span> 44 | <span class="text-muted">마지막 활동 :</span> 15 분 전</p>
                          </div>
                          <!--
                          <div class="room-box">
                              <h5 class="text-primary"><a href="chat_room.html">MaxFront</a></h5>
                              <p>Technical support for our front-end. No customization.</p>
                              <p><span class="text-muted">Admin :</span> Marcel Newman | <span class="text-muted">Member :</span> 22 | <span class="text-muted">Last Activity :</span> 15 min ago</p>
                          </div>
                        -->
                      </div>
                      <div class="room-desk">
                          <h4 class="pull-left">사설 모임</h4>
                          <div class="room-box">
                              <h5 class="text-primary"><a href="coin_stack.html">우리 가족</a></h5>
                              <p>할머니, 할아버지 전용.</p>
                              <p><span class="text-muted">모임장 :</span> 이민종 | <span class="text-muted">멤버 :</span> 4 | <span class="text-muted">마지막 활동 :</span> 15 분 전</p>
                          </div>
                      </div>

                  </aside>
                  <aside class="right-side">
                      <div class="user-head">
                          <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
                          <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
                      </div>
                      <div class="invite-row">
                          <h4 class="pull-left">즐거운 핀테크 가즈아</h4>
                          <a href="#" class="btn btn-theme04 pull-right">+ 초대</a>
                      </div>
                      <ul class="chat-available-user">
                          <li>
                              <a href="#">
                                  <img class="img-circle" src="assets/img/friends/fr-01.jpg" width="32">
                                  이장형
                                  <span class="text-muted"> 1h:02m</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <img class="img-circle" src="assets/img/friends/fr-02.jpg" width="32">
                                  이민종
                                  <span class="text-muted"> 1h:08m</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <img class="img-circle" src="assets/img/friends/fr-03.jpg" width="32">
                                  이현서
                                  <span class="text-muted"> 1h:10m</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <img class="img-circle" src="assets/img/friends/fr-04.jpg" width="32">
                                  양용준
                                  <span class="text-muted"> 3h:00m</span>
                              </a>
                          </li>
                          <li>
                              <a href="chat_room.html">
                                  <img class="img-circle" src="assets/img/friends/fr-05.jpg" width="32">
                                  권성욱
                                  <span class="text-muted"> 4h:22m</span>
                              </a>
                          </li>
                      </ul>
                  </aside>
              </div>
              <!-- page end-->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 - 즐거운 핀테크 가즈아
              <a href="lobby.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
  </body>
</html>
