<div class="app-sidebar__user clearfix">
    <div class="dropdown user-pro-body">
        <div class="">
            <img alt="user-img" class="avatar avatar-xl brround"
                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"><span
                class="avatar-status profile-status bg-green"></span>
        </div>
        <div class="user-info">
            <h4 class="fw-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
            <span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
        </div>
    </div>
</div>
<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
    width="24" height="24" viewBox="0 0 24 24">
    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
</svg>
</div>
