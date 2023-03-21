var meuCarrossel = document.querySelector('#meu-carrossel');
var carrossel = new bootstrap.Carousel(meuCarrossel, {
  interval: 5000, // muda os slides a cada 3 segundos
  wrap: true // permite o ciclo de slides continuamente
});
