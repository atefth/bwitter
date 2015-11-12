<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-bwitter-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Bwitter</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-bwitter-collapse">
        <ul class="nav navbar-nav">
            <li class="<?php echo ($page == 'home') ? 'active' : '' ; ?>"><a href="home">Home</a></li>
            <li class="<?php echo ($page == 'about') ? 'active' : '' ; ?>"><a href="about">About</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Go!</button>
        </form>
    </div><!-- /.navbar-collapse -->
</nav>