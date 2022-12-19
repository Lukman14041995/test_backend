<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('TEST') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('TEST') }}</a>
        </div>
        <ul class="nav">
          
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ __('Manjemen Pengguna') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Profil Anda') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Data Pengguna') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
        </ul>
    </div>
</div>