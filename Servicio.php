<?php

declare(strict_types=1);

class Servicio
{
    private int $idService;
    private string $name;

    public function __construct(int $idService, string $name)
    {
        $this->idService = $idService;
        $this->name = $name;
    }

    public function getIdService(): int
    {
        return $this->idService;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
