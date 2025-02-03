<style>
    .modal.right {
        position: absolute;
        height: 100vh;
        width: 40%;
        min-width: 400px;
        right: 0;
    }
</style>
<div
    class="modal right"
    id="modal-cart"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" id="closeToCart" class="btn btn-secondary">Cancelar</button>
                <button type="button" id="paymentStep" class="btn btn-primary">Comprar</button>
            </div>
        </div>
    </div>
</div>
