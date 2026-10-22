<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Íconos -->
<svg width="0" height="0" style="position:absolute">
  <defs>
    <symbol id="i-wa" viewBox="0 0 24 24"><path d="M3.6 20.4001L4.9 16.2001C3.84792 14.3949 3.48905 12.2684 3.89043 10.2178C4.2918 8.16731 5.42597 6.33303 7.08104 5.05769C8.73612 3.78235 10.7989 3.15317 12.884 3.28771C14.9691 3.42225 16.9339 4.31129 18.4113 5.78875C19.8888 7.26621 20.7779 9.23103 20.9124 11.3161C21.0469 13.4012 20.4177 15.464 19.1424 17.1191C17.8671 18.7741 16.0328 19.9083 13.9823 20.3097C11.9318 20.7111 9.80524 20.3523 8 19.3001L3.6 20.4001Z" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.2 8.30013C8.8 11.2001 12.6 15.1001 15.7 14.7001L16.6 13.3001L14.6 12.2001L13.7 13.0001C12.6 12.5001 11.4 11.3001 10.9 10.2001L11.7 9.30013L10.6 7.30013L9.2 8.30013Z" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-ig" viewBox="0 0 24 24"><path d="M15.5 3.5H8.5C5.73857 3.5 3.5 5.73857 3.5 8.5V15.5C3.5 18.2614 5.73857 20.5 8.5 20.5H15.5C18.2614 20.5 20.5 18.2614 20.5 15.5V8.5C20.5 5.73857 18.2614 3.5 15.5 3.5Z" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79087 14.2091 8 12 8C9.79087 8 8 9.79087 8 12C8 14.2091 9.79087 16 12 16Z" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17.2 7.4C17.5314 7.4 17.8 7.1314 17.8 6.8C17.8 6.46866 17.5314 6.20003 17.2 6.20003C16.8687 6.20003 16.6 6.46866 16.6 6.8C16.6 7.1314 16.8687 7.4 17.2 7.4Z" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-tiktok" viewBox="0 0 24 24"><path d="M12.2434 3.01476C13.2102 3 14.1696 3.00738 15.129 3C15.188 4.12914 15.594 5.28042 16.4206 6.07746C17.2471 6.89664 18.4132 7.27302 19.5497 7.39848V10.3726C18.487 10.3357 17.4168 10.1143 16.4501 9.65676C16.0294 9.46488 15.6383 9.22134 15.2545 8.97042C15.2471 11.1254 15.2618 13.2803 15.2398 15.4279C15.1807 16.4611 14.8412 17.487 14.2434 18.3356C13.2766 19.7526 11.6014 20.675 9.88184 20.7046C8.8265 20.7637 7.77116 20.4758 6.8708 19.9445C5.38004 19.0662 4.33208 17.4575 4.1771 15.7306C4.16234 15.3616 4.15496 14.9925 4.16972 14.6309C4.30256 13.2287 4.99628 11.8855 6.07376 10.9704C7.29884 9.90768 9.011 9.39846 10.6125 9.70104C10.6272 10.7933 10.5829 11.8855 10.5829 12.9778C9.85232 12.7416 8.99624 12.808 8.35418 13.2508C7.88924 13.5534 7.535 14.0183 7.3505 14.5423C7.19552 14.9187 7.2398 15.332 7.24718 15.7306C7.4243 16.9409 8.59034 17.9593 9.83018 17.8486C10.6567 17.8412 11.4464 17.3615 11.8744 16.6604C12.0147 16.4168 12.1696 16.1659 12.177 15.8782C12.2508 14.5571 12.2213 13.2434 12.2287 11.9224C12.2361 8.94828 12.2213 5.98152 12.2434 3.01476Z" fill="currentColor"/></symbol>
    <symbol id="i-mail" viewBox="0 0 24 24"><path d="M19.5 5.5H4.5C3.67 5.5 3 6.17 3 7V17C3 17.83 3.67 18.5 4.5 18.5H19.5C20.33 18.5 21 17.83 21 17V7C21 6.17 20.33 5.5 19.5 5.5Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.5 6.5L12 13L20.5 6.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M12 21C12 21 5.5 15.2 5.5 10C5.5 6.41 8.41 3.5 12 3.5C15.59 3.5 18.5 6.41 18.5 10C18.5 15.2 12 21 12 21Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 12.3C13.27 12.3 14.3 11.27 14.3 10C14.3 8.73 13.27 7.7 12 7.7C10.73 7.7 9.7 8.73 9.7 10C9.7 11.27 10.73 12.3 12 12.3Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><path d="M12 20.5C16.69 20.5 20.5 16.69 20.5 12C20.5 7.31 16.69 3.5 12 3.5C7.31 3.5 3.5 7.31 3.5 12C3.5 16.69 7.31 20.5 12 20.5Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 7.5V12L15 14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-card" viewBox="0 0 24 24"><path d="M19.5 5.5H4.5C3.4 5.5 2.5 6.4 2.5 7.5V16.5C2.5 17.6 3.4 18.5 4.5 18.5H19.5C20.6 18.5 21.5 17.6 21.5 16.5V7.5C21.5 6.4 20.6 5.5 19.5 5.5Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.5 9.8H21.5M6 15H10" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-cash" viewBox="0 0 24 24"><path d="M20 6.5H4C3.17 6.5 2.5 7.17 2.5 8V16C2.5 16.83 3.17 17.5 4 17.5H20C20.83 17.5 21.5 16.83 21.5 16V8C21.5 7.17 20.83 6.5 20 6.5Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 14.6C13.44 14.6 14.6 13.44 14.6 12C14.6 10.56 13.44 9.4 12 9.4C10.56 9.4 9.39999 10.56 9.39999 12C9.39999 13.44 10.56 14.6 12 14.6Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 9.5V14.5M18 9.5V14.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-store" viewBox="0 0 24 24"><path d="M4 9.5V20H20V9.5M9.5 20V15H14.5V20M3 9.5L4.8 4.5H19.2L21 9.5H3Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-tr" viewBox="0 0 24 24"><path d="M4 8.5H19M15.5 5L19 8.5L15.5 12M20 15.5H5M8.5 12L5 15.5L8.5 19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-tag" viewBox="0 0 24 24"><path d="M3.5 12.5V4.5C3.5 3.95 3.95 3.5 4.5 3.5H12.5L20.5 11.5L11.5 20.5L3.5 12.5Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.00001 9.3C8.72001 9.3 9.30001 8.72 9.30001 8C9.30001 7.28 8.72001 6.7 8.00001 6.7C7.28001 6.7 6.70001 7.28 6.70001 8C6.70001 8.72 7.28001 9.3 8.00001 9.3Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24"><path d="M5 12.5L9.5 17L19 7.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-arr" viewBox="0 0 24 24"><path d="M4.5 12H19.5M14 6.5L19.5 12L14 17.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-back" viewBox="0 0 24 24"><path d="M19.5 12H4.5M10 6.5L4.5 12L10 17.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-heart" viewBox="0 0 24 24"><path d="M12 20C12 20 4.5 15.4 4.5 10C4.55 9.15 4.85 8.34 5.37 7.66C5.88 6.99 6.58 6.48 7.38 6.2C8.19 5.92 9.05 5.89 9.87 6.1C10.69 6.31 11.43 6.77 12 7.4C12.57 6.77 13.31 6.31 14.13 6.1C14.95 5.89 15.81 5.92 16.62 6.2C17.42 6.48 18.12 6.99 18.63 7.66C19.15 8.34 19.45 9.15 19.5 10C19.5 15.4 12 20 12 20Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-spark" viewBox="0 0 24 24"><path d="M12 3.5V7.5M12 16.5V20.5M3.5 12H7.5M16.5 12H20.5M6 6L8.5 8.5M15.5 15.5L18 18M6 18L8.5 15.5M15.5 8.5L18 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-menu" viewBox="0 0 24 24"><path d="M3.5 7H20.5M3.5 12H20.5M3.5 17H14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
    <symbol id="i-close" viewBox="0 0 24 24"><path d="M6 6L18 18M18 6L6 18" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></symbol>
  </defs>
