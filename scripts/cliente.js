function calcularDistanciaEuclidiana(x1, y1, x2, y2) {
    const deltaX = x2 - x1;
    const deltaY = y2 - y1;
    const distanciaEuclidiana = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
    return distanciaEuclidiana;
  }

  function calcularDistancia() {
    const clt_px = parseInt(document.getElementById("clt_px").value);
    const clt_py = parseInt(document.getElementById("clt_py").value);
    const car_dx = parseInt(document.getElementById("car_dx").value);
    const car_dy = parseInt(document.getElementById("car_dy").value);

    if (isNaN(clt_px) || isNaN(clt_py) || isNaN(car_dx) || isNaN(car_dy)) {
      alert("Por favor, insira coordenadas válidas.");
      return;
    }

    const distancia = calcularDistanciaEuclidiana(clt_px, clt_py, car_dx, car_dy);
    const resultadoInput = document.getElementById("result");
    resultadoInput.value = distancia.toFixed(2)+"KM"; // Arredondar o resultado para 2 casas decimais
  }

  //-----------------------------------------------------------------------------------------------
  function calcular() {
    const clt_px = parseInt(document.getElementById("clt_px").value);
    const clt_py = parseInt(document.getElementById("clt_py").value);
    const clt_dx = parseInt(document.getElementById("clt_dx").value);
    const clt_dy = parseInt(document.getElementById("clt_dy").value);
    const precoPorKm = parseFloat(document.getElementById("preco").value);

    if (isNaN(clt_px) || isNaN(clt_py) || isNaN(clt_dx) || isNaN(clt_dy)) {
      alert("Por favor, insira coordenadas válidas.");
      return;
    }

    const distancia = calcularDistanciaEuclidiana(clt_px, clt_py, clt_dx, clt_dy);
    const resultadoInput = document.getElementById("result1");
    const tempo = document.getElementById("tempo");

    resultadoInput.value = distancia.toFixed(2)+"KM"; // Arredondar o resultado para 2 casas decimais
    tempo.value = calcularTempo(distancia).toFixed(2)+"Min";
    const valorAPagar = distancia * precoPorKm;
    document.getElementById("money").value = valorAPagar.toFixed(2);
    
  }

  function calcularTempo(d){
    const time = (d / 75)*60;
    return time;
  }














  //------------------------------------------------------------------------------------------------

   function calcularDistanciaEuclidiana(x1, y1, x2, y2) {
    const deltaX = x2 - x1;
    const deltaY = y2 - y1;
    const distanciaEuclidiana = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
    return distanciaEuclidiana;
  }

  const dcarIcons = document.querySelectorAll("#dcar");
  dcarIcons.forEach((icon) => {
    icon.addEventListener("click", function () {
      const row = this.closest("tr"); // Encontra a linha associada ao ícone clicado
      const x2 = parseFloat(row.querySelector("td:nth-child(6)").textContent); // Obtém o valor da Pos. X da linha
      const y2 = parseFloat(row.querySelector("td:nth-child(7)").textContent); // Obtém o valor da Pos. Y da linha

      // Aqui, você pode obter as coordenadas do Cliente, se necessário (clt_px e clt_py)

      // Supondo que você tenha as coordenadas do Cliente em clt_px e clt_py
      // Substitua clt_px e clt_py pelas coordenadas corretas
      const clt_px = 0;
      const clt_py = 0;

      const distancia = calcularDistanciaEuclidiana(clt_px, clt_py, x2, y2);
      const resultadoInput = document.getElementById("result");
      resultadoInput.value = distancia.toFixed(2)+"KM"; // Arredondar o resultado para 2 casas decimais
    });
  });