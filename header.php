<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('darkMode') || 'false' }"
      x-init="$watch('darkMode', (val) => localStorage.setItem('darkMode', val))"
      :class="{ 'dark': darkMode === 'true' }" x-cloak
      <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<header>

<!--nav here-->

<nav class="bg-white dark:bg-gray-700 border-b border-gray-200 dark:border-gray-700 grid place-items-center py-8">
  <div class="w-full text-gray-700">

    <div x-data="{ open: false }" class="flex flex-col mx-auto ax-w-screen lg:flex-row">
      
    <a href="/" class="ml-4 lg:ml-2 xl:ml-4 text-lg font-semibold tracking-widest text-gray-900 uppercase dark:text-white focus:outline-none focus:shadow-outline">
              Website Name
              <span class="sr-only">Home</span>
      </a>

      <div style="place-content:flex-end; margin-top:-36px;" class="flex flex-row items-center justify-between px-4 py-2">

          <button class="mr-8 rounded-lg md:mr-12 lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg class="light-svg h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 512.001 512.001" x-show="open" style="display: none;">
              <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
            </svg>
            <svg class="dark-svg h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="#000" viewBox="0 0 512.001 512.001" x-show="open" style="display: none;">
              <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
            </svg>
             <!--Todo : exclude the (svg) oposite color on dark / light modes-->
            <span class="sr-only" x-show="open" style="display: none;">
              Close Menu
            </span><!-- /.sr-only -->

            <svg class="light-svg h-6 w-6" fill="#FFF" width="40" height="40" viewBox="0 0 100 80" x-show="!open">
              <path d="M0 0h100v10H0zm0 30h100v10H0zm0 30h100v10H0z"></path>
            </svg>
            <svg class="dark-svg h-6 w-6" fill="#000" width="40" height="40" viewBox="0 0 100 80" x-show="!open">
              <path d="M0 0h100v10H0zm0 30h100v10H0zm0 30h100v10H0z"></path>
            </svg>
            <!--Todo : exclude the (svg) oposite color on dark / light modes-->
            <span class="sr-only" x-show="!open">
              Open Menu
            </span><!-- /.sr-only -->
          </button>
        </div>
        

      <nav class="flex-col flex-grow hidden h-screen pb-4 lg:pb-0 lg:flex lg:justify-start lg:flex-row lg:h-auto" aria-label="Main Navigation" :class="{'flex': open, 'hidden': !open}">
      
        <ul class="flex flex-col flex-wrap pl-0 mt-4 lg:flex-row lg:-mt-2 dark:text-white">
          <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2" x-data="{isOpen:false }" @mouseleave="isOpen = false">
              <a href="#" class="py-2 px-4 group-hover:text-blue-500" @click="isOpen = !isOpen" x-on:click.prevent="" :class="{'' : isOpen}">

                  Page 1 
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000" width="16" height="16" class="hidden dark-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
                <!--Todo : exclude the oposite color on dark / light modes-->
                <svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" width="16" height="16" class="hidden light-svg lg:inline-block relative top-0 right-0 transform rotate-90" viewBox="0 0 16 16"> 
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>                 
              </a>    
                                
                <ul class="m-4" aria-label="submenu" x-show="isOpen" x-transition.duration.400ms @click.away="isOpen = false" style="display: none;">
                  
                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                     <a href="#" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">
                      
                    Page 1
                    
                    </a>
                  </li><!-- /.p-3 bg-green-200 -->
                   
                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                    <a href="#" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">

                    Sub Page 1
                    
                    </a>
                  </li>

                  <li class="group relative border-l rounded-l-sm border-blue-200 hover:border-blue-500 pl-2 my-2">
                    <a href="#" class="py-2 text-gray-800 bg-transparent hover:text-blue-500 lg:text-sm">

                    Sub Page 2
                    
                    </a>
                  </li>
                       
                </ul>
                  </li>
                      
                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">

                    <a href="#" class="py-2 px-4 group-hover:text-blue-500">

                      Page 2
                    
                    </a>
  
                  </li>

                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">

                    <a href="#" class="py-2 px-4 group-hover:text-blue-500">

                      Page 3
                    
                    </a>
  
                  </li>

                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">

                    <a href="#" class="py-2 px-4 group-hover:text-blue-500">

                      Page 4
                    
                    </a>
  
                  </li>
                      
                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">
                    <a href="#" class="py-2 px-4 group-hover:text-blue-500">

                      Page 5
              
                    </a>
                  </li>

                  <li class="group relative block lg:px-0 xl:px-0 mr-1 py-2">
                    <a href="<?php echo esc_url(site_url('/search')); ?>" class=" py-2 px-4 group-hover:text-blue-500 search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </li>

                </ul>
                
                <div class="mt-8 lg:mr-2 xl:mr-4 lg:mt-0 lg:inline-grid lg:grid-cols-3 lg:absolute lg:right-0">

                <?php if(is_user_logged_in()) { ?>

                    <button>
                      <a href="<?php echo esc_url(site_url('/dashboard')); ?>" class="bg-orange-400 text-white px-4 py-2 rounded mr-4 ml-4 lg:mr-0 lg:ml-0">
                        Dashboard
                      </a>
                    </button>
                  
                    <button>
                      <a href="<?php echo wp_logout_url();  ?>" class="bg-red-400 text-white px-4 py-2 rounded">
                        Log Out
                      </a>
                    </button>
                  
                  
                <?php } else { ?>
                  
                    <button>
                      <a href="<?php echo wp_login_url(); ?>" class="bg-orange-400 text-white justify-right px-4 py-2 rounded mr-4 ml-4 lg:mr-0 lg:ml-0">
                        Login
                      </a>
                    </button>
                   
                  
                    <button>
                      <a href="<?php echo wp_registration_url(); ?>" class="bg-red-400 text-white justify-right px-4 py-2 rounded">
                        Sign Up
                      </a>
                    </button>
                   
                <?php } ?>

                <!-- darkMode / lightMode Toggle -->
                <button type="button" @click="darkMode = (darkMode === 'true' ? 'false' : 'true')" class="rounded hover:shadow p-1 border-gray-500 border bg-black text-white dark:text-black dark:bg-white mr-4 ml-4 lg:mr-0 lg:ml-0">
                  <span x-show="darkMode === 'true'">Light Mode</span>
                  <span x-show="darkMode === 'false'">Dark Mode</span>
                </button>
        </div>
      
    </nav>
    </nav>
      
    </div>
    </div>              

        <!--end nav-->
</header>
  