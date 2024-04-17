window.onload = function() {
    var avisoCookies = document.getElementById('aviso-cookies');
    var btnAceptarCookies = document.getElementById('btn-aceptar-cookies');

    // Verifica si el consentimiento ya fue aceptado
    if (!localStorage.getItem('aceptarCookies')) {
        avisoCookies.style.display = 'block';
    }

    // Al hacer clic en el botón de aceptar
    btnAceptarCookies.onclick = function() {
        avisoCookies.style.display = 'none';
        localStorage.setItem('aceptarCookies', 'true');
    }
}