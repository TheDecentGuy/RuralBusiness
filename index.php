<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <style>
    /* html { 
  background: url('img/bg3.jpeg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} */
    .gallery {
      padding: 1rem;
      display: grid;
      grid-template-columns: repeat(10, 60vw);
      grid-template-rows: 1fr;
      grid-column-gap: 1rem;
      grid-row-gap: 1rem;
      overflow: scroll;
      height: 60vh;
      scroll-snap-type: both mandatory;
      scroll-padding: 1rem;
      object-fit: contain;
    }

    .active {
      scroll-snap-type: unset;
    }

    li {
      scroll-snap-align: center;
      display: inline-block;
      border-radius: 3px;
      font-size: 0;
    }
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Rural Business</title>
</head>

<body>
  <header class=" opacity-90 text-gray-600 body-font bg-gradient-to-r from-violet-500 to-fuchsia-500 shadow-2xl rounded-2xl m-3 shadow-purple-500">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center  text-white text-base md:ml-auto">
        <a class="mr-5 text-white hover:text-black cursor-pointer">Home</a>
        <a class="mr-5 text-white hover:text-black cursor-pointer">About</a>
        <a href="./contact.php" class="mr-5 text-white hover:text-black cursor-pointer">Contact</a>
        <a class="text-white hover:text-black cursor-pointer"></a>
      </nav>
      <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3  text-white text-xl drop-shadow-lg">Rural Business</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <a href="login.php"><button id="login" class="flex-shrink-0 text-purple bg-slate-100 border-0 py-1 px-6 focus:outline-none hover:bg-purple-400 hover:text-white rounded-2xl text-lg mt-10 sm:mt-0 shadow-2xl">
            Log In
          </button></a>
        <a href="./signup.php"><button id="register" class="flex-shrink-0 text-purple bg-slate-100 border-0 py-1 px-6 focus:outline-none hover:bg-purple-400 hover:text-white rounded-2xl text-lg mt-10 sm:mt-0 shadow-2xl ml-2">
            Register
          </button></a>
      </div>
    </div>
  </header>

  <!-- <div class="shadow-lg m-3 rounded-lg">
  <ul class="gallery">
      <li style="background: url('img/background.jpg');"></li>
      <li">
    <div class="">
      <img src="img/img1.jpg" alt="">
    </div></li>
      <li style="background: #f5cac3"></li>
      <li style="background: #84a59d"></li>
      <li style="background: #f28482"></li>
    </ul>
    </div> -->


  <div id="carouselExampleControls" class="carousel slide relative m-3" data-bs-ride="carousel">
    <div class="carousel-inner relative w-full max-h-[37rem] overflow-hidden  rounded-2xl shadow-2xl border-2 border-purple-400 shadow-purple-500">

      <div class="carousel-item active relative float-left w-full">
        <img src="img/r2.jpeg" class="block w-full " alt="Wild Landscape" />
      </div>
      <div class="carousel-item relative float-left w-full">
        <img src="img/r1.jpeg" class="block w-full" alt="Camera" />
      </div>
      <div class="carousel-item relative float-left w-full">
        <img src="img/v3.jpeg" class="block w-full" alt="Exotic Fruits" />
      </div>
      <div class="carousel-item relative float-left w-full">
        <img src="img/r3.png" class="block w-full" alt="Exotic Fruits" />
      </div>

    </div>
    <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col">
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-24 h-full bg-purple-500"></div>
        </div>
        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
          <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0 drop-shadow-3xl">
            The Business For the Rural
          </h1>
          <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
            The craft like the beauty of nature and their Peoples own made handcrafts, objects would be in your hand.
            Dicover the products just through registering on our website.
          </p>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden shadow-xl hover:shadow-purple-400 hover:border-2 border-purple-200 hover:border-purple-400">
            <img alt="content" class="object-cover object-center h-full w-full" src="img/v1.jpeg" />
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
            Khajjiar
          </h2>
          <p class="text-base leading-relaxed mt-2">
            Khajjiar, being a small town in Himachal Pradesh, has a close-knit society which follows its traditions to
            the word. The people of this little town are hospitable and warm, and still stick to the old-world charm
            that the British heritage has left behind.

          </p>
          <a class="text-purple-500 inline-flex items-center mt-3">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden shadow-xl hover:shadow-purple-400 hover:border-2 border-purple-200 hover:border-purple-400">
            <img alt="content" class=" object-cover object-center h-full w-full" src="img/v3.jpeg" />
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
            Darchik
          </h2>
          <p class="text-base leading-relaxed mt-2">
            The inhabitants of this area have outstanding features, social life, ethnic culture and language. Many
            researchers believe that the ‘Aryans of Ladakh’ or the ‘Brokpas’ were a part of Alexander’s army and had
            come to the region over 2,000 years ago.
          </p>
          <a class="text-purple-500 inline-flex items-center mt-3">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
          <div class="rounded-lg h-64 overflow-hidden shadow-xl hover:shadow-purple-400 hover:border-2 border-purple-200 hover:border-purple-400">
            <img alt="content" class="object-cover object-center h-full w-full" src="img/v2.jpeg" />
          </div>
          <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
            Manlynneng
          </h2>
          <p class="text-base leading-relaxed mt-2 t">
            A small village in Meghalaya India. So what’s so special about this village? It is called “God’s own Garden”
            because of it’s cleanliness. Just an hour away from Mawlynnong is Dawki – known for it’s cleanliness and the
            transparent river
          </p>
          <a class="text-purple-500 inline-flex items-center mt-3">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
      <div class="lg:w-4/6 mx-auto">
        <div class="rounded-lg h-64 overflow-hidden shadow-xl hover:shadow-purple-400 hover:border-2 border-purple-200 hover:border-purple-400">
          <img alt="content" class="object-cover object-center h-full w-full" src="img/v5.jpeg" />
        </div>
        <div class="flex flex-col sm:flex-row mt-10">
          <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
              <img src="https://img.icons8.com/fluent/50/000000/village.png" />
            </div>
            <div class="flex flex-col items-center text-center justify-center">
              <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">
                Zero Valley
              </h2>
              <div class="w-12 h-1 bg-purple-500 rounded mt-2 mb-4"></div>
              <p class="text-base">
                Ziro is a town and the district headquarters of the Lower Subansiri district in the Indian state of Arunachal Pradesh.
              </p>
            </div>
          </div>
          <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            <p class="leading-relaxed text-lg mb-4">
              Apatanis have few unique special characteristic features which differ from other tribes in Arunachal Pradesh and India. Few of these special characteristic features are:

              (A) Apatanis practice permanent wet paddy cultivation whereas other tribes practice shifting cultivation called Jhom cultivation. (B) Apatanis cultivate permanent wet land cultivations whereas other tribes practice dry land cultivations by clearing the forests by burning the jungles. (C) Apatanis once practiced the art of facial tattoos.
            </p>
            <a class="text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
        <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">
          Lets discover some product here, Just click it...
        </h1>
        <a href="login.php">
          <button class="flex-shrink-0 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded-xl text-lg mt-10 sm:mt-0">
            Shop Now
          </button>
        </a>
      </div>
    </div>
  </section>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Rural Business</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
        © 2022 RuralBusiness —
        <a href="" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@vrushabhGawde</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>
  <script>
    const slider = document.querySelector(".gallery");
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener("mousedown", (e) => {
      isDown = true;
      slider.classList.add("active");
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener("mouseleave", (_) => {
      isDown = false;
      slider.classList.remove("active");
    });
    slider.addEventListener("mouseup", (_) => {
      isDown = false;
      slider.classList.remove("active");
    });
    slider.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const SCROLL_SPEED = 3;
      const walk = (x - startX) * SCROLL_SPEED;
      slider.scrollLeft = scrollLeft - walk;
    });
  </script>
  <script src="js/tailwind.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>


</body>

</html>