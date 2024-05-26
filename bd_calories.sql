CREATE DATABASE calories;

drop database calories;
use calories;

CREATE TABLE tb_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_days (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    day_date DATE NOT NULL,
    total_calories INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES tb_user(id)
);

CREATE TABLE tb_food (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    calories_per_gram INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_meal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day_id INT,
    meal_name VARCHAR(255) NOT NULL,
    total_calories DECIMAL(10, 2) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (day_id) REFERENCES tb_days(id)
);

CREATE TABLE tb_meal_food (
    meal_food_id INT AUTO_INCREMENT PRIMARY KEY,
    meal_id INT,
    food_id INT,
    quantity_in_grams DECIMAL(10, 2) NOT NULL,
    total_calories DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (meal_id) REFERENCES tb_meal(id),
    FOREIGN KEY (food_id) REFERENCES tb_food(id)
);

insert into tb_user (name, email, password) VALUES ('william', 'williamitalia70@outlook.com', '12345');
insert into tb_days (user_id, day_date) VALUES (1, '2024-05-25');
insert into tb_meal (day_id, meal_name) VALUES (1, 'Almoço');

-- 100 gramas de arroz
INSERT INTO tb_meal_food (meal_id, food_id, quantity_in_grams, total_calories)
VALUES (1, 6, 300, 100 * (SELECT calories_per_gram FROM tb_food WHERE id = 6));

-- 200 gramas de carne
INSERT INTO tb_meal_food (meal_id, food_id, quantity_in_grams, total_calories)
VALUES (2, 2, 200, 200 * (SELECT calories_per_gram FROM tb_food WHERE id = 2));

-- 140 gramas de batata frita
INSERT INTO tb_meal_food (meal_id, food_id, quantity_in_grams, total_calories)
VALUES (2, 3, 140, 140 * (SELECT calories_per_gram FROM tb_food WHERE id = 3));


UPDATE tb_meal
SET total_calories = (
    SELECT SUM(total_calories) FROM tb_meal_food WHERE meal_id = 2
)
WHERE id = 2;


UPDATE tb_days
SET total_calories = (
    SELECT SUM(total_calories) FROM tb_meal WHERE day_id = 1
)
WHERE id = 1;

INSERT INTO tb_food (name, calories_per_gram) 
VALUES 
    ('Apple', 0.52),
    ('Banana', 0.96),
    ('Chicken Breast', 1.65),
    ('Rice', 1.30),
    ('Broccoli', 0.34),
    ('Almonds', 5.75),
    ('Salmon', 2.08),
    ('Egg', 1.55),
    ('Oatmeal', 0.68),
    ('Milk', 0.42),
    ('Avocado', 1.60),
    ('Cheese', 4.02),
    ('Beef', 2.50),
    ('Yogurt', 0.61),
    ('Potato', 0.77),
    ('Orange', 0.47),
    ('Strawberry', 0.32),
    ('Peanut Butter', 5.90),
    ('Spinach', 0.23),
    ('Carrot', 0.41);
