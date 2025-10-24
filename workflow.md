Capitulo 6 

Capitulo 7 
7. Endpoints  -> rutas 

Capitulo 8 
 8. Verbos HTTP

  Listar
  crear
  recuperar
  actializar
  eliminar


Capitulo 9 
9. Introducción a los controladores

php artisan make:controllers Api\UserController --api

Capitulo 10 
  10. Rutas ApiResource
  
  php artisan r:l
  Route::ApiResource('users', UserController::class);



Capitulo 11 
  11. Introducción a Eloquent
  php artisan make:migration create_tasks_table
  php artisan make:model task
  


Capitulo  12
  12. Insertar registros de prueba

  uso de factory

  php artisan make:factory TaskFactory

          return [
            'title' => $this->faker->sentence(6, true),
            'body' => $this->faker->optional()->paragraph(3),
            'earring' => $this->faker->boolean(70),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];




Capitulo 13 

  13. Listar registros

  php artisan make:controllers Api\taskController --api



Capitulo  14
  14. Crear registros
  para en viar la informacion desde postman o insomnia a api se usa form-data
  y en el cuerpo del form data se ponen todas la variable para que el campo pueda ser guardado
  y el controlador  se escribe:

          $task = task::create($request->all());
        return response()->json($task, 201);

        el estado 201 significa que el estado se a realizado con exito.




Capitulo  15
  15. Recuperar registro

  en postman en el encabezado se escribe :

  http://api-codersfree.ask.me/api/task/1526?include=user

  en params 
  
  include           user

  para que la informacion del usuario se refleje se necesita que en el modelo task se agregue la linea : 
  
  protected $with = ['user'];  // Cargar siempre la relación user automáticamente
  esto va despues del los datos : 

    protected $fillable = [
        'title',
        'body',
        'earring',
        'user_id'
    ];

    
    protected $with = ['user'];  // Cargar siempre la relación user automáticamente

Capitulo  16

    16. Actualizar registro

    


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  


Capitulo  



