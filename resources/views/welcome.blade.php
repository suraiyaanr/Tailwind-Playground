<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
       
        
    </head>
   
<!-- Section 1 -->
<section class="w-full px-6 pb-12 antialiased bg-white">
    <div class="mx-auto max-w-7xl">

        <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2">
                <div class="flex items-center justify-start w-1/4 h-full pr-4">
                    <a href="#_" class="inline-block py-4 md:py-0">
                        <span class="p-1 text-xl font-black leading-none text-gray-900"><span>tails</span><span class="text-indigo-600">.</span></span>
                    </a>
                </div>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                        <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 md:hidden">tails<span class="text-indigo-600">.</span></a>
                        <div class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <a href="#_" class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-indigo-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Home</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Features</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Blog</a>
                            <a href="#_" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Contact</a>
                            <a href="#_" class="absolute top-0 left-0 hidden py-2 mt-6 ml-10 mr-2 text-gray-600 lg:inline-block md:mt-0 md:ml-2 lg:mx-3 md:relative">
                                <svg class="inline w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </a>
                        </div>
                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <a href="#" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Sign In</a>
                            <a href="#_" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>

        <!-- Main Hero Content -->
        <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
            <h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block">Start Crafting Your</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Next Great Idea</span></h1>
            <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">Simplifying the creation of landing pages, blog pages, application pages and so much more!</div>
            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="#_" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent rounded-full md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                        Purchase Now
                    </a>
                    <span class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-400 rounded-full">only $15/mo</span>
                </span>
                <a href="#" class="mt-3 text-sm text-indigo-500">Learn More</a>
            </div>
        </div>
        <!-- End Main Hero Content -->

    </div>
</section>

<!-- Section 2 -->
<section class="bg-white pt-7 pb-14">
    <div class="container px-8 mx-auto sm:px-12 lg:px-20">
        <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">Trusted by top-leading companies.</h1>
        <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12">
            </div>
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9">
            </div>
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9">
            </div>
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8">
            </div>
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9">
            </div>
            <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9">
            </div>
        </div>
    </div>
</section>

<!-- Section 3 -->
<section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
    <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

        <!-- Image -->
        <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
            <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
        </div>

        <!-- Content -->
        <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
            <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                Boost Productivity
            </h2>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                Build an atmosphere that creates productivity in your organization and your company culture.
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Maximize productivity and growth
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Speed past your competition
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Learn the top techniques
                </li>
            </ul>
        </div>
        <!-- End  Content -->
    </div>
    <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

        <!-- Content -->
        <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
            <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                Automated Tasks
            </h2>
            <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                Save time and money with our revolutionary services. We are the leaders in the industry.
            </p>
            <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Automated task management workflow
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Detailed analytics for your data
                </li>
                <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Some awesome integrations
                </li>
            </ul>
        </div>
        <!-- End  Content -->

        <!-- Image -->
        <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
            <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
        </div>
    </div>
</section>

<!-- Section 4 -->
<section class="py-20 bg-gray-50">
  <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
    <div class="flex flex-wrap items-center -mx-3">
      <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
        <div class="w-full lg:max-w-md">
          <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">Jam-packed with all the tools you need to succeed!</h2>
          <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">It's never been easier to build a business of your own. Our tools will help you with the following:</p>
          <ul>
            <li class="flex items-center py-2 space-x-4 xl:py-3">
              <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
              <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
            </li>
            <li class="flex items-center py-2 space-x-4 xl:py-3">
              <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
              <span class="font-medium text-gray-500">Out of the Box Tracking and Monitoring</span>
            </li>
            <li class="flex items-center py-2 space-x-4 xl:py-3">
              <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="https://cdn.devdojo.com/images/november2020/feature-graphic.png" alt="feature image"></div>
    </div>
  </div>
</section>

<!-- Section 5 -->
<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Features to help you work smarter</h2>
                        </div>
                        <p class="text-2xl text-gray-700">We've created a simple formula to follow in order to gain more out of your business and your application.</p>
                        <a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Get Started Today</a>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Signup</h4>
                    <p class="text-lg text-gray-500">or, if you have an account you can <a href="#_" class="text-blue-600 underline">sign in</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <div class="relative">
                            <label class="font-medium text-gray-900">Name</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Enter Your Name">
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Email</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Enter Your Email Address">
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Password</label>
                            <input type="password" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Password">
                        </div>
                        <div class="relative">
                            <a href="#_" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Create Account</a>
                            <a href="#_" class="inline-block w-full px-5 py-4 mt-3 text-lg font-bold text-center text-gray-900 transition duration-200 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 ease">Sign up with Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Section 6 -->
