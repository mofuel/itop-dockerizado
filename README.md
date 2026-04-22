# iTop Dockerizado

Este proyecto ejecuta iTop en un entorno dockerizado con base de datos MySQL separada.

---

## Requisitos

- Docker Desktop instalado
- Docker Compose habilitado

---

## 1. Clonar el repositorio

```bash
git clone https://github.com/tuusuario/itop-docker.git
cd itop-docker
```

---

## 2. Levantar el sistema

```bash
docker compose up -d --build
```

---

## 3. Acceder a iTop

Abrir en el navegador:

```
http://localhost:8080
```

---

## 4. Restaurar la BD (si no carga automáticamente)

**Windows (PowerShell):**
```powershell
Get-Content backup/itop.sql | docker exec -i itop-db mysql -u itop -pitop itop
```

**Linux/Mac:**
```bash
docker exec -i itop-db mysql -u itop -pitop itop < backup/itop.sql
```

---

## 5. Reiniciar contenedores

```bash
docker compose down
docker compose up -d --build
```
