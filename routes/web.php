<?php

//PMWay
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogPostController;
//use App\Http\Controllers\backend\PostController;  //NB Schiff
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\ResumeController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SiteSettingsController;
use App\Http\Controllers\backend\SkillsController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\pmboksixController;
use App\Http\Controllers\frontend\UserPostsBlogPostController;
use App\Http\Controllers\IndexController;
use App\Livewire\Pmway\Laws;
use App\Livewire\PrivateOne;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
//Schiff
use App\Models\BlogPost;
use App\Events\ChatMessage;
use App\Livewire\Createpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use Illuminate\Support\Facades\Gate;
use App\Livewire\Avatarform;
//


Route::view('/tailwind', 'tailwind')->name('tailwind');

Route::get('/optimize', function () {
    $kernel = app()->make(Illuminate\Contracts\Console\Kernel::class);

    $kernel->call('queue:restart');
    echo "Queue restarted.\n";
    flush();

    $kernel->call('cache:clear');
    echo "Cache cleared.\n";
    flush();

    $kernel->call('config:cache');
    echo "Config cached.\n";
    flush();

    $kernel->call('route:clear');
    echo "Routes cleared.\n";
    flush();

    $kernel->call('view:clear');
    echo "Views cleared.\n";
    flush();

    $kernel->call('optimize:clear');
    echo "Optimization cleared.\n";
    flush();

    $kernel->call('optimize');
    echo "Optimization completed.\n";
    flush();

    $kernel->call('config:clear');
    echo "Config cleared.\n";
    flush();

    $output = null;
    $result = null;
    exec('composer dump-autoload', $output, $result);
    echo "Composer autoload dumped.\n";
    flush();

    echo 'All optimization steps completed!';
    flush();
});

//Route::get('/dump-autoload', function () {
//    try {
//        exec('composer dump-autoload', $output, $returnVar);
//        if ($returnVar === 0) {
//            return 'Composer autoload dumped successfully!';
//        } else {
//            return 'Error dumping composer autoload: ' . implode("\n", $output);
//        }
//    } catch (\Exception $e) {
//        return 'Error dumping composer autoload: ' . $e->getMessage();
//        }
//});

