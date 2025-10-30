<?php

namespace Src\Entity;

use Doctrine;

#[ORM\Entity(repositoryClass: "Src\Repository\TareasRepository")]
#[ORM\Table(name: "tareas")]
class Tareas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $titulo;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(type: "datetime")]
    private \DateTime $fecha_creacion;

    #[ORM\Column(type: "boolean")]
    private bool $completada = false;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function getFechaCreacion(): \DateTime
    {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion(\DateTime $fecha): void
    {
        $this->fecha_creacion = $fecha;
    }

    public function isCompletada(): bool
    {
        return $this->completada;
    }

    public function setCompletada(bool $estado): void
    {
        $this->completada = $estado;
    }
}
