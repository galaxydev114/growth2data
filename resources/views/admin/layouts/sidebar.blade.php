<div class="vertical-menu">
    <div data-simpebar class="h-100">
        <!-- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"></li>
                <li class="{{ (request()->segment(2) == 'dashboard') ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="fas fa-th-large"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-ribbon"></i>
                        <span>Clube de Conteúdo</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fab fa-youtube"></i>
                        <span>E-learning</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-lightbulb"></i>
                        <span class="badge rounded-pill bg-primary float-end">5</span>
                        <span>Consultoria</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-users"></i>
                        <span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Escola</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-mail-bulk"></i>
                        <span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Mailing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-blog"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <li class="menu-title"></li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-cog"></i>
                        <span>Configurações</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class=" waves-effect">
                        <i class="fas fa-power-off"></i>
                        <span>Sair</span>
                    </a>
                </li>

            </ul>
            <!-- Left Menu End -->
        </div>
        <!-- /. Sidemenu -->
    </div>
</div>