const radioButtons = document.querySelectorAll('input[name="format"]');

radioButtons.forEach((radioButton) => {
  radioButton.addEventListener('click', (event) => {
    console.log(`Selected format: ${event.target.value}`);
    // Add your code here to handle the selected value
  });
});