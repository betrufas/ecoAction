DROP DATABASE IF EXISTS mamuthack;
CREATE DATABASE mamuthack;
USE mamuthack;

/*Creem la taula Users*/
CREATE TABLE Users(
user_id integer(10) NOT NULL AUTO_INCREMENT,
user_name varchar(30) NOT NULL UNIQUE,
user_password varchar(30) NOT NULL,
twitter_name varchar(30),
user_job varchar(100),
user_location varchar(30),
user_birthday varchar(30),
reward_points integer(4), /*Aquest farem update*/
tracking_num integer(4), /*Aquest el farem update*/


/*user_id sera clau primaria de la taula*/
constraint pk_user_id primary key (user_id)
);

CREATE TABLE Currents(
current_user_id integer(10),

constraint pk_current_user_id primary key (current_user_id)
);

/*Creem la taula Levels*/
CREATE TABLE Levels(
level_id integer(1),
level_name varchar(30),
start_level integer(2),
end_level integer(4),

/*La ID sera clau primaria de la taula*/
constraint pk_level_id primary key (level_id)
);

/*Creem la taula Types*/
CREATE TABLE Tipus(
type_id integer(1), 
type_name varchar(30),

/*La ID sera clau primaria de la taula*/
constraint pk_type_id primary key (type_id)
);

/*Creem la taula Activities*/
CREATE TABLE Activities(
activity_id integer(4),
activity_name varchar(100),
activity_description varchar(300),
type_id integer(1),
points integer(2),

/*challenge_id sera clau primaria de la taula*/
constraint pk_activity_id primary key (activity_id),
/*id_type sera una clau forana que referencia la taula de Types*/
constraint fk_type_id_challenges foreign key (type_id) references Tipus(type_id)
);

/*Creem la taula Assists*/
CREATE TABLE Assists(
user_id integer(10),
activity_id integer(4),

/*user_id i activity_id seran la clau primaria de la taula assists*/
constraint pk_assists_id primary key (user_id, activity_id),
/*user_id i activity_id seran claus foranes que referencien Users i Activities respectivament*/
constraint fk_user_id_assists foreign key (user_id) references Users(user_id),
constraint fk_activity_id_assists foreign key (activity_id) references Activities(activity_id)
);

/*Creem la taula Registers*/
CREATE TABLE Registers(
user_id integer(10),
activity_id integer(4),

/*user_id i activity_id seran claus foranes que referencien Users i Activities respectivament*/
constraint fk_user_id_registers foreign key (user_id) references Users(user_id),
constraint fk_activity_id_registers foreign key (activity_id) references Activities(activity_id)
);

/*Creem la taula Daily*/
CREATE TABLE Daily(
daily_id integer(4),
daily_name varchar(100),

/*daily_id sera clau primaria de la taula*/
constraint pk_daily_id primary key (daily_id)
);

/*Creem la taula Does*/
CREATE TABLE Does(
user_id integer(10),
daily_id integer(4),

/*user_id i daily_id seran la clau primaria de la taula does*/
constraint pk_does_id primary key (user_id, daily_id),
/*user_id i daily_id seran claus foranes que referencien Users i Activities respectivament*/
constraint fk_user_id_does foreign key (user_id) references Users(user_id),
constraint fk_daily_id_does foreign key (daily_id) references Daily(daily_id)
);

/*Creem la taula Rewards*/
CREATE TABLE Rewards(
reward_id integer(4),
reward_name varchar(100),
reward_points integer(3),

/*reward_id sera clau primaria de la taula*/
constraint pk_reward_id primary key (reward_id)
);

/*Creem la taula Tracking*/
CREATE TABLE Tracking(
tracking_id integer(4),
tracking_name varchar(100),
tracking_number integer(3),

/*reward_id sera clau primaria de la taula*/
constraint pk_tracking_id primary key (tracking_id)
);