<?php

namespace App\Models;

use App\Core\Database\Model;

class Registration extends Model {
    private int $id;
    private string $email;
    private string $mdp;

    protected array $fillable = ['email', 'mdp'];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getRole(): int
    {
        return $this->role_id;
    }

    public function setRole(int $role_id): void
    {
        $this->id = $role_id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->pswd;
    }

    public function setPassword(string $pswd): void
    {
        $this->pswd = $pswd;
    }
}