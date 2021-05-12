"use strict";

function getData(data) {

    let HTML = '';
    let sectionBody = document.querySelector('.main');

    if (Array.isArray(data)) {

        // -----------
        for (let index of data) {
            HTML += getList(index);
        }

        return sectionBody.innerHTML = HTML;
        // -----------

    } else {
        return console.error('Tai ne masyvas!');
    }
}
function getData(data) {

    let HTML = '';
    let sectionBody = document.querySelector('.main');

    if (Array.isArray(data)) {

        // -----------
        for (let index of data) {
            HTML += getList(index);
        }

        return sectionBody.innerHTML = HTML;
        // -----------

    } else {
        return console.error('Tai ne masyvas!');
    }
}

function getList(list) {

    let HTML = `
                <section class="landing__page-section">
                    <div class="first__section">
                                ${returnHeader(list.logo.main_logo)}
                        <div class="first__text">
                            <h1>${list.Text.first_text}</h1>
                        </div>
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                    </div> 
                    ${returnSecondSection(list.Text.text_block, list.Button.first_button)} 
                </section>`;

    return HTML;
}

function returnHeader(logo) {
    let HTML = `<header class="header">
                    <div class="logo">
                        <a class="main__logo" href="#">
                            <img alt="" class="logo__image" src="./assets/img/${logo}">
                        </a>
                    </div>
                </header>`;

    return HTML;
}

function returnSecondSection(Text, Button) {
    let HTML = `<div class="second__section"> 
                        <div class="left">
                           <div class="text_block">
                                <p>${Text}</p>
                           </div>
                           <div class="first__button">
                                <button class="btn__more">${Button}</button>
                            </div>  
                        </div>
                         <div class="right">
                            <div class="first__video">
                                <div class="video__block">
                                    
                                </div>                            
                            </div>
                        </div>                        
                    </div>`;

    return HTML;
}


//----------- !!!!!!!
getData(feed);