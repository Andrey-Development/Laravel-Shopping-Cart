import './bootstrap';

import axios from 'axios';
import { Ziggy } from './ziggy';

window.Ziggy = Ziggy;
window.axios = axios;

$(document).on('click', ".more-details", async function () {
    const { show } = Ziggy.routes;
    const id = $(this).data('id');

    let url = show.uri.replace("{id}", id);
    await axios.get(url).then((res) => {
        if (res.status === 200) {
            populateModalDatils(res.data);
        }
    });
});

const populateModalDatils = ({ id, name, image, description, unit_price, quantity }) => {
    $('#staticBackdropLabel').text(name);
    $('#addToCart').data('id', id);

    $('#modal-details-body').html(`
        <img src="${image}" class="img-fluid" alt="${name}">
        <div class="card">
            <div class="card-body">
                <h5 id="card-details-title" class="card-title">${name}</h5>
                <div class="d-flex justify-content-between align-items-center my-2">
                    <h6 class="card-subtitle mb-2 text-body-secondary">R$ ${unit_price}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        Quantidade: ${quantity.length === 1 ? `${quantity} unidade disponível` : `${quantity} unidades disponíveis`}
                    </h6>
                </div>
                <p class="card-text">${description}</p>
            </div>
        </div>
    `);

    $('#modal-details').show().addClass('show');
}

$(document).on('click', "#closeModalDetails", () => restartModalDetails());

$(document).on('click', '#addToCart', async function () {
    let items = JSON.parse(localStorage.getItem('cart')) || [];

    let id = $(this).data('id');
    let quantity = 1;
    items.push({id, quantity});

    localStorage.setItem('cart', JSON.stringify(items));

    alert(`O produto ${$('#card-details-title').text()} foi adicionado com sucesso!`);
    restartModalDetails();
});

const restartModalDetails = () => {
    $('#modal-details').hide().removeClass('show');
    $('#staticBackdropLabel').text('');
    $('#addToCart').data('id', '');
}

$(document).on('click', '#viewToCart', async function () {
    const items = JSON.parse(localStorage.getItem('cart'));
    console.log(items);

    $('#modal-cart').show().addClass('show');
});

$(document).on('click', '#closeToCart', async function () {
    $('#modal-cart').hide().removeClass('show');
});

$(document).on('click', '#paymentStep', async function () {
    localStorage.setItem('cart', JSON.stringify([]));
    $('#modal-cart').hide().removeClass('show');
});
