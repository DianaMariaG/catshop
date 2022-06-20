async function displayAdoptedCats() {
    let catsHistoryElement = document.getElementById("history-cats");
    const adoptedCats = await getCats();
    for (let cat of adoptedCats) {
        let catDivElement = document.createElement('div');
        catDivElement.setAttribute('class', 'userPage-div');

        let catImageElement = document.createElement('img');
        catImageElement.src = cat['image_url'];
        catImageElement.setAttribute('class','img');

        let catNameElement = document.createElement('h3');
        catNameElement.innerText = cat['name'];
        catNameElement.setAttribute('class', 'userPage-catName');

        let catPurchaseDateElement = document.createElement('h3');
        catPurchaseDateElement.innerText = "You adopted me on: " + cat['purchase_date'];
        catPurchaseDateElement.setAttribute('class', 'purchase-date');

        
        catDivElement.appendChild(catNameElement);
        catDivElement.appendChild(catImageElement);
        catDivElement.appendChild(catPurchaseDateElement);
        catsHistoryElement.appendChild(catDivElement);
    }
}
displayAdoptedCats();