<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="header-brand-img" alt="yuta logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item">
                    <div class="btn-list">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">登录</a>
                        <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary">注册</a>
                    </div>
                </div>
                <div class="dropdown">
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>