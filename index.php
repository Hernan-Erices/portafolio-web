<?php include 'includes/header.php'; // index.php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Portafolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main>
        <section class="sobre-mi">
            <div>
                <h2>Sobre mí</h2>
                <div class="contenedor-sobre-mi">
                    <div class="img-perfil">
                        <img src="assets/img/mi_foto.jpg" alt="Foto perfil">
                    </div>
                    <div class="p-sobre-mi">
                        <p> Pasión por la creación de soluciones digitales escalables. Con experiencia en diseño, desarrollo y optimización de
                            aplicaciones web, me enfoco en entregar proyectos robustos y de alto rendimiento. Siempre estoy aprendiendo nuevas
                            tecnologías y buscando formas innovadoras de mejorar el proceso de desarrollo. Mi objetivo es crear experiencias
                            digitales que sean funcionales, intuitivas y de impacto. </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="experiencia-laboral">
            <h2>Experiencia</h2>
            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Practicante desarrollador full stack</h3>
                        <span>Octubre 2024 - Enero 2025 | Servicio de salud araucania sur</span>
                        <p>Desarrollo con PHP, CodeIgniter, HTML, CSS, JS.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Desarrollador</h3>
                        <span>aqui va los anios | aqui va el nombre de la empresa</span>
                        <p>aqui va una descripcion del cargo realizado y tecnologias usadas (quizas pueda poner imagenes para cada tecnologia usada en el cargo).</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="proyectos">
            <div>
                <h2>Proyectos</h2>
                <p>Estos son mis proyectos mas importantes, ponerlos estilo bento o grid</p>
            </div>
        </section>

        <section class="habilidades">
            <h2>Habilidades</h2>
            <div class="bento-container">
                <div class="bento-item">
                    <h5>Lenguajes de programación</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-plain-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
                </div>

                <div class="bento-item">
                    <h5>Lenguajes de maquetado</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg" />
                </div>

                <div class="bento-item">
                    <h5>Frameworks</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/codeigniter/codeigniter-plain-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/django/django-plain-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original-wordmark.svg" />
                </div>

                <div class="bento-item">
                    <h5>Base de datos</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original-wordmark.svg" />
                </div>

                <div class="bento-item">
                    <h5>Herramientas</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-original-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original-wordmark.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original-wordmark.svg" />
                </div>

                <div class="bento-item">
                    <h5>Sistemas operativos</h5>
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linux/linux-original.svg" />
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/windows11/windows11-original.svg" />
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<?php include 'includes/footer.php'; ?>