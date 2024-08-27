<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 * @property string|null $telefono
 * @property int $numero_canchas
 * @property string|null $imagen
 * @property string $descripcion
 * @property string|null $parqueadero
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo query()
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereNumeroCanchas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereParqueadero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CentroDeportivo whereUpdatedAt($value)
 */
	class CentroDeportivo extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $telefono
 * @property int $precio
 * @property string|null $imagen
 * @property string $descripcion
 * @property int $centro_deportivo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|cancha newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cancha newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cancha query()
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereCentroDeportivoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|cancha whereUpdatedAt($value)
 */
	class cancha extends \Eloquent {}
}

