<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>EasyBeauty | Sistema de Inventario Cosmético</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
}

body{
    font-family:'Poppins', sans-serif;
    background:#fff7fb;
    color:#333;
}

/* ========================= */
/* MENÚ */
/* ========================= */

nav{
    background:#5A1035;
    padding:18px;
    position:sticky;
    top:0;
    z-index:1000;
    box-shadow:0 4px 15px rgba(0,0,0,.15);
}

nav ul{
    display:flex;
    justify-content:center;
    gap:35px;
    list-style:none;
    flex-wrap:wrap;
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:.3s;
}

nav a:hover{
    color:#ffd4e6;
}

/* ========================= */
/* HEADER */
/* ========================= */

.hero{

    position:relative;
    width:100%;
    height:100vh;
    overflow:hidden;

    display:flex;
    justify-content:center;
    align-items:center;

    text-align:center;

    background:
    linear-gradient(rgba(61,7,34,.78),
    rgba(61,7,34,.78)),

    url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=1600&auto=format&fit=crop');

    background-size:cover;
    background-position:center;

}

.hero-overlay{

    position:absolute;
    width:100%;
    height:100%;
    backdrop-filter:blur(3px);

}

.hero-content{

    position:relative;
    z-index:10;
    color:white;
    padding:20px;
    animation:fadeIn 2s ease;

}

.titulo-3d{

    font-size:100px;
    font-weight:700;
    letter-spacing:5px;
    text-transform:uppercase;

    text-shadow:
    0 1px 0 #ccc,
    0 2px 0 #c9c9c9,
    0 3px 0 #bbb,
    0 4px 0 #b9b9b9,
    0 5px 0 #aaa,
    0 6px 1px rgba(0,0,0,.1),
    0 0 5px rgba(0,0,0,.1),
    0 1px 3px rgba(0,0,0,.3),
    0 3px 5px rgba(0,0,0,.2),
    0 5px 10px rgba(0,0,0,.25);

    animation:flotante 4s ease-in-out infinite;

}

.subtitulo{

    margin-top:20px;
    font-size:28px;
    color:#ffe5f0;

}

.descripcion-hero{

    max-width:750px;
    margin:30px auto;
    line-height:1.8;
    font-size:18px;
    color:#fff0f6;

}

.hero-botones{

    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
    margin-top:35px;

}

.btn-hero,
.btn-hero-sec{

    padding:16px 35px;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:.4s;

}

.btn-hero{

    background:linear-gradient(135deg,#ff4f9a,#c2185b);
    color:white;

}

.btn-hero-sec{

    border:2px solid white;
    color:white;

}

.btn-hero:hover,
.btn-hero-sec:hover{

    transform:translateY(-6px);

}

/* ========================= */
/* CÍRCULOS */
/* ========================= */

.circulo{

    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    animation:flotar 12s linear infinite;

}

.circulo1{

    width:320px;
    height:320px;
    top:5%;
    left:5%;

}

.circulo2{

    width:220px;
    height:220px;
    bottom:10%;
    right:8%;

}

.circulo3{

    width:170px;
    height:170px;
    top:60%;
    left:45%;

}

/* ========================= */
/* CONTENEDOR */
/* ========================= */

.container{
    max-width:1300px;
    margin:auto;
    padding:40px 20px;
}

/* ========================= */
/* TITULOS */
/* ========================= */

.categoria{

    margin:40px 0 25px;
    color:#7B1E4A;
    font-size:34px;
    border-bottom:3px solid #f1bfd2;
    padding-bottom:10px;

}

/* ========================= */
/* GRID */
/* ========================= */

.grid{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;

}

/* ========================= */
/* PRODUCTOS */
/* ========================= */

.producto{

    background:white;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 6px 18px rgba(0,0,0,.08);
    transition:.3s;

}

.producto:hover{

    transform:translateY(-8px);

}

.producto img{

    width:100%;
    height:250px;
    object-fit:cover;

}

.info{

    padding:20px;

}

.info h3{

    color:#5A1035;
    margin-bottom:10px;

}

.tag{

    display:inline-block;
    background:#ffe2ee;
    color:#ad1457;
    padding:5px 12px;
    border-radius:30px;
    font-size:12px;
    margin-bottom:12px;

}

.stock{

    margin-top:10px;
    padding:10px;
    border-radius:10px;
    font-weight:600;

}

.disponible{

    background:#e8f5e9;
    color:#2e7d32;

}

.pocas{

    background:#fff3e0;
    color:#ef6c00;

}

.agotado{

    background:#ffebee;
    color:#c62828;

}

/* ========================= */
/* BOTONES */
/* ========================= */

button{

    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    margin-top:18px;

    background:
    linear-gradient(
        135deg,
        #C2185B,
        #880E4F
    );

    color:white;
    font-weight:600;
    cursor:pointer;
    transition:.3s;

}

button:hover{

    opacity:.9;
    transform:scale(1.02);

}

/* ========================= */
/* PANEL ADMIN */
/* ========================= */

.panel-admin{

    display:none;
    background:white;
    margin-top:40px;
    padding:30px;
    border-radius:18px;
    box-shadow:0 6px 18px rgba(0,0,0,.08);

}

.inputs{

    display:grid;
    grid-template-columns:
    repeat(auto-fit,minmax(250px,1fr));

    gap:15px;
    margin-top:20px;

}

.inputs input{

    padding:14px;
    border:1px solid #ddd;
    border-radius:10px;
    font-family:'Poppins';

}

/* ========================= */
/* TABLA */
/* ========================= */

table{

    width:100%;
    border-collapse:collapse;

}

th, td{

    border:1px solid #ddd;
    padding:12px;
    text-align:center;

}

th{

    background:#7B1E4A;
    color:white;

}

/* ========================= */
/* FOOTER */
/* ========================= */

footer{

    background:#4A1230;
    color:white;
    text-align:center;
    padding:25px;
    margin-top:60px;

}

/* ========================= */
/* ANIMACIONES */
/* ========================= */

@keyframes flotante{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-18px);
    }

    100%{
        transform:translateY(0px);
    }

}

