<template>


</template>

<script>
    import {
        shallowReadonly
    } from 'vue';


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
