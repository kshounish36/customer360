<?php

namespace App\Entity;

use App\Repository\AccountsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccountsRepository::class)
 */
class Accounts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $clientId;

    /**
     * @ORM\Column(type="float")
     */
    private $balance;

    /**
     * @ORM\Column(type="float")
     */
    private $totalDebitDue;

    /**
     * @ORM\Column(type="datetime")
     */
    private $exportedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getTotalDebitDue(): ?float
    {
        return $this->totalDebitDue;
    }

    public function setTotalDebitDue(float $totalDebitDue): self
    {
        $this->totalDebitDue = $totalDebitDue;

        return $this;
    }

    public function getExportedAt(): ?\DateTimeInterface
    {
        return $this->exportedAt;
    }

    public function setExportedAt(\DateTimeInterface $exportedAt): self
    {
        $this->exportedAt = $exportedAt;

        return $this;
    }
}
