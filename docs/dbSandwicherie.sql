/*-------------------------------------------	
 *	@site sandwicherie
 *	@page dbSandwicherie.sql
 *	@description Script for database
 *	@author Ferreira Pedro 
 *	@date 04.03.2017
-------------------------------------------*/

-- ------------ DATABASE CREATION --------------
-- dbSandwicherie
DROP DATABASE IF EXISTS dbSandwicherie;
CREATE DATABASE IF NOT EXISTS dbSandwicherie;
USE dbSandwicherie;

-- table Size
CREATE TABLE Size (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	size VARCHAR(15) NOT NULL
) ENGINE=InnoDB;

-- table Bread
CREATE TABLE Bread (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(15) NOT NULL
) ENGINE=InnoDB;

-- table Group
CREATE TABLE `Group` (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	number INT NOT NULL
) ENGINE=InnoDB;

-- table Price
CREATE TABLE Price (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idBread INT NOT NULL,
	idSize INT NOT NULL,
	idGroup INT NOT NULL,
	price DOUBLE(4, 2) NOT NULL,
	
	CONSTRAINT fk_Price_Bread FOREIGN KEY (idBread) REFERENCES Bread(id),
	CONSTRAINT fk_Price_Size FOREIGN KEY (idSize) REFERENCES Size(id),
	CONSTRAINT fk_Price_Group FOREIGN KEY (idGroup) REFERENCES `Group`(id)
) ENGINE=InnoDB;

-- table Ingredient
CREATE TABLE Ingredient (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	idGroup INT NOT NULL,
	
	CONSTRAINT fk_Ingredient_Group FOREIGN KEY (idGroup) REFERENCES `Group`(id)
) ENGINE=InnoDB;

-- table Sauce
CREATE TABLE Sauce (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL
) ENGINE=InnoDB;

-- table Drink
CREATE TABLE Drink (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	price DECIMAL(4, 2) NOT NULL
) ENGINE=InnoDB;

-- table Right
CREATE TABLE `Right` (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(15) NOT NULL,
	level INT NOT NULL
) ENGINE=InnoDB;

-- table User
CREATE TABLE User (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idRight INT NOT NULL,
	email VARCHAR(50) NOT NULL,
	password TEXT NOT NULL,
	firstname VARCHAR(30) NOT NULL,
	
	CONSTRAINT fk_User_Right FOREIGN KEY (idRight) REFERENCES `Right`(id)
) ENGINE=InnoDB;

-- table Order
CREATE TABLE `Order` (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idUser INT,
	date DATETIME NOT NULL,
	finished BOOLEAN NOT NULL DEFAULT FALSE,
	
	CONSTRAINT fk_Order_User FOREIGN KEY (idUser) REFERENCES User(id)
) ENGINE=InnoDB;

-- table Condiment
CREATE TABLE Condiment (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30)
) ENGINE=InnoDB;

-- table Sandwich
CREATE TABLE Sandwich (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idSauce INT NOT NULL,
	idPrice INT NOT NULL,
	idIngredient INT NOT NULL,
	idCondiment1 INT,
	idCondiment2 INT,
	idCondiment3 INT,
	
	CONSTRAINT fk_Sandwich_Sauce FOREIGN KEY (idSauce) REFERENCES Sauce(id),
	CONSTRAINT fk_Sandwich_Price FOREIGN KEY (idPrice) REFERENCES Price(id),
	CONSTRAINT fk_Sandwich_Ingredient FOREIGN KEY (idIngredient) REFERENCES Ingredient(id),
	CONSTRAINT fk_Sandwich_Condiment_1 FOREIGN KEY (idCondiment1) REFERENCES Condiment(id),
	CONSTRAINT fk_Sandwich_Condiment_2 FOREIGN KEY (idCondiment2) REFERENCES Condiment(id),
	CONSTRAINT fk_Sandwich_Condiment_3 FOREIGN KEY (idCondiment3) REFERENCES Condiment(id)
) ENGINE=InnoDB;

