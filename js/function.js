"use strict";

function getData(data) {

    let HTML = '';
    let sectionBody = document.querySelector('.first__text');

    if (Array.isArray(data)) {

        // -----------
        for (let i = 0; i < data.length; i++) {

            HTML += getList(data[i]);
        }

        return sectionBody.innerHTML = HTML;
        // -----------

    } else {
        return console.error('Tai ne masyvas!');
    }
}

function getList(list) {

    console.log(list.Text.first_text);
    console.log(list.Text.text_block);

    let HTML = `<h1>${list.Text.first_text}</h1>`;

    return HTML;
}


//----------- !!!!!!!
getData(feed);