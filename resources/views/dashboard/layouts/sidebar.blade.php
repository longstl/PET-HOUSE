<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/assets/images/user.png" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li {{Route::is('dashboard') ? 'class=active' : ''}}>
                    <a href="/dashboard">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li {{Route::is('typography') ? 'class=active' : ''}}>
                    <a href="/typography">
                        <i class="material-icons">text_fields</i>
                        <span>Typography</span>
                    </a>
                </li>
                <li {{Route::is('helper-classes') ? 'class=active' : ''}}>
                    <a href="/helper-classes">
                        <i class="material-icons">layers</i>
                        <span>Helper Classes</span>
                    </a>
                </li>
                <li {{Route::is('widgets.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('widgets.cards.*') ? 'class=active' : ''}}>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li {{Route::is('widgets.cards.basic') ? 'class=active' : ''}}>
                                    <a href="/widgets/cards/basic">Basic</a>
                                </li>
                                <li {{Route::is('widgets.cards.colored') ? 'class=active' : ''}}>
                                    <a href="/widgets/cards/colored">Colored</a>
                                </li>
                                <li {{Route::is('widgets.cards.no-header') ? 'class=active' : ''}}>
                                    <a href="/widgets/cards/no-header">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li {{Route::is('widgets.info-box.*') ? 'class=active' : ''}}>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li {{Route::is('widgets.info-box.info-box-1') ? 'class=active' : ''}}>
                                    <a href="/widgets/info-box/info-box-1">Info Box 1</a>
                                </li>
                                <li {{Route::is('widgets.info-box.info-box-2') ? 'class=active' : ''}}>
                                    <a href="/widgets/info-box/info-box-2">Info Box 2</a>
                                </li>
                                <li {{Route::is('widgets.info-box.info-box-3') ? 'class=active' : ''}}>
                                    <a href="/widgets/info-box/info-box-3">Info Box 3</a>
                                </li>
                                <li {{Route::is('widgets.info-box.info-box-4') ? 'class=active' : ''}}>
                                    <a href="/widgets/info-box/info-box-4">Info Box 4</a>
                                </li>
                                <li {{Route::is('widgets.info-box.info-box-5') ? 'class=active' : ''}}>
                                    <a href="/widgets/info-box/info-box-5">Info Box 5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('ui.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('ui.alerts') ? 'class=active' : ''}}>
                            <a href="/ui/alerts">Alerts</a>
                        </li>
                        <li {{Route::is('ui.animations') ? 'class=active' : ''}}>
                            <a href="/ui/animations">Animations</a>
                        </li>
                        <li {{Route::is('ui.badges') ? 'class=active' : ''}}>
                            <a href="/ui/badges">Badges</a>
                        </li>
                        <li {{Route::is('ui.breadcrumbs') ? 'class=active' : ''}}>
                            <a href="/ui/breadcrumbs">Breadcrumbs</a>
                        </li>
                        <li {{Route::is('ui.buttons') ? 'class=active' : ''}}>
                            <a href="/ui/buttons">Buttons</a>
                        </li>
                        <li {{Route::is('ui.collapse') ? 'class=active' : ''}}>
                            <a href="/ui/collapse">Collapse</a>
                        </li>
                        <li {{Route::is('ui.colors') ? 'class=active' : ''}}>
                            <a href="/ui/colors">Colors</a>
                        </li>
                        <li {{Route::is('ui.dialogs') ? 'class=active' : ''}}>
                            <a href="/ui/dialogs">Dialogs</a>
                        </li>
                        <li {{Route::is('ui.icons') ? 'class=active' : ''}}>
                            <a href="/ui/icons">Icons</a>
                        </li>
                        <li {{Route::is('ui.labels') ? 'class=active' : ''}}>
                            <a href="/ui/labels">Labels</a>
                        </li>
                        <li {{Route::is('ui.list-group') ? 'class=active' : ''}}>
                            <a href="/ui/list-group">List Group</a>
                        </li>
                        <li {{Route::is('ui.media-object') ? 'class=active' : ''}}>
                            <a href="/ui/media-object">Media Object</a>
                        </li>
                        <li {{Route::is('ui.modals') ? 'class=active' : ''}}>
                            <a href="/ui/modals">Modals</a>
                        </li>
                        <li {{Route::is('ui.notifications') ? 'class=active' : ''}}>
                            <a href="/ui/notifications">Notifications</a>
                        </li>
                        <li {{Route::is('ui.pagination') ? 'class=active' : ''}}>
                            <a href="/ui/pagination">Pagination</a>
                        </li>
                        <li {{Route::is('ui.preloaders') ? 'class=active' : ''}}>
                            <a href="/ui/preloaders">Preloaders</a>
                        </li>
                        <li {{Route::is('ui.progressbars') ? 'class=active' : ''}}>
                            <a href="/ui/progressbars">Progress Bars</a>
                        </li>
                        <li {{Route::is('ui.range-sliders') ? 'class=active' : ''}}>
                            <a href="/ui/range-sliders">Range Sliders</a>
                        </li>
                        <li {{Route::is('ui.sortable-nestable') ? 'class=active' : ''}}>
                            <a href="/ui/sortable-nestable">Sortable & Nestable</a>
                        </li>
                        <li {{Route::is('ui.tabs') ? 'class=active' : ''}}>
                            <a href="/ui/tabs">Tabs</a>
                        </li>
                        <li {{Route::is('ui.thumbnails') ? 'class=active' : ''}}>
                            <a href="/ui/thumbnails">Thumbnails</a>
                        </li>
                        <li {{Route::is('ui.tooltips-popovers') ? 'class=active' : ''}}>
                            <a href="/ui/tooltips-popovers">Tooltips & Popovers</a>
                        </li>
                        <li {{Route::is('ui.waves') ? 'class=active' : ''}}>
                            <a href="/ui/waves">Waves</a>
                        </li>
                    </ul>
                </li>
                <li  {{Route::is('forms.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li  {{Route::is('forms.basic-form-elements') ? 'class=active' : ''}}>
                            <a href="/forms/basic-form-elements">Basic Form Elements</a>
                        </li>
                        <li  {{Route::is('forms.advanced-form-elements') ? 'class=active' : ''}}>
                            <a href="/forms/advanced-form-elements">Advanced Form Elements</a>
                        </li>
                        <li  {{Route::is('forms.form-examples') ? 'class=active' : ''}}>
                            <a href="/forms/form-examples">Form Examples</a>
                        </li>
                        <li  {{Route::is('forms.form-validation') ? 'class=active' : ''}}>
                            <a href="/forms/form-validation">Form Validation</a>
                        </li>
                        <li  {{Route::is('forms.form-wizard') ? 'class=active' : ''}}>
                            <a href="/forms/form-wizard">Form Wizard</a>
                        </li>
                        <li  {{Route::is('forms.editors') ? 'class=active' : ''}}>
                            <a href="/forms/editors">Editors</a>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('tables.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('tables.normal-tables') ? 'class=active' : ''}}>
                            <a href="/tables/normal-tables">Normal Tables</a>
                        </li>
                        <li {{Route::is('tables.jquery-datatable') ? 'class=active' : ''}}>
                            <a href="/tables/jquery-datatable">Jquery Datatables</a>
                        </li>
                        <li {{Route::is('tables.editable-table') ? 'class=active' : ''}}>
                            <a href="/tables/editable-table">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('medias.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('medias.image-gallery') ? 'class=active' : ''}}>
                            <a href="/medias/image-gallery">Image Gallery</a>
                        </li>
                        <li {{Route::is('medias.carousel') ? 'class=active' : ''}}>
                            <a href="/medias/carousel">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('charts.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('charts.morris') ? 'class=active' : ''}}>
                            <a href="/charts/morris">Morris</a>
                        </li>
                        <li {{Route::is('charts.flot') ? 'class=active' : ''}}>
                            <a href="/charts/flot">Flot</a>
                        </li>
                        <li {{Route::is('charts.chartjs') ? 'class=active' : ''}}>
                            <a href="/charts/chartjs">ChartJS</a>
                        </li>
                        <li {{Route::is('charts.sparkline') ? 'class=active' : ''}}>
                            <a href="/charts/sparkline">Sparkline</a>
                        </li>
                        <li {{Route::is('charts.jquery-knob') ? 'class=active' : ''}}>
                            <a href="/charts/jquery-knob">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('examples.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/examples/sign-in">Sign In</a>
                        </li>
                        <li>
                            <a href="/examples/sign-up">Sign Up</a>
                        </li>
                        <li>
                            <a href="/examples/forgot-password">Forgot Password</a>
                        </li>
                        <li {{Route::is('examples.blank') ? 'class=active' : ''}}>
                            <a href="/examples/blank">Blank Page</a>
                        </li>
                        <li>
                            <a href="/examples/404">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="/examples/500">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li {{Route::is('maps.*') ? 'class=active' : ''}}>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li {{Route::is('maps.google-map') ? 'class=active' : ''}}>
                            <a href="/maps/google-map">Google Map</a>
                        </li>
                        <li {{Route::is('maps.yandex-map') ? 'class=active' : ''}}>
                            <a href="/maps/yandex-map">Yandex Map</a>
                        </li>
                        <li {{Route::is('maps.jvector-map') ? 'class=active' : ''}}>
                            <a href="/maps/jvector-map">jVector Map</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages/changelogs.html">
                        <i class="material-icons">update</i>
                        <span>Changelogs</span>
                    </a>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
