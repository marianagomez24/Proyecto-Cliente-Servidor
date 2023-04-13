<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://kit.fontawesome.com/ca4d4e6a64.js" crossorigin="anonymous"></script>
		<title>Compras</title>
		<link rel="stylesheet" href="../CSS/styleCompras.css" />
	</head>
	<body>
		<header>
			<h1>Planes</h1>

			<div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito">1</span>
								<p class="titulo-producto-carrito">Plan Basic</p>
								<span class="precio-producto-carrito">$25</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$200</span>
					</div>
					<p class="cart-empty">El carrito está vacío</p>
				</div>
			</div>
		</header>
		<div class="container-items">
			<div class="item">
				<figure>
					<img
						src="../IMG/carrito1.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Plan Basic</h2>
					<p class="price">$25</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="../IMG/carrito2.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Plan Smart</h2>
					<p class="price">$35</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="../IMG/carrito3.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Plan Gold</h2>
					<p class="price">$40</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="../IMG/carrito4.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Anualidad Gold</h2>
					<p class="price">$400</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="../IMG/car0.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Día</h2>
					<p class="price">$10</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
		</div>

		<script src="../JS/Compras.js"></script>

        <footer class="piePagina">
            <div class="grupo1">
        
                 <div class="box">
                    <figure>
                        <a href="index.php">
                            <img src="../IMG/ejercicio.png" alt="LogoCapitalGym">
                        </a>
                    </figure>
                 </div>
        
                 <div class="box">
                    <h2>Sobre Nosotros</h2>
                    <p>Contamos con mas de 200 sedes alrededor de todo el territorio nacional.</p>
                    <p>No dudes en formar parte del mejor gimnasion de Costa Rica.</p>
                 </div>
        
                 <div class="box">
                    <h2>Síguenos</h2>
                    <div class="redsocial">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-twitter"></a>
                    </div>
                 </div>
                 
            </div>
        
            <div class="grupo2">
                <small>&copy;2023 <b>Capital Gym</b> Todos los Derechos de Autor Reservados.</small>
            </div>
        
            <div class="grupo3">
        
            </div>
            
            </footer>
	</body>
</html>