<section class="py-20 bg-white">
    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
            The New Standard for Design
        </h2>
        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Use our award-winning tools to help you maximize your profits. We've uncovered the correct recipe for converting visitors into customers.
        </p>
        <div class="flex justify-center mt-8 space-x-3">
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-700">Sign Up Today</a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200">Learn more</a>
        </div>
    </div>
</section>

<!-- Section 7 -->
<section class="flex items-center justify-center py-20 bg-white min-w-screen">
    <div class="px-16 bg-white">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">Don't just take our word for it</p>


            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
                See what others are saying</h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

            <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1700&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">John Doe</h4>
                            <p class="text-gray-600">CEO of Something</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"This is a no-brainer if you want to take your business to the next level. If you are looking for the ultimate toolset, this is it!"</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2547&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">Jane Doe</h4>
                            <p class="text-gray-600">CTO of Business</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"Thanks for creating this service. My life is so much
                        easier.
                        Thanks for making such a great product."</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1256&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">John Smith</h4>
                            <p class="text-gray-600">Creator of Stuff</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-500">"Packed with awesome content and exactly what I was
                        looking
                        for. I would highly recommend this to anyone."</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8 -->
<section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
    <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
        <p class="text-xs font-bold text-left text-pink-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold">
            Got a Question? We’ve got answers.
        </p>
        <h3 class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center sm:mx-0">
            Frequently Asked Questions
        </h3>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">How does it work?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                Our platform works with your content to provides insights and metrics on how you can grow your business and scale your infastructure.
            </p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">Do you offer team pricing?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                Yes, we do! Team pricing is available for any plan. You can take advantage of 30% off for signing up for team pricing of 10 users or more.
            </p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">How do I make changes and configure my site?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
            </p>
        </div>
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3">
            <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl">How do I add a custom domain?</h3>
            <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
            </p>
        </div>
    </div>
</section>

<!-- Section 9 -->
<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                Simple, Transparent Pricing
            </h2>
            <p class="box-border mt-2 text-xl text-gray-900 border-solid sm:text-2xl">
                Pricing to fit the needs of any companie size.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-4 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Starter
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $5
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for Startups and Small Companies
                </p>
                <ul class="flex-1 p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Automated Reporting
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Faster Processing
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Customizations
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-blue-600 no-underline bg-transparent border border-blue-600 rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg">
                    Select Plan
                </button>
            </div>
            <!-- Price 2 -->
            <div class="relative z-20 flex flex-col items-center max-w-md p-4 mx-auto my-0 bg-white border-4 border-blue-600 border-solid rounded-lg sm:p-6 md:px-8 md:py-16">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Basic
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $15
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for medium-size businesses to larger businesses
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Starter
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        100 Builds
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Progress Reports
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Premium Support
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-blue-600 border rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg">
                    Select Plan
                </button>
            </div>
            <!-- Price 3 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Plus
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $25
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for larger and enterprise companies
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Basic
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited Builds
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Advanced Analytics
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Company Evaluations
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-blue-600 no-underline bg-transparent border border-blue-600 rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg">
                    Select Plan
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Section 10 -->
<section class="text-gray-700 bg-white body-font">
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
        <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">tails<span class="text-indigo-600">.</span></a>
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2021 Tails - Tailwindcss Page Builder
        </p>
        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </span>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,700;1,200;1,700&display=swap');

body
{
    font-family: 'Montserrat', sans-serif;
    background-color: white;
}

