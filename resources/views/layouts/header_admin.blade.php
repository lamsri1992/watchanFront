 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
     <div class="container d-flex justify-content-between">
         <div class="contact-info d-flex align-items-center">
             <ul class="top-bar-info list-inline-item pl-0 mb-0" style="padding-left: 0;">
                 <li class="list-inline-item">
                     <a href="https://www.facebook.com/watchanhospital" target="_blank">
                         <i class="fab fa-facebook-square"></i> Facebook Page
                     </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-phone-square-alt"></i> 053-484010
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="/" class="logo me-auto"><img src="{{ asset('img/wc_logo_1.png') }}" alt="" class="img-fluid"></a>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a href="#" class="nav-link"> {{ "สวัสดีคุณ, ".Auth::user()->name }}</a>
                </li>
                <li class="dropdown"><a href="#"><span>เมนูผู้ดูแลระบบ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/home') }}">จัดการข้อมูลเว็บไซต์</a></li>
                        <li><a href="{{ url('/logout') }}">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
