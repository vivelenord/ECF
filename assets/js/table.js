function createRow(ligne) {
    //ligne : {produit, image, quantité, prix, sous-total}
    const tr = document.createElement('tr')

    const tdProduit = document.createElement('td')
    tdProduit.classList.add('produit')
    tdProduit.innerText = ligne.produit
    tr.appendChild(tdProduit)

    const tdImage = document.createElement('td')
    tdImage.classList.add('image')
    tdImage.innerText = ligne.image
    tr.appendChild(tdImage)  

    const tdQuantité = document.createElement('td')
    tdQuantité.classList.add('quantité')
    tdQuantité.innerText = ligne.quantité
    tr.appendChild(tdQuantité) 

    const tdPrix = document.createElement('td')
    tdPrix.classList.add('prix')
    tdPrix.innerText = ligne.prix.toFixed(2)
    tr.appendChild(tdQuantité) 

    const tdSoustotal = document.createElement('td')
    tdSoustotal.classList.add('sous-total')
    tdSoustotal.innerText = ligne.soustotal.toFixed(2)
    tr.appendChild(tdSous-total) 

    return tr
}

function createTable(lignes){
    const tbody = document.querySelector('#table-id tbody');
    const totalCell = document.querySelector('.panier tfoot .total');

    const rows = lignes.map(ligne =>({...ligne, soustotal:ligne.prix*ligne.quantité,O}))
    rows.forEach(ligne => tbody.appendChild(createRow(ligne)))
    const total = roows.reduce((acc,ligne) => acc + ligne.sous-total,0)
    totalCell.innerText = total.toFixed(2)
}



