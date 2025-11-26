<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\FipaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CommitteeAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\AfwaController;
use App\Http\Controllers\Admin\WaterController;
use App\Http\Controllers\Admin\NourDignController;
use App\Http\Controllers\Admin\StrategicApproachController;
use App\Http\Controllers\Admin\ActiveVolunteerController as AdminActiveVolunteerController;
use App\Http\Controllers\ActiveVolunteerController;
use App\Http\Controllers\ClubIdaController;
use App\Http\Controllers\Admin\ClubIdaController as AdminClubIdaController;
use App\Http\Controllers\InfinityCircleController;
use App\Http\Controllers\Admin\InfinityCircleController as AdminInfinityCircleController;
use App\Http\Controllers\Admin\OurStoryController;
use App\Http\Controllers\SmallBusinnessController;
use App\Http\Controllers\Admin\SmallBusinnessController as AdminSmallBusinnessController;
use App\Http\Controllers\MauritaniaFreeZoneController;
use App\Http\Controllers\Admin\MauritaniaFreeZoneController as AdminMauritaniaFreeZoneController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\ProjectOpportunitieController;
use App\Http\Controllers\Admin\ProjectOpportunitieController as AdminProjectOpportunitieController;
use App\Http\Controllers\MembershipRequestController;
use App\Http\Controllers\SectionObamaController;






//use App\Http\Controllers\EventControllersubmitRegistration;
use App\Http\Controllers\Admin\CommitteeController;



use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/internationalization', [PageController::class, 'internationalization']);
Route::get('/small-businesses', [PageController::class, 'small_businesses']);
Route::get('/opportunities', [PageController::class, 'opportunities']);
Route::get('/mauritania-free-zone', [PageController::class, 'mauritania_free_zone']);
Route::get('/water', [PageController::class, 'water']);
Route::get('/afwa', [PageController::class, 'afwa'])->name('pages.afwa');
Route::get('/wwc', [PageController::class, 'wwc']);
Route::get('/csw62', [PageController::class, 'csw62']);
Route::get('/women-empowerment', [PageController::class, 'women_empowerment']);
Route::get('/strategic-approach', [PageController::class, 'strategic_approach']);
Route::get('/nourdign-actions', [PageController::class, 'nourdign_actions']);
Route::get('/ada', [PageController::class, 'ada']);
Route::get('/ada-nelson-mandela', [PageController::class, 'ada_nelson_mandela']);
Route::get('/ada-leopold-sedar-senghor', [PageController::class, 'ada_leopold_sedar_senghor']);
Route::get('/ada-houphouet-bagny', [PageController::class, 'ada_houphouet_bagny']);
Route::get('/ada-desmond-mpilo-tutu', [PageController::class, 'ada_desmond_mpilo_tutu']);
Route::get('/ada-colin-powell', [PageController::class, 'ada_colin_powell']);
Route::get('/ada-boutros-boutros-ghali', [PageController::class, 'ada_boutros_boutros_ghali']);
Route::get('/news', [PageController::class, 'news']);
Route::get('/detail_news/{id}', [PageController::class, 'detail_news']);
Route::get('/news-history', [PageController::class, 'news_history']);
Route::get('/ida-activities', [PageController::class, 'ida_activities']);
Route::get('/ida-activities/ida-infinity-africa-circle', [InfinityCircleController::class, 'index'])->name('ida_infinity_africa_circle.index');
Route::get('/clubs-ida', [PageController::class, 'clubs_ida']);
Route::get('/fipa', [PageController::class, 'fipa']);
Route::get('/fipa/{id}', [PageController::class, 'fipa_details'])->name('fipa.show');
Route::get('/partnership', [PageController::class, 'partnership']);
Route::get('/membership', [PageController::class, 'membership']);
Route::get('/active-volunteers', [PageController::class, 'active_volunteers']);
Route::get('/terms-and-conditions', [PageController::class, 'terms_and_conditions']);
Route::get('/contact-us', [PageController::class, 'contact_us']);
Route::get('/donation', [PageController::class, 'donation']);
Route::get('/about-us', [PageController::class, 'about_us']);
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::post('/events', [EventController::class, 'store'])->name('events.store');