</svg>

  <!-- Header -->
  <header class="top">
    <div class="promo">
      <span><svg class="i" width="16" height="16"><use href="#i-card"/></svg>3 cuotas sin interés con tarjetas bancarias</span>
      <span class="dot">·</span>
      <span><svg class="i" width="16" height="16"><use href="#i-cash"/></svg>20% OFF en efectivo o transferencia</span>
    </div>
    <nav class="main">
      <div class="wrap">
        <button class="nav-menu" type="button" aria-label="Abrir menú" aria-expanded="false" data-menu><svg class="i" width="26" height="26"><use href="#i-menu"/></svg></button>
        <div class="nav-l">
          <a class="nav-a" href="<?php echo esc_url( home_url( '/#inicio' ) ); ?>" data-nav="inicio">Inicio</a>
          <a class="nav-a" href="<?php echo esc_url( home_url( '/#productos' ) ); ?>" data-nav="productos">Productos</a>
          <a class="nav-a" href="<?php echo esc_url( home_url( '/#sobre-nosotras' ) ); ?>" data-nav="nosotras">Sobre nosotras</a>
        </div>
        <a class="nav-logo" href="<?php echo esc_url( home_url( '/#inicio' ) ); ?>" aria-label="Alma Buena — inicio"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_negro.png" alt="Alma Buena Indumentaria"></a>
        <div class="nav-r">
          <a class="nav-a" href="<?php echo esc_url( home_url( '/#metodos-de-pago' ) ); ?>" data-nav="pagos">Métodos de pago</a>
          <a class="nav-a" href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" data-nav="contacto">Contacto</a>
          <div class="nav-ico">
            <a href="https://www.instagram.com/almabuena.ind/?hl=es" target="_blank" rel="noopener" aria-label="Instagram"><svg class="i" width="20" height="20"><use href="#i-ig"/></svg></a>
            <a href="https://www.tiktok.com/@almabuena.ind" target="_blank" rel="noopener" aria-label="TikTok"><svg class="i" width="20" height="20"><use href="#i-tiktok"/></svg></a>
            <a href="https://wa.me/542616395545?text=%C2%A1Hola%20Alma%20Buena!%20Quer%C3%ADa%20hacer%20una%20consulta." target="_blank" rel="noopener" aria-label="WhatsApp"><svg class="i" width="20" height="20"><use href="#i-wa"/></svg></a>
          </div>
        </div>
        <a class="nav-wa" href="https://wa.me/542616395545?text=%C2%A1Hola%20Alma%20Buena!%20Quer%C3%ADa%20hacer%20una%20consulta." target="_blank" rel="noopener" aria-label="WhatsApp"><svg class="i" width="24" height="24"><use href="#i-wa"/></svg></a>
      </div>
    </nav>
    <!-- Menú celular -->
    <div class="drawer" id="drawer">
      <a class="dr-a" href="<?php echo esc_url( home_url( '/#inicio' ) ); ?>" data-nav="inicio">Inicio</a>
      <a class="dr-a" href="<?php echo esc_url( home_url( '/#productos' ) ); ?>" data-nav="productos">Productos</a>
      <a class="dr-a" href="<?php echo esc_url( home_url( '/#sobre-nosotras' ) ); ?>" data-nav="nosotras">Sobre nosotras</a>
      <a class="dr-a" href="<?php echo esc_url( home_url( '/#metodos-de-pago' ) ); ?>" data-nav="pagos">Métodos de pago</a>
      <a class="dr-a" href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>" data-nav="contacto">Contacto</a>
      <div class="dr-soc">
        <a href="https://www.instagram.com/almabuena.ind/?hl=es" target="_blank" rel="noopener" aria-label="Instagram"><svg class="i" width="20" height="20"><use href="#i-ig"/></svg></a>
        <a href="https://www.tiktok.com/@almabuena.ind" target="_blank" rel="noopener" aria-label="TikTok"><svg class="i" width="20" height="20"><use href="#i-tiktok"/></svg></a>
        <a href="https://wa.me/542616395545?text=%C2%A1Hola%20Alma%20Buena!%20Quer%C3%ADa%20hacer%20una%20consulta." target="_blank" rel="noopener" aria-label="WhatsApp"><svg class="i" width="20" height="20"><use href="#i-wa"/></svg></a>
      </div>
    </div>
  </header>

<main>
