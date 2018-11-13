<?php if(empty($_COOKIE['eu-cookies'])) { ?>
<script>
    function euCookiesButtonOk() {
        var d = new Date();
        d.setTime(d.getTime() + (15552000000)); //180*24*60*60*1000 = 180 dní
        var expires = "expires=" + d.toUTCString();
        document.cookie = "eu-cookies=1; " + expires + "; path=/";

        $('.eu-cookies').slideUp();
    }
</script>
<div class="eu-cookies container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button type="button" onclick="euCookiesButtonOk();">ROZUMÍM</button>
                Vážený návštěvníku, tato stránka používá soubory cookies k poskytování služeb a analýze návštěvnosti.
                Prohlížením tohoto webu souhlasíte s využíváním těchto souborů.
                <a href="https://www.google.com/policies/technologies/cookies/" target="_blank">Další informace</a>
            </div>
        </div>
    </div>
</div>
<noscript>
    <style>.eu-cookies {
            display: none
        }</style>
</noscript>
<?php } ?>