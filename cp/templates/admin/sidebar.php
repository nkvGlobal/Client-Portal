 <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="<?= PUBLIC_ROOT ?>images/defaultpic.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION["AdminName"]; ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                              <!--  <p class="user-roal">Administrator</p>-->
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?php echo $app->urlFor("dashboard"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                      <li class="bold"><a href="<?php echo $app->urlFor("adminusers"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Manage Admin</a>
                    </li>
					<li class="bold"><a href="<?php echo $app->urlFor("category"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Location Category</a>
                    </li>
					<li class="bold"><a href="<?php echo $app->urlFor("location"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Location</a>
                    </li>
					<li class="bold"><a href="<?php echo $app->urlFor("timeslot"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Timeslot</a>
                    </li>
					<li class="bold"><a href="<?php echo $app->urlFor("price-setting"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Pricing</a>
                    </li>
					<li class="bold"><a href="<?php echo $app->urlFor("customer"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Customer</a>
					<li class="bold"><a href="<?php echo $app->urlFor("bookings"); ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Bookings</a>
                    </li>
                    <li class="no-padding">
                        
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->