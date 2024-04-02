<div x-data="{ alert: null }" x-init="() => {
    @if(session('success'))
    alert = { type: 'success', message: '{{ session('success') }}' };
    showAlert(alert);
    @elseif(session('error'))
    alert = { type: 'error', message: '{{ session('error') }}' };
    showAlert(alert);
    @elseif(session('status'))
    alert = { type: 'error', message: '{{ session('status') }}' };
    showAlert(alert);
    @endif
}">
</div>

<script>
    async function showAlert(alert) {
        const toast = window.Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            padding: '2em',
        });
        toast.fire({
            icon: alert.type === 'success' ? 'success' : alert.type === 'error' ? 'error' : 'info',
            title: alert.message,
            padding: '2em',
        });
    }
</script>
