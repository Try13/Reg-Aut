async function sendForm(form) {
	let response = await fetch("php/reg_obr.php", {
		method: "POST",
		body: new FormData(form),
	});
	let result = await response.text();
	if (result == "ok") {
		alert("Регистрация нового пользователя прошла успешно!");
	} else {
		info.innerHTML = "Такой пользователь уже существует";
	}
}
