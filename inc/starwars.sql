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
INSERT INTO Product VALUES (4, "R2-D2", 149.99, 3, "Droids", "Beep boop beep boop.");
INSERT INTO Product VALUES (5, "C-3PO", 49.99, 2, "Droids", "I dont know about this.");
INSERT INTO Product VALUES (6, "Millenium Falcon", 199.99, 3, "Rebellion Vehicles", "Best spaceship in the galaxy.");
INSERT INTO Product VALUES (7, "Darth Vader", 129.99, 6, "Sith Lords", "*Breathing Noises*.");
INSERT INTO Product VALUES (8, "Darth Maul", 69.99, 2, "Sith Lords", "I have a cool red lightsaber.");
INSERT INTO Product VALUES (9, "AT-AT", 119.99, 1, "Empire Vehicles", "Big robot elephant.");

INSERT INTO ProductImage VALUES (1, "images/YODA1.png");
INSERT INTO ProductImage VALUES (1, "images/YODA2.png");
INSERT INTO ProductImage VALUES (1, "images/YODA3.png");
INSERT INTO ProductImage VALUES (2, "images/LUKE1.png");
INSERT INTO ProductImage VALUES (2, "images/LUKE2.png");
INSERT INTO ProductImage VALUES (2, "images/LUKE3.png");
INSERT INTO ProductImage VALUES (3, "images/REI1.png");
INSERT INTO ProductImage VALUES (3, "images/REI2.png");
INSERT INTO ProductImage VALUES (3, "images/REI3.png");
INSERT INTO ProductImage VALUES (4, "images/R2D21.png");
INSERT INTO ProductImage VALUES (4, "images/R2D22.png");
INSERT INTO ProductImage VALUES (4, "images/R2D23.png");
INSERT INTO ProductImage VALUES (5, "images/C3P01.png");
INSERT INTO ProductImage VALUES (5, "images/C3P02.png");
INSERT INTO ProductImage VALUES (5, "images/C3P03.png");
INSERT INTO ProductImage VALUES (6, "images/MFALCON1.png");
INSERT INTO ProductImage VALUES (6, "images/MFALCON2.png");
INSERT INTO ProductImage VALUES (6, "images/MFALCON3.png");
INSERT INTO ProductImage VALUES (7, "images/VADER1.png");
INSERT INTO ProductImage VALUES (7, "images/VADER2.png");
INSERT INTO ProductImage VALUES (7, "images/VADER3.png");
INSERT INTO ProductImage VALUES (8, "images/DMAUL1.png");
INSERT INTO ProductImage VALUES (8, "images/DMAUL2.png");
INSERT INTO ProductImage VALUES (8, "images/DMAUL3.png");
INSERT INTO ProductImage VALUES (9, "images/ATAT1.png");
INSERT INTO ProductImage VALUES (9, "images/ATAT2.png");
INSERT INTO ProductImage VALUES (9, "images/ATAT3.png");
