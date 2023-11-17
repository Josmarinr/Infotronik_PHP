Create table Articulos(
	ID_Articulos int AUTO_INCREMENT Primary key,
	Descripcion varchar(50),
	PVP int,
	Pais_Origen varchar(30),
	Imagen varchar(255)
);

Create table Zona_Ventas(
	ID_Zona int AUTO_INCREMENT primary key,
	Nombre_Zona varchar(30)
);

Create table Clientes(
	ID_Clientes int AUTO_INCREMENT primary key,
	Nombre varchar(50),
	Direccion varchar(30),
	Telefono int,
	ID_Zona int,
	Foreign key (ID_Zona) references Zona_Ventas(ID_Zona)
);

Create table Pedidos(
	ID_Pedido int AUTO_INCREMENT primary key,
	ID_Articulos int,
	ID_Clientes int,
	Foreign key (ID_Clientes) references Clientes(ID_Clientes),
	Foreign key (ID_Articulos) references Articulos(ID_Articulos)
);

Create table Detalle_Pedido(
	Id_Detalle int AUTO_INCREMENT primary key,
	ID_Pedido int,
	ID_Articulos int,
	Unidades int,
	Valor int,
	Detalles varchar(50),
	Foreign key (ID_Pedido) references Pedidos(ID_Pedido),
	Foreign key (ID_Articulos) references Articulos(ID_Articulos)
);

Insert into Articulos values
('Chip', 40000, 'Colombia'),
('Memoria', 44000, 'Peru'),
('Disco Duro', 55000, 'Ecuador'),
('CPU', 60000, 'Venezuela'),
('Pantalla', 50450, 'Argentina'),
('Teclado', 58700, 'Chile'),
('Mouse', 60000, 'Peru'),
('Tarjeta Grafica', 42600, 'Chile'),
('Audifonos', 7400, 'Çolombia'),
('Microfono', 20000, 'Colombia');

Insert into Zona_Ventas(Zona_Ventas) values
('Cali'),
('Bogota'),
('Medellin'),
('Boyaca'),
('Cucuta'),
('Risaralda'),
('Girardot'),
('Tolima'),
('Leticia'),
('Nariño');


Insert into Clientes(Nombre,Direccion,Telefono,ID_Zona) values
('Rosario Encarnacion Morales', 'Calle 10 No. 9 - 78  Centro', 4210220, 3),
('Manuel Antonio Fernández Ortubey', 'Carrera 56A No. 51 - 81', 8723041, 6),
('Eloísa Beatriz Jiménez Gómez', 'Carrera 22 No. 17-31', 7273995, 1),
('María Rosa Morales', 'Carrera 54 No. 68 - 80 Barrio el Prado', 3305040, 4),
('Juan María Estévez Raimúndez', 'Carrera 8  No. 20 - 59', 7825992, 2),
('Daniel José Narancio Araújo', 'Calle 15 No. 9 - 56 centro', 6711519, 10),
('Julio César Ruiz Norman', 'Calle 28 No. 8 - 69 CENTRO', 5847711, 7),
('Carolina Emilia Herrera de Gurméndez', 'Carrera 7A No. 32 - 63 piso 2', 8241832, 9),
('Pablo Ramiro Morales', 'Carrera 9  No. 7 - 34', 5847711, 5),
('Ana Lía Goes Berreta', 'Calle 20 No. 3 - 22', 8845585, 8);

Insert into Pedidos(ID_Articulos,ID_Clientes,Unidades) values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

Insert Insert Detalle_Pedido(ID_Pedido,ID_Articulos,Unidades,Valor,Detalles) values
(1,1,30,1200000,'Marca AMD y Intel'),
(2,2,2,88000,'Marca Samsung'),
(3,3,84,4620000,'Marca Samsung, Toshiba y Kingston'),
(4,4,5,300000,'Marca IBM'),
(5,5,2,100900,'Marca Samsung y Acer'),
(6,6,61,3580700,'Marca MSI, Samsung y HP'),
(7,7,15,900000,'Marca Sony, Dell y Compac'),
(8,8,24,1022400,'Marca AMD, Gforce y Nvidia'),
(9,9,27,199800,'Marca Sony y Boss'),
(10,10,58,1160000,'Marca Dell y Samsung');
