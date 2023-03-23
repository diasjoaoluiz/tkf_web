//Carrosel

var meuCarrossel = document.querySelector('#meu-carrossel');
var carrossel = new bootstrap.Carousel(meuCarrossel, {
  interval: 5000, // muda os slides a cada 5 segundos
  wrap: true // permite o ciclo de slides continuamente
});
