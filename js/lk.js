let edit_buttons = document.querySelectorAll(".edit_btn");
let save_buttons = document.querySelectorAll(".save_btn");
let cancel_buttons = document.querySelectorAll(".cancel_btn");

for (let i = 0; i < edit_buttons.length; i++) {
	let inputValue = edit_buttons[i].previousElementSibling.innerText;
	edit_buttons[i].addEventListener("click", () => {
		edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
		save_buttons[i].hidden = false;
		cancel_buttons[i].hidden = false;
		edit_buttons[i].hidden = true;
	});
	cancel_buttons[i].addEventListener("click", () => {
		edit_buttons[i].previousElementSibling.innerText = inputValue;
		save_buttons[i].hidden = true;
		cancel_buttons[i].hidden = true;
		edit_buttons[i].hidden = false;
	});
	save_buttons[i].addEventListener("click", async () => {
		let newInputValue = edit_buttons[i].previousElementSibling.firstElementChild.value;
		edit_buttons[i].previousElementSibling.innerText = newInputValue;
		save_buttons[i].hidden = true;
		cancel_buttons[i].hidden = true;
		edit_buttons[i].hidden = false;

		let formData = new FormData();
		formData.append("value", newInputValue);
		formData.append("item", save_buttons[i].dataset.item);

		let response = await fetch("/php/lk_obr.php", {
			method: "POST",
			body: formData,
		});
	});
}
