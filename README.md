# 📂 Laboratorio: Programación Orientada a Objetos en PHP

---

## 📸 Evidencia de Ejecución

### 1. Insertar Registros (Imágenes)
*Vista de ejecución de la inserción de datos en la entidad Estudiante y Docente:*
!<img width="477" height="517" alt="Imagen1" src="https://github.com/user-attachments/assets/067fcf39-ab6d-4e1d-843e-2b1456476af8" />


---

### 2. Evidencia de Acciones de Modificar (Imágenes)
*Demostración de la sobrescritura y modificación de atributos mediante setters:*
!<img width="182" height="87" alt="Imagen2" src="https://github.com/user-attachments/assets/f1f9895e-e7ab-4857-beb9-4c66e4f65858" />

---

### 3. Evidencia de Acciones de Eliminar (Imágenes)
*Prueba de eliminación de instancias o restricción de herencia (`final` class):*
!<img width="1117" height="40" alt="Imagen3" src="https://github.com/user-attachments/assets/82a30c91-709e-4320-a102-c64619aa77c4" />


---

## ⚙️ Controles Utilizados

* **Herencia y Polimorfismo:** Implementación de la palabra reservada `extends` para transferir atributos y métodos de clases base a clases hijas (`Persona` -> `Estudiante`/`Docente` y `Coche` -> `CocheDeLujo`).
* **Encapsulamiento y Modificadores de Acceso:** Uso de `protected` para restringir el acceso a variables internas permitiendo su lectura solo mediante métodos Getters y Setters.
* **Control de Herencia (`final`):** Uso de la palabra reservada `final` para bloquear la extensión no autorizada de ciertas clases.
* **Constructor y Promoción de Propiedades:** Definición de constructores (`__construct`) y uso de `parent::__construct()` para inicializar objetos derivados.
* **Late Static Binding:** Implementación de `static::` para la resolución de métodos estáticos heredados en tiempo de ejecución.

---

## 📝 Detalles del Laboratorio

Este laboratorio práctico aborda los pilares esenciales de la Programación Orientada a Objetos en PHP mediante la resolución de 5 ejercicios técnicos:

1. **`Problema1.php`:** Análisis de Late Static Binding (`static::`) y constantes de clase `__CLASS__`.
2. **`Problema2.php`:** Extensión de clases (`CocheDeLujo` a partir de `Coche`) y sobrescritura del método `printCaracteristicas()`.
3. **`Problema3.php`:** Restricción de clases base mediante el operador `final`.
4. **`Problema4.php`:** Encapsulamiento y cálculo geométrico de área y perímetro de un círculo utilizando la constante `M_PI` y formateo de decimales con `number_format()`.
5. **`Problema5.php`:** Implementación de la jerarquía académica con la clase base `Persona` y las subclases `Estudiante` y `Docente`.

---

## 🛠️ Procesos de Instalación

1. Descargar o clonar este repositorio dentro del directorio web del servidor local (`wamp64/www/` o `htdocs/`).
2. Abrir la consola de servicios del servidor de desarrollo local (WampServer / XAMPP).
3. Iniciar el servicio del servidor web **Apache**.
4. Acceder mediante el navegador web a la dirección: `http://localhost/nombre-de-tu-carpeta/`

---

## 🚀 Tecnologías y Versiones

* **Lenguaje:** PHP 8.x
* **Servidor Web:** Apache 2.4.x
* **Entorno de Desarrollo Local:** WampServer 3.x
* **Control de Versiones:** Git & GitHub

---

## 👩‍💻 Detalles del Autor, Fecha y Referencias

* **Autor:** Nohelis Castro
* **Cédula / ID:** 8-1048-1011
* **Materia:** Herramientas de la Programación Aplicada III (.Net)
* **Carrera:** Licenciatura en Ciberseguridad
* **Institución:** Universidad Tecnológica de Panamá (UTP) - FISC
* **Fecha:** 8 de octubre de 2026

### 📚 Referencias
1. Manual Oficial de PHP: *Programación Orientada a Objetos (POO)* — [php.net/manual/es/language.oop5.php](https://www.php.net/manual/es/language.oop5.php)
2. Documentación de WampServer — [wampserver.com](https://www.wampserver.com/)
