<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RFQController;
use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Payment\StripeController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Frontend\CheckoutController;




//Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');

//Learn More
Route::get('/learn/more', [HomeController::class, 'LearnMore'])->name('learn.more');

//What We Do
Route::get('/Whatwe/do', [HomeController::class, 'whatWeDo'])->name('whatwedo');

//Software All route
Route::get('/software/common', [HomeController::class, 'SoftwareCommon'])->name('software.common');

//Software Info
Route::get('/software/info', [HomeController::class, 'softwareInfo'])->name('software.info');




//Hardware All route
Route::get('/hardware/common', [HomeController::class, 'HardwareCommon'])->name('hardware.common');

//hardware Info
Route::get('/hardware/info', [HomeController::class, 'hardwareInfo'])->name('hardware.info');

//Industry
Route::get('/industry/all', [HomeController::class, 'AllIndustry'])->name('all.industry');
Route::get('/industry/{id}/details', [HomeController::class, 'IndustryDetails'])->name('industry.details');

//Industry
Route::get('/solution/all', [HomeController::class, 'allSolution'])->name('all.solution');




//Contact & Support
Route::post('/contact_us', [ContactController::class, 'store'])->name('contactus.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact/location', [HomeController::class, 'location'])->name('location');
Route::get('support', [HomeController::class, 'Support'])->name('support');
Route::get('/newsletter', [NewsletterController::class, 'newsletter']);
Route::post('/newsletter/store', [NewsLetterController::class, 'store'])->name('newsletter.store');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');



Route::get('/modal/{id}', [HomeController::class, 'modal'])->name('modal');


//Feature details
Route::get('/feature/{id}/details/', [HomeController::class, 'FeatureDetails'])->name('feature.details');

//Solution details
Route::get('/solution/{id}/details/', [HomeController::class, 'SolutionDetails'])->name('solution.details');






Route::get('/single/product/{id}', [HomeController::class, 'ProductDetails'])->name('product.details');
Route::get('/all/software', [HomeController::class, 'AllSoftware']);




//product

// Route::get('/product/filter', [HomeController::class, 'filter'])->name('filter');

Route::get('/product-cat/{slug}','HomeController@productCat')->name('product-cat');



// Shop // Filter

//Shop
Route::get('/ngenit/shop', [ShopController::class, 'Shop'])->name('shop');
Route::get('/custom/shop', [ShopController::class, 'CustomProduct'])->name('custom.shop');
Route::post('/products/filter', [ShopController::class, 'filter']);
Route::post('/products/per', [ShopController::class, 'per']);
Route::post('/price-range', [ShopController::class, 'getPriceRange'])->name('product.priceRange');




//Tech Deals and Refurbished Products
Route::get('/techdeal.html', [HomeController::class, 'TechDeal'])->name('tech.deals');
Route::get('/refurbished.html', [HomeController::class, 'Refurbished'])->name('refurbished');

//Brand wise Shop
Route::get('/brands/all', [HomeController::class, 'AllBrand'])->name('all.brand');
Route::get('/brand/{id}/html', [HomeController::class, 'BrandCommon'])->name('brand.html');
Route::get('/brandpage/{id}/html', [HomeController::class, 'BrandPage'])->name('brandpage.html');


//Category wise Shop
Route::get('/category/all', [HomeController::class, 'AllCategory'])->name('all.category');
Route::get('/category/{id}/html', [HomeController::class, 'CategoryCommon'])->name('category.html');

//filter routes
Route::match(['get','post'],'/custom/product/{slug}', [ShopController::class, 'CustomProductFilter'])->name('custom.product');
Route::match(['get','post'],'/ngenit/shop/filter', [ShopController::class, 'ShopFilter'])->name('shop.filter');
// Route::post('getshopProducts', [ShopController::class, 'getShopProducts'])->name('shop.filter');

//Shop
Route::get('/ngenit/shop', [ShopController::class, 'mainShop'])->name('shop');
Route::get('/custom/shop', [ShopController::class, 'CustomProduct'])->name('custom.shop');
// Route::match(['get','post'],'/ngenit/shop/filter_page', [ShopController::class, 'Shop'])->name('shop.filter_partial');

Route::match(['get','post'],'/ngenit/shop/filter_page', [ShopController::class, 'getShopProducts'])->name('shop.filter_partial');
Route::post('brand-search', [ShopController::class, 'brandSearch'])->name('brand.search');

//storys
Route::get('/storys/all', [HomeController::class, 'AllStory'])->name('all.story');
Route::get('/story/{id}/details', [HomeController::class, 'StoryDetails'])->name('story.details');

