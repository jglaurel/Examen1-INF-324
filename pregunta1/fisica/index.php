<!DOCTYPE html>
<html lang="en">
<head>
  <title>FACULTAD DE CIENCIAS PURAS Y NATURALES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>


<header class="header">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="logo">
        <a href="../index.php">FACULTAD DE CIENCIAS PURAS Y NATURALES</a>
      </div>
      <input type="checkbox" id="nav-check">
      <label for="nav-check" class="nav-toggler">
        <span></span>
      </label>
      <nav class="nav">
        <ul>
          <li><a href="../index.php">INICIO</a></li>
          <li><a href="#courses">OTRAS CARRERAS</a></li>
          <li><a href="#reviews">AYUDA</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<section class="home-section" id="home">
  <div class="container">
    <div class="row h-100 align-items-center align-content-center">
      <div class="home-text">
        <h1>Fisica   <span>FCPN</span><br> HISTORIA</h1>
        <h2>
          La Carrera de Física fue creada en 1966, a 
          raíz de las actividades desarrolladas por el Instituto de Investigaciones 
          Físicas y el Laboratorio de Física Cósmica de Chacaltaya desde 1952.
        </h2>
        <a href="#" class="btn btn-1">Conoce Mas Sobre  la Carrera de Fisica</a>
      </div>
      <div class="home-img">
        <div class="home-img-inner">
          
          <img src="../img/fisica.jpg" alt="home-img">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="courses-section sec-padding" id="courses">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2><span>CARRERAS</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="course-item">
        <a href="../inf/index.php">
          <div class="course-img">
             <img src="../img/inf.png" alt="course-img">
             <div class="course-price">
               INFORMATICA
             </div>
          </div>
          <div class="course-info">
             <ul>
               <li>Dir: Monoblock Central 2do Patio</li>
    
             </ul>
           
          </div>
        </a>
      </div>
     
      <div class="course-item">
        <a href="../qmc/index.php">
          <div class="course-img">
             <img src="../img/qmc.png" alt="course-img">
             <div class="course-price">
              QUIMICA
            </div>
          </div>
          <div class="course-info">
             <ul>
               <li>Campus UMSA CotaCota</li>
             </ul>
             
          </div>
        </a>
      </div>
      <div class="course-item">
        <a href="#">
          <div class="course-img">
             <img src="../img/biologia.jpg" alt="course-img">
             <div class="course-price">
              BIOLOGIA
            </div>
          </div>
          <div class="course-info">
             <ul>
               <li>Campus UMSA CotaCota</li>
              
             </ul>
             
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include "../pie.php"; ?>