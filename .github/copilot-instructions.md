## Instrucciones para agentes AI (Copilot) — api-codersfree

Breve: este repositorio es una API construida sobre Laravel (PHP 8.2, Laravel 12) con controladores en `app/Http/Controllers/Api`, recursos RESTful y autenticación (Sanctum y/o JWT). Las instrucciones abajo ayudan a ser productivo inmediatamente.

- Contexto arquitectural clave:
  - Backend: Laravel en `app/` (Models en `app/Models`, controllers en `app/Http/Controllers/Api`).
  - Rutas públicas/API: `routes/api.php` (contiene `Route::apiResource('users', ...)`, `task`, `Task`, y endpoints de auth). Inspeccionar `AuthController` para flujos de login/refresh/logout/me.
  - Persistencia: migraciones en `database/migrations`, factories en `database/factories`, seeders en `database/seeders`.

- Flujo de datos y convenciones observadas:
  - Controladores tipo API devuelven JSON directamente (ej.: métodos `index`, `store`, `show`, `update`, `destroy`). Ejemplo en README.md muestra uso de `Task::create($request->all())` y respuestas con códigos HTTP 201/204.
  - Use Form Requests cuando ya existen (`app/Http/Requests`) y asegúrese de que `authorize()` retorne `true` (comentado en README).
  - Paginación, filtros, selects, sort e include están controlados por parámetros de query (`perPage`, `filters`, `select`, `sort`, `include`) — respete y reutilice los patrones del README para aplicar filtros en index.

- Comandos y flujos de desarrollo (ejemplos concretos):
  - Instalar dependencias: `composer install` y `npm install`.
  - Desarrollo completo (script composer): `composer dev` — levanta `php artisan serve`, `php artisan queue:listen` y `npm run dev` (usa `npx concurrently`).
  - Ejecutar tests: `composer test` ó `php artisan test` (configuración en `phpunit.xml` usa sqlite in-memory).
  - Migraciones y scaffolding: `php artisan migrate`, `php artisan make:controller Api/TaskController --api`, `php artisan make:request StoreTaskRequest`.

- Integraciones externas y configuración importante:
  - JWT está incluido (`tymon/jwt-auth`) y también `laravel/sanctum` — revisar `config/jwt.php` y `config/sanctum.php` según la autenticación usada.
  - Frontend / assets: `package.json` usa Vite + Tailwind; `npm run dev` para desarrollo de assets, `npm run build` para producción.

- Dónde mirar para cambios no triviales:
  - Rutas y permisos: `routes/api.php` (orden de rutas importa: rutas genéricas con `{id}` están comentadas y colocadas después).
  - Controladores API: `app/Http/Controllers/Api/*` — seguir los patrones de respuesta JSON y manejo de códigos HTTP.
  - Migrations & Factories: `database/migrations/`, `database/factories/` para cambios de esquema y datos de prueba.
  - Tests: `tests/` (Pest), `phpunit.xml` para variables de entorno de testing.

- Pequeño contrato de cambios esperados (inputs/outputs):
  - Inputs: cambios en controladores, requests, migraciones, rutas.
  - Outputs: respuestas JSON, códigos HTTP coherentes (201 al crear, 204 al eliminar, 200 al obtener), logs de queue si aplica.

- Ejemplos rápidos que un agente puede proponer o modificar directamente:
  - Añadir validación en `store()` usando un Form Request (`StoreTaskRequest`) y devolver `response()->json($task, 201)`.
  - Centralizar filtros: mover la lógica de filtrado del README a un trait reusable en `app/Traits/ApiFilters.php` y usarlo en controllers.

- Limitaciones y señales de cuidado:
  - No assumptions sobre autenticación: confirmar si el proyecto usa Sanctum o JWT antes de cambiar middleware.
  - Evitar cambios simultáneos en rutas con nombres duplicados (`task` y `Task`) — unifica nombres si propones refactor.

Si algo está incompleto o quieres que adapte el tono (más breve o más detallado), dime qué prefieres y actualizo este archivo.
