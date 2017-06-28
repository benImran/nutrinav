  var tabs= document.querySelectorAll('.button.is-green');
    var tabactive= document.querySelector('.button.is-green.is-active');

    var visible=document.querySelector('.section.see');
    var notvisible=document.querySelector('.section.notsee');

    for (let i=0; i<tabs.length; i++){
        tabs[i].addEventListener('click', function () {
            var tabactive= document.querySelector('.button.is-green.is-active');
            var visible=document.querySelector('.section.see');
            var notvisible=document.querySelector('.section.notsee');
            tabactive.classList.remove('is-active');
            tabs[i].classList.add('is-active');

            visible.classList.remove('see');
            visible.classList.add('notsee');
            notvisible.classList.remove('notsee');
            notvisible.classList.add('see')

        })
    }