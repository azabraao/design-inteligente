function validar() {

	var nome = form1.nome.value;
	var email = form1.email.value;
	var senha = form1.senha.value;
	var rep_senha = form1.rep_senha.value;
	var filtro_mail = /^.+@.+\..{2,3}$/;

	var ponto = email.indexOf(".");
	var arroba = email.indexOf("@");

	if (nome == "") {

		alert('Preencha o campo com seu nome.');
		document.form1.nome.focus();
		return false;

	}

	if (nome.length < 5) {

		alert('Digite seu nome completo.');
		document.form1.nome.focus();
		return false;

	}

	if((ponto <= 0) || (arroba <= 0)){

		alert("Preencha o e-mail corretamente.");
		document.form1.email.focus();
		return false;

	}

	if (senha == ""){

		alert('Preencha o campo de senha.');
		document.form1.senha.focus();
		return false;

	}

	if (rep_senha == ""){

		alert('Preencha o campo de confirmação de senha.');
		document.form1.senha.focus();
		return false;

	}

	if (senha != rep_senha) {

		alert('As senhas não podem ser diferentes.');
		document.form1.senha.focus();
		return false;

	}

}
