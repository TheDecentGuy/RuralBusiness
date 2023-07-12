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
          <a class="py-2.7 bg-blue-500/13  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="tables.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tables</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" hover:bg-indigo-100 rounded-lg py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="billing.php">
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
      <!-- table 1 -->

      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-2xl shadow-indigo-400 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Users :</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Name</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Email</th>

                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Pass</th>
                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $select_query = "SELECT * from order_items ";
                    $result = mysqli_query($con, $select_query);



                    while ($data = mysqli_fetch_assoc($result)) {

                      $res = mysqli_query($con, "select * from products");

                      $product_data = mysqli_fetch_assoc($res);


                    ?>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>

                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal dark:text-white">Aditya more</h6>
                            </div>
                          </div>
                        </td>

                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                            adityamore@gmail.com</p>
                        </td>

                        <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">qerigy4q93t8fajidqfieofhqo</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-red-400">
                            Delete </a>
                        </td>
                      </tr>

                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Vendors Table  -->
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-2xl shadow-indigo-400 rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Vendors :</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Author</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Function</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Status</th>
                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Added</th>
                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div>

                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Akshay</h6>
                            <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                              xyz@gmail.com</p>
                          </div>
                        </div>
                      </td>

                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">Vendor</p>
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">
                        </p>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                      </td>
                      <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">23/04/18</span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <a href="javascript:;" class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                          Edit </a>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- card 2 -->

      <!-- <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Projects table</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table
                  class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th
                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Project</th>
                      <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Budget</th>
                      <th
                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Status</th>
                      <th
                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Completion</th>
                      <th
                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                      </th>
                    </tr>
                  </thead>
                  <tbody class="border-t">
                    <tr>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="spotify" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify</h6>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,500</p>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-invision.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="invision" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Invision</h6>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$5,000</p>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-jira.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="jira" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Jira</h6>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$3,400</p>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span
                          class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">30%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-red-600 to-orange-600 w-3/10 whitespace-nowrap"
                                role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="slack" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$1,000</p>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span
                          class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">0%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center w-0 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-webdev.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="webdev" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Webdev</h6>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$14,000</p>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">80%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center w-4/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <div class="flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-xd.svg"
                              class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                              alt="xd" />
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm leading-normal dark:text-white">Adobe XD</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">$2,300</p>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                      </td>
                      <td
                        class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <div class="flex items-center justify-center">
                          <span
                            class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                          <div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div
                                class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-green-600 to-lime-400 whitespace-nowrap"
                                role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                        <button
                          class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> -->


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