function checkSubmit (thisForm) {
	if (thisForm.LastName.value == '' ) {
		alert('Укажите Вашу фамилию');
		return false;
	}
	if (thisForm.FirstName.value == '' ) {
		alert('Укажите Ваше имя');
		return false;
	}
	if (thisForm.DateOfBirth.value == '' ) {
		alert('Укажите Вашу дату рождения');
		return false;
	}
	if (thisForm.Email.value == '' ) {
		alert('Укажите Вашу почту');
		return false;
	}
	if (thisForm.Phone.value == '' ) {
		alert('Укажите Ваш номер телефона');
		return false;
	}
	if (thisForm.Login.value == '' ) {
	alert('Укажите Ваш логин');
	return false;
	}
	if (thisForm.Password.value == '' ) {
		alert('Укажите Ваш пароль');
		return false;
	}
	if (thisForm.Password.value != thisForm.RepeatPassword.value ) {
		alert('Пароли не совпадают');
		return false;
	}
	return true;
}