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

// document.getElementById('Toggle2').onmouseover = () => {
//     products.classList.toggle('disp');
// };

// let position = 0;

// document.getElementById('Toggle2').value = position;
