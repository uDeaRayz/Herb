<nav>
    <div id="logo">
        <h1>
            <a href="{{ url('/') }}">
                <img style="width:55px" src="{{ URL::asset('images/Logo.png') }}"
                    alt="หาหมอพื้นบ้าน">
            </a>
        </h1>
    </div>

    <label for="drop" class="toggle">Menu</label>
    <input type="checkbox" id="drop">
    <ul class="menu mt-2"  style="z-index: 999">
        @guest
        <li class="active">
            <a href="{{ url('/') }}">หน้าแรก</a>
        </li>
        <li>
            <a href="{{ route('docter') }}">หมอพื้นบ้าน</a>
        </li>
        <li>
            <a href="{{ route('spa') }}">สปา</a>
        </li>
        <li>
            <a href="{{ route('herb') }}">สมุนไพร</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">ติดต่อเรา</a>
        </li>
        <li>
                <a href="{{ route('order') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    ตระกร้าสินค้า
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                </a>
            </li>
        <li>
            <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
        </li>
        @if (Route::has('register'))
        <li>
            <a href="{{ route('register') }}">สมัครสมาชิก</a>
        </li>
        @endif
        @else
        <li class="active">
            <a href="{{ url('/') }}">หน้าแรก</a>
        </li>
        <li>
            <a href="{{ route('docter') }}">หมอพื้นบ้าน</a>
        </li>
        <li>
            <a href="{{ route('spa') }}">สปา</a>
        </li>
        <li>
            <a href="{{ route('herb') }}">สมุนไพร</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">ติดต่อเรา</a>
        </li>
        <li>
            <a href="{{ route('order') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                ตระกร้าสินค้า
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('order.profile') }}">
                    {{ __('รายการสั่งซื้อ') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('ออกจากระบบ') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</nav>
