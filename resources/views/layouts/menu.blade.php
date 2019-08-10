
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
            <a style="font-size: 16pt !important;" href="{{ url('/') }}">หน้าแรก</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('docter') }}">หมอพื้นบ้าน</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('spa') }}">สปา</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('product') }}">ผลิตภัณฑ์สมุนไพร</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('herb') }}">สมุนไพร</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('contact') }}">ติดต่อเรา</a>
        </li>
        @if (Cart::getTotalQuantity() > 0)
        <li>
                <a style="font-size: 16pt !important;" href="{{ route('cart.show') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    ตระกร้าสินค้า
                    <span class="badge">{{ Cart::getTotalQuantity() }}</span>
                </a>
            </li>
        @endif
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('login') }}">เข้าสู่ระบบ</a>
        </li>
        @if (Route::has('register'))
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('register') }}">สมัครสมาชิก</a>
        </li>
        @endif
        @else
        <li class="active">
            <a style="font-size: 16pt !important;" href="{{ url('/') }}">หน้าแรก</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('docter') }}">หมอพื้นบ้าน</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('spa') }}">สปา</a>
        </li>
        <li>
                <a style="font-size: 16pt !important;" href="{{ route('product') }}">ผลิตภัณฑ์สมุนไพร</a>
            </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('herb') }}">สมุนไพร</a>
        </li>
        <li>
            <a style="font-size: 16pt !important;" href="{{ route('contact') }}">ติดต่อเรา</a>
        </li>
        @if (Cart::getTotalQuantity() > 0)
        <li>
                <a style="font-size: 16pt !important;" href="{{ route('cart.show') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    ตระกร้าสินค้า
                    <span class="badge">{{ Cart::getTotalQuantity() }}</span>
                </a>
            </li>
        @endif
        <li class="nav-item dropdown">
            <a style="font-size: 16pt !important;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                {{-- <a style="font-size: 16pt !important;" class="dropdown-item" href="{{ route('order.profile') }}">
                    {{ __('รายการสั่งซื้อ') }}
                </a> --}}
                <a style="font-size: 16pt !important;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
