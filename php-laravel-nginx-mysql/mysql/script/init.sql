USE db;

CREATE TABLE IF NOT EXISTS people (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO
    people (username, email)
VALUES
    ('test1', 'test1@example.com'),
    ('test2', 'test2@example.com'),
    ('test3', 'test3@example.com');
