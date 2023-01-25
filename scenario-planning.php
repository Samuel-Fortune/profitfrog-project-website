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
    <section class="w-full bg-white" style="padding: 0 0 10px; color: #3d3c44;">
      <div class="flex flex-row container mx-auto justify-between max-w-[1170px] items-start " style="padding: 50px 0;">
        <div class="w-full relative max-w-[550px] h-full max-h-[390px] overflow-hidden rounded-[20px] shadow-lg">
          <div class="m-0 overflow-hidden">
            <div class="pt-[56%]"></div>
            <img style="visibility: inherit; inset: 0px; height: 0px; position: absolute; padding: 0px; border: none; margin: auto; width: 0px; min-height: 100%; min-width: 100%; max-height: 100%; max-width: 100%;" src="./images/interactive-timeline-and-dashboard-690x391.svg" alt="">
          </div>
        </div>
        <div class="flex flex-col justify-between items-start w-[550px] h-full">
          <div class="mb-[26px] flex flex-col gap-5">

            
            <h2 class="text-[24px] leading-[33.8px] mb-[20px]">What is Scenario Planning?</h2>
           
        
  
            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">
              <em>
                “The need for efficient strategic thinking is most obvious in times of accelerated change when the reaction time of the organization becomes crucial to survival and growth.”
                </em>
            </p>

            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">—Kees van der Heijden, Scenarios: The Art of Strategic Conversation</p>
  
  
            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">Scenario planning is a type of thinking or computer modeling that allows business owners, project managers, and other decision makers to peer into the future and make better forecasts. It involves <a class="text-blue-300" href="https://profitfrog.com/what-is-a-financial-model">creating a financial model</a> based on a potential future.</p>
  
            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">The scenario process involves asking the following two questions.</p>
            <ol class="list-decimal pl-10">
              <li class="text-[16px] leading-[24px]" style="opacity: .7;">What could potentially occur? This is the scenario itself.</li>
              <li class="text-[16px] leading-[24px]" style="opacity: .7;">What would be the impact on my business if it did occur? This often involves looking at “best case,” “most likely,” and “worst case” outcomes.</li>
            </ol>
            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">Major business decisions can be scary. Dynamic scenario planning helps you sort a great opportunity from a pitfall. With Profit Frog, you can steer your business toward growth and away from getting mired down.</p>
            <p class="max-w-[365px] text-[16px] leading-[24px] mb-[14px] " style="opacity: .7;">Our scenario planning software lets you model a range of possible outcomes and impacts. Then you can steer your company toward best-case scenarios while preparing for worst-case ones.</p>
            <ul class="list-disc pl-10" style="opacity: .7;">
              <li class="text-[16px] leading-[24px] max-w-[510px] ">Learn where to allocate your resources and when to back down from an investment</li>
              <li class="text-[16px] leading-[24px] max-w-[510px]">Be strategically and financially prepared for a worst-case scenario and mitigate its potential impact</li>
              <li class="text-[16px] leading-[24px]">Identify potential risk and turn it into gain</li>
              <li class="text-[16px] leading-[24px]">Recognize and seize amazing opportunities</li>
              <li class="text-[16px] leading-[24px]">Gain confidence in your decision-making skills by preparing for things you can’t control</li>
              <li class="text-[16px] leading-[24px] max-w-[510px]">Be ready for disruptive change and take advantage of it rather than being blindsided by it</li>
              <li class="text-[16px] leading-[24px]">Have your business strategy be proactive rather than reactive</li>
            </ul>
          </div>
          <div class="flex ">
            <div class="flex flex-col mr-[15px] max-w-[230px]">
              <button class="h-[44px] mb-[12px] image-hover cursor-pointer bg-[#84c225] text-white inline-flex justify-center font-[500] rounded-lg min-w-[120px] transition-all text-[16px]  hover:bg-lime-200 hover:transition-all" style="padding: 10px 30px;">Try For Free</button>

              <span style="opacity: .7;">No Credit card required</span>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Sponsors Section-->

    <div style="padding: 10px 0 60px; color: #3d3c44; margin-top: -10px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;">
      
      <h2
        style="margin-top: 50px;
        text-align: center;
        font-size: 36px;
        line-height: 46.8px;
        font-weight: 600;
        padding: 0 100px;"
      >
        See Why Small Businesses Choose Profit Frog
      </h2>
     
      <div style="margin-top: 20px;
      width: 100%;
      max-width: 1170px;
      height: 100%;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      align-items: center;">
        <div
          style="margin: 10px;"
        >
          <div style="display: inline-block;
          max-width: 100%;
          overflow: hidden;
          position: relative;
          box-sizing: border-box;
          margin: 0px;">
            <div style="box-sizing: border-box;
            display: block;
            max-width: 100%;">
              <img style="    max-width: 100%;
              display: block;
              margin: 0px;
              border: none;
              padding: 0px;" src="./images/sponsor.svg" alt="">
            </div>
            <img
              tabindex="0"
              style="visibility: inherit;
              position: absolute;
              inset: 0px;
              box-sizing: border-box;
              padding: 0px;
              border: none;
              margin: auto;
              display: block;
              width: 0px;
              height: 0px;
              min-width: 100%;
              max-width: 100%;
              min-height: 100%;
              max-height: 100%;"
              src="https://profitfrog.imgix.net/img/logo-1_1.svg?auto=format&fit=max&w=375"
              alt="Adidas"
              role="img"
            />
          </div>
        </div>
       
        <div
        style="margin: 10px;"
      >
        <div style="display: inline-block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        margin: 0px;">
          <div style="box-sizing: border-box;
          display: block;
          max-width: 100%;">
            <img style="    max-width: 100%;
            display: block;
            margin: 0px;
            border: none;
            padding: 0px;" src="./images/sponsor.svg" alt="">
          </div>
          <img
            tabindex="0"
            style="visibility: inherit;
            position: absolute;
            inset: 0px;
            box-sizing: border-box;
            padding: 0px;
            border: none;
            margin: auto;
            display: block;
            width: 0px;
            height: 0px;
            min-width: 100%;
            max-width: 100%;
            min-height: 100%;
            max-height: 100%;"
            src="	https://profitfrog.imgix.net/img/logo-3.svg?auto=format&fit=max&w=375"
            alt="Adidas"
            role="img"
          />
        </div>
      </div>
       
      <div
      style="margin: 10px;"
    >
      <div style="display: inline-block;
      max-width: 100%;
      overflow: hidden;
      position: relative;
      box-sizing: border-box;
      margin: 0px;">
        <div style="box-sizing: border-box;
        display: block;
        max-width: 100%;">
          <img style="    max-width: 100%;
          display: block;
          margin: 0px;
          border: none;
          padding: 0px;" src="./images/sponsor.svg" alt="">
        </div>
        <img
          tabindex="0"
          style="visibility: inherit;
          position: absolute;
          inset: 0px;
          box-sizing: border-box;
          padding: 0px;
          border: none;
          margin: auto;
          display: block;
          width: 0px;
          height: 0px;
          min-width: 100%;
          max-width: 100%;
          min-height: 100%;
          max-height: 100%;"
          src="https://profitfrog.imgix.net/img/logo-5.svg?auto=format&fit=max&w=375"
          alt="Adidas"
          role="img"
        />
      </div>
    </div>
        
      </div>
    </div>

     <!---->
     <section class="w-full bg-[#f4fbff]" style="padding: 0 0 10px; color: #3d3c44;">
      <div class="flex flex-row container mx-auto justify-between max-w-[1170px] items-start " style="padding: 50px 0;">
        <div class="w-full relative max-w-[550px] h-full max-h-[390px] overflow-hidden rounded-[20px] shadow-lg">
          <div class="m-0 overflow-hidden">
            <div class="pt-[56%]"></div>
            <img style="visibility: inherit; inset: 0px; height: 0px; position: absolute; padding: 0px; border: none; margin: auto; width: 0px; min-height: 100%; min-width: 100%; max-height: 100%; max-width: 100%;" src="./images/landscaping-small-business-owner-using-profit-frog-690x391.svg" alt="">
          </div>
        </div>
        <div class="flex flex-col justify-between items-start w-[550px] h-full">
          <div class="mb-[26px] flex flex-col gap-5">

            
            <h2 class="text-[24px] font-[600] font-Montserrat leading-[33.8px]">A Short History of Scenario Planning</h2>
           
        
  
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">
              
              Scenario planning got its start in the military, which used it to imagine different “war games” and their outcomes. In the aftermath of WWII, scenario planning began to infiltrate the civilian and corporate world. 
                
            </p>

            <h2 class="text-[24px] max-w-[378px] font-[600] font-Montserrat  leading-[33.8px] ">Herman Kahn and the Hudson Institute</h2>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Herman Kahn was a systems theorist and pioneer of scenario analysis who popularized the term “scenario” in the 1960s. Kahn founded a scenario-based think tank, the Hudson Institute, in 1961. Hudson initially prioritized defense-related scenario planning and its theories of nuclear deterrence and escalation were influential within the Kennedy administration. Hudson then began to focus on scenario planning in economics; Kahn successfully predicted Japan’s economic rise. </p>
  
  
            <h2 class="text-[24px] max-w-[387px] font-[600] font-Montserrat  leading-[33.8px] ">Royal Dutch Shell and Scenario Planning</h2>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Pierre Wack, a disciple of Herman Kahn, implemented scenario planning exercises in Royal Dutch Shell in the 1970s, and <a class="text-blue-300" href="https://profitfrog.com/what-is-a-financial-model">Shell has been using scenario planning ever since</a> . Wack and subsequent members of the company’s scenario team have been able to successfully model global trends and plan against them. Shell’s set of scenarios have helped the company anticipate and adapt global business operations to the oil shocks of the 1970s, the collapse of European communism, the Great Recession of 2008, and other volatility.</p>
            <h2 class="text-[24px] max-w-[387px] font-[600] font-Montserrat  leading-[33.8px] ">Scenario Planning Examples</h2>
            <h3 style="font-size: 22px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">Royal Dutch Shell</h3>
  
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Here are a few Shell scenarios:</p>
            <ul class="list-disc pl-10">
              <li class="text-[16px] leading-[24px]" style="opacity: .7;">The <a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Sky scenario:</a> imagining meeting the climate goals of the 2015 Paris Agreement and the changes that would need to occur to mitigate climate change</li>
              <li class="text-[16px] leading-[24px]" style="opacity: .7;"> <a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Rethinking the 2020s</a> :3 scenarios that explore the long-term ramifications of the COVID-19 pandemic</li>
              <li class="text-[16px] leading-[24px]" style="opacity: .7;"><a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Digitalization</a> : exploring how digital technologies might continue to change the world as we know it</li>
            </ul>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Shell’s executive leadership has benefited tremendously from their investment into scenario planning. With a strategic foresight gained from knowing their strategic options and the key factors driving them, Shell has been able to develop contingency plans for an uncertain future. This has helped them with investor relations, and cost management—not to mention positioning the company to capitalize on global business trends rather than getting sideswiped by them.</p>
            <h3 style="font-size: 22px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">A Profit Frog Scenario Planning Case Study</h3>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Kenton Landscaping has been growing steadily for the past year and has plateaued in their small city. They want to expand and are considering the following options:</p>
            <ol class="list-decimal pl-10" style="opacity: .7;">
              <li class="text-[16px] leading-[24px] max-w-[510px] ">Commute to other cities and offer services there</li>
              <li class="text-[16px] leading-[24px] max-w-[510px]">Sign a lease in a new city for a permanent base there</li>
              <li class="text-[16px] leading-[24px]">Focus on more high-margin services</li>
              
            </ol>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Using Profit Frog, Kenton leadership builds scenarios for the three variables as follows:</p>
            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">Commuting</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Commuting will increase gross revenues by 20% while increasing gas expenditures by $8,000 per month and payroll expenses by $5,000. Net profits decline even though revenues increase.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">New Building Lease</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">As with commuting, leasing a building in a new city will increase revenues by 20%. Payroll will increase by $5,000—again, the same number as for the commuting scenario. Lease and utilities for the new building will cost $4,500. Profit margins increase from 6.5% to 8% and net profit increases by nearly $3,000.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">High-Margin Services</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">Profit Frog shows Kenton that their highest-margin service is cleanups in the spring and fall. Increasing cleanups makes sense.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">New Building and Cleanups</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px] 
          " style="opacity: .7;">Profit Frog’s scenario planning project clearly reveals that the best course for Kenton Landscaping is to lease the building in the new city while investing $1,000 per month in marketing cleanups. Total profits go up by more than $6,000 per month and profit margins increase from 6.5% to 10%.</p>

          </div>
          
        </div>
      </div>
    </section>

    <!--What customers are saying-->
    <section class="bg-white pt-5" style="padding: 60px 0 100px;">
      <h2 class="mb-5" style="    text-align: center;
      font-size: 36px;
      font-weight: 600;">What Profit Frog Customers are Saying</h2>
      <div style="    display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      color: #3d3c44;">
      <button class="cursor-pointer" style=" width: 32px;
      min-width: 32px;
      height: 32px;
      min-height: 32px;
      border-radius: 50%;
      outline: none;
      border: 1px solid #feb92e;
      margin: 0 10px;
      background-color: transparent;
      position: relative;
      padding: 0;
      opacity: .8;">
      
      <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"></path>
      </svg>
      </button>
      <div style="display: flex;
      align-items: center;
      justify-content: center;
      max-width: 908px;
      width: 100%;
      max-height: 600px;">
      
      <div style="overflow: hidden;
      margin: 0;
      padding: 0;">
      
      <div style="width: 408px;
      opacity: 1;
      transform: translate3d(0px, 0px, 0px);">
      
      <div style="outline: none;
      width: 408px; ">
      <div>
        <div style="padding: 24px 40px; display: flex!important;
        justify-content: center;
        align-items: center;
        width: 100%;
        background-color: #fff;
        padding: 48px 40px;
        border-radius: 16px;">
          <div>
            <div style="display: block;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            margin: 0px; height: 240px;
            width: 240px;
            min-height: 100%;
            border-radius: 50%;">
            <div style="    display: block;
            box-sizing: border-box;
            padding-top: 100%; height: 240px;
            width: 240px;
            min-height: 100%;
            border-radius: 50%;
            overflow: hidden;"></div>
            <img style="    visibility: inherit;
            position: absolute;
            inset: 0px;
            box-sizing: border-box;
            padding: 0px;
            border: none;
            margin: auto;
            display: block;
            width: 0px;
            height: 0px;
            min-width: 100%;
            max-width: 100%;
            min-height: 100%;
            max-height: 100%;" src="	https://profitfrog.imgix.net/img/240x240-sm.png?auto=format&fit=max&w=415" alt="">
            </div>
            <p style="display: none;">Zach S. - Small Business Owner</p>
          </div>
          <div style="    padding-left: 50px;
          width: 100%;
          font-size: 18px;
          font-weight: 400;
          line-height: 27px;
          font-style: italic;">

          "Profit Frog not only saved me a ton of time, it gave me the confidence to make the right strategic decisions about my business as we continue to grow."
          <p style="font-weight: 600;
          font-size: 23px;
          margin-top: 24px;
          margin-bottom: 0;">Zach S. - Small Business Owner</p>

          </div>
        </div>
      </div>
    
      </div>
    
      </div>
    
      </div>
    
      </div>
      <button class="cursor-pointer" style="width: 32px;
      min-width: 32px;
      height: 32px;
      min-height: 32px;
      border-radius: 50%;
      outline: none;
      border: 1px solid #feb92e;
      margin: 0 10px;
      background-color: transparent;
      position: relative;
      padding: 0;
      opacity: .8;">

<svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path clip-rule="evenodd" fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"></path>
</svg>
      </button>

      </div>
      
    </section>

    <!---->
    <section class="w-full bg-[#f4fbff]" style="padding: 0 0 10px; color: #3d3c44;">
      <div class="flex flex-row container mx-auto justify-between max-w-[1170px] items-start " style="padding: 50px 0;">
        <div class="w-full relative max-w-[550px] h-full max-h-[390px] overflow-hidden rounded-[20px] shadow-lg">
          <div class="m-0 overflow-hidden">
            <div class="pt-[56%]"></div>
            <img style="visibility: inherit; inset: 0px; height: 0px; position: absolute; padding: 0px; border: none; margin: auto; width: 0px; min-height: 100%; min-width: 100%; max-height: 100%; max-width: 100%;" src="./images/actual-and-future-data-690x391.svg" alt="">
          </div>
        </div>
        <div class="flex flex-col justify-between items-start w-[550px] h-full">
          <div class="mb-[26px] flex flex-col gap-5">

            
            <h2 class="text-[24px] font-[600] font-Montserrat leading-[33.8px]">Scenario Planning vs Strategic Planning</h2>
           
        
  
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">
              
              Strategic planning and scenario planning share a lot in common, but differ in the following respects:
                
            </p>
            <ol class="list-decimal pl-10" style="opacity: .7;">
              <li class="text-[16px] leading-[24px] max-w-[510px]">Strategic planning assumes a known future outcome and strategizes how to get there</li>
              <li class="text-[16px] leading-[24px] max-w-[510px]">Scenario planning assumes a dynamic, chaotic future and helps you plot the course to maximum profitability through all the unknowns</li>
            </ol>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">In other words, strategic planning is a more static process and is disrupted by variability, where scenario planning is designed to navigate variability.</p>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Profit Frog’s scenario analysis is designed to be dynamically updated as conditions change. This sort of <a class="text-blue-300" href="">dynamic planning</a> is much more effective and actionable than many static planning models.</p>

            <h2 class="text-[24px] max-w-[378px] font-[600] font-Montserrat  leading-[33.8px] ">Herman Kahn and the Hudson Institute</h2>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Herman Kahn was a systems theorist and pioneer of scenario analysis who popularized the term “scenario” in the 1960s. Kahn founded a scenario-based think tank, the Hudson Institute, in 1961. Hudson initially prioritized defense-related scenario planning and its theories of nuclear deterrence and escalation were influential within the Kennedy administration. Hudson then began to focus on scenario planning in economics; Kahn successfully predicted Japan’s economic rise. </p>
  
  
            <h2 class="text-[24px] max-w-[387px] font-[600] font-Montserrat  leading-[33.8px] ">Royal Dutch Shell and Scenario Planning</h2>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Pierre Wack, a disciple of Herman Kahn, implemented scenario planning exercises in Royal Dutch Shell in the 1970s, and <a class="text-blue-300" href="https://profitfrog.com/what-is-a-financial-model">Shell has been using scenario planning ever since</a> . Wack and subsequent members of the company’s scenario team have been able to successfully model global trends and plan against them. Shell’s set of scenarios have helped the company anticipate and adapt global business operations to the oil shocks of the 1970s, the collapse of European communism, the Great Recession of 2008, and other volatility.</p>
            <h2 class="text-[24px] max-w-[387px] font-[600] font-Montserrat  leading-[33.8px] ">Scenario Planning Examples</h2>
            <h3 style="font-size: 22px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">Royal Dutch Shell</h3>
  
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Here are a few Shell scenarios:</p>
            <ul class="list-disc pl-10">
              <li class="text-[16px] leading-[24px]" style="opacity: .7;">The <a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Sky scenario:</a> imagining meeting the climate goals of the 2015 Paris Agreement and the changes that would need to occur to mitigate climate change</li>
              <li class="text-[16px] leading-[24px]" style="opacity: .7;"> <a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Rethinking the 2020s</a> :3 scenarios that explore the long-term ramifications of the COVID-19 pandemic</li>
              <li class="text-[16px] leading-[24px]" style="opacity: .7;"><a class="text-blue-300" href="https://www.shell.com/promos/business-customers-promos/overview-of-sky/_jcr_content.stream/1556211464715/08824370d34ccbe871b0b813f9afdff96d8c267b/sky-scenarios-leaflet.pdf"> Digitalization</a> : exploring how digital technologies might continue to change the world as we know it</li>
            </ul>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Shell’s executive leadership has benefited tremendously from their investment into scenario planning. With a strategic foresight gained from knowing their strategic options and the key factors driving them, Shell has been able to develop contingency plans for an uncertain future. This has helped them with investor relations, and cost management—not to mention positioning the company to capitalize on global business trends rather than getting sideswiped by them.</p>
            <h3 style="font-size: 22px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">A Profit Frog Scenario Planning Case Study</h3>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Kenton Landscaping has been growing steadily for the past year and has plateaued in their small city. They want to expand and are considering the following options:</p>
            <ol class="list-decimal pl-10" style="opacity: .7;">
              <li class="text-[16px] leading-[24px] max-w-[510px] ">Commute to other cities and offer services there</li>
              <li class="text-[16px] leading-[24px] max-w-[510px]">Sign a lease in a new city for a permanent base there</li>
              <li class="text-[16px] leading-[24px]">Focus on more high-margin services</li>
              
            </ol>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Using Profit Frog, Kenton leadership builds scenarios for the three variables as follows:</p>
            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">Commuting</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px] " style="opacity: .7;">Commuting will increase gross revenues by 20% while increasing gas expenditures by $8,000 per month and payroll expenses by $5,000. Net profits decline even though revenues increase.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">New Building Lease</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">As with commuting, leasing a building in a new city will increase revenues by 20%. Payroll will increase by $5,000—again, the same number as for the commuting scenario. Lease and utilities for the new building will cost $4,500. Profit margins increase from 6.5% to 8% and net profit increases by nearly $3,000.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">High-Margin Services</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px]  " style="opacity: .7;">Profit Frog shows Kenton that their highest-margin service is cleanups in the spring and fall. Increasing cleanups makes sense.</p>

            <h4 style="font-size: 20px;
            font-weight: 600;
            line-height: 30.8px;
            max-width: 410px;
            ">New Building and Cleanups</h4>
            <p class="max-w-[365px] text-[16px] leading-[24px] 
          " style="opacity: .7;">Profit Frog’s scenario planning project clearly reveals that the best course for Kenton Landscaping is to lease the building in the new city while investing $1,000 per month in marketing cleanups. Total profits go up by more than $6,000 per month and profit margins increase from 6.5% to 10%.</p>

          </div>
          
        </div>
      </div>
    </section>

    <!--Seventh Section-->
    <section class="w-full bg-white">
      <div class="pt-16 pb-16">
        <div class="mx-auto w-full place-content-center justify-center flex flex-col place-items-center items-center ">
          <h1 class="text-[36px] font-[600] font-Montserrat leading-[46px] mb-7">Start Your Free Profit Frog Trial Today</h1>
          <div class="w-full pb-10 place-content-center justify-center flex flex-col place-items-center items-center">

            <p class="text-[#8f8d9e] text-[22px] font-Montserrat opacity-70 font-[600] leading-[33px] ">With proper scenario planning, uncharted waters don’t have to be frightening.</p>

            <p class="text-[#8f8d9e] text-[22px] font-Montserrat opacity-70 font-[600] leading-[33px] ">Make confident decisions, and maximize your profitability with Profit Frog.</p>
            
          </div>
          <button class="bg-lime-400 font-[500] rounded-lg leading-[45px] text-[16px] text-white justify-center items-center  h-full" style="display: inline-flex;
          justify-content: center;
          align-items: center;
          padding: 3px 30px;
          border: none;
          min-width: 120px;
          transition-duration: .2s;
          text-transform: capitalize;
          ">Start Free Trial</button>
        </div>

      </div>


    </section>

    <!--Profit Frog FAQ Section-->
    <section class="w-full font-Montserrat px-5 flex flex-wrap bg-white place-content-center justify-center mx-auto py-[60px] text-[#3d3c44] box-border">
      <h2 class="w-full font-Montserrat flex  flex-row place-content-center justify-center items-center text-[36px] font-[600] opacity-[2] mb-[50px]">Scenario Planning Frequently Asked Questions</h2>
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
