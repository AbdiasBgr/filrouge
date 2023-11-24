<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking website</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('js/styl.js') }}">
     @vite('resources/css/app.css')
    @vite('resources/js/app.js') 
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-color-primary text-color-white tracking-wider">
    <header class="sticky top-0 z-50">
        <nav class="container flex justify-between items-center">
            <div class="py-5 text-color-secondary font-bold text-3xl">
                <a href="#home">
                    <span class="text-color-white">Light</span>Code.
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6">
                    <li><a href="#home" class="hover:text-color-secondary ease-in duration-200">Home</a></li>
                    <li><a href="#features" class="hover:text-color-secondary ease-in duration-200">Features</a></li>
                    <li><a href="#testimonial" class="hover:text-color-secondary ease-in duration-200">Testimonial</a></li>
                    <li><a href="#pricing" class="hover:text-color-secondary ease-in duration-200">Pricing</a></li>
                    <li><a href="#blog" class="hover:text-color-secondary ease-in duration-200">Blog</a></li>
                    <li><a href="#contact" class="hover:text-color-secondary ease-in duration-200">Contact</a></li>

                    <li><button class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">free trial</button></li>
                </ul>
            </div>

             Mobile screen  
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div id="menu" class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li><a id="hLink" href="#home" class="hover:text-color-secondary ease-in duration-200">Home</a></li>
                    <li><a id="hLink" href="#features" class="hover:text-color-secondary ease-in duration-200">Features</a></li>
                    <li><a id="hLink" href="#testimonial" class="hover:text-color-secondary ease-in duration-200">Testimonial</a></li>
                    <li><a id="hLink" href="#pricing" class="hover:text-color-secondary ease-in duration-200">Pricing</a></li>
                    <li><a id="hLink" href="#blog" class="hover:text-color-secondary ease-in duration-200">Blog</a></li>
                    <li><a id="hLink" href="#contact" class="hover:text-color-secondary ease-in duration-200">Contact</a></li>

                    <li><button class="btn">free trial</button></li>
                </ul>
            </div>
        </nav>
    </header> -->

    <main>
        <section id="home" class="relative">

            <div class="blob1"></div>

            <div class="blob2"></div>

            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="title mb-4">Awesome App for Your Financial.</h1>
                        <p class="leading-relaxed mb-10">This should be used to tell a story and let your users know a little more about app and it’s use, How can benefit them.</p>
                        <button class="btn">Download app</button>
                    </div>

                    <div class="md:w-1/2">
                        <img src="/images/hero4.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Our Future</h4>
                    <h1 class="title">Easy To Manage Your All Payments By Our App</h1>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                    <!-- card no 1 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Expense Trackering</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>

                    <!-- card no 2 -->
                    <div class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-chart-column text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Finance Snapshot</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>

                    <!-- card no 3 -->
                    <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-phone text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Support 24/24</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="saving-money">
            <div class="container py-20 relative">
                <div class="blob1"></div>

                <div class="blob2"></div>

                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="mb-12 md:w-1/2">
                        <img src="/images/hero3.png" alt="">
                    </div>

                    <div class="text-center md:text-left md:w-1/2 md:ml-20">
                        <h4 class="font-bold text-color-secondary mb-4">Saving Money</h4>
                        <h1 class="title mb-4">Best Financing App To Save Your Money</h1>
                        <p class="leading-relaxed mb-10">Best financing app ever in the world. Easy to use and very user friendly for mobile banking. You can control your card easily and send money some one just one click.</p>
                        <button class="btn">Read More</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-works" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">How It Works</h4>
                    <h1 class="title">Grow Up Your Money Saving</h1>
                </div>

                <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                    <!-- card 1  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/public/images/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">1</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Install The App</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>

                    <!-- card 2  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-color-secondary">
                            <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/public/images/line-bottom.png')] lg:after:absolute lg:after:top-10 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">2</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Setup Your Profile</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                <!-- card 3  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl">3</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Enjoy The Features!</h3>
                        <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonial">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">User Review</h4>
                    <h1 class="title">What Clients Say About Our App After Use It</h1>
                </div>

                <!-- review container  -->
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="/images/user1.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showReview()">
                        <img src="/images/user2.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="/images/user3.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="/images/user4.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                        <img src="/images/user5.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                    </div>

                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                            <p>IOS developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Vera Duncan</h4>
                            <p>Flutter developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Pirtle Karol</h4>
                            <p>Android developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Mark Joe</h4>
                            <p>React developer</p>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">"This should be used to tell a story and include any testimonials you might have about your product or service for your clients"!</p>
                            <h4 class="font-bold text-color-secondary mb-1">Leila Domniuc</h4>
                            <p>Angular developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="pricing" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Pricing</h4>
                    <h1 class="title">Get In Reasonable Price</h1>


                    <!-- Rounded switch  -->
                    <div class="mt-5 flex items-center justify-center gap-4">
                        <p>Bill Monthly</p>
                        <label class="cursor-pointer relative inline-block w-20 h-8 rounded-full">
                            <input type="checkbox" id="toggleBtn" class="peer opacity-0 w-0 h-0">
                            <span class="absolute top-0 left-0 right-0 bottom-0 bg-color-primary-light border border-solid border-color-gray rounded-full duration-300 before:content-[''] before:absolute before:w-6 before:h-6 before:bottom-1 before:left-1 before:rounded-full before:bg-color-white before:duration-300 peer-checked:before:translate-x-12 peer-checked:bg-color-secondary"></span>
                        </label>
                        <p>Bill Anually</p>
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <!-- card 1 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side  -->
                        <div id="card_1_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    20<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_1_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    120<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>
                    </div>

                    <!-- card 2 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side  -->
                        <div id="card_2_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    50<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Standard</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_2_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    150<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Standard</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>
                    </div>



                    <!-- card 3 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side  -->
                        <div id="card_3_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    100<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_3_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p class="text-6xl pl-2 font-bold before:content-['$'] before:absolute before:text-sm before:top-0 before:left-0">
                                    500<span class="text-sm font-normal tracking-widest">/per month</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Premium</h3>
                                <p class="leading-relaxed">For Beginner Who Want To Scale Business Globaly</p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Expense Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Card Management</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Instant Statistics</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Bookmark Function</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Accounting System</span>
                                </li>
                            </ul>

                            <button class="card_btn">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Innovation And Quality Improvement</h4>
                    <h1 class="title">Latest Updates, Solutions And Company News</h1>
                </div>

                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <!-- card no 1 -->
                    <div>
                        <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                            <img src="/images/blog1.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                        </div>

                        <div>
                            <div class="flex items-center gap-5 py-5">
                                <p>20 August 2022</p>
                                <p>1 min read</p>
                            </div>

                            <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Four ways to cheer yourself up on Blue Monday!</a>

                            <p class="leading-relaxed my-5">On the second edition of Serious Business, Inc. editor Jim Ledbetter and Fusion senior editor Salmon debate...</p>


                            <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                                <span class="tracking-wider capitalize underline hover:no-underline">Read more</span>
                            </a>
                        </div>
                    </div>

                    <!-- card no 2 -->
                    <div>
                        <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                            <img src="/images/blog2.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                        </div>

                        <div>
                            <div class="flex items-center gap-5 py-5">
                                <p>20 August 2022</p>
                                <p>1 min read</p>
                            </div>

                            <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">How to Organize Your budget for Maximum Productivity?</a>

                            <p class="leading-relaxed my-5">Global provider connected products for consumers, and enterprises worldwide, supply chain control is everything...</p>


                            <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                                <span class="tracking-wider capitalize underline hover:no-underline">Read more</span>
                            </a>
                        </div>
                    </div>

                <!-- card no 3 -->
                <div>
                    <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                        <img src="/images/blog3.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                    </div>

                    <div>
                        <div class="flex items-center gap-5 py-5">
                            <p>20 August 2022</p>
                            <p>1 min read</p>
                        </div>

                        <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Should Small Businesses Be Entitled to system?</a>

                        <p class="leading-relaxed my-5">Our team provides skilled & experienced managers who know the intricacies of this vertical and focus...</p>


                        <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                            <span class="tracking-wider capitalize underline hover:no-underline">Read more</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>


        </section>


        <section id="download-app" class="bg-color-primary-light">
            <div class="container h-[80vh] grid place-items-center">
                <div class="text-center md:w-2/3 m-auto">
                    <h1 class="title">Download App Now And Save Your Money</h1>
                    <p class="leading-relaxed pt-5">Serving an impressive list of long-term money with experience and expertise in multiple industries.</p>

                    <div class="flex flex-col md:flex-row items-center justify-center gap-5 pt-10">
                        <a href="#" class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                            <img src="/images/ios-store-dark.png" alt="">
                        </a>
                        <a href="#" class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                            <img src="/images/g-play-dark.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Have A Questation</h4>
                    <h1 class="title">Get In Touch</h1>
                </div>


                <form>
                    <div class="w-full m-auto text-center md:w-2/3">
                        <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                            <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Name">

                <input type="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Email">

                <input type="tel" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Phone">

                <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Company">
                        </div>


                        <textarea rows="4" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Message"></textarea>

                        <button class="btn mt-10">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <section id="footer">
            <div class="bg-color-primary-dark relative">
                <div class="container py-10">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">About App</h4>
                            <p class="leading-relaxed">This Should Be Used To Tell A Story And Include Any Testimonials You Might Have About Your Product Or Service For Your Clients</p>
                            <div class="flex gap-5 items-center">
                                <p>Follow Us</p>
                                    <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-twitter cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-youtube cursor-pointer hover:text-color-secondary"></i>
                                    <i class="fa-brands fa-instagram cursor-pointer hover:text-color-secondary"></i>
                            </div>
                        </div>
                        <div class="flex justify-between md:justify-around">
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Quick Links</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">Home</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#features">Features</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#testimonial">Testimonial</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#pricing">Pricing</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Blog</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Contact</a></li>

                                </ul>
                            </div>

                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Help</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#">About Us</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#features">Partners</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#testimonial">Career</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#pricing">Reviews</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#blog">Terms & Conditions</a></li>
                                    <li class="underline hover:no-underline hover:text-color-secondary"><a href="#contact">Help</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Newsletter</h4>
                            <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                            <div class="flex items-center">
                                <input type="text" class="w-3/4 text-color-gray bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">

                                <button type="submit" class="bg-color-secondary px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center pt-10 border-t border-color-gray">
                        <p>2023 &copy; LightCode. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script>

        const navbar = document.querySelector('header');

        window.onscroll = () => {
            if(window.scrollY > 100) {
                navbar.classList.add('bg-color-primary-dark');
                navbar.classList.add('border-b');
                navbar.classList.add('border-color-gray');
            } else {
                navbar.classList.remove('bg-color-primary-dark');
                navbar.classList.remove('border-b');
                navbar.classList.remove('border-color-gray');
            }
        }

        // Mobile menu
        const hamburger = document.querySelector('#hamburger');
        const menu = document.querySelector('#menu');
        const hLink = document.querySelectorAll('#hLink');
        const faSolid = document.querySelector(".fa-solid");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            faSolid.classList.toggle('fa-xmark');
        })

        hLink.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                faSolid.classList.toggle('fa-xmark');
            })
        })

        // testimonial
        const userTexts = document.getElementsByClassName('user-text');
        const userPics = document.getElementsByClassName('user-pic');

        function showReview() {
            for(userPic of userPics) {
                userPic.classList.remove("active-pic");
            }
            for(userText of userTexts) {
                userText.classList.remove("active-text");
            }

            let i = Array.from(userPics).indexOf(event.target);

            userPics[i].classList.add('active-pic');
            userTexts[i].classList.add('active-text');
        }

        const toggleBtn = document.getElementById('toggleBtn');

        const card_1_front = document.querySelector("#card_1_front");
        const card_1_back = document.querySelector("#card_1_back");

        const card_2_front = document.querySelector("#card_2_front");
        const card_2_back = document.querySelector("#card_2_back");

        const card_3_front = document.querySelector("#card_3_front");
        const card_3_back = document.querySelector("#card_3_back");

        toggleBtn.addEventListener('change', () => {
            card_1_front.classList.toggle('-rotate-y-180');
            card_1_back.classList.toggle('rotate-y-180');

            card_2_front.classList.toggle('-rotate-y-180');
            card_2_back.classList.toggle('rotate-y-180');

            card_3_front.classList.toggle('-rotate-y-180');
            card_3_back.classList.toggle('rotate-y-180');

        })
    </script>
<!-- </body>
</html> -->


<!-- <div class="relative isolate px-6  lg:px-8">
     <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div> 
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white-900 sm:text-6xl">
                Votre Partenaire pour un Avenir</h1>
            <p class="mt-6 text-lg leading-8 text-white-600">Financier Florissant</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/login" class="orang rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Connexion</a>
                <a href="#" class=" orang1 text-sm font-semibold leading-6 text-white-900">Contactez-Nous <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
     <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div> 
</div>
</div> -->