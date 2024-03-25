<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
                  <!-- Nav Item - Dashboard -->
 




                  <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-picture-o nav-icon">

                        </i>
                        {{ trans('cruds.event.title') }}
                    </a>
                <ul class="nav-dropdown-items">
                        <!-- Nav Item - post -->
                            <li class="nav-item">
                                <a href="{{ route("admin.portfolio") }}" class="nav-link">
                                    <i class="fa-fw fas fa-picture-o nav-icon">

                                    </i>
                                    {{ trans('cruds.event.title') }}
                                </a>
                            </li>
                        
                        <!-- Nav Item -category  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.pcategory") }}" class="nav-link">
                                    <i class="fa-fw fas fa-bars nav-icon">

                                    </i>
                                    {{ trans('cruds.eventcategories.title') }}
                                </a>
                            </li>

                    </ul>
                </li>

     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fa fa-diamond nav-icon">

                        </i>
                        {{ trans('cruds.blog.title') }}
                    </a>
                <ul class="nav-dropdown-items">
                        <!-- Nav Item - post -->
                            <li class="nav-item">
                                <a href="{{ route("admin.post") }}" class="nav-link">
                                    <i class="fa-fw fas fa-files-o nav-icon">

                                    </i>
                                    {{ trans('cruds.post.title') }}
                                </a>
                            </li>
                        
                        <!-- Nav Item -category  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.category") }}" class="nav-link">
                                    <i class="fa-fw fas fa-bars nav-icon">

                                    </i>
                                    {{ trans('cruds.category.title') }}
                                </a>
                            </li>
                       <!-- Nav Item -tag  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.tag") }}" class="nav-link">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.tag.title') }}
                                </a>
                            </li>
                        
                    </ul>
                </li>


            <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item">
                    <a href="{{ route("admin.partner") }}" class="nav-link">
                        <i class="fa-fw fas fa-building nav-icon">

                        </i>
                        {{ trans('cruds.partner.title') }}
                    </a>
                </li>

            <!-- Nav Item - testi Collapse Menu -->

                <li class="nav-item">
                    <a href="{{ route("admin.testi") }}" class="nav-link">
                        <i class="fa-fw  fa fa-comment-o nav-icon">

                        </i>
                        {{ trans('cruds.testi.title') }}
                    </a>
                </li>

             <!-- Nav Item - Utilities Collapse Menu -->
           
            <li class="nav-item nav-dropdown">
                  <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-globe nav-icon">

                   </i>
                        {{ trans('cruds.jobbank.title') }}
               </a>
            <ul class="nav-dropdown-items">


            @can('company_access')
                <li class="nav-item">
                    <a href="{{ route("admin.companies.index") }}" class="nav-link {{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.company.title') }}
                    </a>
                </li>
            @endcan
            @can('city_access')
                <li class="nav-item">
                    <a href="{{ route("admin.cities.index") }}" class="nav-link {{ request()->is('admin/cities') || request()->is('admin/cities/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.city.title') }}
                    </a>
                </li>
            @endcan
            @can('category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.category.title') }}
                    </a>
                </li>
            @endcan
            </ul>
        </li>

                <li class="nav-item">
                    <a href="{{ route("admin.service") }}" class="nav-link">
                        <i class="fa-fw  fa fa-sitemap nav-icon">

                        </i>
                        {{ trans('cruds.service.title') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin.team") }}" class="nav-link">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.team.title') }}
                    </a>
                </li>


             <!-- Nav Item - Utilities Collapse Menu -->
           
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.settings.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <!-- Nav Item - About -->
                            <li class="nav-item">
                                <a href="{{ route("admin.about") }}" class="nav-link">
                                    <i class="fa-fw fas fa-info nav-icon">

                                    </i>
                                    {{ trans('cruds.about.title') }}
                                </a>
                            </li>
                        
                        <!-- Nav Item -banner  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.banner") }}" class="nav-link">
                                    <i class="fa-fw fas fa fa-font-awesome nav-icon">

                                    </i>
                                    {{ trans('cruds.banner.title') }}
                                </a>
                            </li>
                            <!-- Nav Item -link  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.link") }}" class="nav-link">
                                    <i class="fa-fw fas fa-building nav-icon">

                                    </i>
                                    {{ trans('cruds.link.title') }}
                                </a>
                            </li>
                       <!-- Nav Item -generalsettings  -->
                            <li class="nav-item">
                                <a href="{{ route("admin.general") }}" class="nav-link">
                                    <i class="fa-fw fas fa fa-cog nav-icon">

                                    </i>
                                    {{ trans('cruds.generalsettings.title') }}
                                </a>
                            </li>
                        
                    </ul>
                </li>

            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>