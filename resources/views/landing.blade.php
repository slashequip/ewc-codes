@extends('layouts.main')

@section('meta_title', "EU European Waste Catalog Codes")

@section('content')
    {{-- Features --}}
    <div class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-green-600 uppercase">EU Waste Catalog Codes</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                Welcome to EWC Codes
            </p>
            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                Helping you better classify your waste through, simple, open data.
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-100 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-green-500 rounded-md shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">All EWC codes</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    Our API contains the full, comprehensive EWC code lists, meaning you get access to
                                    all possible categorisation records.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-100 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-green-500 rounded-md shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Density</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    All codes have a density figure so you can calculate weight from the size of your
                                    waste containers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-100 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-green-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <path d="M20.4219014,9.94928343 C19.9472822,9.67877277 19.4421927,9.46390464 18.9167304,9.30885661 C19.0426085,8.78256932 19.1048739,8.24352417 19.102414,7.70297578 C19.0954707,6.20750172 18.6027087,4.75307128 17.6958102,3.5516587 C16.7889232,2.35018982 15.5153478,1.4643458 14.0601198,1.02271872 C13.8197856,0.951024701 13.5626508,1.06472453 13.4580514,1.28883226 C13.3523282,1.51579389 13.4363248,1.78476753 13.6535918,1.91450816 C15.4096246,2.97364745 16.5837727,5.24461506 15.6604864,7.25963714 C14.5483801,6.59567638 13.2719377,6.24469433 11.9703805,6.24469433 C10.6688233,6.24469433 9.39232366,6.59569891 8.28027465,7.25963714 C7.37717205,5.24467136 8.55129718,2.97370375 10.2871693,1.91450816 C10.5044357,1.78475064 10.5884271,1.51578263 10.4829333,1.28883226 C10.3778867,1.06230977 10.1173918,0.948164597 9.87570431,1.02271872 C8.14679322,1.53888867 6.68302159,2.68270506 5.78261397,4.22113698 C4.88220634,5.7597378 4.6127664,7.57719876 5.02911103,9.304071 C4.50319568,9.45802116 3.99791121,9.67288929 3.52394003,9.94449783 C2.21343782,10.7014683 1.18286874,11.8490568 0.582119155,13.2205555 C-0.0188024465,14.5917727 -0.158826355,16.1156789 0.1823056,17.5705034 C0.239421249,17.8133026 0.471917702,17.976047 0.724344913,17.9498782 C0.979684988,17.9219477 1.17231247,17.7095 1.17074709,17.4572422 C1.23099981,15.4325926 2.63583754,13.3142577 4.878571,13.0628726 L4.878571,13.2154997 C4.87879502,14.4675271 5.22149195,15.6962458 5.87123844,16.773683 C6.52078423,17.850895 7.45324483,18.7369642 8.5711425,19.338881 C7.24154611,21.1123706 4.65276668,21.2502524 2.84140089,20.2896403 L2.84140089,20.2898602 C2.61764361,20.159444 2.32937326,20.2190445 2.17797886,20.426875 C2.02634363,20.6347055 2.06173378,20.9217124 2.25951039,21.0877392 C3.58170993,22.2955701 5.32048347,22.9670189 7.12622995,22.9670189 C8.93197643,22.9670189 10.67075,22.2955701 11.9929495,21.0877392 C12.3920865,21.4635951 12.8328636,21.7941511 13.3075229,22.0730112 C14.6305825,22.8156811 16.160639,23.1244935 17.674755,22.9544637 C19.188871,22.7842425 20.6082616,22.1442323 21.7263886,21.127319 C21.9096066,20.9584152 21.9373821,20.6826291 21.7915668,20.481825 C21.6448571,20.27927 21.3671201,20.2159311 21.1444867,20.3340342 C19.3333502,21.3193063 16.7394102,21.1616064 15.4099285,19.3782077 L15.4097045,19.3784276 C16.5289784,18.7773554 17.4627578,17.8915114 18.113393,16.8142994 C18.7638563,15.7368622 19.1072073,14.5074679 19.1074366,13.2547648 L19.1074366,13.077506 C21.3450095,13.3189877 22.7549963,15.4569098 22.8100999,17.4767175 C22.7825499,17.7487652 22.9845851,17.9913448 23.2616512,18.0186171 C23.538941,18.0458883 23.7859955,17.8472924 23.8135473,17.5752447 C24.161841,16.1149026 24.0196152,14.5833394 23.408361,13.2088005 C22.7971182,11.8344867 21.7495192,10.6910645 20.421987,9.94923907 L20.4219014,9.94928343 Z M15.1788604,8.11662113 C14.4195661,9.09175895 13.2407162,9.66377975 11.9904782,9.66377975 C10.7401828,9.66377975 9.5613902,9.09175895 8.80209594,8.11662113 C9.76076085,7.53688706 10.8645529,7.2301015 11.9904782,7.2301015 C13.1164034,7.2301015 14.2202528,7.53689832 15.1788604,8.11662113 Z M5.87661691,13.2301267 L5.87658251,13.0774996 C7.11504294,13.2367252 8.20736704,13.9528153 8.83185532,15.014826 C9.4563436,16.0768367 9.54166529,17.3638834 9.06255646,18.4964959 C8.09918968,17.9801064 7.295113,17.2187388 6.73444397,16.292189 C6.17381508,15.3656391 5.87749995,14.30802 5.87658251,13.2301324 L5.87661691,13.2301267 Z M14.9076429,18.5013322 C14.4287634,17.3680441 14.5145496,16.080378 15.1401388,15.0181421 C15.765728,13.9559063 16.8594168,13.240261 18.0987602,13.0823359 L18.0987602,13.2301267 C18.0987602,14.3093093 17.8024279,15.3686738 17.2408988,16.2963496 C16.679146,17.2240255 15.8732287,17.9858378 14.907683,18.5013322 L14.9076429,18.5013322 Z M18.6755016,12.0677872 L18.6757256,12.0677872 C18.644144,12.0622891 18.6118891,12.0622891 18.5803064,12.0677872 C16.8099386,12.080763 15.1777598,13.009088 14.2852077,14.5100796 C13.3926557,16.0112964 13.371784,17.8633263 14.2303318,19.3834603 C14.250938,19.416669 14.2744565,19.4478971 14.3006648,19.4771512 C15.1043401,20.8442021 16.5454052,21.7316226 18.148914,21.846646 C16.6688579,22.1622427 15.1222302,21.9269204 13.8089756,21.1864012 C13.2700728,20.8811414 12.7827071,20.4955847 12.3640688,20.0436545 C12.2699971,19.9385288 12.1351567,19.8776108 11.9927016,19.8760682 C11.8533829,19.8859648 11.7219027,19.9433651 11.6213343,20.038593 C11.1962109,20.4896618 10.7038968,20.8749482 10.1614045,21.1815649 C8.83742737,21.9381412 7.2711321,22.1756199 5.77622493,21.8465954 C7.40232567,21.7452081 8.86919365,20.8520899 9.6847383,19.4671915 C9.70310483,19.4436593 9.71990368,19.4190275 9.73491067,19.3932961 C9.74700594,19.3746024 9.75708513,19.3548092 9.76492464,19.3341348 C10.6075337,17.8183923 10.5804693,15.9800435 9.69324983,14.4889047 C8.80603037,12.9980473 7.18864529,12.0716664 5.43014684,12.0479636 L5.33988246,12.0479636 C3.73459608,12.0532418 2.23412695,12.8322401 1.32609313,14.132011 C1.79309752,12.7205384 2.77369492,11.5278525 4.0804127,10.782086 C4.61797377,10.4763871 5.20008791,10.2538226 5.80645679,10.1218412 C5.94510455,10.0939107 6.06538061,10.0098974 6.13750267,9.89025719 C6.20962473,9.76951914 6.22597806,9.62458281 6.18274725,9.4913121 C5.99146725,8.90870666 5.89492989,8.30020265 5.89671889,7.68815166 C5.88350377,6.18496433 6.44772042,4.73188512 7.47711977,3.61909072 C6.75635788,5.04508902 6.80716099,6.73018572 7.61263103,8.11198754 C7.6222624,8.13749876 7.63390927,8.16213057 7.64779641,8.18588294 C8.54975221,9.68845096 10.193571,10.6107782 11.9700168,10.6107782 C13.7464626,10.6107782 15.3904534,9.68839466 16.2924665,8.18588294 C16.3045618,8.16213057 16.314641,8.13727919 16.3224805,8.11198754 C17.1149172,6.74932815 17.1729451,5.09108715 16.4781467,3.67826334 C17.4936927,4.780079 18.0585476,6.21204523 18.0634788,7.69806068 C18.0813975,8.31805015 17.9983006,8.93646318 17.8175425,9.53072298 C17.7758816,9.66245667 17.7922321,9.80541119 17.862787,9.9248318 C17.9326728,10.0451307 18.0511599,10.1311252 18.1889074,10.161252 C20.3252755,10.6268353 22.0465603,12.1759926 22.7044204,14.2255274 C21.811639,12.8920883 20.3008487,12.0829829 18.675608,12.0678379 L18.6755016,12.0677872 Z M11.9925424,11.2696606 C11.4603598,11.2696606 10.9498746,11.4772715 10.5733812,11.8469737 C10.1970884,12.2164507 9.98564773,12.7176727 9.98564773,13.2402047 C9.98564773,13.7629731 10.1970884,14.264212 10.5733812,14.6336608 C10.9498975,15.0031379 11.4603713,15.2107487 11.9925424,15.2107487 C12.5247135,15.2107487 13.0352102,15.0031379 13.4117036,14.6336608 C13.7879964,14.2641838 13.9994371,13.7629619 13.9994371,13.2402047 C13.9994371,12.7176614 13.7879964,12.2164226 13.4117036,11.8469737 C13.0351872,11.4772771 12.5247135,11.2696606 11.9925424,11.2696606 Z M11.9925424,14.2254767 C11.7264511,14.2254767 11.4711053,14.1216684 11.2829618,13.9369327 C11.0948183,13.7521971 10.9890951,13.5014763 10.9890951,13.2402047 C10.9890951,12.978933 11.0948183,12.7284375 11.2829618,12.5434766 C11.4711053,12.3587409 11.7264511,12.2549326 11.9925424,12.2549326 C12.2586337,12.2549326 12.5139795,12.3587409 12.702123,12.5434766 C12.8902665,12.7284375 12.9959897,12.978933 12.9959897,13.2402047 C12.9908381,13.498177 12.8826518,13.7436167 12.6951792,13.9241524 C12.5074829,14.1047105 12.2552736,14.2058782 11.9925367,14.2058782 L11.9925424,14.2254767 Z" id="Shape" fill="#FFFFFF" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Hazardous</h3>
                                <p class="mt-5 text-base text-gray-500">
                                    All codes come with a hazardous flag so you know whether the waste you have
                                    categorised needs some extra attention!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Testimonial --}}
    <div class="pt-16 lg:py-24">
        <div class="pb-16 bg-black lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                        <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                            <img class="object-cover lg:h-full lg:w-full" src="{{ url('/img/alex.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                        <blockquote>
                            <div>
                                <svg class="h-12 w-12 text-green-600" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="mt-6 text-2xl font-medium text-white">
                                    EWC Codes' API has been integral to our ability to scale our waste management
                                    solutions. Not having to maintain waste categorisation data has allowed us to focus
                                    on growing the business and not wasting time scouring through legislation on how to
                                    classify waste.
                                </p>
                            </div>
                            <footer class="mt-6">
                                <p class="text-base font-medium text-white">Alex Trenbath</p>
                                <p class="text-base font-medium text-green-500">Director at <a href="https://envirovue.io" class="font-bold hover:text-green-700">Envirovue</a></p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Stats --}}
    <div class="pt-4 pb-12 sm:pt-6 sm:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Trusted by companies across the UK and EU
                </h2>
            </div>
        </div>
        <div class="mt-10 pb-12 sm:pb-16">
            <div class="relative">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3">
                            <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                    uptime
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold text-green-600">
                                    99.99%
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                    unique integrators
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold text-green-600">
                                    15+
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                    requests per day
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold text-green-600">
                                    1000+
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