//Blogs
Route::get('/blogs/all', [HomeController::class, 'AllBlog'])->name('all.blog');
Route::get('/blog/{id}/details', [HomeController::class, 'BlogDetails'])->name('blog.details');

//Techglossy
Route::get('/techglossy/all', [HomeController::class, 'AllTechGlossy'])->name('all.techglossy');
Route::get('/techglossy/{id}/details', [HomeController::class, 'TechGlossyDetails'])->name('techglossy.details');


Route::resource('feedback', FeedbackController::class)->except([
    'index', 'edit', 'update'
]);

Route::get('/shop.html', [HomeController::class, 'shop_html'])->name('shop.html');


Route::get('/product/{id}/html', [HomeController::class, 'ProductCommon'])->name('product.common');
Route::get('/conditional/{id}/product', [ShopController::class, 'ConditionalProduct'])->name('product.condition');


/// Product Search Route
Route::post('/search', [HomeController::class, 'ProductSearch'])->name('product.search');
// Advance Search Routes
Route::post('global-search', [HomeController::class, 'globalSearch'])->name('global.search');

//Industry
Route::get('/industry/all', [HomeController::class, 'AllIndustry'])->name('all.industry');
Route::get('/industry/{id}/details', [HomeController::class, 'IndustryDetails'])->name('industry.details');


Route::get('/partner.html', [HomeController::class, 'partner'])->name('partner');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

Route::get('account_benefits', [HomeController::class, 'accountBenefits']);



Route::post('add/support', [SupportController::class, 'addSupport'])->name('add.support');


//Terms & Policy
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('privacy_policy', [HomeController::class, 'PrivacyPolicy'])->name('privacy.policy');
Route::get('terms_policy', [HomeController::class, 'TermsPolicy'])->name('terms.policy');
Route::get('terms_policy/{id}/details', [HomeController::class, 'TermsPolicyDetails'])->name('terms.details');

//Portfolio
Route::get('portfolio', [HomeController::class, 'Portfolio'])->name('portfolio');
// Route::get('portfolio/{id}/details', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('portfolio/{id}/details/', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');

//Work Order Upload
Route::put('upload/work-order/{id}', [RFQController::class,'workOrderUpload'])->name('work-order.upload');

//Proof of Payment Upload
Route::put('upload/payment-proof/{id}', [RFQController::class,'proofPaymentUpload'])->name('payment-proof.upload');

// card route start -----------
 //Route::get('cart', [CartController::class, 'cart'])->name('cart');
// Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
// Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
// Route::get('/remove/{id}', [CartController::class, 'removeFromCart'])->name('remove');

// card route end -----------

/// Add to cart store data






// Add to cart store data
Route::post('cart_store', [App\Http\Controllers\Frontend\CartController::class,'AddToCart'])->name('add.cart');

 // Cart All Route
 Route::controller(CartController::class)->group(function(){
    Route::get('/mycart' , 'MyCart')->name('mycart');
    Route::get('/get-cart-product' , 'GetCartProduct');
    Route::get('/cart-destroy' , 'CartDestroy')->name('cart.destroy');

    Route::get('/cart-remove/{rowId}' , 'CartRemove')->name('cart.remove');
    Route::get('/cart-decrement/{rowId}' , 'CartDecrement')->name('cart.decrement');
    Route::get('/cart-increment/{rowId}' , 'CartIncrement')->name('cart.increment');
    Route::get('/add/cart' , 'CartAdd')->name('cart.add');


});

 // Checkout Routes

 Route::get('/checkout', [CheckoutController::class, 'CheckoutCreate'])->name('checkout');
 Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');
 Route::get('/payment/page/{id}', [CheckoutController::class, 'PaymentPage'])->name('payment.page');

 Route::get('/checkout/ajax/{region_id}' , [CheckoutController::class,'getGST']);

// Stripe Payment
 Route::controller(StripeController::class)->group(function(){
    Route::post('/stripe/order' , 'StripeOrder')->name('stripe.order');
    Route::post('/cash/order' , 'CashOrder')->name('cash.order');
 });


 Route::controller(JobController::class)->group(function () {
    Route::get('/job_openings', 'JobOpenings')->name('job.openings');
    Route::get('/job_details/{id}', 'JobDetails')->name('job.details');
    Route::get('/job_registration', 'JobRegistration')->name('job.registration');
    Route::post('/job_registration/store', 'JobRegistrationStore')->name('job_registration.store');
    // Route::get('/job-register-user', 'jobRegisterUser')->name('job.regiserUser');
});



//RFQ
Route::get('rfq', [HomeController::class, 'rfqCreate'])->name('rfq.create');
Route::post('rfq/store', [RFQController::class, 'store'])->name('rfq.add');
Route::get('rfq_common', [HomeController::class, 'RFQCommon'])->name('rfq.common');
