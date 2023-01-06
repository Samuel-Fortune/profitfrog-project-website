<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/input.css">
    <!--Stylesheet-->
    <link href="css/output.css" rel="stylesheet" />

    <!-- Favicon Images -->
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">

    <!-- Glider Js -->
    <script src="https://unpkg.com/@glidejs/glide"></script>

    <!--Jquery Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>ProfitFrog</title>

    <style>
      .glide{position:relative;width:100%;box-sizing:border-box}.glide *{box-sizing:inherit}.glide__track{overflow:hidden}.glide__slides{position:relative;width:100%;list-style:none;backface-visibility:hidden;transform-style:preserve-3d;touch-action:pan-Y;overflow:hidden;padding:0;white-space:nowrap;display:flex;flex-wrap:nowrap;will-change:transform}.glide__slides--dragging{user-select:none}.glide__slide{width:100%;height:100%;flex-shrink:0;white-space:normal;user-select:none;-webkit-touch-callout:none;-webkit-tap-highlight-color:transparent}.glide__slide a{user-select:none;-webkit-user-drag:none;-moz-user-select:none;-ms-user-select:none}.glide__arrows{-webkit-touch-callout:none;user-select:none}.glide__bullets{-webkit-touch-callout:none;user-select:none}.glide--rtl{direction:rtl}

      </style>
  </head>
  <body class="font-Montserrat text-[#3d3c44]">
    <!--Main Nav Section-->
    <section class="w-full">
      <header class="shadow-md fixed mx-auto top-0 z-50 w-full text-larger items-center flex flex-row align-center bg-white border-b border-gray-300 py-0 ">
         <!-- Logo -->
         <div class="flex flex-row justify-between gap-12 w-full">
           <a href="./index.php" class="py-1 pl-10 w-[15%] flex flex-row justify-end">
               <img src="./images/profitfrog-logo.svg" height="70px" width="90px" alt="Logo">
           </a>

           <div class="flex flex-row w-full">
               <nav class="p-0 m-0 justify-start w-[78%] flex items-start">
                   <ul class="flex flex-row gap-10 items-center">
                       <li class="group ">
                           <a class="font-semibold font-Montserrat py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active" href="./profitability Modeling.php">Profitability Modeling</a>
                       </li>
                       <li class="group ">
                           <a class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active" href="./scenario-planning.php">Scenario Planning</a>
                       </li>
                       <li class="group ">
                           <a class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active" href="./pricing.php">Pricing</a>
                       </li>

                       <li class="group relative">
                           <span class="font-semibold flex items-center align-center gap-1 py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen group-hover:hover:text-customGreen cursor-pointer hover:border-active group-hover:border-active" href="#">
                               <span>Info</span>

                               <span class="group-hover:rotate-90 stroke:bg-gray-600 transition-all duration-200">
                                   <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                               </span>
                           </span>

                           <div class="absolute hidden h-max group-hover:flex bg-white rounded shadow-lg border border-gray-200 left-0 p-0 w-max max-w-[200px]">
                               <ul class="flex flex-col gap-3">
                                   <li class="font-medium border-b-[1px] transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./blog.php">Blog</a></li>
                                   <li class="font-medium transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./about-us.php">About Us</a></li>
                               </ul>
                           </div>
                       </li>
                   </ul>
               </nav>

               <div class="font-semibold flex flex-row gap-4 items-center justify-start" style="width: 20%;">
                   <a class="text-gray-700 hover:text-customGreen" href="./login.php">Login</a>
                   <a class="bg-lime-500 hover:bg-lime-400 transition-all duration-200 hover:duration-200 p-2 px-5 rounded-lg text-white" href="./signup.php">Signup</a>
               </div>
           </div>

         </div>
     </header>

    </section>

    <!--Main body section-->
    <section>
      <div class="w-full h-full bg-[#f4fbff]">
        <div
          class="mx-auto container mt-20 pt-20 pb-20 flex flex-col p-6 sm:flex-col md:flex-row lg:flex-row"
        >
          <div class="w-full sm:w-full md:w-[95%] gap-5 flex flex-col">
            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] opacity-[2] text-[48px] leading-[67px]"
              >
                Budgeting and Forecasting Software for Small Businesses
              </h1>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                Don’t let your small business flounder in uncertainty. With our
                small business forecasting software, you can easily
                <span
                  class="text-blue-300 cursor-pointer hover:border-b-2 hover:border-blue-300"
                >
                  model future profitability</span
                >
                and steer your business in the best possible direction.
              </p>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                By
                <span
                  class="text-blue-300 cursor-pointer hover:border-b-2 hover:border-blue-300"
                  >analyzing different potential scenarios</span
                >, you will create a dynamic business plan that you can adjust
                as conditions change. We help you create financial forecasts
                that are easy, understandable, and actionable.
              </p>
            </span>
            <span class="flex flex-col gap-5">
              <h1
                class="font-Montserrat text-[#3d3c44] opacity-[2] font-[600] text-[24px] leading-[33px]"
              >
                Adaptive Planning to Keep You On Track
              </h1>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                By harnessing the power of
                <span
                  class="text-blue-300  cursor-pointer hover:border-b-2 hover:border-blue-300"
                  >dynamic planning</span
                >, you will free yourself from guessing…and from being locked
                into static business plans that don’t work.
              </p>
            </span>
          </div>
          <div class="w-full h-full flex justify-end">
            <video
              controls
              class="w-full sm:w-full md:w-[95%] h-[70%] rounded-xl shadow-xl"
              src="images/homepage-animation-1920x1080.mp4"
            ></video>
          </div>
        </div>
        <!--Second Section-->

        <section>
          <div
            class="mx-auto container gap-20 mt-20 flex flex-col p-5 pt-3 sm:flex-col md:flex-row lg:flex-row"
          >
            <div class="w-full sm:w-full md:w-[47%]">
              <img
                class="rounded-2xl shadow-xl w-full"
                src="https://profitfrog.imgix.net/img/dynamic-planning-690x391.svg?auto=format&fit=max&w=1920"
                alt=""
              />
            </div>
            <div class="w-full sm:w-full md:w-1/2 flex flex-col gap-5">
              <h1 class="font-bold font-Montserrat text-[24px] leading-[33px] opacity-[2]">
                Go From Stressful Spreadsheets To <br />
                Successful Planning
              </h1>
              <p
                class="sm:w-full font-Montserrat md:max-w-[340px] text-[#74757B] text-[16px] leading-[24px] opacity-70 pb-5"
              >
                Excel spreadsheets are too complex for the average small
                business owner. We let you easily build financial forecasts to
                make calculated and informed business decisions.
              </p>
              <div class="flex flex-col w-52 gap-2">
                <button
                  class="text-white bg-lime-500 hover:bg-lime-400 h-12 rounded-xl"
                  w
                  type="submit"
                >
                  Sign Up For Free
                </button>
                <span>
                  <p class="text-[#74757B] p-1">No Credit Card Required</p>
                </span>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!--Sponsors Section-->



    <!--Footer-->

    <footer>
      <section class="p-largerScreenPadding py-3">
          <div class="place-content-center place-items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
              <div class="flex flex-col gap-2">
                  <a href="./contact.html">Contact Us</a>
                  <a href="./privacy.html">Privacy Policy</a>
              </div>

              <div>
                  <span
                      class="font-semibold text-lg">
                      &copy; Profit Frog
                  </span>

                  <span
                      class="relative flex gap-1 align-middle items-center hover:bg-gray-300 bg-transparent rounded-2xl group transition-all duration-200 cursor-pointer">
                      <img src="./images/linkedin.svg" alt="Likedin Logo">

                      <span class="p-1 px-3 transition-all duration-200 group-hover:duration-200">LinkedIn</span>
                  </span>
              </div>


              <div class="relative">
                  <div class="group p-0 m-0">
                      <span class="font-semibold text-gray-700">Recources</span>

                      <div
                              class="absolute hidden h-max group-hover:flex bg-white rounded shadow-lg border border-gray-200  p-0 w-max max-w-[200px] -left-10"
                              style="bottom: 30px;"
                      >
                          <ul class="flex flex-col gap-3 text-sm">
                              <li class="font-medium transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./understanding-cogs.html">Understanding COGS</a></li>
                              <li class="font-medium transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./dynamic-planning.html">What is Dynamic Planing</a></li>
                                <li class="font-medium transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./dynamic-planning.html">What is Financial Model?</a></li>
                                <li class="font-medium transition-all duration-200 hover:bg-gray-200"><a class=" px-6 py-2 relative block" href="./dynamic-planning.html">Understanding FP&A</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </footer>

    <script src="css/script.js"></script>
  </body>
</html>
