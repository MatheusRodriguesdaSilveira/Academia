<style>html, body {
    max-width: 100%;
    overflow-x: hidden;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.container-fluid{
    position: absolute;
    z-index: 2;
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}

body{
    width: 100%;
    background: #e66b1a;
    background: radial-gradient(circle, rgba(255, 145, 0, 0.711) 0%, rgba(4,4,1,1) 100%);
    
}

.navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
    font-family:Comic Sans MS, Comic Sans, cursive;
}
.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-family:Comic Sans MS, Comic Sans, cursive;
    font-size: 20px;
    font-weight: 500;
}
.content{
    text-align: center;
}

.content h1{
    font-family:Verdana, Geneva, Tahoma, sans-serif ;
    font-size: 80px;
    color: #fff;
    font-weight: 600;
}

.content h2{
    font-size: 40px;
    font-family:Comic Sans MS, Comic Sans, cursive;
    color: white;
    font-weight: 500;

}

.navbar-nav{
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link  {
    color: #F0F8FF;
	width: 110%;
	padding: -3px 8%;
	display: flex;
	align-items: center;
	justify-content: space-between;

}
a.nav-link{
    display: block;
    padding: 0.5rem 1rem;
    color: #F0F8FF;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

nav .logo{
	margin-left: 0px;
}

nav ul {
	float: right;
	margin-right: 20px;
}

nav ul li {
	list-style-type: none;
	display: inline-block;
	line-height: 70px;
	margin: 0,5px;
}

nav ul li a {
	color: white;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	padding: 20px 13px;
	border-radius: 3px;
	font-weight: 770px;
	text-transform: uppercase;
	text-decoration: none;
	font-weight: bold;
}

nav ul li a:hover{
	color: darkorange;
	transition: .5s;
}
header a.active,header  a:hover {
	transition: .5s;
}

header .logo:hover{
	background-color: rgba(0, 0, 0, 0);
}

label{
    max-width: 769px;
    font-family: Comic Sans MS, Comic Sans, cursive;
    font-size: 1rem;
    text-align: center;
    margin: auto;
    color: #fff;
}
.form-control{
    border: none;
    padding: 23px 15px;
    border-radius: 30px;
    background: rgba(255, 255, 255, 0.253);
    font-family: Comic Sans MS, Comic Sans, cursive;
    background-color: rgba(255, 255, 255, 0.397);
}

.btn-link1 {
    padding: 17px 72px;
    border: none;
    font-size: 17px;
    color: rgb(58, 58, 58);
    border-radius: 7px;
    letter-spacing: 2;
    /* font-weight: 700; */
    /* text-transform: uppercase; */
    transition: 0.5s;
    transition-property: box-shadow;
    text-decoration: none;
    font-family: Comic Sans MS, Comic Sans, cursive;
}
  
  .btn-link1 {
    background: rgb(255, 255, 255);
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.315);
  }
  
  .btn-link1:hover {
    box-shadow: 0 0 5px rgb(255, 255, 255),
                0 0 100px rgb(255, 115, 0);
  }
 </style><h1>Novo Cliente </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="NOME_CLIENTE" class="form-control" >
    </div>
    
    <div class="mb-3">
        <label for="Telefone">Telefone do Cliente</label>
        <input type="text" name="FONE_CLIENTE" class="form-control" >
    </div>

    <div class="mb-3">
        <label for="Email">Email</label>
        <input type="email" name="EMAIL_CLIENTE" class="form-control" >
    </div>
    
    <div class="mb-3">
        <label for="Senha">Senha</label>
        <input type="password" name="PASS_CLIENTE" class="form-control" >
    </div>
  
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>