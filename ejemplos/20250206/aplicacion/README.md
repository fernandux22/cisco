# Aplicacion web 
Esta aplicacion se trata de un CRUD para gestionar los pedidos de la empresa

# Pasos para poder utilizarla
- Clonar el repositorio
    ```bash
    git clone https://github.com/andresmendez/yii2-app-basic.git
    ```
- Instalar las dependencias
    ```bash
    composer update
    ```
- Configurar la base de datos
En el archivo `config/db.php` se debe configurar la conexion a la base de datos
```php
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=Ventas',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
```

- Crear la base de datos
Mediante el cliente de MYSQL se debe crear la base de datos `Ventas`. Para ello abrir el script que se encuentra en la carpeta data e importarle


    
