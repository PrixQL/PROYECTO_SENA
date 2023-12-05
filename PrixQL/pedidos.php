<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="pedidos.css">
    <!--importar imejenes minizadas para el proyecto!-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
     <header>
      <div class="nav container">
        <a href="#" class="logo">Alimentos</a>
        <!--icono del carrito de compras-->
        <i class='bx bx-shopping-bag' id="cart-icon" ></i>
      </div>
     <header>
        <!--Compras-->
     <section class="shop container">
       <h2 class="section-title">Productos</h2>
       <!--contenet-->
        <div class="shop-content">
            <!--Box 1-->
            <div class="product-box">
                <img src="imagenes/amburgesa01.jpg" alt="" class="product-img">
                <h2 class="product-title">Hamburguesa Sencilla</h2>
                <SPan class="price">$25</SPan>
                <!--icono del carrito-->
                <i class='bx bx-shopping-bag add-cart'></i>
                <!-- carrito de compras -->
                <div class="cart">
                    <h2 class="cart-title">Carrito de pedidos</h2>
                    <!-- content -->
                    <div class="cart-content">
                        <div class="cart-box">
                            <img src="imagenes/product20.jpg" alt="" class="cart-img">
                            <div class="detail-box">
                            <div class="cart-product-title">Productos</div>
                             <div class="cart-price">25.00</div>
                             <input type="number" value="1" class="cart-quantity">
                            </div>
                            <!-- quitar compras del carrito carrito-->
                            <i class='bx bxs-trash-alt cart-remove'></i>
                    </div>
                  </div>
                   <!-- total -->
                   <div class="total">
                    <div class="total-title">total</div>
                    <div class="total-price">$0</div>
                   </div>
                   <!-- buy button -->
                   <button type="button" class="btn-buy">Buy Now</button>
                    <!-- Clase del carrito-->
                    <i class='bx bx-x'id="close-cart"></i>
                </div>
            </div>
            <!--Box 2-->
            <div class="product-box">
                <img src="imagenes/amburgesa02.jpg" alt="" class="product-img">
                <h2 class="product-title"> Mix Hamburguesa</h2>
                <SPan class="price">$100</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 3-->
            <div class="product-box">
                <img src="imagenes/amburgesa03.jpg" alt="" class="product-img">
                <h2 class="product-title">La Maxi Carnes</h2>
                <SPan class="price">$45</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 4-->
            <div class="product-box">
                <img src="imagenes/amburgesa04.jpg" alt="" class="product-img">
                <h2 class="product-title">La Termineitor 3.0</h2>
                <SPan class="price">$25.05</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 5-->
            <div class="product-box">
                <img src="imagenes//perro01.jpg" alt="" class="product-img">
                <h2 class="product-title">Perro Sencilla</h2>
                <SPan class="price">$50</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 6-->
            <div class="product-box">
                <img src="imagenes//perro02.jpg" alt="" class="product-img">
                <h2 class="product-title">Perro Max </h2>
                <SPan class="price">$80</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 7-->
            <div class="product-box">
                <img src="imagenes//perro03.jpg" alt="" class="product-img">
                <h2 class="product-title">Mexican Perro</h2>
                <SPan class="price">$31</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--Box 8-->
            <div class="product-box">
                <img src="imagenes//perro04.jpg" alt="" class="product-img">
                <h2 class="product-title">ULTRA Colombo </h2>
                <SPan class="price">$90</SPan>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
     </section>
      <!--link de java scrip-->
      <script src="js//pedidos0.js"></script>
</body>
</html>