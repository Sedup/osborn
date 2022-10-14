 <?php include '../header.php'; ?>

 <nav class="breadcrumb">
   <div class="container">
   <ul class="breadcrumb-list">
     <li class="breadcrumb-list__item">
       <a href="/index.php" class="breadcrumb-list__link">Головна</a>
     </li>
     <li class="breadcrumb-list-item">
      Продукти
     </li>
   </ul>
  </div>
 </nav>
 <!-- /.breadcrumb -->
<div class="container">
<nav class="products-categories">
  <h2 class="products-categories__title">
    Продукти
  </h2>
  <div class="products-buttons">
    <button class="products-button products-button__roller" data-target="#roller">
      Спіральні роликові щітки та валки
    </button>
    <button class="products-button products-button__perforated" data-target="#perforated">
      Перфоровані нестандартні щітки
    </button>
    <button class="products-button products-button__powertool" data-target="#powertool">
      Щітки для електроінструменту та обладнання
    </button>
    <button class="products-button products-button__broomate" data-target="#broomate">
      Щітки для збирання великих площ Broomate
    </button>
    <button class="products-button products-button__industrial" data-target="#industrial">
      Щіточні ущільнювачі Промислові ущільнювачі
    </button>
    <button class="products-button products-button__polishing" data-target="#polishing">
      Полірувальні кола та пасти
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

  <!-- powertool -->
  <?php include '../pages/parts/powertool.php'; ?>

  <!-- broomate -->
  <?php include '../pages/parts/industrial.php'; ?>

  <!-- broomate -->
  <?php include '../pages/parts/broomate.php'; ?>

  <!-- polishing -->
  <?php include '../pages/parts/polishing.php'; ?>
  <!-- /.products-item -->

</div>
<!-- /.products -->

</div>
<!-- /.container -->









   <?php include '../footer.php'; ?>