-- Active: 1718128573843@@127.0.0.1@3306@administracion

-- VISTA DE EMPLEADOS CON USUARIOS Y SUS OMISIONES TOTALES
-- SELECT empleados.*, roles.*, COUNT(omisiones.id_fk_empleado) AS total_omisiones FROM empleados
-- LEFT JOIN usuarios ON usuarios.id_fk_empleado = empleados.id_empleado
-- LEFT JOIN roles ON roles.id_rol = usuarios.id_fk_rol
-- LEFT JOIN omisiones ON omisiones.id_fk_empleado = empleados.id_empleado
-- GROUP BY empleados.id_empleado, roles.id_rol;

-- VISTA DE EMPLEADOS CON USUARIOS
SELECT * FROM empleados
LEFT JOIN usuarios ON usuarios.id_fk_empleado = empleados.id_empleado
LEFT JOIN roles ON roles.id_rol = usuarios.id_fk_rol

