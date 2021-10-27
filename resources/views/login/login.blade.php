<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    <header class="loveapp">
        <span class="loveapp-title">LoveAPP <i class="fa fa-heart" aria-hidden="true"></i></span>
    </header>
    <div class="container-lg love-container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Usuário:</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fa fa-user"></i></span>
                                            <input type="text" name="usuario" class="form-control form-control-lg"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Senha:</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon2"><i
                                                    class="fa fa-lock"></i></span>
                                            <input type="password" name="senha" class="form-control form-control-lg"
                                                aria-label="Username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Sign In &emsp; <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
