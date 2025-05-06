# curso de api

## capitulo 7 instalacion del paquete de api

php artisan install:api

### capitulo 9 introduccion a controladores

    cphp artisan make:controller Api/UserController --api
    php artisan make:controller Api/APISimpleController --api

### 11. Introducción a Eloquent

    php artisan make:controller Api/TaskController --api
     php artisan make:migration create_tasks_table
    php artisan make:factory TaskFactory --model=Task

### capitulo 13. Listar registros
 se crea la ruta de tasks
 se trabaja con index de tasks

### 14. Crear registros

    public function store(Request $request)      {
        $task = Task::create( $request->all());
        return response()->json($task, 201);
    }



###  15. Recuperar registro

    public function show(Task $task)     {
        return $task; 
    }
 
### 16. Actualizar registro

    public function update(Request $request,  $task)     {
        $task = Task::find($task);
        $task->update( $request->all());
        return response()->json($task);
    }

### 17. Eliminar registro

    public function destroy($task)     {
        $task = Task::find($task);
        $task->delete();
        return response()->json(null, 204);
    }










