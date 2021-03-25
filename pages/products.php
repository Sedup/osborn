 <?php include '../header.php'; ?>

 <nav class="breadcrumb">
   <div class="container">
   <ul class="breadcrumb-list">
     <li class="breadcrumb-list__item">
       <a href="/index.php" class="breadcrumb-list__link">Главная</a>
     </li>
     <li class="breadcrumb-list-item">
      Продукты
     </li>
   </ul>
  </div>
 </nav>
 <!-- /.breadcrumb -->
<div class="container">
<nav class="products-categories">
  <h2 class="products-categories__title">
    Продукты
  </h2>
  <div class="products-buttons">
    <button class="products-button products-button__roller" data-target="#roller">
      Спиральные роликовые щётки и валки
    </button>
    <button class="products-button products-button__perforated" data-target="#perforated">
      Перфорированные нестандартные щетки
    </button>
    <button class="products-button products-button__powertool"  data-target="#powertool">
      Щетки для электроинструмента и оборудования
    </button>
    <button class="products-button products-button__broomate">
      Щетки для уборки больших площадей Broomate
    </button>
    <button class="products-button products-button__industrial">
      Щеточные уплотнители Промышленные уплотнители
    </button>
    <button class="products-button products-button__polishing">
      Полировальные круги и пасты
    </button>
  </div>
</nav>
<!-- /.products-categories -->
<div class="line"></div>

<div class="products">
  <!-- ROLLER -->
  <?php include '../pages/parts/roller.php'; ?>

  <!-- perforated -->
  <?php include '../pages/parts/perforated.php'; ?>
 

  <!-- tools -->
  <div class="products-item products-item_perforated" id="powertool">
    Щётки для электроинструмента
  </div>
  <!-- /.products-item -->

</div>
<!-- /.products -->

</div>
<!-- /.container -->









   <?php include '../footer.php'; ?>