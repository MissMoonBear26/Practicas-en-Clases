<?php

class Persona
{
    public function __construct(
        protected string $nombre,
        protected string $apellido,
        protected string $fechaNacimiento
    ) {}

    public function getNombre(): string { return $this->nombre; }
    public function getApellido(): string { return $this->apellido; }
    public function getFechaNacimiento(): string { return $this->fechaNacimiento; }
}

class Estudiante extends Persona
{
    public function __construct(
        protected string $matricula,
        protected float $indiceAcademico,
        protected int $cohorte,
        protected int $estadoAcademico,
        protected int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
    }

    public function getMatricula(): string { return $this->matricula; }
    public function getIndiceAcademico(): float { return $this->indiceAcademico; }
    public function getCohorte(): int { return $this->cohorte; }
    public function getEstadoAcademico(): int { return $this->estadoAcademico; }
    public function getModalidadEstudio(): int { return $this->modalidadEstudio; }
}

class Docente extends Persona
{
    public function __construct(
        protected string $codigoDocente,
        protected string $departamento,
        protected string $categoria,
        protected string $maximoTitulo,
        protected string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
    }

    public function getCodigoDocente(): string { return $this->codigoDocente; }
    public function getDepartamento(): string { return $this->departamento; }
    public function getCategoria(): string { return $this->categoria; }
    public function getMaximoTitulo(): string { return $this->maximoTitulo; }
    public function getTipoContratacion(): string { return $this->tipoContratacion; }
}

// Pruebas

$estudiante = new Estudiante("8-988-123", 3.5, 2023, 1, 1, "Juan", "Pérez", "2000-05-15");

echo "<h2 style='color: pink;'>DATOS DEL ESTUDIANTE</h2>";
echo "Nombre: " . $estudiante->getNombre() . "<br>";
echo "Apellido: " . $estudiante->getApellido() . "<br>";
echo "Fecha de nacimiento: " . $estudiante->getFechaNacimiento() . "<br>";
echo "Matrícula: " . $estudiante->getMatricula() . "<br>";
echo "Índice académico: " . $estudiante->getIndiceAcademico() . "<br>";
echo "Estado académico: " . $estudiante->getEstadoAcademico() . "<br>";
echo "Modalidad de estudio: " . $estudiante->getModalidadEstudio() . "<br><br>";

$docente = new Docente("D-0456", "Sistemas", "Titular", "Magíster", "Tiempo Completo", "María", "González", "1985-03-22");

echo "<h2 style='color: pink;'>DATOS DEL DOCENTE</h2>";
echo "Nombre: " . $docente->getNombre() . "<br>";
echo "Apellido: " . $docente->getApellido() . "<br>";
echo "Fecha de nacimiento: " . $docente->getFechaNacimiento() . "<br>";
echo "Código docente: " . $docente->getCodigoDocente() . "<br>";
echo "Departamento: " . $docente->getDepartamento() . "<br>";
echo "Categoría: " . $docente->getCategoria() . "<br>";
echo "Máximo título: " . $docente->getMaximoTitulo() . "<br>";
echo "Tipo de contratación: " . $docente->getTipoContratacion() . "<br>";