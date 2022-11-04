<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome | {{env('APP_NAME')}}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5742" height="488.408" viewBox="0 0 5742 1788.408">
                        <g id="LOGO_PELINDO_ANPER_BB" data-name="LOGO PELINDO ANPER BB" transform="translate(-493 -283.592)">
                            <g id="LOGO_PELINDO_ICON" data-name="LOGO PELINDO ICON" transform="translate(-13911 6965)">
                            <rect id="Rectangle_2069" data-name="Rectangle 2069" width="98" height="260" transform="translate(14415 -6021)" fill="#0475bc"/>
                            <rect id="Rectangle_2079" data-name="Rectangle 2079" width="260" height="260" transform="translate(14513 -5761)" fill="#32b6e9"/>
                            <path id="Subtraction_15" data-name="Subtraction 15" d="M260.19,660.408H.017C.005,658.932,0,657.5,0,656.142V529a537.571,537.571,0,0,1,2.731-54.087,530.405,530.405,0,0,1,8.016-52.525c3.485-17.034,7.871-34.091,13.036-50.7,5.1-16.41,11.088-32.763,17.789-48.6,6.636-15.69,14.131-31.248,22.276-46.242,8.087-14.887,17-29.561,26.5-43.616,9.452-13.991,19.7-27.692,30.453-40.725,10.736-13.009,22.223-25.648,34.142-37.566S179.5,131.529,192.506,120.8c13.042-10.762,26.743-21.008,40.724-30.453,14.06-9.5,28.735-18.413,43.616-26.5,15-8.146,30.555-15.641,46.243-22.276,15.837-6.7,32.189-12.684,48.6-17.789,16.6-5.162,33.655-9.548,50.7-13.035a530.185,530.185,0,0,1,52.525-8.016A537.318,537.318,0,0,1,529,0H710.8V254.384H539.19c-153.841,0-279,125.159-279,279V660.407Z" transform="translate(14513 -6681.408)" fill="#32b6e9"/>
                            <path id="Subtraction_19" data-name="Subtraction 19" d="M171.811,920.158H-2v-260.2H169.618c153.841,0,279-125.159,279-279V0H679.133A29.942,29.942,0,0,1,708.81,29.906V383.158a545.737,545.737,0,0,1-2.773,54.905,538.624,538.624,0,0,1-8.138,53.319c-3.538,17.294-7.99,34.609-13.232,51.464-5.185,16.667-11.261,33.266-18.058,49.337C659.873,608.112,652.265,623.9,644,639.124c-8.21,15.113-17.26,30.01-26.9,44.276-9.6,14.206-20,28.115-30.913,41.341-10.892,13.2-22.553,26.027-34.659,38.134s-24.939,23.769-38.135,34.659c-13.233,10.921-27.141,21.322-41.34,30.914-14.271,9.641-29.168,18.691-44.275,26.9-15.216,8.265-31.01,15.873-46.942,22.612-16.078,6.8-32.677,12.876-49.337,18.058-16.851,5.241-34.166,9.693-51.463,13.233a538.527,538.527,0,0,1-53.32,8.138A545.526,545.526,0,0,1,171.811,920.158Z" transform="translate(14775.189 -6681.407)" fill="#0475bc"/>
                            </g>
                            <g id="PELINDO_FONT" data-name="PELINDO FONT">
                            <path id="Path_7" data-name="Path 7" d="M226.811-545.675H711.75V-664.3H226.811c-98.7,0-178.412,80.665-178.412,179.361v305.578C48.4-80.665,128.115,0,226.811,0H711.75V-118.625H226.811c-33.215,0-60.736-27.521-60.736-60.736V-304.629h427.05V-423.254H166.075v-61.685C166.075-518.154,193.6-545.675,226.811-545.675Z" transform="translate(2463.471 1201.648)" fill="#0475bc"/>
                            <path id="Subtraction_13" data-name="Subtraction 13" d="M118.626,666.3H0V0H418.509a150.89,150.89,0,0,1,36,4.36A156.39,156.39,0,0,1,488.023,16.87a171.281,171.281,0,0,1,30.309,19.8A191.4,191.4,0,0,1,544.726,62.9l.949,2.288A212.5,212.5,0,0,1,567.443,97a231.669,231.669,0,0,1,16.429,36.526,247.377,247.377,0,0,1,10.38,40.387A260.564,260.564,0,0,1,597.87,217.3c0,42.07-10.05,82.9-29.063,118.086a211.268,211.268,0,0,1-32.993,45.64,179.357,179.357,0,0,1-42.334,32.989,142.066,142.066,0,0,1-24.91,11.151,137.756,137.756,0,0,1-26.336,6H436.54v1.144H118.625V666.3h0Zm-.024-541v183h297a65.073,65.073,0,0,0,65-65v-53a65.073,65.073,0,0,0-65-65Z" transform="translate(1837 537.699)" fill="#0475bc" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Path_6" data-name="Path 6" d="M246.74-118.625a94.62,94.62,0,0,1-80.665-80.665V-663.351H47.45v452.673a206.353,206.353,0,0,0,21.827,93c19.929,41.756,54.093,75.92,95.849,96.8a206.353,206.353,0,0,0,93,21.827H595.023V-117.676Z" transform="translate(3204.42 1201.05)" fill="#0475bc"/>
                            <path id="Path_3" data-name="Path 3" d="M166.075,0V-664.3H47.45V0Z" transform="translate(3829.846 1202)" fill="#0475bc"/>
                            <path id="Path_4" data-name="Path 4" d="M593.125-664.3v423.254l-427.05-329.3L47.45-661.453V.949H166.075V-419.458l427.05,329.3L711.75.949v-664.3Z" transform="translate(4026.322 1201.05)" fill="#0475bc"/>
                            <path id="Path_5" data-name="Path 5" d="M47.45-664.3V0H379.6A326.147,326.147,0,0,0,613.054-97.747c6.643-6.643,13.286-13.286,18.98-19.929A329.405,329.405,0,0,0,710.8-332.15c0-183.157-148.993-331.2-332.15-331.2ZM165.126-544.726H378.651c117.676,0,213.525,95.849,213.525,213.525S496.327-117.676,378.651-117.676H165.126Z" transform="translate(4767.42 1202)" fill="#0475bc"/>
                            <path id="Path_2" data-name="Path 2" d="M355.875-664.3c-183.157,0-332.15,148.993-332.15,332.15S172.718,0,355.875,0s332.15-148.993,332.15-332.15S539.032-664.3,355.875-664.3Zm0,545.675c-117.676,0-213.525-95.849-213.525-213.525S238.2-545.675,355.875-545.675,569.4-449.826,569.4-332.15,473.551-118.625,355.875-118.625Z" transform="translate(5531.145 1202)" fill="#0475bc"/>
                            </g>
                            <text id="EKOSISTEM_DIGITAL_INFORMASI" data-name="EKOSISTEM DIGITAL INFORMASI" transform="translate(3364 1977)" fill="#ef4349" font-size="350" font-family="PragmaticaMedium, Pragmatica" letter-spacing="0.02em"><tspan x="-2870.525" y="0">EKOSISTEM DIGITAL INFORMASI</tspan></text>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="display: none">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            {{-- <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg> --}}

                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 20 20" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
							    <path d="M17.35,2.219h-5.934c-0.115,0-0.225,0.045-0.307,0.128l-8.762,8.762c-0.171,0.168-0.171,0.443,0,0.611l5.933,5.934c0.167,0.171,0.443,0.169,0.612,0l8.762-8.763c0.083-0.083,0.128-0.192,0.128-0.307V2.651C17.781,2.414,17.587,2.219,17.35,2.219M16.916,8.405l-8.332,8.332l-5.321-5.321l8.333-8.332h5.32V8.405z M13.891,4.367c-0.957,0-1.729,0.772-1.729,1.729c0,0.957,0.771,1.729,1.729,1.729s1.729-0.772,1.729-1.729C15.619,5.14,14.848,4.367,13.891,4.367 M14.502,6.708c-0.326,0.326-0.896,0.326-1.223,0c-0.338-0.342-0.338-0.882,0-1.224c0.342-0.337,0.881-0.337,1.223,0C14.84,5.826,14.84,6.366,14.502,6.708"></path>
						    </svg>

                            <a href="https://edi-indonesia.co.id" target="blank" class="ml-1 underline">
                                EDI Indonesia
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="http://192.168.5.208:7990/projects/WIPO/repos/master.project" target="blank" class="ml-1 underline">
                                Master Project
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
