<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <img src="mpesalogo.svg" width="200px" data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="">


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class=" modal-content ">
                <div class="modal-header bg-danger text-white ">
                    <h5 class="modal-title text-white text-center" id="staticBackdropLabel">Pagamento M-Pesa</h5>
                    <button type="button" class="btn-close bg-white border-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="mpesalogo.svg" width="100px" class="img-fluid rounded-top mx-auto d-block"
                        alt="">
                    <h6 class="text-center">Digite o seu número de Telefone M-Pesa</h6>
                    <form action="{{ route('pagamento') }}" method="post">
                        @csrf
                        <div class="row">

                            <span class="input-group-text" id="addon-wrapping">+258</span>
                            <input type="tel" class="form-control" placeholder="valor" value="1"
                                aria-label="valor" aria-describedby="addon-wrapping" required>
                            <br>
                            <br>
                            <input type="tel" class="form-control" placeholder="numeroTelefone" value="258846474687"
                                aria-label="numeroTelefone" aria-describedby="addon-wrapping" required>
                            <br>
                            <br>

                            <input type="tel" class="form-control" placeholder="referenciaConta" value="11114"
                                aria-label="referenciaConta" aria-describedby="addon-wrapping" required>
                            <br>
                            <br>

                            <input type="tel" class="form-control" value="T12344CC" placeholder="descricao"
                                aria-label="descricao" aria-describedby="addon-wrapping" required>
                        </div>
                </div>
                <div class="d-grid gap-2 container mb-4">
                    <button class="btn btn-primary" type="Submit">PAGAR COM M-PESA</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#btnFetch").click(function() {
                $(this).prop("disabled", true);
                $(this).html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processando Opagamento...`
                );
            });
        });
    </script>

</body>

</html>
