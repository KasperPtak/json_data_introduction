
const apiResult = document.getElementById('apiResult');

const address = document.getElementById('address')
const nr = document.getElementById('nr')
const kommune = document.getElementById('kommune')

function getAddress() {
    if (address.value != "" && nr.value != "" && kommune.value != "") {
        fetch('https://api.dataforsyningen.dk/adresser?vejnavn='+ 
        address.value +
        '&postnr=' + 
        kommune.value + 
        '&husnr=' + 
        nr.value)
        .then(response => response.json())
        .then(data => apiResult.innerHTML = (data[0].adressebetegnelse));
        
    }
    else {
        console.log("not a valid address")

    }
    
}


//  .then(data => apiResult.innerHTML = (data[0].adgangsadresse.id)); hjælp til syntaks i api :D
//  .then(data => apiResult.innerHTML = (data[0].adgangsadresse.valglandsdel.navn)); -||-

