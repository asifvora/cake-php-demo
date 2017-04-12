<?php
$sidebarMenus=[
    'dashboard'=>[
        'text'=>'Dashboard',
        'routeName'=>'/dashbords',
        'icon'=>'ti-home'
    ],
    'departments'=>[
        'text'=>'Departments',
        'routeName'=>'/departments',
        'icon'=>'ti-user'
    ],
    'designations'=>[
        'text'=>'Designations',
        'routeName'=>'/designations',
        'icon'=>'ti-user'
    ],
    'employees'=>[
        'text'=>'Employees',
        'routeName'=>'/employees',
        'icon'=>'ti-user'
    ],
    'users'=>[
        'text'=>'Users',
        'routeName'=>'/users',
        'icon'=>'ti-user'
    ],
];
?>

<aside class="sidebar-navigation">
    <div class="scrollbar-wrapper">
        <div>
            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                <i class="mdi mdi-close"></i>
            </button>
            <!-- User Detail box -->
            <div class="user-details">
                <div class="pull-left">
                                    <?= $this->Html->image('admin_profile/nopic.jpg',['class'=>'thumb-md img-cinrcle','alt'=>'img'])?>
                </div>
                <div class="user-info">
                    <a href="#"><?php echo "Asif Vora"; //echo ucfirst($user['name']);?></a>
                    <p class="text-muted m-0">Administrator</p>
                </div>
            </div>
            <!--- End User Detail box -->


            <!-- Left Menu Start -->
            <ul class="metisMenu nav" id="side-menu">      
                <?php foreach($sidebarMenus as $key=> $menu){?>
                    <li><a href="<?php echo $menu['routeName'];?>" title="<?php echo $menu['text'];?>">
                            <i class="<?= $menu['icon'];?>"></i> <?php echo $menu['text'];?> 
                        </a>
                    </li>  
                <?php }?>
                <li>
                    <a href="javascript: void(0);" aria-expanded="true" title="Settings"><i class="ti-settings"></i> Settings <span class="fa arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="true">
                        <li><a href="#" title="Change Logo">Change Logo</a></li>
                    </ul>
                </li>



            </ul>

        </div>
    </div><!--Scrollbar wrapper-->
</aside>