-- table Order_Drink
CREATE TABLE Order_Drink (
	idOrder INT NOT NULL,
	idDrink INT NOT NULL,
	PRIMARY KEY(idOrder, idDrink),

	CONSTRAINT fk_Order_Drink_Order FOREIGN KEY (idOrder) REFERENCES `Order`(id),
	CONSTRAINT fk_Order_Drink_Drink FOREIGN KEY (idDrink) REFERENCES Drink(id)
) ENGINE=InnoDB;

-- table Order_Sandwich
CREATE TABLE Order_Sandwich (
	idOrder INT NOT NULL,
	idSandwich INT NOT NULL,
	PRIMARY KEY(idOrder, idSandwich),

	CONSTRAINT fk_Order_Sandwich_Order FOREIGN KEY (idOrder) REFERENCES `Order`(id),
	CONSTRAINT fk_Order_Sandwich_Sandwich FOREIGN KEY (idSandwich) REFERENCES Sandwich(id)
) ENGINE=InnoDB;

-- --------------- DATA INSERTS -----------------
-- table Size
INSERT INTO Size VALUES
	(NULL, '1/3'),
	(NULL, '1/2'),
	(NULL, '2/3'),
	(NULL, 'entier');
	
-- table Bread
INSERT INTO Bread VALUES
	(NULL, 'Française'),
	(NULL, 'Céréale'),
	(NULL, 'Portugaise');
	
-- table Group
INSERT INTO `Group` VALUES
	(NULL, 1),
	(NULL, 2);

-- table Price
INSERT INTO Price VALUES
	(NULL, 1, 1, 1, 5.50),
	(NULL, 1, 1, 2, 6.00),
	(NULL, 1, 2, 1, 7.20),
	(NULL, 1, 2, 2, 7.80),
	(NULL, 1, 3, 1, 8.80),
	(NULL, 1, 3, 2, 9.20),
	(NULL, 2, 1, 1, 6.00),
	(NULL, 2, 1, 2, 6.50),
	(NULL, 2, 2, 1, 7.50),
	(NULL, 2, 2, 2, 8.20),
	(NULL, 2, 3, 1, 9.60),
	(NULL, 2, 3, 2, 10.00),
	(NULL, 3, 1, 1, 7.50),
	(NULL, 3, 1, 2, 8.20),
	(NULL, 3, 4, 1, 9.50),
	(NULL, 3, 4, 2, 10.00);

-- table Ingredient
INSERT INTO Ingredient VALUES
	(NULL, 'Salami', 1),
	(NULL, 'Jambon', 1),
	(NULL, 'Thon', 1),
	(NULL, 'Fromage', 1),
	(NULL, 'Tomate / Mozza', 1),
	(NULL, 'Jambon de dinde', 1),
	(NULL, 'Roastbeef', 2),
	(NULL, 'Jambon + Fromage', 2),
	(NULL, 'Crevette', 2),
	(NULL, 'Poulet', 2),
	(NULL, 'Viande séchée', 2),
	(NULL, 'Jambon cru', 2),
	(NULL, 'Saumon', 2),
	(NULL, 'Chèvre', 2),
	(NULL, 'Brie', 2),
	(NULL, 'Magret de canard', 2),
	(NULL, 'Chorizo', 2),
	(NULL, 'Poulet pané', 2);

-- table Sauce
INSERT INTO Sauce VALUES
	(NULL, 'Cocktail'),
	(NULL, 'Curry'),
	(NULL, 'Tartare'),
	(NULL, 'Mayonnaise'),
	(NULL, 'Ketchup'),
	(NULL, 'Beurre moutarde'),
	(NULL, 'Mexicaine'),
	(NULL, 'Pesto Maison'),
	(NULL, 'Harissa'),
	(NULL, 'Margarine'),
	(NULL, 'Moutarde');

