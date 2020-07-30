let header = document.getElementById('header'),
    products = document.getElementById('products');

document.getElementById('Toggle').onclick = () => {
    header.classList.toggle('disp');
    products.classList.add('disp');
};

document.getElementById('Toggle2').onclick = () => {
    products.classList.toggle('disp');
};
