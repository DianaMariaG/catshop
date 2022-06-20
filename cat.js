const url = 'http://localhost/catshop/api/cat-api.php';
 
async function adoptCat(id){
    const cat = {
        'cat_id': parseInt(id)
    }
    const response = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(cat)
    })
    window.location = 'userPage.php';
}

async function getCats() {
    const response = await fetch(url, {
        method: 'GET'
    })
    return await response.json();
}
