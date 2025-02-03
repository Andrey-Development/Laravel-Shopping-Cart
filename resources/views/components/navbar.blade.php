<style>
    #viewToCart {
        border-radius: 50%;
        width: 32px;
        height: 32px;
        &:hover {
            border: 1px solid #ccc;
            background: #ccc;
        }
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container justify-content-between">
        <div>
            <a class="navbar-brand" href="@php route('home') @endphp">Laravel Shopping</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <button type="button" id="viewToCart">
            <span class="material-symbols-outlined">shopping_bag</span>
        </button>
    </div>
</nav>
