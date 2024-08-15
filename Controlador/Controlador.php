<?php

require_once '../Configuracion/configuracion_constantes.php';
require_once '../Configuracion/Conexion.php';
require_once 'FuncionesControladorEmpresa.php';

class Controlador
{

    public function verPagina($ruta)
    {
        require_once $ruta;
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "modulos") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/index.php');
}


//FUNCIONES CRUD (TABLAS)
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_areas") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->obtener_areas_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_roles") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->obtener_roles_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_empleados") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->obtener_empleados_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_empleado_rol") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->obtener_empleado_rol_c();
}


//VISUALIZAR VISTAS CRUD (INSERTAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "areas_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/areas/areas_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "roles_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/roles/roles_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "empleados_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/empleados/empleados_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "empleado_rol_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/empleado_rol/empleado_rol_insertar.php');
}


//VISUALIZAR VISTAS CRUD (CONSULTAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "areas_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->consultar_areas_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "roles_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->consultar_roles_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "empleados_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->consultar_empleados_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "empleado_rol_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->consultar_empleado_rol_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}


//VISUALIZAR VISTAS CRUD (ACTUALIZAR)
// if (isset($_GET["accion"]) && $_GET["accion"] == "areas_actualizar") {
//     if (isset($_GET['id']) && $_GET['id'] != '') {
//         $id = $_GET['id'];
//         $controlador = new FuncionesControladorEmpresa();
//         $controlador->actualizar_areas_id_c($id);
//     } else {
//         echo 'ERROR AL ACTUALIZAR';
//     }
// }
// if (isset($_GET["accion"]) && $_GET["accion"] == "roles_actualizar") {
//     if (isset($_GET['id']) && $_GET['id'] != '') {
//         $id = $_GET['id'];
//         $controlador = new FuncionesControladorEmpresa();
//         $controlador->actualizar_roles_id_c($id);
//     } else {
//         echo 'ERROR AL ACTUALIZAR';
//     }
// }
// if (isset($_GET["accion"]) && $_GET["accion"] == "empleados_actualizar") {
//     if (isset($_GET['id']) && $_GET['id'] != '') {
//         $id = $_GET['id'];
//         $controlador = new FuncionesControladorEmpresa();
//         $controlador->actualizar_empleados_id_c($id);
//     } else {
//         echo 'ERROR AL ACTUALIZAR';
//     }
// }
// if (isset($_GET["accion"]) && $_GET["accion"] == "empleado_rol_actualizar") {
//     if (isset($_GET['id']) && $_GET['id'] != '') {
//         $id = $_GET['id'];
//         $controlador = new FuncionesControladorEmpresa();
//         $controlador->actualizar_empleado_rol_id_c($id);
//     } else {
//         echo 'ERROR AL ACTUALIZAR';
//     }
// }


//VISUALIZAR VISTAS CRUD (ELIMINAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "areas_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->eliminar_areas_id_c($id);
    } else {
        echo 'ERROR AL ELIMINAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "roles_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->eliminar_roles_id_c($id);
    } else {
        echo 'ERROR AL ELIMINAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "empleados_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControladorEmpresa();
        $controlador->eliminar_empleados_id_c($id);
    } else {
        echo 'ERROR AL ELIMINAR';
    }
}
// if (isset($_GET["accion"]) && $_GET["accion"] == "empleado_rol_eliminar") {
//     if (isset($_GET['id']) && $_GET['id'] != '') {
//         $id = $_GET['id'];
//         $controlador = new FuncionesControladorEmpresa();
//         $controlador->eliminar_empleado_rol_id_c($id);
//     } else {
//         echo 'ERROR AL ELIMINAR';
//     }
// }



//FUNCIONES CRUD (INSERTAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_areas") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->insertar_areas_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['asignatura'], $_POST['tipoactividad']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_roles") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->insertar_roles_c($_POST['codigo'], $_POST['identificacion']);
}
// if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_empleados") {
//     $controlador = new FuncionesControladorEmpresa();
//     $controlador->insertar_empleados_c($_POST['codigo'], $_POST['acudiente'], $_POST['estudiante']);
// }
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_empleado_rol") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->insertar_empleado_rol_c($_POST['codigo'], $_POST['tipo'], $_POST['observacion'], $_POST['observador']);
}


//FUNCIONES CRUD (ACTUALIZAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_areas") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->actualizar_areas_id_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['asignatura'], $_POST['tipoactividad']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_roles") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->actualizar_roles_id_c($_POST['codigo'], $_POST['identificacion']);
}
// if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_empleados") {
//     $controlador = new FuncionesControladorEmpresa();
//     $controlador->actualizar_empleados_id_c($_POST['codigo'], $_POST['acudiente'], $_POST['estudiante']);
// }
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_empleado_rol") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->actualizar_empleado_rol_id_c($_POST['codigo'], $_POST['tipo'], $_POST['observacion'], $_POST['observador']);
}


//FUNCIONES CRUD (ELIMINAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_areas") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->eliminar_areas_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_roles") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->eliminar_roles_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_empleados") {
    $controlador = new FuncionesControladorEmpresa();
    $controlador->eliminar_empleados_id_c($_POST['id']);
}
// if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_empleado_rol") {
//     $controlador = new FuncionesControladorEmpresa();
//     $controlador->eliminar_empleado_rol_id_c($_POST['id']);
// }
