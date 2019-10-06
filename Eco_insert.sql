USE mamuthack;

INSERT INTO `mamuthack`.`Currents`(`current_user_id`) VALUES
(0);

INSERT INTO `mamuthack`.`Levels` (`level_id`,`level_name`,`start_level`,`end_level`) VALUES
(1,"Sapo Dorado",0,9),
(2,"Guacamayo Azul",10,19),
(3,"Pato Mariana",20,29),
(4,"Dodo",30,39),
(5,"Delfín Baiji",40,49),
(6,"Tortuga de la Isla Pinta",50,59),
(7,"Foca Monje",60,69),
(8,"Rinoceronte Lanudo",70,79),
(9,"Oso Grizzli Mexicano",80,89),
(10,"Tigre Dientes de Sable",90,99),
(11,"Mamut",100,9999);

DELETE FROM Users;
INSERT INTO `mamuthack`.`Users` (`user_id`,`user_name`,`user_password`,`twitter_name`,`user_job`,`user_location`,`user_birthday`,`reward_points`,`tracking_num`) VALUES
(1,"Dimas","dimas","fastandfourier1", "Telecommunications Engineering, UPC","Tarragona","June 6th 1998", 0,57),
(2,"Pau","pau", "fpau1", "Telecommunications Engineering, UPC","Martorelles","August 8th 1998", 0,0),
(3,"Bet","bet" ,"bet2", "Telecommunications Engineering, UPC","Manresa","December 9th 1999", 89,67),
(4,"Irene","irene", "irene3", "Audiovisual Systems Engineering, UPF","Tarragona","March 26th 1998", 0,0);

INSERT INTO `mamuthack`.`Tipus` (`type_id`,`type_name`) VALUES
(1, "Events"),
(2, "Restaurants"),
(3, "Shops");

INSERT INTO `mamuthack`.`Activities` (`activity_id`,`activity_name`,`activity_description`,`type_id`,`points`) VALUES
(1, "Litter Pick Up", "Picking up litter from la Barceloneta is a great way to keep our beaches clean and helaty. Want to help? Date: October 1, 2019", 1, 20),
(2, "Second-Hand Clothing Pick Up", "Do you want to be a part of a clothing pick-up campaing collaborating with ONGs? Date: October 7, 2019", 1, 15),
(3, "Food Pick Up", "Do you want to be a part of a food pick-up campaing collaborating with ONGs such as 'El Banc d'aliments'? Date: October 9, 2019", 1, 20),
(4, "Tree Plantation", "Come join us to be an active part in the green fight! Plant trees to restore wildlife, reduce CO2 and make this world better! Date: October 12, 2019", 1, 30);
