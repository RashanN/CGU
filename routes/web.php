<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{BannerController, PocategoriesController, FaqController, GeneralController, LinkController, PageController, PartnerController, PcategoryController, PortfolioController, PostController, ServiceController, TagController, TestimonialController, TeamController, UserController};
use App\Http\Controllers\FrontController;

if (App::environment('production')) {
    URL::forceScheme('https');
}
//Home Page
//Route::get('/', 'HomeController@index');
Route::get('/', [FrontController::class, 'home'])->name('homepage');

//blog Page
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('blog/search',[FrontController::class, 'search'])->name('search');
Route::get('blog/{slug}', [FrontController::class, 'blogshow'])->name('blogshow');
Route::get('categories/{category:slug}',[FrontController::class, 'category'])->name('category');
Route::get('tags/{tag:slug}',[FrontController::class, 'tag'])->name('tag');

//contactus
Route::get('contact', [FrontController::class, 'createform'])->name('contact');
Route::post('contact/create', [FrontController::class, 'ContactUsForm'])->name('contact.store');

//Job Bank
Route::get('/jobbank', 'HomePageController@index')->name('jobbank');
Route::get('/jobbank1', [FrontController::class, 'job'])->name('jobbank1');
Route::get('jobbank/search', 'HomePageController@table')->name('jobbank.search');
Route::get('/jobbank1/search', [FrontController::class, 'table'])->name('jobbank1.search');
Route::get('categories/{category}', 'HomePageController@category')->name('category');
Route::get('companies/{company}', 'HomePageController@company')->name('company');

//portfolio
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('portfolio/{slug}', [FrontController::class, 'portfolioshow'])->name('portfolioshow');

//testimonials
Route::get('testimonials', [FrontController::class, 'testi'])->name('testi');




