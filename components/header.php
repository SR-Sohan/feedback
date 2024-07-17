<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Feedback App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-white">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="./index.php" class="-m-1.5 p-1.5">
                    <span class="sr-only">TruthWhisper</span>
                    <span class="block font-bold text-lg bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text">TruthWhisper</span>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">


                <?php if (!isset($_SESSION['login'])) { ?>
                    <a href="./login.php" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
                <?php } else { ?>

                    <div class="relative">
                        <!-- Dropdown Button -->
                        <button id="dropdownButton" class="px-4 py-2 bg-blue-500 text-white rounded-md focus:outline-none flex items-center">
                            <?php echo $_SESSION['user'] ? $_SESSION['user'][0] : "Dashboard" ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.1} stroke="currentColor" class="w-4 h-4">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                            </svg>


                        </button>

                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden z-50">
                            <a href="dashboard.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dashboard</a>
                            <a href="feedback.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Share Feedback</a>
                            <a href="logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">TruthWhisper</span>
                        <span class="block font-bold text-xl bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text">TruthWhisper</span>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="py-6">
                            <a href="./login.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>



                            <!-- Dropdown Menu -->
                            <div id="dropdownMenu" class="mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                                <a href="#dashboard" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dashboard</a>
                                <a href="#logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>