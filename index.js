let count = 1;
document.getElementById("slide1").checked = true;

setInterval(function () {
  nextImage();
}, 4100);

function nextImage() {
  count++;
  if (count > 5) {
    count = 1;
  }
  document.getElementById("slide" + count).checked = true;
}

const frases = [
  "Domine as quadras com estilo e confiança!",
  "Basquete: mais que um esporte apaixonante!",
  "Inspire-se com Jerseys exclusivas do basquete!",
  "Faça parte do jogo com as melhores Jerseys do mercado.",
  "Mostre seu amor pelo basquete com qualidade.",
];

const textoElemento = document.createElement("p");
textoElemento.classList.add("texto-efeito");
const mainElemento = document.getElementById("main");
mainElemento.appendChild(textoElemento);

let index = 0;
let fotoIndex = 0;

function escreverTexto() {
  const frase = frases[index];
  const textoAtual = frase.slice(0, fotoIndex + 1);
  textoElemento.textContent = textoAtual;

  if (fotoIndex === frase.length) {
    index++;
    fotoIndex = 0;
    if (index === frases.length) {
      index = 0;
    }
    setTimeout(escreverTexto, 2000); // Intervalo de 2,25 segundos entre cada frase
  } else {
    fotoIndex++;
    setTimeout(escreverTexto, 40); // Intervalo de 50 milissegundos entre cada letra
  }
}

escreverTexto();
