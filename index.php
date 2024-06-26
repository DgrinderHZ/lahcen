<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Improvement & Appliance Repair</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="images/logo.jpg" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home" class="hero">
            <div class="hero-text">
                <h1>Servicio Técnico Multimarca</h1>
                <h3>¡DESPLAZAMIENTO GRATÍS!</h3>
                <p>
                    Nuestro técnico le hará un presupuesto de la reparación en su domicilio, 
                    cuando haya visto el aparato y haya podido hacer diagnóstico. 
                    Si usted acepta el presupuesto de dicha reparación, 
                    no se le cobrará el desplazamiento en su factura.
                </p>
                <p>
                    Servicio técnico nacional multimarca. ¡Llame Gratis! 
                </p>
                <h2>91 217 60 58</h2>
            </div>
            <div class="hero-image">
                <img src="images/lahcen.jpg" alt="Repair Service">
            </div>
        </section>
        <section id="services" class="services-overview">
            <h2>Our Services</h2>
            <div class="service">
                <img src="images/lavadora.jpg" alt="Plumbing">
                <h3>Plumbing</h3>
            </div>
            <div class="service">
                <img src="images/lavadora.jpg" alt="electrical">
                <h3>electrical</h3>
            </div>
            <div class="service">
                <img src="images/lavadora.jpg" alt="Carpentry">
                <h3>Carpentry</h3>
            </div>
            <div class="service">
                <img src="images/lavadora.jpg" alt="Decorating">
                <h3>Decorating</h3>
            </div>
            <div class="service">
                <img src="images/lavadora.jpg" alt="Makeovers">
                <h3>Makeovers</h3>
            </div>
            <div class="service">
                <img src="images/lavadora.jpg" alt="Odd Jobs">
                <h3>Odd Jobs</h3>
            </div>
        </section>
         <section id="contact" class="contact-whatsapp">
            <h2>Contact Us</h2>
            <a href="https://wa.me/34642580697" target="_blank" class="whatsapp-link">
                <img src="images/wa-whatsapp-icon.png" alt="WhatsApp Icon">
                WhatsApp Us
            </a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Home Improvement & Appliance Repair. All rights reserved.</p>
    </footer>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
