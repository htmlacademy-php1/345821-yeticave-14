USE yeticave; -- подключение к базе данных
INSERT INTO categories (cat_id)
VALUES ('boards'),('attachment'),('boots'),('clothing'),('tools'),('other') ;
INSERT INTO categories (cat_name)
VALUES (' Доски и лыжи'),('Крепления'),('Ботинки'),('Одежда'),('Инструменты'),('Разное');
-- заполнение таблицы категорий

INSERT INTO users (dt_reg)
VALUES (NOW); -- СПОРНЫЙ ВОПРОС С ДАТОЙ!
INSERT INTO users(email)
VALUES ('ignat-88@bk.ru'),('test@mail.ru');
INSERT INTO users (name)
VALUES (Ignat),(Petr);
INSERT INTO users (paasword)
VALUES (Qwerty15),(Asd18);
INSERT INTO users (contact)
VALUES ('89100136555'),('84952741001');
--заполнение таблицы пользователей

INSERT INTO lots (dt_lot)
VALUES (NOW); --спорный вопрос
INSERT INTO lots (name),
VALUES ('2014 Rossignol District Snowboard'),('DC Ply Mens 2016/2017 Snowboard'),('Крепления Union Contact Pro 2015 года размер L/XL'),('Ботинки для сноуборда DC Mutiny Charocal'),('Куртка для сноуборда DC Mutiny Charocal'),('Маска Oakley Canopy');ABS
INSERT INTO lot (descriprion),
VALUES ;
INSERT INTO lots (img_link),
VALUES ('img/lot-1.jpg'), ('img/lot-2.jpg'),('img/lot-3.jpg'),('img/lot-4.jpg'),('img/lot-5.jpg'),('img/lot-6.jpg');
INSERT INTO lots (start_price)
VALUES (10999),(159999),(8000),(10999),(7500),(5400);
INSERT INTO lots (dt_end)
VALUES ("2022-05-23"),("2022-04-25"),("2022-05-04"),("2022-05-01"),("2022-04-30"),("2022-05-10");
INSERT INTO lots (up_bet)
VALUES (500),(500),(500),(500),(500),(500);
--заполнение таблицы объявлений
