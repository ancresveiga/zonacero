const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
const diasSemana = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

const fechaActual = new Date();
let mesActual = fechaActual.getMonth();
let añoActual = fechaActual.getFullYear();

const mesYano = document.getElementById('mes-actual');
const diasContenedor = document.getElementById('dias');

const btnMesAnterior = document.getElementById('mes-anterior');
const btnMesSiguiente = document.getElementById('mes-siguiente');

btnMesAnterior.addEventListener('click', mostrarMesAnterior);
btnMesSiguiente.addEventListener('click', mostrarMesSiguiente);

mostrarCalendario(mesActual, añoActual);

function mostrarCalendario(mes, año) {
  const primerDiaMes = new Date(año, mes, 1);
  const ultimoDiaMes = new Date(año, mes + 1, 0);

  mesYano.textContent = `${meses[mes]} ${año}`;

  let diaSemana = primerDiaMes.getDay();

  // Rellenar los días previos al primer día del mes
  for (let i = 0; i < diaSemana; i++) {
    const dia = document.createElement('div');
    dia.classList.add('dia');
    dia.textContent = '';
    diasContenedor.appendChild(dia);
  }

  // Rellenar los días del mes
  for (let dia = 1; dia <= ultimoDiaMes.getDate(); dia++) {
    const diaElemento = document.createElement('div');
    diaElemento.classList.add('dia');
    diaElemento.textContent = dia;
    diaElemento.addEventListener('click', () => mostrarImagenEvento(dia, mes, año));
    diasContenedor.appendChild(diaElemento);
  }
}

function mostrarMesAnterior() {
  mesActual--;
  if (mesActual < 0) {
    mesActual = 11;
    añoActual--;
  }
  limpiarCalendario();
  mostrarCalendario(mesActual, añoActual);
}

function mostrarMesSiguiente() {
  mesActual++;
  if (mesActual > 11) {
    mesActual = 0;
    añoActual++;
  }
  limpiarCalendario();
  mostrarCalendario(mesActual, añoActual);
}

function limpiarCalendario() {
  diasContenedor.innerHTML = '';
}

function mostrarImagenEvento(dia, mes, año) {
  const imagenEvento = document.getElementById('imagen-evento');
  // Suponiendo que tengas una lógica para obtener la imagen del evento basada en la fecha seleccionada
  const imagenSrc = `evento_${dia}${mes + 1}${año}.jpg`; // Cambia esto según tus necesidades
  imagenEvento.src = imagenSrc;
}
