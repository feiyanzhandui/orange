CREATE TABLE IF NOT EXISTS `trips` (
    `name` varchar(10) NOT NULL,
    `email` tinytext NOT NULL,
    `username` varchar(64) NOT NULL,
    `password` varchar(64) NOT NULL,
    `confirmcode` varchar(64),
    PRIMARY KEY (`username`)
    );
