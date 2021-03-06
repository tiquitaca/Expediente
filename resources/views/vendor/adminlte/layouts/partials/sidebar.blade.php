<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('/img/avatar5.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar Pacientes..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">SITIOS</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}" style="text-decoration: none"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="#" style="text-decoration: none"><i class='fa fa- fa-edit'></i> <span> Tareas</span></a></li>
            <li class="treeview">
                <a href="#" style="text-decoration: none">
                    <i class="fa fa-user"></i>
                    <span>Usuarios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ URL::to('/users') }}"><span class="fa fa-circle-o"></span>Usuarios Registrados</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#" style="text-decoration: none">
                    <i class="fa fa-stethoscope"></i>
                    <span>Pacientes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><span class="fa fa-circle-o"></span>Pacientes atendidos</a></li>
                    <li><a href="#"><span class="fa fa-circle-o"></span>Pacientes de empresa</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#" style="text-decoration: none">
                    <i class="fa fa-ambulance"></i>
                    <span>Consultas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{ URL::to('/recepcion') }}"><span class="fa fa-circle-o"></span>Iniciar Consulta</a></li>

                    <li><a href="{{ URL::to('/consultas') }}"><span class="fa fa-circle-o"></span>Consultas Pendientes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#" style="text-decoration: none">
                    <i class="fa fa-building"></i>
                    <span>Convenios</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><span class="fa fa-circle-o"></span>{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#"><span class="fa fa-circle-o"></span>{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
