<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Product — Hero</title>

  <!-- Tailwind CDN for quick prototyping (replace with your build in prod) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* small custom styles for the phone mockup scroll (if used elsewhere) */
    .phone-scroller { max-height: 360px; overflow: hidden; }
    .phone-list { transition: transform .6s cubic-bezier(.22,.97,.36,1); }

    /* popover transitions */
    [data-popover].enter {
      opacity: 0; transform: translateY(6px) scale(.995);
      transition: opacity .18s ease, transform .18s ease;
    }
    [data-popover].enter-active { opacity: 1; transform: translateY(0) scale(1); }
    [data-popover].leave { opacity: 1; transform: translateY(0) scale(1); }
    [data-popover].leave-active { opacity: 0; transform: translateY(6px) scale(.995); transition: opacity .15s ease, transform .15s ease; }

    /* decorative faint grid overlay (optional) */
    .grid-overlay{
      background-image:
        linear-gradient(transparent 0 70%, rgba(255,255,255,0.01) 70%),
        repeating-linear-gradient(90deg, rgba(255,255,255,0.01) 0 1px, transparent 1px 48px),
        repeating-linear-gradient(0deg, rgba(255,255,255,0.01) 0 1px, transparent 1px 48px);
      background-size: 100% 100%, 48px 48px, 48px 48px;
    }
  </style>
</head>

<body class="antialiased bg-gray-900 text-gray-200">
<header class="bg-gray-900 text-gray-200">
  <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between gap-6">
    <!-- Brand -->
    <a href="#" class="flex items-center gap-3">
      <div class="w-8 h-8 rounded-md bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold">T</div>
      <span class="sr-only">Your Brand</span>
    </a>

    <!-- Desktop links -->
    <div class="hidden md:flex items-center gap-8">
      <div class="relative" id="nav-products-container">
        <button
          id="nav-products-btn"
          aria-expanded="false"
          aria-controls="nav-products-popover"
          class="inline-flex items-center gap-2 text-base font-medium text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"
        >
          <span>Marketplace</span>
          <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-4 h-4">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M5.22 8.22a.75.75 0 011.06 0L10 11.94l3.72-3.72a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.22 9.28a.75.75 0 010-1.06Z" />
          </svg>
        </button>

        <!-- MEGA POPOVER (initially hidden, pointer-events-none to avoid accidental hover interactions) -->
        <div
          id="nav-products-popover"
          class="absolute left-0 top-full mt-3 w-screen hidden justify-center bg-transparent pointer-events-none"
          data-popover
          aria-hidden="true"
        >
          <div
            class="pointer-events-auto w-full max-w-7xl mx-auto rounded-3xl bg-gray-800 text-sm text-gray-300 outline outline-1 outline-white/10 shadow-2xl overflow-hidden"
            role="menu"
            aria-label="Products menu"
          >
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 px-6 py-8 lg:px-8 lg:py-10">
              <!-- Column: Analytics -->
              <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
                <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-gray-400 group-hover:text-white">
                    <path d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-white">Analytics</h3>
                  <p class="text-gray-400 mt-1 text-sm">Get a better understanding of where your traffic is coming from</p>
                </div>
              </div>

              <!-- Column: Engagement -->
              <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
                <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-gray-400 group-hover:text-white">
                    <path d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-white">Engagement</h3>
                  <p class="text-gray-400 mt-1 text-sm">Speak directly to your customers</p>
                </div>
              </div>

              <!-- Column: Security -->
              <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
                <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-gray-400 group-hover:text-white">
                    <path d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-white">Security</h3>
                  <p class="text-gray-400 mt-1 text-sm">Your customers' data will be safe and secure</p>
                </div>
              </div>

              <!-- Column: Integrations -->
              <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
                <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-gray-400 group-hover:text-white">
                    <path d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-white">Integrations</h3>
                  <p class="text-gray-400 mt-1 text-sm">Connect with third-party tools</p>
                </div>
              </div>

              <!-- Column: Automations -->
              <div class="group flex flex-col items-start gap-y-3 hover:bg-white/5 rounded-2xl p-4 transition">
                <div class="flex items-center justify-center w-11 h-11 rounded-lg bg-gray-700/50 group-hover:bg-gray-700">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-gray-400 group-hover:text-white">
                    <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div>
                  <h3 class="font-semibold text-white">Automations</h3>
                  <p class="text-gray-400 mt-1 text-sm">Build funnels that convert</p>
                </div>
              </div>
            </div>

            <!-- footer buttons -->
            <div class="flex justify-center divide-x divide-white/10 bg-gray-700/50 text-white text-sm font-semibold">
              <a href="#" class="flex-1 flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50">Watch demo</a>
              <a href="#" class="flex-1 flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50">Contact sales</a>
              <a href="#" class="flex-1 flex items-center justify-center gap-2 p-3 hover:bg-gray-700/50">View all products</a>
            </div>
          </div>
        </div>
      </div>

      <!-- other links -->
      <a href="/" class="text-base font-medium text-gray-300 hover:text-white">Home</a>
      <a href="/about" class="text-base font-medium text-gray-300 hover:text-white">About</a>
      <a href="/contact" class="text-base font-medium text-gray-300 hover:text-white">Contact Us</a>
    </div>

    <!-- Right side -->
    <div class="flex items-center gap-4">
      <a href="#" class="text-sm text-gray-300 hover:text-white hidden md:inline">Log in →</a>

      <!-- Mobile toggle -->
      <button id="nav-mobile-toggle" class="md:hidden inline-flex items-center justify-center p-2 rounded bg-gray-800/60 border border-gray-700" aria-expanded="false" aria-controls="mobile-menu">
        <svg id="nav-mobile-icon" class="w-6 h-6 text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </nav>

  <!-- Mobile menu (collapses) -->
  <div id="mobile-menu" class="md:hidden hidden border-t border-gray-800 bg-gray-900/95" role="menu" aria-hidden="true">
    <div class="px-4 py-4 space-y-3">
      <a href="#" class="block text-gray-200 font-medium">Product</a>

      <!-- mobile expansion for products -->
      <details class="bg-gray-800/40 rounded-md p-3">
        <summary class="cursor-pointer font-semibold text-gray-200">Products</summary>
        <div class="mt-3 space-y-2">
          <a href="#" class="block text-sm text-gray-300 pl-2">Analytics</a>
          <a href="#" class="block text-sm text-gray-300 pl-2">Engagement</a>
          <a href="#" class="block text-sm text-gray-300 pl-2">Security</a>
          <a href="#" class="block text-sm text-gray-300 pl-2">Integrations</a>
          <a href="#" class="block text-sm text-gray-300 pl-2">Automations</a>
        </div>
      </details>

      <a href="/" class="block text-gray-200 font-medium">Home</a>
      <a href="/about" class="block text-gray-200 font-medium">About</a>
      <a href="/contact" class="block text-gray-200 font-medium">Contact Us</a>
      <a href="#" class="block text-indigo-500 font-semibold">Log in →</a>
    </div>
  </div>
