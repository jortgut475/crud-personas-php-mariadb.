CREATE DATABASE persona;

USE persona;
CREATE TABLE persona (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    edad INT NOT NULL,
	ciudad TEXT NOT NULL,
	correo TEXT,
    telefono TEXT
);

INSERT INTO persona (nombre,edad,ciudad,correo,telefono) VALUES
('Jose Ortega',34, 'Sevilla', 'jorgu4@gmail.com','652319106'),
('Virtudes Gutierrez', 63, 'Huelva', 'virtu63@gmail.com','722598734'),
('Carlos Vela',43, 'Tarragona', 'carlitosv@gmail.com','678453621'),
('Tamara Falcon', 27, 'Madrid', 'tammyf@gmail.com','6781234567'),
('Ricardo Dionisio',26, 'Lima', 'ricdio@gmail.com','643876543'),
('Joaquin Barrero',37, 'Paris', 'joaqbar@gmail.com','694345678'),
('Jose Fortunati',20,'Almeria', 'fortu@gmail.com','643890123'),
('Daniel Vilal',19, 'Guadalajara', 'danivid@gmail.com','609452318'),
('Adrian Adones', 17,'Barcelona', 'adones@gmail.com','637480132'),
('Lourdes Fernandez', 49, 'Bilbao', 'lourfer@gmail.com','714907362');
