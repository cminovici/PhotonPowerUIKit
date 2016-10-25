<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="nav-controls visible-xs-inline-block pull-left">
                <button id="toggle-sidebar-btn" type="button" class="btn btn-default navbar-btn" aria-expanded="false">
                    <span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../dist/css/img/eMAG_logo_92x24px.png" alt="Admin App">
            </a>
            <div class="nav-controls visible-xs-inline-block pull-right">
                <button id="toggle-nav-btn" type="button" class="btn btn-default navbar-btn" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-angle-down"></i>
                </button>
            </div>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <h4 class="navbar-text">PHOTON</h4>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle page-settings-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="visible-xs-inline">Settings</span>
                        <span class="hidden-xs"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dm-header hidden-xs"><span>Scenario selector</span></li>
                        <li class="radio">
                            <label><input type="radio" name="scenarioSelector" class="form-radio-control scenarioSelector" value="1" checked=""> Scenario 1</label>
                        </li>
                        <li class="radio">
                            <label><input type="radio" name="scenarioSelector" class="form-radio-control scenarioSelector" value="2"> Scenario 2</label>
                        </li>
                        <li class="radio">
                            <label><input type="radio" name="scenarioSelector" class="form-radio-control scenarioSelector" value="3"> Scenario 3</label>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dd-language" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="visible-xs-inline">Language</span>
                        <span><i class="flag-icon flag-icon-gb"></i>GB</span><i class="fa fa-angle-down hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu dm-language">
                        <li><a href="#"><i class="flag-icon flag-icon-ro"></i><span>RO</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-gb"></i><span>GB</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-bg"></i><span>BG</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-hu"></i><span>HU</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-pl"></i><span>PL</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell nav-icon-lg hidden-xs"></i>
                        <span class="visible-xs-inline">Notifications</span>
                        <span class="jewel">3</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dm-header hidden-xs"><span>Notifications</span></li>
                        <li><a href="#"><span>You have an invalidated offer</span></a></li>
                        <li><a href="#"><span>Your account is not up to date</span></a></li>
                        <li><a href="#"><span>You have a new order</span></a></li>
                        <li><a href="javascript:void(0)"><span>View all</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dd-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="profile-thumb hidden-xs">
                            <img class="nav-user-photo" src="../dist/css/img/jon_snow.jpg" alt="">
                        </div><span>Jon Snow</span><i class="fa fa-angle-down hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/app_dev.php/ro_RO/profile"><span>Account settings</span></a></li>
                        <li><a href="/app_dev.php/logout"><span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>