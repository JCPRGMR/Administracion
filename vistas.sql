-- Active: 1709320591459@@127.0.0.1@3306@administracion

-- VISTA DE EMPLEADOS CON USUARIOS Y SUS OMISIONES TOTALES
-- SELECT empleados.*, roles.*, COUNT(omisiones.id_fk_empleado) AS total_omisiones FROM empleados
-- LEFT JOIN usuarios ON usuarios.id_fk_empleado = empleados.id_empleado
-- LEFT JOIN roles ON roles.id_rol = usuarios.id_fk_rol
-- LEFT JOIN omisiones ON omisiones.id_fk_empleado = empleados.id_empleado
-- GROUP BY empleados.id_empleado, roles.id_rol;

-- VISTA DE EMPLEADOS CON USUARIOS
CREATE VIEW vista_empleados_usuarios
AS
SELECT *  FROM vista_empleados
LEFT JOIN usuarios ON usuarios.id_fk_empleado = vista_empleados.id_empleado
LEFT JOIN roles ON roles.id_rol = usuarios.id_fk_rol

