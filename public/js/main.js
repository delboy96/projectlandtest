document.addEventListener("DOMContentLoaded", function(event) {
    let addansw = document.getElementById('addansw');
    let createbtn = document.getElementById('createbtn');

    addansw.addEventListener('click', function (e) {
        e.preventDefault();

    })

    createbtn.addEventListener('click', function (e){
        e.preventDefault();
        //const data pa console log svih podataka
        let title = document.getElementById('title').value;
        let deadline = document.getElementById('deadline').value;
        let question = document.getElementById('question').value;
        let answer = document.getElementById('answer').value;

        // console.log(title)

        // $.ajax({
        //     method: 'post',
        //     url: 'http://projectest.xyz/api/surveys',
        //     data:'',
        //     success:function (data) {
        //         console.log('ok')
        //     },
        //     error:function (error) {
        //         console.log(error)
        //     },
        // });
    })
});
