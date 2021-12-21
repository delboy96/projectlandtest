document.addEventListener("DOMContentLoaded", function(event) {
    let addansw = document.querySelectorAll('.addansw');
    let addques = document.getElementById('addques');
    let createbtn = document.getElementById('createbtn');

    let allAnswerDivs = document.querySelectorAll("#answers");
    let lastAnswerDiv = allAnswerDivs[allAnswerDivs.length-1];

    let newAnswer = '<div class="text-right w-full">\n' +
        '               <input type="text" class=" answer w-full lg:w-1/2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>\n' +
        '            </div>';

    let newQuestionSection = '<div id="question" class="flex flex-col text-gray-700 space-y-6 lg:space-y-4">\n' +
        '                <div class="flex flex-col lg:flex-row lg:grid grid-cols-3 gap-2">\n' +
        '                    <label for="question" class="flex items-center px-3 font-medium">Dodaj pitanje: </label>\n' +
        '                    <input id="question" type="text" class="col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Tekst pitanja *" required>\n' +
        '                </div>\n' +
        '                <div id="answers" class="flex flex-col space-y-3 ">\n' +
        '                    <div class="flex flex-col lg:flex-row  lg:grid grid-cols-2 ">\n' +
        '                        <label for="answer" class="flex items-center px-3 my-2 text-gray-700 lg:place-self-end lg:my-auto">Ponuđeni odgovori : </label>\n' +
        '                        <input id="answer" type="text" class="answer py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="flex flex-row text-right justify-between border-b border-gray-400 border-dashed py-4 lg:pb-3 lg:pt-0">\n' +
        '                    <div class="flex flex-row group">\n' +
        '                        <button class="px-3">\n' +
        '                            <svg class="w-10 h-10 fill-current text-neutral-400 hover:text-teal-600" viewBox="0 0 24 24" mirror-in-rtl="true">\n' +
        '                                <path d="M23.71 10.29l-4-4C19.52 6.1 19.26 6 19 6h-7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V11c0-.26-.1-.52-.29-.71zM19 8.42L21.58 11H19.5c-.28 0-.5-.22-.5-.5V8.42zm3 13.08c0 .28-.22.5-.5.5h-9c-.28 0-.5-.22-.5-.5v-13c0-.28.22-.5.5-.5h4c.28 0 .5.22.5.5V10h-2c-.55 0-1 .45-1 1s.45 1 1 1h2.27c.35.6.99 1 1.73 1h2.5c.28 0 .5.22.5.5v8z"/>\n' +
        '                                <path d="M13 2v1c0 .55-.45 1-1 1s-1-.45-1-1v-.5c0-.28-.22-.5-.5-.5h-.51H2.5c-.28 0-.5.22-.5.5v13c0 .28.22.5.5.5h4.52c.54.01.98.46.98 1s-.44.99-.98 1H2.01C.9 18 0 17.1 0 16V2C0 .9.9 0 2.01 0h8.98C12.1 0 13 .9 13 2zM19 20h-4c-.553 0-1-.447-1-1s.447-1 1-1h4c.553 0 1 .447 1 1s-.447 1-1 1zM19 16h-4c-.553 0-1-.447-1-1s.447-1 1-1h4c.553 0 1 .447 1 1s-.447 1-1 1z"/>\n' +
        '                                <path d="M7 6H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1zM7 14H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1zM7 10H5c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1z"/>\n' +
        '                            </svg>\n' +
        '                        </button>\n' +
        '                        <span class="hidden lg:group-hover:flex px-2 my-auto font-medium text-base text-teal-900">Kopiraj pitanje</span>\n' +
        '                    </div>\n' +
        '                    <div class="flex flex-row">\n' +
        '                        <span class="flex items-center px-3 font-medium text-base"><span class="text-teal-600 px-1">*</span> Dodaj odgovor</span>\n' +
        '                        <button class="addansw rounded-full hover:shadow-md hover:shadow-teal-600 border hover:border-teal-600 hover:duration-200">\n' +
        '                            <svg x="0px" y="0px"\n' +
        '                                 width="40" height="40"\n' +
        '                                 viewBox="0 0 40 40"\n' +
        '                                 style=" fill:#000000;"><path fill="#a3a3a3" d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"></path><path fill="#0d9488" d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"></path><path fill="#fff" d="M10 18H30V22H10z"></path><path fill="#fff" d="M10 18H30V22H10z" transform="rotate(90 20 20)"></path></svg>\n' +
        '                        </button>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>';



    //opening new answer input on button click
    // for (let i = 0 ; i < addansw.length; i++) {
    //     addansw[0].addEventListener('click', function (e) {
    //         e.preventDefault();
    //         let inputNum = document.querySelectorAll('.answer').length;
    //         // console.log(inputnum)
    //         if (inputNum <= 4) {
    //             lastAnswerDiv.insertAdjacentHTML('beforeend', newAnswer);
    //         } else {
    //             console.log('Najveći broj mogućih ponuđenih odgovora je 5!');
    //         }
    //     })
    // }

    addansw.forEach(function (btn){
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            let inputNum = document.querySelectorAll('.answer').length;
            // console.log(inputnum)
            if (inputNum <= 4) {
                lastAnswerDiv.insertAdjacentHTML('beforeend', newAnswer);
            } else {
                console.log('Najveći mogući broj ponuđenih odgovora je 5!');
                lastAnswerDiv.insertAdjacentHTML('beforeend', '<span class="text-red-400 font-medium text-center lg:text-right py-2 ">Najveći mogući broj ponuđenih odgovora je 5!</span>');
            }
        })
    })


    // let forms = document.getElementsByTagName('form');
    // let form = forms[forms.length - 1];

    let addQuesBtn = document.querySelector('#addQuesBtn');

    // opening new question section on button click
    addques.addEventListener('click', function (e) {
        e.preventDefault();
        addQuesBtn.insertAdjacentHTML('beforebegin', newQuestionSection);
    })

    createbtn.addEventListener('click', function (e){
        e.preventDefault();

        let title = document.getElementById('title').value;
        let deadline = document.getElementById('datepicker').value;
        let question = document.getElementById('question').value;
        let answer = document.getElementById('answer').value;

        const data = { title: title, deadline: deadline, question: question };

        // console.log(data)

        //Fetch api instead jquery ajax
        fetch('https://example.com/profile', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                swal({
                    title: 'Uspeh!',
                    text: 'Uspešno ste kreirali upitnik!',
                    icon: 'success',
                    button: true,
                    timer: 4000
                });
            })
            .catch((error) => {
                console.error('Error:', error);
                swal({
                    title: 'Greška!',
                    text: 'Dogodila se greška: ' + error,
                    icon: 'error',
                    button: false,
                    timer: 4000
                });
            });
    })

    //    datepicker for deadline
    const picker = MCDatepicker.create({
        el: '#datepicker'
    });

    const datebtn = document.getElementById('datebtn');
    datebtn.onclick = () => picker.open();

});
