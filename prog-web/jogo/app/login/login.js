function validator(frm) {
    /*
    o parâmetro frm desta função significa: this.form,
    pois a chamada da função - validaForm(this) foi
    definida na tag form.
    */
    if(frm.usuario.value == "" || frm.usuario.value == null || frm.usuario.value.lenght < 4) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, indique o seu nome.");
        //Foi definido um focus no campo.
        frm.usuario.focus();
        //o form não é enviado.
        return false;
    }
}