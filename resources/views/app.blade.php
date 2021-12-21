<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />
    <title>Upitnik</title>
</head>
<body class="bg-gray-600 min-h-screen flex items-center my-6">
    <div class="w-11/12 lg:w-2/3 2xl:w-1/2 bg-teal-50 mx-auto flex flex-col items-center py-6 rounded-2xl shadow-xl ">
        <h1 class="w-full pb-6 lg:pl-20 text-4xl font-extrabold text-teal-500 text-gray-600 tracking-wide border-b border-gray-600 border-dashed text-center lg:text-left">Kreiraj
            <span class="bg-teal-600 bg-opacity-20 rounded p-2 text-teal-600">Upitnik</span>
        </h1>
        <form id="forma" class="flex flex-col space-y-8 w-11/12 lg:w-5/6 2xl:w-3/4 my-3 lg:mb-4 lg:mt-12 text-lg" action="" method="post">
{{--            @csrf--}}
            <div class="flex flex-col lg:flex-row text-gray-700 lg:grid grid-cols-3 gap-2">
                <label for="title" class="flex items-center px-3 font-medium">Dodaj naslov upitnika: </label>
                <input id="title" type="text" class="col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Naslov upitnika *" required>
            </div>
            <div class="flex flex-col lg:flex-row text-gray-700 font-medium lg:grid grid-cols-3 gap-2">
                <label for="datepicker" class="flex items-center px-3 text-gray-700">Dodaj datum isteka: </label>
                <button id="datebtn" class="flex justify-center" type="button">
                    <svg class="h-12 w-12 fill-current text-neutral-400 hover:text-teal-600 hover:stroke-teal-600" viewBox="0 0 484.951 484.951">
                    <g>
                        <g id="_x31_5_38_">
                            <g>
                                <path d="M118.505,115.332h6.938c10.544,0,19.091-8.55,19.091-19.091V43.558V23.852c0-10.541-8.547-19.09-19.091-19.09h-6.938
                                    c-10.543,0-19.09,8.549-19.09,19.09v19.707v52.682C99.415,106.782,107.962,115.332,118.505,115.332z"/>
                                <path d="M363.373,114.859h6.938c10.543,0,19.09-8.549,19.09-19.091v-57.21v-15.18c0-10.54-8.547-19.089-19.09-19.089h-6.938
                                    c-10.545,0-19.092,8.549-19.092,19.089v15.18v57.209C344.283,106.31,352.83,114.859,363.373,114.859z"/>
                                <path d="M453.916,43.558H404.92v57.209c0,19.084-15.525,29.61-34.607,29.61h-6.938c-19.084,0-34.609-15.526-34.609-34.61V43.558
                                    H160.053V96.24c0,19.084-15.525,34.61-34.609,34.61h-6.938c-19.083,0-34.608-15.526-34.608-34.61V43.558H31.036
                                    C13.923,43.558,0,57.481,0,74.595v375.03c0,17.114,13.923,31.037,31.036,31.037h422.88c17.113,0,31.035-13.923,31.035-31.037
                                    V74.595C484.953,57.482,471.029,43.558,453.916,43.558z M453.916,449.625H31.037l-0.001-283.213h422.886l0.016,283.212
                                    C453.936,449.624,453.93,449.625,453.916,449.625z"/>
                                <path d="M258.498,261.41h55.727c2.209,0,4-1.791,4-4v-48.255c0-2.209-1.791-4-4-4h-55.727c-2.209,0-4,1.791-4,4v48.255
                                    C254.498,259.619,256.289,261.41,258.498,261.41z"/>
                                <path d="M349.443,261.41h55.727c2.209,0,4-1.791,4-4v-48.255c0-2.209-1.791-4-4-4h-55.727c-2.209,0-4,1.791-4,4v48.255
                                    C345.443,259.619,347.234,261.41,349.443,261.41z"/>
                                <path d="M76.611,340.41h55.726c2.209,0,4-1.791,4-4v-48.256c0-2.209-1.791-4-4-4H76.611c-2.209,0-4,1.791-4,4v48.256
                                    C72.611,338.619,74.402,340.41,76.611,340.41z"/>
                                <path d="M167.555,340.41h55.726c2.209,0,4-1.791,4-4v-48.256c0-2.209-1.791-4-4-4h-55.726c-2.209,0-4,1.791-4,4v48.256
                                    C163.555,338.619,165.346,340.41,167.555,340.41z"/>
                                <path d="M258.499,340.41h55.726c2.209,0,4-1.791,4-4v-48.256c0-2.209-1.791-4-4-4h-55.726c-2.209,0-4,1.791-4,4v48.256
                                    C254.499,338.619,256.29,340.41,258.499,340.41z"/>
                                <path d="M349.443,340.41h55.727c2.209,0,4-1.791,4-4v-48.256c0-2.209-1.791-4-4-4h-55.727c-2.209,0-4,1.791-4,4v48.256
                                    C345.443,338.619,347.234,340.41,349.443,340.41z"/>
                                <path d="M132.337,363.154H76.612c-2.209,0-4,1.791-4,4v48.256c0,2.209,1.791,4,4,4h55.726c2.209,0,4-1.791,4-4v-48.256
                                    C136.337,364.945,134.546,363.154,132.337,363.154z"/>
                                <path d="M223.282,363.154h-55.726c-2.209,0-4,1.791-4,4v48.256c0,2.209,1.791,4,4,4h55.726c2.209,0,4-1.791,4-4v-48.256
                                    C227.282,364.945,225.491,363.154,223.282,363.154z"/>
                                <path d="M314.227,363.154H258.5c-2.209,0-4,1.791-4,4v48.256c0,2.209,1.791,4,4,4h55.727c2.209,0,4-1.791,4-4v-48.256
                                    C318.227,364.945,316.436,363.154,314.227,363.154z"/>
                                <path d="M405.17,363.154h-55.727c-2.209,0-4,1.791-4,4v48.256c0,2.209,1.791,4,4,4h55.727c2.209,0,4-1.791,4-4v-48.256
                                    C409.17,364.945,407.379,363.154,405.17,363.154z"/>
                            </g>
                        </g>
                    </g>
                </svg>
                </button>
                <input id="datepicker" type="text" class="w-1/2 mx-auto lg:w-full py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" required>
            </div>
            <div id="question" class="question flex flex-col text-gray-700 space-y-6 lg:space-y-4" >
                <div class="flex flex-col lg:flex-row lg:grid grid-cols-3 gap-2">
                    <label for="question" class="flex items-center px-3 font-medium">Dodaj pitanje: </label>
                    <input id="question" type="text" data-question-id="1" class="questiondiv col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Tekst pitanja *" required>
                </div>
                <div class="answers flex flex-col space-y-3 ">
                    <div class=" flex flex-col lg:flex-row  lg:grid grid-cols-2 " >
                        <label for="answer" class="flex items-center px-3 my-2 text-gray-700 lg:place-self-end lg:my-auto">Ponuđeni odgovori : </label>
                        <input id="answer" data-question-id="1" type="text" class="answer answerdiv py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>
                    </div>
                </div>
                <div class="flex flex-row text-right justify-between border-b border-gray-400 border-dashed py-4 lg:pb-3 lg:pt-0">
                    <div class="flex flex-row group">
                        <button class="px-3" type="button">
                            <svg class="w-10 h-10 fill-current text-neutral-400 hover:text-teal-600" viewBox="0 0 24 24" mirror-in-rtl="true">
                                <path d="M23.71 10.29l-4-4C19.52 6.1 19.26 6 19 6h-7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V11c0-.26-.1-.52-.29-.71zM19 8.42L21.58 11H19.5c-.28 0-.5-.22-.5-.5V8.42zm3 13.08c0 .28-.22.5-.5.5h-9c-.28 0-.5-.22-.5-.5v-13c0-.28.22-.5.5-.5h4c.28 0 .5.22.5.5V10h-2c-.55 0-1 .45-1 1s.45 1 1 1h2.27c.35.6.99 1 1.73 1h2.5c.28 0 .5.22.5.5v8z"/>
                                <path d="M13 2v1c0 .55-.45 1-1 1s-1-.45-1-1v-.5c0-.28-.22-.5-.5-.5h-.51H2.5c-.28 0-.5.22-.5.5v13c0 .28.22.5.5.5h4.52c.54.01.98.46.98 1s-.44.99-.98 1H2.01C.9 18 0 17.1 0 16V2C0 .9.9 0 2.01 0h8.98C12.1 0 13 .9 13 2zM19 20h-4c-.553 0-1-.447-1-1s.447-1 1-1h4c.553 0 1 .447 1 1s-.447 1-1 1zM19 16h-4c-.553 0-1-.447-1-1s.447-1 1-1h4c.553 0 1 .447 1 1s-.447 1-1 1z"/>
                                <path d="M7 6H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1zM7 14H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1zM7 10H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1z"/>
                            </svg>
                        </button>
                        <span class="hidden lg:group-hover:flex px-2 my-auto font-medium text-base text-teal-900">Kopiraj pitanje</span>
                    </div>
                    <div class="flex flex-row">
                        <span class="flex items-center px-3 font-medium text-base"><span class="text-teal-600 px-1">*</span> Dodaj odgovor</span>
                        <button type="button" class="addansw rounded-full hover:shadow-md hover:shadow-teal-600 border hover:border-teal-600 hover:duration-200">
                            <svg x="0px" y="0px"
                                 width="40" height="40"
                                 viewBox="0 0 40 40"
                                 style=" fill:#000000;"><path fill="#a3a3a3" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"></path><path fill="#0d9488" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"></path><path fill="#fff" d="M10 18H30V22H10z"></path><path fill="#fff" d="M10 18H30V22H10z" transform="rotate(90 20 20)"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="addQuesBtn" class=" flex flex-row justify-start items-center space-x-3">
                <span class="flex items-center px-3 font-medium"><span class="text-teal-600 px-1">*</span> Dodaj pitanje</span>
                <button id="addques" type="button" class="rounded-full  hover:shadow-md hover:shadow-teal-600 border hover:border-teal-600 hover:duration-200">
                    <svg x="0px" y="0px"
                         width="40" height="40"
                         viewBox="0 0 40 40"
                         style=" fill:#000000;"><path fill="#a3a3a3" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"></path><path fill="#0d9488" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"></path><path fill="#fff" d="M10 18H30V22H10z"></path><path fill="#fff" d="M10 18H30V22H10z" transform="rotate(90 20 20)"></path></svg>
                </button>
            </div>
            <div class="relative group w-max mx-auto">
                <div class="absolute -inset-0.5 bg-teal-600 rounded-3xl blur opacity-50 group-hover:duration-200 group-hover:opacity-100 my-4 lg:mt-4"></div>
                    <button type="submit" id="createbtn" class="relative py-1.5 px-5 my-4 lg:mt-4 text-3xl bg-gray-400 font-medium flex items-center group-hover:text-gray-500 group-hover:bg-teal-50 group-hover:duration-200 text-white border border-teal-600 shadow-teal-500/50 rounded-3xl">Kreiraj</button>
            </div>
        </form>
    </div>
</body>
{{--Sweet Alert--}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
</html>
