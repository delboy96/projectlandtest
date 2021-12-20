<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Upitnik</title>
</head>
<body class="bg-gray-600 min-h-screen flex items-center my-6">
    <div class="w-11/12 lg:w-1/2 bg-teal-50 mx-auto flex flex-col items-center py-6 rounded-xl shadow-xl ">
        <h1 class="w-full pb-6 lg:pl-20 text-4xl font-extrabold text-teal-500 text-gray-600 tracking-wide border-b border-gray-600 border-dashed text-center lg:text-left">Kreiraj
            <span class="bg-teal-600 bg-opacity-20 rounded p-2 text-teal-600">Upitnik</span>
        </h1>
        <form id="forma" class="flex flex-col space-y-8 w-11/12 lg:w-3/4 my-3 lg:my-12 text-lg" action="" method="post">
            @csrf
            <div class="flex flex-col lg:flex-row text-gray-700 lg:grid grid-cols-3 gap-2">
                <label for="title" class="flex items-center px-3 font-medium">Dodaj naslov upitnika: </label>
                <input id="title" type="text" class="col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Naslov upitnika *" required>
            </div>
            <div class="flex flex-col lg:flex-row text-gray-700 font-medium lg:grid grid-cols-3 gap-2">
                <label for="deadline" class="flex items-center px-3 text-gray-700">Dodaj datum isteka: </label>
                <input id="deadline" type="date" class="col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" required>
            </div>
            <div id="question" class="flex flex-col text-gray-700 space-y-6 lg:space-y-4">
                <div class="flex flex-col lg:flex-row lg:grid grid-cols-3 gap-2">
                    <label for="question" class="flex items-center px-3 font-medium">Dodaj pitanje: </label>
                    <input id="question" type="text" class="col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Tekst pitanja *" required>
                </div>
                <div id="answers" class="flex flex-col space-y-3 ">
                    <div class="flex flex-col lg:flex-row  lg:grid grid-cols-2 ">
                        <label for="answer" class="flex items-center px-3 my-2 text-gray-700 lg:place-self-end lg:my-auto">Ponuđeni odgovori : </label>
                        <input id="answer" type="text" class="answer py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>
                    </div>
                </div>
                <div class="flex flex-row text-right justify-end border-b border-gray-400 border-dashed pb-2">
                    <span class="flex items-center px-3 font-medium text-base"><span class="text-teal-600 px-1">*</span> Dodaj odgovor</span>
                    <button class="addansw rounded-full hover:shadow-md hover:shadow-teal-600 border hover:border-teal-600 hover:duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="40" height="40"
                             viewBox="0 0 40 40"
                             style=" fill:#000000;"><path fill="#a3a3a3" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"></path><path fill="#0d9488" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"></path><path fill="#fff" d="M10 18H30V22H10z"></path><path fill="#fff" d="M10 18H30V22H10z" transform="rotate(90 20 20)"></path></svg>
                    </button>
                </div>
            </div>
            <div id="addQuesBtn" class=" flex flex-row justify-start items-center space-x-3">
                <span class="flex items-center px-3 font-medium"><span class="text-teal-600 px-1">*</span> Dodaj pitanje</span>
                <button id="addques" class="rounded-full  hover:shadow-md hover:shadow-teal-600 border hover:border-teal-600 hover:duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                         width="40" height="40"
                         viewBox="0 0 40 40"
                         style=" fill:#000000;"><path fill="#a3a3a3" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"></path><path fill="#0d9488" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"></path><path fill="#fff" d="M10 18H30V22H10z"></path><path fill="#fff" d="M10 18H30V22H10z" transform="rotate(90 20 20)"></path></svg>
                </button>
            </div>

            <div class="relative group w-max mx-auto">
                <div class="absolute -inset-0.5 bg-teal-600 rounded-3xl blur opacity-50 group-hover:duration-200 group-hover:opacity-100 my-4 lg:mt-4"></div>
                    <button type="submit" id="createbtn" class="relative py-1.5 px-5 my-4 lg:mt-4 text-3xl bg-gray-400 font-medium flex items-center  group-hover:duration-200 text-white border border-teal-600 shadow-teal-500/50 rounded-3xl">Kreiraj</button>
            </div>
        </form>
    </div>
</body>
<script src="{{asset('js/main.js')}}"></script>
</html>
