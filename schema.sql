CREATE TABLE roles(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50)
)

-- CREATE TABLE permissions(
--     id INT PRIMARY KEY,
--     action_name VARCHAR(50) UNIQUE NOT NULL,
--     role_id INT NOT NULL,
--     FOREIGN KEY (role_id) REFERENCES roles(id)
-- )

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_role INT NOT DEFAULT 1,
    FOREIGN KEY (user_role) REFERENCES roles(id)
)