SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS starwars;
CREATE DATABASE starwars;

USE starwars;

CREATE TABLE Customer (
custID			INT(5) NOT NULL AUTO_INCREMENT,
fName			VARCHAR(20),
lName			VARCHAR(20),
address			VARCHAR(45),
suburb			VARCHAR(30),
postCode		VARCHAR(4),
region			VARCHAR(3),
email			VARCHAR(50),
PRIMARY KEY (custID)
); 

CREATE TABLE CreditCard (
custID			INT(5) NOT NULL,
cardNo			VARCHAR(19) NOT NULL,
expiryMonth		VARCHAR(3),
expiryYear		VARCHAR(4),
cvv				VARCHAR(3),
PRIMARY KEY (custID, cardNo),
FOREIGN KEY (custID) REFERENCES Customer(custID)
);

CREATE TABLE Product (
prodID			INT(5) NOT NULL,
prodName		VARCHAR(20),
price			FLOAT(5,2),
quantity		INT(5),
category        VARCHAR(20),
description		VARCHAR(200),
PRIMARY KEY (prodID)
);

CREATE TABLE ProductImage (
prodID			INT(5) NOT NULL,
imageRef		VARCHAR(200) NOT NULL,
PRIMARY KEY (prodID, imageRef),
FOREIGN KEY (prodID) REFERENCES Product(prodID)	
);

CREATE TABLE PurchaseOrder (
custID			INT(5) NOT NULL,
orderID			INT(5) NOT NULL AUTO_INCREMENT,
orderedProduct	INT(5),
totalPrice		FLOAT(5,2),
PRIMARY KEY (orderID),
FOREIGN KEY (custID) REFERENCES Customer(custID)
);

CREATE TABLE PurchasedProduct (
custID			INT(5) NOT NULL,
orderID			INT(5) NOT NULL,
orderedProduct	INT(5) NOT NULL,
quantity		INT(5),
PRIMARY KEY (custID, orderID, orderedProduct),
FOREIGN KEY (custID, orderID) REFERENCES PurchaseOrder(custID, orderID)
);

ALTER TABLE Customer AUTO_INCREMENT=1;
ALTER TABLE PurchaseOrder AUTO_INCREMENT=1;

CREATE user IF NOT EXISTS dbadmin;
GRANT all privileges ON starwars.Customer TO dbadmin;
GRANT all privileges ON starwars.CreditCard TO dbadmin;
GRANT all privileges ON starwars.Product TO dbadmin;
GRANT all privileges ON starwars.ProductImage TO dbadmin;
GRANT all privileges ON starwars.PurchaseOrder TO dbadmin;
GRANT all privileges ON starwars.PurchasedProduct TO dbadmin;

INSERT INTO Product VALUES (1, "Yoda", 99.99, 5, "Jedi", "Green, I am.");
INSERT INTO Product VALUES (2, "Luke Skywalker", 79.99, 2, "Jedi", "I am a Jedi.");
INSERT INTO Product VALUES (3, "Rey", 89.99, 4, "Jedi", "I am a better Jedi.");
INSERT INTO Product VALUES (4, "R2D2", 149.99, 3, "Droids", "Beep boop beep boop.");
INSERT INTO Product VALUES (5, "C3P0", 49.99, 2, "Droids", "I dont know about this.");
INSERT INTO Product VALUES (6, "Millenium Falcon", 199.99, 3, "Rebellion Vehicles", "Best spaceship in the galaxy.");
INSERT INTO Product VALUES (7, "Darth Vader", 129.99, 6, "Sith Lords", "*Breathing Noises*.");
INSERT INTO Product VALUES (8, "Darth Maul", 69.99, 2, "Sith Lords", "I have a cool red lightsaber.");
INSERT INTO Product VALUES (9, "AT-AT", 119.99, 1, "Empire Vehicles", "Big robot elephant.");

INSERT INTO ProductImage VALUES (1, "images/Yoda1.jpg");
INSERT INTO ProductImage VALUES (1, "images/Yoda2.jpg");
INSERT INTO ProductImage VALUES (1, "images/Yoda3.jpg");
INSERT INTO ProductImage VALUES (2, "images/LukeSkywalker1.jpg");
INSERT INTO ProductImage VALUES (2, "images/LukeSkywalker2.jpg");
INSERT INTO ProductImage VALUES (2, "images/LukeSkywalker3.jpg");
INSERT INTO ProductImage VALUES (3, "images/Rey1.jpg");
INSERT INTO ProductImage VALUES (3, "images/Rey2.jpg");
INSERT INTO ProductImage VALUES (3, "images/Rey3.jpg");
INSERT INTO ProductImage VALUES (4, "images/R2D21.jpg");
INSERT INTO ProductImage VALUES (4, "images/R2D22.jpg");
INSERT INTO ProductImage VALUES (4, "images/R2D23.jpg");
INSERT INTO ProductImage VALUES (5, "images/C3P01.jpg");
INSERT INTO ProductImage VALUES (5, "images/C3P02.jpg");
INSERT INTO ProductImage VALUES (5, "images/C3P03.jpg");
INSERT INTO ProductImage VALUES (6, "images/MilleniumFalcon1.jpg");
INSERT INTO ProductImage VALUES (6, "images/MilleniumFalcon2.jpg");
INSERT INTO ProductImage VALUES (6, "images/MilleniumFalcon3.jpg");
INSERT INTO ProductImage VALUES (7, "images/DarthVader1.jpg");
INSERT INTO ProductImage VALUES (7, "images/DarthVader2.jpg");
INSERT INTO ProductImage VALUES (7, "images/DarthVader3.jpg");
INSERT INTO ProductImage VALUES (8, "images/DarthMaul1.jpg");
INSERT INTO ProductImage VALUES (8, "images/DarthMaul2.jpg");
INSERT INTO ProductImage VALUES (8, "images/DarthMaul3.jpg");
INSERT INTO ProductImage VALUES (9, "images/ATAT1.jpg");
INSERT INTO ProductImage VALUES (9, "images/ATAT2.jpg");
INSERT INTO ProductImage VALUES (9, "images/ATAT3.jpg");
