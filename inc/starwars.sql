SET @@AUTOCOMMIT = 1;

DROP DATABASE IF EXISTS starwars;
CREATE DATABASE starwars;

USE starwars;

CREATE TABLE Customer (
custID			INT(5) NOT NULL,
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
orderID			INT(5) NOT NULL,
orderedProduct	INT(5),
totalPrice		FLOAT(5,2),
PRIMARY KEY (custID, orderID),
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

CREATE user IF NOT EXISTS dbadmin@localhost;
GRANT all privileges ON starwars.Customer TO dbadmin@localhost;
GRANT all privileges ON starwars.CreditCard TO dbadmin@localhost;
GRANT all privileges ON starwars.Product TO dbadmin@localhost;
GRANT all privileges ON starwars.ProductImage TO dbadmin@localhost;
GRANT all privileges ON starwars.PurchaseOrder TO dbadmin@localhost;
GRANT all privileges ON starwars.PurchasedProduct TO dbadmin@localhost;


