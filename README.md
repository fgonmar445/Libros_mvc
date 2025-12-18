# 📚 CRUD de Libros — MVC en PHP

Aplicación web desarrollada en **PHP** siguiendo el patrón **Modelo–Vista–Controlador (MVC)**.  
Permite gestionar un catálogo de libros mediante operaciones CRUD: crear, listar, editar y eliminar.  
Incluye interfaz en **Bootstrap 5** y conexión a base de datos mediante **PDO**.

---

## 🚀 Características

- Arquitectura MVC real  
- CRUD completo de libros  
- Vistas modernas con Bootstrap 5  
- Consultas preparadas (PDO)  
- Sanitización de datos en entradas de usuario  
- Código limpio, modular y fácil de ampliar  

---

## 🗄️ Base de datos

### Tabla `libros`

```sql
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    fecha_publicacion DATE NOT NULL,
    precio DECIMAL(6,2) NOT NULL,
    disponible BOOLEAN DEFAULT TRUE
);

---

## ⚙️ Requisitos
- PHP 7.4 o superior  
- Servidor local (XAMPP, WAMP, Laragon, etc.)  
- MySQL / MariaDB  
- Navegador moderno 