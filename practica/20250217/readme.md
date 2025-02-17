# Ejercicio 1
1. 11000000.10101000.00000001.00000001
2. 00001010.00000000.00000000.00000001
3. 10101100.00010000.11111110.00000011
4. 11000000.00000000.00000010.10000000
5. 00001000.00001000.00001000.00001000
6. 11111111.11111111.11111111.00000000
7. 01111111.00000000.00000000.00000001
8. 11001000.01100100.00110010.00011001
9. 10010110.01001011.00011110.00000101
10. 11011110.10101101.10111110.11101111

# Ejercicio 2
1. A
2. B
3. C
4. A
5. B
6. C
7. A (loopback)
8. C
9. B
10. A

# Ejercicio 3
bits red: 24 \
bits host: 8 

# Ejercicio 4
bits red: 20 \
bits host: 12 \
mascara: 255.255.240.0

# Ejercicio 5
hosts: 4094 \
red: 172.16.32.0 \
broadcast: 172.16.47.255

# Ejercicio 6
subred: 192.168.100.64 \
broadcast: 192.168.100.127 \
rango ips utilizable: 192.168.100.65 - 192.168.100.126 \
hosts: 62

# Ejercicio 7
bits red: 30 \
bits host: 2 \
hosts: 2 \
subred: 203.0.113.188 \
broadcast: 203.0.113.191 \
uso de este tipo de mascara: Enlaces punto a punto (WAN) entre routers

# Ejercicio 8
1. 4 subredes
2. 62 equipos por subred

# Ejercicio 9
1. /26
2. 8 bits
3. 65534 equipos por subred

# Ejercicio 10
1. 10 bits
2. 255.255.255.192/26
3. 62 equipos por subred

# Ejercicio 11
1. 255.255.255.248/29
2. 6 equipos por subred
3. 192.168.10.0 y 192.168.10.7

# Ejercicio 12
1. 255.255.255.224/27
2. 8 subredes
3. 203.0.113.64 y 203.0.113.95

# Ejercicio 13
1. red 192.168.50.0, subredes 4
    - mascara: 255.255.255.192/26
    - hosts: 62
    - primera ip util: 192.168.0.1
    - ultima ip util: 192.168.0.62
    - broadcast: 192.168.0.63
2. red 172.16.0.0, subredes 8
    - mascara: 255.255.255.224/27
    - hosts: 30
    - primera ip util: 172.16.0.1
    - ultima ip util: 172.16.0.30
    - broadcast: 172.16.0.31

# Ejercicio 14
1. 10.0.3.2
    - binario: 00001010.00000000.00000011.00000010
    - clase de red: A
    - mascara: 255.0.0.0/8
2. 128.45.7.1
    - binario: 10000000.00101101.00000111.00000001
    - clase de red: B
    - mascara: 255.255.0.0/16
3. 192.200.5.4
    - binario: 11000000.11001000.00000101.00000100
    - clase de red: C
    - mascara: 255.255.255.0/24
4. 151.23.32.50
    - binario: 10010111.00010111.00100000.00110010
    - clase de red: B
    - mascara: 255.255.0.0/16
5. 47.50.3.2
    - binario: 00101111.00110010.00000011.00000010
    - clase de red: A
    - mascara: 255.0.0.0/8
6. 100.90.80.70
    - binario: 01100100.01011010.01010000.01000110
    - clase de red: A
    - mascara: 255.0.0.0/8
7. 124.4.6.1
    - binario: 01111100.00000100.00000110.00000001
    - clase de red: A
    - mascara: 255.0.0.0/8

# Ejercicio 15
red 192.168.30.0, 4 redes
| numero de red | direccion de subred | primer host | ultimo host |
| ------------- | ------------------ | ----------- | ----------- |
| 0             | 192.168.30.0        | 192.168.30.1 | 192.168.30.62 |
| 1             | 192.168.30.64       | 192.168.30.65 | 192.168.30.126 |
| 2             | 192.168.30.128      | 192.168.30.129 | 192.168.30.190 |
| 3             | 192.168.30.192      | 192.168.30.193 | 192.168.30.254 |