// Menú celular
const drawer = document.getElementById('drawer');
const btnMenu = document.querySelector('[data-menu]');

function menu(abrir) {
  drawer.classList.toggle('on', abrir);
  btnMenu.querySelector('use').setAttribute('href', abrir ? '#i-close' : '#i-menu');
}

btnMenu.addEventListener('click', () => menu(!drawer.classList.contains('on')));

// Secciones
const nav = { 'inicio': 'inicio', 'productos': 'productos', 'sobre-nosotras': 'nosotras', 'metodos-de-pago': 'pagos', 'contacto': 'contacto' };

function filtrar(cat) {
  let total = 0;
  document.querySelectorAll('[data-seccion]').forEach(s => {
    const ver = cat === 'todo' || s.dataset.seccion === cat;
    s.style.display = ver ? '' : 'none';
    if (ver) total += s.querySelectorAll('.card').length;
  });
  const chip = document.querySelector('[data-filtro="' + cat + '"]');
  document.querySelectorAll('[data-filtro]').forEach(c => c.classList.toggle('on', c === chip));
  document.querySelector('[data-contador]').textContent = total + ' productos';
  document.querySelector('[data-titulo-cat]').textContent = cat === 'todo' ? 'Todas nuestras prendas' : chip.textContent;
  document.querySelector('[data-titulo-miga]').textContent = cat === 'todo' ? 'Productos' : 'Productos / ' + chip.textContent;
}

function mostrar() {
  let id = location.hash.slice(1) || 'inicio';
  let cat = 'todo';
  if (id.startsWith('productos/')) {
    cat = id.split('/')[1];
    id = 'productos';
  }
  const vista = document.querySelector('[data-vista="' + id + '"]') || document.querySelector('[data-vista="inicio"]');
  document.querySelectorAll('.vista').forEach(v => v.classList.toggle('activa', v === vista));

  const seccion = vista.dataset.vista.startsWith('producto/') ? 'productos' : vista.dataset.vista;
  document.querySelectorAll('[data-nav]').forEach(a => a.classList.toggle('on', a.dataset.nav === nav[seccion]));

  if (vista.dataset.vista === 'productos') {
    filtrar(document.querySelector('[data-filtro="' + cat + '"]') ? cat : 'todo');
  }
  window.scrollTo(0, 0);
  menu(false);
}

window.addEventListener('hashchange', mostrar);
mostrar();

// Color y talle del producto
document.addEventListener('click', e => {
  const color = e.target.closest('[data-color]');
  if (color) {
    const info = color.closest('.info');
    info.querySelectorAll('[data-color]').forEach(b => b.classList.toggle('on', b === color));
    info.querySelector('[data-color-nombre]').textContent = color.dataset.color;
  }

  const talle = e.target.closest('.talles button');
  if (talle && !talle.classList.contains('off')) {
    const info = talle.closest('.info');
    info.querySelectorAll('.talles button').forEach(b => b.classList.toggle('on', b === talle));
    info.querySelector('[data-talle-nombre]').textContent = ': ' + talle.textContent;
  }
});
