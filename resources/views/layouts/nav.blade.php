<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="triad-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> <!-- /.navbar-header -->
        <div id="triad-nav" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Members</a></li>
                <li><a href="#">Personas</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Forum</a></li>
            </ul>
            <!--
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search Triad Weyrs">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            -->
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Create Persona</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
                @else
                <li><a href="#">Join Us!</a></li>
                @endif
            </ul>
        </div> <!--/.navbar-collapse -->
    </div> <!-- /.container-fluid -->
</nav>