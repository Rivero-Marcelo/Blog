<?php 
    require "../utils/autoload.php";

    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");

    Routes::AddView("/home", "home");

    Routes::AddView("/blog/nuevaPublicacion", "NuevaPublicacion");
    Routes::Add("/blog/nuevaPublicacion", "post", "PublicacionControlador::Crear");



    
    Routes::Run();

       