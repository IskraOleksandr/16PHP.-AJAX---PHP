CREATE DATABASE employees_db;

USE employees_db;

CREATE TABLE employees (
                           id INT AUTO_INCREMENT PRIMARY KEY,
                           Name VARCHAR(50),
                           Surname VARCHAR(50),
                           Country VARCHAR(50),
                           City VARCHAR(50),
                           Salary INT
);

INSERT INTO employees (Name, Surname, Country, City, Salary)
VALUES
    ('John', 'Doe', 'USA', 'New York', 1000),
    ('Jane', 'Smith', 'USA', 'Los Angeles', 1300),
    ('Alice', 'Johnson', 'Germany', 'Berlin', 700),
    ('Bob', 'Brown', 'Germany', 'Berlin', 800),
    ('Michael', 'Williams', 'Ukraine', 'Lviv', 600),
    ('Patricia', 'Jones', 'Ukraine', 'Kyiv', 800),
    ('Linda', 'Miller', 'United Kingdom', 'Liverpool', 900),
    ('David', 'Davis', 'Australia', 'Adelaide', 800),
    ('Sarah', 'Wilson', 'USA', 'Los Angeles', 1000),
    ('James', 'Anderson', 'Germany', 'Munich', 1100),
    ('Emily', 'Thomas', 'United Kingdom', 'London', 900),
    ('Daniel', 'Jackson', 'Ukraine', 'Kyiv', 1000),
    ('Matthew', 'White', 'United Kingdom', 'Liverpool', 700),
    ('Laura', 'Harris', 'Germany', 'Berlin', 1200),
    ('Karen', 'Martin', 'Australia', 'Adelaide', 1000),
    ('Charles', 'Thompson', 'Ukraine', 'Lviv', 1000),
    ('Jessica', 'Garcia', 'USA', 'Texas', 700),
    ('Christopher', 'Martinez', 'Germany', 'Hamburg', 600),
    ('Amanda', 'Robinson', 'Australia', 'Darwin', 900),
    ('George', 'Clark', 'Ukraine', 'Odessa', 1000),
    ('Melissa', 'Rodriguez', 'United Kingdom', 'Liverpool', 1400),
    ('Anthony', 'Lewis', 'Germany', 'Munich', 1000),
    ('Deborah', 'Lee', 'Australia', 'Darwin', 700),
    ('Andrew', 'Walker', 'Ukraine', 'Odessa', 500),
    ('Elizabeth', 'Hall', 'USA', 'Texas', 700),
    ('Richard', 'Allen', 'Germany', 'Hamburg', 1000),
    ('Susan', 'Young', 'United Kingdom', 'London', 1200),
    ('Joseph', 'King', 'Ukraine', 'Lviv', 800),
    ('Barbara', 'Scott', 'USA', 'Los Angeles', 1000),
    ('Emily', 'Thomas', 'United Kingdom', 'London', 1200),;