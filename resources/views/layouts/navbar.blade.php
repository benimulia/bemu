<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li class="{{Request::is('/')?'current-menu-item':''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('about')?'current-menu-item':''}}"><a href="/aboutus">About us</a></li>
        <li class="{{Request::is('news')?'current-menu-item':''}}"><a href="/news">News</a></li>
        <li class="{{Request::is('organisasi')?'current-menu-item':''}}"><a href="/organisasi">Organization</a></li>
        <li class="{{Request::is('downloadcenter')?'current-menu-item':''}}"><a href="/downloadcenter">Download Center</a></li>
        <li class="{{Request::is('contact')?'current-menu-item':''}}"><a href="/contact">Contact</a></li>
    </ul>
</nav>