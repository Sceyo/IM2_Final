create database Tugonon_Construction;

use Tugonon_Construction;

CREATE TABLE `Client` (
    `ClientID` int not null auto_increment,
    `first_name` varchar(50),
    `last_name` varchar(50),
    `Client_Num` varchar(50),
    `Client_Add` varchar(50),
    `Email` varchar(50),
    primary key(ClientID)
);

CREATE TABLE `Foreman` (
    `ForemanID` int not null auto_increment,
    `first_name` varchar(50),
    `last_name` varchar(50),
    `Foreman_Num` varchar(50),
    `Foreman_Add` varchar(50),
    primary key(ForemanID)
);

CREATE TABLE `Supplier` (
    `SupplierID` int not null auto_increment,
    `first_name` varchar(50),
    `last_name` varchar(50),
    `Supplier_Num` varchar(50),
    `Supplier_Add` varchar(50),
    `Email` varchar(50),
    primary key(SupplierID)
);

CREATE TABLE `Worker` (
    `WorkerID` int not null auto_increment,
    `ForemanID` varchar(4),
    `first_name` varchar(50),
    `last_name` varchar(50),
    `Worker_Num` varchar(50),
    `Worker_Add` varchar(50),
    primary key(WorkerID)
);

CREATE TABLE `Project` (
  `ProjectID` int NOT NULL auto_increment,
  `ForemanID`int NOT NULL,
  `ClientID` int NOT NULL,
  `Duration` int NOT NULL,
  `Budget` int NOT NULL,
  `ProjectDate` Date,
  primary key(ProjectID),   
  constraint projectFK1 foreign key(ForemanID) references Foreman(ForemanID),
  constraint projectFK2 foreign key(ClientID) references Client(ClientID)
);


CREATE TABLE `Project_Workers` (
    `ProjectID` int not null auto_increment,
    `WorkerID` int not null,
    primary key(ProjectID),
    constraint pwfk1 foreign key(ProjectID) references Project(ProjectID),
    constraint pwfk2 foreign key(WorkerID) references Worker(WorkerID)
);

CREATE TABLE `Project_Suppliers` (
    `ProjectID` int not null auto_increment,
    `SupplierID` int not null,
    primary key(ProjectID),
    constraint psfk1 foreign key(ProjectID) references Project(ProjectID),
    constraint psfk2 foreign key(SupplierID) references Supplier(SupplierID)
);
