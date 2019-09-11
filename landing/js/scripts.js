var d=document, navLink=d.querySelectorAll('.nav-link');

for(var i=0; i<navLink.length; i++){
   navLink[i].onclick=function(){
      this.parentElement.parentElement.parentElement.className='navbar-collapse collapse';
      this.parentElement.parentElement.parentElement.previousElementSibling.setAttribute('aria-expanded', false);
   }
}

d.addEventListener("DOMContentLoaded", function(event) {
      
    fetch("http://localhost/wordpress/wp-json/wp/v2/caracteristicas",{
       method: "GET",
       mode: "cors",
       headers:{
             'Content-Type': 'application/json',
             'Access-Control-Request-Method': "*"
       }
    }).then(function(response){
       return response.json();

    }).then(function(data){
          var nos = d.querySelector("#nos div");

          for(var i in data){
             nos.innerHTML += 
                `<div class='col-12 col-md-6 col-xl-3'>
                   <p>`+data[i].content.rendered+`</p>
                </div>
                `;
          }
       
    });

    fetch("http://localhost/wordpress/wp-json/wp/v2/promociones",{
       method: "GET",
       mode: "cors",
       headers:{
             'Content-Type': 'application/json',
             'Access-Control-Request-Method': "*"
       }
    }).then(function(response){
       return response.json();

    }).then(function(data){
          var combos = d.querySelector("#combos div");

          for(var i in data){
             combos.innerHTML += 
                `<div class='col-12 col-sm-6 col-xl-3'>
                   <p>`+data[i].content.rendered+`</p>
                </div>
                `;
          }
       
    })

    fetch("http://localhost/wordpress/wp-json/wp/v2/posts?categories=8",{
       method: "GET",
       mode: "cors",
       headers:{
             'Content-Type': 'application/json',
             'Access-Control-Request-Method': "*"
       }
    }).then(function(response){
       return response.json();

    }).then(function(data){
          var pet = d.querySelector("#pet");

          for(var i in data){
             pet.innerHTML += 
                `<p>`+data[i].content.rendered+`</p>
                `;
          }
       
    });

    fetch("http://localhost/wordpress/wp-json/wp/v2/reviews",{
       method: "GET",
       mode: "cors",
       headers:{
             'Content-Type': 'application/json',
             'Access-Control-Request-Method': "*"
       }
    }).then(function(response){
       return response.json();

    }).then(function(data){
       var estado, cont=0, reviews = d.querySelector("#rese .carousel-inner");
       
          for(var i in data){
             if(cont === 0){
                estado='active';
             }else{
                estado='';
             }

             reviews.innerHTML += 
               `<li class="carousel-item `+estado+`" data-interval="6000">
                  <p>`+data[i].content.rendered+`</p>
               </li>
               `;

            
             cont++;
          }
       
    });

    fetch("http://localhost/wordpress/wp-json/wp/v2/pages/284",{
       method: "GET",
       mode: "cors",
       headers:{
             'Content-Type': 'application/json',
             'Access-Control-Request-Method': "*"
       }
    }).then(function(response){
       return response.json();

    }).then(function(data){
       var pMenu=d.querySelector('#menu'), contenido=d.querySelector('#contenido'), loading=d.querySelector('#loading');
       
       pMenu.innerHTML += 
                `<a href="`+data.link +`" target="_blank">Ver menú</a>
                `; 


        loading.firstElementChild.style.display='none';
        loading.style.opacity='0';
        contenido.style.display='block';
        loading.addEventListener('transitionend', function(){
            loading.style.display='none';
        })
       
    })

});