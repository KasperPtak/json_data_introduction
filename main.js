
const apiResult = document.getElementById('apiResult');

const address = document.getElementById('address')
const nr = document.getElementById('nr')
const kommune = document.getElementById('kommune')

// function getAddress() {
//     if (address.value != "" && nr.value != "" && kommune.value != "") {
//         fetch('https://api.dataforsyningen.dk/adresser?vejnavn='+ address.value +'&postnr=' + kommune.value + '&husnr=' + nr.value)
//         .then(response => response.json())
//         .then(data => apiResult.innerHTML = (data[0].adressebetegnelse));
        
//     }
//     else {
//         console.log("not a valid address")

//     }
    
// }

function getAddress() {
    if (address.value != "" && nr.value != "" && kommune.value != "") {
        fetch('https://api.dataforsyningen.dk/adresser?vejnavn='+ address.value +'&postnr=' + kommune.value + '&husnr=' + nr.value)
        .then(response => response.json())
        .then(data => localStorage.setItem('data', data[0].adressebetegnelse) );
    }
    else {
        console.log("not a valid address kk")

    }
        
    apiResult.innerHTML = localStorage.getItem('data')
    
}


// const elm = querySelector('YOUR_ELEMENT');
// elm.addEventListener('click', (e) => {
//     const inputElm = querySelector('YOUR_INPUT');
//     const jsonPostData = {
//         username: inputElm.value,
//     };
//     // https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch#supplying_request_options
// })

//  .then(data => apiResult.innerHTML = (data[0].adgangsadresse.id)); hjælp til syntaks i api :D
//  .then(data => apiResult.innerHTML = (data[0].adgangsadresse.valglandsdel.navn)); -||-

