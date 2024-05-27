import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

document.addEventListener('DOMContentLoaded', function () {
    const allDeleteButtons = document.querySelectorAll('.js-delete-btn');
    let formToSubmit;

    allDeleteButtons.forEach((deleteButton) => {
        deleteButton.addEventListener('click', function(event) {
            event.preventDefault();

            const deleteModal = document.getElementById('confirmDeleteModal');
            const comicTitle = this.dataset.comicTitle;
            deleteModal.querySelector('.modal-body').innerHTML = `Sei sicuro di voler eliminare permanentemente il fumetto "${comicTitle}"?`;

            const bsDeleteModal = new bootstrap.Modal(deleteModal);
            bsDeleteModal.show();

            formToSubmit = this.closest('form');
        });
    });

    const modalConfirmDeletionBtn = document.getElementById('modal-confirm-deletion');
    modalConfirmDeletionBtn.addEventListener('click', function() {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });
});