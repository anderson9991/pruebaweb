<!DOCTYPE html>
<html lang="es">
<head>
<style>
  
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #2a0927;
  color: white;
}
header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <h1>GamerFest.com</h1>
</header>

<footer>
    <h1>www.GamerFest.com</h1>
</footer>

</style>
</head>
<body>

<h1>Inscripciones individuales</h1>

<table id="customers">
<tr> 
								<td>#</td> 
								<th>Videojuego Id</th>
								<th>Aula Id</th>
								<th>Tiempo Inicio</th>
								<th>Tiempo Final</th>
								<th>Fecha</th>
								<th>Observacion</th>
							</tr>
						</thead>
						<tbody>
							@foreach($horarios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->videojuego->nombre }}</td>
								<td>{{ $row->aula->nombre_aula }}</td>
								<td>{{ $row->tiempo_inicio }}</td>
								<td>{{ $row->tiempo_final }}</td>
								<td>{{ $row->fecha }}</td>
								<td>{{ $row->observacion }}</td>

							@endforeach

</body>

</html>