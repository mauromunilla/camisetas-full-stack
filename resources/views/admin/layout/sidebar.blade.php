<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../css/panel.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/panel.js" defer></script>
    <title>Admin::panel</title>
</head>
<body>
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo">Fulbol</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <i class="bi bi-arrow-bar-right"></i>
                </button>
            </li>
            <li class="active">
                <a href="">
                    <i class="bi bi-layout-text-sidebar-reverse fs-4"></i>
                    <span>Productos</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-cart4 fs-4"></i>
                    <span>Compras</span>
                </a>
            </li>
            <li>
                <a href=""">
                    <i class="bi bi-people fs-4"></i>
                    <span>Agregar Admin</span>
                </a>
            </li>
            <li>
                <a href="" >
                    <i class="bi bi-door-open fs-4" ></i>
                    <span>Salir</span>
                </a>
            </li>
        </ul>
    </nav>

    