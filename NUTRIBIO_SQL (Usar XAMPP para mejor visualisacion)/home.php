<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Navegación</title>
    <style>
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(#2987a3, #2a6c56);
    }
    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #9cd9ec;
        color: white;
        padding: 15px 30px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    header img {
        height: 50px;
    }
    nav {
        flex-grow: 1;
        display: flex;
        justify-content: center;
    }
    nav a {
        color: #105063;
        text-decoration: none;
        margin: 0 20px;
        position: relative;
        padding: 5px 0;
    }
    nav a::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: white;
        visibility: hidden;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out;
    }
    nav a:hover::before {
        visibility: visible;
        transform: scaleX(1);
    }
    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .section {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        width: 48%;
        padding: 0;
    }
    .section:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }
    .section img {
        width: 100%;
        height: auto;
        display: block;
    }
    .section h2 {
        margin: 0;
        padding: 20px;
        background-color: #2a6c56;
        color: white;
        font-size: 1.5em;
    }
    .section p, .section ul, .section h3 {
        padding: 20px;
        font-size: 1em;
        color: #555;
        line-height: 1.6;
        margin: 0;
    }
    .section ul {
        list-style: none;
        padding-left: 0;
    }
    .section ul li {
        margin-bottom: 10px;
        font-family: 'Arial', sans-serif;
        color: #105063;
    }
    .section ul li ul {
        margin-top: 10px;
        margin-left: 20px;
    }
    .section h3 {
        font-family: 'Arial', sans-serif;
        color: #2a6c56;
        font-size: 1.2em;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .section u {
        text-decoration: underline;
        color: #2a6c56;
    }
</style>

</head>
<body>

<header>
    <img src="assets/logo.png" alt="Logo">
    <nav>
        <a href="home.php">Home</a>
        <a href="datos.html">TMB</a>
        <a href="menu.html">Menú</a>
        <a href="recomendations.html">Recomendaciones Alimenticias</a>
        <a href="index.php">Salir</a>
    </nav>
</header>

<div class="container">
    <div id="home" class="section">
        <h2>Home</h2>
        <p>Bienvenido a nuestra página principal. 
        Aquí encontrarás la información general y las últimas noticias.</p>
        <img src="assets/Main.jpg" alt="Home Image">
        
    </div>
    <div id="tmb" class="section">
        <h2>TMB</h2>
        <img src="assets/tmb.png" alt="TMB Image">
        <p>Calcula tu Tasa Metabólica Basal (TMB) y descubre cuántas calorías necesitas diariamente.</p>
        <h3>Información Nutrimental Importante</h3>
        <ul>
            <li><strong>Calorías (Kcal):</strong> Controla la ganancia o pérdida de peso según el balance calórico.</li>
            <li><strong>Macronutrientes:</strong>
                <ul>
                    <li>Proteínas: Esenciales para el crecimiento y reparación de tejidos.</li>
                    <li>Carbohidratos: Fuente primaria de energía. Considerar el índice glucémico para diabéticos.</li>
                    <li>Grasas: Necesarias para funciones corporales, consumir en cantidades adecuadas.</li>
                </ul>
            </li>
            <li><strong>Micronutrientes:</strong> Vitaminas y minerales necesarios para diversas funciones corporales.</li>
            <li><strong>Fibra:</strong> Ayuda en la digestión y controla el azúcar en la sangre.</li>
            <li><strong>Índice Glucémico (IG):</strong> Importante para diabéticos para manejar niveles de glucosa en sangre.</li>
            <li><strong>Tasa Metabólica Basal (TMB):</strong> Calorías necesarias para mantener funciones básicas del cuerpo en reposo.</li>
            <li><strong>Índice de Masa Corporal (IMC):</strong> Clasificación del peso en relación con la altura.</li>
        </ul>
    </div>
    
    <div id="menu" class="section">
        <h2>Menú</h2>
        <img src="assets/menu.png" alt="Menu Image">
        <p>Explora nuestro menú y encuentra las mejores opciones de comidas saludables para ti.</p>
        <h3>Base de Datos de Alimentos</h3>
        <p>Incluye información detallada de contenido nutricional y el índice glucémico de los alimentos.</p>
    </div>
    <div id="recommendations" class="section">
        <h2>Recomendaciones Alimenticias</h2>
        <img src="assets/recomendations.png" alt="Recommendations Image">
        <p>Obtén recomendaciones alimenticias personalizadas según tus necesidades y objetivos.</p>
        <h3>Funcionalidades Clave</h3>
        <ul>
            <li><strong>Calculadora de TMB e IMC:</strong> Calcula tu TMB e IMC ingresando datos personales.</li>
            <li><strong>Planificador de Comidas Personalizado:</strong> Sugiere planes de comidas basados en TMB y objetivos de peso.</li>
            <li><strong>Seguimiento de Nutrientes:</strong> Registro de ingesta diaria de alimentos con cálculos automáticos.</li>
            <li><strong>Consejos y Recomendaciones Personalizadas:</strong> Ofrece consejos diarios sobre alimentación y ejercicio.</li>
            <li><strong>Recordatorios y Notificaciones:</strong> Recordatorios para comer, beber agua, y realizar ejercicio.</li>
            <li><strong>Gráficas y Análisis de Progreso:</strong> Visualización del progreso en términos de peso, IMC, y consumo calórico.</li>
        </ul>
    </div>
</div>

</body>
</html>