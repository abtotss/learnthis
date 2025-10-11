<!doctype html>
<html lang="en" class="h-full bg-gray-350">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
   <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<div class="min-h-full">
  <nav class="bg-gray-800/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://i.ibb.co/V0f6SDZ9/husslle.jpg" alt="husslle" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
              <a href="/" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
            </div>
          </div>
          <div class="relative">
  <button popovertarget="desktop-menu-solution" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">
    <span>Products</span>
    <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M5.22 8.22a.75.75 0 011.06 0L10 11.94l3.72-3.72a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.22 9.28a.75.75 0 010-1.06Z" />
    </svg>
  </button>

  <!-- Full width popover -->
  <el-popover id="desktop-menu-solutions"
    anchor="bottom"
    popover
    class="w-screen left-0 bg-transparent px-6 py-6 transition duration-200 backdrop:bg-transparent open:flex justify-center">

    <div class="w-full max-w-7xl mx-auto rounded-3xl bg-gray-800 text-sm text-gray-300 outline outline-1 outline-white/10 shadow-2xl">
      <div class="grid grid-cols-5 gap-6 px-8 py-10">
        <!-- Analytics -->
        <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
          <div class="flex items-center justify-center size-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              class="size-6 text-gray-400 group-hover:text-white">
              <path d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-white">Analytics</h3>
            <p class="text-gray-400 mt-1">Get a better understanding of where your traffic is coming from</p>
          </div>
        </div>

        <!-- Engagement -->
        <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
          <div class="flex items-center justify-center size-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              class="size-6 text-gray-400 group-hover:text-white">
              <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-white">Engagement</h3>
            <p class="text-gray-400 mt-1">Speak directly to your customers with our engagement tool</p>
          </div>
        </div>

        <!-- Security -->
        <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
          <div class="flex items-center justify-center size-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              class="size-6 text-gray-400 group-hover:text-white">
              <path
                d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-white">Security</h3>
            <p class="text-gray-400 mt-1">Your customers' data will be safe and secure</p>
          </div>
        </div>

        <!-- Integrations -->
        <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
          <div class="flex items-center justify-center size-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              class="size-6 text-gray-400 group-hover:text-white">
              <path
                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-white">Integrations</h3>
            <p class="text-gray-400 mt-1">Connect with third-party tools that you're already using</p>
          </div>
        </div>

        <!-- Automations -->
        <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
          <div class="flex items-center justify-center size-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              class="size-6 text-gray-400 group-hover:text-white">
              <path
                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-white">Automations</h3>
            <p class="text-gray-400 mt-1">Build strategic funnels that will convert</p>
          </div>
        </div>
      </div>

      <!-- Bottom bar -->
      <div class="flex justify-center divide-x divide-white/10 bg-gray-700/50 text-white text-sm font-semibold">
        <a href="#" class="flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50 w-full">
          <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-400">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M2 10a8 8 0 1116 0A8 8 0 012 10Zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658Z" />
          </svg>
          Watch demo
        </a>
        <a href="#" class="flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50 w-full">
          <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-400">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15a13.022 13.022 0 01-12.57-9.174A13.019 13.019 0 012 5V3.5Z" />
          </svg>
          Contact sales
        </a>
        <a href="#" class="flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50 w-full">
          <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 text-gray-400">
            <path d="M6 4h8a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2Z" />
          </svg>
          View all products
        </a>
      </div>
    </div>
  </el-popover>
</div>

        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
              </button>
            </el-dropdown>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <a href="/" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Home</a>
        <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
        <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Contact</a>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">Limo</div>
            <div class="text-sm font-medium text-gray-400">me@limo.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </el-disclosure>
  </nav>

  <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-white">{{ $pageheader }}</h1>
    </div>
  </header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>
</body>
</html>
