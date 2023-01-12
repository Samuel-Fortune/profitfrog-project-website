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
    <section
      class="mt-[84px] shadow-xl"
      style="
        color: #3d3c44;
        display: flex;
        flex: 1 1;
        width: 93%;
        height: 100%;
        min-height: 750px;
        max-width: 1170px;
        border-radius: 20px;
        overflow: hidden;
        margin: 132px auto;
      "
    >
      <section
        style="
          display: flex;
          flex-direction: column;
          padding: 50px 50px 50px 100px;
          min-width: 47%;
          flex: 1 1;
          background-color: white;
        "
      >
        <h2 class="font-[700] text-[44px] leading-[52.8px]">Sign in</h2>
        <div class="flex flex-col mt-5 w-full">
          <form
            class="w-full max-w-[350px]"
            autocomplete="off"
            data-hs-cf-bound="true"
            action=""
            method="post"
          >
            <!--Email-->
            <div
              class="w-full flex flex-col relative"
              style="margin: 30px 0 40px"
            >
              <label
                class="absolute top-[5px] opacity-[.4] font-[400] w-full m-0 transition-all text-left"
                for="email"
                >Email</label
              >
              <div class="flex items-center">
                <input
                  class="text-[18px] font-[400] max-w-[350px] w-full"
                  style="
                    border-width: 0 0 1px;
                    border-color: #e2e2e2;
                    padding: 3px 0;
                    outline: none;
                    z-index: 1;
                    background-color: transparent;
                  "
                  id="email"
                  name="email"
                  type="text"
                  value=""
                />
                <img class="hidden" src="./images/eye-off.svg" alt="" />
              </div>
              <span
                class="hidden text-red-400 text-[14px] opacity-[.5] leading-[95%] text-left"
                style="margin: 5px 0 0"
                >Please enter your email</span
              >
            </div>
            <!--Password-->
            <div
              class="w-full flex flex-col relative"
              style="margin: 30px 0 40px"
            >
              <label
                class="absolute top-[5px] opacity-[.4] font-[400] w-full m-0 transition-all text-left"
                for="password"
                >Password</label
              >
              <div class="flex items-center">
                <input
                  class="text-[18px] font-[400] max-w-[350px] w-full"
                  style="
                    border-width: 0 0 1px;
                    border-color: #e2e2e2;
                    padding: 3px 0;
                    outline: none;
                    z-index: 1;
                    background-color: transparent;
                  "
                  id="password"
                  name="password"
                  type="password"
                  value=""
                />
                <img
                  class=""
                  style="
                    width: 20px;
                    margin-left: -25px;
                    z-index: 2;
                    cursor: pointer;
                    display: block;
                    opacity: 0.5;
                  "
                  src="./images/eye-off.svg"
                  alt=""
                />
              </div>
              <span
                class="hidden text-red-400 text-[14px] opacity-[.5] leading-[95%] text-left"
                style="margin: 5px 0 0"
                >Please enter your password</span
              >
            </div>

            <div
              style="
                max-width: 350px;
                display: flex;
                width: 100%;
                justify-content: space-between;
                align-items: center;
                margin: 50px 0;
                flex-direction: row;
              "
            >
              <div class="flex w-full flex-row justify-between">
                <div style="display: flex; align-items: center">
                  <input
                    style="
                      border: 1px solid #e2e2e2;
                      width: 24px;
                      height: 24px;
                      border-radius: 5px;
                      display: block;
                      position: relative;
                      margin-right: 10px;
                    "
                    type="checkbox"
                    name="remember_me"
                    id="remember_me"
                    value="false"
                  />
                  <label class="font-[400] text-[14px] m-0" for="remember_me"
                    >Remember me</label
                  >
                </div>
                <div class="flex items-end">
                  <a
                    class="text-[#1fabff] text-[16px] font-[400] underline bg-transparent"
                    href="/password/forgot"
                    >Forgot Password</a
                  >
                </div>
              </div>
            </div>
            <button
              class="cursor-pointer rounded-lg"
              style="
                margin: 20px 0;
                background-color: #84c225;
                box-shadow: none;
                color: white;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                padding: 10px 30px;
                font-weight: 500;
                border-radius: 8px;
                border: none;
                min-width: 120px;
                transition-duration: 0.2s;
                font-size: 16px;
              "
              type="submit"
            >
              Sign in
            </button>
          </form>
          <span class="font-[700]" style="margin: 45px 0">
            or
            <a
              class="text-[16px] underline text-[#1fabff] bg-transparent"
              href="./signup.php"
              >create an account</a
            >
          </span>
        </div>
      </section>
      <section
        style="
          display: flex;
          flex: 1 1;
          background-color: #f4fbff;
          padding: 75px 75px 0 100px;
          position: relative;
        "
      >
        <h2 class="text-[44px] font-[700] text-[#3d3c44] z-[2]">
          Upgrade your business
        </h2>
        <div
          class="absolute shape w-full max-w-[700px] left-0 bottom-[50px] z-[1] pr-[50px]"
        >
          <div class="inline-block max-w-[100%] overflow-hidden relative m-0">
            <div class="box-border block max-w-[100%]">
              <img
                class="max-w-[100%] block m-0 border-none p-0"
                src="./images/download1.svg"
                alt=""
              />
            </div>
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
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                min-width: 100%;
                z-index: 2;
              "
              src="./images/500x311-sign-in.avif"
              alt=""
            />
          </div>
        </div>
      </section>
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