Route::get('/events/{event}/show', [EventController::class, 'show'])->name('events.show');

Route::get('/events/{event}/register', [EventController::class, 'register'])->name('events.register');
Route::post('/events/{event}/register', [EventController::class, 'submitRegistration'])->name('events.register.submit');


// admin route
Route::get('/login', [AdminController::class, 'login']);

// Routes publiques
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/internationalization', [PageController::class, 'internationalization'])->name('pages.internationalization');
Route::get('/small-businesses', [PageController::class, 'small_businesses'])->name('pages.small_businesses');
Route::get('/opportunities', [PageController::class, 'opportunities'])->name('pages.opportunities');
Route::get('/mauritania-free-zone', [PageController::class, 'mauritania_free_zone'])->name('pages.mauritania_free_zone');
Route::get('/water', [PageController::class, 'water'])->name('pages.water');
Route::get('/wwc', [PageController::class, 'wwc'])->name('pages.wwc');
Route::get('/csw62', [PageController::class, 'csw62'])->name('pages.csw62');
Route::get('/women-empowerment', [PageController::class, 'women_empowerment'])->name('pages.women_empowerment');
Route::get('/strategic-approach', [PageController::class, 'strategic_approach'])->name('pages.strategic_approach');
Route::get('/nourdign-actions', [PageController::class, 'nourdign_actions'])->name('pages.nourdign_actions');
Route::get('/ada', [PageController::class, 'ada'])->name('pages.ada');
Route::get('/ada-nelson-mandela', [PageController::class, 'ada_nelson_mandela'])->name('pages.ada_nelson_mandela');
Route::get('/ada-leopold-sedar-senghor', [PageController::class, 'ada_leopold_sedar_senghor'])->name('pages.ada_leopold_sedar_senghor');
Route::get('/ada-houphouet-bagny', [PageController::class, 'ada_houphouet_bagny'])->name('pages.ada_houphouet_bagny');
Route::get('/ada-desmond-mpilo-tutu', [PageController::class, 'ada_desmond_mpilo_tutu'])->name('pages.ada_desmond_mpilo_tutu');
Route::get('/ada-colin-powell', [PageController::class, 'ada_colin_powell'])->name('pages.ada_colin_powell');
Route::get('/ada-boutros-boutros-ghali', [PageController::class, 'ada_boutros_boutros_ghali'])->name('pages.ada_boutros_boutros_ghali');
Route::get('/news', [PageController::class, 'news'])->name('pages.news');
Route::get('/news/{id}', [PageController::class, 'detail_news'])->name('pages.detail_news');
Route::get('/news-history', [PageController::class, 'news_history'])->name('pages.news_history');
Route::get('/ida-activities', [PageController::class, 'ida_activities'])->name('pages.ida_activities');
Route::get('/ida-activities/fipa', [PageController::class, 'fipa'])->name('fipa');
Route::get('/volontaires-actifs', [ActiveVolunteerController::class, 'index'])->name('active_volunteers.index');
Route::get('/partnership', [PageController::class, 'partnership'])->name('pages.partnership');
Route::get('/membership', [PageController::class, 'membership'])->name('pages.membership');
Route::get('/new-volunteer', [MembershipRequestController::class, 'showForm'])->name('membership.request.form');
Route::post('/membership-request', [MembershipRequestController::class, 'store'])->name('membership.request.store');
Route::get('/membership-request/success', [MembershipRequestController::class, 'success'])->name('membership.request.success');
Route::get('/active-volunteers', [PageController::class, 'active_volunteers'])->name('pages.active_volunteers');
Route::get('/terms-and-conditions', [PageController::class, 'terms_and_conditions'])->name('pages.terms_and_conditions');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('pages.contact_us');
Route::get('/donation', [PageController::class, 'donation'])->name('pages.donation');
Route::get('/about-us', [PageController::class, 'about_us'])->name('pages.about_us');

