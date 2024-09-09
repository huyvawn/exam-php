CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL
);
INSERT INTO contacts (name, phone_number)
VALUES 
('Alice Johnson', '1234567890'),
('Bob Smith', '9876543210'),
('Charlie Brown', '5552345678'),
('David Wilson', '5551234'),
('Eve Adams', '207940958');