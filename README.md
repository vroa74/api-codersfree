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


###  capitulo 18. Model Binding


### Capitulo 19. Validaciones

     public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string|max:1000',
            'user_id' => 'required|exists:users,id',
        ]);


        $task = Task::create($request->all());
        return response()->json($task, 201);




###  Capitulo 20. Form Request

    php artisan make:request StoreTaskRequest  
    php artisan make:request UpdateTaskRequest

este metodo viene por defal con false hay que cambiarlo a true para que corra bien

    public function authorize(): bool
    {
        return true;
    }



### Capitulo 21. Aplicar paginación

    public function index()
    {
    $tasks = Task::query();
    
            if (request('perPage')){
                $tasks = $tasks->paginate(request('perPage'));
            } else{
                $tasks = $tasks->get();
            }
            return response()->json([$tasks]);
        }

###  Capitulo 22. Aplicar filtros

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
                }
            }
        }


###  Capitulo 23. Aplicar selects


        if (request('select')) {
            $select = request('select');
            $select = str_replace(' ', '', $select); // Eliminar espacios en blanco            
            $selectArray = explode(',', $select); //separa todos los elemento sepárados por comas            
            $tasks->select($selectArray); // Aplicar selección de campos
        }

### 24. Ordenar registros

if (request('sort')) {
$sortFields = explode(',', request('sort'));    
foreach ($sortFields as $sortField){
$direction = 'asc'; // Valor por defecto
$sortField = str_replace(' ', '', $sortField); // Eliminar espacios en blanco                
if (substr($sortField, 0,1) === '-') {
$direction = 'desc'; // Cambiar a descendente si el primer carácter es '-'
$sortField =(substr($sortField , 1)); // Eliminar el primer carácter '-'
}
$tasks->orderBy($sortField, $direction); // Ordenar por el campo y la dirección
}
} // fin de sort

25. Incluir relaciones

        if (request('include')) {
            $include = str_replace(' ', '', request('include')); // Eliminar espacios en blanco
            $includesArray = explode(',', $include); // Separar por comas
            $tasks = $tasks->with($includesArray); // Aplicar relaciones
        }









































































