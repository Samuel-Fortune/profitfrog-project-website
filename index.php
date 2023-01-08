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

    <div class="container mx-auto pt-16">
      <div
        class="w-full md:px-16 flex flex-row place-content-center justify-items-center justify-center place-items-center"
      >
        <h1
          class="w-[69%] flex h-full sm:w-[60%] md:w-full opacity-[2] justify-center  text-[36px] items-center font-[600] font-Montserrat leading-[46px]"
        >
          See Why Small Businesses Choose Profit Frog
        </h1>
      </div>
      <div class="xl:py-5 lg:py-5 md:py-5 sm:py-20 px-16 py-16 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-6">
        <div
          class="w-[80%] xl:w-[70%] lg:w-[70%] md:w-[70%] flex justify-center xl:pb-10 pb-16 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[60%]"
            src="https://profitfrog.imgix.net/img/logo-1_1.svg?auto=format&fit=max&w=375"
            alt="Adidas"
            role="img"
          />
        </div>
        <div
          class="w-[80%] xl:w-[80%] lg:w-[80%] md:w-[80%] flex justify-center xl:pb-10 pb-16 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[80%]"
            src="https://profitfrog.imgix.net/img/logo-2.svg?auto=format&fit=max&w=375"
            alt="Chanel"
            role="img"
          />
        </div>
        <div
          class="w-[80%] xl:w-[70%] lg:w-[70%] md:w-[70%] flex justify-center xl:pb-10 pb-16 pt-4 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[50%]"
            src="https://profitfrog.imgix.net/img/logo-3.svg?auto=format&fit=max&w=375"
            alt="Nike"
            role="img"
          />
        </div>
        <div
          class="w-[80%] xl:w-[80%] lg:w-[80%] md:w-[80%] flex justify-center xl:pb-10 pb-16 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[80%]"
            src="https://profitfrog.imgix.net/img/logo-4.svg?auto=format&fit=max&w=375"
            alt="Toyota"
            role="img"
          />
        </div>
        <div
          class="w-[80%] xl:w-[80%] lg:w-[80%] md:w-[80%] flex justify-center xl:pb-10 pb-16 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[80%]"
            src="https://profitfrog.imgix.net/img/logo-5.svg?auto=format&fit=max&w=375"
            alt="Toyota"
            role="img"
          />
        </div>
        <div
          class="w-[80%] xl:w-[80%] lg:w-[80%] md:w-[80%] flex justify-center xl:pb-10 pb-16 items-center"
        >
          <img
            tabindex="0"
            class="focus:outline-none w-[70%]"
            src="https://profitfrog.imgix.net/img/logo-6.svg?auto=format&fit=max&w=375"
            alt="Toyota"
            role="img"
          />
        </div>
      </div>
    </div>
    <!--Fourth Section-->

    <section class="w-full bg-[#f4fbff] pt-7">
      <div
        class="mx-auto container mt-1 flex flex-col justify-between p-6 sm:flex-col-reverse md:flex-row lg:flex-row"
      >
        <div
          class="sm:w-full flex flex-col-reverse gap-14 sm:flex-col-reverse md:flex-row md:w-full pt-2"
        >
          <span class="w-full flex flex-col pb-10">
            <h1
              class="font-[600] font-Montserrat sm:w-full md:w-full flex sm:justify-start md:justify-end text-[36px] leading-[46px] mb-4 opacity-[2]"
            >
              How Profit Frog Helps Business <br> Owners
            </h1>

            <div
              class="sm:w-full md:w-full md:flex md:flex-row gap-5 pb-2"
            >
              <span>
                <img
                  class="sm:min-h-full sm:min-w-full sm:max-w-full md:min-h-full md:min-w-[94%] md:max-h-full md:max-w-[94%]"
                  src="https://profitfrog.imgix.net/img/small-business-owner-gym-690x391.svg?auto=format&fit=max&w=1380"
                  alt=""
                />

              </span>


              <span>

                <p
                  class="sm:max-w-full md:max-w-[345px] pt-10 flex flex-col justify-between text-[#74757B] text-[16px] leading-[24px] font-Montserrat opacity-70 pb-5"
                >
                  You shouldn’t need an MBA to get a handle on your profitability.
                  Profit Frog gives you a clear, precise view of what’s happening
                  with your business based on real-time information. Unlike other
                  budgeting and forecasting tools, our planning software strips
                  away the clutter and focuses on thing that matters: profits.
                  <div class="flex sm:flex-col md:flex-row w-[50%] gap-3">
                    <span>
                      <button
                        class="text-white bg-lime-500 hover:bg-lime-400 h-16 rounded-xl w-56"
                        type="submit"
                      >
                        Learn About Profit <br />
                        Modeling
                      </button>
                    </span>
                    <span>
                      <button
                        class="text-white bg-lime-500 hover:bg-lime-400 h-16 rounded-xl w-56"
                        type="submit"
                      >
                        Learn About Scenario <br />
                        Planning
                      </button>
                    </span>
                  </div>
                </p>
              </span>
            </div>
          </span>
        </div>
      </div>
    </section>

    <!--Fifth Section-->

    <div class="container w-full mx-auto pt-16 pb-24">
      <div
        class="px-16 flex flex-row flex-wrap place-content-center items-center justify-items-center"
      >
        <h1
          class="sm:w-full md:w-full lg:w-[46%] opacity-[2]  font-Montserratjustify-center place-content-center text-[33px] items-center font-[600] leading-[46px]"
        >
          Profit Management Made
          <strong class="text-lime-400"
            >Easy
            <div>
              <img
                class="absolute left-[60%] sm:left-[71%] md:left-[60%] sm:right-1/2 md:right-0"
                src="	https://profitfrog.com/_next/static/media/underline.fc84d4d85898ee6514c8f07a8662f49d.png"
                alt=""
              />
            </div>
          </strong>
        </h1>
      </div>
    </div>

    <!--sixth section-->
    <section>
      <div class="w-full h-full bg-[#f4fbff]">
        <div
          class="mx-auto container pt-16 pb-20 flex flex-col-reverse p-6 gap-10 sm:flex-col-reverse md:flex-row lg:flex-row"
        >
          <div class="w-full gap-5 flex flex-col">
            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] mb-5 opacity-[2] text-[22px] leading-[30px]"
              >
                Profit Management Made Easy
              </h1>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                Profit Frog gives you a clear, precise view of what’s happening
                with your business based on real-time information. It then
                allows you to project that clarity into the future with profit
                forecasting according to different variables you can adjust
                dynamically.
              </p>
            </span>
          </div>

          <div
            class="w-full h-full flex justify-start sm:justify-start md:justify-end lg:justify-end"
          >
            <img
              class="rounded-2xl w-[95%]"
              src="https://profitfrog.imgix.net/img/adjust-plan-690x391.svg?auto=format&fit=max&w=1920"
              alt=""
            />
          </div>
        </div>

        <!--Targeted Resource Allocation Section-->
        <div
          class="mx-auto container gap-20 pt-16 pb-20 justify-between flex flex-col-reverse p-5 sm:flex-col-reverse md:flex-row-reverse lg:flex-row-reverse"
        >
          <div class="w-[95%] gap-5 flex flex-col">
            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] mb-5 opacity-[2] text-[22px] leading-[30px]"
              >
                Targeted Resource Allocation
              </h1>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                Having a fundamental understanding of what drives your profits
                allows you to know where to allocate resources in the future.
              </p>
            </span>
          </div>

          <div class="w-full h-full flex justify-start">
            <img
              class="rounded-2xl shadow-lg w-[90%]"
              src="https://profitfrog.imgix.net/img/profit-frog-analytics-690x391.svg?auto=format&fit=max&w=1920"
              alt=""
            />
          </div>
        </div>
        <!--Dynamic Scenario Planning Section-->
        <div
          class="mx-auto container pt-16 pb-20 flex gap-10 flex-col p-5 sm:flex-col md:flex-row lg:flex-row"
        >
          <div class="w-[95%] gap-5 flex flex-col">
            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] mb-5 opacity-[2] text-[22px] leading-[30px]"
              >
                Dynamic Scenario Planning
              </h1>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
                Keep your plans alive and accurate. Position your team to reach
                your business goals with confidence born from our dynamic
                scenario planning capabilities.
              </p>
            </span>
          </div>

          <div class="w-full h-full flex sm:justify-start md:justify-end">
            <img
              class="rounded-2xl shadow-lg w-[90%]"
              src="https://profitfrog.imgix.net/img/scenarios-690x391.svg?auto=format&fit=max&w=1920"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>

    <!--Seventh Section-->
    <section class="w-full">
      <div class="pt-16 pb-16">
        <div class="mx-auto w-full place-content-center justify-center flex flex-col place-items-center items-center ">
          <h1 class="text-[36px] font-[600] font-Montserrat leading-[46px] mb-7">Start Your Free Trial Today</h1>
          <div class="w-full place-content-center justify-center flex flex-col place-items-center items-center">

            <p class="text-[#8f8d9e] text-[22px] font-Montserrat opacity-70 font-[600] leading-[33px] ">Get A Better Understanding Of Your Profitability.</p>
            <p class="mb-10">
              <strong class="text-[#3d3c44] font-Montserrat text-[22px] font-[600] leading-[33px]">Start Your Free 14-Day Trial</strong>
              <span class="#8f8d9e text-[22px] opacity-80 font-Montserrat font-[600]"> of Profit Frog.</span></p>
          </div>
          <button class="bg-lime-400 font-[500] min-w-[260px] rounded-lg leading-[45px] text-[16px] text-white justify-center items-center  h-full">Start Your Free Trial Today</button>
        </div>

      </div>


    </section>
    <!--Eighth Section-->
    <section>
      <div class="w-full h-full bg-[#f4fbff] pb-20">
        <div class="mx-auto justify-center place-content-center w-full  pt-16 flex-wrap  ">
          <div class="w-full flex flex-row justify-center items-center place-content-center place-items-center">
            <h1 class="font-Montserrat items-center text-[36px] font-[600] opacity-[2] mb-[50px]">What Profit Frog Customers are Saying</h1>
          </div>
          <div class="mx-auto shadow-xl h-full sm:h-full md:h-[27rem] lg:h-[27rem] w-full gap-10 flex flex-col sm:flex-col md:flex-row lg:flex-row max-w-[75rem] justify-around items-center place-content-center bg-white rounded-2xl overflow-hidden">
            <div class="w-full sm:w-full md:w-[33%] h-full">
              <img class="w-full bg-cover rounded-xl" src="https://profitfrog.imgix.net/img/300x376-home.png?auto=format&fit=max&w=640" alt="">
            </div>
            <div class="max-w-[518px] w-full mx-auto">
              <h3 class="text-[22px] font-[600] font-Montserrat pb-6 opacity-[2]">"Profit Frog not only saved me a ton of time, it gave me the confidence to make the right strategic decisions about my business as we continue to grow."</h3>
              <span class="w-full opacity-70 font-Montserrat text-[18px] text-[#3d3c44]">Zach S. - Small Business Owner</span>
            </div>


          </div>


        </div>

      </div>
    </section>

    <!--Import Data Section-->
    <section>
      <div class="w-full h-full pb-20 mx-auto gap-14 flex justify-center place-content-center py-16 flex-wrap">
        <div class="w-full mx-auto flex flex-row justify-center place-content-center">
          <h1 class="text-[36px] font-[600] opacity-[2] leading-[46px] text-center font-Montserrat">Import Data From QuickBooks or Excel</h1>
        </div>
        <div class="w-full sm:w-full md:max-w-[890px] p-5 lg:max-w-[890px] mx-auto shadow-xl justify-around flex-wrap items-center flex flex-row  place-content-center">
          <span>
            <img src="https://profitfrog.imgix.net/img/redesign_quickbooks%20logo.svg?auto=format&fit=max&w=640" alt="">

          </span>
          <span>
            <img src="https://profitfrog.imgix.net/img/excel-site.svg?auto=format&fit=max&w=640" alt="">
          </span>
        </div>
      </div>

    </section>

    <!--Profit Frog FAQ Section-->
    <section class="w-full font-Montserrat px-5 flex flex-wrap bg-[#f4fbff] place-content-center justify-center mx-auto py-[60px] text-[#3d3c44] box-border">
      <h2 class="w-full font-Montserrat flex  flex-row place-content-center justify-center items-center text-[36px] font-[600] opacity-[2] mb-[50px]">Profit Frog FAQ</h2>
      <!--card1-->
      <div class="bg-white rounded-3xl max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative ">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Does Profit Frog Integrate With Quickbooks?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Yes, Profit Frog integrates with QuickBooks Online (QBO). Easily import your data from QBO and you’ll soon be planning, budgeting, and forecasting in Profit Frog. You’ll be able to generate dynamic forecasts of future financial performance and profitability under different scenarios.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 2-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Does Profit Frog replace Quickbooks?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">No Profit Frog does not replace QuickBooks or your current accounting solution. Think of us as a financial planning add-on that gives you insights and reporting capabilities that online accounting software does not provide.</p>
              <p class="mt-0 mb-4">Essentially, our financial performance management software extends the capabilities of your current online accounting solution.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 3-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Can I change or cancel my Profit Frog plan anytime?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Yes, Profit Frog has no long-term contracts and will allow you to change or cancel your plan at any time.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 4-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">How does Profit Frog onboarding work?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Profit Frog is so easy that you can get set up all by yourself. That said, we do offer a free, one-on-one white glove onboarding service when you sign up for the free trial.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 5-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">What is the best budgeting and forecasting software for small businesses?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Profit Frog is the best forecasting software for small businesses because we eliminate clutter and focus on the metrics that matter most to a small business owner. Specifically, we model profitability under different dynamic conditions.</p>
              <p class="mt-0 mb-4">Profit Frog takes all your actuals and uses them to forecast multiple possible futures that you can manipulate. We call these “profitability models” and they allow you to create a dynamic plan that can be adjusted as conditions change. </p>
              <p class="mt-0 mb-4">From accounts payable to cost of goods sold to operating expenses and other financial statements, we factor all your key business drivers and allow you to manipulate them to envision future scenarios. It’s the ultimate performance management tool.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 6-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">What is financial forecasting software?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Financial forecasting software helps companies visualize the future under different types of conditions. Depending on the forecasting software, companies can model cashflow, costs, and other key metrics based on their financial data and business goals. </p>
              <p class="mt-0 mb-4">Profit Frog allows business owners to model profitability under dynamic conditions. We focus on profitability because profits are what matter to small business owners. </p>
            </div>

          </div>
        </div>
      </div>

      <!--card 7 -->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Does QuickBooks do forecasting?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">If you’re a QuickBooks Premier, Accountant, or Enterprise user, you do have access to some forecasting capabilities. Specifically, an accounting tool such as QuickBooks Online Advanced can help you forecast revenue based on expense tracking and previous performance. </p>
              <p class="mt-0 mb-4">Firstly, business accounting software forecasting is based on past performance. What if you want to forecast based on other variables that have nothing to do with the past? Profit Frog allows you to do just that. </p>
              <p class="mt-0 mb-4">Secondly, QuickBooks forecasts revenue. While revenue is important, profit is more important. Our profit forecasting includes revenue as per the classic business profit formula: profit equals revenue minus expenses. By forecasting profit (revenue and expenses) instead of revenue only, Profit Frog allows for more accurate and actionable
                <a class="text-[#1fabff]" href="https://profitfrog.com/what-is-a-financial-model">financial modeling</a>
              </p>
              <p class="mt-0 mb-4">After all, would you want higher revenue if it meant lower profits? No. Neither would we. Yet such a scenario does happen in business if expenses increase in greater proportion than revenue.</p>
              <p class="mt-0 mb-4">Forecasts from QuickBooks and other expense tracking software are limited in nature because they are based strictly on projecting into the future from current and past financial reports. Profit Frog, in contrast, allows you to manipulate different variables to see into the future. </p>
              <p class="mt-0 mb-4">For example, you can increase or decrease COGS, change the unit price of your product, increase your salesforce, or otherwise instigate hypothetical variations from your actuals. These hypotheticals are called scenarios, and the discipline of forecasting into an uncertain environment is called scenario planning. Scenario planning helps your business be antifragile.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 8-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Is Profit Frog a business budget software?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Profit Frog includes budget processes, along with so much more. Our software solution focuses on helping you maximize profitability by being aware of all the key factors of your business. From <a class="text-[#1fabff]" href="https://profitfrog.com/cost-of-goods-sold">COGS</a> to sales to overhead, you will have an extremely accurate view of present inflows and expenses, and will be able to forecast future profitability. In that sense, we do function as a budget software, because we help you with expense management and visibility. But we go way beyond budget planning.</p>
              <p class="mt-0 mb-4">Where other budgeting tools are static, our budget and forecast processes deliver a dynamic plan that you can consistently update as actual conditions change.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 9 -->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">How do you forecast a P&L?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">You forecast profit and loss by forecasting total sales, forecasting expenses, and subtracting the latter from the former. Profit Frog does this easily for small business owners, and allows them to manipulate different key variables to see how future profits change under different conditions. </p>
              <p class="mt-0 mb-4">With Profit Frog, you don’t need entire finance teams and budget maestros on staff. You just need to follow our easy step-by-step process to generate your own profit forecasts. </p>
            </div>

          </div>
        </div>
      </div>

      <!--card 10-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">What is a 12-month projection?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">A rolling 12-month projection is one of many forecasting methods that looks 12 months into the future. Unlike a calendar year forecast, the 12-month rolling forecast continually adds an additional month to the forecast each time a month ends. Thus, the 12-month projection helps you plan and forecast for the next consecutive 12 months into the future.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 11-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">How do you forecast profit margin?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Profit Frog automatically forecasts your future profit margins dynamically. Here is the formula for forecasting profit margin: </p>
              <ol class="list-decimal pl-11 mb-4">
                <li>forecast profits (revenue minus expenses)</li>
                <li>divide gross revenue by profits</li>
                <li>multiply the number from Step 2 by 100</li>
              </ol>
              <p class="mt-0 mb-4">
                Our profitability management software does the heavy lifting. Not only do we help you forecast your profit margin, but we do so under multiple potential scenarios in a way that can be dynamically altered and updated.
              </p>
            </div>

          </div>
        </div>
      </div>

      <!--card 12-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">How do you forecast profit in Excel?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">Excel forecasting is typically done by specialists in large corporations that have the budget to hire said specialists. We created Profit Frog to spare you (and ourselves) the headache of forecasting in Excel.</p>
              <p class="mt-0 mb-4">If you must know, however, the basics of how to create a Microsoft Excel forecast can be found in <a class="text-[#1fabff]" href="https://support.microsoft.com/en-us/office/create-a-forecast-in-excel-for-windows-22c500da-6da7-45e5-bfdc-60a7062329fd">this article</a>.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 13-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Is Profit Frog a demand forecasting software?</h3>
          </div>
          <div class=" cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">We are not exactly a demand forecasting solution; we are something even better. You can use Profit Frog to model profitability by adjusting expected demand, expenses, sales volume, and much more. This is known as adaptive planning, and it is the next step beyond demand forecasting.</p>
            </div>

          </div>
        </div>
      </div>

      <!--card 14-->
      <div class="bg-white rounded-3xl mt-5 max-w-[1050px] w-full mx-auto relative overflow-hidden select-none shadow-2xl fag-menu">
        <div class="relative">
          <div class="p-4 flex items-center">
            <div class="relative">
              <button class="cursor-pointer bg-inherit flex justify-center items-center " style="padding: 0!important; width: 2.25rem; height: 2.25rem;" type="button">
                <svg class="w-6 h-6 duration-200 hover:duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </button>
            </div>

            <h3 class="font-Montserrat font-[600] text-[16px] leading-[19px] mb-0">Is Profit Frog a business management software?</h3>
          </div>
          <div class="cursor-pointer hidden overflow-hidden menu-dropdown">
            <div class="" style="border-top: 1px solid #b0adc4; padding: 20px 4rem 40px; opacity: .7;">
              <p class="mt-0 mb-4">We are not a complete project management or business management platform, which most small and medium sized businesses don’t need anyway. Rather, we are a financial management software focused on profit optimization. From your supply chain through your sales cycle, we help you track expenses and model which business decisions will bring greater profits.</p>
              <p class="mt-0 mb-4">Essentially, we help you find the path of least resistance to make and keep more money. This helps you save time, have less stress, and be more productive. These are the end goals of every corporate performance management software program, anyway, right?</p>
            </div>

          </div>
        </div>
      </div>

    </section>

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
