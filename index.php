<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galer.ia</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Rubik:wght@400;500&display=swap');

    /* Estilos Base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      margin: 0;
      font-family: 'Rubik', sans-serif;
      background-image: url('https://images.unsplash.com/photo-1581337204873-ef36aa186caa?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGludHVyYSUyMGRlJTIwcGFpc2FqZXxlbnwwfHwwfHx8MA%3D%3D');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      min-height: 100vh;
      padding-bottom: 100px;
    }

    /* Header Reorganizado */
    header {
      padding: 25px 40px;
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .header-container {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1400px;
      margin: 0 auto;
    }

    .logo-section {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-right: 30px;
    }

    .logo-icon {
      width: 50px;
      height: 50px;
      fill: #ffb300;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5em;
      color: #ffb300;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
      letter-spacing: 1.5px;
      white-space: nowrap;
      margin-right: 30px;
    }

    .search-container {
      flex: 1;
      min-width: 300px;
      max-width: 500px;
      margin-right: 30px;
    }

    .search-bar {
      position: relative;
      width: 100%;
    }

    .search-bar input {
      padding: 15px 25px 15px 50px;
      font-size: 1.1em;
      width: 100%;
      border-radius: 30px;
      border: none;
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transition: all 0.3s;
    }

    .search-bar input:focus {
      outline: none;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .search-bar::before {
      content: '🔍';
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 1.2em;
      opacity: 0.7;
    }

    .header-nav {
      display: flex;
      gap: 25px;
      margin-right: 30px;
    }

    .header-nav a {
      color: rgba(255, 255, 255, 0.9);
      text-decoration: none;
      font-size: 1.05em;
      transition: all 0.3s;
      padding: 8px 0;
      border-bottom: 2px solid transparent;
      font-weight: 500;
    }

    .header-nav a:hover {
      color: #ffb300;
      border-bottom-color: #ffb300;
    }

    .user-controls {
      display: flex;
      gap: 15px;
    }

    .icon-btn {
      background: rgba(0, 0, 0, 0.7);
      border: none;
      border-radius: 50%;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .icon-btn:hover {
      background: rgba(0, 0, 0, 0.9);
      transform: scale(1.1);
    }

    .icon-btn svg {
      fill: #ffb300;
      width: 24px;
      height: 24px;
    }

    /* Dropdowns */
    .dropdown {
      position: absolute;
      top: 90px;
      right: 40px;
      background: rgba(0, 0, 0, 0.9);
      border-radius: 10px;
      padding: 20px;
      width: 280px;
      display: none;
      flex-direction: column;
      gap: 15px;
      z-index: 100;
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 8px 25px rgba(0,0,0,0.4);
    }

    .dropdown label {
      color: #ffb300;
      font-weight: bold;
      font-size: 0.95em;
    }

    .dropdown input {
      padding: 12px 15px;
      border: none;
      border-radius: 8px;
      width: 100%;
      font-size: 1em;
      background: rgba(255,255,255,0.95);
    }

    .dropdown button {
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #ffb300;
      color: #000;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
      font-size: 1em;
    }

    .dropdown button:hover {
      background: #ffc107;
    }

    .dropdown a {
      color: #ffb300;
      text-decoration: underline;
      text-align: center;
      font-size: 0.9em;
      margin-top: 5px;
    }

    /* Secciones principales */
    .main-sections {
      max-width: 1400px;
      margin: 60px auto 0;
      padding: 0 20px;
      display: flex;
      flex-direction: column;
      gap: 50px;
    }

    .section-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      width: 100%;
    }

    .section-box {
      background: rgba(0, 0, 0, 0.9);
      padding: 30px;
      border-radius: 20px;
      flex: 1;
      min-width: 320px;
      max-width: 700px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.3);
      border: 2px solid rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      transition: transform 0.3s;
      margin-top: 10px;
    }

    .section-box:hover {
      transform: translateY(-5px);
    }

    .section-title {
      text-align: center;
      font-size: 2.3em;
      margin-bottom: 20px;
      font-weight: bold;
      font-family: 'Playfair Display', serif;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
      color: #ffb300;
      letter-spacing: 1px;
      position: relative;
      padding-bottom: 15px;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 20%;
      width: 60%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ffb300, transparent);
    }

    /* Filtro de estilos */
    .style-filter {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 30px;
      padding: 0 15px;
    }

    .filter-btn {
      padding: 10px 18px;
      font-size: 0.95em;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s;
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
      border: 1px solid rgba(255,255,255,0.2);
    }

    .filter-btn:hover {
      background-color: rgba(255, 179, 0, 0.3);
      transform: translateY(-3px);
    }

    /* Sección Estilos */
    .buttons {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      padding: 15px;
      margin-top: 20px;
    }

    .btn {
      padding: 18px;
      font-size: 1.1em;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      width: 100%;
      text-align: center;
      max-width: 300px;
      margin: 0 auto;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }

    .clasico { background-color: #607d8b; color: white; }
    .popular { background-color: #03a9f4; color: white; }
    .fantasia { background-color: #ff8a80; color: white; }
    .gotico { background-color: #f44336; color: white; }
    .caricatura { background-color: #76ff03; color: #333; }
    .paisajista { background-color: #3f51b5; color: white; }
    .subirproyecto { background-color: #4caf50; color: white; }
    .generarproyecto { background-color: #9e9e9e; color: white; }
    .reciente { background-color: #9c27b0; color: white; }

    /* Sección Proyectos */
    .proyectos {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 35px;
    }

    .proyecto-btn-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .proyecto-icon {
      width: 70px;
      height: 70px;
      fill: #fff;
      transition: transform 0.3s;
    }

    .proyecto-btn-container:hover .proyecto-icon {
      transform: scale(1.1) rotate(5deg);
    }

    /* Contenedor Reciente + Imagen */
    .reciente-container {
      grid-column: 1 / -1;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 50px;
      margin-top: 20px;
    }

    .imagen-reciente {
      width: 280px;
      height: 200px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.3);
      border: 3px solid rgba(255,255,255,0.3);
      transition: transform 0.3s;
    }

    .imagen-reciente:hover {
      transform: scale(1.05);
    }

    /* Footer */
    .footer-menu {
      background: rgba(255,255,255,0.95);
      color: black;
      padding: 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: center;
      gap: 40px;
      box-shadow: 0 -4px 12px rgba(0,0,0,0.15);
      font-weight: bold;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      z-index: 100;
    }

    .footer-menu a {
      color: black;
      text-decoration: none;
      transition: all 0.3s;
      font-size: 1.1em;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .footer-menu a:hover {
      color: #9c27b0;
      transform: translateY(-3px);
    }

    .footer-menu svg {
      width: 22px;
      height: 22px;
      fill: currentColor;
    }

    /* Responsive */
    @media (max-width: 1200px) {
      h1 {
        font-size: 3em;
      }
      
      .search-container {
        min-width: 250px;
      }
    }

    @media (max-width: 1024px) {
      .header-container {
        flex-direction: column;
        align-items: stretch;
        gap: 20px;
      }
      
      .logo-section, .search-container, .header-nav, .user-controls {
        margin-right: 0;
        width: 100%;
      }
      
      .header-nav {
        justify-content: center;
      }
      
      .buttons {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .proyectos {
        grid-template-columns: 1fr;
      }
      
      .reciente-container {
        flex-direction: column;
        gap: 30px;
      }
    }

    @media (max-width: 768px) {
      header {
        padding: 20px;
      }
      
      h1 {
        font-size: 2.5em;
      }
      
      .header-nav {
        gap: 15px;
        flex-wrap: wrap;
      }
      
      .section-title {
        font-size: 2em;
      }
      
      .footer-menu {
        gap: 25px;
        padding: 15px;
      }
    }

    @media (max-width: 480px) {
      header {
        padding: 15px;
      }
      
      h1 {
        font-size: 2.2em;
      }
      
      .logo-icon {
        width: 40px;
        height: 40px;
      }
      
      .icon-btn {
        width: 44px;
        height: 44px;
      }
      
      .search-bar input {
        padding: 14px 20px 14px 45px;
        font-size: 1em;
      }
      
      .section-box {
        min-width: 280px;
        padding: 25px;
      }
      
      .btn {
        padding: 16px;
        font-size: 1em;
      }
      
      .footer-menu {
        flex-wrap: wrap;
        gap: 15px;
        padding: 12px;
      }
    }
  </style>
</head>
<body>
  <header>
  <div class="header-container">
    <div class="logo-section">
      <svg class="logo-icon" viewBox="0 0 24 24">
        <path d="M20.71 4.63L19.37 3.29C19 2.9 18.35 2.9 17.96 3.29L9 12.25L11.75 15L20.71 6.04C21.1 5.65 21.1 5 20.71 4.63M7 14C5.34 14 4 15.34 4 17C4 18.31 2.84 19 2 19C2.92 20.22 4.5 21 6 21C8.21 21 10 19.21 10 17C10 15.34 8.66 14 7 14Z"/>
      </svg>
      <a href="index.php" style="text-decoration: none;">
        <h1>Galer.ia</h1>
      </a>
    </div>

      <div class="search-container">
        <div class="search-bar">
          <input type="text" placeholder="Buscar artistas, estilos o proyectos">
        </div>
      </div>

      <nav class="header-nav">
  
  <a href="explorar.php">Explorar</a>
  <a href="artistas.php">Artistas</a>
  <a href="tendencias.php">Tendencias</a>
  <a href="galerias.php" class="active">Galerías</a>
</nav>

      <div class="user-controls">
        <button class="icon-btn" id="userBtn">
          <svg viewBox="0 0 24 24"><path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/></svg>
        </button>
        <button class="icon-btn" id="settingsBtn">
          <svg viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58a.5.5 0 0 0 .12-.64l-1.92-3.32a.5.5 0 0 0-.61-.22l-2.39.96a7.007 7.007 0 0 0-1.63-.94L14.5 2.5a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5l-.34 2.76c-.61.24-1.18.56-1.7.94l-2.39-.96a.5.5 0 0 0-.61.22L2.71 9.48a.5.5 0 0 0 .12.64l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94L2.83 14.58a.5.5 0 0 0-.12.64l1.92 3.32c.14.24.43.34.68.22l2.39-.96c.52.38 1.09.7 1.7.94l.34 2.76c.03.27.26.5.5.5h4c.24 0 .47-.23.5-.5l.34-2.76c.61-.24 1.18-.56 1.7-.94l2.39.96c.25.12.54.02.68-.22l1.92-3.32a.5.5 0 0 0-.12-.64l-2.03-1.58zM12 15.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7z"/></svg>
        </button>
      </div>
    </div>

    <div class="dropdown" id="userDropdown">
      <label for="username">Nombre de usuario</label>
      <input type="text" id="username" placeholder="Tu usuario">
      <label for="password">Contraseña</label>
      <input type="password" id="password" placeholder="••••••••">
      <button>Ingresar</button>
      <a href="formulario.php">¿No tienes cuenta? Regístrate</a>
    </div>

    <div class="dropdown" id="settingsDropdown">
      <button>🎨 Preferencias de color</button>
      <button>🌐 Idioma</button>
      <button>🔔 Notificaciones</button>
      <button>♿ Accesibilidad</button>
    </div>
  </header>

  <div class="main-sections">
    <div class="section-container">
      <div class="section-box">
        <div class="section-title">Estilos</div>
        
        <div class="style-filter">
          <button class="filter-btn">Todos</button>
          <button class="filter-btn">Pintura</button>
          <button class="filter-btn">Escultura</button>
          <button class="filter-btn">Digital</button>
          <button class="filter-btn">Fotografía</button>
          <button class="filter-btn">Arte callejero</button>
          <button class="filter-btn">Abstracto</button>
          <button class="filter-btn">Retratos</button>
        </div>
        
        <div class="buttons">
          <button class="btn clasico">Clásico</button>
          <button class="btn popular">Popular</button>
          <button class="btn fantasia">Fantasía</button>
          <button class="btn gotico">Gótico</button>
          <button class="btn caricatura">Caricatura</button>
          <button class="btn paisajista">Paisajista</button>
        </div>
      </div>

      <div class="section-box">
        <div class="section-title">Proyectos</div>
        <div class="proyectos">
          <div class="proyecto-btn-container">
            <button class="btn subirproyecto">Subir proyecto</button>
            <svg class="proyecto-icon" viewBox="0 0 24 24">
              <path d="M5 20h14v-2H5v2zm7-18L5.33 9h3.84v4h4.66v-4h3.84L12 2z"/>
            </svg>
          </div>
          
          <div class="proyecto-btn-container">
            <button class="btn generarproyecto">Generar proyecto</button>
            <svg class="proyecto-icon" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
          </div>
          
          <div class="reciente-container">
            <button class="btn reciente">Recientemente</button>
            <img class="imagen-reciente" 
                 src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=80" 
                 alt="Obra de arte reciente">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-menu">
    <a href="#">
      <svg viewBox="0 0 24 24"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/></svg>
      Social
    </a>
    <a href="#">
      <svg viewBox="0 0 24 24"><path d="M20 2H4C2.9 2 2 2.9 2 4V20C2 21.1 2.9 22 4 22H20C21.1 22 22 21.1 22 20V4C22 2.9 21.1 2 20 2M20 20H4V4H20V20M18 6H15.5C13.6 6 12 7.6 12 9.5V11H10V15H12V22H16V15H18V11H16V9C16 8.4 16.4 8 17 8H18V6Z"/></svg>
      Contacto
    </a>
    <a href="#">
      <svg viewBox="0 0 24 24"><path d="M11 18H13V16H11V18M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22 22 17.52 22 12 17.52 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M12 6C9.79 6 8 7.79 8 10H10C10 8.9 10.9 8 12 8S14 8.9 14 10C14 12 11 11.75 11 15H13C13 12.75 16 12.5 16 10C16 7.79 14.21 6 12 6Z"/></svg>
      Ayuda
    </a>
    <a href="#">
      <svg viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7V17C4 19.21 7.59 21 12 21S20 19.21 20 17V7C20 4.79 16.42 3 12 3M18 17C18 17.5 15.87 19 12 19S6 17.5 6 17V14.77C7.61 15.55 9.72 16 12 16S16.39 15.55 18 14.77V17M18 12.45C16.7 13.4 14.42 14 12 14S7.3 13.4 6 12.45V9.64C7.47 10.47 9.61 11 12 11S16.53 10.47 18 9.64V12.45M12 9C8.13 9 6 7.5 6 7S8.13 5 12 5 18 6.5 18 7 15.87 9 12 9Z"/></svg>
      Nosotros
    </a>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const userBtn = document.getElementById('userBtn');
      const settingsBtn = document.getElementById('settingsBtn');
      const userDropdown = document.getElementById('userDropdown');
      const settingsDropdown = document.getElementById('settingsDropdown');

      // Toggle dropdowns
      [userBtn, settingsBtn].forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.stopPropagation();
          const isUser = btn.id === 'userBtn';
          userDropdown.style.display = isUser && userDropdown.style.display !== 'flex' ? 'flex' : 'none';
          settingsDropdown.style.display = !isUser && settingsDropdown.style.display !== 'flex' ? 'flex' : 'none';
        });
      });

      // Cerrar al hacer clic fuera
      document.addEventListener('click', () => {
        userDropdown.style.display = 'none';
        settingsDropdown.style.display = 'none';
      });

      // Evitar que el clic en el dropdown lo cierre
      [userDropdown, settingsDropdown].forEach(dropdown => {
        dropdown.addEventListener('click', (e) => e.stopPropagation());
      });

      // Efecto de carga suave
      setTimeout(() => {
        document.body.style.opacity = '1';
      }, 50);
    });

    // Efecto de carga inicial
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
  </script>
</body>
</html>













































