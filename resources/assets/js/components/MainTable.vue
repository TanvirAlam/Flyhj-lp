<template>
    <div>
        <table>
            <tbody>
            <transition name="fade">
                <table-row></table-row>
            </transition>
                
            </tbody>
        </table>
    </div>
</template>
<script>
import TableRow from './TableRow'

    export default {
        components: {
            TableRow
        }
    }
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.25s ease-out;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>