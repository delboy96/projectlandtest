document.addEventListener("DOMContentLoaded", function (event) {
    let addQuestion = document.getElementById('addques');
    let createbtn = document.getElementById('createbtn');

    //because initial data-id is hardcoded to 1
    let questionCounter = 1;

    /**
     *
     * @param {number} questionId
     * @returns {string}
     * @constructor
     */
    function NewAnswer(questionId) {
        return `<div class=" text-right w-full" ">
                    <input type="text" data-question-id="${questionId}" class="answerdiv w-full lg:w-1/2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>
               </div>`
    };


    /**
     *
     * @param {number} questionId
     * @returns {string}
     * @constructor
     */
    function NewQuestion(questionId) {
        return `<div id="questiondiv" class="question flex flex-col text-gray-700 space-y-6 lg:space-y-4">
                        <div class="flex flex-col lg:flex-row lg:grid grid-cols-3 gap-2">
                            <label for="question" class="flex items-center px-3 font-medium">Dodaj pitanje: </label>
                            <input id="question" type="text" data-question-id="${questionId}" class="questiondiv col-span-2 py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Tekst pitanja *" required>
                        </div>
                        <div class="answers flex flex-col space-y-3 ">
                            <div class=" flex flex-col lg:flex-row  lg:grid grid-cols-2 " >
                                <label for="answer" class="flex items-center px-3 my-2 text-gray-700 lg:place-self-end lg:my-auto">Ponuđeni odgovori : </label>
                                <input id="answer" type="text" data-question-id="${questionId}" class="answerdiv answer py-2 px-3 bg-gray-50 text-gray-700 rounded-xl border border-gray-400 focus:outline-none focus:border-teal-600" placeholder="Ponuđeni odgovor" required>
                            </div>
                        </div>
                        <div class="flex flex-row text-right justify-between border-b border-gray-400 border-dashed py-4 lg:pb-3 lg:pt-0">
                            <div class="flex flex-row group">
                                <button type="button" class="px-3">
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
                    </div>`
    }

    // opening new answer section on button click
    // event delegation - event listeners to dynamically created elements

    /**
     *
     * @param elem
     * @param {string} className
     * @returns {boolean}
     */
    function hasClass(elem, className) {
        return elem.className.split(' ').indexOf(className) > -1;
    }

    let form = document.querySelector('#forma');

    form.addEventListener('click', function (e) {
        if (hasClass(e.target.closest('button'), 'addansw')) {
            e.preventDefault();
            let allAnswerDivs = document.querySelectorAll(".answers");
            let lastAnswerDiv = allAnswerDivs[allAnswerDivs.length - 1];
            let inputNum = lastAnswerDiv.getElementsByClassName('answer').length;
            if (inputNum <= 4) {
                lastAnswerDiv.insertAdjacentHTML('beforeend', NewAnswer(questionCounter));
            } else {
                console.log('Najveći mogući broj ponuđenih odgovora je 5!');
                swal({
                    title: 'Upozorenje!',
                    text: 'Najveći mogući broj ponuđenih odgovora je 5.',
                    icon: 'warning',
                    button: true,
                    timer: 4000
                });
            }
        }
    }, false);

    let addQuesBtn = document.querySelector('#addQuesBtn');

    // opening new question section on button click
    addQuestion.addEventListener('click', function (e) {
        e.preventDefault();
        questionCounter++;
        addQuesBtn.insertAdjacentHTML('beforebegin', NewQuestion(questionCounter));
    })

    createbtn.addEventListener('click', function (e) {
        e.preventDefault();

        const title = document.getElementById('title').value;
        const deadline = document.getElementById('datepicker').value;
        const question = document.getElementById('question').value;

        let questions = document.querySelectorAll('.questiondiv');

        let final = [];

        for (let i = 0; i < questions.length; i++) {
            const id = +questions[i].dataset['questionId'];
            let arr = [];

            const answers = document.querySelectorAll('.answerdiv');

            for (let j = 0; j < answers.length; j++) {
                if (id === +answers[j].dataset['questionId']) {
                    arr.push(answers[j].value);
                }
            }

            final.push({
                title: questions[i].value,
                answers: arr,
            });

        }

        const data = {title, deadline, questions: final};

        // Fetch api instead of jquery ajax
        fetch('http://projectest.xyz/api/surveys', {
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
        el: '#datepicker',
        dateFormat: 'dd.mm.yyyy'
    });

    const datebtn = document.getElementById('datebtn');
    datebtn.onclick = () => picker.open();
});
