﻿<?php
// Words and phrases
$lang["View"] = "Ver";
$lang["Day"] = "D&#237;a";
$lang["List"] = "Lista";
$lang["Once"] = "Una vez";
$lang["Daily"] = "Diario";
$lang["Weekly"] = "Semanal";
$lang["Monthly"] = "Mensual";
$lang["Yearly"] = "Anual";
$lang["Monday"] = "Lunes";
$lang["Tuesday"] = "Martes";
$lang["Wednesday"] = "Miercoles";
$lang["Thursday"] = "Jueves";
$lang["Friday"] = "Viernes";
$lang["Saturday"] = "Sábado";
$lang["Sunday"] = "Domingo";
$lang["Other events"] = "Otros eventos";
$lang["Today"] = "Hoy";

$lang["January"] = "Enero";
$lang["February"] = "Febrero";
$lang["March"] = "Marzo";
$lang["April"] = "Abril";
$lang["May"] = "Mayo";
$lang["June"] = "Junio";
$lang["July"] = "Julio";
$lang["August"] = "Agosto";
$lang["September"] = "Septiembre";
$lang["October"] = "Octubre";
$lang["November"] = "Noviembre";
$lang["December"] = "Diciembre";

$lang["Recurrence"] = "Repetición";
$lang["Repeats"] = "Repeticiones";
$lang["Interval"] = "Intervalo";
$lang["Until"] = "Hasta";
$lang["Weekdays"] = "Días de la semana";

// Help
$lang["Content Help"]["General"] = "DEFAULT";
$lang["Content Help"]["Evento"] = "<br/>
    Esta es la <b>Ayuda General del módulo Evento</b><br/>
    <br/>
    El módulo Evento es una forma muy completa de administrar eventos. Puede crear uno, ingresar información
    descriptiva sobre él, asignarle fecha y hora, especificar participantes, crearle recurrencia y el resto de
    propiedades generales de los módulos, como permisos de Acceso, Notificación por email e Historial.<br/>
    <br/>
    La <b>pantalla</b> se divide en 5 secciones:<br/>
    <br/>
    <ol>
        <li><b>Botonera superior derecha:</b> aquí, según los ítems mostrados y los permisos del usuario, se mostrarán
            hasta 3 botones.<br/>
            <ul>
                <li><b>Agregar:</b> lo presiona y un formulario vacío se abre para que cree un nuevo evento.<br/>
                <li><b>Grabar:</b> la grilla puede ser editada sólo cliqueando en los campos que desee cambiar. Luego
                    presiona este botón para grabar los cambios hechos.<br/>
                <li><b>Exportar:</b> exporta a un archivo CSV los resultados y ofrece descargarlo.<br/>
            </ul>
        <li><b>Botonera Lista / Día:</b> hay dos tipos de listados que se activan por medio de estos botones.<br/>
            <ul>
                <li><b>Lista:</b> una grilla con todos los eventos para el usuario logueado.<br/>
                <li><b>Día:</b> una agenda desde las 8:00 hasta las 20:00 hs. donde se muestran todos los eventos de un
                    día determinado.<br/>
            </ul>
            Cuando Día es la vista activa, otros elementos aparecen en esta botonera. Son un <i>campo de fecha</i> para
            elegir la agenda de un día específico, y los botones <i>previo</i>, <i>hoy</i> y <i>siguiente</i>, para
            cambiar los días secuencialmente.<br/>
            <br/>
        <li><b>Grilla / Lista:</b> aquí se muestra la lista de ítems o la agenda de un día determinado, según la vista
            elegida.<br/>
        <br/>
        <li><b>Formulario:</b> cuando un ítem esta por ser creado o se cliquea en uno del listado, un formulario se
            muestra aquí para completar o modificar sus datos.<br/>
        <br/>
        <li><b>Botonera inferior:</b> aquí, según los permisos del usuario, cuando un ítem está siendo creado o
            modificado se muestran los botones <b>Grabar</b> y <b>Borrar</b>.<br/>
    </ol>
    <br/>
    <br/>";

$lang["Content Help"]["Datos Básicos"] = "DEFAULT";
$lang["Content Help"]["Repetición"] = "<br/>
    <b>Solapa Repetición</b><br/>
    <br/>
    Esta solapa permite asignar repetición al evento para que suceda tantas veces como se especifique, con la
    frecuencia y días de la semana definidos.<br/>
    <br/>
    <b>Campos</b><br/>
    <br/>
    <b>Repeticiones</b>: aquí elige cuán seguido quiere que ocurra el evento. <i>Una vez</i> es la
    repetición predeterminada y significa que no habrá repetición. Puede elegir <i>Diario</i>,
    <i>Semanal</i>, <i>Mensual</i> o <i>Anual</i> y el evento se repetirá con dicha frecuencia hasta el día elegido
    en el campo <u>Hasta</u>.<br/>
    <br/>
    <b>Intervalo</b>: especifique aquí el intervalo que quiere para las repeticiones. Ej.: si elige <i>Mensual</i> en
    el campo <u>Repeticiones</u> y <i>2</i> en <u>Intervalo</u>, el evento sucederá cada 2 meses.<br/>
    <br/>
    <b>Hasta</b>: si elige una opción distinta a <i>Una vez</i> en el campo <u>Repeticiones</u>, aquí debe elegir
    cuándo quiere que las repeticiones cesen.<br/>
    <br/>
    <b>Días de la semana</b>: puede elegir qué días de la semana sucederá la repetición del evento.<br/>
    <br/>
    <br/>";

$lang["Content Help"]["Accesos"] = "DEFAULT";
$lang["Content Help"]["Notificación"] = "DEFAULT";
$lang["Content Help"]["Historial"] = "DEFAULT";