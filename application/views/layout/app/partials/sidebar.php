<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="heading">
            <h3 class="uppercase">Navigation</h3>
        </li>

        <li class="nav-item <?php if(@$parent_navigation == 'task') echo 'active'; ?>">
            <a href="<?php echo app_url('task'); ?>" class="nav-link nav-toggle">
                <i class="icon-docs"></i>
                <span class="title">Todo</span>
            </a>
        </li>

    </ul>
</div>                