<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Dashboard</a>
    </div>
    <!-- /.navbar-header -->

@include('dashboard.includes.navbar')
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">


                <li>
                    <a href=""> <i class="fa fa-user fa-fw">&nbsp;users</i></a>
                </li>
                <li>
                    <a href="{{route('section.index')}}"> <i class="fa fa-table fa-fw">&nbsp;Section</i></a>
                </li>
                <li>
                    <a href=""> <i class="fa fa-photo fa-fw">&nbsp;Image</i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-building-o">&nbsp;Posts</i></a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
