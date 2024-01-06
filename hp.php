<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=n, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Tela do cliente</title>
    <style>
          
        ::-webkit-scrollbar {
            width: 19px;
            height: 1em;
            background-color: hsl(0, 0%, 17%);
           
          }
          
          ::-webkit-scrollbar-track {
            background: hsl(0, 0%, 17%);
            border-radius: 100vw;
            margin-block: 0.5em;
            
          }
          
          ::-webkit-scrollbar-thumb {
            background: hsl(30.42deg 100% 50%);
            border: 0.25em solid hsl(23.8deg 100% 50%);
            border-radius: 100vw;
           
          }
          
          ::-webkit-scrollbar-thumb:hover {
            background: hsl(33.19deg 100% 30%)
          }
          
          /* Vertical scrolling */
          
          .vertical-scroll {
            display: grid;
            gap: 0.5em;
            grid-auto-flow: column;
            grid-auto-columns: 75%;
            padding: 0.5em;
            overflow-x: scroll;
            background: #d3fdbe;
            border-radius: 1em;
            position: relative;
            
          }
          
          .vertical-scroll > div {
            background: hsl(0 0% 90%);
            border-radius: 1em;
            border: 0.5em solid hsl(0 0% 60%);
            padding: 1em;
          }
        
        </style>
</head>
<body>
    <header>
        <nav>
            <a href="./index.html" class="logo"> <img src="img/logo1.png" height="180" width="170" alt=""></a>
            <ul>
                <li><a href="./tela-treinador">Minhas aulas</a></li>
                <li><a href="#exercicios">Exercicios</a></li>
                <li><a href="#avaliação">Minha Avaliação</a></li>

              </ul>
        </nav>   
    </header>

    <div class="hero">

    <video autoplay loop muted plays-inline class="back-video">
        <source src="img/video.mp4" type="video/mp4">
    </video>



  