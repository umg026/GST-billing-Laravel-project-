<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ANDEV WEB</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-image: url("https://t4.ftcdn.net/jpg/04/61/47/03/360_F_461470323_6TMQSkCCs9XQoTtyer8VCsFypxwRiDGU.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    section {
        position: relative;
        max-width: 400px;
        background-color: transparent;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        backdrop-filter: blur(55px);
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem 3rem;
    }

    h1 {
        font-size: 2rem;
        color: #fff;
        text-align: center;
    }

    .inputbox {
        position: relative;
        margin: 30px 0;
        max-width: 310px;
        border-bottom: 2px solid #fff;
    }

    .inputbox label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        color: #fff;
        font-size: 1rem;
        pointer-events: none;
        transition: all 0.5s ease-in-out;
    }

    input:focus~label,
    input:valid~label {
        top: -5px;
    }

    .inputbox input {
        width: 100%;
        height: 60px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1rem;
        padding: 0 35px 0 5px;
        color: #fff;
    }

    .inputbox ion-icon {
        position: absolute;
        right: 8px;
        color: #fff;
        font-size: 1.2rem;
        top: 20px;
    }

    .forget {
        margin: 35px 0;
        font-size: 0.85rem;
        color: #fff;
        display: flex;
        justify-content: space-between;

    }

    .forget label {
        display: flex;
        align-items: center;
    }

    .forget label input {
        margin-right: 3px;
    }

    .forget a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .forget a:hover {
        text-decoration: underline;
    }

    button {
        width: 100%;
        height: 40px;
        border-radius: 40px;
        background-color: rgb(255, 255, 255, 1);
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.4s ease;
    }

    button:hover {
        background-color: rgb(255, 255, 255, 0.5);
    }

    .register {
        font-size: 0.9rem;
        color: #fff;
        text-align: center;
        margin: 25px 0 10px;
    }

    .register p a {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
    }

    .register p a:hover {
        text-decoration: underline;
    }
    .invalid-feedback{
        color: red;
    }
</style>

<body>
    <section>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>GST billing </h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                    <label for="">Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="">Password</label>
            </div>

            <button type="submit">Login</button>
        </form>
    </section>
</body>

</html>