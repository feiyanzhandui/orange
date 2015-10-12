CREATE TABLE IF NOT EXISTS `trips` (
    `name` varchar(10) NOT NULL,
    `email` tinytext NOT NULL,
    `username` varchar(64) NOT NULL,
    `password` varchar(64) NOT NULL,
    `confirmcode` varchar(64),
    PRIMARY KEY (`username`)
    );


insert into `orange`.`trips` (username, ddate, departure, destination) values ('test03', '10/10/2015', 'PVD', 'DTW'); 
insert into `orange`.`trips` (username, ddate, departure, destination) values ('test02', '10/10/2015', 'PVD', 'DTW');
insert into `orange`.`trips` (username, ddate, departure, destination) values ('test02', '10/11/2015', 'PVD', 'DTW');
insert into `orange`.`trips` (username, ddate, departure, destination) values ('test05', '10/11/2015', 'BOS', 'JFK');
insert into `orange`.`trips` (username, ddate, departure, destination) values ('test05', '10/18/2015', 'PVD', 'DTW');
insert into `orange`.`trips` (username, ddate, departure, destination) values ('test03', '10/10/2015', 'BOS', 'DTW');