Route::get('routeslisting', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

Route::get('/route-cache', function () {
    try {
        $exitCode = Artisan::call('route:cache');
        $output = Artisan::output();
        if ($exitCode === 0) {
            return 'Route cache generated!';
        } else {
            return 'Error generating route cache: ' . $output;
        }
    } catch (\Exception $e) {
        return 'Error generating route cache: ' . $e->getMessage();
    }
});


Route::get('/route-clear', function () {
    try {
        Artisan::call('route:clear');
        return 'Route cache cleared!';
    } catch (\Exception $e) {
        return 'Error clearing route cache: ' . $e->getMessage();
    }
});


Route::get('/greeter', \App\Livewire\Greeter::class)->name('greeter');  //has tailwind grid

//Route::redirect('/', '/pmwayguest')->withoutMiddleware([Authenticate::class]);
Route::get('/simulate-500', function () {
    abort(500, 'Simulated 500 error');
});




// Route::get('/fontawesome6/fontawesome6/pro/css/all.min.css', function () {
//     $css = Cache::remember('fontawesome_css', 60, function () {
//         return file_get_contents(public_path('fontawesome6/fontawesome6/pro/css/all.min.css'));
//     });
//     return response($css)->header('Content-Type', 'text/css');
// });





//Route::get('/', \App\Livewire\Home::class)->name('home');

Route::get('/', function () {
    return redirect('/cv/index.html');
});



Route::get('/home', \App\Livewire\Home::class)->name('home');
// Route::get('/pmwayguest', [FrontendController::class, 'pmwayguest'])->name('pmwayguest')->withoutMiddleware([Authenticate::class]);
//Route::get('/pmwayauth', [FrontendController::class, 'pmwayauth'])->middleware(['auth', 'verified'])->name('pmwayauth');
Route::get('/laws', \App\Livewire\Pmway\Laws::class)->name('laws');
Route::get('/about', \App\Livewire\Pmway\About::class)->name('about');

Route::get('/accelerate', \App\Livewire\Accelerate::class);


//////////////////////ITIL 4
Route::get('/itilfour', \App\Livewire\Pmway\Itil\ItilFourPractices::class)->name('itilfour');
Route::get('/view-pdf/{filename}', function ($filename) {
    $filePath = base_path('resources/views/livewire/pmway/itil/itil4guides/' . $filename);
    if (file_exists($filePath)) {
        return response()->file($filePath);
    } else {
        abort(404);
    }
});




//////////////////////ITIL 3//////////////////////
//Route::get('/itiloverview', \App\Livewire\Itil\Pmway\itilfourpractices::class)->name('itilfourpractices');
//Route::get('/itilss', [IndexController::class, 'itilss']);
//Route::get('/itilsd', [IndexController::class, 'itilsd']);
//Route::get('/itilst', [IndexController::class, 'itilst']);
//Route::get('/itilso', [IndexController::class, 'itilst']);
//Route::get('/itilcsi', [IndexController::class, 'itilcsi']);


Route::get('/lwsearch', \App\Livewire\LWSearch::class);



Route::post('/forcelogout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('forcelogout');



// Frontend all routes
Route::get('/portfoliodash', [AdminController::class, 'PortfolioDash'])->name('portfoliodash')->middleware(['auth', 'verified', 'permission:portfolio dash']);
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/post/details/{slug}', [FrontendController::class, 'BlogDetails']);
Route::get('/post/details/{id}', [FrontendController::class, 'BlogDetails']);

Route::post('store-comment', [FrontendController::class, 'StoreComment'])->name('store.comment');
Route::post('store-contact-message', [FrontendController::class, 'StoreContactMessage'])->name('store.contact.message');

Route::get('/dashboard', \App\Livewire\Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Upload and Download documents
Route::get('/document-uploads', [DocumentController::class, 'uploads'])->name('uploads')->middleware(['auth', 'verified', 'permission:document uploads']);
Route::post('/document-upload', [DocumentController::class, 'upload'])->name('upload')->middleware(['auth', 'verified', 'permission:document upload']);
Route::get('/documents', [DocumentController::class, 'documents'])->name('documents');
Route::get('/downloadbyshortname/{shortname}', [DocumentController::class, 'downloadByShortName'])->name('downloadByShortName')->middleware(['auth', 'verified', 'permission:download byshortname']);
Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('documents.destroy')->middleware(['auth', 'verified', 'permission:documents destroy']);
Route::get('/documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit')->middleware(['auth', 'verified', 'permission:documents edit']);
Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('documents.update')->middleware(['auth', 'verified', 'permission:documents update']);
Route::get('/docusearch/{term}', [DocumentController::class, 'search']);
//Another way to get at documents in the Home\resources or other folder
Route::get('/download-pdf/{filename}', [IndexController::class, 'downloadPdf'])->name('download.pdf');


// Blog Posts

Route::post('/update-post-status', [BlogPostController::class, 'updatePostStatus'])->name('update.post.status')->middleware(['auth', 'verified', 'permission:blog approved']);
Route::get('/useraddpost', [UserPostsBlogPostController::class, 'UserAddPost'])->name('user.add.post')->middleware(['auth', 'verified']);
Route::post('/userstorepost', [UserPostsBlogPostController::class, 'UserStorePost'])->name('user.store.post')->middleware(['auth', 'verified']);
Route::get('/search', [UserPostsBlogPostController::class, 'usersearch'])->name('usersearch');



Route::get('/post/details', [UserPostsBlogPostController::class, 'firstPost'])->name('first.post');




Route::controller(BlogPostController::class)->group(function () {
    Route::get('all-post', 'AllPost')->middleware(['auth', 'verified', 'permission:all post'])->name('all.post');
    Route::get('/blogsbyauthor', [BlogPostController::class, 'blogsByAuthor'])->middleware(['auth', 'verified', 'permission:all postsbyauthor'])->name('blogs.by.author');



    Route::get('add-post', 'AddPost')->middleware(['auth', 'verified', 'permission:add post'])->name('add.post');
    Route::post('store-post', 'StorePost')->middleware(['auth', 'verified', 'permission:store post'])->name('store.post');
    Route::get('edit-post/{id}', 'EditPost')->middleware(['auth', 'verified', 'permission:edit post'])->name('edit.post');
    Route::post('update-post/{id}', 'UpdatePost')->middleware(['auth', 'verified', 'permission:update post'])->name('update.post');
    Route::get('delete-post/{id}', 'DeletePost')->middleware(['auth', 'verified', 'permission:delete post'])->name('delete.post');
});






//Route::controller(CommentController::class)->group(function(){
//    Route::post('user-comments', 'UserComments')->name('user.comments');
//    Route::post('comment-status-update', 'CommentStatusUpdate')->name('comment.status.update');
//});

Route::middleware(['auth'])->group(function (): void {
    // Impersonations
    Route::post('/impersonate/{user}', [\App\Http\Controllers\ImpersonationController::class, 'store'])->name('impersonate.store')->middleware('permission:impersonate');
    Route::delete('/impersonate/stop', [\App\Http\Controllers\ImpersonationController::class, 'destroy'])->name('impersonate.destroy');

    // Settings
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', \App\Livewire\Settings\Profile::class)->name('settings.profile');
    Route::get('settings/password', \App\Livewire\Settings\Password::class)->name('settings.password');
    Route::get('settings/appearance', \App\Livewire\Settings\Appearance::class)->name('settings.appearance');
    Route::get('settings/locale', \App\Livewire\Settings\Locale::class)->name('settings.locale');

    // Admin
//    Route::middleware(['auth', 'verified', 'can:is-super-admin'])->group(function () {
//        Route::get('/privateone', PrivateOne::class);
//    });
    Route::middleware(['auth', 'verified', 'role:Super Admin'])->group(function () {
        Route::get('/privateone', PrivateOne::class);
    });

    Route::get('/laws', Laws::class);




    // Hero section all routes
    Route::controller(HeroController::class)->group(function () {
        Route::get('here-section', 'HeroSection')->name('hero.section')->middleware(['auth', 'verified', 'permission:all hero']);
        //        Route::post('update-here-section', 'UpdateHeroSection')->name('update.hero.section');
        Route::post('update-here-section', [HeroController::class, 'UpdateHeroSection'])->name('update.here.section')->middleware(['auth', 'verified', 'permission:update hero']);

        //        Route::post('update-here-section', 'HeroController@UpdateHeroSection')->name('update.here.section');
    });

    // Services section all routes
    Route::controller(ServicesController::class)->group(function () {
        Route::get('all-services', 'AllServices')->name('all.services')->middleware(['auth', 'verified', 'permission:all service']);
        Route::get('add-service', 'AddService')->name('add.service')->middleware(['auth', 'verified', 'permission:add service']);
        Route::post('store-service', 'StoreService')->name('store.service')->middleware(['auth', 'verified', 'permission:store service']);
        Route::get('edit-service/{id}', 'EditService')->name('edit.service')->middleware(['auth', 'verified', 'permission:edit service']);
        Route::post('update-service', 'UpdateService')->name('update.service')->middleware(['auth', 'verified', 'permission:update service']);
        Route::get('delete-service/{id}', 'DeleteService')->name('delete.service')->middleware(['auth', 'verified', 'permission:delete service']);
    });

    // Portfolio/Recent works section all routes
    Route::controller(PortfolioController::class)->group(function () {
        Route::get('all-recent-works', 'AllRecentWorks')->name('all.recent.works')->middleware(['auth', 'verified', 'permission:all work']);
        Route::get('all-work', 'AddWork')->name('add.work')->middleware(['auth', 'verified', 'permission:add work']);
        Route::post('store-work', 'StoreWork')->name('store.work')->middleware(['auth', 'verified', 'permission:store work']);
        Route::get('edit-word/{id}', 'EditWork')->name('edit.work')->middleware(['auth', 'verified', 'permission:edit work']);
        Route::post('update-work', 'UpdateWork')->name('update.work')->middleware(['auth', 'verified', 'permission:update work']);
        Route::get('delete-word/{id}', 'DeleteWork')->name('delete.work')->middleware(['auth', 'verified', 'permission:delete work']);
    });


    // My Experience all routes
    Route::controller(ResumeController::class)->group(function () {
        Route::get('my-experience', 'MyExperience')->name('my.experience')->middleware(['auth', 'verified', 'permission:all experience']);
        Route::post('store-experience', 'StoreExperience')->name('store.experience')->middleware(['auth', 'verified', 'permission:store experience']);
        Route::get('edit-experience/{id}', 'EditExperience')->middleware(['auth', 'verified', 'permission:edit experience']);
        Route::post('update-experience', 'UpdateExperience')->name('update.experience')->middleware(['auth', 'verified', 'permission:update experience']);
        Route::get('delete-experience/{id}', 'DeleteExperience')->name('delete.experience')->middleware(['auth', 'verified', 'permission:delete experience']);

        // My Education route
        Route::get('my-education', 'MyEducation')->name('my.education')->middleware(['auth', 'verified', 'permission:all education']);
    });

    // My skills section all routes
    Route::controller(SkillsController::class)->group(function () {
        Route::get('add-skill', 'AddSkill')->name('add.skill')->middleware(['auth', 'verified', 'permission:add skill']);
        Route::post('store-skill', 'StoreSkill')->name('store.skill')->middleware(['auth', 'verified', 'permission:store skill']);
        Route::get('all-skills', 'AllSkills')->name('all.skills')->middleware(['auth', 'verified', 'permission:all skill']);
        Route::get('edit-skill/{id}', 'EditSkill')->name('edit.skill')->middleware(['auth', 'verified', 'permission:edit skill']);
        Route::post('update-skill', 'UpdateSkill')->name('update.skill')->middleware(['auth', 'verified', 'permission:update skill']);
        Route::get('delete-skill/{id}', 'DeleteSkill')->name('delete.skill')->middleware(['auth', 'verified', 'permission:delete skill']);
    });

    // Testimonial section all routes
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('add-testimony', 'AddTestimony')->name('add.testimony')->middleware(['auth', 'verified', 'permission:add testimony']);
        Route::post('store-testimony', 'StoreTestimony')->name('store.testimony')->middleware(['auth', 'verified', 'permission:store testimony']);
        Route::get('all-testimoies', 'AllTestimonies')->name('all.testimoies')->middleware(['auth', 'verified', 'permission:all testimony']);
        Route::get('edit-testimony/{id}', 'EditTestimony')->name('edit.testimony')->middleware(['auth', 'verified', 'permission:edit testimony']);
        Route::post('update-testimony', 'UpdateTestimony')->name('update.testimony')->middleware(['auth', 'verified', 'permission:update testimony']);
        Route::get('delete-testimony/{id}', 'DeleteTestimony')->name('delete.testimony')->middleware(['auth', 'verified', 'permission:delete testimony']);
    });

    // Comments section all routes
    Route::controller(CommentController::class)->group(function () {
        Route::get('user-comments', 'UserComments')->name('user.comments');
        Route::post('comment-status-update', [CommentController::class, 'CommentStatusUpdate'])->name('comment.status.update')->middleware(['auth', 'verified', 'permission:update comment']);



        // Contacts Message all routes
        Route::get('contact-message', 'ContactMessage')->name('contact.message')->middleware(['auth', 'verified', 'permission:all contact']);
        Route::get('delete-contact/{id}', 'DeleteContact')->name('delete.contact')->middleware(['auth', 'verified', 'permission:delete contact']);
    });

    // Site Settings section all routes
    Route::controller(SiteSettingsController::class)->group(function () {
        Route::get('site-settings', 'SiteSettings')->name('site.settings')->middleware(['auth', 'verified', 'permission:all setting']);
        Route::post('update-site-settings', 'UpdateSiteSettings')->name('update.site.settings')->middleware(['auth', 'verified', 'permission:update setting']);

    });

    //    Route::prefix('admin')->as('admin.')->group(function (): void {
//        Route::get('/', \App\Livewire\Admin\Index::class)->middleware(['auth', 'verified'])->name('index')->middleware('can:access dashboard');
////        Route::get('/', \App\Livewire\Admin\Index::class)->name('admin')->middleware(['auth', 'verified', 'permission:access dashboard']);
//        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users.index')->middleware('can:view users');
//        Route::get('/users/create', \App\Livewire\Admin\Users\CreateUser::class)->name('users.create')->middleware('can:create users');
//        Route::get('/users/{user}', \App\Livewire\Admin\Users\ViewUser::class)->name('users.show')->middleware('can:view users');
//        Route::get('/users/{user}/edit', \App\Livewire\Admin\Users\EditUser::class)->name('users.edit')->middleware('can:update users');
//        Route::get('/roles', \App\Livewire\Admin\Roles::class)->name('roles.index')->middleware('can:view roles');
//        Route::get('/roles/create', \App\Livewire\Admin\Roles\CreateRole::class)->name('roles.create')->middleware('can:create roles');
//        Route::get('/roles/{role}/edit', \App\Livewire\Admin\Roles\EditRole::class)->name('roles.edit')->middleware('can:update roles');
//        Route::get('/permissions', \App\Livewire\Admin\Permissions::class)->name('permissions.index')->middleware('can:view permissions');
//        Route::get('/permissions/create', \App\Livewire\Admin\Permissions\CreatePermission::class)->name('permissions.create')->middleware('can:create permissions');
//        Route::get('permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('can:update permissions');
//    });
    Route::prefix('admin')->as('admin.')->group(function (): void {
        Route::get('/', \App\Livewire\Admin\Index::class)->middleware(['auth', 'verified'])->name('index')->middleware('permission:access dashboard');
        //        Route::get('/', \App\Livewire\Admin\Index::class)->name('admin')->middleware(['auth', 'verified', 'permission:access dashboard']);
        Route::get('/users', \App\Livewire\Admin\Users::class)->name('users.index')->middleware('permission:view users');
        Route::get('/users/create', \App\Livewire\Admin\Users\CreateUser::class)->name('users.create')->middleware('permission:create users');
        Route::get('/users/{user}', \App\Livewire\Admin\Users\ViewUser::class)->name('users.show')->middleware('permission:view users');
        Route::get('/users/{user}/edit', \App\Livewire\Admin\Users\EditUser::class)->name('users.edit')->middleware('permission:update users');
        Route::get('/roles', \App\Livewire\Admin\Roles::class)->name('roles.index')->middleware('permission:view roles');
        Route::get('/roles/create', \App\Livewire\Admin\Roles\CreateRole::class)->name('roles.create')->middleware('permission:create roles');
        Route::get('/roles/{role}/edit', \App\Livewire\Admin\Roles\EditRole::class)->name('roles.edit')->middleware('permission:update roles');
        Route::get('/permissions', \App\Livewire\Admin\Permissions::class)->name('permissions.index')->middleware('permission:view permissions');
        Route::get('/permissions/create', \App\Livewire\Admin\Permissions\CreatePermission::class)->name('permissions.create')->middleware('permission:create permissions');
        Route::get('permissions/{permission}/edit', \App\Livewire\Admin\Permissions\EditPermission::class)->name('permissions.edit')->middleware('permission:update permissions');
    });
});

///These routes are for testing out livewire
///
Route::get('/twcsstraining', \App\Livewire\TWCSSTraining::class)->name('twcsstraining');  //the route: /csstraining
Route::get('/twcsstraining/{file}', function ($file)  //view-source:http://127.0.0.1:8000/csstraining/Advanced-CSS-Concepts.html
{
    $path = public_path('twcsstraining/' . $file);
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        abort(404);
    }
})->where('file', '.*');

