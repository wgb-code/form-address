<!DOCTYPE html>
<html lang="pt-br" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário</title>
    <link rel="stylesheet" href="./assets/global.css" />
</head>

<body>
    <header>
        <div id="header-nav">
            <div class="company-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C14.7924 19 17.2029 17.3649 18.3264 15H21H22.5859C21.2801 19.617 17.0351 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C17.0351 1 21.2801 4.38299 22.5859 9H21H18.3264C17.2029 6.63505 14.7924 5 12 5Z" fill="url(#paint0_linear_1_302)" />
                    <defs>
                        <linearGradient id="paint0_linear_1_302" x1="16.6498" y1="1" x2="11.6142" y2="22.959" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9ECBFF" />
                            <stop offset="0.411458" stop-color="#6FA0FF" />
                            <stop offset="1" stop-color="#AF93FF" />
                        </linearGradient>
                    </defs>
                </svg>
                <h1>COMPANY NAME</h1>
            </div>

            <div id="mode-button" onclick="toggleMode()">
                <h1>Dark mode</h1>
                <button id="alter-button">
                    <ion-icon name="moon-sharp" size="small"></ion-icon>
                </button>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="title-page">
            <h2>Profile info</h2>
            <p>
                Fill in the data for profile. It will take a couple of minutes.<br />You
                only need a passport
            </p>
        </div>

        <form action="../app/helpers/address.php" method="POST">
            <div id="form-card">
                <h3>Delivery address</h3>
                <p>Used for shipping orders</p>

                <label for="endereco">Addres</label>
                <input type="text" name="endereco" id="endereco" required/>

                <label for="cidade">City</label>
                <input type="text" name="cidade" id="cidade" required/>

                <div class="address-info">
                    <div class="form-country">
                        <label for="pais">Country</label>
                        <input type="text" name="pais" id="pais" required/>
                    </div>

                    <div class="form-zipcode">
                        <label for="cpf">Zip code</label>
                        <input type="number" name="cep" id="cep" required/>
                    </div>
                </div>
                <label for="opcional">Optional</label>
                <input type="text" name="opcional" id="opcional"/>
            </div>

            <div id="form-button">
                <button type="submit" id="submit" name="submit">
                    <ion-icon name="checkmark" size="small"></ion-icon>Save
                </button>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./assets/global.js"></script>
</body>

</html>