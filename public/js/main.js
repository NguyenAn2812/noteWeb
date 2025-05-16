// Auto-save functionality
let autoSaveTimeout;
const autoSaveDelay = 1000; // 1 second

function setupAutoSave() {
    const noteContent = document.querySelector('#note-content');
    if (noteContent) {
        noteContent.addEventListener('input', function () {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(saveNote, autoSaveDelay);
        });
    }
}

function saveNote() {
    const noteContent = document.querySelector('#note-content');
    const noteId = document.querySelector('#note-id').value;

    if (noteContent && noteId) {
        fetch('/note-taking-app/notes/save', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                id: noteId,
                content: noteContent.value
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification('Note saved successfully!', 'success');
                } else {
                    showNotification('Error saving note!', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Error saving note!', 'error');
            });
    }
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type === 'success' ? 'success' : 'danger'} notification`;
    notification.textContent = message;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    setupAutoSave();
}); 