// Dashboard
Route::redirect('/home', '/admin/companies');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Cities
    Route::delete('cities/destroy', 'CitiesController@massDestroy')->name('cities.massDestroy');
    Route::resource('cities', 'CitiesController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    //news
    Route::get('news/index', 'NewsController@index')->name('news.index');
    Route::get('news/create', 'NewsController@create')->name('news.create');
    Route::get('news/edit', 'NewsController@edit')->name('news.edit');
    Route::post('news/create', 'NewsController@store')->name('news.store');
    Route::delete('news/destroy', 'NewsController@destroy')->name('news.destroy');

       // General settings
    Route::get('general-settings', [GeneralController::class, 'general'])->name('general');
    Route::post('general-settings', [GeneralController::class, 'generalUpdate'])->name('general.update');

    // About
    Route::get('about', [GeneralController::class, 'about'])->name('about');
    Route::post('about', [GeneralController::class, 'aboutUpdate'])->name('about.update');

    // Manage Banner
    Route::get('banner', [BannerController::class, 'index'])->name('banner');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('banner/create', [BannerController::class, 'store'])->name('banner.store');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('banner/edit/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('banner/destroy/{id}',[BannerController::class, 'destroy'])->name('banner.destroy');

     // Manage Portfolio Categories
     Route::get('portfolio-categories', [PcategoryController::class, 'index'])->name('pcategory');
     Route::post('portfolio-categories', [PcategoryController::class, 'store'])->name('pcategory.store');
     Route::get('Portfolio-categories/edit/{id}', [PcategoryController::class, 'edit'])->name('pcategory.edit');
     Route::post('Portfolio-categories/edit/{id}', [PcategoryController::class, 'update'])->name('pcategory.update');
     Route::delete('Portfolio-categories/destroy/{id}',[PcategoryController::class, 'destroy'])->name('pcategory.destroy');

     // Manage Portfolio
    Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('portfolio/create', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('portfolio/edit/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('portfolio/destroy/{id}',[PortfolioController::class, 'destroy'])->name('portfolio.destroy');

     // Manage Categories
     Route::get('pocategories', [PocategoriesController::class, 'index'])->name('category');
     Route::get('pocategories/create', [PocategoriesController::class, 'create'])->name('category.create');
     Route::post('pocategories/create', [PocategoriesController::class, 'store'])->name('category.store');
     Route::get('pocategories/edit/{id}', [PocategoriesController::class, 'edit'])->name('category.edit');
     Route::post('pocategories/edit/{id}', [PocategoriesController::class, 'update'])->name('category.update');
     Route::delete('pocategories/destroy/{id}',[PocategoriesController::class, 'destroy'])->name('category.destroy');

     // Manage Tags
     Route::get('tags', [TagController::class, 'index'])->name('tag');
     Route::get('tags/create', [TagController::class, 'create'])->name('tag.create');
     Route::post('tags/create', [TagController::class, 'store'])->name('tag.store');
     Route::get('tags/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
     Route::post('tags/edit/{id}', [TagController::class, 'update'])->name('tag.update');
     Route::delete('tags/destroy/{id}',[TagController::class, 'destroy'])->name('tag.destroy');

     // Manage Blog
    Route::get('post',[PostController::class, 'index'])->name('post');

    Route::get('post/create',[PostController::class, 'create'])->name('post.create');

    Route::post('post/create',[PostController::class, 'store'])->name('post.store');

    Route::get('post/edit/{id}',[PostController::class, 'edit'])->name('post.edit');

    Route::post('post/edit/{id}',[PostController::class, 'update'])->name('post.update');

    Route::get('post/trash',[PostController::class, 'trash'])->name('post.trash');

    Route::post('post/{id}/restore',[PostController::class, 'restore'])->name('post.restore');

    Route::delete('post/trash/{id}',[PostController::class, 'destroy'])->name('post.destroy');

    Route::delete('post/destroy/{id}',[PostController::class, 'deletePermanent'])->name('post.deletePermanent');

    // Manage Testimonials
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testi');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testi.create');
    Route::post('testimonials/create', [TestimonialController::class, 'store'])->name('testi.store');
    Route::get('testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('testi.edit');
    Route::post('testimonials/edit/{id}', [TestimonialController::class, 'update'])->name('testi.update');
    Route::delete('testimonials/destroy/{id}',[TestimonialController::class, 'destroy'])->name('testi.destroy');

    // Manage Pages
    Route::get('pages', [PageController::class, 'index'])->name('page');
    Route::get('pages/create', [PageController::class, 'create'])->name('page.create');
    Route::post('pages/create', [PageController::class, 'store'])->name('page.store');
    Route::get('pages/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
    Route::post('pages/edit/{id}', [PageController::class, 'update'])->name('page.update');
    Route::delete('pages/destroy/{id}',[PageController::class, 'destroy'])->name('page.destroy');

    // Manage Links
    Route::get('links', [LinkController::class, 'index'])->name('link');
    Route::get('links/create', [LinkController::class, 'create'])->name('link.create');
    Route::post('links/create', [LinkController::class, 'store'])->name('link.store');
    Route::get('links/edit/{id}', [LinkController::class, 'edit'])->name('link.edit');
    Route::post('links/edit/{id}', [LinkController::class, 'update'])->name('link.update');
    Route::delete('links/destroy/{id}',[LinkController::class, 'destroy'])->name('link.destroy');

    // Manage FAQ
    Route::get('faq', [FaqController::class, 'index'])->name('faq');
    Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq/create', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('faq/edit/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/destroy/{id}',[FaqController::class, 'destroy'])->name('faq.destroy');

    // Manage Partners
    Route::get('partners', [PartnerController::class, 'index'])->name('partner');
    Route::get('partners/create', [PartnerController::class, 'create'])->name('partner.create');
    Route::post('partners/create', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('partners/edit/{id}', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::post('partners/edit/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::delete('partners/destroy/{id}',[PartnerController::class, 'destroy'])->name('partner.destroy');

    // Manage Services
    Route::get('services', [ServiceController::class, 'index'])->name('service');
    Route::get('services/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('services/create', [ServiceController::class, 'store'])->name('service.store');
    Route::get('services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('services/edit/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('services/destroy/{id}',[ServiceController::class, 'destroy'])->name('service.destroy');

    // Manage Team
    Route::get('teams', [TeamController::class, 'index'])->name('team');
    Route::get('teams/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('teams/create', [TeamController::class, 'store'])->name('team.store');
    Route::get('teams/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('teams/edit/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('teams/destroy/{id}',[TeamController::class, 'destroy'])->name('team.destroy');

});
