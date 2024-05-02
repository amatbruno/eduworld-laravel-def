<?php

namespace App\Models;

use Filament\Tables\Columns\Layout\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    const ROLE_ADMIN = 'ADMIN';
    const ROLE_TEACHER = 'TEACHER';
    const ROLE_STUDENT = 'STUDENT';

    const ROLE_DEFAULT = self::ROLE_STUDENT;

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_TEACHER => 'Teacher',
        self::ROLE_STUDENT => 'Student',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->can('view-admin', User::class);
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isTeacher()
    {
        return $this->role === self::ROLE_TEACHER;
    }

    public function isStudent()
    {
        return $this->role === self::ROLE_STUDENT;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }
}
