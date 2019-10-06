/*USE mamuthack;

SELECT * FROM Levels;
SELECT * FROM Users;
SELECT * FROM Tipus;
SELECT * FROM Activities;
SELECT * FROM Registers;*/

/*SELECT lev.level_name
FROM Levels AS lev, Users AS us
WHERE us.tracking_num > lev.start_level AND us.tracking_num < lev.end_level;*/

SELECT us.user_id, SUM(ac.points)
FROM Users AS us, Registers AS reg, Activities AS ac
WHERE us.user_id = reg.user_id AND ac.activity_id = reg.activity_id
GROUP BY user_id;

/*SELECT us.user_id, COUNT(*) num_activities
FROM Users AS us, Registers AS reg
WHERE us.user_id = reg.user_id
GROUP BY user_id;*/

/*SELECT us.user_id, COUNT(IF(reg.user_id = us.user_id, 1, NULL))
FROM Users AS us, Registers AS reg
WHERE (us.user_id = reg.user_id);

SELECT us.user_id FROM Users AS us WHERE us.user_name LIKE "Irene";
SELECT us.user_id FROM Users AS us WHERE us.user_password LIKE "irene";
SELECT us.user_id FROM Users AS us WHERE us.user_password LIKE "jnnrjbjterot";
SELECT * FROM Users WHERE user_name = "Bet" AND user_password = "bet";
SELECT * FROM Users WHERE user_name = "Bet" AND user_password = "hjdgfkslñ";

SELECT us.user_name FROM Usuaris AS us WHERE us.user_id LIKE 1;*/
/*FROM Usuaris AS us, Grups AS gr, Pertany AS per
WHERE us.user_id LIKE per.user_id AND per.id_grup LIKE gr.id_grup
ORDER BY gr.nom asc;*/