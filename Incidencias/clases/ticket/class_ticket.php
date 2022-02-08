<?php

class ticket {

    private $ticket;

    public function __construct() {
        $this->ticket = array();
    }

    public function get_ticket() {
        $sql = "SELECT * from ticket";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    //SELECT * from ticket where id_tecnico=1 ORDER BY 3 desc

    public function get_ticket_sin_tec() {
        $sql = "SELECT * from ticket where id_tecnico=1 ORDER BY 3 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_prioridad() {
        $sql = "SELECT * from prioridad";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_ticket_seleccion($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador ORDER BY 5 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_ticket_seleccion_tecnico_espera($id_tecnico) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tra.*,ar.* from ticket t 
    INNER JOIN prioridad p
		INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
		INNER JOIN trabajador tra
		INNER JOIN area ar
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=tra.id_trabajador AND
		tec.id_tecnico=$id_tecnico and t.id_estado_ti=2 AND ar.id_area=tra.area";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_ticket_seleccion_tecnico_atendidos($id_tecnico) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tra.*,ar.* from ticket t 
    INNER JOIN prioridad p
		INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
		INNER JOIN trabajador tra
		INNER JOIN area ar
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=tra.id_trabajador AND
		tec.id_tecnico=$id_tecnico and t.id_estado_ti=1 AND ar.id_area=tra.area";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_ticket_seleccion_tecnico_todos($id_tecnico) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tra.*,ar.* from ticket t 
    INNER JOIN prioridad p
		INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
		INNER JOIN trabajador tra
		INNER JOIN area ar
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=tra.id_trabajador AND
		tec.id_tecnico=$id_tecnico AND ar.id_area=tra.area";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function get_ticket_seleccion_tecnico_observacion($id_tecnico) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tra.*,ar.* from ticket t 
    INNER JOIN prioridad p
		INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
		INNER JOIN trabajador tra
		INNER JOIN area ar
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=tra.id_trabajador AND
		tec.id_tecnico=$id_tecnico and t.id_estado_ti=3 AND ar.id_area=tra.area";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function insertar_ticket($id_trabajador, $id_prioridad, $id_tecnico) {
        $sql = "insert into ticket VALUES(NULL,$id_trabajador,$id_prioridad,2,NOW(),$id_tecnico)";
        $res = mysql_query($sql, conexion::con());
        if ($res) {
            $_POST['id_ticket'] = mysql_insert_id();
        } else {
            echo "error: " . mysql_error(), "</br>";
            echo "codigo_error:" . mysql_errno();
        }
    }

    public function insertar_detalle_ticket($id_ticket, $id_equipos, $id_incidencia, $observacion) {
        $sql = "insert into detalle_ticket VALUES($id_ticket,$id_equipos,$id_incidencia,'$observacion');";
        $res = mysql_query($sql, conexion::con());
    }

    public function seleccion_ticket($id_ticket) {
        $sql = "SELECT tra.*,t.*,dt.*,p.*,e.*,inci.nom_incidencia,equ.*,ar.nombre_area,tec.razon_social as nombre_tecnico from ticket t 
    INNER JOIN prioridad p on t.id_prioridad=p.id_prioridad
    INNER JOIN estado_ti e on  t.id_estado_ti=e.id_estado_ti
		INNER JOIN detalle_ticket dt on dt.id_ticket=t.id_ticket
		INNER JOIN incidencia inci on dt.id_incidencia=inci.id_incidencia
		inner JOIN trabajador tra on tra.id_trabajador=t.id_trabajador
		inner JOIN equipos equ on equ.id_equipos=dt.id_equipo
		inner JOIN area ar on ar.id_area=tra.area
		inner JOIN tecnico tec on tec.id_tecnico=t.id_tecnico

                WHERE 	t.id_ticket=$id_ticket ORDER BY 1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }

    public function ticket_cambio_est_observado($id_ticket) {
        $sql = "UPDATE ticket SET id_estado_ti=3 where id_ticket=$id_ticket";
        $res = mysql_query($sql, conexion::con());
    }

    public function ticket_cambio_est_atendido($id_ticket) {
        $sql = "UPDATE ticket SET id_estado_ti=1 where id_ticket=$id_ticket";
        $res = mysql_query($sql, conexion::con());
    }

    //UPDATE ticket set id_tecnico=3 where id_ticket=37
    public function ticket_cambio_estado_tec($id_ticket, $id_tecnico) {
        $sql = "UPDATE ticket set id_tecnico=$id_tecnico where id_ticket=$id_ticket";
        $res = mysql_query($sql, conexion::con());
    }

    public function verificar_espera_ticket($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador and not t.id_estado_ti=1";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }
    //************************
    public function get_ticket_antiguo_trabajador($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador and  t.id_estado_ti=1 ORDER BY 5 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }



 public function get_ticket_seleccion_actual_trabajador($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador and not t.id_estado_ti=1 ORDER BY 5 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }
    
     public function get_ticket_validacion_trabajador($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador and  t.id_estado_ti=3 ORDER BY 5 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }
    
     public function get_ticket_validacion_terminar_trabajador($id_trabajador) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tec.* from ticket t 
                INNER JOIN prioridad p
                INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=$id_trabajador and not t.id_estado_ti=1 ORDER BY 5 desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }
//*****************************************************
    
    
     public function get_ticket_tecnico_observacion_validacion($id_tecnico) {
        $sql = "SELECT t.*,p.*,e.*,inci.nom_incidencia,tra.*,ar.* from ticket t 
    INNER JOIN prioridad p
		INNER JOIN estado_ti e
		INNER JOIN detalle_ticket dt
		INNER JOIN incidencia inci
		INNER JOIN tecnico tec
		INNER JOIN trabajador tra
		INNER JOIN area ar
                WHERE t.id_prioridad=p.id_prioridad AND 
                t.id_estado_ti=e.id_estado_ti  AND 
		t.id_tecnico=tec.id_tecnico   AND
		dt.id_ticket=t.id_ticket AND
		dt.id_incidencia=inci.id_incidencia AND
		t.id_trabajador=tra.id_trabajador AND
		tec.id_tecnico=$id_tecnico and t.id_estado_ti=2 AND ar.id_area=tra.area";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->ticket[] = $reg;
        }
        return $this->ticket;
    }
}

?>