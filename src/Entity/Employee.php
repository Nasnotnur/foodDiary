<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Salary;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=24, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=24, nullable=false)
     */
    private $occupation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalary(): ?int
    {
        return $this->Salary;
    }

    public function setSalary(?int $Salary): self
    {
        $this->Salary = $Salary;

        return $this;
    }

    public function getBonus(): ?int
    {
        return $this->Bonus;
    }

    public function setBonus(?int $Bonus): self
    {
        $this->Bonus = $Bonus;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }
}
