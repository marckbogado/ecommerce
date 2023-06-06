//MENU DROPDOWN-------------------------------------
/*AO CLICAR VAI MUDAR ENTRE APARECER E ESCONDER*/
function dropdown() {
    document.getElementById("meuDropdown").classList.toggle("show");
  }
function dropdown2() {
    document.getElementById("meuDropdown2").classList.toggle("show");
}
  
//FECHA O MENU SE CLICAR FORA
window.onclick = function(event) {
    if (!event.target.matches('.menu-moedas-btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-conteudo");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
}



//Galeria de Imagens
//selecionando a galeria (img)
const galeria = document.querySelectorAll(".guitarra-imagens img");
//selecinando o container que envolve a galeria
const galeriaContainer = document.querySelector(".guitarra-imagens");
//função para trocar a imagem
function trocarImagem(event) {
  const img = event.currentTarget;
  const media = matchMedia("(min-width: 1000px)").matches;

  if (media){
  galeriaContainer.prepend(img);//prepend adicona o item a frente
  }
}

//evento de click para trocar a imagem
function eventosGaleria(img) {
  img.addEventListener('click', trocarImagem);
}

galeria.forEach(eventosGaleria);




//descrição review
const tabs = document.querySelectorAll('.tab_botao');
const todoConteudo = document.querySelectorAll('.conteudo');

tabs.forEach((tab, index) =>{
  tab.addEventListener('click', ()=> {
    tabs.forEach(tab=>{tab.classList.remove('active')})
    tab.classList.add('active');

    todoConteudo.forEach(conteudo=>{conteudo.classList.remove('aparecer')});
    todoConteudo[index].classList.add('aparecer');
  })
})



//AVALIAÇÂO EM ESTRELAS
const estrela = document.querySelectorAll('.estrela');

document.addEventListener('click', function(i) {
  const classStar = i.target.classList;
  if (!classStar.contains('e-ativo')) {

    estrela.forEach(function(star){
      star.classList.remove('e-ativo');
    });

    classStar.add('e-ativo');
    console.log(i.target.getAttribute('data-avaliacao'));
  }
});