// Routes de connexion (accessibles sans authentification)
Route::get('/login', [AdminController::class, 'login'])->name('admin.login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

// Routes admin protégées
Route::prefix('admin')->middleware('auth')->group(function () {
    //Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.add_slider');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'store'])->name('admin.store');

    // Home (Sliders)
    Route::get('/dashboard', [HomeController::class, 'add_slider'])->name('admin.dashboard');
    Route::get('/add_slider', [HomeController::class, 'add_slider'])->name('admin.add_slider');
    Route::post('/store-slider', [HomeController::class, 'store_slider'])->name('admin.store_slider');
    Route::get('/slider/{id}', [HomeController::class, 'show'])->name('admin.show_slider');
    Route::get('/slider/{id}/edit', [HomeController::class, 'edit'])->name('admin.edit_slider');
    Route::put('/slider/{id}', [HomeController::class, 'update'])->name('admin.update_slider');
    Route::delete('/delete-slider/{id}', [HomeController::class, 'destroy'])->name('admin.delete_slider');

    //la routes de news
    Route::get('/news/index', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('admin.news.show');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    
// Committees
    Route::get('/committees', [CommitteeAdminController::class, 'index'])->name('admin.committees.index');
    Route::get('/committees/create', [CommitteeAdminController::class, 'create'])->name('admin.committees.create');
    Route::post('/committees', [CommitteeAdminController::class, 'store'])->name('admin.committees.store');
    Route::get('/committees/{committee}/edit', [CommitteeAdminController::class, 'edit'])->name('admin.committees.edit');
    Route::put('/committees/{committee}', [CommitteeAdminController::class, 'update'])->name('admin.committees.update');
    Route::delete('/committees/{committee}', [CommitteeAdminController::class, 'destroy'])->name('admin.committees.destroy');
    
    // FIPA
    Route::get('/fipa-project', [FipaController::class, 'index'])->name('admin.fipa.index');
    Route::get('/create-project', [FipaController::class, 'create'])->name('admin.fipa.create');
    Route::post('/fipa/store', [FipaController::class, 'store'])->name('admin.fipa.store');
    Route::get('/show-project/{projet}', [FipaController::class, 'show'])->name('admin.fipa.show');
    Route::get('/edit-project/{projet}/edit', [FipaController::class, 'edit'])->name('admin.fipa.edit');
    Route::put('/edit-project/{projet}', [FipaController::class, 'update'])->name('admin.fipa.update');
    Route::delete('/delete-project/{projet}', [FipaController::class, 'destroy'])->name('admin.fipa.destroy');

    // Projets
    Route::get('/projects/create', [ProjectAdminController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [ProjectAdminController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects', [ProjectAdminController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/{project}/edit', [ProjectAdminController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [ProjectAdminController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [ProjectAdminController::class, 'destroy'])->name('admin.projects.destroy');
    Route::get('/', [WelcomeController::class, 'index']);
    Route::post('/contact-submit', [WelcomeController::class, 'submit'])->name('contact.submit');

    //Events
    Route::get('/events', [EventController::class, 'index'])->name('admin.events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('admin.events.show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');

    //Afwa
    Route::get('/afwa', [AfwaController::class, 'index'])->name('admin.afwa.index');
    Route::get('/afwa/create', [AfwaController::class, 'create'])->name('admin.afwa.create');
    Route::post('/afwa', [AfwaController::class, 'store'])->name('admin.afwa.store');
    Route::get('/afwa/{afwa}', [AfwaController::class, 'show'])->name('admin.afwa.show');
    Route::get('/afwa/{afwa}/edit', [AfwaController::class, 'edit'])->name('admin.afwa.edit');
    Route::put('/afwa/{afwa}', [AfwaController::class, 'update'])->name('admin.afwa.update');
    Route::delete('/afwa/{afwa}', [AfwaController::class, 'destroy'])->name('admin.afwa.destroy');

    //Water
    Route::get('/water', [WaterController::class, 'index'])->name('admin.water.index');
    Route::get('/water/create', [WaterController::class, 'create'])->name('admin.water.create');
    Route::post('/water', [WaterController::class, 'store'])->name('admin.water.store');
    Route::get('/water/{water}', [WaterController::class, 'show'])->name('admin.water.show');
    Route::get('/water/{water}/edit', [WaterController::class, 'edit'])->name('admin.water.edit');
    Route::put('/water/{water}', [WaterController::class, 'update'])->name('admin.water.update');
    Route::delete('/water/{water}', [WaterController::class, 'destroy'])->name('admin.water.destroy');

    //NourDign
    Route::get('/nourdign', [NourDignController::class, 'index'])->name('admin.nourdign.index');
    Route::get('/nourdign/create', [NourDignController::class, 'create'])->name('admin.nourdign.create');
    Route::post('/nourdign', [NourDignController::class, 'store'])->name('admin.nourdign.store');
    Route::get('/nourdign/{nourDign}', [NourDignController::class, 'show'])->name('admin.nourdign.show');
    Route::get('/nourdign/{nourDign}/edit', [NourDignController::class, 'edit'])->name('admin.nourdign.edit');
    Route::put('/nourdign/{nourDign}', [NourDignController::class, 'update'])->name('admin.nourdign.update');
    Route::delete('/nourdign/{nourDign}', [NourDignController::class, 'destroy'])->name('admin.nourdign.destroy');

    //Strategic Approach
    Route::get('/strategic-approach', [StrategicApproachController::class, 'index'])->name('admin.strategic-approach.index');
    Route::get('/strategic-approach/create', [StrategicApproachController::class, 'create'])->name('admin.strategic-approach.create');
    Route::post('/strategic-approach', [StrategicApproachController::class, 'store'])->name('admin.strategic-approach.store');
    Route::get('/strategic-approach/{strategicApproach}', [StrategicApproachController::class, 'show'])->name('admin.strategic-approach.show');
    Route::get('/strategic-approach/{strategicApproach}/edit', [StrategicApproachController::class, 'edit'])->name('admin.strategic-approach.edit');
    Route::put('/strategic-approach/{strategicApproach}', [StrategicApproachController::class, 'update'])->name('admin.strategic-approach.update');
    Route::delete('/strategic-approach/{strategicApproach}', [StrategicApproachController::class, 'destroy'])->name('admin.strategic-approach.destroy');

    // Partnerships
    Route::get('/partnerships', [\App\Http\Controllers\Admin\PartnershipController::class, 'index'])->name('admin.partnership.index');
    Route::get('/partnerships/create', [\App\Http\Controllers\Admin\PartnershipController::class, 'create'])->name('admin.partnership.create');
    Route::post('/partnerships', [\App\Http\Controllers\Admin\PartnershipController::class, 'store'])->name('admin.partnership.store');
    Route::get('/partnerships/{partner}/edit', [\App\Http\Controllers\Admin\PartnershipController::class, 'edit'])->name('admin.partnership.edit');
    Route::put('/partnerships/{partner}', [\App\Http\Controllers\Admin\PartnershipController::class, 'update'])->name('admin.partnership.update');
    Route::delete('/partnerships/{partner}', [\App\Http\Controllers\Admin\PartnershipController::class, 'destroy'])->name('admin.partnership.destroy');

    // Member Benefits
    Route::get('/member-benefits', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'index'])->name('admin.member_benefit.index');
    Route::get('/member-benefits/create', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'create'])->name('admin.member_benefit.create');
    Route::post('/member-benefits', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'store'])->name('admin.member_benefit.store');
    Route::get('/member-benefits/{benefit}/edit', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'edit'])->name('admin.member_benefit.edit');
    Route::put('/member-benefits/{benefit}', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'update'])->name('admin.member_benefit.update');
    Route::delete('/member-benefits/{benefit}', [\App\Http\Controllers\Admin\MemberBenefitController::class, 'destroy'])->name('admin.member_benefit.destroy');
    
    // Demandes d'adhésion
    Route::get('/membership-requests', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'index'])->name('admin.membership_requests.index');
    Route::get('/membership-requests/{membershipRequest}', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'show'])->name('admin.membership_requests.show');
    Route::post('/membership-requests/{membershipRequest}/approve', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'approve'])->name('admin.membership_requests.approve');
    Route::post('/membership-requests/{membershipRequest}/reject', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'reject'])->name('admin.membership_requests.reject');
    Route::delete('/membership-requests/{membershipRequest}', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'destroy'])->name('admin.membership_requests.destroy');
    Route::get('/membership-requests-statistics', [\App\Http\Controllers\Admin\MembershipRequestController::class, 'statistics'])->name('admin.membership_requests.statistics');
    
    // Admin - Volontaires actifs
    Route::get('volontaires-actifs', [AdminActiveVolunteerController::class, 'index'])->name('admin.active_volunteers.index');
    Route::get('volontaires-actifs/ajouter', [AdminActiveVolunteerController::class, 'create'])->name('admin.active_volunteers.create');
    Route::post('volontaires-actifs', [AdminActiveVolunteerController::class, 'store'])->name('admin.active_volunteers.store');
    Route::get('volontaires-actifs/{activeVolunteer}/modifier', [AdminActiveVolunteerController::class, 'edit'])->name('admin.active_volunteers.edit');
    Route::put('volontaires-actifs/{activeVolunteer}', [AdminActiveVolunteerController::class, 'update'])->name('admin.active_volunteers.update');
    Route::delete('volontaires-actifs/{activeVolunteer}', [AdminActiveVolunteerController::class, 'destroy'])->name('admin.active_volunteers.destroy');

    // Infinity Circle
    Route::get('infinity-circle', [AdminInfinityCircleController::class, 'index'])->name('admin.infinity_circle.index');
    Route::get('infinity-circle/ajouter', [AdminInfinityCircleController::class, 'create'])->name('admin.infinity_circle.create');
    Route::post('infinity-circle', [AdminInfinityCircleController::class, 'store'])->name('admin.infinity_circle.store');
    Route::get('infinity-circle/{infinityCircle}/modifier', [AdminInfinityCircleController::class, 'edit'])->name('admin.infinity_circle.edit');
    Route::put('infinity-circle/{infinityCircle}', [AdminInfinityCircleController::class, 'update'])->name('admin.infinity_circle.update');
    Route::delete('infinity-circle/{infinityCircle}', [AdminInfinityCircleController::class, 'destroy'])->name('admin.infinity_circle.destroy');

    // Our Story
    Route::get('our-story', [OurStoryController::class, 'index'])->name('admin.our-story.index');
    Route::get('our-story/create', [OurStoryController::class, 'create'])->name('admin.our-story.create');
    Route::post('our-story', [OurStoryController::class, 'store'])->name('admin.our-story.store');
    Route::get('our-story/{ourStory}', [OurStoryController::class, 'show'])->name('admin.our-story.show');
    Route::get('our-story/{ourStory}/edit', [OurStoryController::class, 'edit'])->name('admin.our-story.edit');
    Route::put('our-story/{ourStory}', [OurStoryController::class, 'update'])->name('admin.our-story.update');
    Route::delete('our-story/{ourStory}', [OurStoryController::class, 'destroy'])->name('admin.our-story.destroy');

    // Section Obama
    Route::resource('section-obama', SectionObamaController::class);
});

