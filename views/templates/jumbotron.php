  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Universe Lotto</h1>
      <p class="lead" id="lottosub">Home / WorldWide Lotto</p>
<!--       <a class="visually-hidden" href="index.php">Home</a>
 -->    </div>
  </div>



  <!-- <script>
  // Función para obtener el valor de la query string (?page=resultadoX)
  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  // Función para actualizar el texto en lottosub según la página actual
  function updateLottoSub() {
    const page = getQueryParam('page');

    // Define un mapeo de páginas a texto
    const pageTextMap = {
      'resultado1': 'United States / Powerball, Megamillions, Cash For Life, New York Lotto, Florida Lotto, etc..',
      'resultado5': 'Argentina / Loto Tradicional Argentina, Loto 5, Brinco, Quini, etc..',
      'resultado13': 'Austria / Lotto Austria, Zahlenlotto, Euromillions, etc..',
      'resultado3': 'Brazil / Mega-Sena, Quina, Lotofacil, Lotomania, Timemania, etc..',
      'resultado2': 'Canada / Daily Grand, Lotto 6/49, Lotto MAX, Lottario, etc..',
      'resultado4': 'Chile / Loto, Racha, Kino, Chanchito Regalon, etc..',
      'resultado6': 'Colombia / Baloto, Boyacá, Cruz Roja, Cundimarca, etc..',
      'resultado11': 'Costa Rica / Lotto Costa Rica, Lotto Revancha, 3 Monazos, etc..',
      'resultado21': 'Finland / Lotto Finlandia, Eurojackpot, Vikinglotto, etc..',
      'resultado17': 'France / Euromillions, Keno, Lotto, etc..',
      'resultado14': 'Hungary / Hatoslotto, Otoslotto, Joker, etc..',
      'resultado22': 'Iceland / Lotto Iceland, Vikinglotto, Eurojackpot.',
      'resultado23': 'Ireland / Daily Million, Lotto Irlanda, Euromillions, etc..',
      'resultado27': 'Italy / SuperEnalotto, Eurojackpot Italia.',
      'resultado31': 'Loto Bonheur.',
      'resultado33': 'Kenya / Lotto Daily, Lotto Mega Jackpot.',
      'resultado24': 'Latvia / Latloto 5/35, Dzokers, Eurojackpot, etc..',
      'resultado18': 'Luxembourg / High 5, Lotto Luxemburgo, Euromillions.',
      'resultado9': 'Mexico / Chispazo, Melate, Progol, Tris, etc..',
      'resultado19': 'Netherlands / Lotto Netherlands, Lotto XL, Eurojackpot.',
      'resultado32': 'Nigeria / 06 Lotto, Bingo Lotto, Bonanza Lotto, International Lotto, etc..',
      'resultado25': 'Norway / Lotto Norway, Eurojackpot, Vikinglotto.',
      'resultado10': 'Panama / Miercolito, Dominical, Extraordinaria, etc..',
      'resultado7': 'Peru / Ganadiario, Kabala, Kabala Chau Chamba, Tinka.',
      'resultado28': 'Portugal / Totoloto, Euromillions.',
      'resultado16': 'Slovakia / Loto Slovakia, Keno 10, Eurojackpot Slovakia, etc..',
      'resultado30': 'Slovenia / Loto Slovenia, Loto Slovenia Plus, Eurojackpot Slovenia, etc..',
      'resultado35': 'South Africa / Daily Lotto, Lotto South Africa, Powerball, Gold Rush Million, etc..',
      'resultado12': 'Spain / Bonoloto, La Primitiva, Euromillones, La Quiniela, etc..',
      'resultado26': 'Sweden / Vikinglotto, Eurojackpot.',
      'resultado20': 'Switzerland / Swiss Lotto, Magic 3, Euromillions.',
      'resultado8': 'Uruguay / 5 de Oro, Revancha Uruguay.'
    };

    const lottosub = document.getElementById('lottosub');

/*     if (page in pageTextMap) {
      lottosub.innerText = pageTextMap[page];
    } else {
      // Texto predeterminado si la página no se encuentra en el mapeo
      lottosub.innerText = 'Home / WorldWide Lotto';
    }
  } */

  if (page in pageTextMap) {
      // Utiliza setTimeout para cambiar el texto con un tiempo de transición de 500 ms
      setTimeout(function () {
        lottosub.textContent = pageTextMap[page];
      }, 100);
    } else {
      // Texto predeterminado si la página no se encuentra en el mapeo
      lottosub.textContent = 'Home / WorldWide Lotto';
    }
  }

  // Llama a la función cuando se carga la página
  window.addEventListener('load', updateLottoSub);
</script>
 -->