</header>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- your blade slot / page content goes here -->
    {{ $slot }}
  </div>
</main>

<!-- Small JS: popover open/close, close on outside click & Esc, mobile toggle -->
<script>
  (function () {
    const btn = document.getElementById('nav-products-btn');
    const pop = document.getElementById('nav-products-popover');
    const container = document.getElementById('nav-products-container');
    const mobileToggle = document.getElementById('nav-mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Utility: show/hide popover with aria updates + simple transition classes
    function setPopover(open) {
      if (open) {
        pop.classList.remove('hidden');
        pop.classList.remove('pointer-events-none');
        pop.setAttribute('aria-hidden', 'false');
        btn.setAttribute('aria-expanded', 'true');

        // trigger enter transition
        pop.classList.add('enter');
        requestAnimationFrame(() => pop.classList.add('enter-active'));
        pop.classList.remove('leave', 'leave-active');
      } else {
        // start leave transition
        pop.classList.remove('enter', 'enter-active');
        pop.classList.add('leave');
        requestAnimationFrame(() => pop.classList.add('leave-active'));

        // hide after transition
        setTimeout(() => {
          pop.classList.add('hidden');
          pop.classList.add('pointer-events-none');
          pop.setAttribute('aria-hidden', 'true');
        }, 180);

        btn.setAttribute('aria-expanded', 'false');
      }
    }

    // Toggle on button click
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = btn.getAttribute('aria-expanded') === 'true';
      setPopover(!isOpen);
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!container.contains(e.target)) setPopover(false);
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') setPopover(false);
    });

    // Optional: keep popover open while hovering — uncomment to enable hover (desktop only)
    // container.addEventListener('mouseenter', () => setPopover(true));
    // container.addEventListener('mouseleave', () => setPopover(false));

    // Mobile menu toggle
    mobileToggle.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden', !isHidden);
      mobileToggle.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    });

    // Close mobile menu when resizing up to desktop to keep UI consistent
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        mobileMenu.classList.add('hidden');
        mobileToggle.setAttribute('aria-expanded', 'false');
      }
    });
  })();
</script>
</body>
</html>
