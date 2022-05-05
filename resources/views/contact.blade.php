<x-layouts-main>
    <x-slot name="meta">
        <link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
        <link rel="manifest" href="/img/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#f19F19">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="parsely-link" content="https://francescomansi.me/contattami">

        <link rel="canonical" href="https://francescomansi.me/contattami"/>
        <meta property="og:title" content="Francesco Mansi - Web Developer e Web Designer" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://francescomansi.me/contattami" />
        <meta property="og:image" content="https://francescomansi.me/img/francesco-mansi-web.jpg" />
        <meta property="og:site_name" content="Francesco Mansi - Web Developer e Web Designer" />
        <meta property="og:description" content="Puoi contattarmi per qualsiasi tipo di proposta lavorativa di consulenza digitale, sviluppo web o formazione che tu sia Aziende, Associazione o Privato sul territorio di Monopoli e Italiano." />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@framansi" />
        <meta name="twitter:creator" content="@framansi"/>
        <meta name="twitter:domain" content="https://twitter.com/framansi" />
        <meta name="twitter:title" content="Francesco Mansi - Web Developer e Web Designer" />
        <meta name="twitter:description" content="Puoi contattarmi per qualsiasi tipo di proposta lavorativa di consulenza digitale, sviluppo web o formazione che tu sia Aziende, Associazione o Privato sul territorio di Monopoli e Italiano." />
        <meta name="twitter:image" content="https://francescomansi.me/img/francesco-mansi-web.jpg" />

        <title>Contattami | Francesco Mansi - Web Developer e Web Designer</title>
        <meta name="description" content="Puoi contattarmi per qualsiasi tipo di proposta lavorativa di consulenza digitale, sviluppo web o formazione che tu sia Aziende, Associazione o Privato sul territorio di Monopoli e Italiano.">
        <meta name="keywords" content="Realizzazione siti web, creazione siti web e-commerce, creazione software gestionali, monopoli, Polignano a mare, Conversano, Capitolo, Bari, menu digitale, agenzie immobiliari">

        <link rel="alternate" type="application/atom+xml" href="https://francescomansi.me/rss" title="Francesco Mansi | FEED RSS">
        <meta name="theme-color" content="#000"/>
        <meta name="mobile-web-app-capable" content="yes">

        <script type="application/ld+json">
            {
            "@context": "http://www.schema.org",
            "@type": "Person",
            "@id": "https://francescomansi.me",
            "name": "Francesco Mansi",
            "nationality": "Italian",
            "alternateName":"Francesco Mansi",
            "birthPlace" : {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Monopoli",
                    "addressRegion": "Apulia",
                    "addressCountry": "Italy"
                }
            },
            "gender": "Male",
            "Description": "Puoi contattarmi per qualsiasi tipo di proposta lavorativa di consulenza digitale, sviluppo web o formazione che tu sia Aziende, Associazione o Privato sul territorio di Monopoli e Italiano.",
            "jobTitle": "Web Developer",
            "url": "https://francescomansi.me",
            "image": "https://francescomansi.me/img/francesco-mansi-web.jpg",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Monopoli",
                "addressRegion": "Puglia",
                "addressCountry": "Italy"
            },
            "sameAs": [
                "https://twitter.com/framansi",
                "https://instagram.com/fra.mansi",
                "https://www.facebook.com/fra.mansi",
                "https://www.linkedin.com/in/francesco-mansi/",
                "https://medium.com/@francesco.mansi",
                "https://github.com/framansi",
                "https://codepen.io/framansi"
                ]
            }
            {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Home - Francesco Mansi",
            "url": "https://francescomansi.me",
            "sameAs": [
                    "https://twitter.com/framansi",
                    "https://instagram.com/fra.mansi",
                    "https://www.facebook.com/fra.mansi",
                    "https://www.linkedin.com/in/francesco-mansi/",
                    "https://medium.com/@francesco.mansi",
                    "https://github.com/framansi",
                    "https://codepen.io/framansi",
                    ]
            }
        </script>
    </x-slot>
    <div class="relative w-full py-20 pb-20 overflow-hidden bg-white md:pb-64 ">
        @if(session('success'))
            <div class="fixed inset-0 z-40 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
            <div id="toast" x-data="{show:true, type: 'success', message:'Fatto'}" x-cloak
                 @click="show = !show"
                 @click.outside="show = false"
                 x-show="show"
                 x-init="setTimeout(() => {show = false}, 6000)"
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 x-transition:leave="transform transition ease-in duration-100"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="w-full max-w-sm bg-white border-2 border-black  shadow-lg cursor-pointer pointer-events-auto hover:-translate-1">
                <div class="relative overflow-hidden shadow-xs border-t border-black">
                    <div class="px-4 py-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 pr-0.5">
                                <template x-if="type == 'info'">
                                    <div class="w-10 h-10">
                                        <svg class="w-10 h-10 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                </template>
                                <template x-if="type == 'warning'">
                                    <div class="w-10 h-10">
                                        <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    </div>
                                </template>
                                <template x-if="type == 'success'">
                                    <div class="w-10 h-10">
                                        <svg class="w-10 h-10 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                </template>
                                <template x-if="type == 'danger'">
                                    <div class="w-10 h-10">
                                        <svg class="w-10 h-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                </template>
                            </div>
                            <div class="flex-1 w-0 pl-3.5 ml-1 border-l border-gray-100">
                                <p class="text-sm font-medium leading-5 text-gray-900">
                                    <template x-if="type == 'success'"><span>Wooo! Email Inviata!</span></template>

                                </p>
                             </div>
                            <div class="flex self-start flex-shrink-0 ml-4">
                                <button  class="inline-flex -mt-1 text-gray-400 transition duration-150 ease-in-out  focus:outline-none focus:text-gray-500">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="toast_bar"   class="absolute bottom-0 left-0 border-t border-black h-1 transition ease-out duration-1000 progress-bar"
                         :class="{'w-full': show, 'w-0': !show, 'bg-indigo-400' : type == 'info', 'bg-yellow-400' : type == 'warning', 'bg-green-400' : type == 'success', 'bg-red-400' : type == 'danger' }"
                    ></div>
                </div>
            </div>
        </div>
        @endif
        <section class="w-full bg-white">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col lg:flex-row">
                    <div class="relative w-full bg-cover lg:w-6/12 xl:w-5/12 mt-10">
                        <div class="relative flex flex-col items-center  w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                            <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                                <div class="relative">
                                    <span class="text-5xl font-bold text-gray-900 xl:text-6xl">Compila il form in tutti i suoi campi</span>
                                    <p class="mb-2 font-medium text-gray-700 ">Esponi in maniera sintetica la tua richiesta così da poter preparare una piccola analisi preliminare per il nostro incontro.</p>
                                </div>
                             </div>
                        </div>
                    </div>

                    <div class="w-full bg-white lg:w-6/12 xl:w-7/12">
                        <form class="flex flex-col items-start justify-start w-full h-full  px-10 lg:px-16 xl:px-24"
                              method="POST"
                              action="{{ route('send') }}"
                              autocomplete="off">
                            @csrf

                            <div class="relative w-full mt-10 space-y-8">
                                <div class="relative">
                                    <label class="font-medium text-gray-900">Nome*</label>
                                    <input name="name" value="{{old('name')}}" type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 border-black border-2 focus:outline-none focus:ring-4 focus:ring-orange-600 focus:ring-opacity-50" placeholder="">
                                    @error('name')
                                    <p class="mt-4 text-xs italic text-red-500">
                                        Campo Obbligatorio
                                    </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="font-medium text-gray-900">Email*</label>
                                    <input name="email" value="{{old('email')}}" type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 border-black border-2 focus:outline-none focus:ring-4 focus:ring-orange-600 focus:ring-opacity-50" placeholder="">
                                    @error('email')
                                    <p class="mt-4 text-xs italic text-red-500">
                                        Campo Obbligatorio
                                    </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="font-medium text-gray-900">Richiesta*</label>
                                    <textarea name="message" value="{{old('message')}}" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-100 border-black border-2 focus:outline-none focus:ring-4 focus:ring-orange-600 focus:ring-opacity-50" rows="5"></textarea>
                                    @error('message')
                                    <p class="mt-4 text-xs italic text-red-500">
                                        Campo Obbligatorio
                                    </p>
                                    @enderror
                                 </div>
                                <div class="flex flex-col items-start">
                                    <div class="flex items-center group">
                                        <input id="accept" name="accept" type="checkbox" class="cursor-pointer h-4 w-4 text-orange-600 focus:ring-black border-black ">
                                        <label for="accept" class="cursor-pointer ml-2 block text-sm text-gray-900">Ho letto la <a href="{{route('cookie')}}" target="_blank" class="font-medium underline text-orange-500">Cookie Policy</a> e acconsento al trattamento dei miei dati in quanto in alcun modo verranno immagazzinati dal titolare del sito web.
                                          </label>
                                    </div>
                                    @error('accept')
                                    <p class="mt-4 text-xs italic text-red-500">
                                        La casella da spuntare è obbligatoria
                                    </p>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <button type="submit" class="relative inline-block px-4 py-2 font-medium group w-full flex justify-center">
                                        <span class="absolute rounded inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                                        <span class="absolute rounded inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-orange-400"></span>
                                        <span class="relative text-black px-1 py-1 text-base font-bold group-hover:text-white">Invia</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts-main>
