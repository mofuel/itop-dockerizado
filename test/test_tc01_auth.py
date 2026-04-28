import requests
import json

BASE_URL = "http://localhost:8080/webservices/rest.php"
USER = "admin"
PASSWORD = "1234"
VERSION = "1.3"


def ejecutar_prueba(nombre_tc, data, esperado_code):
    print("=" * 50)
    print(nombre_tc)
    print("=" * 50)

    try:
        r = requests.post(BASE_URL, data=data, timeout=10)

        print(f"Status HTTP : {r.status_code}")
        print(f"Content-Type: {r.headers.get('Content-Type')}")

        try:
            resp = r.json()
        except requests.exceptions.JSONDecodeError:
            print("Resultado  : FAIL ✗")
            print("Error      : iTop no devolvió JSON")
            print("Respuesta cruda:")
            print(r.text[:500])
            return

        code = resp.get("code")
        mensaje = resp.get("message", "-")
        ok = code == esperado_code

        print(f"Code iTop  : {code}")
        print(f"Mensaje    : {mensaje}")
        print(f"Esperado   : Code {esperado_code}")
        print(f"Resultado  : {'OK ✓' if ok else 'FAIL ✗'}")

    except requests.exceptions.ConnectionError:
        print("Resultado  : FAIL ✗")
        print("Error      : No se pudo conectar con iTop")

    except requests.exceptions.Timeout:
        print("Resultado  : FAIL ✗")
        print("Error      : Timeout de conexión")

    except Exception as e:
        print("Resultado  : FAIL ✗")
        print(f"Error      : {e}")

    print()


def tc01_login_correcto():
    json_data = {
        "operation": "core/get",
        "class": "UserRequest",
        "key": "SELECT UserRequest",
        "output_fields": "id"
    }

    data = {
        "version": VERSION,
        "auth_user": USER,
        "auth_pwd": PASSWORD,
        "json_data": json.dumps(json_data)
    }

    ejecutar_prueba("TC01 - Login con credenciales correctas", data, esperado_code=0)


def tc02_login_incorrecto():
    json_data = {
        "operation": "core/get",
        "class": "UserRequest",
        "key": "SELECT UserRequest",
        "output_fields": "id"
    }

    data = {
        "version": VERSION,
        "auth_user": USER,
        "auth_pwd": "clave_incorrecta",
        "json_data": json.dumps(json_data)
    }

    ejecutar_prueba("TC02 - Login con contraseña incorrecta", data, esperado_code=1)


def tc03_sin_credenciales():
    json_data = {
        "operation": "core/get",
        "class": "UserRequest",
        "key": "SELECT UserRequest",
        "output_fields": "id"
    }

    data = {
        "version": VERSION,
        "json_data": json.dumps(json_data)
    }

    ejecutar_prueba("TC03 - Solicitud sin credenciales", data, esperado_code=1)


def tc04_query_invalida():
    json_data = {
        "operation": "core/get",
        "class": "ClaseQueNoExiste",
        "key": "SELECT ClaseQueNoExiste",
        "output_fields": "id"
    }

    data = {
        "version": VERSION,
        "auth_user": USER,
        "auth_pwd": PASSWORD,
        "json_data": json.dumps(json_data)
    }

    ejecutar_prueba("TC04 - Consulta inválida", data, esperado_code=100)


if __name__ == "__main__":
    tc01_login_correcto()
    tc02_login_incorrecto()
    tc03_sin_credenciales()
    tc04_query_invalida()