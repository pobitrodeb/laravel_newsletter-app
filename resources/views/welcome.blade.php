<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mailchimp api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <section class="py-5">
        <div class="container">
            <div class="">
               <form action="{{ route('subscribe') }}" method="post" enctype="multipart/form-data">
                @csrf
              @if($errors->any('subscribe_email'))
                    <span class="text-center text-danger">
                        {{ $errors->first('subscribe_email') }}
                    </span>
              @endif
                <div class="row">
                    <div class="col-7">
                        <input type="email" name="subscribe_email" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary"> Subscribe  </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