.seccion
{
    text-transform: uppercase;
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    transform: rotate(270deg);
    -webkit-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    -o-transform-origin: 0 0;
    transform-origin: 0 0;
    top: 60%;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

<div class="p-4 md:p-10 bg-white">
    <div class="flex justify-center text-xl font-bold tracking-widest text-gray-300">
        <h1>CURRICULUM VITAE EXTENDIDO</h1>
    </div>

    <div class="grid col-span-1 md:flex items-center mt-10 justify-center">
        <div class="mr-14">
            <img class="md:w-40" src="https://i.imgur.com/HvlloWd.png" alt="Logo">
        </div>
        <div class="md:mr-4">
            <img class="md:w-40" src="https://i.imgur.com/xUbzfdw.png" alt="">
        </div>
        <div class="md:border-l-2 pl-4 p-2 col-span-2 text-justify md:w-1/2 mt-10 md:mt-0">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ex urna, lobortis nec venenatis sed, fringilla at nibh.
            </p>
            <p class="mt-4">
                Fusce auctor gravida dui, ut tristique nisi aliquam quis. Maecenas id ligula ac dui mollis tempor. Sed vitae ex eros. Proin nisl felis, consectetur sed elit sed, vestibulum ultrices nibh.
            </p>
        </div>
    </div>

    <div class="grid col-span-1 md:flex items-center justify-center mt-20">
        <div>
            <div class="md:flex items-center mb-4">
                <div class="flex items-center md:mr-8 mb-4 md:mb-0">
                    <i class="fas fa-envelope-open-text fa-2x mr-2"></i>
                    <p>matias@icodeart.cl</p>
                </div>

                <div class="flex items-center">
                    <i class="fab fa-github fa-2x mr-2"></i>
                    <p><b>github.com/</b>mkdirmatias</p>
                </div>
            </div>

            <div class="md:flex items-center">
                <div class="flex items-center md:mr-7">
                    <i class="fas fa-phone-alt fa-2x mr-2 mb-4 md:mb-0"></i>
                    <p>+5 6 9 3 2 6 8 8 8 2 4 </p>
                </div>

                <div class="flex items-center">
                    <i class="fas fa-globe fa-2x mr-2"></i>
                    <p> icodeart.cl</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center md:ml-12 pt-10 md:pt-0">
            <div class="md:flex">
                <div class="flex items-center mb-4 md:mb-0">
                    <p class="font-bold mr-2 p-2 border rounded-full">ES</p>
                    <p>NATIVO</p>
                </div>

                <div class="flex items-center md:ml-10">
                    <p class="font-bold mr-2 p-2 border rounded-full">EN</p>
                    <p>BÁSICO</p>
                </div>
            </div>            
        </div>
    </div>

    <div class="md:flex mt-20 text-center ml-10 mr-10 md:ml-36 md:mr-36">
        <div class="md:mr-20 md:w-1/3">
            <h1 class="font-bold italic mb-10">TECNOLOGIAS QUE MÁS USO</h1>

            <div class="relative mt-5 text-left">
                
                <div class="flex items-center relative pb-5 justify-start">
                    
                    <div class="border-r-2 border-black absolute h-full top-2 z-10 ">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        <div class="absolute seccion -ml-8 font-bold italic text-gray-400 ">BACKEND</div>
                    </div>

                    <div class="ml-6 pt-5">
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="data:image/png;base64,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" alt="">
                            </div>
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                            <div>
                                <img class="w-24" src="https://img.icons8.com/ios/452/python.png">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="data:image/png;base64,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" alt="">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/digitalocean-512.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/postgresql-512.png">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/mysql-512.png" alt="">
                            </div>
                            <div>
                                <img class="w-24" src="https://mariadb.com/wp-content/uploads/2019/11/mariadb-logo-vert_black-transparent.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdns.iconmonstr.com/wp-content/assets/preview/2013/240/iconmonstr-linux-os-1.png">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex items-center relative pb-5 pt-5 justify-start">
                    
                    <div class="border-r-2 border-black absolute h-full top-2 z-10 ">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        <div class="absolute seccion -ml-8 font-bold italic text-gray-400">SOFTWARE</div>
                    </div>

                    <div class="ml-6 pt-5">
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="data:image/png;base64,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" alt="">
                            </div>
                            <div>
                                <img class="w-24" style="filter: contrast(0.01%) brightness(10%)" src="https://i2.wp.com/mac-torrent-download.net/wp-content/uploads/2019/11/Navicat-Premium-15-icon.png?resize=246%2C246&ssl=1">
                            </div>
                            <div>
                                <img class="w-24" src="https://img.icons8.com/ios-filled/452/burp-suite.png">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://i.imgur.com/VCRcgf2.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://i.imgur.com/pXHzSuT.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://i.imgur.com/Hen7iya.png">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://img.icons8.com/ios/452/xcode.png">
                            </div>
                            <div>
                                <img class="w-24" style="filter: contrast(0.01%) brightness(10%)" src="https://cdn.clipart.email/f7b6e038eb20af29a2864eebc3dd7a2b_android-studio-logo-png-picture-378911-android-studio-logo-png_512-512.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/postman-512.png">
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="flex items-center relative pb-5 pt-5 justify-start">
                    
                    <div class="border-r-2 border-black absolute h-full top-2 z-10 ">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        <div class="absolute seccion -ml-8 font-bold italic text-gray-400 top-32">FRONTEND</div>
                    </div>

                    <div class="ml-6 pt-5">
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://www.flaticon.com/svg/static/icons/svg/1216/1216909.svg" alt="">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/scripting-and-programming-languages/512/JQuery_logo-512.png">
                            </div>
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFpfYz4DA8fBtTByR0UPNsMX5I2FbWUrYOjw&usqp=CAU">
                            </div>
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                            <div>
                                <img class="w-24" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSk5CrEfm5Q_4rOst-cvdiTGBeX8XQjuc2Juw&usqp=CAU">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                            <div>
                                <img class="w-24" style="filter: contrast(90%) brightness(50%)" src="https://www.markusantonwolf.com/media/pages/blog/alpine-js/1468511062-1596675049/alpinejs-logo.svg">
                            </div>
                            <div>
                                <img class="w-24" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWS2CD7XCCxERnQJHaAfvsE8HlYoIiORxKlw&usqp=CAU">
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="flex items-center relative pb-5 pt-5 justify-start">
                    
                    <div class="border-r-2 border-black absolute h-full top-2 z-10">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        <div style="top: 80%" class="absolute seccion -ml-8 font-bold italic text-gray-400">DESAROLLO&nbsp;MÓVIL</div>
                        <i class="fas fa-circle -bottom-3 -ml-2 absolute"></i>
                    </div>
                    
                    <div class="ml-6 pt-5">
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                            <div>
                                <img class="w-24" src="https://i.imgur.com/7AaIwV8.png">
                            </div>
                            <div>
                                <img class="w-24" src="data:image/png;base64,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">
                            </div>
                        </div>
                        <div class="flex mb-4 space-x-16">
                            <div>
                                <img class="w-24" src="https://img.icons8.com/ios/452/apple-app-store--v2.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://cdn4.iconfinder.com/data/icons/logos-brands-5/24/firebase-512.png">
                            </div>
                            <div>
                                <img class="w-24" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvFuV7rL4NVvgHYU0IKbiNQx0dneHaguXh2w&usqp=CAU">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="md:w-2/3">
            <h1 class="font-bold italic mb-10">PROYECTOS</h1>

            <div class="relative mt-5 text-left">
                
                <div class="flex items-center relative">
                    <div class="hidden md:block w-20">
                        <div class="font-bold italic">2020</div>
                        <div class="md:flex space-x-1 text-xs">
                            <div>Abr.</div>
                            <div>-</div>
                            <div>Jun.</div>
                        </div>                        
                    </div>
                    
                    <div class="border-r-2 border-black absolute h-full left-1 md:left-20 top-2 z-10">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                    </div>

                    <div class="ml-10">
                        <div class="font-bold">Proyecto 1</div>
                        <div class="italic md:mb-4">Empresa 1</div>
                        <div class="mb-4 mt-2 md:hidden">
                            <div class="font-bold">2020</div>
                            <div class="text-xs">Abril - Junio</div>
                        </div>
                        <div class="mb-10">Fusce auctor gravida dui, ut tristique nisi aliquam quis. Maecenas id ligula ac dui mollis tempor. Sed vitae ex eros. Proin nisl felis, consectetur sed elit sed, vestibulum ultrices nibh.</div>
                    </div>
                </div>



                
                <div class="flex items-center relative">
                    <div class="hidden md:block w-20">
                        <div class="font-bold italic">2020</div>
                        <div class="md:flex space-x-1 text-xs">
                            <div>Jul.</div>
                            <div>-</div>
                            <div>Ago.</div>
                        </div>                        
                    </div>
                    
                    <div class="border-r-2 border-black absolute h-full left-1 md:left-20 top-2 z-10">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                    </div>

                    <div class="ml-10">
                        <div class="font-bold">Proyecto 2</div>
                        <div class="italic md:mb-4">Empresa 2</div>
                        <div class="mb-4 mt-2 md:hidden">
                            <div class="font-bold">2020</div>
                            <div class="text-xs">Julio - Agosto</div>
                        </div>
                        <div class="mb-10">Fusce auctor gravida dui, ut tristique nisi aliquam quis. Maecenas id ligula ac dui mollis tempor. Sed vitae ex eros. Proin nisl felis, consectetur sed elit sed, vestibulum ultrices nibh.</div>
                    </div>
                </div>



                
                <div class="flex items-center relative">
                    <div class="hidden md:block w-20">
                        <div class="font-bold italic">2020</div>
                        <div class="md:flex space-x-1 text-xs">
                            <div>Ago.</div>
                            <div>-</div>
                            <div>Hoy.</div>
                        </div>                        
                    </div>
                    
                    <div class="border-r-2 border-black absolute h-full left-1 md:left-20 top-2 z-10">
                        <i class="fas fa-circle -top-1 -ml-2 absolute"></i>
                        <i class="fas fa-circle bottom-0 -ml-2 absolute"></i>
                    </div>

                    <div class="ml-10">
                        <div class="font-bold">Proyecto 3</div>
                        <div class="italic md:mb-4">Empresa 3</div>
                        <div class="mb-4 mt-2 md:hidden">
                            <div class="font-bold">2020</div>
                            <div class="text-xs">Agosto - Hoy</div>
                        </div>
                        <div class="mb-10">Fusce auctor gravida dui, ut tristique nisi aliquam quis. Maecenas id ligula ac dui mollis tempor. Sed vitae ex eros. Proin nisl felis, consectetur sed elit sed, vestibulum ultrices nibh.</div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</html>