Route::get('/calculator', \App\Livewire\Calculator::class)->name('calculator');
Route::get('/todo-list', \App\Livewire\TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Livewire\CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/products', \App\Livewire\ProductsSearch::class)->name('products');
Route::get('/image-upload', \App\Livewire\ImageUpload::class)->name('image-upload');
Route::get('/registertest', \App\Livewire\RegisterForm::class)->name('registertest');

require __DIR__ . '/auth.php';



/*
|--------------------------------------------------------------------------
| Schiff Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::post('/upload-file', [FileUploadController::class, 'uploadFile']);

// Route::get('/admins-only', function () {   //two ways:  this or the can:visitAdminPages below which is best
//     if (Gate::denies('visitAdminPages')) {
//         abort(403, 'You are not authorized to visit this page');
//     }
//     return 'Only admins should be able to see this page';
// });

Route::get('/admins-only', function () {
    return 'Only admins should be able to see this page';
})->middleware('can:visitAdminPages');



// User Related routes
Route::get('/writestuff', [UserController::class, "showCorrectHomepage"])->name('writestuff');
// Route::post('/register', [UserController::class, 'register'])->middleware('guest');
// Route::post('/login', [UserController::class, 'login'])->middleware('guest');
// Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Route::get('/manage-avatar', [UserController::class, 'showAvatarForm'])->middleware('mustBeLoggedIn');
// Route::post('/manage-avatar', [UserController::class, 'storeAvatar'])->middleware('mustBeLoggedIn');

Route::get('/manage-avatar', Avatarform::class)->middleware('mustBeLoggedIn');


// Follow Related routes
Route::post('/create-follow/{user:name}', [FollowController::class, 'createFollow'])->middleware('mustBeLoggedIn');
Route::post('/remove-follow/{user:name}', [FollowController::class, 'removeFollow'])->middleware('mustBeLoggedIn');

// Blog related routes
Route::get('/create-post', [BlogPostController::class, 'showCreateForm'])->name('create-post')->middleware('mustBeLoggedIn', 'verified', 'auth');
Route::post('/create-post', [BlogPostController::class, 'storeNewPost'])->middleware('mustBeLoggedIn',  'verified', 'auth');
Route::get('/post/{post}', [BlogPostController::class, 'viewSinglePost']);
// Route::delete('/post/{post}', [BlogPostController::class, 'delete'])->middleware('can:delete,post');
// Route::delete('/post/{post}', [BlogPostController::class, 'delete'])->middleware(['auth', 'verified', 'permission:delete post']);


// Route::get('/post/{post}/edit', [BlogPostController::class, 'showEditForm'])->middleware('can:update,post');
Route::get('/post/{post}/edit', [BlogPostController::class, 'showEditForm'])->middleware(['auth', 'verified', 'permission:edit post']);
Route::put('/post/{post}', [BlogPostController::class, 'actuallyUpdate'])->middleware('can:update,post');
Route::get('/search/{term}', [BlogPostController::class, 'search']);

//Livewire Blog (Brad Schiff)
// Route::get('/postlist', function () {
//     return \Livewire\Livewire::mount(\App\Livewire\PostList::class);
// });

// Route::get('/post/{post}/delete', [BlogPostController::class, 'delete'])->middleware('can:delete,post');




// Profile related routes

Route::get('/profile/{user:name}', [UserController::class, 'profile']);
Route::get('/profile/{user:name}/followers', [UserController::class, 'profileFollowers']);
Route::get('/profile/{user:name}/following', [UserController::class, 'profileFollowing']);

Route::middleware('cache.headers:public;max_age=20;etag')->group(function () {
    Route::get('/profile/{user:name}/raw', [UserController::class, 'profileRaw']);
    Route::get('/profile/{user:name}/followers/raw', [UserController::class, 'profileFollowersRaw']);
    Route::get('/profile/{user:name}/following/raw', [UserController::class, 'profileFollowingRaw']);
});



// Chat Route
Route::post('/send-chat-message', function (Request $request) {
    $formFields = $request->validate([
        'textvalue' => 'required'
    ]);
    if (!trim(strip_tags($formFields['textvalue']))) {
        return response()->noContent();
    }

    broadcast(new ChatMessage(['name' => auth()->user()->name, 'textvalue' => strip_tags($request->textvalue), 'avatar' => auth()->user()->avatar]))->toOthers();
    return response()->noContent();
})->middleware('mustBeLoggedIn');



//////////////////LEGACY PMWay//////////////////////////
Route::get('/pmway', [IndexController::class, 'pmway'])->name('pmway');



Route::get('/pin', [IndexController::class, 'pin']);
Route::get('/cmmi', [IndexController::class, 'cmmi']);

Route::get('/about', [IndexController::class, 'about']);
Route::get('/scrumrca', [IndexController::class, 'scrumrca']);

Route::get('/team', [IndexController::class, 'team']);
Route::get('/thegame', [IndexController::class, 'thegame']);
Route::get('/agile', [IndexController::class, 'agile']);



Route::get('/scrumdashboards', [IndexController::class, 'scrumdashboards']);
Route::get('/coffee', [IndexController::class, 'coffee']);
Route::get('/freedoms', [IndexController::class, 'freedoms']);

Route::get('/hamandeggs', [IndexController::class, 'hamandeggs']);
Route::get('/baseline', [IndexController::class, 'baseline']);
Route::get('/waterfallvsagile', [IndexController::class, 'waterfallvsagile']);
Route::get('/vmodel', [IndexController::class, 'vmodel']);
Route::get('/scrumvaluemodel', [IndexController::class, 'scrumvaluemodel']);
Route::get('/dml', [IndexController::class, 'dml']);
Route::get('/scrumroleclarity', [IndexController::class, 'scrumroleclarity']);
Route::get('/sevenrulesofscrum', [IndexController::class, 'sevenrulesofscrum']);

//Route::get('/strategy', [IndexController::class, 'strategy']);
Route::get('/agileisdead', [IndexController::class, 'agileisdead']);
Route::get('/workingsoftware', [IndexController::class, 'workingsoftware']);
Route::get('/productincrement', [IndexController::class, 'productincrement']);
Route::get('/burndown', [IndexController::class, 'burndown']);

Route::get('/release', [IndexController::class, 'release']);
Route::get('/safeisunsafe', [IndexController::class, 'safeisunsafe']);
Route::get('/procrastination', [IndexController::class, 'procrastination']);
Route::get('/recharge', [IndexController::class, 'recharge']);
Route::get('/laws', [IndexController::class, 'laws']);
Route::get('/measurement', [IndexController::class, 'measurement']);
Route::get('/monkey', [IndexController::class, 'monkey']);


Route::get('/test', [IndexController::class, 'test']);

//Route::get('/af', [IndexController::class, 'af'])->middleware('auth');

/////////////////////////////////////////////////////PHPMAILER//////////////////////////////
Route::get("email", [MailerController::class, "email"])->name("email");
Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");



/////////////////////////////////MIDDLEWARE PROTECTED ROUTES  -  MUST BE LOGGED IN////////////////////////////////////
//Route::get('/itilfourpractices', [IndexController::class, 'itilfourpractices'])->middleware('auth');
Route::get('/itilfourpractices', [IndexController::class, 'itilfourpractices']);
Route::get('/scrumdashboards', [IndexController::class, 'scrumdashboards'])->middleware('auth');
Route::get('/gamestats', [IndexController::class, 'gamestats'])->middleware('auth');
Route::get('/realstory', [IndexController::class, 'realstory'])->middleware('auth');
//Route::get('/realstory', [IndexController::class, 'realstory']);
Route::get('/removetheredbeads', [IndexController::class, 'removetheredbeads'])->middleware('auth');
Route::get('/cmmidevdash', [IndexController::class, 'cmmidevdash'])->middleware('auth');

//////////////////////ITIL 3//////////////////////
Route::get('/itiloverview', [IndexController::class, 'itiloverview']);
Route::get('/itilss', [IndexController::class, 'itilss']);
Route::get('/itilsd', [IndexController::class, 'itilsd']);
Route::get('/itilst', [IndexController::class, 'itilst']);
Route::get('/itilso', [IndexController::class, 'itilst']);
Route::get('/itilcsi', [IndexController::class, 'itilcsi']);




///////////Traditional vs Agile
Route::get('/home/waterfallvsagile', [IndexController::class, 'waterfallvsagile']);
///////////////////PMBOK dashboard
Route::get('/home/{page}', [IndexController::class, 'homePage']);



//////////////////////PMBOKSIX//////////////////////


Route::get('pmboksix/initiate', [PmboksixController::class, 'initiate'])->middleware('auth');
Route::get('pmboksix/plan', [PmboksixController::class, 'plan'])->middleware('auth');
Route::get('pmboksix/execute', [PmboksixController::class, 'execute'])->middleware('auth');
Route::get('pmboksix/monitorandcontrol', [PmboksixController::class, 'monitorandcontrol'])->middleware('auth');
Route::get('pmboksix/close', [PmboksixController::class, 'close'])->middleware('auth');
Route::get('pmboksix/pmbokprocessnutshell', [PmboksixController::class, 'pmbokprocessnutshell'])->middleware('auth');
Route::get('pmboksix/pmnotes', [PmboksixController::class, 'pmnotes'])->middleware('auth');
Route::get('pmboksix/integration', [PmboksixController::class, 'integration'])->middleware('auth');
Route::get('pmboksix/communication', [PmboksixController::class, 'communication'])->middleware('auth');
Route::get('pmboksix/procurement', [PmboksixController::class, 'procurement'])->middleware('auth');
Route::get('pmboksix/quality', [PmboksixController::class, 'quality'])->middleware('auth');
Route::get('pmboksix/resource', [PmboksixController::class, 'resource'])->middleware('auth');
Route::get('pmboksix/risk', [PmboksixController::class, 'risk'])->middleware('auth');
Route::get('pmboksix/schedule', [PmboksixController::class, 'schedule'])->middleware('auth');
Route::get('pmboksix/scope', [PmboksixController::class, 'scope'])->middleware('auth');
Route::get('pmboksix/cost', [PmboksixController::class, 'cost'])->middleware('auth');
Route::get('pmboksix/stakeholder', [PmboksixController::class, 'stakeholder'])->middleware('auth');

Route::get('pmboksix/fourone', [PmboksixController::class, 'fourone'])->middleware('auth');
Route::get('pmboksix/fourtwo', [PmboksixController::class, 'fourtwo'])->middleware('auth');
Route::get('pmboksix/fourthree', [PmboksixController::class, 'fourthree'])->middleware('auth');
Route::get('pmboksix/fourfour', [PmboksixController::class, 'fourfour'])->middleware('auth');
Route::get('pmboksix/fourfive', [PmboksixController::class, 'fourfive'])->middleware('auth');
Route::get('pmboksix/foursix', [PmboksixController::class, 'foursix'])->middleware('auth');
Route::get('pmboksix/fourseven', [PmboksixController::class, 'fourseven'])->middleware('auth');

Route::get('pmboksix/fiveone', [PmboksixController::class, 'fiveone'])->middleware('auth');
Route::get('pmboksix/fivetwo', [PmboksixController::class, 'fivetwo'])->middleware('auth');
Route::get('pmboksix/fivethree', [PmboksixController::class, 'fivethree'])->middleware('auth');
Route::get('pmboksix/fivefour', [PmboksixController::class, 'fivefour'])->middleware('auth');
Route::get('pmboksix/fivefive', [PmboksixController::class, 'fivefive'])->middleware('auth');
Route::get('pmboksix/fivesix', [PmboksixController::class, 'fivesix'])->middleware('auth');

Route::get('pmboksix/sixone', [PmboksixController::class, 'sixone'])->middleware('auth');
Route::get('pmboksix/sixtwo', [PmboksixController::class, 'sixtwo'])->middleware('auth');
Route::get('pmboksix/sixthree', [PmboksixController::class, 'sixthree'])->middleware('auth');
Route::get('pmboksix/sixfour', [PmboksixController::class, 'sixfour'])->middleware('auth');
Route::get('pmboksix/sixfive', [PmboksixController::class, 'sixfive'])->middleware('auth');
Route::get('pmboksix/sixsix', [PmboksixController::class, 'sixsix'])->middleware('auth');

Route::get('pmboksix/sevenone', [PmboksixController::class, 'sevenone'])->middleware('auth');
Route::get('pmboksix/seventwo', [PmboksixController::class, 'seventwo'])->middleware('auth');
Route::get('pmboksix/seventhree', [PmboksixController::class, 'seventhree'])->middleware('auth');
Route::get('pmboksix/sevenfour', [PmboksixController::class, 'sevenfour'])->middleware('auth');

Route::get('pmboksix/eightone', [PmboksixController::class, 'eightone'])->middleware('auth');
Route::get('pmboksix/eighttwo', [PmboksixController::class, 'eighttwo'])->middleware('auth');
Route::get('pmboksix/eightthree', [PmboksixController::class, 'eightthree'])->middleware('auth');

Route::get('pmboksix/nineone', [PmboksixController::class, 'nineone'])->middleware('auth');
Route::get('pmboksix/ninetwo', [PmboksixController::class, 'ninetwo'])->middleware('auth');
Route::get('pmboksix/ninethree', [PmboksixController::class, 'ninethree'])->middleware('auth');
Route::get('pmboksix/ninefour', [PmboksixController::class, 'ninefour'])->middleware('auth');
Route::get('pmboksix/ninefive', [PmboksixController::class, 'ninefive'])->middleware('auth');
Route::get('pmboksix/ninesix', [PmboksixController::class, 'ninesix'])->middleware('auth');

Route::get('pmboksix/tenone', [PmboksixController::class, 'tenone'])->middleware('auth');
Route::get('pmboksix/tentwo', [PmboksixController::class, 'tentwo'])->middleware('auth');
Route::get('pmboksix/tenthree', [PmboksixController::class, 'tenthree'])->middleware('auth');

Route::get('pmboksix/elevenone', [PmboksixController::class, 'elevenone'])->middleware('auth');
Route::get('pmboksix/eleventwo', [PmboksixController::class, 'eleventwo'])->middleware('auth');
Route::get('pmboksix/eleventhree', [PmboksixController::class, 'eleventhree'])->middleware('auth');
Route::get('pmboksix/elevenfour', [PmboksixController::class, 'elevenfour'])->middleware('auth');
Route::get('pmboksix/elevenfive', [PmboksixController::class, 'elevenfive'])->middleware('auth');
Route::get('pmboksix/elevensix', [PmboksixController::class, 'elevensix'])->middleware('auth');
Route::get('pmboksix/elevenseven', [PmboksixController::class, 'elevenseven'])->middleware('auth');

Route::get('pmboksix/twelveone', [PmboksixController::class, 'twelveone'])->middleware('auth');
Route::get('pmboksix/twelvetwo', [PmboksixController::class, 'twelvetwo'])->middleware('auth');
Route::get('pmboksix/twelvethree', [PmboksixController::class, 'twelvethree'])->middleware('auth');

Route::get('pmboksix/thirteenone', [PmboksixController::class, 'thirteenone'])->middleware('auth');
Route::get('pmboksix/thirteentwo', [PmboksixController::class, 'thirteentwo'])->middleware('auth');
Route::get('pmboksix/thirteenthree', [PmboksixController::class, 'thirteenthree'])->middleware('auth');
Route::get('pmboksix/thirteenfour', [PmboksixController::class, 'thirteenfour'])->middleware('auth');
//////////////////////////////////////////////////////////////////////////////////////





