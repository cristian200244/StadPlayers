document.addEventListener("DOMContentLoaded", function (event) {
    //código a ejecutar cuando existe la certeza de que el DOM está listo para recibir acciones

    let predeterminadas = document.getElementById('EstadisticasPre');
    let arquero = document.getElementById('EstadArquero')
    let id_posicion = document.getElementById('id_posicion').value;

    if (!document.getElementById("control")) {
    } else {
        if (document.getElementById("control").value == 1) {
            OptNuevasEstadisticas.style.display = "block";
        }
    }

    if (!document.getElementById("controlPre")) {
    } else {
        if (document.getElementById("controlPre").value == 2) {
            OptEstadisticas.style.display = "block";
        } else {


        }
    }


    if (id_posicion != 1) {
        document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
        predeterminadas.style.display = "block";
        arquero.style.display = "none";

        var estadPre = document.getElementById("EstadisticasPre").value;
        if (estadPre == 0) {
            predeterminadas.style.display = "none";
        }
    } else { //Cuando es portero
        document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
        document.getElementById("TituloEstadArquero").textContent = "Estadisticas del Portero";
        predeterminadas.style.display = "block";
        arquero.style.display = "block";
    }

});