// Volontaires actifs (public)
Route::get('/volontaires-actifs', [ActiveVolunteerController::class, 'index'])->name('active_volunteers.index');

// Clubs IDA (public)
Route::get('/clubs-ida', [ClubIdaController::class, 'index'])->name('clubs_ida.index');

// Admin - Clubs IDA
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('clubs-ida', [AdminClubIdaController::class, 'index'])->name('admin.clubs_ida.index');
    Route::get('clubs-ida/ajouter', [AdminClubIdaController::class, 'create'])->name('admin.clubs_ida.create');
    Route::post('clubs-ida', [AdminClubIdaController::class, 'store'])->name('admin.clubs_ida.store');
    Route::get('clubs-ida/{clubIda}/modifier', [AdminClubIdaController::class, 'edit'])->name('admin.clubs_ida.edit');
    Route::put('clubs-ida/{clubIda}', [AdminClubIdaController::class, 'update'])->name('admin.clubs_ida.update');
    Route::delete('clubs-ida/{clubIda}', [AdminClubIdaController::class, 'destroy'])->name('admin.clubs_ida.destroy');
});

// Petites entreprises (public)
Route::get('/small-businesses', [SmallBusinnessController::class, 'index'])->name('small_businness.index');

// Admin - Petites entreprises
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('small-businesses', [AdminSmallBusinnessController::class, 'index'])->name('admin.small_businness.index');
    Route::get('small-businesses/ajouter', [AdminSmallBusinnessController::class, 'create'])->name('admin.small_businness.create');
    Route::post('small-businesses', [AdminSmallBusinnessController::class, 'store'])->name('admin.small_businness.store');
    Route::get('small-businesses/{smallBusinness}/modifier', [AdminSmallBusinnessController::class, 'edit'])->name('admin.small_businness.edit');
    Route::put('small-businesses/{smallBusinness}', [AdminSmallBusinnessController::class, 'update'])->name('admin.small_businness.update');
    Route::delete('small-businesses/{smallBusinness}', [AdminSmallBusinnessController::class, 'destroy'])->name('admin.small_businness.destroy');
});

