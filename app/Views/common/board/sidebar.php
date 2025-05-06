<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background: #ffffff !important;">
  <!-- Brand Logo -->
  <a href="<?= base_url('/') ?>" target="_blank" class="text-center" style="float: none !important;">
    <img src="<?= base_url('public') ?>/images/zeplinix_logo.png" alt="Protectease" class="brand-image elevation-1" style="width: -webkit-fill-available;">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="mt-1 pb-1 mb-1 d-flex">
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline d-none">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item" id="navDashboard">
            <a href="<?= site_url($panel.'/dashboard') ?>" class="nav-link" id="itemDashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item" id="navInvoices">
            <a href="<?= site_url($panel.'/manage_invoices') ?>" class="nav-link" id="itemInvoices">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Invoices
              </p>
            </a>
          </li>
          <li class="nav-item" id="navQuotations">
            <a href="<?= site_url($panel.'/manage_quotations') ?>" class="nav-link" id="itemQuotations">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Quotations
              </p>
            </a>
          </li>
          <li class="nav-item" id="navPurchaseOrder">
            <a href="<?= site_url($panel.'/manage_purchase_orders') ?>" class="nav-link" id="itemPurchaseOrder">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Purchase Orders
              </p>
            </a>
          </li>
          <?php if(session()->get('role_id') == 1){ ?>
            <li class="nav-item" id="navUsers">
              <a href="#" class="nav-link" id="active_navUsers">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= site_url($panel.'/users'); ?>" class="nav-link" id="manageUsers">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url($panel.'/users/new'); ?>" class="nav-link" id="registerUsers">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register User</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <li class="nav-item" id="navClients">
            <a href="<?= site_url($panel.'/clients') ?>" class="nav-link" id="itemClients">
              <i class="nav-icon fas fa-user-secret"></i>
              <p>
                Clients
              </p>
            </a>
          </li>
          <li class="nav-item" id="navMasters">
            <a href="#" class="nav-link" id="active_navMasters">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url($panel.'/masters/config'); ?>" class="nav-link" id="manageConfiguration">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage GST</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url($panel.'/masters/units'); ?>" class="nav-link" id="manageUnits">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Units</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="navCompanySettings">
            <a href="<?= site_url($panel.'/companies') ?>" class="nav-link" id="itemCompanySettings">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Companies
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="<?= site_url($panel.'/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>