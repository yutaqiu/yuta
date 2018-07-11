<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="header-brand-img" alt="yuta logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">

                @guest
                    <div class="nav-item">
                        <div class="btn-list">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">登录</a>
                            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary">注册</a>
                        </div>
                    </div>
                @else
                    <div class="dropdown">
                        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                            <span class="avatar" style="background-image: url('{{ Auth::user()->avatar }}')"></span>
                            <span class="ml-2 d-none d-lg-block">
                              <span class="text-default">{{ Auth::user()->name }}</span>
                              <small class="text-muted d-block mt-1"></small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-user"></i> 我的主页
                            </a>
                            <a class="dropdown-item" href="#">
                                <span class="float-right"><span class="badge badge-primary">6</span></span>
                                <i class="dropdown-icon fe fe-mail"></i> 私信
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="dropdown-icon fe fe-settings"></i> 设置
                            </a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="dropdown-icon fe fe-log-out"></i> 退出
                                </button>
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
               data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>