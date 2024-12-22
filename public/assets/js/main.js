function toggleOtherSecteurInput(select) {
    const otherSpecialityContainer = document.getElementById('other-speciality-container');
    if (select.value === 'autre') {
        otherSpecialityContainer.classList.remove('hidden');
    } else {
        otherSpecialityContainer.classList.add('hidden');
    }
}
