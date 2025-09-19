<?php
    use Spatie\Permission\Models\Role;
    use Illuminate\Support\Facades\Auth;

    $admin = Role::findByName('super admin')->users->first();
//    dd($admin);
//dd($admin->name);
?>

<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">

        <ul class="navbar-nav">


            <li class="nav-item dropdown">




            </li>
            <li class="nav-item dropdown">







            <li class="nav-item dropdown">



                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">



                        <div class="text-center">

                            <p class="tx-16 fw-bolder"> <?php echo e($admin->name); ?> </p>
                            <p class="tx-12 text-muted"><?php echo e($admin->email); ?></p>
                        </div>
                    </div>
    <ul class="list-unstyled p-1">
    <li class="dropdown-item py-2">
        <a href="<?php echo e(route('dashboard')); ?>" class="text-body ms-0">
        <i class="me-2 icon-md" data-feather="user"></i>
        <span>Profile</span>
        </a>
    </li>


















    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\admin\partials\navbar.blade.php ENDPATH**/ ?>