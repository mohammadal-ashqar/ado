<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{ URL('/') }}">

                <x-application-logo   class="main-logo" alt="logo"/></a>
            <a class="desktop-logo logo-dark active" href="{{ URL('/') }}">
                <x-application-logo   class="main-logo" alt="logo"/></a>
            <a class="logo-icon mobile-logo icon-light active" href="{{ URL('/') }}">
                <x-application-icon   class="logo" alt="logo"/>
            <a class="logo-icon mobile-logo icon-dark active" href="{{ URL('/') }}">
                <x-application-icon   class="logo" alt="logo"/></a>
        </div>
        <div class="main-sidemenu">
       <x-admin.auth-data/>

            <ul class="side-menu">
                <li class="side-item side-item-category">لوحة التحكم</li>
                <x-admin.single-side name="Home" lable="الرئيسية" :route="route('admin.index')" icon="fe fe-home" />

                @can('visits-list')
                <x-admin.single-side name="visits" lable="الزيارات" :route="route('admin.visits')" icon="fe fe-eye" />
                @endcan

                <li class="side-item side-item-category">إدارة المحتوى</li>
                <x-admin.side-bar name="polls" lable="الآراء" :home="route('admin.polls.index')" :create="route('admin.polls.create')" icon="fe fe-message-circle"/>
                <x-admin.side-bar name="team" lable="الفريق" :home="route('admin.team.index')" :create="route('admin.team.create')" icon="fe fe-user"/>
                <x-admin.side-bar name="client" lable="العملاء" :home="route('admin.client.index')" :create="route('admin.client.create')" icon="fe fe-users"/>
                <x-admin.side-bar name="service" lable="الخدمات" :home="route('admin.service.index')" :create="route('admin.service.create')" icon="fe fe-slack"/>
                <x-admin.side-bar name="package" lable="الباقات" :home="route('admin.package.index')" :create="route('admin.package.create')" icon="fe fe-shopping-cart"/>
                <x-admin.side-bar name="project" lable="المشاريع" :home="route('admin.project.index')" :create="route('admin.project.create')" icon="fe fe-layers"/>
                <x-admin.side-bar name="blog" lable="المدونة" :home="route('admin.blog.index')" :create="route('admin.blog.create')" icon="fe fe-file-text"/>
                <x-admin.side-bar name="user" lable="المستخدمين" :home="route('admin.user.index')" :create="route('admin.user.create')" icon="fe fe-users"/>
                <x-admin.side-bar name="role" lable="الصلاحيات" :home="route('admin.role.index')" :create="route('admin.role.create')" icon="fe fe-lock"/>


            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
