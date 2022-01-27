<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<!-- Swiper's CSS -->
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css">
<body>

     <!-- the nav bar -->
     <nav class="container flex justify-around py-8 mx-auto bg-white stiky">
          <div class="flex items-center">
            <h3 class="text-2xl font-medium text-blue-500"><img class="w-20" src="img\pngwing.com.png" alt=""></h3>
          </div>
          <!-- left header section -->
          <div class="items-center hidden space-x-8 lg:flex text-2xl">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Blogs</a>
            <a href="#">Our Team</a>
            <a href="#">Contact Us</a>
          </div>
          <!-- right header section -->
          <div class="flex items-center space-x-2">
            <button class="px-4 py-2 text-blue-100 bg-blue-800 rounded-md">
              <a href="logout.php">Log out</a>
            </button>
            <button class="px-4 py-2 text-gray-200 bg-gray-400 rounded-md">
              <a href="sign-up.php">Sign up</a>
            </button>
          </div>
        </nav>
        <!-- nav bar end's here -->

        <!-- first header -->
        <div class="text-4xl text-blue-400">
             <h2>ABOUT THE CLUB</h2>
        </div>

        <!-- fullschreen slider show -->
        <div>
          <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                class="object-fill w-full width h-96"
                src="img/pngwing.com.png"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full width h-96"
                src="img/old traford.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full width h-96"
                src="img/mourinho.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/papilo.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/jj okeocha.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/jj okeocha 3.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/ronaldinho.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/ronaldo 2.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/kante.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/messi 3.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/pele.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/maradona.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/de gea.jpg"
                alt="apple watch photo"
              />
            </div>
            <div class="swiper-slide">
              <img
                class="object-fill w-full h-96"
                src="img/jj okeocha 2.jpg"
                alt="apple watch photo"
              />
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
    
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper('.mySwiper', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
        </script>
        </div>
        <!-- end of fullschreen slideshow -->

        <!-- the history -->
        <div class="mt-4"></div>
    <section
      class="container mx-auto bg-gradient-to-r from-green-400 to-blue-500"
    >
      <div class="px-8 py-20 lg:flex lg:justify-center">
        <div class="">
          <h3 class="text-3xl font-bold text-center text-gray-100">
           
          </h3>
               <h1 class="text-center text-4xl mb-4 text-bold">OUR HISTORY</h1>

               <p class="text-white text-xl">
                FOUNDED IN 1878 AS NEWTON HEATH L&YR FOOTBALL CLUB, OUR CLUB HAS OPERATED FOR OVER 140 <br>  YEARS. THE TEAM FIRST ENTERED THE ENGLISH FIRST DIVISION, THEN THE HIGHEST LEAGUE IN <br>  ENGLISH FOOTBALL, FOR THE START OF THE 1892-93 SEASON. OUR CLUB NAME CHANGED TO ALL STAR <br>   FOOTBALL CLUB IN 1902, AND WE WON THE FIRST OF OUR 20 ENGLISH LEAGUE TITLES IN 1908. IN <br>  1910, WE MOVED TO OLD WATFFORD, OUR CURRENT STADIUM.
                Late 1940s
                
                In the late 1940s, we returned to on-field success, winning the FA Cup in 1948 and  <br> finishing within the top four league positions during each of the first five seasons <br>  immediately following the Second World War. During the 1950s, we continued our on-field <br>  success under the leadership of manager Sir Matt Busby, who built a popular and famous team based on youth players known as the "Busby Babes."
                
                1958 <br>
                
                1986 <br>
                
                2012/13 <br>
                
                2014 <br>
                
                2016 <br>
               </p>
          </p>
          <div class="items-center justify-center mt-4 lg:flex">
            <a
              class="
                block
                px-8
                py-2
                mt-6
                text-center text-gray-900
                rounded
                bg-gray-50
                md:mt-0
              "
              href="#"
              >KNOW MORE</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- the end of the history -->




<!-- three slide show header -->
<div class="flex">
  <div>
    <h1 class="text-3xl m-5 ">MANAGERS</h1>
  </div>
  <div>
    <h1 class="text-3xl m-5 ml-80">TOP PLAYERS</h1>
  </div>
  <div>
    <h1 class="text-3xl m-5 ml-80">GOAL KEEPERS</h1>
  </div>
</div>
<!-- three slide show header ends here-->




        
        <!-- three slider show -->
        <div class="flex">
          <!-- managers -->
          <div class="w-96 ml-5">
               <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/kante.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/Manchester-United-.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/Marcelo Bielsa.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
              
                  <!-- Swiper JS -->
                  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                  <script>
                    var swiper = new Swiper('.mySwiper', {
                      spaceBetween: 30,
                      centeredSlides: true,
                      autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                      },
                      pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                  </script>
             </div>

             <!-- top player-->
          <div class="w-96 ml-20">
               <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/lewandoski.webp"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/messi 4.webp"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/c ronaldo.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
              
                  <!-- Swiper JS -->
                  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                  <script>
                    var swiper = new Swiper('.mySwiper', {
                      spaceBetween: 30,
                      centeredSlides: true,
                      autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                      },
                      pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                  </script>
             </div>
             <!-- goal keepers -->
          <div class="w-96 ml-20">
               <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/de gea 2.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/neuer.jpg"
                          alt="apple watch photo"
                        />
                      </div>
                      <div class="swiper-slide">
                        <img
                          class="object-fill w-full h-96"
                          src="img/c mendy.webp"
                          alt="apple watch photo"
                        />
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
              
                  <!-- Swiper JS -->
                  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                  <script>
                    var swiper = new Swiper('.mySwiper', {
                      spaceBetween: 30,
                      centeredSlides: true,
                      autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                      },
                      pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                  </script>
             </div>
        </div>
        <!-- three slide show ends here -->

<!-- sign up social -->
        <div class="bg-yellow-900 mt-20 shadow-2xl rounded-xl">
          <h1 class="m-20 mb-4  text-2xl text-center text-white">YOU CAN SIGN UP SOCIAL</h1>
          <div class="flex">
            <div>
              <button class="bg-blue-500 pl-60 pr-60 pt-5 pb-5 ml-20 font-semibold text-white inline-flex  items-center space-x-2 rounded">
                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span><a href="#">Facebook</a></span>
            </button>
            <button class="bg-blue-300 pl-60 pr-60 pt-5 pb-5 font-semibold text-white inline-flex items-center space-x-2 rounded">
                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                <span><a href="#">Twitter</a></span>
            </button>
            </div>
          </div>
          <hr class="mt-5">
          <!-- sign up social ends here -->

          <!-- sign up manually -->
          <p class="text-2xl text-center">or</p>

          <button class="bg-blue-400 pl-60 pr-60 pt-5 pb-5 font-semibold text-white inline-flex items-center space-x-2 rounded relative left-96 mb-10">
          <span><a href="#">SIGN UP</a></span>
        </button>
        <!-- sign up manually ends here -->
        </div>

        <footer class="bg-gray-50">
          <!-- brand logos -->

          <div class="ml-60">
            <div class="flex ml-20">
              <div>
                <img src="img/cadbury_-_footer.png" alt="">
              </div>
              <div>
                <img src="img/go_-_footer_-_trans.png" alt="">
              </div>
              <div>
                <img src="img/hublot_-_footer_-_trans.png" alt="">
              </div>
            </div>
  
            <div class="flex ml-20">
              <div>
                <img src="img/hyundai_-_footer.png" alt="">
              </div>
              <div>
                <img src="img/MSC_-_footer_-_trans.png" alt="">
              </div>
              <div>
                <img src="img/nike.png" alt="">
              </div>
            </div>
  
            <div class="flex ml-20">
              <div>
                <img src="img/singha_-_footer.png" alt="">
              </div>
              <div>
                <img src="img/sure_-_footer_-_trans.png" alt="">
              </div>
              <div>
                <img src="img/three_-_footer.png" alt="">
              </div>
            </div>
  
  <div class="flex ml-20">
    <div>
      <img src="img/parimatch_-_footer.png" alt="">
    </div>
    <div>
      <img src="img/MSC_-_footer_-_trans.png" alt="">
    </div>
    <div>
      <img src="img/ea_-_footer_-_trans.png" alt="">
    </div>
  </div>
  
  <div class="ml-72">
    <img src="img/trivago_-_footer_-_trans.png" alt="">
  </div>
  
  
          </div>
  <!-- social -->
          <div class="flex mt-20 mb-20 ml-36 justify-around">
            <div>
              <svg
    class="w-6 h-6 text-blue-600  fill-current"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24">
    <path
      d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
    />
  </svg>
            </div>
  
            <div>
              <svg
    class="w-6 h-6 text-blue-300 fill-current"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24">
    <path
      d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
    />
  </svg>
            </div>
  
            <div>
              <svg
    class="w-6 h-6 text-green-400 fill-current"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 448 512">
    <path
      d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
    ></path>
  </svg>
            </div>
  
            <div>
              <svg
    class="w-6 h-6 text-blue-500 fill-current"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 448 512">
    <path
      d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
    ></path>
  </svg>
            </div>
  
            <div>
              <svg
    class="w-6 h-6 text-gray-400 text-blue-400 fill-current"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 496 512">
    <path
      d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"
    ></path>
  </svg>
            </div>
  
            <div>
              <svg
              class="w-6 h-6 text-red-500 fill-current"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z"
              />
            </svg>
            </div>
  
            <div>
              <svg
    class="w-6 h-6 text-pink-600 fill-current"
    viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg">
    <path
      d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"
    />
  </svg>
            </div>
          </div>
          <!-- social ends here -->

          
    <footer class="border-t border-gray-200">
      <div
        class="
          container
          flex flex-col flex-wrap
          px-4
          py-16
          mx-auto
          md:items-center
          lg:items-start
          md:flex-row md:flex-nowrap
        "
      >
        <div
          class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left"
        >
          <a
            class="
              flex
              items-center
              justify-center
              text-4xl
              font-bold
              text-blue-700
              md:justify-start
            "
          >
            <img class="w-20" src="img/pngwing.com.png" alt="">
          </a>
          <p class="mt-2 text-sm text-justify text-gray-500">
            You might have thought our countdown to Christmas with our own take on a traditional advent calendar would have finished by now, but we just had to bring you one more player-based quiz so we could include a true Blues legend who wore the number 26 shirt.
          </p>
          <div class="flex mt-4">
            <input
              type="text"
              class="
                h-auto
                p-2
                text-sm
                border border-grey-light
                round
                text-grey-dark
              "
              placeholder="Your email address"
            />
            <button class="h-auto p-3 text-xs text-white bg-red-600 rounded-sm">
              Subscribe
            </button>
          </div>
          <div class="flex justify-center mt-4 lg:mt-2">
            <a>
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-6 h-6 text-blue-600"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3">
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-6 h-6 text-blue-300"
                viewBox="0 0 24 24"
              >
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3">
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-6 h-6 text-pink-400"
                viewBox="0 0 24 24"
              >
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path
                  d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
                ></path>
              </svg>
            </a>
            <a class="ml-3">
              <svg
                fill="currentColor"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="0"
                class="w-6 h-6 text-blue-500"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
                ></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </div>
        </div>
        <div class="justify-between w-full mt-4 text-center lg:flex">
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
              Useful Links
            </h2>
            <ul class="mb-8 space-y-2 text-sm list-none">
              <li>
                <a class="text-gray-600 hover:text-gray-800">Home</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">About Us</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Blogs</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
              LATEST UPDATE 
            </h2>
            <ul class="mb-8 space-y-2 text-sm list-none">
              <li>
                <a class="text-gray-600 hover:text-gray-800">MEET OUR TEAM</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">ALL MANAGERS</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">ALL PLAYERS</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">FAN GROOVE</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 lg:w-1/3 md:w-1/2">
            <h2 class="mb-2 font-bold tracking-widest text-gray-900">
             ACHIEVES 
            </h2>
            <ul class="mb-8 space-y-2 text-sm list-none">
              <li>
                <a class="text-gray-600 hover:text-gray-800">LIVE MARCHES </a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">LIVE SCORE</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">LATEST GOALS</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">TROPHIES</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex justify-center -mt-12">
        <p class="text-base text-gray-400">
          © 2021 ALL STARE FOOTBALL CLUB. All right reserved. No part of this site may be reproduced without our written permission.
        </p>
      </div>
    
  
        </footer>
        
</body>
</html>