-- table Drink
INSERT INTO Drink VALUES
	(NULL, 'Ice Tea Citron 5dl', 3.50),
	(NULL, 'Ice Tea Peach 5dl', 3.50),
	(NULL, 'Coca-Cola 5dl', 3.50),
	(NULL, 'Coca-Cola Light 5dl', 3.50),
	(NULL, 'Coca-Cola Zéro 5dl', 3.50),
	(NULL, 'Fanta 5dl', 3.50),
	(NULL, 'Sprite 5dl', 3.50),
	(NULL, 'Coca-Cola 1.5l', 6.50);

-- table Right
INSERT INTO `Right` VALUES
	(NULL, 'Administrateur', 3),
	(NULL, 'Gérant', 2),
	(NULL, 'Client', 1);
	
-- table User 
INSERT INTO User VALUES
	(NULL, 1, 'pedro.gilferreira@students.hevs.ch', 'pass', 'Pedro'),
	(NULL, 2, 'gerant@gerant.com', 'pass', 'Gérant'),
	(NULL, 3, 'client@client.com', 'pass', 'Client');
	
-- table Order 
INSERT INTO `Order` VALUES 
	(NULL, 3, '2017-03-05 14:15:45', false),
	(NULL, 3, '2017-03-04 12:04:08', true),
	(NULL, 3, '2017-02-28 11:58:23', true);
	
-- table Condiment
INSERT INTO Condiment VALUES
	(NULL, 'Tomate'),
	(NULL, 'Salade'),
	(NULL, 'Cornichons'),
	(NULL, 'Oignon'),
	(NULL, 'Carotte'),
	(NULL, 'Parmesan râpé'),
	(NULL, 'Concombre'),
	(NULL, 'Champignons de Paris'),
	(NULL, 'Croûtons'),
	(NULL, 'Poivron'),
	(NULL, 'Olives'),
	(NULL, 'Tomate séchée'),
	(NULL, 'Mélange de graines'),
	(NULL, 'Piment'),
	(NULL, 'Œuf'),
	(NULL, 'Poire'),
	(NULL, 'Ananas');

-- table Sandwich
INSERT INTO Sandwich VALUES 
	(NULL, 1, 1, 1, 1, 2, NULL),
	(NULL, 2, 2, 2, 3, 4, 5),
	(NULL, 3, 3, 3, 6, NULL, NULL),
	(NULL, 4, 4, 4, 7, 8, 9),
	(NULL, 5, 5, 5, 10, 11, NULL);
	
-- table Order_Drink
INSERT INTO Order_Drink VALUES
	(1, 1),
	(1, 2),
	(2, 5),
	(2, 6),
	(2, 7),
	(3, 8);
	
-- table Order_Sandwich
INSERT INTO Order_Sandwich VALUES
	(1, 1),
	(1, 2),
	(1, 5),
	(2, 3),
	(3, 4);
	
-- --------------- SELECT UTILE ---------------
/*SELECT o.date "Date de la commande", u.firstname "Prénom du client", b.name "Baguette", si.size "Taille", i.name "Ingrédient", s.name "Sauce",
	c1.name "Condiment 1", c2.name "Condiment 2", c3.name "Condiment 3", p.price "Prix"
	FROM sandwich AS sa
	INNER JOIN sauce AS s ON s.id = sa.idSauce
	INNER JOIN ingredient AS i ON i.id = sa.idIngredient
	INNER JOIN price AS p ON p.id = sa.idPrice
	INNER JOIN size AS si ON si.id = p.idSize
	INNER JOIN bread AS b ON b.id = p.idBread
	INNER JOIN condiment AS c1 ON c1.id = sa.idCondiment1
	INNER JOIN condiment AS c2 ON c2.id = sa.idCondiment2
	INNER JOIN condiment AS c3 ON c3.id = sa.idCondiment3
	INNER JOIN order_sandwich AS os ON os.idSandwich = sa.id
	INNER JOIN dbSandwicherie.order AS o ON o.id = os.idOrder
	INNER JOIN user AS u ON u.id = o.idUser;*/