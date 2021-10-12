<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">정보</div>
                <a class="nav-link {{ Request::is('skill') ? 'active' : '' }}" href="/skill">
                    스킬
                </a>
                <a class="nav-link {{ Request::is('person') ? 'active' : '' }}" href="/person">
                    우마무스메
                </a>
                <a class="nav-link {{ Request::is('card') ? 'active' : '' }}" href="#">
                    서포트카드
                </a>
                <div class="sb-sidenav-menu-heading">기능</div>
                <a class="nav-link {{ Request::is('support') ? 'active' : '' }}" href="#">
                    선택지 도우미
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
