CREATE DATABASE todolist;
USE todolist;

CREATE TABLE tareas (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        titulo VARCHAR(255) NOT NULL,
                        descripcion TEXT,
                        completada BOOLEAN DEFAULT 0
);

INSERT INTO tareas (titulo, descripcion, completada) VALUES
                                                         ('Comprar pan', 'Ir a la panadería a comprar pan', 0),
                                                         ('Estudiar PHP', 'Repasar MVC y Singleton', 0);