@keyframes flotar{

    0%{
        transform:translateY(0)
        rotate(0deg);
    }

    50%{
        transform:translateY(-35px)
        rotate(180deg);
    }

    100%{
        transform:translateY(0)
        rotate(360deg);
    }

}

@keyframes fadeIn{

    from{
        opacity:0;
        transform:translateY(40px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

@media(max-width:768px){

    .titulo-3d{
        font-size:60px;
    }

    .subtitulo{
        font-size:20px;
    }

    .descripcion-hero{
        font-size:15px;
    }

}

</style>

</head>

<body>

<nav>

<ul>

<li>
<a href="#inventario">
Inventario
</a>
</li>

<li>
<a href="#" onclick="mostrarPanelAdmin()">
Administración de Stock
</a>
</li>

<li>
<a href="#integrantes">
Integrantes
</a>
</li>

</ul>

</nav>

<header class="hero">

<div class="hero-overlay"></div>

<div class="circulo circulo1"></div>
<div class="circulo circulo2"></div>
<div class="circulo circulo3"></div>

<div class="hero-content">

<h1 class="titulo-3d">
EasyBeauty
</h1>

<p class="subtitulo">
Sistema Inteligente de Inventario Cosmético
</p>

<p class="descripcion-hero">

Plataforma moderna diseñada para administrar y gestionar
productos cosméticos en tiempo real.

</p>

<div class="hero-botones">

<a href="#inventario" class="btn-hero">
Ver Inventario
</a>

<a href="#"
onclick="mostrarPanelAdmin()"
class="btn-hero-sec">

Administrar Stock

</a>

</div>

</div>

</header>

<div class="container">

<section id="inventario">

<h2 class="categoria">
Inventario de Productos
</h2>

<button onclick="descargarPDF()">
Descargar Inventario PDF
</button>

<br><br>

<div class="grid"
id="contenedorProductos">

</div>

</section>

<!-- ========================= -->
<!-- PANEL ADMIN -->
<!-- ========================= -->

<section class="panel-admin"
id="panelAdmin">

<h2 class="categoria">
Administración de Stock
</h2>

<p>
Agregar, actualizar y eliminar productos.
</p>

<div class="inputs">

<input type="text"
id="nombreProducto"
placeholder="Nombre del producto">

<input type="number"
id="cantidadProducto"
placeholder="Cantidad">

<input type="number"
id="precioProducto"
placeholder="Precio">

<input type="text"
id="imagenProducto"
placeholder="URL imagen">

</div>

<button onclick="agregarProducto()">
Agregar Producto
</button>

<br><br>

<h3 style="color:#7B1E4A;">
Tabla de Productos
</h3>

<br>

<div style="overflow-x:auto;">

<table>

<thead>

<tr>

<th>Producto</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>

</tr>

</thead>

<tbody id="bodyTablaProductos">

</tbody>

</table>

</div>

</section>

<section id="integrantes">

<h2 class="categoria">
Integrantes
</h2>

<p>
• Itzel Ivonne Hernández García
</p>

<p>
• Mayra Rodríguez Vidal
</p>

</section>

</div>

<footer>

EasyBeauty © 2026 |
Plataforma Inteligente
de Inventario Cosmético

</footer>

<script>

/* ========================= */
/* INICIAR */
/* ========================= */

window.onload = function(){

    cargarProductos();

}

/* ========================= */
/* MOSTRAR PANEL */
/* ========================= */

function mostrarPanelAdmin(){

    let panel =
    document.getElementById(
        "panelAdmin"
    );

    if(panel.style.display === "block"){

        panel.style.display = "none";

    }else{

        panel.style.display = "block";

        panel.scrollIntoView({
            behavior:"smooth"
        });

    }

}

/* ========================= */
/* CONSULTAR */
/* ========================= */

function consultarProducto(nombre,stock){

    if(stock > 0){

        alert(

            "Producto disponible\n\n" +

            "Producto: " + nombre +

            "\nStock disponible: " +

            stock + " piezas"

        );

    }else{

        alert("Producto agotado");

    }

}

/* ========================= */
/* CARGAR PRODUCTOS */
/* ========================= */

function cargarProductos(){

    fetch("obtener_productos.php")

    .then(response => response.json())

    .then(data => {

        let contenedor =
        document.getElementById(
            "contenedorProductos"
        );

        let tabla =
        document.getElementById(
            "bodyTablaProductos"
        );

        contenedor.innerHTML = "";
        tabla.innerHTML = "";

        data.forEach(producto => {

            let estadoStock =
            "disponible";

            if(producto.stock <= 5){

                estadoStock = "pocas";

            }

            if(producto.stock <= 0){

                estadoStock = "agotado";

            }

            contenedor.innerHTML += `

            <div class="producto">

                <img src="${producto.imagen}">

                <div class="info">

                    <h3>
                        ${producto.nombre}
                    </h3>

                    <span class="tag">
                        Producto
                    </span>

                    <p>
                        Precio:
                        $${producto.precio}
                        MXN
                    </p>

                    <p class="stock ${estadoStock}">

                        Stock:
                        ${producto.stock}
                        piezas

                    </p>

                    <button onclick="consultarProducto(
                        '${producto.nombre}',
                        ${producto.stock}
                    )">

                        Consultar Disponibilidad

                    </button>

                </div>

            </div>

            `;

            tabla.innerHTML += `

            <tr>

                <td>
                    ${producto.nombre}
                </td>

                <td>
                    $${producto.precio}
                </td>

                <td>
                    ${producto.stock}
                </td>

                <td>

                    <button onclick="editarProducto(
                        ${producto.id},
                        '${producto.nombre}',
                        ${producto.precio},
                        ${producto.stock}
                    )">

                        Actualizar

                    </button>

                    <button
                    style="background:#c62828;"
                    onclick="eliminarProducto(
                        ${producto.id}
                    )">

                        Eliminar

                    </button>

                </td>

            </tr>

            `;

        });

    });

}

/* ========================= */
/* AGREGAR */
/* ========================= */

function agregarProducto(){

    let nombre =
    document.getElementById(
        "nombreProducto"
    ).value;

    let cantidad =
    document.getElementById(
        "cantidadProducto"
    ).value;

    let precio =
    document.getElementById(
        "precioProducto"
    ).value;

    let imagen =
    document.getElementById(
        "imagenProducto"
    ).value;

    if(
        nombre == "" ||
        cantidad == "" ||
        precio == "" ||
        imagen == ""
    ){

        alert(
            "Complete todos los campos"
        );

        return;

    }

    let formData = new FormData();

    formData.append(
        "nombre",
        nombre
    );

    formData.append(
        "precio",
        precio
    );

    formData.append(
        "stock",
        cantidad
    );

    formData.append(
        "imagen",
        imagen
    );

    fetch("agregar_producto.php",{

        method:"POST",
        body:formData

    })

    .then(response => response.text())

    .then(data => {

        alert(data);

        cargarProductos();

        limpiarInputs();

    });

}

/* ========================= */
/* ELIMINAR */
/* ========================= */

function eliminarProducto(id){

    let confirmar = confirm(
        "¿Desea eliminar este producto?"
    );

    if(confirmar){

        let formData =
        new FormData();

        formData.append(
            "id",
            id
        );

        fetch("eliminar_producto.php",{

            method:"POST",
            body:formData

        })

        .then(response => response.text())

        .then(data => {

            alert(data);

            cargarProductos();

        });

    }

}

/* ========================= */
/* EDITAR */
/* ========================= */

function editarProducto(
    id,
    nombre,
    precio,
    stock
){

    let nuevoNombre =
    prompt(
        "Nuevo nombre:",
        nombre
    );

    let nuevoPrecio =
    prompt(
        "Nuevo precio:",
        precio
    );

    let nuevoStock =
    prompt(
        "Nuevo stock:",
        stock
    );

    if(
        nuevoNombre != null &&
        nuevoPrecio != null &&
        nuevoStock != null
    ){

        let formData =
        new FormData();

        formData.append(
            "id",
            id
        );

        formData.append(
            "nombre",
            nuevoNombre
        );

        formData.append(
            "precio",
            nuevoPrecio
        );

        formData.append(
            "stock",
            nuevoStock
        );

        fetch("actualizar_producto.php",{

            method:"POST",
            body:formData

        })

        .then(response => response.text())

        .then(data => {

            alert(data);

            cargarProductos();

        });

    }

}

/* ========================= */
/* LIMPIAR */
/* ========================= */

function limpiarInputs(){

    document.getElementById(
        "nombreProducto"
    ).value = "";

    document.getElementById(
        "cantidadProducto"
    ).value = "";

    document.getElementById(
        "precioProducto"
    ).value = "";

    document.getElementById(
        "imagenProducto"
    ).value = "";

}

/* ========================= */
/* PDF */
/* ========================= */

async function descargarPDF(){

    const { jsPDF } =
    window.jspdf;

    const doc =
    new jsPDF();

    doc.setFontSize(20);

    doc.text(
        "EasyBeauty - Inventario Cosmético",
        20,
        20
    );

    doc.save(
        "Inventario_EasyBeauty.pdf"
    );

}

</script>

</body>
</html>