<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e2e4e7 0%, #b5e1ff 100%);
            font-family: 'Roboto', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .card-form {
            width: 100%;
            max-width: 720px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(23, 42, 69, 0.15);
        }
        .brand {
            font-weight: 700;
            color: #0d6efd;
        }
    </style>
</head>
@csrf
<body>
    <div class="container">
        <div class="card card-form">
            <div class="card-body p-4 p-md-5">
                <div class="row g-4">
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <h2 class="mb-1">Calculadora De Resta</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="/restaSubmit" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="num1" class="form-label">Número 1</label>
                                <input type="number" class="form-control" id="num1" name="num1" placeholder="Ingresa un número" required>
                                <div class="invalid-feedback">Por favor ingresa un número válido.</div>
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Número 2</label>
                                <input type="number" class="form-control" id="num2" name="num2" placeholder="Ingresa otro número" required>
                                <div class="invalid-feedback">Por favor ingresa un número válido.</div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Restar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center text-muted small">Powered by <span class="brand">SenaSoft</span></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Ejemplo de validación de formulario con Bootstrap
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                }, false)
            })
        })()
    </script>
</body>
</html>