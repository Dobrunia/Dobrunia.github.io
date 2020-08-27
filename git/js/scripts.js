let header = document.getElementById('header'),
    products = document.getElementById('products'),
    find = document.getElementById('find');

document.getElementById('Toggle').onclick = () => {
    header.classList.toggle('disp');
    products.classList.add('disp');
    find.classList.add('disp');
};

document.getElementById('Toggle2').onclick = () => {
    products.classList.toggle('disp');
};

document.getElementById('Toggle3').onclick = () => {
    find.classList.toggle('disp');
};

//Нажатие на кнопки

const button0 = document.querySelector('#button0'),
    button1 = document.querySelector('#button1'),
    button2 = document.querySelector('#button2'),
    button3 = document.querySelector('#button3'),
    button4 = document.querySelector('#button4'),
    button5 = document.querySelector('#button5'),
    button6 = document.querySelector('#button6'),
    button7 = document.querySelector('#button7'),
    button8 = document.querySelector('#button8'),
    button9 = document.querySelector('#button9'),
    shop1 = document.getElementById('shop1'),
    shop2 = document.getElementById('shop2'),
    shop3 = document.getElementById('shop3'),
    shop4 = document.getElementById('shop4'),
    shop5 = document.getElementById('shop5'),
    shop6 = document.getElementById('shop6'),
    shop7 = document.getElementById('shop7'),
    shop8 = document.getElementById('shop8'),
    shop9 = document.getElementById('shop9');

//Scroll
let Scroll = () => {
    let toScroll = document.querySelector('#first').offsetHeight;
    window.scrollTo({
        top: toScroll
    });
};

//Проверка перехода
let Check = () => {
    if (location.href !== 'http://localhost:81/src/index.php') {
        location.href = 'http://localhost:81/src/index.php';
    }
};

let Obnul = () => {
    shop1.checked = 0;
    shop2.checked = 0;
    shop3.checked = 0;
    shop4.checked = 0;
    shop5.checked = 0;
    shop6.checked = 0;
    shop7.checked = 0;
    shop8.checked = 0;
    shop9.checked = 0;
};

button0.addEventListener('click', () => {
    Check();
    Scroll();
    shop1.checked = !0;
    shop2.checked = !0;
    shop3.checked = !0;
    shop4.checked = !0;
    shop5.checked = !0;
    shop6.checked = !0;
    shop7.checked = !0;
    shop8.checked = !0;
    shop9.checked = !0;
});

button1.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop1.checked = !0;
});

button2.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop2.checked = !0;
});

button3.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop3.checked = !0;
});

button4.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop4.checked = !0;
});

button5.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop5.checked = !0;
});

button6.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop6.checked = !0;
});
button7.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop7.checked = !0;
});

button8.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop8.checked = !0;
});

button9.addEventListener('click', () => {
    Check();
    Scroll();
    Obnul();
    shop9.checked = !0;
});















