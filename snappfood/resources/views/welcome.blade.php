<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/fiv.png" type="image/x-icon">

        <link rel="apple-touch-icon" href="img/fiv.png">

        <title>اسنپ فود</title>

        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

        <link rel="stylesheet" href="{{ asset('fonts/fontawsome/css/all.min.css') }}">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <header>

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 right search-icon">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="account"><i class="fa fa-user"></i>dashboard</a>

                        @else
                            <a href="{{ route('login') }}" class="account"><i class="fa fa-user"></i>ورود</a>
                            <a href="{{ route('register') }}" class="account"><i class="fa fa-user"></i>عضویت</a>
                            @endauth
                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 center">

                            <h3>سفارش آنلاین غذا از بهترین رستوران‌های اطراف شما</h3>

                            <div class="area-search">

                                <form action="">

                                    <input type="text" name="" class="search-input" placeholder="شهر">

                                    <input type="text" name="" class="search-input" placeholder="محله">

                                    <input type="text" name="" class="search-input" placeholder="غذا">

                                    <input type="text" name="" class="search-input" placeholder="رستوران">

                                    <button class="search-btn">جستجو</button>

                                </form>

                            </div>

                            <div class="img-box">

                                <a href="#"><img src="{{ asset('img/restaurant.png') }}" class="" alt="">

                                    <div class="number"><p>11371</p></div>

                                </a>

                                <a href="#"><img src="img/cafe.png" class="" alt="">

                                    <div class="number"><p>1087</p></div>



                                </a>

                                <a href="#"><img src="{{asset('img/confectionery.png')}}" class="" alt="">

                                    <div class="number"><p>323</p></div>



                                </a>

                                <a href="#"><img src="{{ asset('img/supermarket.png') }}" class="" alt="">

                                    <div class="number"><p>99</p></div>

                                </a>

                                <div class="row">

                                    <span>رستوران</span>

                                    <span>کافی شاپ</span>

                                    <span>شیرینی</span>

                                    <span>سوپر مارکت</span>

                                </div>

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-3 left">

                            <div class="snapplogo"></div>

                        </div>

                    </div>

                </div>

            </header>

            <!--End-header-->

            <!--Start-Section-->

            <section>

                <div class="container-fluid">

                    <div class="row">

                        <div id="content">

                            <div class="container">

                                <h2><span>اسنپ‌فود </span>پیشگام در سفارش آنلاین غذا در ایران</h2>

                                <p>

                                    اسنپ‌فود یا همان زودفود سابق، اولین و بزرگ‌ترین سامانه سفارش آنلاین غذا است. اسنپ‌فود، علاوه بر

                                    سفارش غذا، خدمات سفارش آنلاین کیک و شیرینی و سوپرمارکت آنلاین را نیز ارائه می‌کند. در حال حاضر،

                                    بیش

                                    از ۱۳۵۰۰ رستوران دربیش از ۷۰ نقطه از کشور فعال هستند. شما با سفارش غذا از اسنپ فود به طیف وسیعی

                                    از

                                    رستوران‌ها، غذاها و بهترین برندها دسترسی خواهید داشت. با سفارش آنلاین غذا در تهران، اصفهان،

                                    مشهد،

                                    تبریز و دیگر نقاط ایران، راحتی و تنوع را تجربه کنید.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="container-fluid">

                    <div class="app">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                            <h3> اپلیکیشن <span>اسنپ‌فود </span></h3>

                            <p>

                                با اپلیکیشن اسنپ‌فود به راحتی و با چند کلیک ساده می‌توانید رستوران‌ها، کافه‌ها، شیرینی‌فروشی‌ها و

                                سوپرمارکت‌های نزدیک خودتان را جست‌و‌جو کرده و از تجربه سفارش آسان از اسنپ‌فود لذت ببرید.





                            </p>

                            <span>برای دریافت لینک دانلود اپلیکیشن، شماره موبایل خود را وارد کنید.</span>

                            <form action="">

                                <label>

                                    <input type="text" name="" placeholder="*********09">

                                </label>

                                <button>دریافت لینک</button>

                            </form>

                        </div>

                        <div class=" col-md-4 col-lg-5 col-lg-offset-1">

                            <img src="{{ asset('img/iphoneX_mockup.png') }}" alt="" class="iphonx">

                        </div>

                    </div>

                </div>



                <div class="container-fluid">

                    <div class="row">

                        <div class="category">


                                <a href="#" class="cuisine"><img src="{{ asset('img/1.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/2.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/3.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/3.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/4.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/5.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/6.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/7.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/8.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/9.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/10.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/11.png') }}" alt=""></a>

                                <a href="#" class="cuisine"><img src="{{ asset('img/12.png') }}" alt=""></a>



                        </div>

                    </div>

                </div>





                <div class="container-fluid">

                    <div class="row">

                        <div class="popular-box">

                            <div class="col-xs-12 col-md-6 col-lg-6 col-lg-offset-1">

                                <h3>پرطرفدارهای <span>اسنپ‌فود</span></h3>

                                <h6>مجموعه‌ای از بهترین و پرطرفدارترین رستوران‌ها و فروشگاه‌های فعال در اسنپ‌فود</h6>

                                <div class="row">

                                    <a href="#" class="popular"><img src="{{ asset('img/p1.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p2.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p3.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p4.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p5.png') }}" alt=""></a>

                                </div>

                                <div class="row">

                                    <a href="#" class="popular"><img src="{{ asset('img/p6.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p7.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p8.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p9.png') }}" alt=""></a>

                                    <a href="#" class="popular"><img src="{{ asset('img/p10.png') }}" alt=""></a>

                                </div>

                            </div>

                            <div class="col-md-6 col-lg-5 ">

                                <div class="popular-img">

                                    <img src="{{ asset('img/spoon.png') }}" alt="">

                                    <img src="{{ asset('img/food3.png') }}" alt="">

                                    <img src="{{ asset('img/fork.png') }}" alt="">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





            </section>


            <!--End-Section-->

            <!--Start-Footer-->

            <footer>

                <div class="container">

                    <div class="row">

                        <div class="city">



                            <h4>اسنپ‌فود در شهر‌های مختلف</h4>

                            <ul>

                                <li><a href="#">تهران</a></li>

                                <li><a href="#">اصفهان</a></li>

                                <li><a href="#">مشهد</a></li>

                                <li><a href="#">شیراز</a></li>

                                <li><a href="#">تبریز</a></li>

                                <li><a href="#">کرج</a></li>

                                <li><a href="#">قم</a></li>

                                <li><a href="#">اهواز</a></li>

                                <li><a href="#">ارومیه</a></li>

                                <li><a href="#">یزد</a></li>

                                <li><a href="#">رشت</a></li>

                                <li><a href="#">قزوین</a></li>

                                <li><a href="#">کرمان</a></li>

                                <li><a href="#">اردبیل</a></li>

                                <li><a href="#">ساری</a></li>

                                <li><a href="#">همدان</a></li>

                                <li><a href="#">اراک</a></li>

                                <li><a href="#">کرمانشاه</a></li>

                                <li><a href="#">کاشان</a></li>

                                <li><a href="#">زنجان</a></li>

                                <li><a href="#">گرگان</a></li>

                                <li><a href="#">بندرعباس</a></li>

                                <li><a href="#">لاهیجان</a></li>

                                <li><a href="#">شاهین شهر</a></li>

                                <li><a href="#">شهر کرد</a></li>

                                <li><a href="#">بوشهر</a></li>

                                <li><a href="#">سمنان</a></li>

                                <li><a href="#">گنبدکاووس</a></li>

                                <li><a href="#">سبزوار</a></li>

                                <li><a href="#">سنندج</a></li>

                                <li><a href="#">نیشابور</a></li>

                                <li><a href="#">پردیس</a></li>

                                <li><a href="#">بابل</a></li>

                                <li><a href="#">کیش</a></li>

                                <li><a href="#">اسلامشهر</a></li>

                                <li><a href="#">قائم شهر</a></li>

                                <li><a href="#">قشم</a></li>

                                <li><a href="#">شهر ری</a></li>

                                <li><a href="#">زاهدان</a></li>

                                <li><a href="#">اندیشه</a></li>

                                <li><a href="#">ایلام</a></li>

                                <li><a href="#">چالوس</a></li>

                                <li><a href="#">خمینی شهر</a></li>

                                <li><a href="#">بندر انزلی</a></li>

                                <li><a href="#">یاسوج</a></li>

                                <li><a href="#">نجف آباد</a></li>

                                <li><a href="#">بابلسر</a></li>

                                <li><a href="#">محمدآباد</a></li>

                                <li><a href="#">شهریار</a></li>

                                <li><a href="#">بیرجند</a></li>

                                <li><a href="#">آبادان</a></li>

                                <li><a href="#">بروجرد</a></li>

                                <li><a href="#">بجنورد</a></li>

                                <li><a href="#">خرم آباد</a></li>

                                <li><a href="#">رامسر</a></li>

                                <li><a href="#">نوشهر</a></li>

                                <li><a href="#">کازرون</a></li>

                                <li><a href="#">ورامین</a></li>

                                <li><a href="#">آمل</a></li>

                                <li><a href="#">سلمان شهر</a></li>

                                <li><a href="#">شهرقدس</a></li>

                                <li><a href="#">تنکابن</a></li>

                                <li><a href="#">نور</a></li>

                            </ul>

                        </div>





                        <div class="more-about">

                            <h4>از اسنپ فود بیشتر بدانیم!</h4>

                            <p>اسنپ فود، اولین و بزرگ‌ترین سامانه آنلاین سفارش و دلیوری غذا است که سفارش اینترنتی غذا را برای همه

                                امکان‌پذیر کرده است. زودفود، اولین برند سفارش آنلاین غذا در ایران است که با هدف پایه گذاری فرهنگ

                                سفارش اینترنتی غذا کار خود را آغاز کرد. در سال ۱۳۹۶، شرکت های اسنپ و زودفود تحت نام تجاری مشترک اسنپ

                                فود به فعالیت خود ادامه دادند تا تحولی جدید در حوزه سفارش غذا و فست فود ایجاد کنند. هم اکنون

                                اسنپ‌فود به عنوان اولین سایت سفارش غذا در فضای کسب و کارهای آنلاین ایران، با بیش از ۱۳۵۰۰ رستوران از

                                معتبرترین و بهترین رستوران‌های ایران مشغول همکاری است. هوس غذای ایرانی یا غذای ایتالیایی کرده‌اید؟

                                سفارش پیتزا یا سفارش شیک و گلاسه را در نظر گرفته‌اید؟ می‌خواهید برای سفارش صبحانه از خدمات دلیوری و

                                ارسال قهوه داغ در محل کارتان لذت ببرید؟ یا شاید حتی مهمان دارید و می‌خواهید خدمات سفارش شبانه غذا

                                دریافت کنید؟ اسنپ فود همواره کنار شما است. سایت اسنپ فود را باز کنید یا با دانلود اپلیکیشن آن، با

                                خیالی آسوده سفارش دهید.</p>

                        </div>

                    </div>



                    <div class="row">

                        <div class="newfooter">

                            <div class="col-md-3 col-lg-3">



                                <h4>بیشتر بدانید</h4>

                                <li><a href="#">درباره ی ما</a></li>

                                <li><a href="#">قوانین سایت</a></li>

                                <li><a href="#">پرسش های متدوال</a></li>

                                <li><a href="#">وبلاگ</a></li>

                                <li><a href="#">سفارش شبانه غذا</a></li>

                                <li><a href="#">بسته های خدماتی اسنپ فود</a></li>

                                <li><a href="#">زاهنمای پرداخت جیرینگ</a></li>

                                <li><a href="#">اپلیکیشن موبایل</a></li>

                                <li><a href="#">همکاری مشترک با سازمان ملل</a></li>

                                <li><a href="#">مرام نامه همکاری ویژه</a></li>

                            </div>

                            <div class="col-md-3 col-lg-3">

                                <h4>با ما در ارتباط باشید</h4>

                                <li><a href="#">تماس با ما</a></li>

                                <li><a href="#">تیم ما</a></li>

                                <li><a href="#">همکاری با ما</a></li>

                                <li><a href="#">حریم خصوصی</a></li>

                                <li><a href="#">ثبت شکایت</a></li>

                            </div>

                            <div class="col-md-2 col-lg-2 mojvez">

                                <h4>مجوزها</h4>

                                <img src="{{ asset('img/logo.png') }}" alt="">

                                <img src="{{ asset('img/kasbokar.png') }}" alt="">

                            </div>

                            <div class="col-md-4 col-lg-4 news">

                                <h4>عضویت در خبرنامه</h4>

                                <p>برای عضویت در خبرنامه اسنپ‌فود و دریافت جدیدترین مطالب تخفیف‌‌ها و جشنواره‌ها ایمیل خود را وارد

                                    کنید</p>

                                <form action="">

                                    <input type="text" name="" id="" placeholder="   ایمیل  ">

                                    <button>عضویت</button>

                                </form>
                                <div class="row">
                                    <div class="social">
                                        <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
         <!--End-Footer-->
    </body>
</html>
