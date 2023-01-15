<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/input.css" />
    <!--Stylesheet-->
    <link href="css/output.css" rel="stylesheet" />

    <!-- Favicon Images -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon/favicon-16x16.png"
    />

    <!-- Glider Js -->
    <script src="https://unpkg.com/@glidejs/glide"></script>

    <!--Jquery Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>ProfitFrog</title>

    <style>
      .glide {
        position: relative;
        width: 100%;
        box-sizing: border-box;
      }
      .glide * {
        box-sizing: inherit;
      }
      .glide__track {
        overflow: hidden;
      }
      .glide__slides {
        position: relative;
        width: 100%;
        list-style: none;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        touch-action: pan-Y;
        overflow: hidden;
        padding: 0;
        white-space: nowrap;
        display: flex;
        flex-wrap: nowrap;
        will-change: transform;
      }
      .glide__slides--dragging {
        user-select: none;
      }
      .glide__slide {
        width: 100%;
        height: 100%;
        flex-shrink: 0;
        white-space: normal;
        user-select: none;
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: transparent;
      }
      .glide__slide a {
        user-select: none;
        -webkit-user-drag: none;
        -moz-user-select: none;
        -ms-user-select: none;
      }
      .glide__arrows {
        -webkit-touch-callout: none;
        user-select: none;
      }
      .glide__bullets {
        -webkit-touch-callout: none;
        user-select: none;
      }
      .glide--rtl {
        direction: rtl;
      }
    </style>
  </head>
  <body
    class="font-Montserrat text-[#3d3c44]"
    style="background-color: #f9f9f9"
  >
    <!--Main Nav Section-->
    <section class="w-full">
      <header
        class="shadow-md fixed mx-auto top-0 z-50 w-full text-larger items-center flex flex-row align-center bg-white border-b border-gray-300 py-0"
      >
        <!-- Logo -->
        <div class="flex flex-row justify-between gap-12 w-full">
          <a
            href="./index.php"
            class="py-1 pl-10 w-[15%] flex flex-row justify-end"
          >
            <img
              src="./images/profitfrog-logo.svg"
              height="70px"
              width="90px"
              alt="Logo"
            />
          </a>

          <div class="flex flex-row w-full">
            <nav class="p-0 m-0 justify-start w-[78%] flex items-start">
              <ul class="flex flex-row gap-10 items-center">
                <li class="group">
                  <a
                    class="font-semibold font-Montserrat py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active"
                    href="./profitability Modeling.php"
                    >Profitability Modeling</a
                  >
                </li>
                <li class="group">
                  <a
                    class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer border-active hover:border-active"
                    href="./scenario-planning.php"
                    >Scenario Planning</a
                  >
                </li>
                <li class="group">
                  <a
                    class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active"
                    href="./pricing.php"
                    >Pricing</a
                  >
                </li>

                <li class="group relative">
                  <span
                    class="font-semibold flex items-center align-center gap-1 py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen group-hover:hover:text-customGreen cursor-pointer hover:border-active group-hover:border-active"
                    href="#"
                  >
                    <span>Info</span>

                    <span
                      class="group-hover:rotate-90 stroke:bg-gray-600 transition-all duration-200"
                    >
                      <svg
                        class="w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"
                        ></path>
                      </svg>
                    </span>
                  </span>

                  <div
                    class="absolute hidden h-max group-hover:flex bg-white rounded shadow-lg border border-gray-200 left-0 p-0 w-max max-w-[200px]"
                  >
                    <ul class="flex flex-col gap-3">
                      <li
                        class="font-medium border-b-[1px] transition-all duration-200 hover:bg-gray-200"
                      >
                        <a class="px-6 py-2 relative block" href="./blog.php"
                          >Blog</a
                        >
                      </li>
                      <li
                        class="font-medium transition-all duration-200 hover:bg-gray-200"
                      >
                        <a
                          class="px-6 py-2 relative block"
                          href="./about-us.php"
                          >About Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>

            <div
              class="font-semibold flex flex-row gap-4 items-center justify-start"
              style="width: 20%"
            >
              <a class="text-gray-700 hover:text-customGreen" href="./login.php"
                >Login</a
              >
              <a
                class="bg-lime-500 hover:bg-lime-400 transition-all duration-200 hover:duration-200 p-2 px-5 rounded-lg text-white"
                href="./signup.php"
                >Signup</a
              >
            </div>
          </div>
        </div>
      </header>
    </section>

    <!--Main body section-->
    <section class="mt-[84px]">
      <div
        class="bg-[#f4fbff] w-full"
        style="padding: 0 20px 50px; overflow-x: hidden"
      >
        <section class=" mx-auto text-center px-20 pt-5">
          <span class="flex m-auto">
            <div class="">
              <a class="underline text-[#132234]" href="./index.php">Main</a>
              <span>/</span>
            </div>
            <div>
              <a
                class="text-[#132234]"
                style="text-decoration: none; pointer-events: none"
                href="/pricing.php"
                >Scenario Pricing</a
              >
            </div>
          </span>

        </section>
        <!---->
        <div
          class="mx-auto container mt-16 pb-20 flex flex-col p-6 sm:flex-col md:flex-row lg:flex-row"
        >
          <div class="w-full sm:w-full md:w-[95%] gap-5 flex flex-col">
            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] opacity-[2] text-[48px] leading-[67px]"
              >
              Scenario Planning Software for Small Businesses
              </h1>
            </span>
            <span>
              <p
                class="text-[#75767C] font-[400] opacity-70 font-Montserrat sm:max-w-full md:max-w-[365px]"
              >
              Scenario planning empowers business owners to identify outcomes and impacts, and to evaluate decisions based on positive and negative possibilities. This process is integral to the success of a small business. By visualizing risks and opportunities, and
                <span
                  class="text-blue-300 cursor-pointer hover:border-b-2 hover:border-blue-300"
                >
                  model profitability</span
                >
                accordingly, you can become proactive and steer toward desired outcomes.
              </p>
            </span>

            <span class="flex">
              <p
                class="font-Montserrat text-[#3d3c44] opacity-[2] max-w-[331px] font-[500] text-[22px] leading-[33px]"
              >
              No credit card required
              </p>
            </span>
            <div class="flex ">
              <div class="flex flex-col mr-[15px] max-w-[230px]">
                <button class="h-[44px] mb-[12px] image-hover cursor-pointer bg-[#84c225] text-white inline-flex justify-center font-[500] rounded-lg min-w-[120px] transition-all text-[16px]  hover:bg-lime-200 hover:transition-all" style="padding: 10px 30px;">Get Started</button>

              </div>
            </div>
          </div>
          <div class="w-full h-full flex justify-end">
            <video
              controls
              class="w-full sm:w-full md:w-[95%] h-[70%] rounded-xl shadow-xl"
              src="images/homepage-animation-1920x1080.mp4"
            ></video>
          </div>
      </div>
    </section>

    <!---->
    <section class="w-full" style="padding: 0 0 10px; color: #3d3c44;">
      <div class="flex flex-row container mx-auto justify-between max-w-[1170px] items-start " style="padding: 50px 0;">
        <div class="w-full max-w-[550px] h-full max-h-[390px] overflow-hidden rounded-[20px] shadow-lg">
          <div class="m-0 overflow-hidden">
            <div class="pt-[56%]"></div>
            <img style="visibility: inherit; inset: 0px; padding: 0px; border: none; margin: auto; width: 0px; min-height: 100%; min-width: 100%; max-height: 100%; max-width: 100%;" src="./images/interactive-timeline-and-dashboard-690x391.svg" alt="">
          </div>
        </div>
        <div class="flex flex-col justify-between items-start w-[550px] h-full">
          <div class="mb-[26px] flex flex-col gap-5">

            
            <h2 class="text-[24px] leading-[33.8px] mb-[20px]">What is Scenario Planning?</h2>
           
        
  
            <p>
              <em>
                “The need for efficient strategic thinking is most obvious in times of accelerated change when the reaction time of the organization becomes crucial to survival and growth.”
                </em>
            </p>

            <p>—Kees van der Heijden, Scenarios: The Art of Strategic Conversation</p>
  
  
            <p>Scenario planning is a type of thinking or computer modeling that allows business owners, project managers, and other decision makers to peer into the future and make better forecasts. It involves <a class="text-blue-300" href="https://profitfrog.com/what-is-a-financial-model">creating a financial model</a> based on a potential future.</p>
  
            <p>The scenario process involves asking the following two questions.</p>
            <ol>
              <li>What could potentially occur? This is the scenario itself.</li>
              <li>What would be the impact on my business if it did occur? This often involves looking at “best case,” “most likely,” and “worst case” outcomes.</li>
            </ol>
            <p>Major business decisions can be scary. Dynamic scenario planning helps you sort a great opportunity from a pitfall. With Profit Frog, you can steer your business toward growth and away from getting mired down.</p>
            <p>Our scenario planning software lets you model a range of possible outcomes and impacts. Then you can steer your company toward best-case scenarios while preparing for worst-case ones.</p>
            <ol>
              <li>Learn where to allocate your resources and when to back down from an investment</li>
              <li>Be strategically and financially prepared for a worst-case scenario and mitigate its potential impact</li>
              <li>Identify potential risk and turn it into gain</li>
              <li>Recognize and seize amazing opportunities</li>
              <li>Gain confidence in your decision-making skills by preparing for things you can’t control</li>
              <li>Be ready for disruptive change and take advantage of it rather than being blindsided by it</li>
              <li>Have your business strategy be proactive rather than reactive</li>
            </ol>
          </div>
          <div class="flex ">
            <div class="flex flex-col mr-[15px] max-w-[230px]">
              <button class="h-[44px] mb-[12px] image-hover cursor-pointer bg-[#84c225] text-white inline-flex justify-center font-[500] rounded-lg min-w-[120px] transition-all text-[16px]  hover:bg-lime-200 hover:transition-all" style="padding: 10px 30px;">Try For Free</button>

              <span>No Credit card required</span>

            </div>
          </div>
        </div>
      </div>
    </section>



    <!--Footer-->

    <footer>
      <section class="p-largerScreenPadding py-3 bg-white">
        <div
          class="place-content-center place-items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"
        >
          <div class="flex flex-col gap-2">
            <a href="./contact.html">Contact Us</a>
            <a href="./privacy.html">Privacy Policy</a>
          </div>

          <div>
            <span class="font-semibold text-lg"> &copy; Profit Frog </span>

            <span
              class="relative flex gap-1 align-middle items-center hover:bg-gray-300 bg-transparent rounded-2xl group transition-all duration-200 cursor-pointer"
            >
              <img src="./images/linkedin.svg" alt="Likedin Logo" />

              <span
                class="p-1 px-3 transition-all duration-200 group-hover:duration-200"
                >LinkedIn</span
              >
            </span>
          </div>

          <div class="relative">
            <div class="group p-0 m-0">
              <span class="font-semibold text-gray-700">Recources</span>

              <div
                class="absolute hidden h-max group-hover:flex bg-white rounded shadow-lg border border-gray-200 p-0 w-max max-w-[200px] -left-10"
                style="bottom: 30px"
              >
                <ul class="flex flex-col gap-3 text-sm">
                  <li
                    class="font-medium transition-all duration-200 hover:bg-gray-200"
                  >
                    <a
                      class="px-6 py-2 relative block"
                      href="./understanding-cogs.html"
                      >Understanding COGS</a
                    >
                  </li>
                  <li
                    class="font-medium transition-all duration-200 hover:bg-gray-200"
                  >
                    <a
                      class="px-6 py-2 relative block"
                      href="./dynamic-planning.html"
                      >What is Dynamic Planing</a
                    >
                  </li>
                  <li
                    class="font-medium transition-all duration-200 hover:bg-gray-200"
                  >
                    <a
                      class="px-6 py-2 relative block"
                      href="./dynamic-planning.html"
                      >What is Financial Model?</a
                    >
                  </li>
                  <li
                    class="font-medium transition-all duration-200 hover:bg-gray-200"
                  >
                    <a
                      class="px-6 py-2 relative block"
                      href="./dynamic-planning.html"
                      >Understanding FP&A</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>

    <script src="./js/script.js"></script>
  </body>
</html>
