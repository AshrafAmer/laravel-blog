<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false">
                        <i class=" fas fa-chart-pie" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.list.categories') }}"
                        aria-expanded="false">
                        <i class=" fas fa-paperclip" aria-hidden="true"></i>
                        <span class="hide-menu">Categories</span>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.list.articles') }}"
                        aria-expanded="false">
                        <i class="far fa-file-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Articles</span>
                    </a>
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.list.comments') }}"
                        aria-expanded="false">
                        <i class=" fas fa-comment-dots" aria-hidden="true"></i>
                        <span class="hide-menu">Comments</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>