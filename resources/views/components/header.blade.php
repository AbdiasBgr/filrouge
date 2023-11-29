   <nav class="h-max w-full max-w-full rounded-none  border-gray/80 bg-color-primary bg-opacity-80 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4  ">
       <div>
           <div class="container mx-auto flex items-center justify-between text-white-900 font-bold">
               <a href="/" class="mr-4 block cursor-pointer py-1.5 font-sans text-sm font-normal leading-normal text-inherit antialiased">
                   <img src="/images/logo2.png" alt="Logo du site" class="w-10 h-8">
               </a>
               <ul class="hidden items-center gap-6 lg:flex">
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#accueil">
                           Accueil
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#services">
                           Nos Services
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#temoignages">
                           Témoignages
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#offres">
                           Offres
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#blog">
                           Blog
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#contact">
                           Contact
                       </a>
                   </li>
                   <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                       <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#faq">
                           Faq
                       </a>
                   </li>
               </ul>
               <button class="btn"> <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Connexion</a></button>
               <button class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" data-collapse-target="navbar">
                   <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                       </svg>
                   </span>
               </button>
           </div>
           <div class="block h-0 w-full basis-full overflow-hidden text-blue-gray-900 transition-all duration-300 ease-in lg:hidden" data-collapse="navbar">
               <div class="container mx-auto pb-2">
                   <ul class="mt-2 mb-4 flex flex-col gap-2">
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#accueil">
                               Accueil
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#services">
                               Nos Services
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#temoignages">
                               Témoignages
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#offres">
                               Offres
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#blog">
                               Blog
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#contact">
                               Contact
                           </a>
                       </li>
                       <li class="block p-1 text-sm font-bold leading-normal text-inherit antialiased">
                           <a class="flex items-center hover:text-color-secondary ease-in duration-200" href="#faq">
                               Faq
                           </a>
                       </li>
                   </ul>
                   <button class="btn text-color-white"> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Connexion</a></button>
               </div>
           </div>
       </div>
   </nav>