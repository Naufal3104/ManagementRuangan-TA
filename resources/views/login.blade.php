
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    @include('css')

</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-left">
                                        @if (count($errors) > 0)
                                            <div class = "alert alert-danger">
                                                <ul>
                                                @foreach($errors->all() as $error)
                                                    <a>{{ $error }}</a>
                                                @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                <div class="p-5">
                                    <form class="user" action='login' method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user"
                                                id="name" name="name"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block">
                                        <a href="/" class="btn btn-danger btn-user btn-block">
                                            Cancel
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    @include('script')
</body>