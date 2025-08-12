<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        // 'name', // Odstranit, protože sloupec v DB neexistuje
        'role', // Přidáno pro roli uživatele
        'email_verified_at',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }

    public function getFilamentName(): string
    {
    dd(auth()->user()); // <-- PŘIDAT TENTO ŘÁDEK

    // Spojíme jméno a příjmení, ořízneme případné bílé znaky
    $fullName = trim("{$this->first_name} {$this->last_name}");

    // Pokud je výsledné jméno prázdné, vrátíme username.
    // Pokud by i ten byl prázdný, vrátíme 'Uživatel bez jména'.
    return $fullName ?: $this->username ?? 'Uživatel bez jména';
}

    /**
     * Get the user's role.
     */
    public function getRole(): string
    {
        return $this->role ?? 'user'; // Vrátí 'user' pokud role není nastavena
    }

    // Add this accessor to ensure Filament always gets a string for the user's name
    public function getNameAttribute()
    {
        // Adjust as needed if you want to use username or something else
        return trim("{$this->first_name} {$this->last_name}") ?: $this->username ?: 'User';
    }
}

