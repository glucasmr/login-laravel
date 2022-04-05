(function(win,doc){
    'use strict';

    function confirmDel(event){
        event.preventDefault();
            let url = event.target.parentNode.href;
            console.log(url);    
        let token = doc.getElementsByName("_token")[0].value;

        if(confirm("Deseja mesmo apagar?")){
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    console.log("DEU CERTO!");
                    url = window.location.href;
                    win.location.href = url;
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }
        if(doc.querySelector('.js-del')){
            let btn = doc.querySelectorAll('.js-del');
            for(let i=0; i<btn.length; i++){
                btn[i].addEventListener('click',confirmDel,false);
            }
        }
    
})(window,document);