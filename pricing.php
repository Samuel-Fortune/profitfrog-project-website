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
                    class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer hover:border-active"
                    href="./scenario-planning.php"
                    >Scenario Planning</a
                  >
                </li>
                <li class="group">
                  <a
                    class="font-semibold py-7 border-b-4 border-transparent transiton-all duration-200 rounded-tl-sm rounded-tr-md hover:text-customGreen cursor-pointer border-active hover:border-active"
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
        <section class=" m-auto text-center px-20 pt-5">
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
                >Pricing</a
              >
            </div>
          </span>
          <h1 class="text-[44px] font-[700] max-w-[672px] text-center m-auto">
            Profit Frog Pricing Plans
          </h1>
        </section>
        <!--Pricing Card-->
        <section
          class="max-w-[1170px] w-full flex justify-between"
          style="margin: 50px auto"
        >
          <div
            class="bg-white shadow-xl"
            style="
              width: calc(100% / 2 - 24px);
              padding: 24px;
              text-align: center;
              border-radius: 20px;
            "
          >
            <div class="flex items-center justify-center min-h-[62px] mb-6">
              <h3
                class="text-[#84c225] text-[22px] font-[600] leading-[30.8px] mb-0"
              >
                What's Your Current Monthly Revenue?
              </h3>
            </div>
            <div class="font-[600] text-[48px] leading-[130%] mb-6">$0</div>
            <div>
              <input
                class="w-full appearance-none rounded-lg bg-[#D6D9DD] overflow-visible"
                type="range"
                value="0"
                class
                min="0"
                max="50000"
                step="1000"
              />
            </div>
          </div>
          <div
            class="shadow-xl bg-white"
            style="
              width: calc(100% / 2 - 24px);
              padding: 24px;
              text-align: center;
              border-radius: 20px;
            "
          >
            <div
              class="flex items-center justify-center min-h-[62px] mb-[24px]"
            >
              <h3
                class="font-[600] text-[22px] leading-[30.8px] mb-0"
                style="
                  background: rgba(132, 194, 37, 0.16);
                  border-radius: 32px;
                  padding: 8px 32px;
                  color: #84c225;
                "
              >
                Small Business
              </h3>
            </div>
            <div class="font-[600] text-[48px] leading-[130%] mb-6">
              $40
              <span
                class="relative -top-2 text-[16px] leading-6 font-[400] text-[#3d3c44] opacity-[.7]"
                >/ month</span
              >
            </div>
            <div
              class="text-[12px] font-[400] leading-[150%] text-[#3d3c44] opacity-[.7] mb-6"
            >
              You shouldn’t need an MBA to get a handle on your profitability.
              Profit Frog gives you a clear, precise view of what’s happening
              with your business based on real-time information.
            </div>
            <button
              class="cursor-pointer bg-[#84c225] text-white inline-flex justify-center items-center font-[500] rounded-lg min-w-[120px] transition-all text-[16px]"
              style="padding: 10px 30px"
            >
              Sign Up For Free
            </button>
          </div>
        </section>
      </div>
    </section>

    <!---->
    <section class="text-[#3d3c44]" style="padding: 60px 0">
      <div>
        <h2 class="text-[36px] font-[600] leading-[50.4px] text-center">
          Select your business's monthly gross revenue. No revenue? No worries -
          no charge!
        </h2>
      </div>
    </section>

    <!---->
    <section
      style="
        background-color: rgb(244, 251, 255);
        padding: 10px 0;
        color: #3d3c44;
      "
    >
      <div
        class="flex flex-row-reverse max-w-[1170px] flex-wrap justify-between items-start m-auto"
        style="padding: 50px 0"
      >
        <div
          class="shadow-xl"
          style="
            width: 100%;
            max-width: 550px;
            height: 100%;
            max-height: 390px;
            overflow: hidden;
            border-radius: 20px;
          "
        >
          <div class="relative overflow-hidden m-0">
            <div class="pt-[56.6667%] box-border"></div>
            <img
              style="
                visibility: inherit;
                position: absolute;
                inset: 0px;
                padding: 0px;
                border: none;
                margin: auto;
                display: block;
                width: 0px;
                height: 0px;
                min-width: 100%;
                max-width: 100%;
                min-height: 100%;
                max-height: 100%;
              "
              src="./images/profit-frog-pricing-for-every-stage-of-small-business-growth-690-391.svg"
              alt=""
            />
          </div>
        </div>
        <div class="flex flex-col justify-between items-start w-[550px] h-full">
          <div class="mb-0">
            <h3
              class="text-[22px] font-[600] leading-[30.8px] max-w-[410px] mb-5"
            >
              All features included in every pricing tier.
            </h3>
            <p
              class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] opacity-[.7]"
            >
              Our
              <a class="text-blue-300" href="https://profitfrog.com"
                >small business forecasting software</a
              >
              was designed to grow with you and is priced to fit your budget.
            </p>
            <p
              class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] opacity-[.7]"
            >
              There are no contracts, no upsells, and no risks. Just great
              software for great companies. All features are included in every
              plan.
            </p>
            <p
              class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] opacity-[.7]"
            >
              With Profit Frog, you can start using our full
              <a
                class="text-blue-300"
                href="https://profitfrog.com/profitability-modeling"
                >profit forecasting</a
              >
              and
              <a
                class="text-blue-300"
                href="https://profitfrog.com/scenario-planning"
                >scenario planning</a
              >
              capabilities immediately, whether your revenue is at zero or at
              $1,000,000 per month.
            </p>
            <p
              class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] opacity-[.7]"
            >
              Have questions?
              <a class="text-blue-300" href="https://profitfrog.com/contact-us"
                >Contact us</a
              >
              and we’ll be happy to answer them!
            </p>
          </div>
          <div></div>
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
