<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contato</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/logo-etec.webp" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<script  language = "javascript" type="text/javascript">
	function validar() {
		var name = contato.name.value
		var email = contato.email.value
		var subject = contato.subject.value
		alert('Formulário enviado.');
		return false;
	}
	</script>
</head>

<body id = "contato">
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">	
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/instituicao" class="nav-item nav-link">Instituição</a>
                        <a href="/cursos" class="nav-item nav-link">Cursos</a>
                        <a href="/oportunidades" class="nav-item nav-link">Oportunidades</a>
                        <a href="/vestibulinho" class="nav-item nav-link">Vestibulinho</a>
                        <a href="/departamentos" class="nav-item nav-link">Departamentos</a>
                        <a href="/contato" class="nav-item nav-link">Contato</a>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Entre em Contato</h1>
        </div>	
    </div>
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Nos Contate para tirar dúvidas!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1">
                    <form id = "contatoform" name = "form1" action = "contato2.html" method = "GET">
                        <div class="row g-3">
                            <div class="col-md-14">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-14">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                                    <label for="subject">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                    <label for="message">Comentários</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5 white" type="submit" onclick = "validar()"><font id = "fontwhite">Enviar mensagem</font></button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Nos visite</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Etec Zona Leste, São Paulo</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>(55) 11 98765 4321</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>EtecZonaleste@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://twitter.com/EtecZona"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.youtube.com/@etecdazonaleste2949"><i class="fab fa-youtube"></i></a>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Nossos links</h4>
                    <a class="btn btn-link" href="/contato">Nosso contato</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Horários de Serviço</h4>
                    <p class="mb-1">Segunda - Sexta</p>
                    <h6 class="text-light">07:30 - 14:40</h6>
                    <p class="mb-1">Sábado</p>
                    <h6 class="text-light">09:00 - 12:00</h6>
                    <p class="mb-1">Domingo</p>
                    <h6 class="text-light">Fechado</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Notícias</h4>
                    <p>Coloque o seu email abaixo para receber notícias sobre nós.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Seu email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Inscrever-se</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-13 text-center text-md-start mb-3 mb-md-0">
                <a class="fw-medium" href="#">Arthur da Silva - 2024</a> -  &copy;<br>
						<a href="#" class = "up"><i class="bi bi-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
