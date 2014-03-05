<!-- Red Strip -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12 bg-palette-default" style="height:15px;"></div>
    </div>
</div><!-- /Red Strip -->

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="logo"><a href="" title="Homepage"><img src="images/logo.png" alt="Logo"></a></h1>
        </div>
        <div class="col-md-7">
            <div class="btn-toolbar pull-right">
                <div class="btn-group nav-users">
                    <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-file"></i>Link</button>
                    <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-heart"></i>Link</button>
                    <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-user"></i>Link</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}"><i class="icon icon-white glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
