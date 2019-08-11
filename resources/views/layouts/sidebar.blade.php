<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->               
            <!-- <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{ asset('/dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li> -->            

            @if (Auth::user()->{'Account Type'} === 'User')
                <li class="{{ ((request()->is('buyACarAuthUser'))) ? 'active' : '' }}" ><a href="{{ asset('/buyACarAuthUser') }}"><i class="fa fa-link"></i> <span>Buy a Car</span></a></li>
                <li class="{{ (request()->is('displayMyBacketAuthUser')) ? 'active' : '' }}"><a href="{{ asset('/displayMyBacketAuthUser') }}"><i class="fa fa-link"></i> <span>My Basket</span></a></li>
            @endif         
             
            @if (Auth::user()->{'Account Type'} === 'Admin')                 
                <li class="{{ (request()->is('listCars')) ? 'active' : '' }}" ><a href="{{ asset('/listCars') }}"><i class="fa fa-link"></i> <span>List Cars</span></a></li>
                <li class="{{ (request()->is('addACar')) ? 'active' : '' }}" ><a href="{{ asset('/addACar') }}"><i class="fa fa-link"></i> <span>Add a Car</span></a></li>
            @endif
            <!-- <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                      <li><a href="#">Link in level 2</a></li>
                      <li><a href="#">Link in level 2</a></li>
                </ul>
            </li> -->
        </ul>
    <!-- /.sidebar-menu -->
    </section>
<!-- /.sidebar -->
</aside>