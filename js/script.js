(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();


(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('modal-needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

var number=2;
document.getElementById('banner').addEventListener('click', function(){
    const imagem = document.getElementById('banner');
    const logo = document.getElementById('logo');
    const home = document.getElementById('navHome');
    const servicos = document.getElementById('navServicos');
    const colaborar = document.getElementById('navColaborar');
    const contratar = document.getElementById('btn_contratar');
    const span = document.getElementById('span');
    const portfolio = document.getElementById('portfolio');
    const colaborador = document.getElementById('btn_colaborar');
    const email = document.getElementById('email');

    if (number==2){
      imagem.src='img/icon3.svg';
      logo.src='img/logo3.png'
      home.style.color='#c64832';
      servicos.style.color='#c64832';
      colaborar.style.color='#c64832';
      contratar.style.backgroundColor='#c64832';
      span.style.color='#c64832';
      portfolio.style.backgroundColor='#c64832';
      colaborador.style.color='#c64832';
      email.style.color='#c64832';

      
      number = 3;
    }

    else if (number==3){
      imagem.src='img/icon4.svg';
      logo.src='img/logo4.png'
      home.style.color='#002e82';
      servicos.style.color='#002e82';
      colaborar.style.color='#002e82';
      contratar.style.backgroundColor='#002e82';
      span.style.color='#002e82';
      portfolio.style.backgroundColor='#002e82';
      colaborador.style.color='#002e82';
      email.style.color='#002e82';

      number = 4;
    }

    else if (number==4){
      imagem.src='img/icon5.svg';
      logo.src='img/logo5.png'
      home.style.color='#70a83b';
      servicos.style.color='#70a83b';
      colaborar.style.color='#70a83b';
      contratar.style.backgroundColor='#70a83b';
      span.style.color='#70a83b';
      portfolio.style.backgroundColor='#70a83b';
      colaborador.style.color='#70a83b';
      email.style.color='#70a83b';

      number = 5;
    }

    else if (number==5){
      imagem.src='img/icon6.svg';
      logo.src='img/logo6.png'
      home.style.color='#58167d';
      servicos.style.color='#58167d';
      colaborar.style.color='#58167d';
      contratar.style.backgroundColor='#58167d';
      span.style.color='#58167d';
      portfolio.style.backgroundColor='#58167d';
      colaborador.style.color='#58167d';
      email.style.color='#58167d';

      number = 6;
    }

    else if (number==6){
      imagem.src='img/icon7.svg';
      logo.src='img/logo7.png'
      home.style.color='#ce6b00';
      servicos.style.color='#ce6b00';
      colaborar.style.color='#ce6b00';
      contratar.style.backgroundColor='#ce6b00';
      span.style.color='#ce6b00';
      portfolio.style.backgroundColor='#ce6b00';
      colaborador.style.color='#ce6b00';
      email.style.color='#ce6b00';

      number = 7;
    }

    else if (number==7){
      imagem.src='img/icon8.svg';
      logo.src='img/logo8.png'
      home.style.color='#dedc1c';
      servicos.style.color='#dedc1c';
      colaborar.style.color='#dedc1c';
      contratar.style.backgroundColor='#dedc1c';
      span.style.color='#dedc1c';
      portfolio.style.backgroundColor='#dedc1c';
      colaborador.style.color='#dedc1c';
      email.style.color='#dedc1c';

      number = 8;
    }

    else if (number==8){
      imagem.src='img/icon9.svg';
      logo.src='img/logo9.png'
      home.style.color='#b20053';
      servicos.style.color='#b20053';
      colaborar.style.color='#b20053';
      contratar.style.backgroundColor='#b20053';
      span.style.color='#b20053';
      portfolio.style.backgroundColor='#b20053';
      colaborador.style.color='#b20053';
      email.style.color='#b20053';

      number = 9;
    }

    else if (number==9){
      imagem.src='img/icon10.svg';
      logo.src='img/logo10.png'
      home.style.color='#000000';
      servicos.style.color='#000000';
      colaborar.style.color='#000000';
      contratar.style.backgroundColor='#000000';
      span.style.color='#000000';
      portfolio.style.backgroundColor='#000000';
      colaborador.style.color='#000000';
      email.style.color='#000000';

      number = 10;
    }

    else if (number==10){
      imagem.src='img/icon11.svg';
      logo.src='img/logo11.png'
      home.style.color='#4ea6b3';
      servicos.style.color='#4ea6b3';
      colaborar.style.color='#4ea6b3';
      contratar.style.backgroundColor='#4ea6b3';
      span.style.color='#4ea6b3';
      portfolio.style.backgroundColor='#4ea6b3';
      colaborador.style.color='#4ea6b3';
      email.style.color='#4ea6b3';

      number = 11;
    }

    else if (number==11){
      imagem.src='img/icon12.svg';
      logo.src='img/logo12.png'
      home.style.color='#4aa07f';
      servicos.style.color='#4aa07f';
      colaborar.style.color='#4aa07f';
      contratar.style.backgroundColor='#4aa07f';
      span.style.color='#4aa07f';
      portfolio.style.backgroundColor='#4aa07f';
      colaborador.style.color='#4aa07f';
      email.style.color='#4aa07f';

      number = 12;
    }

    else {
      imagem.src='img/icon2.svg';
      logo.src='img/logo2.png'
      home.style.color='#246d90';
      servicos.style.color='#246d90';
      colaborar.style.color='#246d90';
      contratar.style.backgroundColor='#246d90';
      span.style.color='#246d90';
      portfolio.style.backgroundColor='#246d90';
      colaborador.style.color='#246d90';
      email.style.color='#246d90';

      number = 2;
    }
    
  })
/*
==========INICIO DOS HOVERS=============
document.getElementById('portfolio').addEventListener('mouseover', function(){
    const portfolio = document.getElementById('portfolio');
  
    if (number==3){
      portfolio.style.backgroundColor='#ff7057';
    }
    
  })
  
document.getElementById('portfolio').addEventListener('mouseout', function(){
    const portfolio = document.getElementById('portfolio');

    if (number==3){
      portfolio.style.backgroundColor='#c64832';
    }
    
    
  })

  document.getElementById('btn_contratar').addEventListener('mouseover', function(){
    const contratar = document.getElementById('btn_contratar');
  
    if (number==3){
      contratar.style.backgroundColor='#ff7057';
    }
    
  })
  
document.getElementById('btn_contratar').addEventListener('mouseout', function(){
    const contratar = document.getElementById('btn_contratar');

    if (number==3){
      contratar.style.backgroundColor='#c64832';
    }
    
    
  })
  ==========FIM DOS HOVERS=============
  */


  /* 
    cores:
      number 2: #246d90
      number 3: #c64832
      number 4: #002e82
      number 5: #70a83b
      number 6: #58167d
      number 7: #ce6b00
      number 8: #dedc1c
      number 9: #b20053
      number 10:  #000000
      number 11:  #4ea6b3
      number 12:  #4aa07f
  
  */

