<?php

namespace App\Entity;

use App\Repository\ProductVersionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductVersionsRepository::class)
 */
class ProductVersions
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractInvoiceCycle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $contractInvoiceCycleInterval;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractInvoiceCycleIntervalType;

    /**
     * @ORM\Column(type="integer")
     */
    private $contractinitialDuration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractinitialDurationType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractExtensiontime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractExtensiontimeType;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $contractCancellationTimePeriod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractCancellationTimePeriodType;

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

    public function getContractInvoiceCycle(): ?string
    {
        return $this->contractInvoiceCycle;
    }

    public function setContractInvoiceCycle(?string $contractInvoiceCycle): self
    {
        $this->contractInvoiceCycle = $contractInvoiceCycle;

        return $this;
    }

    public function getContractInvoiceCycleInterval(): ?int
    {
        return $this->contractInvoiceCycleInterval;
    }

    public function setContractInvoiceCycleInterval(?int $contractInvoiceCycleInterval): self
    {
        $this->contractInvoiceCycleInterval = $contractInvoiceCycleInterval;

        return $this;
    }

    public function getContractInvoiceCycleIntervalType(): ?string
    {
        return $this->contractInvoiceCycleIntervalType;
    }

    public function setContractInvoiceCycleIntervalType(?string $contractInvoiceCycleIntervalType): self
    {
        $this->contractInvoiceCycleIntervalType = $contractInvoiceCycleIntervalType;

        return $this;
    }

    public function getContractinitialDuration(): ?int
    {
        return $this->contractinitialDuration;
    }

    public function setContractinitialDuration(int $contractinitialDuration): self
    {
        $this->contractinitialDuration = $contractinitialDuration;

        return $this;
    }

    public function getContractinitialDurationType(): ?string
    {
        return $this->contractinitialDurationType;
    }

    public function setContractinitialDurationType(?string $contractinitialDurationType): self
    {
        $this->contractinitialDurationType = $contractinitialDurationType;

        return $this;
    }

    public function getContractExtensiontime(): ?string
    {
        return $this->contractExtensiontime;
    }

    public function setContractExtensiontime(?string $contractExtensiontime): self
    {
        $this->contractExtensiontime = $contractExtensiontime;

        return $this;
    }

    public function getContractExtensiontimeType(): ?string
    {
        return $this->contractExtensiontimeType;
    }

    public function setContractExtensiontimeType(?string $contractExtensiontimeType): self
    {
        $this->contractExtensiontimeType = $contractExtensiontimeType;

        return $this;
    }

    public function getContractCancellationTimePeriod(): ?int
    {
        return $this->contractCancellationTimePeriod;
    }

    public function setContractCancellationTimePeriod(?int $contractCancellationTimePeriod): self
    {
        $this->contractCancellationTimePeriod = $contractCancellationTimePeriod;

        return $this;
    }

    public function getContractCancellationTimePeriodType(): ?string
    {
        return $this->contractCancellationTimePeriodType;
    }

    public function setContractCancellationTimePeriodType(?string $contractCancellationTimePeriodType): self
    {
        $this->contractCancellationTimePeriodType = $contractCancellationTimePeriodType;

        return $this;
    }
}
