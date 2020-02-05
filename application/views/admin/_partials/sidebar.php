<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Maribu Valley</span>
        </a>
    </li>
  
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products/profile') ?>">
        <i class="fa fa-file"></i>
             <span> Profile </span>
        </a>

        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : ''?>">
        <a class="nav-link" href="<?php echo site_url('admin/products/gallery')?>">
        <i class="fa fa-camera"></i>
             <span> Gallery </span>
        </a>

        <li class="nav-item <?php echo $this->uri->segment(2)=='' ? 'active' : ''?>">
         <a class="nav-link" href="<?php echo site_url('admin/products/contact')?>">
        <i class="fa fa-book"></i>
             <span> Contact</span>
        </a>
                    
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Sing Up</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/new_form') ?>">Registrasi User</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List User</a>
        </div>
    </li>

   

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">
            <i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
            <span class="sr-only"></span>
            <span>Settings</span></a>
    </li>
</ul>

