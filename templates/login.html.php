<div class="bandeau_admin">Mode admin</div>

<div class="container">
    <div class="row login" >
        <div class="col-lg-12">
            
            <h1>Connexion</h1>
            
            <br><br>
            
            <form action="/src/login.php" method="post">
                
                <table>
                    <tr>
                        <div>
                            <td><label for="email">Email:</label></td>
                            <td><input type="text" name="email" id="email"></td>
                        </div>
                    </tr>
            
                    <tr>
                        <div>
                            <td><label for="password">Mot de passe: </label></td>
                            <td><input type="password" name="password" id="password"></td>
                        </div>
                    </tr>
                </table>
                
                <div>
                    <input type="submit" name="login" value="Log in" class="bouton_valider">
                </div>
                
                <div class="g-recaptcha" id="captcha" data-sitekey="6Lf0rjcUAAAAAOxLcZMtWwz4H6mHb16OaDKhkOq8"></div>
            
            </form>
            
            <br><br>
        
        </div>
    </div>
</div>