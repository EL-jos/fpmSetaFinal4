let nbByPage = document.querySelector('.table_qualification .controls select');
let tbody = document.querySelector('tbody');
let tr = tbody.getElementsByTagName('tr');
let arrTr = [];
let pagination = document.querySelector('.pagination');

for(let i = 0; i < tr.length; ++i){
    arrTr.push(tr[i]);
}

nbByPage.onchange = rowCount;

function rowCount(e) {
    let neil = pagination.querySelectorAll('.list');
    console.log(neil);
    neil.forEach(n => n.remove());
    let limit = parseInt(e.target.value);
    displayPage(limit);
}
function displayPage(limit) {

    tbody.innerHTML = '';
    
    for(let i = 0; i < limit; ++i){
        if(arrTr[i] !== undefined){
            tbody.appendChild(arrTr[i]);
        }
    }
    buttonGenerator(limit);
}
displayPage(10);

function buttonGenerator(limit){

    const nofTr = arrTr.length;
    if(nofTr <= limit){
        pagination.style.display = 'none';
    }else{
        pagination.style.display = 'grid';
        const nofPage = Math.ceil(nofTr / limit);
        for(let i = 1; i <= nofPage; ++i){
            let button = document.createElement('button');
            button.classList.add('el-center-box', 'list');
            button.setAttribute('data-page', i);
            button.textContent = `${i}`;
            pagination.insertBefore(button, pagination.querySelector('.next'));

            button.onclick = e => {

                let x = e.target.getAttribute('data-page');
                tbody.innerHTML = '';
                x--;
                let start = limit * x;
                let end = start + limit;
                let page = arrTr.slice(start, end);

                for(let i = 0; i < page.length; ++i){
                    let item = page[i];
                    tbody.appendChild(item);
                }
            }
        }
    }

    let z = 0;
    function nextElement(){
        if(this.id === 'next'){
            z == arrTr.length - limit ? (z=0) : (z+= limit);
        }else if(this.id === 'prev'){
            z == 0 ? arrTr.length - limit : (z-=limit);
        }

        tbody.innerHTML = '';
        for (let c = z; c < z + limit; c++) {
            tbody.appendChild(arrTr[c]);
        }
    }
    pagination.querySelector('.next').onclick = nextElement;
    pagination.querySelector('.prev').onclick = nextElement;

}