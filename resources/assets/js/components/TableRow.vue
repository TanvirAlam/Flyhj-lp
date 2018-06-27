<template>
<div>
   <tr v-for="(option, index) in optionData" :key="option.id">
        <td v-text="option.id"></td>
        <td v-text="option.key"></td>
        <td v-text="option.value"></td>
        <td>
            <button class="button is-small">
                <span class="icon is-small">
                    <i class="fas fa-pencil-alt"></i>
                </span>
            </button>
            <button class="button is-small" @click="deleteOption(index, option.id)">
                <span class="icon is-small">
                    <i class="fas fa-trash-alt"></i>
                </span>
            </button>
        </td>
    </tr>
</div>
</template>

<script>
    export default {
        data() {
            return {
                optionData: []
            };
        },

        created() {
            this.fetchOptions();
        },

        methods: {
            fetchOptions() {
                axios
                    .get("/api/options")
                    .then(response => {
                        this.optionData = response.data
                    });
            },

            deleteOption(index, id) {
                axios
                    .delete("/api/options/" + id)
                    .catch(error => {
                        console.log(error.response.data)
                    })
                    .then(response => {
                        this.optionData.splice(index, 1)

                        //this.$emit("deleted") 
                    });       
            }
        }
    }
</script>
