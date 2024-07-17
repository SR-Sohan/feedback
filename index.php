<?php require "components/header.php" ?>

<main class="">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <img src="./images/beams.jpg" alt="" class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" width="1308" />
        <div class="absolute inset-0 bg-[url(./images/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
        <div class="relative bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
            <div class="mx-auto max-w-md text-center px-">
                <h1 class="block font-bold text-3xl bg-gradient-to-r from-blue-600 via-green-500 to-indigo-400 inline-block text-transparent bg-clip-text">TruthWhisper</h1>
                <div class="divide-y divide-gray-300/50">
                    <div class="space-y-6 py-8 text-base leading-7 text-gray-600 px-12">
                        <h2>A better way to get anonymous feedback!</h2>
                        <div class="flex justify-center">
                            <img class="max-h-72" src="./images/letter.png" alt="">
                        </div>
                    </div>
                    <div class="pt-8 text-base font-semibold leading-7">
                        <p class="text-gray-900">Sounds interesting?</p>
                        <p>
                            <a href="./login.php" class="text-sky-500 hover:text-sky-600">Let's start!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "components/footer.php" ?>