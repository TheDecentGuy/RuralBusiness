<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Rural Business | Admin</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-teal-400 dark:hidden min-h-75"></div>

  <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-2xl shadow-teal-400 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
      <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700">

        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Rural Business</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">

        <li class="mt-0.5 w-full">
          <a class="hover:bg-indigo-100 rounded-lg py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../index.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
          </a>
        </li>


        <li class="mt-0.5 w-full">
          <a class="hover:bg-indigo-100 rounded-lg py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="tables.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tables</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" py-2.7 bg-blue-500/13  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="billing.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Billing</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->

    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="text-white opacity-50" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="mb-0 font-bold text-white capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 >
        <li class=" flex items-center">
          <a href="../index.php" class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
            <i class="fa fa-user sm:mr-1"></i>
            <span class="hidden sm:inline">Admin</span>
          </a>
          </li>
          <li class="flex items-center pl-4 xl:hidden">
            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger="">
              <div class="w-4.5 overflow-hidden">
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
              </div>
            </a>
          </li>
        </div>
      </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
      <!-- content -->

      <div class="flex flex-wrap -mx-3">

        <div class="w-full max-w-full px-3">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-2xl shadow-indigo-400 rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <div class="flex flex-wrap -mx-3">
                <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                  <h6 class="mb-0 dark:text-white">Invoices</h6>
                </div>

              </div>
            </div>
            <div class="flex-auto p-4 pb-0">
              <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                  <div class="flex flex-col">
                    <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2020
                    </h6>
                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">#MS-415646</span>
                  </div>
                  <div class="flex items-center text-sm leading-normal dark:text-white/80">
                    $180
                    <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                  </div>
                </li>
                <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                  <div class="flex flex-col">
                    <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">February, 10,
                      2021</h6>
                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">#RV-126749</span>
                  </div>
                  <div class="flex items-center text-sm leading-normal dark:text-white/80">
                    $250
                    <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                  </div>
                </li>
                <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                  <div class="flex flex-col">
                    <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">April, 05, 2020
                    </h6>
                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">#FB-212562</span>
                  </div>
                  <div class="flex items-center text-sm leading-normal dark:text-white/80">
                    $560
                    <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                  </div>
                </li>
                <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                  <div class="flex flex-col">
                    <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">June, 25, 2019
                    </h6>
                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">#QW-103578</span>
                  </div>
                  <div class="flex items-center text-sm leading-normal dark:text-white/80">
                    $120
                    <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                  </div>
                </li>
                <li class="relative flex justify-between px-4 py-2 pl-0 border-0 rounded-b-inherit rounded-xl text-inherit">
                  <div class="flex flex-col">
                    <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2019
                    </h6>
                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">#AR-803481</span>
                  </div>
                  <div class="flex items-center text-sm leading-normal dark:text-white/80">
                    $300
                    <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf"></i> PDF</button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class=" -mx-3">
        <div class="w-full px-3 mt-6  md:flex-none">
          <div class="relative flex flex-col w-full break-words bg-white border-0 shadow-2xl shadow-indigo-400  rounded-2xl bg-clip-border">
            <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
              <h6 class="mb-0 dark:text-white">Billing Information</h6>
            </div>
            <div class="flex-auto p-4 pt-6">
              <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                  <div class="flex flex-col">
                    <h6 class="mb-4 text-sm leading-normal dark:text-white">Oliver Liam</h6>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Viking Burrito</span></span>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">oliver@burrito.com</span></span>
                    <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                  </div>
                  <div class="ml-auto text-right">
                    <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>

                  </div>
                </li>
                <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50 dark:bg-slate-850">
                  <div class="flex flex-col">
                    <h6 class="mb-4 text-sm leading-normal dark:text-white">Lucas Harper</h6>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Stone Tech Zone</span></span>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">lucas@stone-tech.com</span></span>
                    <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                  </div>
                  <div class="ml-auto text-right">
                    <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>

                  </div>
                </li>
                <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                  <div class="flex flex-col">
                    <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Fiber Notion</span></span>
                    <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">ethan@fiber.com</span></span>
                    <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                  </div>
                  <div class="ml-auto text-right">
                    <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Delete</a>

                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                ©2022
                <a href="" class="font-semibold text-slate-700 dark:text-white" target="_blank">Rural Business</a>
                - @VrushabhDeepakGawde
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
              <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Rural Business</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    </div>
  </main>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

<script src="https://cdn.tailwindcss.com"></script>

</html>