// Zones franches Mauritanie (public)
Route::get('/mauritania-free-zone', [MauritaniaFreeZoneController::class, 'index'])->name('mauritania_free_zone.index');

// Admin - Zones franches Mauritanie
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('mauritania-free-zone', [AdminMauritaniaFreeZoneController::class, 'index'])->name('admin.mauritania_free_zone.index');
    Route::get('mauritania-free-zone/ajouter', [AdminMauritaniaFreeZoneController::class, 'create'])->name('admin.mauritania_free_zone.create');
    Route::post('mauritania-free-zone', [AdminMauritaniaFreeZoneController::class, 'store'])->name('admin.mauritania_free_zone.store');
    Route::get('mauritania-free-zone/{mauritaniaFreeZone}/modifier', [AdminMauritaniaFreeZoneController::class, 'edit'])->name('admin.mauritania_free_zone.edit');
    Route::put('mauritania-free-zone/{mauritaniaFreeZone}', [AdminMauritaniaFreeZoneController::class, 'update'])->name('admin.mauritania_free_zone.update');
    Route::delete('mauritania-free-zone/{mauritaniaFreeZone}', [AdminMauritaniaFreeZoneController::class, 'destroy'])->name('admin.mauritania_free_zone.destroy');
});

// Informations générales (public)
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Admin - Informations générales
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('about', [AdminAboutController::class, 'index'])->name('admin.about.index');
    Route::get('about/ajouter', [AdminAboutController::class, 'create'])->name('admin.about.create');
    Route::post('about', [AdminAboutController::class, 'store'])->name('admin.about.store');
    Route::get('about/{about}/modifier', [AdminAboutController::class, 'edit'])->name('admin.about.edit');
    Route::put('about/{about}', [AdminAboutController::class, 'update'])->name('admin.about.update');
    Route::delete('about/{about}', [AdminAboutController::class, 'destroy'])->name('admin.about.destroy');
});

//langue
Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
});

// Opportunités de projets (public)
Route::get('/project-opportunities', [ProjectOpportunitieController::class, 'index'])->name('project_opportunitie.index');

// Admin - Opportunités de projets
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('project-opportunities', [AdminProjectOpportunitieController::class, 'index'])->name('admin.project_opportunitie.index');
    Route::get('project-opportunities/ajouter', [AdminProjectOpportunitieController::class, 'create'])->name('admin.project_opportunitie.create');
    Route::post('project-opportunities', [AdminProjectOpportunitieController::class, 'store'])->name('admin.project_opportunitie.store');
    Route::get('project-opportunities/{projectOpportunitie}/modifier', [AdminProjectOpportunitieController::class, 'edit'])->name('admin.project_opportunitie.edit');
    Route::put('project-opportunities/{projectOpportunitie}', [AdminProjectOpportunitieController::class, 'update'])->name('admin.project_opportunitie.update');
    Route::delete('project-opportunities/{projectOpportunitie}', [AdminProjectOpportunitieController::class, 'destroy'])->name('admin.project_opportunitie.destroy');
});
