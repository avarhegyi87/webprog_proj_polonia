<<<<<<< Updated upstream
<h1 class="intro">Írjon nekünk...</h1>
    <form name="kapcsolat" action="?page=ujuzenet" onsubmit="return ellenoriz();" method="post">

        <div class="form">
          
            <input type="text" id="nev" name="nev" size="30" maxlength="40" placeholder="Név..">
            
            <input type="text" id="email" name="email" size="30" maxlength="40" placeholder="E-mail cím..">
        
            <textarea id="szoveg" name="szoveg" cols="30" rows="10" placeholder="Ide írja üzenetét.."></textarea>
            <br>
            <input id="kuld" type="submit" value="Küld">
            <button onclick="ellenoriz();" type="button">Ellenőriz</button>
        </div>
    </form>
=======
<h1>Kapcsolat</h1>

 <form name="kapcsolat" action="?page=ujuzenet" onsubmit="return ellenoriz();" method="post">
 <div>

 <label><input type="text" id="nev" name="nev" size="20" maxlength="40">Név (minimum 5 
karakter): </label>
 <br/>
 <label><input type="text" id="email" name="email" size="30" maxlength="40">E-mail 
(kötelező): </label>
 <br/>
 <label> <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea> Üzenet 
(kötelező): </label>
 <br/>

 <input id="kuld" type="submit" value="Küld">

 <button onclick="ellenoriz();" type="button">Ellenőriz</button>
 </div>
 </form>
>>>>>>> Stashed changes
