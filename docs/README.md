# Proyecto-Web

URL base: `api/v1.0/`

## Usuarios

### GET /user/

Devuelve un listado con todos los usuarios

#### Respuestas

- 200 OK

```json5
[
  {
    "id": 2,
    "nombre": "user",
    "rol": "usuario",
    "fotoPerfil": "user.png",
    "correo": "francisco@gmail.com",
    "fechaAlta": "2021-04-27",
    "telefono": "+34 654 81 05 36",
    "Apodo": "Francisco",
    "Direccion": "Calle de la Rosa 4"
  },
  {
    //...
  }
]
```

### GET /user/{id}

Devuelve los datos del vendedor con id ``{id}``

#### Parámetros

###### URL

- id* - number - Identificador del usuario

#### Respuestas

- 200 OK

```json5
[
  {
    "id": 2,
    "nombre": "user",
    "rol": "usuario",
    "fotoPerfil": "user.png",
    "correo": "francisco@gmail.com",
    "fechaAlta": "2021-04-27",
    "telefono": "+34 654 81 05 36",
    "Apodo": "Francisco",
    "Direccion": "Calle de la Rosa 4"
  }
]
```

- 404 No existe el vendedor

### POST /user/

Crea un nuevo usuario

#### Parámetros

###### FormData

- nombre`*` - `string` - Nombre de usuario del usuario
- contrasenya`*` - `string` - Clave de acceso a la cuenta de usuario
- correo - `string` - Correo del usuario
- rol - `string` - Rol del usuario
- Apodo - `string` - Nombre de pila del usuario
- fotoPerfil - `string` - Foto de perfil del usuario
- telefono - `string` - Numero de contacto del usuario
- Direccion - `string` - Direccion del usuario

#### Respuestas

- 200 OK


- 422 Entidad no procesable

### PUT /user/{id}
Actualiza el usuario con id `{id}`

#### Parámetros
###### Path
- `{id}` - `int` - ID del usuario
###### Body
````json
{
  "nombre": "user",
  "contrasenya": "1234",
  "rol": "usuario",
  "fotoPerfil": "user.png",
  "correo": "francisco@gmail.com",
  "fechaAlta": "2021-04-27",
  "telefono": "+34 654 81 05 36",
  "Apodo": "Francisco",
  "Direccion": "Calle de la Rosa 4"
}

````