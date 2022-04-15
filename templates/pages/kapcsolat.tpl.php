<head>
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<h1>Kapcsolat</h1>
<form name="kapcsolatsz" action="?oldal=kapcsolatsz" method="post">
    <div>
        <label>Név:<br><input type="text" id="nev" name="nev" size="30" maxlength="40"></label>
        <br/>
        <label>E-mail:<br><input type="text" id="email" name="email" size="30" maxlength="40"></label>
        <br/>
        <label>Tárgy: <br><input type="text" id="targy" name="targy" size="30" maxlength="40"></label>
        <br/>
        <label>Üzenet: <br>
        <textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea>
        </label>
        <br/>
        <input class="btn btn-primary" id="kuld" type="submit" value="Küld">
        <button class="btn btn-primary" onclick="ellenoriz();" type="button">Ellenőriz</button>
    </div>
</form>

</body>
</html>
