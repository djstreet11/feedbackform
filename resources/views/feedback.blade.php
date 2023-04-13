<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container">
    <main>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-6">
                <h4 class="mb-3">Feedback form</h4>
                <form class="needs-validation" novalidate method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-12 mt-1">
                            <label for="fullName" class="form-label">Full name</label>
                            <input type="text" class="form-control" id="fullName"  name="fullName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid full name is required.
                            </div>
                        </div>
                        <div class="col-sm-12 mt-1">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid phone is required.
                            </div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <label for="city" class="form-label">City</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="">Choose...</option>
                                @foreach ($cities as $city)
                                    <option value="{{$city->name}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid city.
                            </div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <label for="text" class="form-label">Text</label>
                            <textarea class="form-control" id="text" name="text" required></textarea>
                            <div class="invalid-feedback">
                                Text is required.
                            </div>
                        </div>
                    </div>
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
                    @if(request()->query('status') == 'ok')
                        <p class="w-100 mt-5 email_ok">Thank you for feedback</p>
                        <script>
                            var timer = setTimeout(function() {
                                window.location='/'
                            }, 5000);
                        </script>
                    @endif
                </form>
            </div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
</body>
</html>
