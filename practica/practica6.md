# Ejercicio 6
1. Porque necesitamos un elemento que pueda comunicar las dos redes estando este en esas mismas.
2. Que puede no verse con los demás equipos de su propia red.
3. Añadiendo otro switch conectado al router, ya que este modelo tiene 3 tarjetas de red.
4. Para este caso tendríamos dos soluciones (sin modificar la infraestructura existente):
    - Cambiar la máscara de red para dejarla en 255.255.252.0/22 ya que sin modificar las redes existentes no podríamos usar un /23 por que no concuerdan las IPs.
    - Usar la misma red /24 pero en el router las dos tarjetas de red estarían en la misma red. 
        | **Equipo** | **IP** |
        | ---------- | ------ |
        | Router interfaz 0 | 192.168.1.1/24 |
        | Router interfaz 1 | 192.168.1.2/24 |
        | PC 1 | 192.168.1.11/24 |
        | PC 2 | 192.168.1.12/24 |
        | PC 3 | 192.168.1.13/24 |
        | PC 4 | 192.168.1.21/24 |
        | PC 5 | 192.168.1.22/24 |
        | PC 6 | 192.168.1.23/24 |