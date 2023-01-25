<template>
    <td class="border-0 sin">
        <input @click="submit()" type="submit" value="X" class="ekis">
    </td>
</template>

<script>
    export default {
        data() {
            return {

            }
        },
        methods: {
            submit(e) {
                Swal.fire({
                    title: 'Ezabatu nahi duzu?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Bai',
                    denyButtonText: `Ez`,
                }).then((result) => {
                    if (result.isConfirmed) {
                      e.submit();
                        Swal.fire('Ezabatuta!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Ez da ezabatu.', '', 'info')
                    }
                })

            }
        }
    }

</script>
