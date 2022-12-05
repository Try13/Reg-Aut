async function sendForm(form) {
	let response = await fetch("php/auth_obr.php", {
		method: "POST",
		body: new FormData(form),
	});
	let result = await response.text();
	if (result == "ok") {
		location.href = "lk.php";
	} else {
		info.innerHTML = "Такого пользователя не существует";
	}
}
