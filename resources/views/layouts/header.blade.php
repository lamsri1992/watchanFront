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
                <li><a class="nav-link" href="/">หน้าหลัก</a></li>
                <li class="dropdown"><a href="#"><span>เกี่ยวกับเรา</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/history">ประวัติโรงพยาบาล</a></li>
                        <li><a href="/structure">คณะผู้บริหาร</a></li>
                        <li><a href="/vision">วิสัยทัศน์ / พันธกิจ</a></li>
                        <li><a href="/plan">ยุทธศาสตร์ / แผนงาน</a></li>
                        <li><a href="/service">มาตรฐานขั้นตอนการให้บริการ</a></li>
                        <li><a href="/moph">ค่านิยม MOPH</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>ข่าวประกาศ</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/news">ข่าวประชาสัมพันธ์</a></li>
                        <li><a href="/event">ข่าวสารกิจกรรม</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>งาน ITA</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($ita_year as $res)
                        <li>
                            <a href="{{ url('/ita') }}">ITA ปี {{ $res->y_year }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ URL('/ethics') }}">ชมรมจริยธรรม</a></li>
                <li><a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfgySAVIqNHsZl56eGCOSZfOc4mn-Q0gBOlwT_wLd-EKXlhvg/viewform" target="_blank">แจ้งปัญหา / ร้องเรียน</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
