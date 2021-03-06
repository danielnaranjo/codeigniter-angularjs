<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar"
                    aria-controls="bs-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Codeigniter | AngularJS</a>
        </div>
        <nav id="bs-navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="brand" href="<?php echo site_url('/'); ?>"><span class="glyphicon glyphicon-home"></span>
                        Home</a>
                </li>

            </ul>
        </nav>
    </div>
</header>
<div class="bs-docs-header" id="content" tabindex="-1">
    <div class="container">
        <h1>CAB-JS</h1>

        <p>Codeigniter + AgularJS + Bootstrap 3</p>
    </div>
</div>
<div class="container">
    <div ng-app="project">

        <div class="col-md-12 nopadding">
            <div class="page-header"><h1>Websites</h1></div>
        </div>

        <div ng-view></div>
    </div>
</div>