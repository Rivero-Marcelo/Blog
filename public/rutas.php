<?php 
    require "../utils/autoload.php";

    //Routes::AddView("/login","login");
   // Routes::Add("/login","post","SesionControlador::IniciarSesion");

    Routes::AddView("/home","home");
    Routes::Add("/home", "post", "SesionControlador::IniciarSesion");

    Routes::AddView("/blog/nuevoUsuario", "NuevoUsuario");
    //Routes::Add("/blog/nuevoUsuario", "post", "UsuarioControlador::Alta");

    //Routes::AddView("/blog/nuevaPublicacion", "NuevaPublicacion");
    //Routes::Add("/blog/nuevaPublicacion", "post", "PublicacionControlador::Crear");


//Routes::AddView("/blog/verPublicacion", "verPublicacion");
Routes::Add("/blog/verPublicacion", "post", "PublicacionControlador::VerPublicacion");
    
    Routes::Run();

       