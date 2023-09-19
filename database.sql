CREATE DATABASE IF NOT EXISTS todo_list;

USE todo_list;

CREATE TABLE
    IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );

CREATE TABLE
    IF NOT EXISTS tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        task_name VARCHAR(255) NOT NULL,
        completed TINYINT(1) DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );

INSERT INTO
    users (
        username,
        email,
        password
    )
VALUES (
        'user1',
        'user1@example.com',
        'password1'
    ), (
        'user2',
        'user2@example.com',
        'password2'
    );

INSERT INTO
    tasks (
        user_id,
        task_name,
        completed
    )
VALUES (1, 'Buy groceries', 0), (1, 'Finish project', 0), (2, 'Go to the gym', 1), (2, 'Finish Homework', 0);