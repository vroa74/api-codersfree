http://api-codersfree.ask.me/api/task


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

Capitulo  16   http://api-codersfree.ask.me/api/task

    16. Actualizar registro
      para actualizar el valor de un campo dentro del registro el valor se encia por el cuerpo (Body) dentro de de este tipo usaremos x-www-www-form ya que no acepta form-data


    $task = task::find($task);
        $task->update($request->all());
        return $task;

      para poder usar el form-data para actualizar registro es necesario poner dentro de los de los valores una lilea la cual es  

      _method     PUT

    x-www-www-form  no puede anviar variable de textos y archvios por eso mismo es necesario usar form-data




Capitulo  17
17. Eliminar registro

        $task = task::find($task);
        $task->delete();
        return response()->json(null, 204);



Capitulo  018

18. Model Binding

 que es el  Model Binding en laravel

 El Model Binding (o enlace de modelo) es una característica de Laravel que convierte automáticamente un parámetro de ruta en una instancia del modelo correspondiente.


    sin Model Binding

public function show( $task) //esta implementado el model binding
    {
        $task = task::find($task);
        return response()->json($task);

    }

    con Model Binding

    public function show(task $task) //esta implementado el model binding
    {
        return response()->json($task);

    }





Capitulo  019

19. Validaciones

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
        ]);

        $task = task::create($request->all());
        return response()->json($task, 201);




Capitulo  020
20. Form Request

php artisan make:request StoreTaskRequest

App\http\Request

 public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
        ];
    }


Capitulo  021
21. Aplicar paginación

para retornar paginado hay que hacer esto:

http://api-codersfree.ask.me/api/task?perPage=10

      nota el nombre de la variable que se pone en el parametro es la misma que se recibe en 
      return request('perPage');

la paginacion queda :
      $tasks = task::query();
        
        //1-.primera trabajo con el listado de registros
        if (request('perPage')){
            $tasks = $tasks->paginate(request('perPage'));
        } else{
            $tasks = $tasks->get();
        }
        return response()->json($tasks);





http://api-codersfree.ask.me/api/task


Capitulo  022
    22. Aplicar filtros
    
            //*2-. trabajo con los filtros
        if (request('filters')) {
            $filters = request('filters');
            foreach ($filters as $field => $conditions) {
                foreach ($conditions as $operator => $value) {
                    
                    if (in_array($operator, ['=', '!=', '>', '<', '>=', '<='])) {
                        $tasks->where($field, $operator, $value); // Aplicar cada filtro
                    }
                    if (in_array($operator, ['like', 'not like'])) {
                        $tasks->where($field, $operator, '%' . $value . '%'); // Aplicar cada filtro                        
                    }

                } //foreach ($conditions as $operator => $value) 
            }  //foreach ($filters as $field => $conditions) {
        }   //if (request('filters')) {



Capitulo  023

    23. Aplicar selects
        /* 3-. trabajo con los selects */
        if (request('select')) {
            $select = request('select');
            $select = str_replace(' ', '', $select); // Eliminar espacios en blanco            
            $selectArray = explode(',', $select); //separa todos los elemento sepárados por comas            
            $tasks->select($selectArray); // Aplicar selección de campos
        }




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



