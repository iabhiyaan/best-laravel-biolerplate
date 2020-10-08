<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex align-items-center">
            <div>
                <img src="{{asset('/images/main/'.$dashboard_composer->logo)}}" class="rounded" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ Auth::user()->name }}</div>
            </div>
        </div>
        <ul class="side-menu metismenu">

            <li class="heading">Menu</li>
            <li>
                <a href="{{route('setting')}}"><i class="sidebar-item-icon fa fa-globe"></i>
                    <span class="nav-label">Site Setting</span></a>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">User Enquiry</span>
                    <i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('enquiryList')}}">
                            <span class="fa fa-plus"></span>
                            Enquiry List
                        </a>
                    </li>
                    <li>
                        <a href="{{route('subscriberList')}}">
                            <span class="fa fa-plus"></span>
                            Subscriber List
                        </a>
                    </li>

                </ul>
            </li>

            {{-- blogs --}}

            <li>
                <a href="javascript:;">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Blog</span>
                    <i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('blog.create')}}">
                            <span class="fa fa-plus"></span>
                            Add blog
                        </a>
                    </li>
                    <li>
                        <a href="{{route('blog.index')}}">
                            <span class="fa fa-plus"></span>
                            All Blogs
                        </a>
                    </li>

                </ul>
            </li>

            {{-- gallery --}}
            <li>
                <a href="javascript:;">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Gallery</span>
                    <i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('gallery.create')}}">
                            <span class="fa fa-plus"></span>
                            Add gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{route('gallery.index')}}">
                            <span class="fa fa-plus"></span>
                            All gallery
                        </a>
                    </li>

                </ul>
            </li>

            {{-- pages --}}
            <li>
                <a href="javascript:;">
                    <i class="sidebar-item-icon fa fa-sitemap"></i>
                    <span class="nav-label">Pages</span>
                    <i class="fa fa-angle-left arrow"></i>
                </a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('pages.create')}}">
                            <span class="fa fa-plus"></span>
                            Add Pages
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pages.index')}}">
                            <span class="fa fa-circle-o"></span>
                            All Pages
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</nav>