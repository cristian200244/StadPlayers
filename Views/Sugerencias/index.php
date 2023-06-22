<?php
include_once(__DIR__ . "../../../config/rutas.php");

include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once __DIR__ . "../../../Models/EstadisticasModel.php";
?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="imgCon">
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg justify-content-center" style="margin-top: 30%;">
                    <div class="card-header bg-black text-light">
                        <h3 class="text-center font-weight-light fs-1 my-4">Sugerencias</h3>
                    </div>
                    <div class="card-body text-black" style="background-color: #B7C7C7;">
                        <form action="../../Controllers/EstadisticasController.php?c=5" method="POST" onsubmit="return validateForm()">
                            <div class="card d-flex justify-content-center py-3 px-3 fs-3" style="background-color: #009392;">
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="sugerencias" class="text-center">Porfavor dejanos tus sugerencias, con ello mejoraremos dia a dia</label>
                                        <input type="text" name="sugerencias" id="sugerencias" class="rounded w-100">
                                    </div>

                                </div>

                            </div>
                            <div class="col mt-4">
                                <button class="btn btn-danger rounded w-100 p-1" id="submitBtn">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var equipo = document.getElementById('sugerencias').value;

        if (equipo === '') {
            swal("Error", "Por favor, complete todos los campos.", "error");
            return false;
        }

        return true;
    }
</script>



<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>