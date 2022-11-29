 <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6" style="width: 240px;top: 0px;z-index: 10;padding-top: 64px;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()?>"
                                aria-expanded="false">
                                <i class=" fab fa-adn" aria-hidden="true"></i>
                                <span class="">Accueil</span> 
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('Admin/index')?>"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="">Agents</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('home/stock')?>"
                                aria-expanded="false">
                                <i class=" fas fa-archive" aria-hidden="true"></i>
                                <span class="">Gestion Stock</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('Groups_sang/index')?>"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="">Gestion GS</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url()?>"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="">Google Map</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('Structure/index')?>"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="">Structure</span>
                            </a>
                        </li>
                      <div class="dropdown">
                          <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo base_url('home/rapport')?>" >
                                    <i class="fa fa-info-circle" aria-hidden="true"></i> Reporting
                                         <ul class="dropdown-menu">
                                             <li><hr class="dropdown-divider"></li>
                                             <li><a class="dropdown-item" href="<?php echo base_url('Admin/print')?>/<? ?>">Agents</a></li>
                                             <li><a class="dropdown-item" href="#">Structure</a></li>
                                             <li><a class="dropdown-item" href="#">Sang</a></li>
                                         </ul>
                                    </a>
                           </li>
                      </div>
                        
                    </ul>
                </nav>
                
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->