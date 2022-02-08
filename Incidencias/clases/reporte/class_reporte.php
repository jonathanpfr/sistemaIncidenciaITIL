<?php

class reporte {

    private $reporte;

    public function __construct() {
        $this->reporte = array();
    }

    public function equipo_mas_incidencia($fecha_ini,$fecha_fin) {
        $sql = "SELECT tic.*,det.*,eq.nom_equipos,ar.nombre_area,COUNT(nom_equipos)numero from ticket tic,detalle_ticket det,area ar,equipos eq
 where  eq.id_area=ar.id_area  and det.id_equipo=eq.id_equipos and tic.id_ticket=det.id_ticket  and eq.estado=1 and date(fecha_reporte) BETWEEN '$fecha_ini' and '$fecha_fin'
GROUP BY nom_equipos ORDER BY numero desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->reporte[] = $reg;
        }
        return $this->reporte;
    }

    public function area_mas_incidencia($fecha_ini,$fecha_fin) {
        $sql = "SELECT tic.*,det.*,eq.nom_equipos,ar.nombre_area,COUNT(nom_equipos)numero from ticket tic,detalle_ticket det,area ar,equipos eq
 where  eq.id_area=ar.id_area  and det.id_equipo=eq.id_equipos and tic.id_ticket=det.id_ticket  and ar.estado=1 and date(fecha_reporte) BETWEEN '$fecha_ini' and '$fecha_fin'
GROUP BY nombre_area ORDER BY numero desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->reporte[] = $reg;
        }
        return $this->reporte;
    }

    public function incidencia_mas_alta($fecha_ini,$fecha_fin) {
        $sql = "SELECT tic.*,det.*,inci.nom_incidencia,COUNT(inci.nom_incidencia)numero from ticket tic,detalle_ticket det,area ar,equipos eq,incidencia inci
 where  eq.id_area=ar.id_area  and det.id_equipo=eq.id_equipos 
AND inci.id_incidencia=det.id_incidencia
and tic.id_ticket=det.id_ticket  and inci.estado=1 
and date(fecha_reporte) BETWEEN '$fecha_ini' and '$fecha_fin'
	 GROUP BY nom_incidencia ORDER BY numero desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->reporte[] = $reg;
        }
        return $this->reporte;
    }

    public function trabajador_mas_incidencia($fecha_ini,$fecha_fin) {
        $sql = "SELECT tic.*,det.*,tra.razon_social,COUNT(tra.razon_social)numero 
from ticket tic,detalle_ticket det,area ar,equipos eq,incidencia inci,trabajador tra
 where  eq.id_area=ar.id_area  and det.id_equipo=eq.id_equipos 
AND inci.id_incidencia=det.id_incidencia
and tra.id_trabajador=tic.id_trabajador
and tic.id_ticket=det.id_ticket  and tra.estado=1 
and date(fecha_reporte) BETWEEN '$fecha_ini' and '$fecha_fin'
	 
GROUP BY razon_social ORDER BY numero desc";
        $res = mysql_query($sql, conexion::con());
        while ($reg = mysql_fetch_assoc($res)) {
            $this->reporte[] = $reg;
        }
        return $this->reporte;
    }

}

?>
