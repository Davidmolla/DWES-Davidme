<?php
namespace AP42\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "AP42\Repository\UserRepository")]
#[ORM\Table(name: "usuarios")]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $name;

    #[ORM\Column(type: "boolean")]
    private bool $status;

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function setName(string $name): void { $this->name = $name; }

    public function isActive(): bool { return $this->status; }
    public function setStatus(bool $status): void { $this->status = $status; }
}
<?php
