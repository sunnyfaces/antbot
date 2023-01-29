<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    {{-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif --}}
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:pt-0">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                    <g clip-path="url(#clip0)" fill="#ffd152">
                        <path d="M160.289686,4.93255257 C161.7391,7.54149853 161.255962,8.1212643 155.071794,11.1167208 C142.316947,17.3975166 132.074418,32.374799 123.184676,57.9811205 C119.802709,67.7405109 114.48819,87.0660366 115.067956,87.5491747 C115.261211,87.6458024 119.222944,88.9019615 124.054325,90.4480036 C128.789079,91.897418 134.393481,93.9265982 136.422662,94.9895021 C138.451842,95.9557784 142.60683,96.9220547 145.795541,97.1153099 C167.826641,98.1782139 181.451136,124.267673 171.015352,145.429124 C168.696289,150.06725 165.79746,153.449217 157.197602,161.372683 C145.505659,172.098349 137.002427,177.219614 128.499196,178.475773 C124.923974,179.055539 123.377932,179.925187 120.479103,183.210527 C114.391562,190.167716 105.211938,192.390151 105.211938,186.979004 C105.211938,183.403782 102.699619,178.18589 100.573811,177.026359 C97.9648654,175.673572 87.3358263,175.673572 84.7268804,177.026359 C82.6010726,178.18589 80.0887542,183.403782 80.0887542,186.979004 C80.0887542,192.390151 70.9091295,190.167716 64.8215889,183.210527 C61.9227601,179.925187 60.376718,179.055539 56.8014958,178.475773 C48.2982645,177.219614 39.7950332,172.098349 28.1030902,161.372683 C19.309976,153.255962 16.6044024,150.163878 14.0920841,145.042614 C11.2898829,139.438211 11,137.988797 11,130.065331 C11,122.721631 11.4831381,120.499196 13.608946,115.957697 C18.7302103,104.748893 28.4896007,97.6950757 39.3118951,97.1153099 C42.5972344,96.9220547 46.9454777,95.8591508 50.1341895,94.4097363 C53.0330183,93.0569496 58.9273036,91.0277694 63.1789193,89.8682378 C67.4305349,88.6120787 71.0057572,87.5491747 71.1990124,87.4525471 C71.7787782,87.0660366 66.4642586,67.6438833 63.0822916,57.9811205 C53.902667,31.601778 42.8871173,15.8514746 29.6491323,10.2470721 C27.7165797,9.47405109 25.8806548,8.41114718 25.4941442,7.83138141 C24.6244956,6.47859462 26.7503034,3 28.3929731,3 C34.0940032,3 47.4286159,13.6290391 53.9992946,23.1951743 C63.1789193,36.8196699 72.4551716,60.3001836 76.513532,80.3021026 L77.7696911,86.2930156 L108.497277,86.2930156 L109.753436,80.3021026 C113.811796,60.3001836 123.088049,36.8196699 132.267673,23.1951743 C137.002427,16.3346127 146.27868,7.73475379 151.97971,5.12580782 C157.487484,2.51686186 158.936899,2.51686186 160.289686,4.93255257 Z M65.59461,96.052406 C61.0531114,97.4051928 55.8352195,99.1444901 53.902667,100.014139 L50.4240723,101.463553 L53.7094117,108.13086 C59.7969523,120.209313 59.0239313,134.413574 51.7768591,145.235869 C48.2016369,150.453761 42.6938621,155.091887 37.9591083,156.831184 C36.1231834,157.41095 34.6737689,158.280599 34.6737689,158.570482 C34.6737689,159.730013 45.6893186,167.460223 49.8443066,169.392776 C52.066742,170.359052 56.4149853,171.615211 59.5070694,172.194977 C64.4350784,173.161253 65.59461,173.837647 69.5563427,178.18589 L74.0012136,183.113899 L74.677607,180.311698 C76.513532,173.064626 82.6977002,169.199521 92.6503459,169.199521 C102.602992,169.199521 108.78716,173.064626 110.623085,180.311698 L111.299478,183.113899 L115.744349,178.18589 C119.706082,173.837647 120.865613,173.161253 125.793622,172.194977 C128.885706,171.615211 133.23395,170.359052 135.456385,169.392776 C139.611373,167.460223 150.626923,159.730013 150.626923,158.570482 C150.626923,158.280599 149.177508,157.41095 147.341583,156.831184 C142.60683,155.091887 137.099055,150.453761 133.523833,145.235869 C126.276761,134.413574 125.50374,120.209313 131.59128,108.13086 L134.876619,101.463553 L131.398025,100.014139 C117.966784,94.4097363 108.78716,92.8636943 89.751517,93.2502048 C76.0303938,93.5400877 72.6484268,93.9265982 65.59461,96.052406 Z M139.418118,107.261211 C132.557556,117.793622 132.557556,132.094511 139.611373,142.33704 C142.413574,146.298773 148.211232,150.260505 153.622379,151.806548 C156.617836,152.676196 157.004346,152.482941 160.966079,148.424581 C175.556851,133.157415 165.121067,103.782616 145.119148,103.492733 C142.510202,103.492733 141.543926,104.169127 139.418118,107.261211 Z M34.383886,104.555637 C32.3547058,105.135403 28.9727389,107.164583 26.846931,109.097136 C15.3482433,119.339664 14.1887117,137.795541 24.3346127,148.424581 C28.2963455,152.482941 28.682856,152.676196 31.6783125,151.806548 C37.0894596,150.260505 42.8871173,146.298773 45.6893186,142.33704 C52.7431354,132.094511 52.7431354,117.793622 45.8825738,107.261211 C43.0803726,103.106223 41.14782,102.623085 34.383886,104.555637 Z M152.559475,157.121067 C152.559475,157.894088 153.139241,158.570482 153.912262,158.570482 C154.588656,158.570482 155.748187,157.894088 156.424581,157.121067 C157.487484,155.864908 157.197602,155.671653 155.071794,155.671653 C153.525752,155.671653 152.559475,156.154791 152.559475,157.121067 Z M107.434373,145.719007 C109.850064,149.970623 108.593905,155.188515 104.922055,156.541301 C100.670439,158.087343 100.283929,156.734557 103.279385,150.743644 C106.178214,145.042614 106.661352,144.462848 107.434373,145.719007 Z M82.9875831,150.840271 L85.8864119,156.637929 L82.9875831,156.637929 C79.2191056,156.637929 76.9000425,153.35259 77.7696911,149.004346 C78.1562017,147.361677 78.7359674,145.719007 79.2191056,145.429124 C79.7022437,145.235869 81.3449134,147.554932 82.9875831,150.840271 Z" id="public/img/svg/ant-logo-svg"></path>
                        <path d="M285.943825,164.555208 L235.884464,164.555208 L227.151232,185.012504 C226.332936,186.740017 225.469192,188.012903 224.559975,188.831199 C223.650757,189.649495 222.468792,190.058637 221.014044,190.058637 C219.559295,190.058637 218.40006,189.717685 217.536303,189.035772 C216.672546,188.353859 216.172484,187.444655 216.036102,186.308132 C215.899719,185.17161 216.14975,183.875995 216.786202,182.421246 L254.291244,97.0461329 C255.10954,95.2276975 256.086935,93.9320818 257.223457,93.1592467 C258.359979,92.3864117 259.610134,92 260.973961,92 C262.337787,92 263.587943,92.3864117 264.724465,93.1592467 C265.860987,93.9320818 266.792921,95.2276975 267.520295,97.0461329 L305.161719,182.421246 C305.889093,183.875995 306.184585,185.19434 306.048202,186.376323 C305.911819,187.558306 305.434487,188.46751 304.616191,189.103963 C303.797895,189.740415 302.66139,190.058637 301.206642,190.058637 C299.57005,190.058637 298.251704,189.626765 297.251565,188.763008 C296.251425,187.899251 295.433142,186.649096 294.796689,185.012504 L285.943825,164.555208 Z M239.980853,155.144852 L281.967068,155.144852 L261.110343,106.047343 L260.837579,106.047343 L239.980853,155.144852 Z M331.777446,134.134547 C333.67504,130.525286 336.289013,127.686507 339.61941,125.618156 C343.938194,122.935964 348.916086,121.594888 354.553235,121.594888 C359.826698,121.594888 364.213608,122.549552 367.714096,124.458909 C371.214584,126.368266 373.828545,129.254989 375.556059,133.119164 C377.283572,136.983339 378.147316,141.870311 378.147316,147.780226 L378.147316,184.330594 C378.147316,186.149029 377.669984,187.558295 376.715306,188.558435 C375.760627,189.558574 374.419551,190.058637 372.692038,190.058637 C370.873602,190.058637 369.487066,189.558574 368.532387,188.558435 C367.577709,187.558295 367.100377,186.149029 367.100377,184.330594 L367.100377,148.462136 C367.100377,142.279455 365.895681,137.756165 363.486255,134.89213 C361.076828,132.028094 357.235441,130.596098 351.961978,130.596098 C345.87022,130.596098 341.028708,132.482696 337.437298,136.255949 C333.845888,140.029203 332.05021,145.052555 332.05021,151.326157 L332.05021,184.330594 C332.05021,188.149308 330.186342,190.058637 326.45855,190.058637 C324.640114,190.058637 323.276308,189.558574 322.367091,188.558435 C321.457873,187.558295 321.003271,186.149029 321.003271,184.330594 L321.003271,127.459312 C321.003271,125.640877 321.457873,124.254341 322.367091,123.299662 C323.276308,122.344984 324.594654,121.867651 326.322168,121.867651 C328.049681,121.867651 329.390757,122.344984 330.345436,123.299662 C331.300114,124.254341 331.777446,125.640877 331.777446,127.459312 L331.777446,134.134547 Z M425.067509,190.331401 C419.884968,190.331401 415.543519,189.399466 412.043031,187.53557 C408.542543,185.671674 405.928581,182.944062 404.201067,179.352652 C402.473554,175.761242 401.60981,171.374333 401.60981,166.191792 L401.60981,131.414389 L392.472218,131.414389 C390.926548,131.414389 389.744583,131.027978 388.926287,130.255143 C388.107991,129.482308 387.698849,128.413993 387.698849,127.050166 C387.698849,125.68634 388.107991,124.640755 388.926287,123.913381 C389.744583,123.186007 390.926548,122.822325 392.472218,122.822325 L401.60981,122.822325 L401.60981,107.138399 C401.60981,105.319963 402.109872,103.933427 403.110012,102.978749 C404.110151,102.02407 405.473957,101.546738 407.201471,101.546738 C408.928984,101.546738 410.27006,102.02407 411.224739,102.978749 C412.179417,103.933427 412.656749,105.319963 412.656749,107.138399 L412.656749,122.822325 L429.840878,122.822325 C431.386548,122.822325 432.568513,123.186007 433.386809,123.913381 C434.205105,124.640755 434.614247,125.68634 434.614247,127.050166 C434.614247,128.413993 434.205105,129.482308 433.386809,130.255143 C432.568513,131.027978 431.386548,131.414389 429.840878,131.414389 L412.656749,131.414389 L412.656749,165.100736 C412.656749,170.283277 413.747794,174.215584 415.929917,176.897776 C418.112039,179.579969 421.657935,180.921045 426.56771,180.921045 C428.295224,180.921045 429.772681,180.739204 431.000124,180.375517 C432.227568,180.01183 433.250423,179.829989 434.068719,179.829989 C434.887015,179.739067 435.568918,180.011828 436.114448,180.648281 C436.659979,181.284733 436.93274,182.375778 436.93274,183.921448 C436.93274,185.012509 436.728169,186.012634 436.319021,186.921851 C435.909873,187.831069 435.20524,188.467512 434.205101,188.831199 C433.11404,189.194886 431.682043,189.535837 429.909069,189.854064 C428.136094,190.17229 426.522257,190.331401 425.067509,190.331401 Z M457.126861,177.270801 L457.126861,184.330594 C457.126861,186.149029 456.649529,187.558295 455.69485,188.558435 C454.740172,189.558574 453.399096,190.058637 451.671582,190.058637 C449.853147,190.058637 448.489341,189.558574 447.580123,188.558435 C446.670906,187.558295 446.216304,186.149029 446.216304,184.330594 L446.216304,97.5916608 C446.216304,95.7732254 446.670906,94.3866893 447.580123,93.4320107 C448.489341,92.4773321 449.853147,92 451.671582,92 C453.399096,92 454.762902,92.4773321 455.763041,93.4320107 C456.763181,94.3866893 457.263243,95.7732254 457.263243,97.5916608 L457.263243,134.168473 C458.925121,130.939223 461.289065,128.248245 464.355106,126.095493 C468.628429,123.095074 473.765432,121.594888 479.766268,121.594888 C485.767105,121.594888 490.949568,122.981424 495.313813,125.754538 C499.678058,128.527652 503.064843,132.482689 505.47427,137.619769 C507.883696,142.756849 509.088392,148.871246 509.088392,155.963144 C509.088392,162.96412 507.883696,169.033057 505.47427,174.170137 C503.064843,179.307217 499.655328,183.284985 495.245622,186.103559 C490.835916,188.922134 485.676183,190.331401 479.766268,190.331401 C473.765432,190.331401 468.605699,188.785754 464.286915,185.694414 C461.139807,183.441747 458.753133,180.633892 457.126861,177.270801 Z M477.447775,181.466572 C481.630176,181.466572 485.244262,180.466448 488.290141,178.466169 C491.336021,176.46589 493.699951,173.556437 495.382004,169.737723 C497.064057,165.919009 497.90507,161.327528 497.90507,155.963144 C497.90507,147.689263 496.063932,141.370295 492.3816,137.00605 C488.699269,132.641805 483.721377,130.459716 477.447775,130.459716 C473.356295,130.459716 469.764939,131.43711 466.673599,133.391928 C463.582259,135.346746 461.195598,138.210739 459.513546,141.983992 C457.831493,145.757245 456.990479,150.416916 456.990479,155.963144 C456.990479,164.146103 458.854347,170.442341 462.58214,174.852047 C466.309932,179.261753 471.265094,181.466572 477.447775,181.466572 Z M553.280945,190.331401 C546.825499,190.331401 541.233894,188.922134 536.505963,186.103559 C531.778031,183.284985 528.118484,179.307217 525.527214,174.170137 C522.935944,169.033057 521.640328,162.96412 521.640328,155.963144 C521.640328,150.689681 522.367691,145.93909 523.822439,141.711228 C525.277188,137.483366 527.413817,133.86928 530.232392,130.868862 C533.050967,127.868443 536.392292,125.572703 540.256467,123.981572 C544.120642,122.390441 548.462091,121.594888 553.280945,121.594888 C559.73639,121.594888 565.327995,123.004154 570.055927,125.822729 C574.783859,128.641303 578.443405,132.619071 581.034676,137.756151 C583.625946,142.893231 584.921562,148.962168 584.921562,155.963144 C584.921562,161.236607 584.194199,165.964468 582.73945,170.146869 C581.284702,174.32927 579.148073,177.943356 576.329498,180.989236 C573.510923,184.035115 570.169598,186.353585 566.305423,187.944716 C562.441248,189.535847 558.099799,190.331401 553.280945,190.331401 Z M553.280945,181.466572 C557.372424,181.466572 560.96378,180.466448 564.055121,178.466169 C567.146461,176.46589 569.533121,173.556437 571.215174,169.737723 C572.897227,165.919009 573.73824,161.327528 573.73824,155.963144 C573.73824,147.689263 571.897102,141.370295 568.214771,137.00605 C564.532439,132.641805 559.554547,130.459716 553.280945,130.459716 C549.098544,130.459716 545.484457,131.43711 542.438578,133.391928 C539.392699,135.346746 537.028768,138.210739 535.346716,141.983992 C533.664663,145.757245 532.823649,150.416916 532.823649,155.963144 C532.823649,164.146103 534.687518,170.442341 538.41531,174.852047 C542.143103,179.261753 547.098265,181.466572 553.280945,181.466572 Z M628.134769,190.331401 C622.952228,190.331401 618.610779,189.399466 615.11029,187.53557 C611.609802,185.671674 608.995841,182.944062 607.268327,179.352652 C605.540814,175.761242 604.67707,171.374333 604.67707,166.191792 L604.67707,131.414389 L595.539478,131.414389 C593.993808,131.414389 592.811842,131.027978 591.993546,130.255143 C591.175251,129.482308 590.766109,128.413993 590.766109,127.050166 C590.766109,125.68634 591.175251,124.640755 591.993546,123.913381 C592.811842,123.186007 593.993808,122.822325 595.539478,122.822325 L604.67707,122.822325 L604.67707,107.138399 C604.67707,105.319963 605.177132,103.933427 606.177271,102.978749 C607.177411,102.02407 608.541217,101.546738 610.26873,101.546738 C611.996244,101.546738 613.33732,102.02407 614.291999,102.978749 C615.246677,103.933427 615.724009,105.319963 615.724009,107.138399 L615.724009,122.822325 L632.908138,122.822325 C634.453808,122.822325 635.635773,123.186007 636.454069,123.913381 C637.272365,124.640755 637.681507,125.68634 637.681507,127.050166 C637.681507,128.413993 637.272365,129.482308 636.454069,130.255143 C635.635773,131.027978 634.453808,131.414389 632.908138,131.414389 L615.724009,131.414389 L615.724009,165.100736 C615.724009,170.283277 616.815054,174.215584 618.997177,176.897776 C621.179299,179.579969 624.725195,180.921045 629.63497,180.921045 C631.362484,180.921045 632.83994,180.739204 634.067384,180.375517 C635.294828,180.01183 636.317683,179.829989 637.135979,179.829989 C637.954275,179.739067 638.636178,180.011828 639.181708,180.648281 C639.727239,181.284733 640,182.375778 640,183.921448 C640,185.012509 639.795429,186.012634 639.386281,186.921851 C638.977133,187.831069 638.2725,188.467512 637.272361,188.831199 C636.181299,189.194886 634.749303,189.535837 632.976329,189.854064 C631.203354,190.17229 629.589517,190.331401 628.134769,190.331401 Z" id="Antbot"></path>

                    </g>
                </svg>
            </div>


            <div class="flex justify-center mt-8 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left w-full">
                    <div class="flex justify-center w-full">
                        Made with
                        <svg fill="none" stroke="#ffd152" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-1 mr-1 -mt-px w-5 h-5 greener">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        in Spain by
                        <a href="https://sunnyface.com" class="ml-1 underline">
                            Sunnyface.com
                        </a>
                        .
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-guest-layout>
