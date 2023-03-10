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
    <section>
      <div class="w-full h-full bg-[#f4fbff]">
        <div
          class="mx-auto container mt-20 pt-8 pb-20 flex flex-col p-6 sm:flex-col md:flex-row lg:flex-row"
        >
          <div class="w-full sm:w-full md:w-[95%] gap-5 flex flex-col">
            <span class="flex flex-row gap-2">
              <a class="border-b-[1px] border-black" href="./index.php">Main</a>
              <span>/</span>
              <p>About us</p>
            </span>

            <span>
              <h1
                class="font-Montserrat text-[#404046] font-[600] opacity-[2] text-[48px] leading-[67px]"
              >
                Mark Buff
              </h1>
              <h3 class="text-[24px] font-[600] leading-[35px] opacity-[0.6]">
                Founder/CEO
              </h3>
            </span>
            <div class="flex relative flex-col w-full mt-1">
              <p
                class="font-[400] text-[18px] font-Montserrat w-full sm:max-w-full md:max-w-[560px]"
              >
                I am an entrepreneur with a history of building successful
                businesses.
                <br />
                <br />
              </p>
              <p
                class="font-[400] text-[18px] font-Montserrat w-full sm:max-w-full md:max-w-[560px] lg:max-w-[560px]"
              >
                I was the founder & CEO of Mohu, the Cord Cutting Company, who
                invented the best-selling paper-thin Leaf antenna. We
                revolutionized the way people watched TV and sold over 1,000,000
                antennas per year to all major retailers, including Best Buy,
                Walmart, Target, Sam's Club, and Amazon. Mohu was acquired in
                January 2020.
                <br />
                <br />
              </p>
              <p
                class="font-[400] text-[18px] font-Montserrat w-full sm:max-w-full md:max-w-[560px]"
              >
                Over the course of 15 years of building businesses, I realized
                that one of the biggest challenges of running a business was
                building a realistic financial roadmap to hit a goal and
                aligning a team around that goal.
                <br />
                <br />
              </p>
              <p
                class="font-[400] text-[18px] font-Montserrat w-full sm:max-w-full md:max-w-[560px]"
              >
                There was no software that made this process easy.
                <br />
                <br />
              </p>
              <p
                class="font-[400] text-[18px] font-Montserrat w-full sm:max-w-full md:max-w-[560px]"
              >
                I built Profit Frog to change that.
              </p>
            </div>
          </div>
          <div
            class="w-full h-full overflow-hidden relative m-0 flex justify-end"
          >
            <div class="box-border pt-[115%]">
              <img
                class=""
                style="
                  visibility: inherit;
                  position: absolute;
                  inset: 0px;
                  padding: 0px;
                  border: none;
                  margin: auto;
                  width: 0px;
                  height: 0px;
                  min-width: 65%;
                  max-width: 100%;
                  min-height: 65%;
                  max-height: 100%;
                  vertical-align: middle;
                "
                src="./images/mark-buff-400x460.avif"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Our story section-->
    <section
      style="
        min-height: 420px;
        display: flex;
        width: 100%;
        padding: 60px 40px;
        color: #3d3c44;
      "
    >
      <div></div>
      <div
        class="max-w-[770px] flex flex-col flex-wrap justify-center justify-items-center place-content-center w-full items-center mx-auto"
      >
        <h2 class="text-[36px] font-[600] leading-[46px] m-0">Our Story</h2>
        <div
          class="text-[18px] text-center flex flex-col font-Montserrat flex-nowrap font-[400] leading-[27px] items-center mt-14"
        >
          <p class="flex font-Montserrat">
            We are a team of entrepreneurs who have found over the years that
            building a business is not easy. Far from it.
          </p>
          <br />
          <p class="font-Montserrat">
            We all shared the same frustrations. There is always something
            competing for our time and attention, which requires a constant scan
            of our priorities and where we place our efforts.
          </p>
          <br />
          <p class="font-Montserrat">
            And then it occurred to us: when we had a plan, as simple as it may
            be, we all seemed happier, less stressed & organized - even when the
            plan changed every week. There was something about a plan that
            united the team in a way nothing else could. But the problem? There
            was no tool that made planning easy, accurate & fun...
          </p>
          <br />
          <p>And hence - Profit Frog was born.</p>
          <br />
          <p class="font-Montserrat">
            We are all like-minded individuals. We have a thirst for controlling
            our own destiny, believe that we are in charge of the results, and
            will always look for smarter ways to do things.
          </p>
          <br />
          <p class="font-Montserrat">
            We hope Profit Frog brings you the clarity and performance that your
            business deserves.
          </p>
        </div>
      </div>
    </section>

    <!--image card-->
    <section style="padding: 60px 40px 40px; color: #3d3c44">
      <div class="max-w-[996px] mx-auto flex justify-between flex-wrap">
        <div
          class="relative min-w-[237px] w-[237px] rounded-2xl overflow-hidden image-hover"
          style="margin: 0 0 20px"
        >
          <div class="overflow-hidden relative m-0"></div>
          <img
            src="./images/john-hernandez-2-332x358.avif"
            style="
              visibility: inherit;
              position: inherit;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;
            "
            alt=""
          />
          <div class="show">
            <h4
              class="text-[23px] font-Montserrat font-[600] leading-[32px]"
              style="margin: 0 0 4px"
            >
              John Hernandez
            </h4>
            <h5
              class="text-[12px] font-Montserrat font-[500] leading-[18px] uppercase tracking-[.3px]"
              style="margin: 0 0 8px"
            >
              Marketing
            </h5>
            <p
              class="text-[12px] font-Montserrat font-[500] leading-[18px] tracking-[-0.7px]"
              style="margin: 0 0 8px"
            >
              John is a Profit Frog Enthusiast, a business strategy connoisseur,
              and a leader in Digital Marketing. He is passionate about creating
              remarkable customer experiences and engaging content. When he's
              not writing, you'll find him in South Florida, leaning next to a
              ???ventanita???, sipping on a Cuban espresso.
            </p>
          </div>
        </div>
        <!--image card 2-->
        <div
          class="relative min-w-[237px] w-[237px] rounded-2xl overflow-hidden image-hover"
          style="margin: 0 0 20px"
        >
          <div class="overflow-hidden relative m-0"></div>
          <img
            src="./images/332x358-2.avif"
            style="
              visibility: inherit;
              position: inherit;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;
            "
            alt=""
          />
          <div class="show">
            <h4
              class="text-[23px] font-Montserrat font-[600] leading-[32px]"
              style="margin: 0 0 4px"
            >
              Andrey Moroz
            </h4>
            <h5
              class="text-[12px] font-Montserrat font-[500] leading-[18px] uppercase tracking-[.3px]"
              style="margin: 0 0 8px"
            >
              Frontend Development
            </h5>
            <p
              class="text-[12px] font-Montserrat font-[500] leading-[18px] tracking-[-0.7px]"
              style="margin: 0 0 8px"
            >
              I enjoy making stellar user experiences to help business owners
              really understand their business. The more clarity I can bring on
              the frontend, the easier life becomes for the business owner.
            </p>
          </div>
        </div>
        <!--image card 3-->
        <div
          class="relative min-w-[237px] w-[237px] rounded-2xl overflow-hidden image-hover"
          style="margin: 0 0 20px"
        >
          <div class="overflow-hidden relative m-0"></div>
          <img
            src="./images/nikita-zhmurko-2-332x358.avif"
            style="
              visibility: inherit;
              position: inherit;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;
            "
            alt=""
          />
          <div class="show">
            <h4
              class="text-[23px] font-Montserrat font-[600] leading-[32px]"
              style="margin: 0 0 4px"
            >
              Nikita Zhmurko
            </h4>
            <h5
              class="text-[12px] font-Montserrat font-[500] leading-[18px] uppercase tracking-[.3px]"
              style="margin: 0 0 8px"
            >
              Backend Development
            </h5>
            <p
              class="text-[12px] font-Montserrat font-[500] leading-[18px] tracking-[-0.7px]"
              style="margin: 0 0 8px"
            >
              Algorithms, APIs, and frameworks are my thing. When I'm not
              creating databases or moving bits around, I am watching football
              and watching more football. Oh, and I really like computers.
            </p>
          </div>
        </div>
        <!--image card 4-->
        <div
          class="relative min-w-[237px] w-[237px] rounded-2xl overflow-hidden image-hover"
          style="margin: 0 0 20px"
        >
          <div class="overflow-hidden relative m-0"></div>
          <img
            src="./images/332x358-1.avif"
            style="
              visibility: inherit;
              position: inherit;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;
            "
            alt=""
          />
          <div class="show">
            <h4
              class="text-[23px] font-Montserrat font-[600] leading-[32px]"
              style="margin: 0 0 4px"
            >
              Christine Buff
            </h4>
            <h5
              class="text-[12px] font-Montserrat font-[500] leading-[18px] uppercase tracking-[.3px]"
              style="margin: 0 0 8px"
            >
              Social Media
            </h5>
            <p
              class="text-[12px] font-Montserrat font-[500] leading-[18px] tracking-[-0.7px]"
              style="margin: 0 0 8px"
            >
              I love posting, creating, and helping people succeed. I believe
              small business owners are superheroes and will save the world.
              When I'm not chasing my teens around, I'm shopping for deals,
              playing Candy Crush, or running micro marathons.
            </p>
          </div>
        </div>
        <!--image card 5-->
        <div
          class="relative min-w-[237px] w-[237px] rounded-2xl overflow-hidden image-hover"
          style="margin: 0 0 20px"
        >
          <div class="overflow-hidden relative m-0"></div>
          <img
            src="./images/elizabeth-332x358.avif"
            style="
              visibility: inherit;
              position: inherit;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;
            "
            alt=""
          />
          <div class="show">
            <h4
              class="text-[23px] font-Montserrat font-[600] leading-[32px]"
              style="margin: 0 0 4px"
            >
              Elizabeth
            </h4>
            <h5
              class="text-[12px] font-Montserrat font-[500] leading-[18px] uppercase tracking-[.3px]"
              style="margin: 0 0 8px"
            >
              Program Management
            </h5>
            <p
              class="text-[12px] font-Montserrat font-[500] leading-[18px] tracking-[-0.7px]"
              style="margin: 0 0 8px"
            >
              People, software, and communications are my passions. I love
              working with brilliant teams and savvy creators. When I'm not
              herding cheetahs, I am dancing. Life is better when you dance.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--Our advantage section-->
    <section
      class=""
      style="
        background-color: rgb(244, 251, 255);
        padding: 60px 0 60px 40px;
        margin: 0 auto;
        position: relative;
        color: #3d3c44;
      "
    >
      <div
        class="max-w-[1170px] flex flex-col items-center justify-center mx-auto z-10"
      >
        <h2
          class="text-center text-[36px] font-[600] leading-[46px]"
          style="margin: 0 0 60px"
        >
          Our advantages
        </h2>
        <div class="w-full flex gap-7 overflow-x-scroll">
          <div
            class="rounded-[20px] bg-white min-w-[324px] flex-1"
            style="padding: 21px 16px 16px"
          >
            <img
              src="./images/heart.svg"
              style="vertical-align: middle"
              alt=""
            />
            <h4
              class="mt-[10px] font-[600] text-[23px] leading-[32px] mb-[10px] font-Montserrat"
            >
              Simple
            </h4>
            <div
              class="font-[400] text-[18px] leading-[27px] text-[#132234]"
              style="letter-spacing: 0.2px"
            >
              <p class="mt-0 mb-4 font-Montserrat">
                Profit Frog's interface was designed with a "less is more"
                approach, making it fun and intuitive to use.
              </p>
            </div>
          </div>
          
          <div
            class="rounded-[20px] bg-white min-w-[324px] flex-1 "
            style="padding: 21px 16px 16px"
          >
            <img
              src="./images/heart.svg"
              style="vertical-align: middle"
              alt=""
            />
            <h4
              class="mt-[10px] font-[600] text-[23px] leading-[32px] mb-[10px] font-Montserrat"
            >
              Quick
            </h4>
            <div
              class="font-[400] text-[18px] leading-[27px] text-[#132234]"
              style="letter-spacing: 0.2px"
            >
              <p class="mt-0 mb-4 font-Montserrat">
                Running a business can be stressful. Profit Frog changes that.
                We make the process engaging, quick and exciting. Profits drive
                motivation and confidence in a business, so why not make the
                process fun?
              </p>
            </div>
          </div>
          <div
            class="rounded-[20px] bg-white min-w-[324px] flex-1"
            style="padding: 21px 16px 16px"
          >
            <img
              src="./images/heart.svg"
              style="vertical-align: middle"
              alt=""
            />
            <h4
              class="mt-[10px] font-[600] text-[23px] leading-[32px] mb-[10px] font-Montserrat"
            >
              Focus
            </h4>
            <div
              class="font-[400] text-[18px] leading-[27px] text-[#132234]"
              style="letter-spacing: 0.2px"
            >
              <p class="mt-0 mb-4 font-Montserrat">
                Plans unite and energize teams around a common goal. They are
                the only way to guarantee alignment & focus. Profit Frog was
                designed to bring a new level of focus to your business.
              </p>
            </div>
          </div>
        </div>
        <button
          class="cursor-pointer bg-lime-500 hover:bg-lime-400 shadow-none text-white inline-flex justify-center items-center font-[500] rounded-lg border-none min-w-[120px] transition-all duration-75 text-[16px] overflow-visible"
          style="margin: 40px auto 0; padding: 10px 30px"
        >
          Sign Up For Free
        </button>
      </div>
    </section>

    <!--Follow section-->
    <section class="w-full h-full bg-white" style="padding: 100px 30px">
      <div
        class=""
        style="
          display: flex;
          justify-content: space-around;
          align-items: center;
          background-color: #f9f9f9;
          border-radius: 20px;
          width: 100%;
          max-width: 900px;
          min-height: 300px;
          margin: 0 auto;
        "
      >
        <div class="inline-block max-w-full overflow-hidden relative m-0">
          <div class="block max-w-full">
            <img class="align-middle" src="./images/download.svg" alt="" />
          </div>
          <img
            src="./images/socials_illustaration.svg"
            style="
              visibility: inherit;
              position: absolute;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              width: 0px;
              height: 0px;
              min-height: 100%;
              max-height: 100%;
              min-width: 100%;
              max-width: 100%;
            "
            alt=""
          />
        </div>
        <div class="" style="max-width: 40%; width: 100%">
          <h3 class="text-3xl font-[600] mb-3">
            Follow us for Profit Frog insights
          </h3>
          <button
            class="hover:bg-[#1565c0] hover:transition-all"
            style="
              padding: 10px 20px;
              box-shadow: none;
              min-width: 160px;
              cursor: pointer;
              border-radius: 100px;
              background-color: #4ea0d0;
              color: #fff;
              display: inline-flex;
              justify-content: center;
              align-items: center;
              font-weight: 500;
              transition: 0.2s;
              font-size: 16px;
              overflow: visible;
            "
          >
            <span
              class="relative flex gap-1 align-middle items-center bg-transparent rounded-2xl group transition-all duration-200 cursor-pointer"
            >
              <img src="./images/linkedin.svg" alt="Likedin Logo" />

              <span
                class="p-1 px-3 transition-all duration-200 group-hover:duration-200"
                >LinkedIn</span
              >
            </span>
          </button>
        </div>
      </div>
    </section>

    <!--Values Section-->
    <section
      class="max-w-[1170px] w-full items-center m-auto text-[#3d3c44]"
      style="
        padding: 60px 40px;
        justify-content: space-between;
        display: flex;
        flex-direction: row;
      "
    >
      <div
        class="w-[540px] max-h-[306px] h-full rounded-[20px] overflow-hidden"
      >
        <div class="overflow-hidden relative m-0 min-h-[306px]">
          <div class="pt-11"></div>
          <img
            class="shadow-lg rounded-lg absolute inset-0 p-0 m-auto w-0 h-0 min-w-full max-w-full min-h-full max-h-full object-cover"
            style="visibility: inherit"
            src="./images/mark-buff-and-clark-5-845x561.avif"
            alt=""
          />
        </div>
      </div>
      <div class="flex flex-col justify-center p-0 w-full max-w-[391px] ml-5">
        <h4 class="text-[36px] font-[600] leading-[46px] m-0">Values</h4>
        <div class="text-[16px] font-[400] leading-[24px] m-0">
          <br />
          <ul class="list-disc ml-10">
            <li>People with humility, integrity, and grit are awesome</li>
            <li>Obsess over our customer's success</li>
            <li>Profits are an intention, not a reward</li>
            <li>Plan your work and work your plan</li>
            <li>Simple is better</li>
          </ul>
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
