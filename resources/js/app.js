import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

document.addEventListener('DOMContentLoaded', function () {
    const allDeleteButtons = document.querySelectorAll('.js-delete-btn');
    allDeleteButtons.forEach((deleteButton) => {
        deleteButton.addEventListener('click', function(event) {
            event.preventDefault();
            
            const deleteModal = document.getElementById('confirmDeleteModal');
            const comicTitle = this.dataset.comicTitle;
            deleteModal.querySelector('.modal-body').innerHTML = `Sei sicuro di voler eliminare permanentemente il fumetto "${comicTitle}"?`;

            const bsDeleteModal = new bootstrap.Modal(deleteModal);
            bsDeleteModal.show();

            const modalConfirmDeletionBtn = document.getElementById('modal-confirm-deletion');
            modalConfirmDeletionBtn.onclick = () => {
                const comicId = this.dataset.comicId;
                document.getElementById(`delete-form-${comicId}`).submit();
            };
        });
    });
});