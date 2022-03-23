<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
<style type="text/css">
    <%@include file="css/myCSS.css" %>
</style>
<style type="text/css">
    <%@include file="css/index.css" %>
</style>
<style type="text/css">
    <%@include file="css/navigation.css" %>
</style>
<style type="text/css">
    <%@include file="css/background.css" %>
</style>
</head>
<body>
<div class="nav">   
         	<div><a href="/IzdavackaKuca/index.jsp">Početna</a></div> 	
         	<div><a href="/IzdavackaKuca/kategorijeRadnik.jsp">Kategorije</a></div>
         	<div class="nav_drop">
				Knjige
				<div class="items">
					<span><a href="/IzdavackaKuca/pretragaKnjiga.jsp">Pretraga knjiga</a></span>					
					<span><a href="/IzdavackaKuca/radnik/sveKategorijeDodaj">Dodaj knjigu</a></span>
			  	</div>
			</div>
         	<div class="nav_drop">
				Književne večeri
				<div class="items">
					<span><a href="/IzdavackaKuca/radnik/sveVeceri">Prikaži književne večeri</a></span>					
					<span><a href="/IzdavackaKuca/radnik/sveKnjige">Zakaži književno veče</a></span>
			  	</div>
			</div>
			<div><a href="/IzdavackaKuca/izvestaji.jsp">Izveštaji</a></div>
			<div><a href="/IzdavackaKuca/auth/logout">Odjavi se</a></div>
         </div> 
</body>
</html>