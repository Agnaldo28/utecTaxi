// sqrt((x2-x1)^2+(y2-y1)^2))
var x1 = document.getElementById('clt_px');
var y1 = document.getElementById('clt_py');
var x2 = document.getElementById('clt_dx');
var y2 = document.getElementById('clt_dx');

console.log(x1.value)
console.log(y1.value)
console.log(x2.value)
console.log(y2.value)



function calcularDistanciaEuclidiana(x1, y1, x2, y2) {
    var deltaX = x2 - x1;
    var deltaY = y2 - y1;
    var distanciaEuclidiana = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
    return distanciaEuclidiana;
  }

  function calcularDistancia() {
    const ponto1 = { x: x1.value, y: y1.value };
    const ponto2 = { x: x2.value, y: y2.value };
  
    const distancia = calcularDistanciaEuclidiana(ponto1.x, ponto1.y, ponto2.x, ponto2.y);
  
    const calcularBtn = document.getElementById('calcularBtn');
    const distanciaInput = document.getElementById('distanciaInput');
  
    calcularBtn.style.display = 'none';
    distanciaInput.style.display = 'inline';
    distanciaInput.value = distancia;
  }
  

  
