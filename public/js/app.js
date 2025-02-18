const keyword = document.getElementById('keyword');
const container = document.getElementById('container');
keyword.addEventListener('keyup', ()=>{
    let ajax = new XMLHttpRequest();
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState === 4 && ajax.status === 200){
            container.innerHTML = ajax.responseText;
        }
    }
    ajax.open('GET', '../view/sourceSearch.php?keyword=' + keyword.value, true);
    ajax.send();
});

